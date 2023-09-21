<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $param = [
            'name' => '山田太郎',
            'email' => 'test@com.ne.jp',
            'password' => '1234abcd',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '山田次郎',
            'email' => '2test@com.ne.jp',
            'password' => '5678efgh',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '山田三郎',
            'email' => '3test@com.ne.jp',
            'password' => '9012ijkl',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '山田四郎',
            'email' => '4test@com.ne.jp',
            'password' => '3456mnop',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '山田五郎',
            'email' => '5test@com.ne.jp',
            'password' => '7890qrst',
        ];
        DB::table('users')->insert($param);
    }
}
