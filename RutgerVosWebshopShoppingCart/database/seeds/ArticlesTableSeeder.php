<?php

use app\Article;
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
        // $categoryTech = \App\Category::where('name', 'tech')->first();
        // $categoryBooks = \App\Category::where('name', 'books')->first();
        // $categoryCards = \App\Category::where('name', 'cards')->first();
        // $categoryFruits = \App\Category::where('name', 'fruit')->first();
        // $categoryGames = \App\Category::where('name', 'games')->first();
        $Article = new \App\Article(['name' => '1080 GX',
            'price' => 15,
            'description' => 'the best grafics']);
        $Article->save();
        $Article = new \App\Article(['name' => '2080 GX',
            'price' => 100,
            'description' => 'the beter of best grafics']);
        $Article->save();
        $Article = new \App\Article(['name' => '1060 GX',
            'price' => 13,
            'description' => 'the okay grafics']);
        $Article->save();
        $Article = new \App\Article(['name' => 'harry potter',
            'price' => 15,
            'description' => 'the boy under the staircase']);
        $Article->save();
        $Article = new \App\Article(['name' => 'harry potter 2020 JK rowlin version',
            'price' => 12,
            'description' => 'yep its a thing now']);
        $Article->save();
        $Article = new \App\Article(['name' => 'yugioh rulebook',
            'price' => 4,
            'description' => 'all the rules you need to know for master duels']);
        $Article->save();
        $Article = new \App\Article(['name' => 'infamous',
            'price' => 14,
            'description' => 'electri man']);
        $Article->save();
        $Article = new \App\Article(['name' => 'infamous 2',
            'price' => 20,
            'description' => 'electri man fighting the beast']);
        $Article->save();
        $Article = new \App\Article(['name' => 'infamous second',
            'price' => 15,
            'description' => 'smoke man after the dead of eltric man']);
        $Article->save();
        $Article = new \App\Article(['name' => 'Yugioh blue eyes deck',
            'price' => 20,
            'description' => 'summon monsters use spells and traps and win']);
        $Article->save();
        $Article = new \App\Article(['name' => 'Yugioh red eyes deck',
            'price' => 15,
            'description' => 'summon monsters']);
        $Article->save();
        $Article = new \App\Article(['name' => 'Yugioh shaddoll deck',
            'price' => 20,
            'description' => 'summon monsters use spells and traps and flip into the win']);
        $Article->save();
        $Article = new \App\Article(['name' => 'apple',
            'price' => 17,
            'description' => 'a apple a day keeps the doctor away']);
        $Article->save();
        $Article = new \App\Article(['name' => 'grapes',
            'price' => 1,
            'description' => 'they are okay']);
        $Article->save();
        $Article = new \App\Article(['name' => 'straw berry',
            'price' => 10,
            'description' => 'everyone loves a good straw berry']);
        $Article->save();
    }
}
