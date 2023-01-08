<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cateory;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cateory::all();
        return view('admin.category.index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Cateory;

        $category -> description = $request-> description;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $destinationPathThumbnail = public_path('/images/category/');

            $img = Image::make($image->path());
            $img->resize(55, 55)
                   ->save($destinationPathThumbnail . '/' . $imageName);

            $category->photo = url('/') . '/images/category/' . $imageName;

            $destinationPath = public_path('/images/category');
            $image->move($destinationPath, $imageName);
        }
        $category -> save();
        return redirect()->back();

        // $image = $request->file('photo');
        // $imageName = date("dHis-").preg_replace("/[^a-zA-Z0-9.]/","",$image->getClientOriginalName());
        // $uploadPath = public_path();
        // $image->move($uploadPath,$imageName);
        // //Thumbnail Creation
        // $thumbPath = $uploadPath.'/thumbs/';
        // File::isDirectory($thumbPath) or File::makeDirectory($thumbPath,0775,true,true);
        // if($image->getClientOriginalExtension() != 'svg'){
        //     $imageThmb = Image::make($uploadPath.'/images/category/'.$imageName);
        //     $imageThmb->fit(55,55,function($constraint){$constraint->upsize();})->save($uploadPath.'/images/category/'.$imageName,80);
        // }else{
        //     File::copy($uploadPath.'/imagesWeb/category/'.$imageName,$uploadPath.'/thumbs/thm_'.$imageName);
        //     // File::copy($uploadPath.'/images/category/'.$imageName,$uploadPath.'/images/category/'.$imageName);
        // }
   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cateory::find($id);
        return view('admin.category.edit' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Cateory::find($id);

        $category -> description = $request-> description;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $destinationPathThumbnail = public_path('/images/category/');

            $img = Image::make($image->path());
            $img->resize(55, 55)
                   ->save($destinationPathThumbnail . '/' . $imageName);

            $category->photo = url('/') . '/images/category/' . $imageName;

            $destinationPath = public_path('/images/category');
            $image->move($destinationPath, $imageName);
        }
        $category -> save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Cateory::find($id);
        $category -> delete();

        return redirect()->back();
    }
}
