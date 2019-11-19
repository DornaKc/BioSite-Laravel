@extends('main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h2>Edit Blogs</h2>

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
        <form method="post" action="{{action('BlogController@update', $id)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH"/>
            <div class="form-group">
                <input type="text" name="title" class="form-control" value="{{$blog-> title}}" placeholder="Edit title here">
            </div>
            <div class="form-group">
                <input type="text" name="body" class="form-control" value="{{$blog-> body}}" placeholder="Edit body here">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>
    </div>
</div>

@endsection
