<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WeightType;
use Illuminate\Support\Facades\Validator;


class WeightTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weight = WeightType::all();
        return view('admin.weight.weight_type')->with([
            'weights' => $weight,
            'page' => 'weight'
        ]);
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

        Validator::make($request->all(), [
            'weight' => 'required|string|max:250'
        ])->validate();
        $weight = new WeightType();
        $weight->type = $request->weight;
        $weight->save();
        $request->session()->flash('status', 'Weight Added Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'edit_weight_id' => 'required|integer|exists:weight_types,id',
            'edit_weight' => 'required|string|max:250'
        ])->validate();
        $weight = WeightType::find($request->edit_weight_id);
        $weight->type = $request->edit_weight;
        $weight->save();
        $request->session()->flash('status', "Weight Updated Successfully");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        WeightType::where('id', $id)->delete();
        $request->session()->flash('status', "Weight Deleted Successfully");
        return redirect()->back();
    }
}
