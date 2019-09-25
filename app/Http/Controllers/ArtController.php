<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Art;

class ArtController extends Controller
{
    public function get_art(){
               
        $all_art = Art::all();
        return $all_art;
    }
    public function index(){
        $art = Art::all();
        return view('art/index',compact('art'));
    }
    public function create(){
        return view('art/create');
    }
    public function store(Request $request){
        $request->validate([
            'art_form_name'=>'required',
            'category_name'=>'required'
        ]);
        $art = new Art([
            'art_form_name'=>$request->get('art_form_name'),
            'category_name'=>$request->get('category_name')
        ]);
        $art->save();
        return redirect('admin/art')->with('success', 'Art has been added Successfully');
    }

    public function edit($id){
        $art = Art::find($id);
        return view('art/edit',compact('art','id'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'art_form_name'=>'required',
            'category_name'=>'required'
        ]);
        $art = Art::find($id);
        $art->art_form_name = $request->get('art_form_name');
        $art->category_name = $request->get('category_name');

        $art->save();
        return redirect('admin/art')->with('success', 'Art has been updated');
      }
      public function destroy($id){
        $art = Art::find($id);
        $art->delete();
        return redirect('admin/art')->with('success', 'Art has been deleted Successfully');
    }
}
