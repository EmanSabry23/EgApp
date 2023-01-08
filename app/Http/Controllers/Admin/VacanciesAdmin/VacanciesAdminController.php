<?php

namespace App\Http\Controllers\Admin\VacanciesAdmin;

use App\Http\Controllers\Controller;
use App\Models\Vacancies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacanciesAdminController extends Controller
{
    public function show()
    {
        try{
            if(Auth::id()){
                if(Auth::user() -> hasRole('super admin')){
                    $data = Vacancies::all();
                    return view('admin.vacancies.show' , compact('data'));
                }else{
                    return redirect('login');
                }
            }else{
                return redirect()->back();
            }
        }catch(\Exception $ex){
            return redirect()->back();
        }
    }

    public function view($id)
    {
        try{
            if(Auth::id()){
                if(Auth::user() -> hasRole('super admin')){
                    $data = Vacancies::find($id);
                    return view('admin.vacancies.view' , compact('data'));
                }else{
                    return redirect('login');
                }
            }else{
                return redirect()->back();
            }
        }catch(\Exception $ex){
            return view('admin.error-500');
        }
    }
}
