<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'do'=>'test',
          'date'=>'2020/05/06'
        ];
        DB::table('todolists')->insert($param);
    }
}
