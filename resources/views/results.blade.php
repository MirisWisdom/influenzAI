@extends('layouts.app')

@section('content')
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">{{ config('app.name') }}</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Using AI to provide convenient, private, trustworthy access to Long COVID & Influenza information
                from open, reputable government data.
            </p>
        </div>
    </div>
    <hr>
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
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-header text-center">
                            ANSWER CONTEXT
                        </div>
                        <div class="card-body">
                            <div class="mt-1 row">
                                @foreach($sources as $source)
                                    <div class="col-md-6">
                                        <div class="card my-2">
                                            <div class="card-header text-center">
                                                <button class="btn btn-outline-light w-100" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-source-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-source-{{ $loop->iteration }}">
                                                    {{ $source->document ?? 'N/A' }} - CONTEXT {{ $loop->iteration }}
                                                </button>
                                            </div>
                                            <div class="collapse" id="collapse-source-{{ $loop->iteration }}">
                                                <div class="card-body">
                                                    {{ $source->context ?? 'N/A' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <div class="card-header text-center">
                            USED DATASETS
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($documents as $document)
                                    <div class="col-md-6">
                                        <div class="card my-2">
                                            <div class="card-header text-center">
                                                <a href="{{ $document->path }}" class="btn btn-outline-light w-100"
                                                   target="_blank">
                                                    {{ $document->name }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endif

        <hr>

        <div class="card">
            <div class="card-header text-center">
                CONNECTED DATASETS
            </div>
            <div class="card-body">
                @include('categories.body')
            </div>
            <hr>
        </div>

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
