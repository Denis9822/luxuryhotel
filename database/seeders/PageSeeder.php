<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $val = new Page();
        $val->name = "Отели";
        $val->slug = "hotel.show";
        $val->seo_title = "Luxury hotels for \$name";
        $val->seo_description = "Luxury hotels for \$name";
        $val->seo_img = "";
        $val->save();

        $val = new Page();
        $val->name = "Статическая Главная";
        $val->slug = "main.index";
        $val->seo_title = "1";
        $val->seo_description = "1";
        $val->seo_img = "";
        $val->save();

        $val = new Page();
        $val->name = "Статическая Города";
        $val->slug = "inspirations.index";
        $val->seo_title = "1";
        $val->seo_description = "1";
        $val->seo_img = "";
        $val->save();

        $val = new Page();
        $val->name = "Статическая О нас";
        $val->slug = "page.about_us";
        $val->seo_title = "1";
        $val->seo_description = "1";
        $val->seo_img = "";
        $val->save();

        $val = new Page();
        $val->name = "Статическая Политика Конфиденциальности";
        $val->slug = "page.policy";
        $val->seo_title = "1";
        $val->seo_description = "1";
        $val->seo_img = "";
        $val->save();
    }
}
