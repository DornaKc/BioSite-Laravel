@extends('main')

@section('content')
    <script>
        $(document).ready(function () {

            $('delete_form').on('submit', function () {
                if (confirm("Are you really want to delete?")) {

                    return true;
                } else {
                    return false;
                }
            })
        });
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>View the Blog Posts</h2>
                <br>
                @foreach($blogs as $row)

                    <h3>{{$row['title']}}</h3><br>
                    <p>{{$row['body']}}</p><br>
                    <p>Posted by:{{ Auth::user()->name }}</p>
                    <a href="{{action('BlogController@edit',$row['id'])}}" class="btn btn-warning">Edit blog</a>
                    <form method="post" class="delete_form" action="{{action('BlogController@destroy', $row['id'])}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE"/><br>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <hr>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

@endsection

