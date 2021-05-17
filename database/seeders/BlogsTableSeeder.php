<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Blog::factory()->count(15)->create();
        DB::table('blogs')->insert([
           [
               'title' => '勉強',
               'contents' => '楽しいな'
           ],
           [
               'title' => 'プログラミング',
               'contents' => '頑張る'
           ],
           [
               'title' => '桃鉄',
               'contents' => 'すごろく'
           ],
           [
               'title' => '東海オンエア',
               'contents' => 'You Tube'
           ],
           [
               'title' => '駄菓子',
               'contents' => 'うまい棒'
           ],
           [
               'title' => '源氏',
               'contents' => '紫式部'
           ],
           [
               'title' => '浅川',
               'contents' => '日野市'
           ],
           [
               'title' => '地元',
               'contents' => '八王子市'
           ],
           [
               'title' => '焼き肉',
               'contents' => '順番待ち'
           ],
           [
               'title' => '第一志望',
               'contents' => 'エムスリー'
           ],
           [
               'title' => 'わくわく',
               'contents' => '早く仕事したい'
           ],
           [
               'title' => '決めた',
               'contents' => '最高の一日'
           ],
           [
               'title' => '昼飯',
               'contents' => 'こんちはっほい'
           ],
           [
               'title' => '天気がいい',
               'contents' => 'おはようさん'
           ],
           [
               'title' => 'プログラミングスクール',
               'contents' => '頑張るんば'
           ]
        ]);
    }
}