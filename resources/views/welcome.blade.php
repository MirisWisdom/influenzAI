@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mt-6">
            <a href="/" class="text-center">
                <h1>Project 2114</h1>
                <h5><i>By yours truly, G2</i></h5>
            </a>
        </div>
        <form action="{{ route('query') }}"
              method="post">
            @csrf
            <div class="row">
                <div class="col-md">
                    <label class="w-100">
                        Query:
                        <input type="text"
                               name="query"
                               class="form-control w-100">
                    </label>
                    <label class="w-100">
                        <input type="checkbox" name="demo">
                        Use demo page (super fast but query is ignored!)
                    </label>
                </div>
                <div class="col-md-auto">
                    <label>
                        &nbsp;
                        <input type="submit"
                               class="form-control"
                               value="Query">
                    </label>
                </div>
            </div>
        </form>
        @if(isset($sources))
            <hr>
            <div class="card">
                <div class="card-header text-center">
                    SUBMITTED QUERY
                </div>
                <div class="card-body">
                    {{ $query }}
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-header text-center">
                    ANSWER FROM GPT
                </div>
                <div class="card-body">
                    {{ $answer }}
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-header text-center">
                    SOURCE DATASETS
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($sources as $source)
                            <div class="col-md-6">
                                <div class="card my-2">
                                    <div class="card-header text-center">
                                        {{ $source->document }}
                                    </div>
                                    <div class="card-body">
                                        {{ $source->context }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
