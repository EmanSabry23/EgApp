<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TeamWork;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\ServiceCategory;
use App\Models\Cateory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $category = Cateory::all();
        $services = Service::with('service_categories')->get();
        // dd(json_decode($services));
        $portfolio = Portfolio::all();
        return view('user.home', compact('category' , 'services' , 'portfolio'));
    }

    public function dashboard()
    {
        if(Auth::id()){
            $user= auth()->user();
            if($user -> hasRole('super admin') ){
                return view('admin.home');
            }else{
                // $services = Service::with('service_category')->get();
                // $serviceCategories = ServiceCategory::with('service_categories')->get();
                $category = Cateory::all();
                $services = Service::with('service_categories')->get();
                $portfolio = Portfolio::all();
                return view('user.home', compact('category','services', 'portfolio'));
            }
        }else{
            return redirect()->back();
        }
    }

    public function register()
    {
        return view('user.pages.page404');
    }

    ///////////////// Begin Controller Pages ////////////////
    public function about_us()
    {
        return view('user.pages.aboutus');
    }

    public function team()
    {
        $ceo = TeamWork::where('type' , 'ceo')->get();
        $member = TeamWork::where('type' , 'member')->get();
        return view('user.pages.team' , compact('ceo' , 'member'));
    }
    public function contactus()
    {
        return view('user.pages.contactus');
    }

    // try{

    //     if(Auth::id()){
    //         if(Auth::user() -> usertype == '1'){

    //         }else{
    //             return redirect('login');
    //         }
    //     }else{
    //         return redirect()->back();
    //     }

    // }catch(\Exception $ex){

    // }
    ///////////////// EndController Pages   ////////////////
}
