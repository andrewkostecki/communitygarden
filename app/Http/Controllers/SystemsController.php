<?php

namespace App\Http\Controllers;

use App\System;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SystemsController extends Controller
{
    
    public function edit($id)  {

        $system = System::find($id);
        return view('systems.edit')->with('system', $system);
        

        // return "System";
    }

    public function update(Request $request) {

        $system = System::find($request['id']);

            $system->name = $request['name'];
            $system->imageFileName = $request['imageFileName'];

            $system->updated_at = Carbon::now()->toDateTimeString();
            $system->save();
           // return redirect('users');
           return view('systems.edit')->with('system', $system);
    }

    
}
