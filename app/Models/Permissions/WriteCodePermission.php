<?php

namespace App\Models\Permissions;

class WriteCodePermission extends BasePermission
{
    public function __construct()
    {
        $this->setDescription('code writing');
        $this->setCallParam('writeCode');
    }
}
