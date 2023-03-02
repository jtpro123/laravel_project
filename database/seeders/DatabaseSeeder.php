<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(10)->create();
         DB::table('blogmodels')->insert(
            [
                'id'  => '1',
                'blog_title' => 'Easily Grow your Business Earn More Money',
                'blog_desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by 
                injected humour, or randomised words There uffered alteration in some form, by injected humour, or randomised words',
            ]
            );
            DB::table('blogmodels')->insert(
                [
                    
                'id'  => '2',
                'blog_title' => 'Easily',
                'blog_desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by 
                injected humour, or randomised words There uffered alteration in some form, by injected humour, or randomised words',
                ]
                );
            DB::table('blogmodels')->insert(
                [
                    'id'  => '3',
                    'blog_title' => 'hardly',
                    'blog_desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by 
                    injected humour, or randomised words There uffered alteration in some form, by injected humour, or randomised words',
                ]
                );
    }
}
