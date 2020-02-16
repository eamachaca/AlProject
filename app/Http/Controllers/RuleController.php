<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Portal;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rule=Rule::paginate(5);
        return view('rule.index')->with(compact('rule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array=Portal::all();
        return view('rule.create')->with(compact('array'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruleAdd = new Rule;
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'portal_id' => 'required'
        ]);
        
        $ruleAdd->title = $request->title;
        $ruleAdd->description = $request->description;
        $ruleAdd->portal_id = $request->portal_id;
        $ruleAdd->save();
        return redirect()->route('rule.index')->with('agregar' , 'La norma se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function show(Rule $rule)
    {
        return view('rule.show', compact('rule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit(Rule $rule)
    {
        $array=Portal::all();
        return view('rule.edit', compact('rule','array'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rule $rule)
    {
        $rule->title = $request->title;
        $rule->description = $request->description;
        $rule->portal_id = $request->portal_id;
        $rule->save();
        return redirect()->route('rule.index')->with('update' , 'La norma se ha modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rule $rule)
    {
        $rule->delete();
        return back()->with('eliminar','La norma se elimino correctamente');
    }
}
