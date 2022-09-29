<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
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

        $admin = new Role();
        $admin->name = 'Администратор';
        $admin->slug = 'caller-manager';
        $admin->save();


        $manager = new Role();
        $manager->name = 'Project Manager';
        $manager->slug = 'project-manager';
        $manager->save();

        $developer1 = new Role();
        $developer1->name = 'front разработчик';
        $developer1->slug = 'web-developer-front';
        $developer1->save();

        $developer2 = new Role();
        $developer2->name = 'backend разработчик';
        $developer2->slug = 'web-developer-backend';
        $developer2->save();

        $caller = new Role();
        $caller->name = 'Менеджер';
        $caller->slug = 'caller-manager';
        $caller->save();


    }
}
