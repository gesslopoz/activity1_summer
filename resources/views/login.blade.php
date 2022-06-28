@extends('base')

@section('content')

    <div class="row mt-5 ">
        <div class="col-md-4 offset-md-4">
            <h1>User Login</h1>

           {!! Form::open(['url' => '/login', 'method' => 'post']) !!}


            <div class="mb-3">
                {!! Form::label('email', "Email") !!}
                <br>
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="mb-3">
                {!! Form::label('password', "Password") !!}
                <br>

                {!! Form::password('password', null, ['class'=>'form-control']) !!}
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>

        {!! Form::close() !!}
        </div>
    </div>

@endsection
