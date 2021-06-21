<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
                [
                    'title' => 'blog1',
                    'teaser' => 'teaser1',
                    'content' => 'content1'
                ],
                [
                    'title' => 'blog2',
                    'teaser' => 'teaser2',
                    'content' => 'content2'
                ],
                [
                    'title' => 'blog3',
                    'teaser' => 'teaser3',
                    'content' => 'content3'
                ],
                [
                    'title' => 'blog4',
                    'teaser' => 'teaser4',
                    'content' => 'content4'
                ]

            ],
        );
    }
}
