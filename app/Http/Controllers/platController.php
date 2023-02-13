<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\platFromRequest;
use App\Models\Category;
use App\Models\Plat;

class platController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        $plats = Plat::all();
        $categorys = Category::all();
        return view('welcome', compact('plats','categorys'));
    }
    public function index()
    {
        $plats = Plat::join('categorys', 'plats.id_category', '=', 'categorys.id')
    ->select('plats.*', 'categorys.name_category')
    ->paginate(4);
        $categorys = Category::all();
        return view('dashboard',compact('plats' , 'categorys'));   
    }
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(platFromRequest $request)
    {
        $data['plat_name']         = $request->input('plat_name');
        $data['plat_descreption']  = $request->input('plat_descreption');
        $data['plat_day']          = $request->input('plat_day');
        $data['id_category']       = $request->input('plat_category');
        if($request->hasFile('plat_picture')){
            $image=$request->file('plat_picture');
            $fileimage=time().$image->getClientOriginalName();
            $image->move(public_path('/myimages/'),$fileimage);
            $data['plat_picture']  = $fileimage;
        }else{
            $data['plat_picture']='default.png';
        }
        Plat::create($data);
        return redirect()->route('dashboard')->with('message','plat has been added successfuly');
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
        $plat=Plat::where('id',$id)->first();
        $categorys = Category::all();
        return view('edit',compact('plat','categorys'));
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
        $plat=Plat::find($id);
        if($request->hasFile('myplat_picture')){
            $image= $request->file('myplat_picture');
            $filename= time().$image->getClientOriginalName();
            $image->move(public_path('/myimages/'),$filename);
            $plat->plat_picture=$filename;
        }
        $plat->plat_name=$request->input('plat_name');
        $plat->plat_descreption=$request->input('plat_descreption');
        $plat->plat_day=$request->input('plat_day');
        $plat->id_category=$request->input('uplat_category');
        $plat->update();
        return redirect()->route('dashboard')->with('message','plat has been updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
     public function destroy($id)
     {
         Plat::where('id', $id)->delete();
         return redirect()->route('dashboard')->with('message', 'Plat has been deleted successfully');
     }
}
