<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->unique->sentence(),
            'extract'=>$this->faker->text(250),
            'url'=>'portfolio/'.$this->faker->image('public/storage/portfolio',1200,620,null,false)
        ];
    }
}
