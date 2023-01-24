<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Device; // import model name

class DeviceController extends Controller
{
    //List all data from table
    function list(){
        return Device::all(); // Device is model name and Devices is table name, get all data from table "devices"
    }
    // List data by id
    function listById($id){
        return Device::find($id); // Device is model name and Devices is table name, get all data from table "devices" and "$id" is field name of table "devices"
    }
    //Insert data into table
    function add(Request $req){
        $device = new Device;
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result = $device->save();
        if($result){
            return ["Result"=>"Data has been saved"];
        }
        else{
            return ["Result"=>"Insert Operation failed"];
        }
    }
    // update data in table by id
    function update(Request $req){
        $device = Device::find($req->id);
        $device->name = $req->name;
        $device->member_id = $req->member_id;
        $result = $device->save();
        if($result){
            return ["Result"=>"Data has been updated"];
        }
        else{
            return ["Result"=>"Update Operation failed"];
        }
    }

    // delete data in table by id
    function delete($id){
        $device = Device::find($id);
        $result = $device->delete();
        if($result){
            return ["Result"=>"Data has been deleted"];
        }
        else{
            return ["Result"=>"Delete Operation failed"];
        }
    }

    // seach 
    function search($name){
        return Device::where("name","like","%".$name."%")->get();
    }
}
