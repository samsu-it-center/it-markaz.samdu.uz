<?php

namespace App\Models;

use App\Services\TelegramService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'message',
        'is_read'
    ];

//    protected static function booted()
//    {
//        static::created(function ($message) {
//            $telegramService = new TelegramService();
//            $telegramService->sendNewMessageToTelegram("Yangi xabar:\n" . $message->message);
//        });
//    }
}
