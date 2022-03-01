@extends('layouts.app')

@section('content')

    <div class="header-section">
        <h2 class="dark big">Who I am?</h2>

        <hr>
    </div>

    <!-- Meet me -->
    <div class="container-grid-2">
        <div>
            <img class="img-team" src="{{ URL('storage/prog.jpg') }}" alt="">
        </div>
        <div>
            <h2>
                My name is Federico San Pedro
            </h2>

            <h3 class="orange-txt">
                I am a PHP Developer
            </h3>

            <p>
                I started programming since 2015 like a hobby. 
            </p>

        </div>
    </div>

    <!-- Meet my study -->
    <div class="container-grid-2">
        <div>
            <h2>
                National University of Technology
            </h2>

            <h3 class="orange-txt">
                I finished my technique in 2021.
            </h3>

            <p>
                There I learned to code in C - Java - PHP. I worked with lot of developers and friends.
            </p>

        </div>
        <div>
            <img class="img-team" src="{{ URL('storage/pog.png') }}" alt="">
        </div>
    </div>

    <!-- Meet my study -->
    <div class="container-grid-2">
        <div>
            <img class="img-team" src="{{ URL('storage/adm.png') }}" alt="">
        </div>
        <div>
            <h2>
                Administrative Manager
            </h2>

            <h3 class="orange-txt">
                I worked in this job since 2015.
            </h3>

            <p>
                There I learned how to communicate to my clients what they should to have a pass from the Mayor. It is a job with a lot of paper and meetings.
            </p>

        </div>
    </div>
    
    <div class="header-section">
        <h2 class="dark big">Skills</h2>

        <hr>
    </div>

    <!-- Section of skills -->
    <div class="section-why-us">
        <div>
            <i class="fas fa-globe icon-why-us"></i>
            <h2>
                Github
            </h2>
        </div>

        <div>
            <i class="far fa-keyboard icon-why-us"></i>
            <h2>
                PHP
            </h2>
        </div>

        <div>
            <i class="fas fa-code-branch icon-why-us"></i>
            <h2>
                LARAVEL
            </h2>
        </div>

        <div>
            <i class="fas fa-code-branch icon-why-us"></i>
            <h2>
                MVC
            </h2>
        </div>

        <div>
            <i class="far fa-keyboard icon-why-us"></i>
            <h2>
                JAVA
            </h2>
        </div>

        <div>
            <i class="far fa-keyboard icon-why-us"></i>
            <h2>
                C
            </h2>
        </div>

        <div>
            <i class="far fa-keyboard icon-why-us"></i>
            <h2>
                JAVASCRIPT
            </h2>
        </div>

        <div>
            <i class="far fa-keyboard icon-why-us"></i>
            <h2>
                MySql
            </h2>
        </div>

        <div>
            <i class="far fa-keyboard icon-why-us"></i>
            <h2>
                HTML
            </h2>
        </div>

        <div>
            <i class="far fa-keyboard icon-why-us"></i>
            <h2>
                CSS
            </h2>
        </div>

    </div>

@endsection