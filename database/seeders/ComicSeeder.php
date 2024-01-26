<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products=config("comic");

        foreach ($products as $product) {
            $new_comic = new Comic;
            $new_comic->title = $product["title"];
            $new_comic->description = $product["description"];
            $new_comic->thumb = $product["thumb"];
            $new_comic->price = $product["price"];
            $new_comic->series = $product["series"];
            $new_comic->sale_date = $product["sale_date"];
            $new_comic->type = $product["type"];
            $new_comic->save();
        }
    }
}
