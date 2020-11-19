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

}
