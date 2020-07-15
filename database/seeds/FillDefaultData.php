<?php

use App\Models\About\About;
use App\Models\Languages\Locales;
use App\Models\Privacy\Privacy;
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

        $permission = Permission::where('name', 'viewTeam')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewTeam',
                'module' => 'Team',
                'can' => 'View Team',
                'guard_name' => 'web',
            ]);
        }
        $permission = Permission::where('name', 'createTeam')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createTeam',
                'module' => 'Team',
                'can' => 'Create Team',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updateTeam')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateTeam',
                'module' => 'Team',
                'can' => 'Update Team',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteTeam')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteTeam',
                'module' => 'Team',
                'can' => 'Delete Team',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'viewExperience')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewExperience',
                'module' => 'Experience',
                'can' => 'View Experience',
                'guard_name' => 'web',
            ]);
        }
        $permission = Permission::where('name', 'createExperience')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createExperience',
                'module' => 'Experience',
                'can' => 'Create Experience',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updateExperience')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateExperience',
                'module' => 'Experience',
                'can' => 'Update Experience',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'deleteExperience')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteExperience',
                'module' => 'Experience',
                'can' => 'Delete Experience',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'viewPartners')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewPartners',
                'module' => 'Partners',
                'can' => 'View Partners',
                'guard_name' => 'web',
            ]);
        }
        $permission = Permission::where('name', 'createPartners')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createPartners',
                'module' => 'Partners',
                'can' => 'Create Partners',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updatePartners')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updatePartners',
                'module' => 'Partners',
                'can' => 'Update Partners',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'deletePartners')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deletePartners',
                'module' => 'Partners',
                'can' => 'Delete Partners',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateStaticData')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateStaticData',
                'module' => 'Static Data',
                'can' => 'Update Static Data',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updatePrivacy')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updatePrivacy',
                'module' => 'Privacy Policy',
                'can' => 'Update',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateTerms')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateTerms',
                'module' => 'Term & condition',
                'can' => 'Update',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'viewClients')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewClients',
                'module' => 'Clients',
                'can' => 'View Clients',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'createClients')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createClients',
                'module' => 'Clients',
                'can' => 'Create Clients',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateClients')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateClients',
                'module' => 'Clients',
                'can' => 'Update Clients',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteClients')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteClients',
                'module' => 'Clients',
                'can' => 'Delete Clients',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'viewSolutions')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewSolutions',
                'module' => 'Solutions',
                'can' => 'View Solutions',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'createSolutions')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createSolutions',
                'module' => 'Solutions',
                'can' => 'Create Solutions',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateSolutions')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateSolutions',
                'module' => 'Solutions',
                'can' => 'Update Solutions',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteSolutions')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteSolutions',
                'module' => 'Solutions',
                'can' => 'Delete Solutions',
                'guard_name' => 'web',
            ]);
        }







        $permission = Permission::where('name', 'viewProjectTags')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewProjectTags',
                'module' => 'Project Tags',
                'can' => 'View Tags',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createProjectTags')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createProjectTags',
                'module' => 'Project Tags',
                'can' => 'Create Tags',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateProjectTags')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateProjectTags',
                'module' => 'Project Tags',
                'can' => 'Update Tags',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteProjectTags')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteProjectTags',
                'module' => 'Project Tags',
                'can' => 'Delete Tags',
                'guard_name' => 'web',
            ]);
        }











        $permission = Permission::where('name', 'viewProjects')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewProjects',
                'module' => 'Project',
                'can' => 'View Project',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createProjects')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createProjects',
                'module' => 'Project',
                'can' => 'Create Project',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateProjects')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateProjects',
                'module' => 'Project',
                'can' => 'Update Project',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteProjects')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteProjects',
                'module' => 'Project',
                'can' => 'Delete Project',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'viewUcIndustry')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewUcIndustry',
                'module' => 'Use Case Industries',
                'can' => 'View Industry',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'createUcIndustry')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createUcIndustry',
                'module' => 'Use Case Industries',
                'can' => 'Create Industry',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updateUcIndustry')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateUcIndustry',
                'module' => 'Use Case Industries',
                'can' => 'Update Industry',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteUcIndustry')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteUcIndustry',
                'module' => 'Use Case Industries',
                'can' => 'Delete Industry',
                'guard_name' => 'web',
            ]);
        }




        $permission = Permission::where('name', 'viewUseCases')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewUseCases',
                'module' => 'Use Cases',
                'can' => 'View Use Cases',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createUseCases')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createUseCases',
                'module' => 'Use Cases',
                'can' => 'Create Use Cases',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateUseCases')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateUseCases',
                'module' => 'Use Cases',
                'can' => 'Update Use Cases',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteUseCases')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteUseCases',
                'module' => 'Use Cases',
                'can' => 'Delete Use Cases',
                'guard_name' => 'web',
            ]);
        }




        $permission = Permission::where('name', 'viewSoftware')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewSoftware',
                'module' => 'Software',
                'can' => 'View Software',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updateSoftware')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateSoftware',
                'module' => 'Software',
                'can' => 'Update Software',
                'guard_name' => 'web',
            ]);
        }




        $permission = Permission::where('name', 'viewSoftwarePricing')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewSoftwarePricing',
                'module' => 'Software Pricing',
                'can' => 'View Pricing',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'createSoftwarePricing')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createSoftwarePricing',
                'module' => 'Software Pricing',
                'can' => 'Create Pricing',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateSoftwarePricing')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateSoftwarePricing',
                'module' => 'Software Pricing',
                'can' => 'Update Pricing',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteSoftwarePricing')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteSoftwarePricing',
                'module' => 'Software Pricing',
                'can' => 'Delete Pricing',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'viewUseCaseContainer')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewUseCaseContainer',
                'module' => 'Use Case Container',
                'can' => 'View',
                'guard_name' => 'web',
            ]);
        }
        $permission = Permission::where('name', 'createUseCaseContainer')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createUseCaseContainer',
                'module' => 'Use Case Container',
                'can' => 'Create',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'updateUseCaseContainer')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateUseCaseContainer',
                'module' => 'Use Case Container',
                'can' => 'Update',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'deleteUseCaseContainer')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteUseCaseContainer',
                'module' => 'Use Case Container',
                'can' => 'Delete',
                'guard_name' => 'web',
            ]);
        }








        $permission = Permission::where('name', 'viewProductDetails')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewProductDetails',
                'module' => 'Product Details',
                'can' => 'View Product Details',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'createProductDetails')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createProductDetails',
                'module' => 'Product Details',
                'can' => 'Create Product Details',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateProductDetails')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateProductDetails',
                'module' => 'Product Details',
                'can' => 'Update Product Details',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'deleteProductDetails')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteProductDetails',
                'module' => 'Product Details',
                'can' => 'Delete Product Details',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'viewProduct')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewProduct',
                'module' => 'Products',
                'can' => 'View Product',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateProduct')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateProduct',
                'module' => 'Products',
                'can' => 'Update Product',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createProduct')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createProduct',
                'module' => 'Products',
                'can' => 'Create Product',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteProduct')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteProduct',
                'module' => 'Products',
                'can' => 'Delete Product',
                'guard_name' => 'web',
            ]);
        }




        $permission = Permission::where('name', 'viewFAQ')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewFAQ',
                'module' => 'F.A.Q',
                'can' => 'View F.A.Q',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createFAQ')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createFAQ',
                'module' => 'F.A.Q',
                'can' => 'Create F.A.Q',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'updateFAQ')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateFAQ',
                'module' => 'F.A.Q',
                'can' => 'Update F.A.Q',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'deleteFAQ')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteFAQ',
                'module' => 'F.A.Q',
                'can' => 'Delete F.A.Q',
                'guard_name' => 'web',
            ]);
        }




        $permission = Permission::where('name', 'viewTutorial')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewTutorial',
                'module' => 'Tutorials',
                'can' => 'View Tutorials',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createTutorial')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createTutorial',
                'module' => 'Tutorials',
                'can' => 'Create Tutorials',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'updateTutorial')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateTutorial',
                'module' => 'Tutorials',
                'can' => 'Update Tutorials',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteTutorial')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteTutorial',
                'module' => 'Tutorials',
                'can' => 'Delete Tutorials',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'viewContact')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewContact',
                'module' => 'Contact',
                'can' => 'View Tutorials',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createContact')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createContact',
                'module' => 'Contact',
                'can' => 'Create Tutorials',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateContact')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateContact',
                'module' => 'Contact',
                'can' => 'Update Tutorials',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteContact')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteContact',
                'module' => 'Contact',
                'can' => 'Delete Tutorials',
                'guard_name' => 'web',
            ]);
        }






        $permission = Permission::where('name', 'viewWelyHube')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewWelyHube',
                'module' => 'Wely Hube Component',
                'can' => 'View Wely Hube',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'createWelyHube')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createWelyHube',
                'module' => 'Wely Hube Component',
                'can' => 'Create Wely Hube',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateWelyHube')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateWelyHube',
                'module' => 'Wely Hube Component',
                'can' => 'Update Wely Hube',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteWelyHube')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteWelyHube',
                'module' => 'Wely Hube Component',
                'can' => 'Delete Wely Hube',
                'guard_name' => 'web',
            ]);
        }



        $permission = Permission::where('name', 'viewAdvantage')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewAdvantage',
                'module' => 'Advantage Component',
                'can' => 'View Advantage',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createAdvantage')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createAdvantage',
                'module' => 'Advantage Component',
                'can' => 'Create Advantage',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateAdvantage')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateAdvantage',
                'module' => 'Advantage Component',
                'can' => 'Update Advantage',
                'guard_name' => 'web',
            ]);
        }

        $permission = Permission::where('name', 'deleteAdvantage')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteAdvantage',
                'module' => 'Advantage Component',
                'can' => 'Delete Advantage',
                'guard_name' => 'web',
            ]);
        }




        $permission = Permission::where('name', 'viewHomeHead')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewHomeHead',
                'module' => 'Home Head Component',
                'can' => 'View Home Head Component',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createHomeHead')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createHomeHead',
                'module' => 'Home Head Component',
                'can' => 'Create Home Head Component',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateHomeHead')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateHomeHead',
                'module' => 'Home Head Component',
                'can' => 'Update Home Head Component',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteHomeHead')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteHomeHead',
                'module' => 'Home Head Component',
                'can' => 'Delete Home Head Component',
                'guard_name' => 'web',
            ]);
        }





        $permission = Permission::where('name', 'viewMenu')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'viewMenu',
                'module' => 'Menu',
                'can' => 'View Menu',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'createMenu')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'createMenu',
                'module' => 'Menu',
                'can' => 'Create Menu',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'updateMenu')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'updateMenu',
                'module' => 'Menu',
                'can' => 'Update Menu',
                'guard_name' => 'web',
            ]);
        }


        $permission = Permission::where('name', 'deleteMenu')->first();
        if (!$permission) {
            Permission::create([
                'name' => 'deleteMenu',
                'module' => 'Menu',
                'can' => 'Delete Menu',
                'guard_name' => 'web',
            ]);
        }



        $privacy = Privacy::find(1);
        if(!$privacy){
            $privacy = New Privacy();
            $privacy->save();
        }

        $terms = Privacy::find(2);
        if (!$terms){
            $terms = New Privacy();
            $terms->save();
        }

        $about = About::first();
        if (!$about){
          $about =  New About();
          $about->save();
        }

        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();
        $permissions = Permission::get();
        $role->syncPermissions($permissions);
        $user->syncRoles([$role->id]);


        //php artisan db:seed --class=FillDefaultData

    }
}
