<?php

namespace Eshop\ShopBundle\Controller;

use Doctrine\ORM\EntityManager;
use Eshop\ShopBundle\Entity\Category;
use Eshop\ShopBundle\Entity\Manufacturer;
use Eshop\ShopBundle\Entity\Product;
use Eshop\ShopBundle\Entity\StaticPage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Skies\QRcodeBundle\Generator\Generator;
 
class CatalogController extends Controller
{
    /**
     * Lists all Category entities.
     *
     * @Route("/", name="index_main")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $newsRepository = $em->getRepository('ShopBundle:News');
        $slideRepository = $em->getRepository('ShopBundle:Slide');
        $ads= $em->getRepository('ShopBundle:Ads');
        $productRepository = $em->getRepository('ShopBundle:Product');

        $c = $em->getRepository( 'ShopBundle:Category' );
        $cat =  $c->createQueryBuilder( 'p' )
        ->select( 'p' )->setMaxResults(3) ->setFirstResult(0) ->getQuery()
        ->getResult();
            
        
        // $catts = $cat->getResult();
        // $catss= $cat->setMaxResults(5)->getOneOrNullResult();
        //sorted by order number
        $Ads= $ads->findBy(['enabled' => true], ['slideOrder' => 'ASC']);
        $slides = $slideRepository->findBy(['enabled' => true], ['slideOrder' => 'ASC']);
        $lastNews = $newsRepository->getLastNews();
        $latestProducts = $productRepository->getLatest(3, $this->getUser());
        $featuredProducts = $productRepository->getFeatured(12, $this->getUser());
        
        $repo = $em->getRepository( 'ShopBundle:Product' );
        $results = $repo->createQueryBuilder( 'a' )
                        ->select( 'a.dateUpdated' )
                        ->leftJoin(
                            'ShopBundle:Product',
                            'b',
                            'WITH',
                            'a.name = b.name AND a.dateUpdated < b.dateUpdated'
                        )
                        ->where( 'b.dateUpdated IS NULL' )
                        ->orderBy( 'a.dateUpdated','DESC' )
                        ->getQuery()
                        ->getResult();

$options = array(
    'code'   => 'string to encode',
    'type'   => 'qrcode',
    'format' => 'html',
);

$generator =  new Generator();
$barcode = $generator->generate($options);



        return ['code'=>$barcode,
            'tttt'=>$results,
            'featured_products' => $featuredProducts,
                'latest_products' => $latestProducts,
                'news' => $lastNews,
                'slides' => $slides,
                'Ads' => $Ads,
                'catss'=>$cat
        ];
    }

    /**
     * @Route("/category/{slug}", name="category")
     * @Method("GET")
     * @Template()
     */
    public function categoryAction(Request $request, Category $category)
    {
        /**
         * @var $em EntityManager
         */
        $em = $this->getDoctrine()->getManager();
        $paginator = $this->get('knp_paginator');
        $productRepository = $em->getRepository('ShopBundle:Product');

        $productsQuery = $productRepository->findByCategoryQB($category, $this->getUser());
        $limit = $this->getParameter('category_products_pagination_count');
        $products = $paginator->paginate(
            $productsQuery,
            $request->query->getInt('page', 1),
            $limit
        );

        return ['category' => $category,
                'products' => $products,
                'sortedby' => $this->get('app.page_utilities')->getSortingParamName($request)
        ];
    }

    /**
     * @Route("/manufacturer/{slug}", name="manufacturer")
     * @Method("GET")
     * @Template()
     */
    public function manufacturerAction(Request $request, Manufacturer $manufacturer)
    {
        /**
         * @var $em EntityManager
         */
        $em = $this->getDoctrine()->getManager();
        $paginator = $this->get('knp_paginator');
        $productRepository = $em->getRepository('ShopBundle:Product');

        $productsQuery = $productRepository->findByManufacturerQB($manufacturer, $this->getUser());
        $limit = $this->getParameter('category_products_pagination_count');
        $products = $paginator->paginate(
            $productsQuery,
            $request->query->getInt('page', 1),
            $limit
        );

        return ['manufacturer' => $manufacturer,
                'products' => $products,
                'sortedby' => $this->get('app.page_utilities')->getSortingParamName($request)
        ];
    }

    /**
     * @Route("/product/{slug}", name="show_product")
     * @Method("GET")
     * @Template()
     */
    public function showProductAction(Product $product)
    {
        return ['product' => $product];
    }

    /**
     * Lists news entities.
     *
     * @Route("/news", name="news")
     * @Method("GET")
     * @Template()
     */
    public function newsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $paginator = $this->get('knp_paginator');
        $newsRepository = $em->getRepository('ShopBundle:News');
        $limit = $this->getParameter('products_pagination_count');

        $query = $newsRepository->getNewsQB();

        $news = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $limit
        );

        return ['news' => $news];
    }

    /**
     * search product by title or description
     *
     * @Route("/search", name="search")
     * @Method("GET")
     * @Template()
     */
    public function searchProductAction(Request $request)
    {
        $searchResults = [];

        $em = $this->getDoctrine()->getManager();
        $paginator = $this->get('knp_paginator');
        $productRepository = $em->getRepository('ShopBundle:Product');

        $search_phrase = 'search';
        if ($request->getMethod() == 'GET') {
            $search_phrase = trim($request->get('search_phrase'));
            $searchWords = explode(' ', $search_phrase);

            $qb = $productRepository->getSearchQB($searchWords, $this->getUser());

            $limit = $this->getParameter('search_pagination_count');
            $searchResults = $paginator->paginate(
                $qb,
                $request->query->getInt('page', 1),
                $limit
            );
        }
        return ['products' => $searchResults,
                'search_phrase' => $search_phrase,
                'sortedby' => $this->get('app.page_utilities')->getSortingParamName($request)
        ];
    }

    /**
     * Shows static page.
     *
     * @Route("/{slug}.html",name="show_static_page")
     * @Method("GET")
     * @Template()
     */
    public function showStaticPageAction(StaticPage $page)
    {
        return ['page' => $page];
    }
}
