@extends('home.home')

@section('content')
<div class="grid-container grid-con">
    <div class="card graph">
        <div class="m-3">
            <div class="first-chart">
                <div class="my-2 fs-3"><i class="fa-regular fa-user"></i></div>
                <div class="mx-3">
                    10368
                    <div>users</div>
                </div>
            </div>
            <div class="mt-2"><img width="96" height="96" src="https://img.icons8.com/pulsar-line/48/graph.png"
                    alt="graph" /></div>
        </div>
    </div>

    <div class="card card-two">
        <div class="m-3">
            <div class="first-chart">
                <div class="my-2 fs-3"><i class="fa-solid fa-circle-play"></i></i></div>
                <div class="mx-3">
                    10368
                    <div>Videos</div>
                </div>
            </div>
            <div class="mt-2"><img width="96" height="96" src="https://img.icons8.com/pulsar-line/48/graph.png" /></div>
        </div>
    </div>
</div>
@endsection
