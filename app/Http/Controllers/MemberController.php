<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function update (Request $req){
        $member = Member::find($req->id);
        $member->name = $req->name;
        $member->address = $req->address;
        $result = $member->save();
        if ($result) {
            return 'one data updatd';
        } else {
            return 'error found';
        }

    }
}