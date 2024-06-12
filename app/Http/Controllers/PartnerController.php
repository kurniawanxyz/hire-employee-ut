<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestImportCustomer;
use App\Http\Requests\RequestStoreCustomer;
use App\Http\Requests\RequestUpdateCustomer;
use App\Imports\CustomerImport;
use App\Models\Partner;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use function PHPUnit\Framework\isNull;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $customers = Partner::query();
        if (isset($req->name)) {
            if ($req->name != null) {
                $customers->where("name", "LIKE", "%" . $req->name . "%");
            }
        }
        $customers = $customers->paginate(5);
        return view("admin.partner.index",compact("customers"));
    }

    public function getData()
    {
        $data = Partner::all();
        return response()->json($data);
    }

    public function createWithImport()
    {
        return view("admin.partner.upload.data");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.partner.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestStoreCustomer $request)
    {
        try{
            $data = $request->validated();
            Partner::create($data);
            toastr()->success("Successfully added customer", "Success");
            return redirect()->route("admin.partner.index");
        }catch(Exception $e)
        {
            toastr()->error($e->getMessage(), "Error");
            return redirect()->back();
        }
    }

    public function importData(RequestImportCustomer $req)
    {
        try{
            $excle = $req->file("excel");
            Excel::import(new CustomerImport, $excle);
            // dd($excle);
            toastr()->success("Successfully added customer", "Success");
            return redirect()->route('admin.partner.index');
        }catch(Exception $e)
        {
            toastr()->error($e->getMessage(), "Error");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $customer)
    {
        $customer = Partner::findOrFail($customer);
        return view("admin.partner.edit",compact("customer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestUpdateCustomer $request, string $customer)
    {
        try{
            $data = $request->validated();
            Partner::findOrFail($customer)->update($data);
            toastr()->success("Successfully updated customer", "Success");
            return redirect()->route("admin.partner.index");
        }catch(Exception $e)
        {
            toastr()->error($e->getMessage(), "Error");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $customer)
    {
        try{
            Partner::findOrFail($customer)->delete();
            toastr()->success("Successfully deleted customer", "Success");
            return redirect()->back();
        }catch(Exception $e)
        {
            toastr()->error($e->getMessage(), "Error");
            return redirect()->back();
        }
    }
}
