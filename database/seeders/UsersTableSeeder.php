<?php
namespace App\database\seeders;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Darley Dias',
            'email'=>'darlley@gmail.com',
            'password'=>bcrypt('yhvh77'),
        ]);
    }
}
