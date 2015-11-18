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

        // StronaGlowna
        if ($pathinfo === '/StronaGlowna') {
            return array (  '_controller' => 'AppBundle\\Controller\\GlownaController::newAction',  '_route' => 'StronaGlowna',);
        }

        // NoweOgloszenie
        if ($pathinfo === '/NoweOgloszenie') {
            return array (  '_controller' => 'AppBundle\\Controller\\NoweOgloszenieController::newAction',  '_route' => 'NoweOgloszenie',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
