<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // studio_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'studio_site_homepage');
            }

            return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::indexAction',  '_route' => 'studio_site_homepage',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // studio_site_profil
            if ($pathinfo === '/profil') {
                return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::profilAction',  '_route' => 'studio_site_profil',);
            }

            if (0 === strpos($pathinfo, '/portraits')) {
                // studio_site_portraits
                if ($pathinfo === '/portraits') {
                    return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::portraitsAction',  '_route' => 'studio_site_portraits',);
                }

                // studio_site_kids
                if ($pathinfo === '/portraits/kids') {
                    return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::kidsAction',  '_route' => 'studio_site_kids',);
                }

                // studio_site_adult
                if ($pathinfo === '/portraits/adult') {
                    return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::adultAction',  '_route' => 'studio_site_adult',);
                }

                // studio_site_family
                if ($pathinfo === '/portraits/family') {
                    return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::familyAction',  '_route' => 'studio_site_family',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/wedding')) {
            // studio_site_wedding
            if ($pathinfo === '/wedding') {
                return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::weddingAction',  '_route' => 'studio_site_wedding',);
            }

            // studio_site_day
            if ($pathinfo === '/wedding/day') {
                return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::dayAction',  '_route' => 'studio_site_day',);
            }

            // studio_site_couple
            if ($pathinfo === '/wedding/couple') {
                return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::coupleAction',  '_route' => 'studio_site_couple',);
            }

            // studio_site_group
            if ($pathinfo === '/wedding/group') {
                return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::groupAction',  '_route' => 'studio_site_group',);
            }

        }

        // studio_site_price
        if ($pathinfo === '/price') {
            return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::priceAction',  '_route' => 'studio_site_price',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // studio_site_blog
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::blogAction',  '_route' => 'studio_site_blog',);
            }

            // studio_site_article
            if ($pathinfo === '/blog/article') {
                return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::articleAction',  '_route' => 'studio_site_article',);
            }

        }

        // studio_site_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::contactAction',  '_route' => 'studio_site_contact',);
        }

        // studio_site_legal
        if ($pathinfo === '/legal') {
            return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::legalAction',  '_route' => 'studio_site_legal',);
        }

        // studio_site_cookies
        if ($pathinfo === '/cookies') {
            return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::cookiesAction',  '_route' => 'studio_site_cookies',);
        }

        if (0 === strpos($pathinfo, '/post')) {
            // studio_site_post_add
            if ($pathinfo === '/post/add') {
                return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::postAddAction',  '_route' => 'studio_site_post_add',);
            }

            // studio_site_post_view
            if (0 === strpos($pathinfo, '/post/view') && preg_match('#^/post/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'studio_site_post_view')), array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::postViewAction',));
            }

        }

        // studio_site_comment_form
        if ($pathinfo === '/comment/form') {
            return array (  '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::commentFormAction',  '_route' => 'studio_site_comment_form',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
