<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // hello_the_world
        if ($pathinfo === '/hello-world') {
            return array (  '_controller' => 'Salim\\PlateformeBundle\\Controller\\AdvertController::indexAction',  '_route' => 'hello_the_world',);
        }

        // goodbye_the_world
        if ($pathinfo === '/bye-world') {
            return array (  '_controller' => 'Salim\\PlateformeBundle\\Controller\\AdvertController::indexByeAction',  '_route' => 'goodbye_the_world',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
