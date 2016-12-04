<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate([
            'key' => 'visit_admin',
            'table_name' => 'admin',
        ]);

        Permission::firstOrCreate([
            'key' => 'visit_database',
            'table_name' => 'admin',
        ]);

        Permission::firstOrCreate([
            'key' => 'visit_media',
            'table_name' => 'admin',
        ]);

        Permission::firstOrCreate([
            'key' => 'visit_settings',
            'table_name' => 'admin',
        ]);

        Permission::generateFor('menus');

        Permission::generateFor('pages');

        Permission::generateFor('roles');

        Permission::generateFor('users');

        Permission::generateFor('posts');

        Permission::generateFor('categories');
    }
}
