<?php

use Illuminate\Database\Seeder;
use bayusa\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dataRoles = array(
          ['id'=>1,
          'name'=> 'admin'],
          ['id'=>2,
          'name'=> 'store']
        );

        Role::insert($dataRoles);
    }
}

