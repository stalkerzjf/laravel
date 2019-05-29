@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <li><a href="{{ route('help') }}">点我去帮助页</a></li>
                    <li><a href="{{ route('about') }}">点我去说明页</a></li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
