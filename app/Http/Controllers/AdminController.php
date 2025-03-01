<?php

namespace App\Http\Controllers;

use App\Models\UserInput;
use App\Models\BotConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showDashboard()
    {
        $inputs = UserInput::latest()->paginate(10);
        return view('admin.dashboard', compact('inputs'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function showData()
    {
        $inputs = UserInput::latest()->paginate(10);
        return view('admin.data', compact('inputs'));
    }

    public function showBots()
    {
        $bots = BotConfig::paginate(10);
        return view('admin.bots', compact('bots'));
    }

    public function storeBotConfig(Request $request)
    {
        $request->validate([
            'domain' => 'required|unique:bot_configs,domain,' . $request->id,
            'bot_token' => 'required',
            'chat_id' => 'required'
        ]);

        BotConfig::updateOrCreate(
            ['id' => $request->id],
            $request->only(['domain', 'bot_token', 'chat_id'])
        );

        return redirect()->route('admin.bots')->with('success', 'Bot configuration saved successfully');
    }

    public function deleteBotConfig($id)
    {
        BotConfig::destroy($id);
        return redirect()->route('admin.bots')->with('success', 'Bot configuration deleted successfully');
    }
}
