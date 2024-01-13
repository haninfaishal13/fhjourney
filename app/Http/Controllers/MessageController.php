<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function getMessage() {
        $message = Message::orderBy('created_at', 'desc')->get();
        return response()->json([
            'success' => true,
            'data' => $message,
        ]);
    }
    public function storeMessage(Request $request) {
        $validator = Validator::make($request->all(), [
            'sender' => ['required'],
            'content' => ['required'],
        ]);
        if($validator->fails()) {
            $errors = [];
            foreach($validator->errors()->messages() as $error) {
                foreach($error as $err) {
                    array_push($errors, $err);
                }
            }

            return response()->json([
                'success' => false,
                'message' => $errors
            ], 422);
        }
        Message::create([
            'sender' => $request->sender,
            'content' => $request->content,
        ]);
        return response()->json([
            'success' => true,
        ]);
    }
}
