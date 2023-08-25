<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner; // Import the Partner model

class PartnerssController extends Controller
{
    // Function to show partners
    public function show()
    {
        $partners = Partner::all(); // Retrieve all partners from the database

        return view('partners', compact('partners'));
    }
}

