<?php

namespace Njasm\Container\Definition;

use Njasm\Container\ServicesProviderInterface;

class ValueDefinition extends AbstractDefinition
{
    /** @var mixed */
    protected $concrete;

    public function __construct($key, $concrete, ServicesProviderInterface $container)
    {
        parent::__construct($key, $container);
        $this->concrete = $concrete;
    }

    public function build(array $constructor = array(), array $properties = array(), array $methods = array())
    {
        return $this->concrete;
    }
}