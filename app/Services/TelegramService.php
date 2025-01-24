<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    // Bot tokenini olish
    protected $token;

    public function __construct()
    {
        $this->token = env('TELEGRAM_BOT_TOKEN'); // .env faylidan tokenni o'qish
    }

    // Telegramga xabar yuborish
    public function sendMessage($chatId, $message)
    {
        // Telegram API URL
        $url = "https://api.telegram.org/bot{$this->token}/sendMessage";

        // API ga so'rov yuborish
        $response = Http::post($url, [
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        // JSON formatda javobni qaytarish
        return $response->json();
    }
}
