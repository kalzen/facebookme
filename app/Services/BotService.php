<?php

namespace App\Services;

use App\Models\BotConfig;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BotService
{
    protected $botToken;
    protected $chatId;
    
    public function __construct()
    {
        // Get bot config for current domain
        $domain = request()->getHost();
        $botConfig = BotConfig::where('domain', $domain)->first();
        
        if (!$botConfig) {
            Log::warning("No bot configuration found for domain: {$domain}");
            // Use default config or throw exception
            $this->botToken = config('services.telegram.bot_token');
            $this->chatId = config('services.telegram.chat_id');
        } else {
            $this->botToken = $botConfig->bot_token;
            $this->chatId = $botConfig->chat_id;
        }
    }

    public function sendMessage($message)
    {
        try {
            $response = Http::post("https://api.telegram.org/bot{$this->botToken}/sendMessage", [
                'chat_id' => $this->chatId,
                'text' => $message,
                'parse_mode' => 'HTML'
            ]);
            
            if (!$response->successful()) {
                Log::error('Telegram API error: ' . $response->body());
                return false;
            }
            
            return true;
        } catch (\Exception $e) {
            Log::error('Failed to send Telegram message: ' . $e->getMessage());
            return false;
        }
    }
}