<?php

namespace App\Models\Permissions;

use Illuminate\Database\Eloquent\Model;

abstract class BasePermission extends Model
{
    private $description;
    private $callParam;

    protected function setDescription($description)
    {
        $this->description = $description;
    }

    protected function setCallParam($callParam)
    {
        $this->callParam = $callParam;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCallParam()
    {
        return $this->callParam;
    }
}
