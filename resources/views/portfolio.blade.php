@extends('layouts.app')

@section('content')

<div class="header-section">
    <h2 class="dark big">Projects:</h2>

    <hr>
</div>

<div class="container-grid-4">

    <div>
        <article class="single-project-module--project--3_fln">
            <a href="https://github.com/FedericoSanPedro/Cars/tree/Fede" target="_blank" rel="noreferrer noopener">
                <img src="{{ URL('storage/car.png') }}">
            </a>
            <div class="single-project-module--footer--_D86Q">
                <div class="single-project-module--info--1iz3j">
                    <h2>
                        Cars
                    </h2>
                    <p>
                        You can add, delete and see cars with attributes
                    </p>
                    <div class="tags">
                        <p class="tab">php</p>
                        <p class="tab">laravel</p>
                        <p class="tab">mysql</p>
                    </div>

                </div>
            </div>

        </article>
    </div>

    <div>
        <a href="https://github.com/FedericoSanPedro/Restaurante" target="_blank" rel="noreferrer noopener">
            <img src="{{ URL('storage/resta.png') }}">
        </a>
        <h2>
            Restaurant
        </h2>
        <p>
            You can create your own menu with plates and drinks you want to.
        </p>
    </div>

    <div>
        <a href="https://github.com/PonFET/MyJob" target="_blank" rel="noreferrer noopener">
            <img src="{{ URL('storage/inter.png') }}">
        </a>
        <h2>
            My Job
        </h2>
        <p>
            Login like an admin, company or student. Each one has a list of actions to do. With the objective of student finding out job offers from the company.
        </p>
    </div>
</div>

@endsection