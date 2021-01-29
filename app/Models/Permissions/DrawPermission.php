<?php

namespace App\Models\Permissions;

class DrawPermission extends BasePermission
{
    public function __construct()
    {
        $this->setDescription('drawing');
        $this->setCallParam('draw');
    }
}
