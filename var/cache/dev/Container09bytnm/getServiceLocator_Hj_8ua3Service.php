<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.hj.8ua3' shared service.

return $this->services['service_locator.hj.8ua3'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('FlightInfo' => function () {
    $f = function (\AppBundle\Service\FlightInfo $v = null) { return $v; }; return $f(${($_ = isset($this->services['AppBundle\Service\FlightInfo']) ? $this->services['AppBundle\Service\FlightInfo'] : $this->services['AppBundle\Service\FlightInfo'] = new \AppBundle\Service\FlightInfo('km', 'H')) && false ?: '_'});
}));
