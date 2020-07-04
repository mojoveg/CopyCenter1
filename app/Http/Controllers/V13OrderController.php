<?php

namespace App\Http\Controllers;

use App\V13Order;
use Illuminate\Http\Request;

class V13OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = V13Order::all();
        return view('orders.index', compact('orders'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\V13Order  $v13Order
     * @return \Illuminate\Http\Response
     */
    public function show(V13Order $v13Order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\V13Order  $v13Order
     * @return \Illuminate\Http\Response
     */
    public function edit(V13Order $v13Order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\V13Order  $v13Order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, V13Order $v13Order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\V13Order  $v13Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(V13Order $v13Order)
    {
        //
    }
}
