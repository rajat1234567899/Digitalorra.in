<?php
namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showServices() // Ensure the method name matches
    {
        $services = Service::all();
        return view('frontend.services', compact('services'));
    }
}
