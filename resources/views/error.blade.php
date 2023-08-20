@extends('layouts.app')

@section('content')
    <div class="container mt-6">
        <p class="text-light"
           style="font-size: 24pt;">
            Ruh roh, it seems that you've encountered an error when connecting to the heavy LLM running on our humble
            hardware.
            <br><br>
            To get somewhat of an impression about how this thing is supposed to run, you should try a demo query!
        </p>
        <hr>
        <form action="{{ route('query') }}"
              method="post">
            <input type="hidden"
                   name="demo"
                   value="true">
            <input type="hidden"
                   name="query"
                   value="What are the impacts of long COVID?">
            <input type="submit"
                   class="btn btn-primary btn-light w-100 btn-lg"
                   value="Run Demo Query">
        </form>
        <hr>
        <a href="/"
           class="btn btn-primary btn-light w-100 btn-sm">
            Go Home
        </a>
        <hr>
        <p class="text-light"
           style="font-size: 16pt; font-family: monospace; !important;">
            Nerdy error:
            {{ $error }}
        </p>
    </div>
@endsection
