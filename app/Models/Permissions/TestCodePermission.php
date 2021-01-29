<?php

namespace App\Models\Permissions;

class TestCodePermission extends BasePermission
{
    public function __construct()
    {
        $this->setDescription('code testing');
        $this->setCallParam('testCode');
    }
}
