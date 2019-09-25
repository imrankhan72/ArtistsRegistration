<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class LanguageController extends Controller
{
    

    public function index(){
        $language = Language::all();
        return view('language/index',compact('language'));
    }
    public function create(){
       return view('language/create'); 
    }

    public function store(Request $request){
        $request->validate([
            'lang_name'=>'required',
        ]);
        $lang = new Language([
            'lang_name'=>$request->get('lang_name'),
        ]);
        $lang->save();
        return redirect('admin/language')->with('success', 'Language has been ADDED Successfully');
    } 
    public function edit($id){
        $lang = Language::find($id);
        return view('language/edit',compact('lang','id'));
    }

    public function update(Request $request, $id){
        $request->validate([
          'lang_name'=>'required',
          
        ]);
        $language = Language::find($id);
        $language->lang_name = $request->get('lang_name');
        $language->save();
        return redirect('admin/language')->with('success', 'Language has been updated');
      }
      
      public function destroy($id){
          $language = Language::find($id);
          $language->delete();
          return redirect('admin/language')->with('success', 'Language has been deleted Successfully');
      }

}
