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
    static private $declaredRoutes = array(
        '_assetic_5a72185' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '5a72185',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/5a72185.css',    ),  ),  4 =>   array (  ),),
        '_assetic_5a72185_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '5a72185',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/5a72185_mopabootstrapbundle_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_5a72185_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '5a72185',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/5a72185_eyecon-bootstrap-datepicker_2.css',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_jquery.min_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-tooltip_2.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 2,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-affix_3.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 3,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-alert_4.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 4,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-button_5.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 5,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-carousel_6.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 6,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-collapse_7.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 7,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-dropdown_8.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_8' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 8,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-modal_9.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_9' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 9,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-popover_10.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_10' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 10,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-scrollspy_11.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_11' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 11,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-tab_12.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_12' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 12,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_bootstrap-transition_13.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_13' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 13,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_mopabootstrap-collection_14.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_14' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 14,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_mopabootstrap-subnav_15.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c1a8bcd_15' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c1a8bcd',    'pos' => 15,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c1a8bcd_eyecon-bootstrap-datepicker_16.js',    ),  ),  4 =>   array (  ),),
        '_assetic_d75f95d' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd75f95d',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/screen_diagnostic.css',    ),  ),  4 =>   array (  ),),
        '_assetic_d75f95d_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd75f95d',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/screen_diagnostic_diagnostic_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_ba30769' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ba30769',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/head_compiled.js',    ),  ),  4 =>   array (  ),),
        '_assetic_ba30769_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ba30769',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/head_compiled_modernizr-2.5.3-respond-1.1.0.min_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-tooltip_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-affix_2.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 2,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-alert_3.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 3,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-button_4.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 4,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-carousel_5.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 5,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-collapse_6.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 6,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-dropdown_7.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 7,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-modal_8.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_8' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 8,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-popover_9.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_9' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 9,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-scrollspy_10.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_10' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 10,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-tab_11.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_11' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 11,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_bootstrap-transition_12.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_12' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 12,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_mopabootstrap-collection_13.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_13' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 13,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_mopabootstrap-subnav_14.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_14' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 14,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_html5bp_plugins_15.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_15' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 15,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_html5bp_script_16.js',    ),  ),  4 =>   array (  ),),
        '_assetic_0222968_16' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0222968',    'pos' => 16,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/foot_compiled_eyecon-bootstrap-datepicker_17.js',    ),  ),  4 =>   array (  ),),
        '_assetic_c6025d6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c6025d6',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/c6025d6.css',    ),  ),  4 =>   array (  ),),
        '_assetic_c6025d6_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c6025d6',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/c6025d6_bootstrap_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_c6025d6_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c6025d6',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/c6025d6_bootstrap-responsive_2.css',    ),  ),  4 =>   array (  ),),
        'hezu_web_demo_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Hezu\\Bundle\\WebBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}