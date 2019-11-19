@extends('main')

@section('content')
    <style>
        input[type=text], select, textarea {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            height: 600px;
        }
    </style>
    <div class="container">
        @if(count($errors))
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <br/>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(\Session::has('success'))

            <div class="alert alert-success">
                <p>{{\Session::get('success')}}</p>
            </div>
        @endif
        <form  method="post" action="{{url('blog')}}">
            {{csrf_field()}}
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter title here..">
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            <label for="body">Body:</label>
            <textarea id="body" name="body" placeholder="Write something.." style="height:200px"></textarea>
            </div>
            <input type="submit" value="Post">
        </form>
        <a href="/blog"><input type="submit" value="View Blogs"></a>
    </div>
@endsection

