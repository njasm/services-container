<?php

namespace Njasm\Container\Definition\Service;

use Njasm\Container\ServicesProviderInterface;
use Njasm\Container\Definition\DefinitionsMapInterface;

class Request
{
    protected $key;
    protected $container;
    protected $definitionsMap;
    protected $providers;
    
    public function __construct(
        $key,
        DefinitionsMapInterface $definitionsMap,
        \SplObjectStorage $providers,
        ServicesProviderInterface $container
    ) {
        $key = trim($key);
        
        if (empty($key)) {
            throw new \InvalidArgumentException("Key cannot be empty.");
        }
        
        $this->key              = $key;
        $this->definitionsMap   = $definitionsMap;
        $this->providers        = $providers;
        $this->container        = $container;
    }
    
    public function getKey()
    {
        return $this->key;
    }
    
    public function getContainer()
    {
        return $this->container;
    }
    
    public function getDefinitionsMap()
    {
        return $this->definitionsMap;
    }
    
    public function getProviders()
    {
        return $this->providers;
    }
}
