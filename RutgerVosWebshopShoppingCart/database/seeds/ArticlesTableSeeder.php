<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Article = new \App\Articles(['name'=>'harry tester',
        'price'=>12,
        'description'=>'he tests al things that are tested',
        'categorie'=>'']);
        $Article->save();
        $Article = new \App\Articles(['name'=>'harry tester the quests to test more',
        'price'=>15,
        'description'=>'he tests all things that are tested but again',
        'categorie'=>'']);
        $Article->save();
    }
}
