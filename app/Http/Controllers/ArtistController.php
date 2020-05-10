<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Creation;

class ArtistController extends Controller
{
    public function index(){
        $arts = ['गायन','वादन','नृत्‍य', 'चित्र', 'शिल्‍प', 'रंगमंच','अन्य'];
        $districts = ['Anuppur', 'Ashoknagar', 'Balaghat','Barwani', 'Betul','Bhind', 'Bhopal', 'Burhanpur'];
        return view('form',compact('arts','districts'));
    
      }
    public function store(Request $request) {
        
        $creation_mode = implode(",", $request->get('creation_mode'));
        $creation_mode_sub = implode(",", $request->get('creation_mode_sub'));

        if($request->hasFile('artist_photo')){
            $artist_photo =  $request->file('artist_photo');
            $artistphoto_url = $artist_photo->getClientOriginalName().time().'.'.$artist_photo->getClientOriginalExtension();
            $artist_photo->move(public_path(). "/userfiles", $artistphoto_url);
        }
        else{
            $artistphoto_url = 'Not Photo Uploaded';
        }

        

        $artist = new Artist([
            'name'=>$request->get('name'),
            'fathersname'=>$request->get('fathersname'),
            'dob'=>$request->get('dob'),
            'gender'=>$request->get('gender'),
            'email'=>$request->get('email'),
            'pno'=>$request->get('pno'),
            'city'=>$request->get('city'),
            'address'=>$request->get('address'),
            'experience'=>$request->get('experience'),
            'photourl'=>$artistphoto_url,
            'creation_mode'=>$creation_mode,
            'creation_mode_sub'=>$creation_mode_sub,
            'creation_video_url'=>$request->get('creation_video_url'),
            'adhaar'=>$request->get('adhaar'),
            'pan'=>$request->get('pan'),
            'bank_name'=>$request->get('bank_name'),
            'ifsc_code'=>$request->get('ifsc_code'),
            'branch_name'=>$request->get('branch_name'),
            'scheme'=>$request->get('scheme'),
            'presenter'=>$request->get('presenter'),
        ]);

        $artist->save();

        $artist_id = $artist->id;
        if($request->hasFile('creation')) {
            $creations = $request->file('creation');
            foreach($creations as  $creations) {
              $filename = time().$creations->getClientOriginalName();
              $creations->move(public_path(). "/userfiles", $filename);
                $new_creation = new Creation([
                    'artist_id'=>$artist_id,
                    'creation_file_name'=>$filename
                ]);
                $new_creation->save();
              //DB::insert('insert into creations (artist_id,creation_file_name) values (?, ?)', array($artist_id,$filename));
          }
        }

        return redirect('/')->with('success', 'Your registration has been added Successfully');
        

        
    }
    public function view(){
        $all_artist = Artist::all();
        return view('artist/index',compact('all_artist'));
    }
    public function view_details($id){
        $artist = Artist::find($id);
        $creations =  $artist->creations;
        return view('artist/view_details',compact('artist','creations'));
    }

    public function delete($id){
        $artist = Artist::find($id);
          $artist->delete();
          //$creations =  $artist->creations;
          //$creations->delete();
         
          return redirect('admin/artist')->with('success', 'Artist has been deleted Successfully');
    }

    public function edit($id){
        $artist = Artist::find($id);
        
        $creations =  $artist->creations;
        return view('artist/edit',compact('artist','creations'));
    }

    public function update(Request $request, $id){

        $artist_photo =  $request->file('artist_photo');
        $artistphoto_url = $artist_photo->getClientOriginalName().time().'.'.$artist_photo->getClientOriginalExtension();
        $artist_photo->move(public_path(). "/userfiles", $artistphoto_url);

        
       
        $artist = Artist::find($id);

        

        $artist->name = $request->get('name');
        $artist->fathersname = $request->get('fathersname');
        $artist->dob = $request->get('dob');
        $artist->gender = $request->get('gender');
        $artist->language = $request->get('language');
        $artist->email = $request->get('email');
        $artist->pno = $request->get('pno');
        $artist->address = $request->get('address');
        $artist->artist_level = $request->get('artist_level');
        $artist->creation_video_url = $request->get('creation_video_url');
        $artist->name_inst = $request->get('name_inst');
        $artist->inst_address = $request->get('inst_address');
        $artist->adhaar = $request->get('adhaar');
        $artist->bank_name = $request->get('bank_name');
        $artist->ifsc_code = $request->get('ifsc_code');
        $artist->branch_name = $request->get('branch_name');
        $artist->scheme = $request->get('scheme');
        $artist->presenter = $request->get('presenter');
        $artist->photourl = $artistphoto_url;


        $artist->save();

        return redirect('admin/artist')->with('success', 'Artist has been updated');
      }
 }
