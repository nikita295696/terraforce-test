@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ __('Record Index') }}</h2>
                <a class="btn btn-dark" href="{{url(route("record.create"))}}">Create Record</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($models as $model)
                            <tr>
                                <td>{{$model->id}}</td>
                                <td>{{$model->name}}</td>
                                <td>{{$model->created_at->toDateString()}}</td>
                                <td>
                                    <form method="post" action="{{url(route("record.destroy", ["record" => $model]))}}">
                                        @csrf
                                        @method("DELETE")
                                        <a class="btn btn-light" href="{{url(route("record.show", ["record" => $model]))}}">Show</a>
                                        <a class="btn btn-warning" href="{{url(route("record.edit", ["record" => $model]))}}">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

{{--                {{$models->links()}}--}}
            </div>
        </div>
    </div>
@endsection
