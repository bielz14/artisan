<?php
namespace App\Services;

use App\Models\Employee;

class EmployeeService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Employee::class);
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return Employee|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getProgrammerInstance() : ?Employee
    {
        /* @var $roleService RoleService */
        $roleService = resolve(RoleService::class);
        $role = $roleService->getProgrammerRoleInstance();
        $employee = $this->getInstance();
        $employee->setRole($role);

        return $employee;
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return Employee|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getTesterInstance() : ?Employee
    {
        /* @var $roleService RoleService */
        $roleService = resolve(RoleService::class);
        $role = $roleService->getTesterRoleInstance();
        $employee = $this->getInstance();
        $employee->setRole($role);

        return $employee;
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return Employee|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getDesignerInstance() : ?Employee
    {
        /* @var $roleService RoleService */
        $roleService = resolve(RoleService::class);
        $role = $roleService->getDesignerRoleInstance();
        $employee = $this->getInstance();
        $employee->setRole($role);

        return $employee;
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return Employee|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getManagerInstance() : ?Employee
    {
        /* @var $roleService RoleService */
        $roleService = resolve(RoleService::class);
        $role = $roleService->getManagerRoleInstance();
        $employee = $this->getInstance();
        $employee->setRole($role);

        return $employee;
    }
}
