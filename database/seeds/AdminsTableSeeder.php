<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new User();
        $admin->name = 'Mr Hridoy';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('hridoy126');
        $admin->save();
    }
}
