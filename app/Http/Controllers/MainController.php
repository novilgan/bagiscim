<?php

namespace App\Http\Controllers;
use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Donate;

class MainController extends Controller
{

  /*  public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }


    public function trunks()
    {
        return $this->hasMany('App\Models\Trunk');
    }*/

    public function dashboard()
    {
        //$donat= Donate::all();
        //return $don = Donate::where('status','draft')->withCount('donates')->paginate(5);
        $city = City::all();
        $donate = Donate::where('status','draft')->get();
        $donate = Donate::paginate(5);
       // $don = Donate::paginate(5);
       //return view('dashboard',compact('donates'));
        return view('dashboard',compact('donate'));
    }
    public function donate_detail()
    {
        return view('deneme');
        //return $donates = Donate::where($id);
      //return $donates = Donate::whereSlug($slug)->first() ?? abort(404,'Bağış Bulunamadı!');
    //   return view('donate_details',compact('donates'));
    }
}
