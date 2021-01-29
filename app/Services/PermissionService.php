<?php


namespace App\Services;

use App\Models\Permissions\TestCodePermission;
use App\Models\Permissions\WriteCodePermission;
use App\Models\Permissions\CommunicationWithManagerPermission;
use App\Models\Permissions\DrawPermission;
use App\Models\Permissions\SetTaskPermission;

class PermissionService extends BaseService
{
    public function __construct()
    {

    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return TestCodePermission|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getTestCodePermissionInstance()
    {
        return $this->getInstance(TestCodePermission::class);
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return WriteCodePermission|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getWriteCodePermissionInstance()
    {
        return $this->getInstance(WriteCodePermission::class);
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return CommunicationWithManagerPermission|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getCommunicationWithManagerPermissionInstance()
    {
        return $this->getInstance(CommunicationWithManagerPermission::class);
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return DrawPermission|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getDrawPermissionInstance()
    {
        return $this->getInstance(DrawPermission::class);
    }

    /**
     * @param int|array|\Closure $conditions
     * @param null               $withRelations
     * @param array|string       $limitOffset
     * @param array|string       $ordering
     *
     * @return SetTaskPermission|\App\Models\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null|object
     */
    public function getSetTaskInstance()
    {
        return $this->getInstance(SetTaskPermission::class);
    }
}
