<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramBotController extends Controller
{
    // Telegram bot tokenini .env faylidan olish
    protected $botToken;

    public function __construct()
    {
        $this->botToken = env('TELEGRAM_BOT_TOKEN');
    }

    // Botni tekshirish uchun metod
    public function sendTestMessage()
    {
        // Telegram bot API URL
        $url = "https://api.telegram.org/bot{$this->botToken}/sendMessage";



        // Foydalanuvchi chat ID
        $chatId = env('TELEGRAM_CHAT_ID');

        // Yuborilayotgan xabar
        $message = "Laravel bot ishlamoqda!";



        // So'rov yuborish
        $response = Http::post($url, [
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        // Natijani tekshirish
        if ($response->successful()) {
            return "Xabar muvaffaqiyatli yuborildi!";
        } else {
            return "Xabar yuborishda xatolik yuz berdi.";
        }
    }
}
