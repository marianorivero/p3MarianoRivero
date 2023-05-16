<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;
//
class AuditController extends Controller
{
    public function index()
    {
        //
        $audits = Audit::all();
        return view('audits.index', compact('audits'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
