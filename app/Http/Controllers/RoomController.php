<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;
use App\User;
use App\RegForm;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(RoomRequest $request)
    {
        Room::create($request->validated());
	    return redirect()->back()->with('status',"The room is now saved.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $delete = Room::where('room_id',$request->room_id)->first();
        $delete->delete();
        return redirect()->back()->with('status',"The room is now deleted");
    }

    public function list()
    {
        $users = User::get();
        $rooms = Room::get();
        $descriptions = Room::groupBy('room_desc')->pluck('room_desc');
        return view('pages.reservation')->with("rooms", $rooms)->with("descriptions", $descriptions)->with("users", $users);
    }

    /* /reg_form/approve/1 */

    /* public function approve(int $id)
    {
        
        $rooms = Room:: ;
        return ;
    } */
}
