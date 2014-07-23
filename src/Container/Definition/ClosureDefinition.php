<?php

namespace Njasm\Container\Definition;

use Njasm\Container\Definition\AbstractDefinition;

class ClosureDefinition extends AbstractDefinition
{   
    protected function validateConcrete($concrete)
    {
        if (!$concrete instanceof \Closure) {
            throw new \InvalidArgumentException("Only Closures allowed.");
        }  
    }
}
