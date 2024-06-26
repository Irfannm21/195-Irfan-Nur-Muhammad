<?php
namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\OfficeRequest;
use App\Http\Requests\Master\SoRequest;
use App\Models\Models\Organization\StrukturOrganization;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('office.index', [
            'title' => 'Main Office',
            'result' => StrukturOrganization::where('code',"BASE")->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StrukturOrganization $office)
    {
        return view('office.edit', [
            'title' => 'Main Office',
            'office' => $office,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OfficeRequest $request, StrukturOrganization $office)
    {
        return $office->handleStoreOrUpdate($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
