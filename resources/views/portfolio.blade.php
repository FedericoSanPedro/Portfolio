@extends('layouts.app')

@section('content')

<div class="header-section">
    <h2 class="dark big">Projects:</h2>
    
    <p>
        Press in the image to see the code.  
    </p>

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
                        You can add, delete and see cars with attributes.
                    </p>
                    <div class="tags">
                        <p class="tab">PHP</p>
                        <p class="tab">Laravel</p>
                        <p class="tab">MySql</p>
                    </div>

                </div>
            </div>
        </article>
    </div>

    <div>
        <article class="single-project-module--project--3_fln">
            <a href="https://github.com/FedericoSanPedro/Restaurante" target="_blank" rel="noreferrer noopener">
                <img src="{{ URL('storage/resta.png') }}">
            </a>
            <div class="single-project-module--footer--_D86Q">
                <div class="single-project-module--info--1iz3j">
                    <h2>
                        Restaurant
                    </h2>
                    <p>
                        You can create your own menu with plates and drinks you want to.
                    </p>
                    <div class="tags">
                        <p class="tab">Java</p>
                    </div>

                </div>
            </div>
        </article>
    </div>

    <div>
        <article class="single-project-module--project--3_fln">
            <a href="https://github.com/PonFET/MyJob" target="_blank" rel="noreferrer noopener">
                <img src="{{ URL('storage/inter.png') }}">
            </a>
            <div class="single-project-module--footer--_D86Q">
                <div class="single-project-module--info--1iz3j">
                    <h2>
                        My Job
                    </h2>
                    <p>
                        Login like an admin, company or student. Each one has a list of actions to do. With the objective of student finding out job offers from the company.
                    </p>
                    <div class="tags">
                        <p class="tab">PHP</p>
                        <p class="tab">MySql</p>
                        <p class="tab">Entity</p>
                    </div>
                </div>
            </div>
        </article>
    </div>

</div>

@endsection