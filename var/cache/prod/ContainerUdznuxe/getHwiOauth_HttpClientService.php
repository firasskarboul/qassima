<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.http_client' shared service.

$this->services['hwi_oauth.http_client'] = $instance = new \Buzz\Client\Curl();

$instance->setVerifyPeer(true);
$instance->setTimeout(5);
$instance->setMaxRedirects(5);
$instance->setIgnoreErrors(true);

return $instance;