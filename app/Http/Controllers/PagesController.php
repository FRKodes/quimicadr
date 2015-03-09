<?php namespace App\Http\Controllers;
// use Illuminate\Mail\Mailer as Mail;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.home');
	}

	public function sendmail()
	{
		Mail::send('emails.contacto', [], function($message){
			$message->to('direccion@quimicadr.com')->cc('administracion@quimicadr.com')->subject('Química DR contacto');
		});
	}

}
