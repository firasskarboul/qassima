<?php

namespace Proxies\__CG__\Eshop\ShopBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \Eshop\ShopBundle\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'slug', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'Dprice', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'metaKeys', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'metaDescription', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'dateCreated', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'Dealdate', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'dateUpdated', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'quantity', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'deleted', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'measureQuantity', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'category', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'manufacturer', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'images', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'productOrders', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'measure', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'favourites', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'featured'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'slug', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'Dprice', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'metaKeys', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'metaDescription', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'dateCreated', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'Dealdate', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'dateUpdated', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'quantity', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'deleted', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'measureQuantity', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'category', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'manufacturer', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'images', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'productOrders', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'measure', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'favourites', '' . "\0" . 'Eshop\\ShopBundle\\Entity\\Product' . "\0" . 'featured'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', []);

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setDprice($Dprice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDprice', [$Dprice]);

        return parent::setDprice($Dprice);
    }

    /**
     * {@inheritDoc}
     */
    public function getDprice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDprice', []);

        return parent::getDprice();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\Eshop\ShopBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setManufacturer(\Eshop\ShopBundle\Entity\Manufacturer $manufacturer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManufacturer', [$manufacturer]);

        return parent::setManufacturer($manufacturer);
    }

    /**
     * {@inheritDoc}
     */
    public function getManufacturer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getManufacturer', []);

        return parent::getManufacturer();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\Eshop\ShopBundle\Entity\Image $images)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$images]);

        return parent::addImage($images);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\Eshop\ShopBundle\Entity\Image $images)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$images]);

        return parent::removeImage($images);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductOrder(\Eshop\ShopBundle\Entity\OrderProduct $productOrders)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductOrder', [$productOrders]);

        return parent::addProductOrder($productOrders);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductOrder(\Eshop\ShopBundle\Entity\OrderProduct $productOrders)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductOrder', [$productOrders]);

        return parent::removeProductOrder($productOrders);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductOrders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductOrders', []);

        return parent::getProductOrders();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaKeys($metaKeys)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaKeys', [$metaKeys]);

        return parent::setMetaKeys($metaKeys);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaKeys()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaKeys', []);

        return parent::getMetaKeys();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescription($metaDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescription', [$metaDescription]);

        return parent::setMetaDescription($metaDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescription', []);

        return parent::getMetaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity($quantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', [$quantity]);

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setMeasureQuantity($measureQuantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMeasureQuantity', [$measureQuantity]);

        return parent::setMeasureQuantity($measureQuantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeasureQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeasureQuantity', []);

        return parent::getMeasureQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setMeasure(\Eshop\ShopBundle\Entity\Measure $measure = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMeasure', [$measure]);

        return parent::setMeasure($measure);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeasure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeasure', []);

        return parent::getMeasure();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', [$dateCreated]);

        return parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', []);

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDealdate($Dealdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDealdate', [$Dealdate]);

        return parent::setDealdate($Dealdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDealdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDealdate', []);

        return parent::getDealdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateUpdated($dateUpdated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUpdated', [$dateUpdated]);

        return parent::setDateUpdated($dateUpdated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUpdated', []);

        return parent::getDateUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function addFavourite(\Eshop\ShopBundle\Entity\Favourites $favourites)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFavourite', [$favourites]);

        return parent::addFavourite($favourites);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFavourite(\Eshop\ShopBundle\Entity\Favourites $favourites)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFavourite', [$favourites]);

        return parent::removeFavourite($favourites);
    }

    /**
     * {@inheritDoc}
     */
    public function getFavourites()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFavourites', []);

        return parent::getFavourites();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeatured(\Eshop\ShopBundle\Entity\Featured $featured = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeatured', [$featured]);

        return parent::setFeatured($featured);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeatured()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeatured', []);

        return parent::getFeatured();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

}
