<?php

use App\Models\Languages\Locales;
use App\Models\Languages\Words;
use App\Models\Settings\Settings;

function getLocales($active = false)
{
    static $languages;
    if (empty($languages)) {
        $languages = Locales::orderBy('default', 'DESC')->get();
    }

    if ($active) {
        return  $languages->where('active', 1);
    } else {
        return  $languages;
    }
}


if (! function_exists('array_sort_recursive')) {
    /**
     * Recursively sort an array by keys and values.
     *
     * @param  array  $array
     * @return array
     */
    function array_sort_recursive($array)
    {
        return Arr::sortRecursive($array);
    }
}

function tr($key = null)
{
    $key = strtolower($key);
    static $translations;

    if (empty($translations)) {
        $tmp = Words::get();
        $res = [];
        foreach ($tmp as $val) {
            $res[$val->key] = $val['value'];
        }
        $translations = $res;
    }
    if ($key != null) {

        if (!key_exists($key, $translations)) {
            $upt = Words::where('key', $key)->first();

            if (!$upt) {
                $add = Words::create(['key'=>$key]);
                $locale = Locales::where('default', 1)->first();
                $add->setTranslation('value', $locale->locale, $key);
                $add->save();
            }

            return $key ;
        }
        if ($translations[$key] == '') {
            return $key;
        }
        return $translations[$key];
    }
    return $translations;
}


function getDirContents($dir, &$results = array())
{
    $files = scandir($dir);
    foreach ($files as $key => $value) {
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if (!is_dir($path)) {
            $results[] = $path;
        } elseif ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}


function sitename()
{
    static $sitename;
    if (empty($sitename)) {
        $sitename = Settings::where('key', 'sitename')->first();
    }
    return $sitename->value;
}


function social()
{
    static $social;
    if (empty($social)) {
        $social = Settings::where('key', 'social')->first();
    }
    return $social->data;
}


function email()
{
    static $email;
    if (empty($email)) {
        $email = Settings::where('key', 'email')->first();
    }
    return $email->data;
}


if (!function_exists('changedatetime')) {
    function changedatetime($timestamp)
    {
        $splitTimeStamp = explode(" ", $timestamp);
        $date = $splitTimeStamp[0];
        //$time = $splitTimeStamp[1];
        $changed = explode("-", $date);
        if ($changed[1] == 1) {
            $month = tr('January');
        } elseif ($changed[1] == 2) {
            $month = tr('February');
        } elseif ($changed[1] == 3) {
            $month = tr('March');
        } elseif ($changed[1] == 4) {
            $month = tr('April');
        } elseif ($changed[1] == 5) {
            $month = tr('May');
        } elseif ($changed[1] == 6) {
            $month = tr('June');
        } elseif ($changed[1] == 7) {
            $month = tr('July');
        } elseif ($changed[1] == 8) {
            $month = tr('August');
        } elseif ($changed[1] == 9) {
            $month = tr('September');
        } elseif ($changed[1] == 10) {
            $month = tr('October');
        } elseif ($changed[1] == 11) {
            $month = tr('November');
        } elseif ($changed[1] == 12) {
            $month = tr('December');
        }
        return $changed[2] . ' ' . $month . ', ' . $changed [0] ;

    }
}

if (!function_exists('getTime')) {
    function getTime($timestamp)
    {
        $splitTimeStamp = explode(" ", $timestamp);
        $time = explode(':', $splitTimeStamp[1]);
        return $time[0].':'.$time[1];
    }
}



