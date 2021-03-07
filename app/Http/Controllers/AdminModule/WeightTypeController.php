<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use App\Models\WeightType;
use Illuminate\Http\Request;
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
            'page' => 'weight',
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

        $validator = Validator::make($request->all(), [
            'weight' => 'required|string|max:250',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->errors()->all(),
                'message' => 'validation Error',
            ], 422);
        }

        $weight = new WeightType();
        $weight->type = $request->weight;
        $weight->save();
        $request->session()->flash('status', 'Weight Added Successfully');
        // return redirect()->back();

        return response()->json([
            'success' => true,
            'message' => 'Weight Added Successfully'
        ], 200);

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
            'edit_weight' => 'required|string|max:250',
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
