<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function category()
    {
        $admins = Admin::all();

        return view('admin.category.category', compact('admins'));
    }

    public function save(Request $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->save();

        return back();
    }

    public function delete($id){
        $admin = Admin::find($id);
        $admin->delete();
        return back();
    }
}
