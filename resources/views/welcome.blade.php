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
        <div class="mb-5">
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
                <label class="w-100 px-4 text-light">
                    <input type="checkbox" name="demo">
                    Use demo page (super fast but query is ignored!)
                </label>
            </form>
            <hr>
            <div class="row">
                <div class="col-md-12 text-light mb-5">
                    <i>
                        During the COVID pandemic, we have seen an incredible amount of misinformation spreading on the
                        Internet. An effective mitigation is allowing easy, convenient and intuitive access to reputable
                        information. This is where influenzAI tries to fill in the gap, by allowing the user to query a
                        model trained on trusted, reputable open government data.
                    </i>
                </div>
                <div class="col-md">
                    <div class="card">
                        <div class="card-header text-center">
                            Our Mission
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Accessibility</li>
                                <li>Scaling Potentials</li>
                                <li>Interactive and Visual</li>
                                <li>Privacy</li>
                                <li>Bias Mitigation</li>
                                <li>Openness and Transparency</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            Our Team
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><b>David</b>: Data Analysis / Content Creator</li>
                                <li><b>Dhanush</b>: Lead Inquisitiveness</li>
                                <li><b>Emilian</b>: Lead Developer / Architect</li>
                                <li><b>Jacky</b>: Content Creator, Industry Insight</li>
                                <li><b>Kien Pham</b>: Website UI/UX Design</li>
                                <li><b>Shann</b>: Data Analyst / Curator</li>
                                <li><b>Sudeep</b>: Graphic / Logo Design</li>
                                <li><b>William</b>: Project Manager / Content Creator</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <div class="card-header text-center">
                            Quick Links
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <a href="https://influenzai.miris.design">
                                        Official Website
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hackerspace.govhack.org/team_management/teams/2114">
                                        Hackerspace
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/miriswisdom/influenzai">
                                        GitHub
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
