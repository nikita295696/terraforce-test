@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ __('Record Create') }}</h2>

                <form method="post" action="{{url(route("record.update", ["record" => $model]))}}">
                    @csrf
                    @method("PUT")

                    <div class="form-control">
                        <input type="text" name="name" placeholder="Name" value="{{$model->name}}" />
                    </div>

                    <div class="form-control">
                        <input type="email" name="email" placeholder="Email" value="{{$model->email}}" />
                    </div>
                    <div class="form-control">
                        <textarea name="description" placeholder="Description">{{$model->description}}</textarea>
                    </div>

                    <div class="form-control">
                        <label> Published
                            <input type="checkbox" name="published" {{$model->published ? "checked" : ""}}>
                        </label>
                    </div>

                    <button type="submit">Save</button>

                    <a class="btn btn-light" href="{{url(route("record.index"))}}"></a>
                </form>
                <form method="post" action="{{url(route("record.destroy", ["record" => $model]))}}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
