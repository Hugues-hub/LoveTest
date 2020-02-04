@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contact</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('contact') }}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" @error('nom') is-invalid @enderror name="nom" id="nom" placeholder="votre nom" value="{{ $user->name }}">
                      </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" @error('email') is-invalid @enderror name="email" id="email" placeholder="votre email" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                      <label for="message">Votre Message</label>
                      <textarea class="form-control"  rows="3" name="message" id="message"> </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
