<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'studio_site_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_profil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::profilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_portraits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::portraitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portraits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_kids' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::kidsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portraits/kids',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_adult' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::adultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portraits/adult',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_family' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::familyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portraits/family',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_wedding' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::weddingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/wedding',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_day' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::dayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/wedding/day',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_couple' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::coupleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/wedding/couple',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_group' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::groupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/wedding/group',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_price' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::priceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/price',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_blog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::blogAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::articleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_legal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::legalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/legal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_cookies' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::cookiesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cookies',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_post_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::postAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/post/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_post_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::postViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/post/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studio_site_comment_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Studio\\SiteBundle\\Controller\\SiteController::commentFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comment/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
