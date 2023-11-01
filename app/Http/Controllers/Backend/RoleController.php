<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\PermissionImport;
use App\Exports\PermissionExport;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Role;



class RoleController extends Controller
{
public function AllPermission()
{
$permission = Permission::all();

return view('backend.pages.permission.all_permission',compact('permission'));
}
public function AddPermission()
{
return view('backend.pages.permission.add_permission');
}

///////////Storing Permission/////////////////////
public function StorePermission(Request $request){
    //store daata in Permission table
           $permission = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name

             ]);
             $notification = array(
                'message' => 'Permission created successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.permission')->with($notification);

            }

public function  EditPermission($id)
{
$permission = Permission::findOrFail($id);
return view('backend.pages.permission.edit_permission', compact('permission'));
}


public function UpdatePermission(Request $request){
    //store daata in Permission table
    $per_id = $request->id;
           Permission::findOrFail($per_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,

             ]);
             $notification = array(
                'message' => 'Permission updated successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.permission')->with($notification);

            }

            public function DeletePermission($id){
                Permission::findOrFail($id)->delete();

                $notification = array(
                    'message' => 'Permission Deleted successfully',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
                }

public function ImportPermission(){
    return view('backend.pages.permission.import_permission');
}

public function Export(){
 return Excel::download(new PermissionExport, 'permission.xlsx');
}

public function Import(Request $request){
    Excel::import(new PermissionImport, $request->file('import_file'));
    //{
    $notification = array(
        'message' => 'File imported successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
    }
    /////////////////ROLE ALL METHOD/////////////////

    public function AllRoles(){
        $roles= Role::all();
        return view('backend.pages.roles.all_roles', compact('roles'));
        }
        public function AddRoles(){
            return view('backend.pages.roles.add_roles');
        }
/////////////////////////////////////////STORING ROLES/////////////////////////////////////////////////////


public function StoreRoles(Request $request){
    //store daata in roles table
           Role::create([
            'name' => $request->name,

             ]);
             $notification = array(
                'message' => 'Permission created successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.roles')->with($notification);

            }
////////////////EDIT ROLE//////////////////////////
            public function EditRoles($id)
            {
                //ww use a variable called roles to access the Role model and access the id using find or fil
                $roles = Role::findOrFail($id);
                return view('backend.pages.roles.edit_roles', compact('roles'));
            }
public function UpdateRoles(Request $request){
    $role_id = $request->id;
    Role::findOrFail( $role_id)->update([
        'name' => $request->name,
    ]);
    $notification = array(
        'message' => 'Roles updated successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.roles')->with($notification);

    }
    public function DeleteRoles($id){

        Role::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Roles Deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.roles')->with($notification);

        }
        //////////////////////ADDING ROLE PERMISSION ALL METHOD
       // CONNECTING THE ROLE TO THE USER
public function AddRolesPermission(){
    $roles = Role::all();
    $permission = Permission::all();
    $permission_groups = User::getpermissionGroups();

    //instead of rolesetup we use new folder
    return view('backend.pages.rolesetup.add_roles_permission', compact('roles',
    'permission','permission_groups'));

}
public function RolePermissionStore(Request $request)
    {
      $data = array();
      $permissions = $request->permission;
      foreach($permissions as $key => $item)
      {
        $data['role_id'] = $request->role_id;
        $data['permission_id'] = $item;
       /// $esho(p->payathome = $request->get('payathome')

        DB::table('role_has_permissions')->insert($data);

        //DB::table('role_has_permissions')->insert($data);
        //$eshop->payathome = $request->get('payathome')=="on"?1:0;

      }

////////////////end of original code/////////////////////////

      $notification = array(
        'message' => 'Roles Permission Added successfully',
        'alert-type' => 'success'

    );
 return redirect()->route('all.roles.permission')->with($notification);

    }

    public function AllRolesPermission(){
        $roles = Role::all();
        return view('backend.pages.all_roles_permission', compact('roles'));

    }
    public function AdminEditRoles($id){
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.pages.rolesetup.edit_roles_permission',
        compact('role','permissions','permission_groups'));

    }
    public function AdminRolesUpdate(Request $request, $id){
        $role = Role::findOrFail($id);
        $permissions = $request->permission;
        if(!empty($permissions)){
            $role->syncPermissions($permissions);
        }

        $notification = array(
            'message' => 'Roles Permission Updated successfully',
            'alert-type' => 'success'

        );
     return redirect()->route('all.roles.permission')->with($notification);

    // );



    }


    public function AdminDeleteRoles($id){
        $role = Role::findOrFail($id);
        if(!is_null($role)){
            $role->delete();
        }
        $notification = array(
            'message' => 'Deleted successfully',
            'alert-type' => 'warning'

        );
     return redirect()->route('all.roles.permission')->with($notification);


    
    }
    












    }

