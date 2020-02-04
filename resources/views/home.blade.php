@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <p>Welcome {{$name}} , You are logged in!</p>
                  <p>You are a member of {{$startUp}}</p>
                  <p>The {{$startUp}}'s members are</p>
                  @foreach($users as $user)
                    <ul>
                      <li>{{ $user->name }}</li>
                    </ul>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
