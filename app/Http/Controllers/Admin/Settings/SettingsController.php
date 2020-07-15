<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\Settings;
use Gate;

class SettingsController extends Controller
{
    public function index()
    {
        if (Gate::denies('viewSettings')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $sitename = Settings::where('key', 'sitename')->first();
        $devmode = Settings::where('key', 'devmode')->first();
        $mail = Settings::where('key','email')->first();
        $social = Settings::where('key','social')->first();

        return view('CMS.Pages.Settings.mainSettings', compact('sitename', 'devmode','mail','social'));
    }

    public function store(Request $request)
    {
        if (Gate::denies('updateSettings')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }



        $locales = getLocales();
        $valid = [];
        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['site_name_'.$loc->locale] = 'required';
            }
        }
        $valid['devmode'] = 'required';
        $valid['host']= 'nullable|string';
        $valid['port']= 'nullable|numeric';
        $valid['username']= 'nullable|string';
        $valid['contact']= 'nullable|email';


        request()->validate($valid);
        $sitename = Settings::where('key', 'sitename')->first();
        foreach ($locales as $locale) {
            if ($request->input('site_name_'.$locale->locale) != null) {
                $sitename->setTranslation('value', $locale->locale, $request->input('site_name_' . $locale->locale));

            }
        }
        $sitename->save();

        $socials = Settings::where('key','social')->first();
        $data = [

            'facebook' => $request->facebook,
            'tweeter' => $request->tweeter,
            'vimeo' => $request->vimeo,
            'pinterest' => $request->pinterest,
        ];
        $socials->data = $data;
        $socials->save();


        $devmode = Settings::where('key', 'devmode')->first();
        $data = [];
        $data['devmode'] = $request->devmode;
        $data['allowed_ips'] = $request->allowedips;
        $devmode->data = $data;
        $devmode->save();

        $mailsettings = [];
        $mailsettings['host'] = $request->host;
        $mailsettings['port'] = $request->port;
        $mailsettings['username'] = $request->username;
        $mailsettings['password'] = $request->password;
        $mailsettings['contact'] = $request->contact;

        $this->setEnvironmentValue([
            'MAIL_HOST' => $request->host,
            'MAIL_PORT' => $request->port,
            'MAIL_USERNAME' => $request->username,
            'MAIL_PASSWORD' => $request->password,
            'MAIL_FROM_ADDRESS' => $request->contact,
            'MAIL_FROM_NAME' => $request->contact
        ]);

        $mail = Settings::where('key','email')->first();
        $mail->data = $mailsettings;
        $mail->save();
        return redirect()->back();
    }


    public function setEnvironmentValue(array $values)
    {

        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        if (count($values) > 0) {
            foreach ($values as $envKey => $envValue) {

                $str .= "\n"; // In case the searched variable is in the last line without \n
                $keyPosition = strpos($str, "{$envKey}=");
                $endOfLinePosition = strpos($str, "\n", $keyPosition);
                $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

                // If key does not exist, add it
                if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                    $str .= "{$envKey}={$envValue}\n";
                } else {
                    $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
                }

            }
        }

        $str = substr($str, 0, -1);
        if (!file_put_contents($envFile, $str)) return false;
        return true;

    }
}
