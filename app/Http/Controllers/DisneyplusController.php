<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Disneyplus;
class DisneyplusController extends Controller
{

    public function index()
{
        $shows = Disneyplus::all();

        return view('list', compact('shows'));
}
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'show_name' => 'required|max:255',
            'series' => 'required|max:255',
            'lead_actor' => 'required|max:255',
        ]);
        Disneyplus::create($validatedData);

        return redirect('/disneyplus/list')->with('success', 'Disney Plus Show is successfully saved');
    }

    public function downloadPDF($id) {
        $show = Disneyplus::find($id);
        $pdf = PDF::loadView('pdf', compact('show'));

        return $pdf->download('disney.pdf');
}




}
