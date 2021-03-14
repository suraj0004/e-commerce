<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use App\Models\WeightType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\Admin\WeightType\FilterWeightTypeRequest;

class WeightTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.weight.weight_type')->with([
            'page' => 'weight',
        ]);
    }

     /**
     * Displays weight type information on datatable
     *
     * @param FilterWeightTypeRequest $request
     * @return void
     */
    public function getData(FilterWeightTypeRequest $request)
    {

        $totalData = WeightType::count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $request->getOrderColumn();
        $dir = $request->getDir();
        $searchValue = $request->input('search.value');

        if (empty($searchValue)) {
            $weight_types = WeightType::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $searchValue;

            $weight_types = WeightType::where('type', 'LIKE', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = WeightType::where('type', 'LIKE', "%{$search}%")
                ->count();
        }

        $data = array();

        if (!empty($weight_types)) {

            foreach ($weight_types as $key => $weight_type) {
                $nestedData['id'] = $key + $start + 1; // Sno.
                $nestedData['weight_type'] = $weight_type->type;
                $nestedData['actions'] = [
                    "edit_action" => route('admin.weight_type.update',['weight_type'=>$weight_type->id]),
                    "delete_action" => route('admin.weight_type.destroy',["weight_type" => $weight_type->id]),
                    "data" => [
                        "weight_type" => $weight_type->type,
                    ]
                ];
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data,
        );
        return response()->json($json_data, 200);
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
            'weight' => 'required|string|max:250|unique:weight_types,type',
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
    public function update(Request $request, $id)
    {
       $validator = Validator::make($request->all(), [
            'edit_weight' => 'required|string|max:250|unique:weight_types,type,'.$id,
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Validation Error',
                'error' => $validator->errors()->all()
            ], 422);
        }

        $weight = WeightType::find($id);
        $weight->type = $request->edit_weight;
        $weight->save();

        return response()->json([
            'success' => true,
            'message' => 'Weight Updated Successfully'
        ], 200);
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
        return response()->json([
            'success' => true,
            'message' => 'Weight Deleted Successfully'
        ], 200);
    }
}
