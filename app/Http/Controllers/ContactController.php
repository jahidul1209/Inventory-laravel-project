<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ContactController extends Controller
{
   public function ContactSection(){
   	$catchcontact = DB ::table('contactsform')->get();
   	return view('contact')->with ('transfercontact',	$catchcontact);
   }

   public function InsertData(){
   	return view ('insert');
   }

   public function DataAdded(request  $request){
   		$contactdata = array();
   		$contactdata['name'] = $request->name;
   		$contactdata['email'] = $request->email;
   		$contactdata['phone'] = $request->phone;
   		$contactdata['description'] = $request->description;

   		$insert = DB::table('contactsform')->insert($contactdata);
   		return redirect()-> Route('contact');
   }

    public function DeleteData($id){
   	   		$dlt= DB::table('contactsform')->where('id', $id)->delete();
   			return redirect()-> Route('contact');
   }
       public function EditData($id){
   	   		$edt= DB::table('contactsform')->where('id', $id)->first();
   			return view ('edit',compact('edt'));
   }
       public function UpdateData(request  $request, $id){
   	   	$updateddata = array();
   		$updateddata['name'] = $request->name;
   		$updateddata['email'] = $request->email;
   		$updateddata['phone'] = $request->phone;
   		$updateddata['description'] = $request->description;

   		$udt = DB::table('contactsform')->where('id', $id)->update($updateddata);
   			return redirect()-> Route('contact');
   }
          public function ViewData($id){
   	   		$view= DB::table('contactsform')->where('id', $id)->first();
   			return view ('view',compact('view'));
   }



}
