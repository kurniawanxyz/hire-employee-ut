<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestUpdateLandingPage;
use App\Models\Branch;
use App\Models\LandingPage;
use App\Models\Operator;
use App\Models\User;
use App\Traits\ImageTrait;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $landingPage = LandingPage::all()->first();
        $branchs = Branch::all()->count();
        $landingPage["total_branch"] = $branchs;
        $operator = User::where('email', config('app.customer_email'))->first();
        return view("welcome", compact("landingPage","operator"));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LandingPage $landingPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $landingPage = LandingPage::all()->first();
        return view("admin.landingPage.index", compact("landingPage"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestUpdateLandingPage $request)
    {
        try{
            $landingPage = LandingPage::first();
            $data = $request->validated();

            if($request->hasFile('hero_section_image_1')) {
                $this->deleteImage($landingPage->hero_section_image_1);
                $data['hero_section_image_1'] = $this->uploadImage($request->file('hero_section_image_1'),"heroImg");
            }
            if($request->hasFile('hero_section_image_2')) {
                $this->deleteImage($landingPage->hero_section_image_2);
                $data['hero_section_image_2'] = $this->uploadImage($request->file('hero_section_image_2'),"heroImg");
            }
            if($request->hasFile('hero_section_image_3')) {
                $this->deleteImage($landingPage->hero_section_image_3);
                $data['hero_section_image_3'] = $this->uploadImage($request->file('hero_section_image_3'),"heroImg");
            }

            $landingPage->update($data);
            toastr()->success("Landing Page Updated","Success");
            return redirect()->back();
        }catch(Exception $e)
        {
            toastr()->error($e->getMessage(),"Error");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LandingPage $landingPage)
    {
        //
    }
}
