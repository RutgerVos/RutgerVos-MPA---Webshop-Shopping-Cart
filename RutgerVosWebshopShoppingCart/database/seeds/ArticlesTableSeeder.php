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
        $Article = new \App\Articles(['name' => '1080 GX',
            'price' => 15,
            'description' => 'the best grafics',
            'categorie' => 'tech']);
        $Article->save();
        $Article = new \App\Articles(['name' => '2080 GX',
            'price' => 100,
            'description' => 'the beter of best grafics',
            'categorie' => 'tech']);
        $Article->save();
        $Article = new \App\Articles(['name' => '1060 GX',
            'price' => 13,
            'description' => 'the okay grafics',
            'categorie' => 'tech']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'harry potter',
            'price' => 15,
            'description' => 'the boy under the staircase',
            'categorie' => 'books']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'harry potter 2020 JK rowlin version',
            'price' => 12,
            'description' => 'yep its a thing now',
            'categorie' => 'books']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'yugioh rulebook',
            'price' => 4,
            'description' => 'all the rules you need to know for master duels',
            'categorie' => 'books']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'infamous',
            'price' => 14,
            'description' => 'electri man',
            'categorie' => 'games']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'infamous 2',
            'price' => 20,
            'description' => 'electri man fighting the beast',
            'categorie' => 'games']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'infamous second',
            'price' => 15,
            'description' => 'smoke man after the dead of eltric man',
            'categorie' => 'games']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'Yugioh blue eyes deck',
            'price' => 20,
            'description' => 'summon monsters use spells and traps and win',
            'categorie' => 'cards']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'Yugioh red eyes deck',
            'price' => 15,
            'description' => 'summon monsters',
            'categorie' => 'cards']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'Yugioh shaddoll deck',
            'price' => 20,
            'description' => 'summon monsters use spells and traps and flip into the win',
            'categorie' => 'cards']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'apple',
            'price' => 17,
            'description' => 'a apple a day keeps the doctor away',
            'categorie' => 'fruit']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'grapes',
            'price' => 1,
            'description' => 'they are okay',
            'categorie' => 'fruit']);
        $Article->save();
        $Article = new \App\Articles(['name' => 'straw berry',
            'price' => 10,
            'description' => 'everyone loves a good straw berry',
            'categorie' => 'fruit']);
        $Article->save();
    }
}
