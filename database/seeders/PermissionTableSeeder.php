<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorities = config('permission.authorities');
        $listPermissions = [];
        $adminPermissions = [];
        $customerPermissions = [];

        foreach($authorities as $label => $permissions){
            foreach($permissions as $permission){
                $listPermissions[] = [
                    'name' => $permission,
                    'guard_name' => 'web',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];

                // Admin
                $adminPermissions[] = $permission;
                //Customer
                if(in_array($label, ['manage_post','manage_categories','manage_tags'])){
                    $customerPermissions[] = $permission;
                }
            }
        }
        //inesrt permissions
        Permission::insert($listPermissions);

        //insert roles
        //admin
        $admin = Role::create([
            'name' => "admin",
            'guard_name' => 'web',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        //customer
        $customer = Role::create([
            'name' => "customer",
            'guard_name' => 'web',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        //Role -> permission
        $admin->givePermissionTo($adminPermissions);
        $customer->givePermissionTo($customerPermissions);

        //
        $userAdmin = User::find(1)->assignRoles("admin");
    }
}
