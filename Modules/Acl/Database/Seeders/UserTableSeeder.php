<?php

namespace Modules\Acl\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'a@a.a',
            'phone' => 1,
            'password' => Hash::make('aaa'),
        ]);
        User::create([
            'name' => 'admin2',
            'email' => 'b@b.b',
            'phone' => 2,
            'password' => Hash::make('bbb'),
        ]);
    }
}
