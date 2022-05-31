<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class WelcomeController extends Controller
{
    public function index(Request $request){
        $about =About::latest()->get();
        return view('welcome',compact('about'));
     }

    public function aboutList(){
$AboutList = About::all('about_id');
echo json_encode($AboutList);
    } 

}
