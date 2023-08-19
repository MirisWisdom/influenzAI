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
        $response = json_decode(Http::timeout(0)->get(config('app.api'), [
            'query' => $request->input('query'),
            'demo' => $request->has('demo') ? 'yes' : 'no'
        ])->body());

        return view('welcome', [
            'query' => $response->query,
            'answer' => $response->answer,
            'sources' => $response->sources
        ]);
    }
}