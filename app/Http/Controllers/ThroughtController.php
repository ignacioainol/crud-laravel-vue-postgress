<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThroughtController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        return Throught::where('user_id', auth()->id())->get();
    }

    public function store(Request $request)
    {
        $throught = new Throught();
        $throught->description = $request->description;
        $throught->user_id = auth()->id();
        $throught->save();

        return $throught;
    }

    public function update(Request $request, $id)
    {
        $throught = Throught::find($id);
        $throught->description = $request->description;
        $throught->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $throught = Throught::find($id);
        $throught->delete();
    }
}
