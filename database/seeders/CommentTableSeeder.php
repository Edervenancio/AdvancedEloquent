<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        return Comment::factory(20)->create();  

    }
}
