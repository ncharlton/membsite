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

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/clip')) {
                // admin_clip_index
                if ('/admin/clip' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_clip_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ClipAdminController::indexAction',  '_route' => 'admin_clip_index',);
                }

                // admin_clip_new
                if ('/admin/clip/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ClipAdminController::newAction',  '_route' => 'admin_clip_new',);
                }

                // admin_clip_delete
                if (preg_match('#^/admin/clip/(?P<slug>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_clip_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\ClipAdminController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/game')) {
                // admin_game_index
                if ('/admin/game' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_game_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\GameAdminController::indexAction',  '_route' => 'admin_game_index',);
                }

                // admin_game_new
                if ('/admin/game/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\GameAdminController::newAction',  '_route' => 'admin_game_new',);
                }

                // admin_game_view
                if (preg_match('#^/admin/game/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_game_view')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\GameAdminController::viewAction',));
                }

                // admin_game_edit
                if (preg_match('#^/admin/game/(?P<slug>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_game_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\GameAdminController::editAction',));
                }

                // admin_game_delete
                if (preg_match('#^/admin/game/(?P<slug>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_game_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\GameAdminController::deleteAction',));
                }

            }

            // admin_main_index
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_main_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\MainAdminController::indexAction',  '_route' => 'admin_main_index',);
            }

            if (0 === strpos($pathinfo, '/admin/news')) {
                // admin_news_index
                if ('/admin/news' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_news_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\NewsAdminController::indexAction',  '_route' => 'admin_news_index',);
                }

                // admin_news_new
                if ('/admin/news/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\NewsAdminController::newAction',  '_route' => 'admin_news_new',);
                }

                // admin_news_edit
                if (preg_match('#^/admin/news/(?P<slug>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\NewsAdminController::editAction',));
                }

                // admin_news_view
                if (preg_match('#^/admin/news/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_view')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\NewsAdminController::viewAction',));
                }

                // admin_news_delete
                if (preg_match('#^/admin/news/(?P<slug>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\NewsAdminController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/user')) {
                // user_admin_index
                if ('/admin/user' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_admin_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::indexAction',  '_route' => 'user_admin_index',);
                }

                // admin_user_view
                if (preg_match('#^/admin/user/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_view')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::viewAction',));
                }

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<user>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::editAction',));
                }

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<user>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::deleteAction',));
                }

            }

        }

        // main_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'main_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::indexAction',  '_route' => 'main_index',);
        }

        // security_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
        }

        // security_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
        }

        // app_user_test
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::testAction',  '_route' => 'app_user_test',);
        }

        // user_register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
