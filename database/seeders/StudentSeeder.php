<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710110',
            'name' => 'DAFI AZKA BANURELLA ZHUHRI',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '082231274987',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710084',
            'name' => 'DEA VERNANDA RISKY NURYANTO',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '085706469814',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710126',
            'name' => 'DIMAS FENDRA SUMARNO',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '081998440034',
        ]);
    }
}