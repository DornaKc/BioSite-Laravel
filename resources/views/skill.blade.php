@extends('main')

@section('content')

    <style>

        * {
            box-sizing: border-box
        }

        /* Container for skill bars */
        .container {
            width: 100%; /* Full width */
            background-color: #ddd; /* Grey background */

        }

        .skills {
            text-align: right; /* Right-align text */
            padding-top: 10px; /* Add top padding */
            padding-bottom: 10px; /* Add bottom padding */
            color: white; /* White text color */
        }

        .html {
            width: 90%;
            background-color: #4CAF50;
        }

        /* Green */
        .css {
            width: 80%;
            background-color: #2196F3;
        }

        /* Blue */
        .js {
            width: 40%;
            background-color: #f44336;
        }

        /* Red */
        .php {
            width: 30%;
            background-color: #808080;
        }

        .java {
            width: 60%;
            background-color: #ff3300;
        }
        .c {
            width: 70%;
            background-color: #ffcc00;
        }

        .nepali{
            width: 95%;
            background-color: #ffcc00;
        }

        .english{
            width: 65%;
            background-color: #808080;
        }

        .hindi{
            width: 40%;
            background-color: #4CAF50;
        }

        /* Dark Grey */

    </style>
    <div class="container">
        <div class="row">
            <h3>Programming Languages:</h3>
            <div class="col-md-8">
                <p>C/C++</p>
                <div class="container">
                    <div class="skills c">70%</div>
                </div>
                <p>HTML</p>
                <div class="container">
                    <div class="skills html">90%</div>
                </div>

                <p>CSS</p>
                <div class="container">
                    <div class="skills css">80%</div>
                </div>

                <p>JavaScript</p>
                <div class="container">
                    <div class="skills js">40%</div>
                </div>

                <p>PHP</p>
                <div class="container">
                    <div class="skills php">30%</div>
                </div>

                <p>Java</p>
                <div class="container">
                    <div class="skills java">60%</div>
                </div>
            </div>
        </div>
<hr><hr>
        <div class="row">
            <h3  style="margin-right: 160px;">Languages:</h3>
            <div class="col-md-8">
                <p>Nepali</p>
                <div class="container">
                    <div class="skills nepali">95%</div>
                </div>
                <p>English</p>
                <div class="container">
                    <div class="skills english">65%</div>
                </div>

                <p>Hindi</p>
                <div class="container">
                    <div class="skills hindi">40%</div>
                </div>
            </div>
        </div>

    </div>
@endsection

