@extends('layouts.app')

@section('content')
    <header class="title d-none">
        <a href="/" class="text-center">
            <h2>{{ config('app.name') }}</h2>
            <h6>
                <i>
                    Using AI to provide convenient, private, trustworthy access to Long COVID & Influenza information
                    from open, reputable government data.
                </i>
            </h6>
        </a>
    </header>
    <div class="container w-75">
        @if(isset($sources))
            <div class="card">
                <div class="card-header text-center">
                    SUBMITTED QUERY
                </div>
                <div class="card-body">
                    {{ $query ?? 'N/A' }}
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-header text-center">
                    ANSWER FROM GPT
                </div>
                <div class="card-body">
                    {{ $answer ?? 'N/A' }}
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-header text-center">
                    SOURCE DATASETS
                </div>
                <div class="card-body">
                    <div class="mt-1 row">
                        @foreach($sources as $source)
                            <div class="col-md-6">
                                <div class="card my-2">
                                    <div class="card-header text-center">
                                        {{ $source->document ?? 'N/A' }}
                                    </div>
                                    <div class="card-body">
                                        {{ $source->context ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <div class="position-fixed" style="bottom: 40px; margin: auto; width: 72%;">
            <hr>
            <form action="{{ route('query') }}"
                  method="post">
                @csrf
                <div class="row">
                    <div class="col-md">
                        <input type="text"
                        name="query"
                        class="form-control w-100 p-3 rounded-4 mt-2 ">
                    </div>
                    <div class="col-md-auto pl-4 pr-2">
                        <button type="submit"
                        class="btn btn-secondary form-control p-3 rounded-4 mt-2">
                        <i class="icon bi bi-send-fill"></i></button>
                    </div>
                </div>
                <label class="w-100">
                    <input type="checkbox" name="demo">
                    Use demo page (super fast but query is ignored!)
                </label>
            </form>
        </div>
    </div>
@endsection
