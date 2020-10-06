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
        $Categories = new \App\Category(['name' => 'fruit']);
        $Categories->save();
        $Categories = new \App\Category(['name' => 'books']);
        $Categories->save();
        $Categories = new \App\Category(['name' => 'games']);
        $Categories->save();
        $Categories = new \App\Category(['name' => 'cards']);
        $Categories->save();
        $Categories = new \App\Category(['name' => 'tech']);
        $Categories->save();
    }
}
