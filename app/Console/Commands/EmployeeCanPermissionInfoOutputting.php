<?php

namespace App\Console\Commands;

use App\Services\EmployeeService;
use Illuminate\Console\Command;

class EmployeeCanPermissionInfoOutputting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:can {role} {permission}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Outputting info employee by permission and responsibility';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $instanceName = ucfirst($this->argument('role'));
        $callParam = mb_strtolower($this->argument('permission'));

        $methodReceiveInstance = 'get' . $instanceName . 'Instance';

        $service = resolve(EmployeeService::class);
        $instance = $service->{$methodReceiveInstance}();

        $permissions = $instance->getRole()->getPermissions();
        foreach ($permissions as $permission) {
            if (mb_strtolower($permission->getCallParam()) == $callParam) {
                echo 'true';
                return 0;
            }
        }

        $allForbidden = $instance->getRole()->getAllForbidden();
        foreach ($allForbidden as $forbidden) {
            if (mb_strtolower($forbidden->getCallParam()) == $callParam) {
                echo 'false';
                return 0;
            }
        }

        echo 'undefined';
        return 0;
    }
}
