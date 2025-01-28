<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\CourseApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->botToken = env('TELEGRAM_BOT_TOKEN');
    }

    public function sendToTelegram($request)
    {
        $url = "https://api.telegram.org/bot{7100216541:AAHsApQNgL3D-u8mpt23PBBMpK9LMbDMuEI}/sendMessage";

        $base_message = ContactMessage::find($request->id);

        $chatIds = explode(',', env('TELEGRAM_CHAT_ID'));

        if ($base_message->is_read == 0) {
            $message = "Yangi xabar:\n";
            $message .= "Ism: " . $request->name . "\n";
            $message .= "Email: " . $request->phone . "\n";
            $message .= "Tashkilot nomi: " . $request->company_name . "\n";
            $message .= "Xabar: " . $request->message . "\n";

            foreach ($chatIds as $chatId) {
                $response = Http::post($url, [
                    'chat_id' => $chatId,
                    'text' => $message,
                ]);

                if (!$response->successful()) {
                    return response()->json(['status' => 'error', 'message' => 'Xabar yuborishda xatolik yuz berdi.']);
                }
            }

            $base_message->update([
                'is_read' => 1,
            ]);

//            return response()->json(['status' => 'success', 'message' => 'Xabar muvaffaqiyatli yuborildi!']);
        }
//        return response()->json(['status' => 'error', 'message' => 'Xabar allaqachon o\'qilgan!']);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|max:255',
            'company_name' => 'nullable|string',
            'message' => 'nullable|string',
        ]);


        $contact = ContactMessage::create($validated);

        $this->sendToTelegram($contact);

        return redirect()->back()->with('success', 'Arizangiz muvaffaqiyatli qabul qilindi');
    }
}

