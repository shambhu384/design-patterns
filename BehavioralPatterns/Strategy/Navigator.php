<?php

namespace DesignPattern\BehavioralPatterns\Strategy;


class Navigator
{
    /**
     * @var RouteStrategy[]
     */
    private $routeStrategy;

    /**
     * Register RouteStrategy
     *
     * @return void
     */
    public function __construct(RouteStrategy ...$routeStrategy)
    {
        $this->routeStrategy = $routeStrategy
    }
}
