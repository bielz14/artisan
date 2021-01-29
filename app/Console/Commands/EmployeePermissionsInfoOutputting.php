<?php

namespace App\Console\Commands;

use App\Services\EmployeeService;
use Illuminate\Console\Command;

class EmployeePermissionsInfoOutputting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'company:employee {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Outputting info company by permissions and responsibilities employees';

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
        $methodReceiveInstance = 'get' . $instanceName . 'Instance';

        $service = resolve(EmployeeService::class);
        $instance = $service->{$methodReceiveInstance}();

        $permissions = $instance->getRole()->getPermissions();
        foreach ($permissions as $permission) {
            echo $permission->getDescription() . "\r\n";
        }

        return 0;
    }
}
