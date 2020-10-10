<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertSampleDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $data = [
            [
                'username' => 'giaovien',
                'password' => bcrypt('giaovien123'),
                'name' => 'Giáo Viên',
                'email' => 'giaovien@123.xyz',
                'phone_number' => 12345678,
                'level' => 1,
            ],
            [
                'username' => 'duongha',
                'password' => bcrypt('duongha99'),
                'name' => 'Dương Thu Hà',
                'email' => 'duongha123@xyz',
                'phone_number' => 23456789,
                'level' => 0,
            ],
        ];
        DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
