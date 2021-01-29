<?php


namespace App\Services;

use App\Models\Roles\ProgrammerRole;
use App\Models\Roles\TesterRole;
use App\Models\Roles\DesignerRole;
use App\Models\Roles\ManagerRole;

class RoleService extends BaseService
{
    /* @var $permissionService PermissionService */
    private $permissionService;

    public function __construct()
    {
        $this->permissionService = resolve(PermissionService::class);
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return ProgrammerRole|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getProgrammerRoleInstance()
    {
        $role = $this->getInstance(ProgrammerRole::class);

        //set permissions

        $permission = $this->permissionService->getWriteCodePermissionInstance();
        $role->setPermission($permission);

        $permission = $this->permissionService->getTestCodePermissionInstance();
        $role->setPermission($permission);

        $permission = $this->permissionService->getCommunicationWithManagerPermissionInstance();
        $role->setPermission($permission);

        //set all forbidden

        $permission = $this->permissionService->getDrawPermissionInstance();
        $role->setForbidden($permission);

        $permission = $this->permissionService->getSetTaskInstance();
        $role->setForbidden($permission);

        return $role;
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return TesterRole|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getTesterRoleInstance()
    {
        $role = $this->getInstance(TesterRole::class);

        //set permissions

        $permission = $this->permissionService->getTestCodePermissionInstance();
        $role->setPermission($permission);

        $permission = $this->permissionService->getCommunicationWithManagerPermissionInstance();
        $role->setPermission($permission);

        $permission = $this->permissionService->getSetTaskInstance();
        $role->setPermission($permission);

        //set all forbidden

        $permission = $this->permissionService->getWriteCodePermissionInstance();
        $role->setForbidden($permission);

        $permission = $this->permissionService->getDrawPermissionInstance();
        $role->setForbidden($permission);

        return $role;
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return DesignerRole|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getDesignerRoleInstance()
    {
        $role = $this->getInstance(DesignerRole::class);

        //set permissions

        $permission = $this->permissionService->getDrawPermissionInstance();
        $role->setPermission($permission);

        $permission = $this->permissionService->getCommunicationWithManagerPermissionInstance();
        $role->setPermission($permission);

        //set all forbidden

        $permission = $this->permissionService->getWriteCodePermissionInstance();
        $role->setForbidden($permission);

        $permission = $this->permissionService->getTestCodePermissionInstance();
        $role->setForbidden($permission);

        $permission = $this->permissionService->getSetTaskInstance();
        $role->setForbidden($permission);

        return $role;
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return ManagerRole|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getManagerRoleInstance()
    {
        $role = $this->getInstance(ManagerRole::class);

        //set permissions

        $permission = $this->permissionService->getSetTaskInstance();
        $role->setPermission($permission);

        //set all forbidden

        $permission = $this->permissionService->getWriteCodePermissionInstance();
        $role->setForbidden($permission);

        $permission = $this->permissionService->getDrawPermissionInstance();
        $role->setForbidden($permission);

        $permission = $this->permissionService->getTestCodePermissionInstance();
        $role->setForbidden($permission);

        return $role;
    }
}
