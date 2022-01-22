<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use Str;

use Carbon\Carbon;

class RoleController extends Controller
{
    public function addform()
    {
        return view('role.add');
    }

    public function storerole(Request $request) //$request is a variable of Request which will be used for catching data
    {
        $request->validate([
            'role' => 'required',
        ]);

        echo $role = Str::upper($request->role);

        Role::insert([
            'role' => $role,
            'created_at' => Carbon::now(),
        ]);
    }
}
