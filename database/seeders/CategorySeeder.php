<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert(
            [
                ['name'=>'category1'],
                ['name'=>'category2'],
                ['name'=>'category3'],
                ['name'=>'category4'],
                ['name'=>'category5'],
            ]
        );
    }
}
