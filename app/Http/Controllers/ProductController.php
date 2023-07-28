<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\product;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $category = admin::all();
    $allPro = Products::all();
    return view('admin.products.product', compact('allPro','category'));

}

public function save(request $request){
    $allPro = new Products();

    $allPro->name = $request->name;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . $file->getClientOriginalName();
        $file->move('image', $filename);
        $allPro->image = 'image/' . $filename;
    }
    $allPro->description = $request->description;
    $allPro->price = $request->price;
    $allPro->category_id = $request->category;

    $allPro->save();
    return back();
}

public function delete($id){
    $allPro = Products::find($id);
    $allPro->delete();
    return back();
}

public function edit($id){
    $allPro = Products::find($id);
    return view('admin.products.edit', compact('allPro'));
}

public function update(Request $request, $id){
    
    $allPro =  Products::find($id);
    $allPro->name =$request->name;
    
    if($request->hasfile('image')){
        $file=$request->file('image');
        $filename=time().$file->getClientOriginalName();
        $file->move('image',$filename);
    
        $allPro->image='image/'.$filename;
     
    }
    $allPro->description =$request->description;
    $allPro->price =$request->price;
    
    $allPro->update();
    return redirect('/product')->with('success', ' updated successfully!');

}


}
