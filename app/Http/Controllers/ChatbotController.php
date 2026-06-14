<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    // Free models list — pehle wala try hoga, fail ho to agla
    private array $freeModels = [
        'meta-llama/llama-3.2-3b-instruct:free',
        'meta-llama/llama-3.1-8b-instruct:free',
        'google/gemma-3-4b-it:free',
        'mistralai/mistral-7b-instruct:free',
        'qwen/qwen-2.5-7b-instruct:free',
        'deepseek/deepseek-r1-distill-llama-8b:free',
        'openchat/openchat-7b:free',
        'huggingfaceh4/zephyr-7b-beta:free',
    ];

    private string $systemPrompt = "You are a friendly AI assistant for Hafiz Abdullah, a Web Developer & AI Solutions Expert based in Lahore, Pakistan. You represent \"Abdullah Dev Solutions\".

About Abdullah:
- Full-stack web developer specializing in Laravel, WordPress, React, and AI integrations
- Builds modern websites, AI chatbots, and business automation systems
- 4+ years of experience, 60+ projects completed, 45+ happy clients
- Available for freelance projects worldwide
- Contact: WhatsApp +92 370 6235635
- Email: devsolutionsabdullah@gmail.com
- Location: Johar Town, J-Block, Lahore, Pakistan

Services offered:
- Custom Website Development (Laravel, WordPress, React)
- AI Chatbot Development & Integration
- E-commerce Websites & Shopify Stores
- Admin Dashboards & Web Applications
- Business Automation Systems
- UI/UX Design & Maintenance

Be helpful, concise, and friendly. If someone wants to hire Abdullah or get a quote, encourage them to reach out on WhatsApp (+92 370 6235635) or use the Contact section. Answer in the same language the user writes in — Urdu or English.";

    public function message(Request $request)
    {
        $request->validate([
            'messages'           => 'required|array|min:1|max:20',
            'messages.*.role'    => 'required|in:user,assistant',
            'messages.*.content' => 'required|string|max:2000',
        ]);

        $apiKey = config('services.openrouter.key');

        if (empty($apiKey)) {
            return response()->json([
                'error' => 'API key not configured. Please add OPENROUTER_API_KEY in .env file.'
            ], 503);
        }

        $messages = array_merge(
            [['role' => 'system', 'content' => $this->systemPrompt]],
            $request->messages
        );

        // Har free model try karo — rate limit ho to agla try karo
        foreach ($this->freeModels as $model) {
            try {
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type'  => 'application/json',
                    'HTTP-Referer'  => config('app.url'),
                    'X-Title'       => 'Abdullah Dev Solutions',
                ])->timeout(45)->post('https://openrouter.ai/api/v1/chat/completions', [
                    'model'      => $model,
                    'messages'   => $messages,
                    'max_tokens' => 500,
                ]);

                $data = $response->json();

                // Rate limit ya provider error ho to agla model try karo
                if (isset($data['error'])) {
                    $code = $data['error']['code'] ?? 0;
                    if (in_array($code, [429, 502, 503])) {
                        Log::warning('Rate limited / provider error, trying next: ' . $model);
                        continue;
                    }
                }

                if ($response->successful()) {
                    $reply = $data['choices'][0]['message']['content'] ?? null;
                    if (!empty($reply)) {
                        Log::info('Chatbot used model: ' . $model);
                        return response()->json(['reply' => $reply]);
                    }
                }

                Log::warning('Model failed, trying next: ' . $model);

            } catch (\Exception $e) {
                Log::warning('Exception, trying next: ' . $model . ' — ' . $e->getMessage());
            }
        }

        // Koi bhi model kaam nahi kiya
        return response()->json([
            'reply' => "I'm a bit busy right now! 😅 Please try again in a few seconds, or contact Abdullah directly on WhatsApp: +92 370 6235635"
        ]);
    }
}