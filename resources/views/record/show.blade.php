@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ __('Record Show') }}</h2>

                    <div>{{$model->id}}</div>
                    <div>{{$model->name}}</div>
                    <div>{{$model->description}}</div>
                    <div>{{$model->published}}</div>
                    <div>{{$model->created_at->toDateString()}}</div>
                    <div>{{$model->updated_at->toDateString()}}</div>

            </div>
        </div>
    </div>
@endsection
