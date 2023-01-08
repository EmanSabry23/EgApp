<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio.index' , compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio;
        $portfolio -> title = $request -> title;
        $portfolio -> description = $request -> description;
        $portfolio -> link = $request -> link;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $destinationPathThumbnail = public_path('/images/portfolio/');

            $img = Image::make($image->path());
            $img->resize(55, 55)
                   ->save($destinationPathThumbnail . '/' . $imageName);

            $portfolio->photo = url('/') . '/images/portfolio/' . $imageName;

            $destinationPath = public_path('/images/portfolio');
            $image->move($destinationPath, $imageName);
        }
        $portfolio -> save();
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
        $portfolio = Portfolio::find($id);
        return view('admin.portfolio.edit' , compact('portfolio'));
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
        $portfolio = Portfolio::find($id);
        $portfolio -> title = $request -> title;
        $portfolio -> description = $request -> description;
        $portfolio -> link = $request -> link;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $destinationPathThumbnail = public_path('/images/portfolio/');

            $img = Image::make($image->path());
            $img->resize(55, 55)
                   ->save($destinationPathThumbnail . '/' . $imageName);

            $portfolio->photo = url('/') . '/images/portfolio/' . $imageName;

            $destinationPath = public_path('/images/portfolio');
            $image->move($destinationPath, $imageName);
        }
        $portfolio -> save();
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
        $portfolio = Portfolio::find($id);
        $portfolio -> delete();

        return redirect()->back();
    }
}
