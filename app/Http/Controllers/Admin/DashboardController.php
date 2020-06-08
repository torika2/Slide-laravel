<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class DashboardController extends Controller
{

    public function index()
    {



         return view('CMS.Pages.Dashboard.dashboard');
    }
}
