<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OperatorRequest;
use App\Models\Operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperatorController extends Controller
{
    public function show()
    {
        $operator = Operator::first();
        return view('admin.operator.index', compact('operator'));
    }

    public function update(OperatorRequest $request, string $id)
    {
        try{
            DB::beginTransaction();

            $operator = Operator::where('id', $id)->first();
            $operator->no_telp = $request->no_telp;
            $operator->email = $request->email;
            $operator->save();

            DB::commit();
            toastr()->success("Successfully update operator", 'success');
            return back();
        }catch(\Exception $e){
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back();
        }
    }
}
