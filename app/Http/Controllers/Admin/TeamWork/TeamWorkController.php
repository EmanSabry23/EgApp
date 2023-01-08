<?php

namespace App\Http\Controllers\Admin\TeamWork;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamWork;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;


class TeamWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamwork = TeamWork::all();
        return view('admin.teamWork.index' , compact('teamwork'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teamWork.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teamwork = new TeamWork;

        $teamwork -> name = $request-> name;
        $teamwork -> description = $request-> description;
        $teamwork -> type = $request-> type;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $destinationPathThumbnail = public_path('/images/teamwork/');

            $img = Image::make($image->path());
            $img->resize(55, 55)
                   ->save($destinationPathThumbnail . '/' . $imageName);

            $teamwork->photo = url('/') . '/images/teamwork/' . $imageName;

            $destinationPath = public_path('/images/teamwork');
            $image->move($destinationPath, $imageName);
        }
        $teamwork -> save();
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
        $teamwork = TeamWork::find($id);
        return view('admin.teamWork.edit' , compact('teamwork'));
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
        $teamwork = TeamWork::find($id);

        $teamwork -> name = $request-> name;
        $teamwork -> description = $request-> description;
        $teamwork -> type = $request-> type;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $destinationPathThumbnail = public_path('/images/teamwork/');

            $img = Image::make($image->path());
            $img->resize(55, 55)
                   ->save($destinationPathThumbnail . '/' . $imageName);

            $teamwork->photo = url('/') . '/images/teamwork/' . $imageName;

            $destinationPath = public_path('/images/teamwork');
            $image->move($destinationPath, $imageName);
        }
        $teamwork -> save();
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
        $teamwork = TeamWork::find($id);
        $teamwork -> delete();

        return redirect()->back();
    }
}
