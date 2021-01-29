<?php

namespace App\Models\Roles;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRole extends Model
{
    private $permissions = [];
    private $allForbidden = [];

    public function setPermission($permission)
    {
        $this->permissions[] = $permission;
    }

    public function getPermissions()
    {
        return $this->permissions;
    }

    public function setForbidden($forbidden)
    {
        $this->allForbidden[] = $forbidden;
    }

    public function getAllForbidden()
    {
        return $this->allForbidden;
    }
}
