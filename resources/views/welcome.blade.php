@extends('layouts.app')

@section('content')
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault" id="SwitchLabel">Dark</label>
    </div>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold"
            style="font-size: 72pt; font-family: 'Josefin Sans', sans-serif !important;">
            influenz<span style="color: #e69138">AI</span>
        </h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Using AI to provide convenient, private, trustworthy access to Long COVID & Influenza information
                from open, reputable government data.
            </p>
            <hr>
            <form action="{{ route('query') }}"
                  method="post">
                @csrf
                <div class="row">
                    <div class="col-md">
                        <label class="w-100">
                            <input type="text"
                                   name="query"
                                   class="form-control w-100 p-3 rounded-4 mt-2"
                                   style="font-size: 24pt;"
                                   placeholder="Type your prompt...">
                        </label>
                    </div>
                    <div class="col-md-auto pl-4 pr-2">
                        <button type="submit"
                                class="btn btn-secondary form-control p-3 rounded-4 mt-2"
                                style="font-size: 24pt;">
                            <i class="icon bi bi-send-fill"></i></button>
                    </div>
                </div>
                <label id="label-checkbox" class="w-100 px-4 text-light">
                    <input type="checkbox"
                           name="demo">
                    For demo purposes, you should tick this box to use a cached, speedy, working query!
                    <br>
                    This will ignore the user entered query and show a pre-generated query and answer pair.
                    <br>
                    It will save you time, and it will spare us from using a fire extinguisher on our hardware!
                </label>
            </form>
        </div>
    </div>
    <hr>
    <div class="container w-75">
        <div class="mb-5">
            <hr>
            <div class="row">
                <div class="col-md-12 text-light mb-5" id="description">
                    <i>
                        During the COVID pandemic, we have seen an incredible explosion of information. However,
                        clinicians are unable to efficiently incorporate the ever-expanding sea of data into their
                        clinical practice. An effective mitigation is leverage emergeing generative AI technology to
                        allow easy, convenient and intuitive access to reputable information.
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
                                <li><b>Emilian</b>: Lead Developer / Architect / UI Layout</li>
                                <li><b>Jacky</b>: Content Creator, Industry Insight</li>
                                <li><b>Kien Pham</b>: Website UI/UX Design</li>
                                <li><b>Shann</b>: Data Analyst / Curator / Narrator</li>
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
