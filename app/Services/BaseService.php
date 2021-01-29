<?php

namespace App\Services;

abstract class BaseService
{
    protected $modelClassName;

    protected $modelInstance;

    public function __construct(string $className)
    {
        $this->modelClassName = $className;
        $this->modelInstance = new $className;
    }

    /**
     * @param null|string $className
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    protected function getInstance(?string $className = null)
    {
        if (null !== $className && $this->modelClassName !== $className) {
            return new $className;
        }

        return $this->modelInstance;
    }
}
