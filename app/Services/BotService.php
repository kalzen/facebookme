<?php

namespace App\Services;

use App\Models\BotConfig;
use Illuminate\Support\Facades\Http;

class BotService
{
    protected $botToken;
    protected $chatId;

    public function __construct($domain)
    {
        $botConfig = BotConfig::where('domain', $domain)->first();
        if ($botConfig) {
            $this->botToken = $botConfig->bot_token;
            $this->chatId = $botConfig->chat_id;
        }
    }

    public function sendMessage($message)
    {
        if ($this->botToken && $this->chatId) {
            $url = "https://api.telegram.org/bot{$this->botToken}/sendMessage";
            $response = Http::post($url, [
                'chat_id' => $this->chatId,
                'text' => $message,
                'parse_mode' => 'HTML'
            ]);

            if ($response->failed()) {
                throw new \Exception('Failed to send message');
            }
        } else {
            throw new \Exception('Bot configuration not found');
        }
    }
}