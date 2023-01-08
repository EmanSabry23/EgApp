<?php

namespace App\Http\Controllers\User\Vacancies;

use App\Http\Controllers\Controller;
use App\Models\Vacancies;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VacanciesController extends Controller
{
    public function show()
    {
        try{
            return view('user.pages.vacancies.show');
        }catch(\Exception $ex){
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $data = new Vacancies;

        $data -> username = $request -> username;
        $data -> lastname = $request -> lastname;
        $data -> email = $request -> email;
        $data -> phone = $request -> phone;

        $image = $request -> photo;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request -> photo -> move('images/vacancies' , $imagename);
        $data -> photo = $imagename;

        $data -> save();    
        Alert::success('تم الارسال بنجاح' , 'تم ارسال السيرة الذاتية الخاص بك وسيتم الرد عليك قريبا !!');
        return redirect()->back();
    }
}
