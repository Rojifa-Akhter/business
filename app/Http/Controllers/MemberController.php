<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Member;
use App\Models\State;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        $states = State::all();
        return view('form.business_listing', compact('countries', 'states'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $states = State::all();
        return view('form.form', compact('countries', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'member_type' => 'required|string',
            'company' => 'required|string|max:255',
            'country_id' => 'required|integer',
            'state_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:members',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|max:15',
            'agreeBusinessListingTerms' => 'required|accepted',
        ]);

        $member = new Member();
        $member->member_type = $request->member_type;
        $member->company = $request->company;
        $member->country_id = $request->country_id;
        $member->state_id = $request->state_id;
        $member->title = $request->title;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->password = bcrypt($request->password);
        $member->save();

        return redirect()->route('form.form')->with('success', 'Member created successfully.');
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
