<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = ServiceCategory::all();
        return view('admin.services.serviceCategory.index' , compact('category'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.serviceCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new ServiceCategory;

        $category -> title = $request-> title;
        $category -> description = $request-> description;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $destinationPathThumbnail = public_path('/images/service/');

            $img = Image::make($image->path());
            $img->resize(55, 55)
                   ->save($destinationPathThumbnail . '/' . $imageName);

            $category->photo = url('/') . '/images/service/' . $imageName;

            $destinationPath = public_path('/images/service');
            $image->move($destinationPath, $imageName);
        }
        
        $category -> save();
        return redirect()->back();
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
        $category = ServiceCategory::find($id);
        return view('admin.services.serviceCategory.edit' , compact('category'));
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
        $category = ServiceCategory::find($id);

        $category -> title = $request-> title;
        $category -> description = $request-> description;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $destinationPathThumbnail = public_path('/images/service/');

            $img = Image::make($image->path());
            $img->resize(55, 55)
                   ->save($destinationPathThumbnail . '/' . $imageName);

            $category->photo = url('/') . '/images/service/' . $imageName;

            $destinationPath = public_path('/images/service');
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
        $category = ServiceCategory::find($id);

        $category -> delete();

        return redirect()->back();
    }
}
