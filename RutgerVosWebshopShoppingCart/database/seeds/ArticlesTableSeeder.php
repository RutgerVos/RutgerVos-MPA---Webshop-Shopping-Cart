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
        $Article = new \App\Articles(['name' => 'harry tester',
            'price' => 12,
            'description' => 'he tests al things that are tested',
            'categorie' => 'tester']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'harry tester the quests to test more',
            'price' => 15,
            'description' => 'he tests all things that are tested but again',
            'categorie' => 'books']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'harry tester the quests to test nothing',
            'price' => 14,
            'description' => 'he tests all things that are tested but never',
            'categorie' => 'games']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'harry tester the quests to test something',
            'price' => 10,
            'description' => 'he tests all things that are tested but maybe',
            'categorie' => 'cards']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'harry tester the quests to......',
            'price' => 17,
            'description' => 'he tests all things that are tested but i dont know',
            'categorie' => 'tech']);
        $Article->save();
    }
}
