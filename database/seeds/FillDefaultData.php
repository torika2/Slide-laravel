<?php


use App\Models\About\About;
use App\Models\Languages\Locales;
use App\Models\Settings\Settings;
use App\Models\User\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class FillDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('username', 'superuser')->first();
        if (!$user) {
            $user = User::create([
                'fullname' => 'Super User',
                'username' => 'superuser',
                'email' => 'superuser@orbi.ge',
                'password' => bcrypt('superuser')
            ]);
        }


        if (!Locales::first()) {
            Locales::create([
                'active' => 1,
                'default' => 1,
                'locale' => 'ka',
                'name' => 'ქართული'
            ]);

            Locales::create([
                'active' => 1,
                'default' => 0,
                'locale' => 'en',
                'name' => 'English'
            ]);
        }
        $locale = Locales::where('default', 1)->first();


        $settings = Settings::where('key', 'sitename')->first();
        if (!$settings) {
            $setting = Settings::create(['key' => 'sitename']);

            $setting->setTranslation('value', $locale->locale, 'demo site');
            $setting->save();
        }


        $settings = Settings::where('key', 'devmode')->first();
        if (!$settings) {
            Settings::create([
                'key' => 'devmode',
                'data' => ['devmode' => 0, 'allowed_ips' => '127.0.0.1']
            ]);

        }
        //$array = ['devmode'=>1,'allowed_ips'=>'127.0.0.1']

        $settings = Settings::where('key', 'email')->first();
        if (!$settings) {
            $data = ["host" => "mail.connect.ge",
                "port" => "25",
                "contact" => "demo@connect.ge",
                "password" => "1234",
                "username" => "info@connect.ge"
            ];
            Settings::create([
                'key' => 'email',
                'data' => $data,
            ]);
        }


        $permission = Permission::where('name', 'viewRoles')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewRoles',
                'module' => 'Roles',
                'can' => 'View Roles',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createRoles')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createRoles',
                'module' => 'Roles',
                'can' => 'Create Roles',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updateRoles')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateRoles',
                'module' => 'Roles',
                'can' => 'Update Roles',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'deleteRoles')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteRoles',
                'module' => 'Roles',
                'can' => 'Delete Roles',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'changeRolePermissions')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'changeRolePermissions',
                'module' => 'Roles',
                'can' => 'Change Role Permissions',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createPermission')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createPermission',
                'module' => 'Roles',
                'can' => 'Create Permissions',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'viewUser')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewUser',
                'module' => 'Users',
                'can' => 'View Users',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createUser')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createUser',
                'module' => 'Users',
                'can' => 'Create Users',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateUser')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateUser',
                'module' => 'Users',
                'can' => 'Update Users',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'deleteUser')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteUser',
                'module' => 'Users',
                'can' => 'Delete Users',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'assignRole')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'assignRole',
                'module' => 'Users',
                'can' => 'Assign Role To User',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'viewLog')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewLog',
                'module' => 'Logs',
                'can' => 'View Logs',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'viewSettings')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewSettings',
                'module' => 'Settings',
                'can' => 'View Settings',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updateSettings')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateSettings',
                'module' => 'Settings',
                'can' => 'Update Settings',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'viewLanguage')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewLanguage',
                'module' => 'Languages',
                'can' => 'View Languages',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createLanguage')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createLanguage',
                'module' => 'Languages',
                'can' => 'Create Languages',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updateLanguage')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateLanguage',
                'module' => 'Languages',
                'can' => 'Update Languages',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteLanguage')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteLanguage',
                'module' => 'Languages',
                'can' => 'Delete Languages',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'viewTranslation')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewTranslation',
                'module' => 'Translations',
                'can' => 'View Translations',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createTranslation')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createTranslation',
                'module' => 'Translations',
                'can' => 'Create Translations',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateTranslation')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateTranslation',
                'module' => 'Translations',
                'can' => 'Update Translations',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'deleteTranslation')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteTranslation',
                'module' => 'Translations',
                'can' => 'Delete Translations',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'viewAbout')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewAbout',
                'module' => 'About',
                'can' => 'View About',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updateAbout')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateAbout',
                'module' => 'About',
                'can' => 'Update About',
                'guard_name' => 'web',
            ]);
        }

        $role = Role::where('name', 'SuperUser')->first();
        if (!$role) {
            $role = Role::create([
                'name' => 'SuperUser',
                'guard_name' => 'web',
                'has_backend_access'=>'true'
            ]);
        }



        $permission = Permission::where('name', 'viewSeo')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewSeo',
                'module' => 'Seo',
                'can' => 'View Seo',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'updateSeo')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateSeo',
                'module' => 'Seo',
                'can' => 'Update Seo',
                'guard_name' => 'web',
            ]);
        }

      




 

        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();

        //DB::statement("insert into role_has_permissions select id as permission_id, $role->id as role_id  from  permissions");
        $user->syncRoles([$role->id]);

        //php artisan db:seed --class=FillDefaultData

    }
}
