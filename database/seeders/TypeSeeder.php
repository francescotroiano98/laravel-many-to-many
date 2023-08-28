<?php

namespace Database\Seeders;

use App\Models\Type;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $types = [
            'Website', 'MobileApp', 'Ecommerce', 'ElearningPlatform', 'OnlineGame', 'SocialMediaApp'
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->slug =Str::of($type)->slug('-');
            $newType->color = $faker->hexColor();
            $newType->save();
        };
    }
}
