<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member; // import model name

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Member::all();
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
        //
        $member = new Member;
        $member->name=$request->name;
        $member->email=$request->email;
        $member->address=$request->address;
        $result = $member->save();
        if($result){
            return ["Result"=>"Data has been saved"];
        }
        else{
            return ["Result"=>"Insert Operation failed"];
        }
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
        return Member::find($id);
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
        //
        $member = Member::find($id);
        $member->name = $request->name;
        $member->email= $request->email;
        $member->address= $request->address;
        $result = $member->save();
        if($result){
            return ["Result"=>"Data has been updated"];
        }
        else{
            return ["Result"=>"Update Operation failed"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $member = Member::find($id);
        $result = $member->delete();
        if($result){
            return ["Result"=>"Data has been deleted"];
        }
        else{
            return ["Result"=>"Delete Operation failed"];
        }
    }
}
