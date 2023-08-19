<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use JetBrains\PhpStorm\NoReturn;

class QueryController extends Controller
{
    #[NoReturn]
    public function query(Request $request)
    {
        try {
            $response = json_decode(Http::timeout(0)->get(config('app.api'), [
                'query'    => $request->input('query'),
                'demo'     => $request->has('demo') ? 'yes' : 'no',
                'instance' => config('app.gpt')
            ])->body());

            $categories = Category::query()->with('keywords.documents');
            $documents  = Document::query();

            foreach ($response->sources as $source) {
                $documents = $documents->orWhere('name', $source->document);

                $categories = $categories->orWhereHas('keywords.documents', function ($q) use ($source) {
                    return $q->where('name', $source->document);
                });
            }

            return view('results', [
                'query'      => $response->query,
                'answer'     => $response->answer,
                'sources'    => $response->sources,
                'categories' => $categories->get(),
                'documents'  => $documents->get(),
            ]);
        } catch (\Exception $exception) {
            return view('error', [
                'error' => $exception->getMessage()
            ]);
        }
    }
}
