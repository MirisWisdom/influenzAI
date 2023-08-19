@extends('layouts.app')

@section('content')

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold" style="font-size: 72pt">
            {{ config('app.name') }}
        </h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Using AI to provide convenient, private, trustworthy access to Long COVID & Influenza information
                from open, reputable government data.
            </p>
        </div>
    </div>
    <hr>
    <div class="container w-75">
        <div>
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
