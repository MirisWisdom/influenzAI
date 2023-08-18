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
        @if(isset($results))
            <hr>
            <div class="card">
                <div class="card-header text-center">
                    SUBMITTED QUERY
                </div>
                <div class="card-body">
                    {{ $query }}
                </div>
            </div>
            <div class="row">
                @foreach($results as $result)
                    <div class="col-md-6">
                        <div class="card my-2">
                            <div class="card-header text-center">
                                {{ $result->document }}
                            </div>
                            <div class="card-body">
                                {{ $result->body }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
