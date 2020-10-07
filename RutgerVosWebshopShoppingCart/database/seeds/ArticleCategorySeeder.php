<?php

use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articleId = 1;
        for ($category = 1; $category <= 5; $category++) {
            for ($article = 1; $article <= 3; $article++) {
                # code...

                $articleCategory = new App\ArticleCategory([
                    'category_id' => $category,
                    'article_id' => $articleId]);
                $articleCategory->save();
                $articleId++;
            }
        }
    }
}
