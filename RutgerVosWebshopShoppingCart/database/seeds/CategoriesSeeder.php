<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categories = new \App\Categories(['name' => 'fruit']);
        $Categories->save();
        $Categories = new \App\Categories(['name' => 'books']);
        $Categories->save();
        $Categories = new \App\Categories(['name' => 'games']);
        $Categories->save();
        $Categories = new \App\Categories(['name' => 'cards']);
        $Categories->save();
        $Categories = new \App\Categories(['name' => 'tech']);
        $Categories->save();
    }
}
