<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use JetBrains\PhpStorm\NoReturn;

class QueryController extends Controller
{
    #[NoReturn]
    public function query(Request $request)
    {
        $response = json_decode(Http::get('http://api:8000', [
            'query' => $request->input('query'),
        ])->body());

        return view('welcome', [
            'query' => $response->query,
            'results' => $response->result
        ]);
    }
}
