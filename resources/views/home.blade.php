@extends('layouts.admin')
@section('content')
<div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('global.user.title_singular') }}
        </div>
    
        <div class="card-body">
            //Body goes here
        </div>
    </div>
@endsection
@section('scripts')
@parent

@endsection