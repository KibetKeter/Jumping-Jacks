@extends('layouts.general')
@section('content')
            <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                GeneralUser You are logged in! 
            </div>
@endsection
