<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
    {

        $first = "Vitalii";
        $last = "Lakusta";
        $people = ["John Doe", "Johnny Duck", "Mickey Mouse"];

        return view('about', compact('first', 'last', 'people'));
    }

    public function contact()
    {
        $first = "Vitalii";
        $last = "Lakusta";
        return view('contact', compact('first', 'last'));
    }

}
