<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$a = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/');

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add($a, [0 => 'ROLE_ADMIN'], NULL);
$instance->add($a, [0 => 'ROLE_SELLER'], NULL);

return $instance;
