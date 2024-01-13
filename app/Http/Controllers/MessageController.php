<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function getMessage() {
        $message = DB::table('message')->get();
        return response()->json([
            'success' => true,
            'data' => $message
        ]);
    }
    public function storeMessage(Request $request) {
        
    }
}
