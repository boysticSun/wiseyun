<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        // $sentence = $this->faker->sentence();
        $sentence = "新闻资讯标题新闻资讯标题新闻资讯标题";

        return [
            'title' => $sentence,
            'body' => "新闻资讯内容新闻资讯内容新闻资讯内容新闻资讯内容新闻资讯内容新闻资讯内容新闻资讯内容新闻资讯内容新闻资讯内容新闻资讯内容",// $this->faker->text(),
            'excerpt' => $sentence,
            'user_id' => $this->faker->randomElement([1]),
            'category_id' => $this->faker->randomElement([1, 2, 3, 4]),
        ];
    }
}
