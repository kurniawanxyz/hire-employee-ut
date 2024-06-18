<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = User::whereNot('email', config('app.admin_email'))->paginate(10);
        return view('admin.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        try {
            DB::beginTransaction();

            $customer = new User;
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->customer_email = $request->customer_email;
            $customer->no_telp = $request->no_telp;
            $customer->password = Hash::make($request->password);
            $customer->save();

            DB::commit();

            toastr()->success("Successfully add customer: {$customer->name}");
            return to_route('admin.customer.index');
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = User::where('id', $id)->first();
        if (!$customer) {
            toastr()->error("Customer ID not found!");
            return back();
        }
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, string $id)
    {
        try {
            DB::beginTransaction();

            $customer = User::where('id', $id)->first();

            if (!$customer) {
                toastr()->error("Customer ID not found!");
                return back();
            }

            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->customer_email = $request->customer_email;
            $customer->no_telp = $request->no_telp;

            if(!empty($request->password)){
                $customer->password = Hash::make($request->password);
            }
            $customer->save();

            DB::commit();

            toastr()->success("Successfully add customer: {$customer->name}");
            return to_route('admin.customer.index');
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();

            $customer = User::where('id', $id)->first();
            if (!$customer) {
                toastr()->error("Branch ID not found!");
                return back();
            }

            $name = $customer->name;
            $customer->delete();
            DB::commit();

            toastr()->success("Successfully deleted customer: $name");
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back();
        }
    }
}
