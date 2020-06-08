<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\Controller;
use App;
use App\Models\User\User;
use Illuminate\Http\Request;
use Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        if (Gate::denies('viewRoles')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $roles = Role::orderBy('id', 'DESC')->get();
        $permissions = Permission::orderBy('module')->get();
        return view('CMS.Pages.Users.Roles.roles', compact('roles', 'permissions'));
    }

    public function getRole(Request $request)
    {
        return Role::find($request->id);
    }

    public function getRoleWithPermission(Request $request)
    {
        return Role::with('permissions')->find($request->id);
    }

    public function changepermissions(Request $request)
    {
        if (Gate::denies('changeRolePermissions')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        if (!$request->role_id) {
            session()->flash('error', tr('unknown role id'));
            return redirect()->back();
        }
        $role = Role::with('permissions')->find($request->role_id);
        $role->syncPermissions($request->permissions);
        $permissionToRole = $role->syncPermissions($request->permissions);
        if ($permissionToRole) {
            session()->flash('success', tr('permission successfully assigned to role'));
            return redirect()->back();
        } else {
            session()->flash('error', 'Unknown Error!');
            return redirect()->back();
        }
    }

    public function createRole(Request $request)
    {
        if (Gate::denies('createRoles')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $valid = [
            'name' => 'required|string|unique:roles',
            'guard_name' => 'required',
            'has_backend_access' => 'required',
            'protected' => 'required',
            'for_registration' => 'required',
        ];
        request()->validate($valid);
        $data = [
            'name' => $request->name,
            'guard_name' => $request->guard_name,
            'has_backend_access' => $request->has_backend_access,
            'protected' => $request->protected,
            'for_registration' => $request->for_registration,

        ];

        $role = Role::create($data);

        if ($role) {
            session()->flash('success', tr('role successfully created'));
            return redirect()->back();
        } else {
            session()->flash('error', 'Unknown Error!');
            return redirect()->back();
        }
    }


    public function createPermission(Request $request)
    {
        if (Gate::denies('createPermission')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $valid = [
            'permission' => 'required|string|unique:permissions,name',
            'can' => 'required|string',
            'module' => 'required|string',
            'guard' => 'required'
        ];
        request()->validate($valid);
        $data = [
            'name' => $request->permission,
            'can' => $request->can,
            'module' => $request->module,
            'guard_name' => $request->guard,
        ];

        $permission = Permission::create($data);

        if ($permission) {
            session()->flash('success', tr('permission successfully created'));
            return redirect()->back();
        } else {
            session()->flash('error', 'Unknown Error!');
            return redirect()->back();
        }
    }


    public function updateRole(Request $request)
    {
        if (Gate::denies('updateRoles')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $valid = [
            'name' => 'required|string',
            'guard_name' => 'required'
        ];
        request()->validate($valid);
        $data = [
            'name' => $request->name,
            'guard_name' => $request->guard_name,
            'has_backend_access' => $request->has_backend_access,
            'protected' => $request->protected,
            'for_registration' => $request->for_registration,
        ];
        $role = Role::find($request->role_id);
        $role->update($data);
        if ($role) {
            session()->flash('success', tr('role successfully updated'));
            return redirect()->back();
        } else {
            session()->flash('error', 'Unknown Error!');
            return redirect()->back();
        }
    }

    public function deleteRole(Request $request)
    {
        if (Gate::denies('deleteRoles')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $role = Role::find($request->id)->delete();
        if ($role) {
            session()->flash('success', tr('role successfully deleted'));
            return redirect()->back();
        } else {
            session()->flash('error', 'Unknown Error!');
            return redirect()->back();
        }
    }

    public function getUserRole(Request $request)
    {
        $user = User::find($request->id);
        return $user->getRoleNames();
    }

    public function assignRoleToUser(Request $request)
    {
        if (Gate::denies('assignRole')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        
        $user = User::findOrFail($request->user_id);
        $user->syncRoles($request->roles);
        return redirect()->back();
    }
}
