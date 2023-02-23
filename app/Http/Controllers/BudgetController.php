<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $budgets
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'group' => 'required',
            'category' => 'required',
            'program' => 'required',
            'sub_program' => 'required',
            'department' => 'required',
            'unit_of_measurement' => 'required',
            'period' => 'required',
            'quantity' => 'required',
            'unit_price' => 'required',
            'total_exclusive' => 'required',
            'vat' => 'required',
            'total_inclusive' => 'required',
        ]);

        $budget = Budget::create($request->all());
        return [
            "status" => 1,
            "data" => $budget
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budget)
    {
        return [
            "status" => 1,
            "data" =>$budget
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit(Budget $budget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $budget)
    {
        $request->validate([
            'description' => 'required',
            'group' => 'required',
            'category' => 'required',
            'program' => 'required',
            'sub_program' => 'required',
            'department' => 'required',
            'unit_of_measurement' => 'required',
            'period' => 'required',
            'quantity' => 'required',
            'unit_price' => 'required',
            'total_exclusive' => 'required',
            'vat' => 'required',
            'total_inclusive' => 'required',
        ]);

        $budget->update($request->all());

        return [
            "status" => 1,
            "data" => $budget,
            "msg" => "Budget updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budget $budget)
    {
        $budget->delete();
        return [
            "status" => 1,
            "data" => $budget,
            "msg" => "Budget deleted successfully"
        ];
    }
}