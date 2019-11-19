@extends('main')

@section('content')

    <style>
        .container{
            text-align: center;
        }
        .col-md-4{
            margin-top: 200px;
        }
    </style>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <img src="blog.jpg" height="650" width="100%" style="border-radius: 7px;">
                </div>
                <div class="col-md-4">
                    <h2>Hello, I am Max</h2>
                    <p>A developer</p>
                </div>
            </div>
        </div>
    </div>
@endsection
