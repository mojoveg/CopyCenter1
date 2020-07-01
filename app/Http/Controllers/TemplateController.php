<?php

namespace App\Http\Controllers;

use App\Http\Requests\TemplateForm;
use App\template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->edit(new Template());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->update($request, new Template());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(template $template)
    {
        return view('templates.edit')->withTemplate($template);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, template $template)
    {
        $request->persist($template);
        return redirect(route('templates.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(template $template)
    {
        //
    }
}
