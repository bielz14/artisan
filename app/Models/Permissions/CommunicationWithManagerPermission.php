<?php

namespace App\Models\Permissions;

class CommunicationWithManagerPermission extends BasePermission
{
    public function __construct()
    {
        $this->setDescription('communication with manager');
        $this->setCallParam('communication with manager');
    }
}
