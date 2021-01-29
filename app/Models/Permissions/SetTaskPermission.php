<?php

namespace App\Models\Permissions;

class SetTaskPermission extends BasePermission
{
    public function __construct()
    {
        $this->setDescription('set task');
        $this->setCallParam('taskSet');
    }
}
