<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\DB;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        $userMessage = $request->input('message');

        // Step 1: Query your existing houses table
        $houses = $this->searchHouses($userMessage);

        // Step 2: Format DB data into readable text for GPT
        $context = $this->formatHouseData($houses);

        // Step 3: Ask OpenAI to reply naturally using DB context
        $response = OpenAI::chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "You are a friendly real estate assistant that helps users find houses based on the available database data below. Only mention what exists in the data."
                ],
                [
                    'role' => 'user',
                    'content' => "User asked: {$userMessage}\n\nAvailable houses data:\n{$context}"
                ],
            ],
        ]);

        $reply = $response['choices'][0]['message']['content'];

        return response()->json(['reply' => $reply]);
    }

    private function searchHouses($query)
    {
        $query = strtolower($query);

        $builder = DB::table('houses');

        // Filter by location keywords (adjust for your table columns)
        if (strpos($query, 'nairobi') !== false) {
            $builder->where('location', 'like', '%Nairobi%');
        } elseif (strpos($query, 'mombasa') !== false) {
            $builder->where('location', 'like', '%Mombasa%');
        } elseif (strpos($query, 'kisumu') !== false) {
            $builder->where('location', 'like', '%Kisumu%');
        }

        // Try to detect price range (e.g., 50000 or 50k)
        if (preg_match('/(\d+)(k)?/', $query, $matches)) {
            $price = isset($matches[2]) ? $matches[1] * 1000 : $matches[1];
            $builder->where('price', '<=', $price);
        }

        return $builder->limit(5)->get();
    }

    private function formatHouseData($houses)
    {
        if ($houses->isEmpty()) {
            return "No matching houses found in the database.";
        }

        $result = "";
        foreach ($houses as $house) {
            $result .= "🏠 {$house->title} — Location: {$house->location}, Price: KES {$house->price}. {$house->description}\n";
        }

        return $result;
    }
}
