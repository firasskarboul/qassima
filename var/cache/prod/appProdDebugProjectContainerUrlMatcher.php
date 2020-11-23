<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_change_password;
            }

            return $ret;
        }
        not_fos_user_change_password:

        // show_product
        if (0 === strpos($pathinfo, '/product') && preg_match('#^/product/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'show_product']), array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CatalogController::showProductAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_show_product;
            }

            return $ret;
        }
        not_show_product:

        if (0 === strpos($pathinfo, '/ajax_')) {
            // ajax_like
            if ('/ajax_like' === $pathinfo) {
                $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\AjaxController::likeAction',  '_route' => 'ajax_like',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_ajax_like;
                }

                return $ret;
            }
            not_ajax_like:

            // ajax_is_liked_product
            if ('/ajax_is_liked_product' === $pathinfo) {
                $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\AjaxController::checkIsLikedAction',  '_route' => 'ajax_is_liked_product',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_ajax_is_liked_product;
                }

                return $ret;
            }
            not_ajax_is_liked_product:

            // ajax_get_last_seen_products
            if ('/ajax_get_last_seen_products' === $pathinfo) {
                $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\AjaxController::getLastSeenProductsAction',  '_route' => 'ajax_get_last_seen_products',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_ajax_get_last_seen_products;
                }

                return $ret;
            }
            not_ajax_get_last_seen_products:

        }

        // showcart
        if ('/showcart' === $pathinfo) {
            $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CartController::showCartAction',  '_route' => 'showcart',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_showcart;
            }

            return $ret;
        }
        not_showcart:

        // search
        if ('/search' === $pathinfo) {
            $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CatalogController::searchProductAction',  '_route' => 'search',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_search;
            }

            return $ret;
        }
        not_search:

        // orderform
        if ('/orderform' === $pathinfo) {
            $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CartController::orderFormAction',  '_route' => 'orderform',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_orderform;
            }

            return $ret;
        }
        not_orderform:

        // cartisempty
        if ('/cartisempty' === $pathinfo) {
            $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CartController::cartIsEmptyAction',  '_route' => 'cartisempty',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_cartisempty;
            }

            return $ret;
        }
        not_cartisempty:

        // category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'category']), array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CatalogController::categoryAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_category;
            }

            return $ret;
        }
        not_category:

        // index_main
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CatalogController::indexAction',  '_route' => 'index_main',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_index_main;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index_main'));
            }

            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_index_main;
            }

            return $ret;
        }
        not_index_main:

        // manufacturer
        if (0 === strpos($pathinfo, '/manufacturer') && preg_match('#^/manufacturer/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'manufacturer']), array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CatalogController::manufacturerAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_manufacturer;
            }

            return $ret;
        }
        not_manufacturer:

        // news
        if ('/news' === $pathinfo) {
            $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CatalogController::newsAction',  '_route' => 'news',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_news;
            }

            return $ret;
        }
        not_news:

        // show_static_page
        if (preg_match('#^/(?P<slug>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'show_static_page']), array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\CatalogController::showStaticPageAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_show_static_page;
            }

            return $ret;
        }
        not_show_static_page:

        // Contact_new
        if ('/Contact' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\ContactController::newAction',  '_route' => 'Contact_new',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_Contact_new;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'Contact_new'));
            }

            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_Contact_new;
            }

            return $ret;
        }
        not_Contact_new:

        // favourites
        if ('/favourites' === $pathinfo) {
            $ret = array (  '_controller' => 'Eshop\\ShopBundle\\Controller\\ProfileController::favouritesAction',  '_route' => 'favourites',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_favourites;
            }

            return $ret;
        }
        not_favourites:

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_index
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_admin_index;
                }

                return $ret;
            }
            not_admin_index:

            if (0 === strpos($pathinfo, '/admin/Ads')) {
                // admin_Ads
                if ('/admin/Ads' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\AdsController::indexAction',  '_route' => 'admin_Ads',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_Ads;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_Ads'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_Ads;
                    }

                    return $ret;
                }
                not_admin_Ads:

                // admin_Ads_new
                if ('/admin/Ads/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\AdsController::newAction',  '_route' => 'admin_Ads_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_Ads_new;
                    }

                    return $ret;
                }
                not_admin_Ads_new:

                // admin_Ads_show
                if (preg_match('#^/admin/Ads/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_Ads_show']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\AdsController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_Ads_show;
                    }

                    return $ret;
                }
                not_admin_Ads_show:

                // admin_Ads_edit
                if (preg_match('#^/admin/Ads/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_Ads_edit']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\AdsController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_Ads_edit;
                    }

                    return $ret;
                }
                not_admin_Ads_edit:

                // admin_Ads_delete
                if (preg_match('#^/admin/Ads/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_Ads_delete']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\AdsController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_admin_Ads_delete;
                    }

                    return $ret;
                }
                not_admin_Ads_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/category')) {
                // admin_category
                if ('/admin/category' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\CategoryController::indexAction',  '_route' => 'admin_category',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_category;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_category'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_category;
                    }

                    return $ret;
                }
                not_admin_category:

                // admin_category_new
                if ('/admin/category/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\CategoryController::newAction',  '_route' => 'admin_category_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_category_new;
                    }

                    return $ret;
                }
                not_admin_category_new:

                // admin_category_show
                if (preg_match('#^/admin/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_category_show']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\CategoryController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_category_show;
                    }

                    return $ret;
                }
                not_admin_category_show:

                // admin_category_edit
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_category_edit']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\CategoryController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_category_edit;
                    }

                    return $ret;
                }
                not_admin_category_edit:

                // admin_category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_category_delete']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\CategoryController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_admin_category_delete;
                    }

                    return $ret;
                }
                not_admin_category_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/featured')) {
                // admin_featured
                if ('/admin/featured' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\FeaturedController::indexAction',  '_route' => 'admin_featured',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_featured;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_featured'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_featured;
                    }

                    return $ret;
                }
                not_admin_featured:

                // admin_featured_product_edit_ajax
                if ('/admin/featured/featured_product_edit_ajax' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\FeaturedController::featuredProductEditAction',  '_route' => 'admin_featured_product_edit_ajax',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_featured_product_edit_ajax;
                    }

                    return $ret;
                }
                not_admin_featured_product_edit_ajax:

                // admin_featured_order_edit_ajax
                if ('/admin/featured/featured_order_edit_ajax' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\FeaturedController::featuredOrderEditAction',  '_route' => 'admin_featured_order_edit_ajax',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_featured_order_edit_ajax;
                    }

                    return $ret;
                }
                not_admin_featured_order_edit_ajax:

            }

            elseif (0 === strpos($pathinfo, '/admin/manufacturer')) {
                // admin_manufacturer
                if ('/admin/manufacturer' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ManufacturerController::indexAction',  '_route' => 'admin_manufacturer',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_manufacturer;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_manufacturer'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_manufacturer;
                    }

                    return $ret;
                }
                not_admin_manufacturer:

                // admin_manufacturer_new
                if ('/admin/manufacturer/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ManufacturerController::newAction',  '_route' => 'admin_manufacturer_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_manufacturer_new;
                    }

                    return $ret;
                }
                not_admin_manufacturer_new:

                // admin_manufacturer_show
                if (preg_match('#^/admin/manufacturer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_manufacturer_show']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ManufacturerController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_manufacturer_show;
                    }

                    return $ret;
                }
                not_admin_manufacturer_show:

                // admin_manufacturer_edit
                if (preg_match('#^/admin/manufacturer/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_manufacturer_edit']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ManufacturerController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_manufacturer_edit;
                    }

                    return $ret;
                }
                not_admin_manufacturer_edit:

                // admin_manufacturer_delete
                if (preg_match('#^/admin/manufacturer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_manufacturer_delete']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ManufacturerController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_admin_manufacturer_delete;
                    }

                    return $ret;
                }
                not_admin_manufacturer_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/measure')) {
                // admin_measure
                if ('/admin/measure' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\MeasureController::indexAction',  '_route' => 'admin_measure',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_measure;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_measure'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_measure;
                    }

                    return $ret;
                }
                not_admin_measure:

                // admin_measure_new
                if ('/admin/measure/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\MeasureController::newAction',  '_route' => 'admin_measure_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_measure_new;
                    }

                    return $ret;
                }
                not_admin_measure_new:

                // admin_measure_show
                if (preg_match('#^/admin/measure/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_measure_show']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\MeasureController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_measure_show;
                    }

                    return $ret;
                }
                not_admin_measure_show:

                // admin_measure_edit
                if (preg_match('#^/admin/measure/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_measure_edit']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\MeasureController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_measure_edit;
                    }

                    return $ret;
                }
                not_admin_measure_edit:

                // admin_measure_delete
                if (preg_match('#^/admin/measure/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_measure_delete']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\MeasureController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_admin_measure_delete;
                    }

                    return $ret;
                }
                not_admin_measure_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin_news')) {
                // admin_news
                if ('/admin_news' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\NewsController::indexAction',  '_route' => 'admin_news',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_news;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_news'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_news;
                    }

                    return $ret;
                }
                not_admin_news:

                // admin_news_new
                if ('/admin_news/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\NewsController::newAction',  '_route' => 'admin_news_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_news_new;
                    }

                    return $ret;
                }
                not_admin_news_new:

                // admin_news_show
                if (preg_match('#^/admin_news/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_news_show']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\NewsController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_news_show;
                    }

                    return $ret;
                }
                not_admin_news_show:

                // admin_news_edit
                if (preg_match('#^/admin_news/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_news_edit']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\NewsController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_news_edit;
                    }

                    return $ret;
                }
                not_admin_news_edit:

                // admin_news_delete
                if (preg_match('#^/admin_news/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_news_delete']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\NewsController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_admin_news_delete;
                    }

                    return $ret;
                }
                not_admin_news_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/orders')) {
                // admin_orders
                if ('/admin/orders' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\OrdersController::indexAction',  '_route' => 'admin_orders',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_orders;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_orders'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_orders;
                    }

                    return $ret;
                }
                not_admin_orders:

                // admin_order_show
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_order_show']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\OrdersController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_order_show;
                    }

                    return $ret;
                }
                not_admin_order_show:

                // admin_order_delete
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_order_delete']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\OrdersController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_admin_order_delete;
                    }

                    return $ret;
                }
                not_admin_order_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/product')) {
                // admin_product
                if ('/admin/product' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ProductController::indexAction',  '_route' => 'admin_product',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_product;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_product'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_product;
                    }

                    return $ret;
                }
                not_admin_product:

                // admin_product_new
                if ('/admin/product/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ProductController::newAction',  '_route' => 'admin_product_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_product_new;
                    }

                    return $ret;
                }
                not_admin_product_new:

                // admin_product_show
                if (preg_match('#^/admin/product/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_show']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ProductController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_product_show;
                    }

                    return $ret;
                }
                not_admin_product_show:

                // admin_product_edit
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_edit']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ProductController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_product_edit;
                    }

                    return $ret;
                }
                not_admin_product_edit:

                // admin_product_delete
                if (preg_match('#^/admin/product/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_delete']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\ProductController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_admin_product_delete;
                    }

                    return $ret;
                }
                not_admin_product_delete:

                // remove_image
                if ('/admin/product/remove_image' === $pathinfo) {
                    $ret = array (  '_format' => 'json',  '_controller' => 'Eshop\\AdminBundle\\Controller\\ProductController::removeImageAction',  '_route' => 'remove_image',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_remove_image;
                    }

                    return $ret;
                }
                not_remove_image:

            }

            elseif (0 === strpos($pathinfo, '/admin/s')) {
                if (0 === strpos($pathinfo, '/admin/settings')) {
                    // admin_settings
                    if ('/admin/settings' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\SettingsController::indexAction',  '_route' => 'admin_settings',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_settings;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_settings'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_settings;
                        }

                        return $ret;
                    }
                    not_admin_settings:

                    // admin_settings_edit
                    if ('/admin/settings/settings_edit' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\SettingsController::settingsEditAction',  '_route' => 'admin_settings_edit',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_settings_edit;
                        }

                        return $ret;
                    }
                    not_admin_settings_edit:

                }

                elseif (0 === strpos($pathinfo, '/admin/slide')) {
                    // admin_slide
                    if ('/admin/slide' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\SlideController::indexAction',  '_route' => 'admin_slide',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_slide;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_slide'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_slide;
                        }

                        return $ret;
                    }
                    not_admin_slide:

                    // admin_slide_new
                    if ('/admin/slide/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\SlideController::newAction',  '_route' => 'admin_slide_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_admin_slide_new;
                        }

                        return $ret;
                    }
                    not_admin_slide_new:

                    // admin_slide_show
                    if (preg_match('#^/admin/slide/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_slide_show']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\SlideController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_slide_show;
                        }

                        return $ret;
                    }
                    not_admin_slide_show:

                    // admin_slide_edit
                    if (preg_match('#^/admin/slide/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_slide_edit']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\SlideController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_admin_slide_edit;
                        }

                        return $ret;
                    }
                    not_admin_slide_edit:

                    // admin_slide_delete
                    if (preg_match('#^/admin/slide/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_slide_delete']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\SlideController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_admin_slide_delete;
                        }

                        return $ret;
                    }
                    not_admin_slide_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/staticpage')) {
                    // admin_staticpage
                    if ('/admin/staticpage' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\StaticPageController::indexAction',  '_route' => 'admin_staticpage',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_staticpage;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_staticpage'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_staticpage;
                        }

                        return $ret;
                    }
                    not_admin_staticpage:

                    // admin_staticpage_new
                    if ('/admin/staticpage/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\StaticPageController::newAction',  '_route' => 'admin_staticpage_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_admin_staticpage_new;
                        }

                        return $ret;
                    }
                    not_admin_staticpage_new:

                    // admin_staticpage_show
                    if (preg_match('#^/admin/staticpage/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_staticpage_show']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\StaticPageController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_staticpage_show;
                        }

                        return $ret;
                    }
                    not_admin_staticpage_show:

                    // admin_staticpage_edit
                    if (preg_match('#^/admin/staticpage/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_staticpage_edit']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\StaticPageController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_admin_staticpage_edit;
                        }

                        return $ret;
                    }
                    not_admin_staticpage_edit:

                    // admin_staticpage_delete
                    if (preg_match('#^/admin/staticpage/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_staticpage_delete']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\StaticPageController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_admin_staticpage_delete;
                        }

                        return $ret;
                    }
                    not_admin_staticpage_delete:

                }

            }

            // admin_user_list
            if ('/admin/user' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user_list',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_user_list;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_user_list'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_admin_user_list;
                }

                return $ret;
            }
            not_admin_user_list:

            if (0 === strpos($pathinfo, '/admin/user/user')) {
                // admin_user_info
                if (preg_match('#^/admin/user/user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_info']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\UserController::showUserInfoAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_user_info;
                    }

                    return $ret;
                }
                not_admin_user_info:

                // admin_user_orders
                if (preg_match('#^/admin/user/user/(?P<id>[^/]++)/orders$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_orders']), array (  '_controller' => 'Eshop\\AdminBundle\\Controller\\UserController::showUserOrdersAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_user_orders;
                    }

                    return $ret;
                }
                not_admin_user_orders:

            }

        }

        elseif (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'liip_imagine_filter_runtime']), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_liip_imagine_filter_runtime;
                }

                return $ret;
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'liip_imagine_filter']), array (  '_controller' => 'liip_imagine.controller:filterAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_liip_imagine_filter;
                }

                return $ret;
            }
            not_liip_imagine_filter:

        }

        // _uploader_upload_gallery
        if ('/_uploader/gallery/upload' === $pathinfo) {
            $ret = array (  '_controller' => 'oneup_uploader.controller.gallery:upload',  '_format' => 'json',  '_route' => '_uploader_upload_gallery',);
            if (!in_array($requestMethod, ['POST', 'PUT', 'PATCH'])) {
                $allow = array_merge($allow, ['POST', 'PUT', 'PATCH']);
                goto not__uploader_upload_gallery;
            }

            return $ret;
        }
        not__uploader_upload_gallery:

        if (0 === strpos($pathinfo, '/sitemap.')) {
            // PrestaSitemapBundle_index
            if (preg_match('#^/sitemap\\.(?P<_format>xml)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'PrestaSitemapBundle_index']), array (  '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::indexAction',));
            }

            // PrestaSitemapBundle_section
            if (preg_match('#^/sitemap\\.(?P<name>[^/\\.]++)\\.(?P<_format>xml)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'PrestaSitemapBundle_section']), array (  '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::sectionAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // hwi_oauth_connect
            if ('/login' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_hwi_oauth_connect;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'hwi_oauth_connect'));
                }

                return $ret;
            }
            not_hwi_oauth_connect:

            // hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/login/service') && preg_match('#^/login/service/(?P<service>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'hwi_oauth_connect_service']), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
            }

            // hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/login/registration') && preg_match('#^/login/registration/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'hwi_oauth_connect_registration']), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
            }

            // hwi_oauth_service_redirect
            if (preg_match('#^/login/(?P<service>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'hwi_oauth_service_redirect']), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

            // facebook_login
            if ('/login/check-facebook' === $pathinfo) {
                return ['_route' => 'facebook_login'];
            }

            // google_login
            if ('/login/check-google' === $pathinfo) {
                return ['_route' => 'google_login'];
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
