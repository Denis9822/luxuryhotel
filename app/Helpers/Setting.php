<?php


namespace App\Helpers;

class Setting
{
    public static function getSettingByName($name)
    {
        $value = \App\Models\Setting::where('name',$name)->first()['value'];
        return $value;
    }
    public static function setSettingByName($name,$val)
    {
        $set = \App\Models\Setting::where('name',$name)->first();
        $set->value = $val;
        $set->save();
    }

}
