@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>{{ __('You are logged in!') }}</h3>
                    <hr/>
                    <h4>{{ __('Your role is !') }} {{Auth::user()->roles[0]->name}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
