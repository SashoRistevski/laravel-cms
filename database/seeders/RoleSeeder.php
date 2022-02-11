<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            ['name'=> 'Administrator']
        );
        Role::create(
            ['name'=>'Moderator']
        );
        Role::create(
          ['name'=>'Editor']
        );
    }
}
