<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/css/086eecb')) {
            // _assetic_086eecb
            if ('/css/086eecb.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '086eecb',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_086eecb',);
            }

            // _assetic_086eecb_0
            if ('/css/086eecb_font-awesome.min_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '086eecb',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_086eecb_0',);
            }

            // _assetic_086eecb_1
            if ('/css/086eecb_main_2.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '086eecb',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_086eecb_1',);
            }

        }

        // demo_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'DemoBundle\\Controller\\DefaultController::contactAction',  '_route' => 'demo_contact',);
        }

        // _assetic_b3a044a
        if ('/js/b3a044a.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b3a044a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b3a044a',);
        }

        // _assetic_b3a044a_0
        if ('/js/b3a044a_main_1.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b3a044a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b3a044a_0',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // demo_homepage
        if ('/site' === $pathinfo) {
            return array (  '_controller' => 'DemoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'demo_homepage',);
        }

        // demo_test
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'DemoBundle\\Controller\\DefaultController::testAction',  '_route' => 'demo_test',);
        }

        // hello_money
        if ('/hello-money' === $pathinfo) {
            return array (  '_controller' => 'DemoBundle\\Controller\\AdvertController::indexAction',  '_route' => 'hello_money',);
        }

        if (0 === strpos($pathinfo, '/platform')) {
            // demo_home
            if ('/platform' === $pathinfo) {
                return array (  '_controller' => 'DemoBundle\\Controller\\AdvertController::indexAction',  '_route' => 'demo_home',);
            }

            // demo_view
            if (0 === strpos($pathinfo, '/platform/advert') && preg_match('#^/platform/advert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demo_view')), array (  '_controller' => 'DemoBundle\\Controller\\AdvertController::viewAction',));
            }

            // demo_add
            if ('/platform/add' === $pathinfo) {
                return array (  '_controller' => 'DemoBundle\\Controller\\AdvertController::addAction',  '_route' => 'demo_add',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
