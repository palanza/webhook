<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Rest extends Controller
{

    public function register(Request $request)
    {
//        $request->all()
        Log::info(time().' - request sent');
        $res = [
            'result' => 'request sent',
            'data' => $request->all()
        ];
        return response()->json($res, 200);
    }

    public function no(Request $request)
    {
        return response()->json([
            "message" => "only in post method allowed"
        ], 201);
    }

    public function love()
    {
        return view('rest.love');
    }

}

