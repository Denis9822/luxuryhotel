<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $val = new Setting();
        $val->name = "order";
        $val->preview_title = "Сортировка отелей по умолчанию";
        $val->value = "class_descending";
        $val->save();

        $val = new Setting();
        $val->name = "referral";
        $val->preview_title = "Реферальный код";
        $val->value = "1250365";
        $val->save();

        $val = new Setting();
        $val->name = "logo";
        $val->preview_title = "Логотип";
        $val->value = "logo.svg";
        $val->save();
    }
}
