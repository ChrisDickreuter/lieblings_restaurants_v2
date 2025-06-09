<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->insert([
            [
                "name" => "Landgasthof Adler",
                "cuisine" => "Schwäbisch",
                "street" => "Büchel",
                "house_no" => "3",
                "zip" => "88279",
                "city" => "Amtzell",
                "phone_no" => "075223311",
                "url" => "https://www.adler-amtzell.de/",
                "food_orderable" => true,
                "created_at" => "2019-11-10 18:20:18",
                "updated_at" => "2019-11-10 18:20:18"
            ],
            [
                "name" => "Landgasthof Adler",
                "cuisine" => "Schwäbisch",
                "street" => "Büchel",
                "house_no" => "3",
                "zip" => "88279",
                "city" => "Amtzell",
                "phone_no" => "075223311",
                "url" => "https://www.adler-amtzell.de/",
                "food_orderable" => true,
                "created_at" => "2019-11-10 18:20:18",
                "updated_at" => "2019-11-10 18:20:18"
            ],
            [
                "name" => "Gasthof Kleber",
                "cuisine" => "Deutsch/Schwäbisch",
                "street" => "Schomburger Ste.",
                "house_no" => "1",
                "zip" => "88239",
                "city" => "Wangen",
                "phone_no" => "07528/1825",
                "url" => "https://www.gasthof-kleber.de/",
                "food_orderable" => true,
                "created_at" => "2020-02-02 15:32:07",
                "updated_at" => "2020-02-02 15:32:07"
            ],
            [
                "name" => "Gasthof zum Hirsch",
                "cuisine" => "Nouvelle cuisine",
                "street" => "Argenstrasse",
                "house_no" => "29",
                "zip" => "88059",
                "city" => "Neukirch Goppelsweiler",
                "phone_no" => "+49 (0)7528 1765",
                "url" => "https://gasthof-zum-hirsch.com/",
                "food_orderable" => true,
                "created_at" => "2020-02-02 17:38:43",
                "updated_at" => "2020-02-02 17:42:07"
            ],
            [
                "name" => "Gasthaus Ochsen",
                "cuisine" => "Deutsch",
                "street" => "Pfärrich",
                "house_no" => "8",
                "zip" => "88279",
                "city" => "Amtzell-Pfärrich",
                "phone_no" => "07522/22727",
                "url" => "",
                "food_orderable" => false,
                "created_at" => "2020-02-05 18:40:42",
                "updated_at" => "2020-02-15 16:49:39"
            ],
            [
                "name" => "Stallbesen",
                "cuisine" => "Deutsch",
                "street" => "Humbrechts",
                "house_no" => "1",
                "zip" => "88239",
                "city" => "Wangen",
                "phone_no" => "07522/9155360",
                "url" => "https://www.stall-besen.de/",
                "food_orderable" => false,
                "created_at" => "2020-03-08 15:52:43",
                "updated_at" => "2020-03-08 15:52:43"
            ]
        ]);
    }
}
