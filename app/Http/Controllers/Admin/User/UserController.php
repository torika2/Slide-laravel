<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\Controller;
use App\Models\User\User;
use Illuminate\Http\Request;
use App;
use Gate;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewUser')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $keyword = null;
        if (request('search')) {
            $keyword = request('search');
        }
        /*$users = User::where('fullname', 'LIKE', '%' . $keyword . '%')->where('type','!=','member')
            ->where('type','!=','main_guest')->
        orWhere('username', 'LIKE', '%' . $keyword . '%')->
        orderBy('id', 'DESC')->paginate(20);*/
        $roles = Role::orderBy('id', 'DESC')->get();
        $query = User::query();
        if ($keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->where('id', $keyword)
                    ->orWhere('fullname', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('username', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('email', 'LIKE', '%' . $keyword . '%');
            });
        }
        $users = $query->paginate(20);

        return view('CMS.Pages.Users.list', compact('users', 'roles'));
    }



    public function edit($username)
    {
        if (Gate::denies('viewUser')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $user = User::where('username', $username)->first();
        return view('CMS.Pages.Users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        if (Gate::denies('updateUser')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $valid = [
            'id' => 'required',
            'email' => 'required|email',
            'fullname' => 'required|string',
            'username' => 'required',
            'phone' => 'required|numeric',
        ];
        if ($request->avatar) {
            $valid['avatar'] = 'image';
        }
        if ($request->password) {
            $valid['password'] = 'min:8';
        }
        request()->validate($valid);
        $user = User::find($request->id);
        //dd($request);

        $user->update([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        if ($request->password) {
            $user->update(['password' => bcrypt($request->password)]);
        }

        if ($request->avatar){
            $file = $request->file('avatar');
            $filename = rand() . date('His'). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files/img/'), $filename);
            $user->avatar = $filename;
            $user->save();
        }
        session()->flash('success', tr('user edited successfully'));
        if ($user->type == null){
            return redirect()->route('CMS.user.list');
        }
        return redirect()->route('CMS.user.other');
    }

    public function add()
    {
        if (Gate::denies('createUser')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        return view('CMS.Pages.Users.create');
    }

    public function create(Request $request)
    {
        if (Gate::denies('createUser')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $valid = [
            'email' => 'required|email|unique:users',
            'fullname' => 'required|string',
            'username' => 'required|unique:users',
            'phone' => 'required|numeric',
            'password' => 'required|min:8',
        ];
        if ($request->avatar) {
            $valid['avatar'] = 'image';
        }
        request()->validate($valid);

        $user = User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);



        if ($request->avatar){
            $file = $request->file('avatar');
            $filename = rand() . date('His'). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files/img/'), $filename);
            $user->avatar = $filename;
            $user->save();
        }


        if ($user) {
            session()->flash('success', tr('user registered successfully'));
            return redirect()->route('CMS.user.list');
        }
    }

    public function delete(Request $request)
    {
        if (Gate::denies('deleteUser')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $user = User::find($request->id);
        $user->delete();
        if ($user) {
            session()->flash('success', tr('user deleted successfully'));
            return redirect()->route('CMS.user.list');
        }
    }


    public function profile()
    {
        $user = Auth::user();
        return view('CMS.Pages.Profile.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {

        $valid = [
            'fullname' => 'required|string',
            'phone' => 'required|numeric',
            'password' => 'password|required',
        ];
        if ($request->email != Auth::user()->email) {
            $valid['email'] = 'required|email|unique:users';
        } else {
            $valid['email'] = 'required|email';
        }
        if ($request->username != Auth::user()->username) {
            $valid['username'] = 'required|email|unique:users';
        } else {
            $valid['username'] = 'required';
        }
        if ($request->new_password) {
            $valid['new_password'] = 'min:8';
            $valid['confirm_password'] = 'same:new_password';
        }
        if ($request->avatar) {
            $valid['avatar'] = 'image';
        }
        request()->validate($valid);
        $values = [
            'fullname' => $request->fullname,
            'username' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
            'avatar' => $request->avatar,
        ];

        if ($request->new_password) {
            $values['password'] = bcrypt($request->new_password);
        }
        $user = Auth::user()->update($values);
        if ($request->avatar){
            $file = $request->file('avatar');
            $filename = rand() . date('His'). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files/img/'), $filename);

            Auth::user()->update(['avatar'=>$filename]);
        }
        if ($user) {
            session()->flash('success', tr('user edited successfully'));
            return redirect()->back();
        } else {
            session()->flash('error', 'error');
            return redirect()->back();
        }
    }
}
