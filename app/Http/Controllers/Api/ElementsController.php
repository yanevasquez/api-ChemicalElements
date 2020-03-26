<?php

namespace App\Http\Controllers\Api;

use App\Element; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElementsController extends Controller
{
    /**
     * Display a listing of chemical elements
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements= Element::all();
        return $elements;
    }

    /**
     * Store a newly created Element in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $element= new Element($request->all());
        $element->save();
        return $element;
    }

    /**
     * Display the specified Element
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Element::findOrAbort($id);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $element=Element::findOrAbort($id);
        $element->fill($request->only(['name', 'symbol','wight']));
        $element->save();

        return $element;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element=Element::findOrAbort($id);
        $element->delete();

        return \Response::json(['sucess'=> true]);
    }
}
 