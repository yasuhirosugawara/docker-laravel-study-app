<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table("posts")->insert([
            "title"=>"1つ目の投稿",
            "user_id"=>1,
            "body"=>"これは1つ目の投稿です。",
            "created_at"=> now(),
            "updated_at"=> now(),
        ]);
    }
}
