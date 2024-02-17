<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Voter;

class VoterController extends Controller
{
    public function viewVoter()
    {
        //$voter = DB::table('voters')->get();
        $voter = Voter::all();
        return view('voters',compact('voter'));
    }
}
