<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Career;

class CareerController extends Controller
{
    public function index()
    {
		$careers = Career::all()->sortBy('name');
        return view('careers.index', compact('careers'));
    }

    public function create()
    {
        return view('careers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $career = Career::create([
            'name' => $request->name,
        ]);

        return redirect()->route('careers.index');
    }

    public function edit(string $id)
    {
        $career= Career::where('id', $id)->get();
        return view('careers.edit', compact('career'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $career= Career::find($id);
        $career->name= $request->name;
        $career->save();
        return redirect()->route('careers.index');
    }

    public function destroy(string $id)
    {
        Career::destroy($id);
        return redirect()->route('careers.index');
    }
}
