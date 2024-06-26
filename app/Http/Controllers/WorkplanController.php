<?php

namespace App\Http\Controllers;

use App\Http\Requests\Workplan\WorkplanRequest;
use App\Models\Workplan;
use App\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class WorkplanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('workplan.index',[
            'title' => 'Table Workplan',
            "results" => Workplan::latest()->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Workplan $workplan)
    {
        return view('workplan.show',[
            'title' => 'Show Workplan',
            "workplan" => $workplan,
            "results" => User::get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workplan $workplan)
    {
        return view('workplan.edit',[
            'title' => 'Create Workplan',
            "workplan" => $workplan,
            "results" => User::where('position_id',7)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkplanRequest $request, Workplan $workplan)
    {
        return $workplan->handleStoreOrUpdate($request);
    }

    public function print(Workplan $workplan)
    {
        // dd($workplan);
        $pdf = PDF::loadView(
            'workplan.print',
            compact('workplan')
        )
            ->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    
}
