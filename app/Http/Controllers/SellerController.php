<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;

class SellerController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'email_seller' => 'required|email|unique:sellers,email_seller',
            'sellerfullname' => 'required|string|max:255',
            'pwd' => 'required|string|min:6',
            'bizname' => 'required|string|max:255',
            'biz_desc'=>'required|string',
            'state' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'biz_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'min_price' => 'nullable|numeric',
            'max_price' => 'nullable|numeric',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Hash the password
        $hashedPassword = Hash::make($request->input('pwd'));

        // Create a new seller instance
        $seller = new Seller([
            'email_seller' => $request->input('email_seller'),
            'sellerfullname' => $request->input('sellerfullname'),
            'pwd' => $hashedPassword,
            'bizname' => $request->input('bizname'),
            'biz_desc'=>$request->input('biz_desc'),
            'state' => $request->input('state'),
            'phone_number' => $request->input('phone_number'),
            'biz_logo' => null, // Replace with image handling logic if needed
            'min_price' => $request->input('min_price'),
            'max_price' => $request->input('max_price'),
        ]);

        // Save the seller to the database
        $seller->save();
        return response()->json([
            'error' => false,
            'message' => 'Seller registered successfully',
            'data' => $seller,
        ], 201);
        //return response()->json(['message' => 'Seller registered successfully'], 201);
    }

    //test
    public function user(){
        return "u are regestered";
    }

    //login 
    public function login(Request $request) {
        $credentials = $request->only('email_seller', 'pwd');
    
        if (Auth::guard('seller')->attempt($credentials)) {
            // Authentication successful
            $seller = Auth::guard('seller')->user(); // Get the authenticated seller
    
            return response()->json([
                'message' => 'Authentication successful!',
                'data' => [
                    'seller' => $seller,
                ],
            ]);
        } else {
            // Authentication failed
            return response()->json([
                'message' => 'Authentication failed. Invalid credentials.',
            ], 401); // 401 indicates unauthorized
        }
    }
    
}
