<?php
         
namespace App\Http\Controllers;
          
use App\Models\About;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;
        
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
   
        $abouts = About::latest()->get();
        
        if ($request->ajax()) {
            $data = About::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-about_id="'.$row->about_id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editAbout">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-about_id="'.$row->about_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteAbout">Delete</a>';
    
                            return $btn;
                    })
                    ->addColumn('img', function($row){
   
                     
                        $img = '<img class="rounded-circle avatar-md" alt="200x200" src="/uploads/about/'.$row->about_image.'" data-holder-rendered="true">';
                     
                        return $img;
                 })
   
                    ->rawColumns(['img'],['action'])
                    ->make(true);
        }
      
        return view('about',compact('abouts'));
    }
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('about_image')){
            $file = $request->file('about_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/about',$filename);

        About::updateOrCreate(['about_id' => $request->about_id],
                ['about_image'=>$filename,
                'about_head' => $request->about_head,
                'about_title' => $request->about_title,
                'about_description' => $request->about_description]);        
        }
        return response()->json(['success'=>'About saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return response()->json($about);
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::find($id)->delete();
     
        return response()->json(['success'=>'About deleted successfully.']);
    }
}