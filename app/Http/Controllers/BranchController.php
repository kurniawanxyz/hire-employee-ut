<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestUpdateBranch;
use App\Http\Requests\StoreBranchRequest;
use App\Models\Branch;
use Exception;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        private Branch $branch 
    ) {
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBranchRequest $request)
    {
        try{
            $data = $request->validated();
            $this->branch->create($data);
            return redirect()->back()->with("success","Successfully created branch");
        }catch(Exception $ex){
            return redirect()->back()->with("error","Error created branch because ".$ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestUpdateBranch $request, int $branch)
    {
        try{
            $data = $request->validated();
            $this->branch->find($branch)->update($data);
            return redirect()->back()->with("success","Successfully created branch");
        }catch(Exception $ex){
            return redirect()->back()->with("error","Error created branch because ".$ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $branch)
    {
        try{
            $this->branch->query()->findOrFail($branch)->delete();
            return redirect()->back()->with("success","Successfully deleted branch");
        }catch(Exception $ex)
        {
            return redirect()->back()->with("error","Error deleted branch because".$ex->getMessage());
        }
    }
}
