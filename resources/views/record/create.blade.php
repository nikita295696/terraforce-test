@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ __('Record Create') }}</h2>

                <form method="post" action="{{url(route("record.store"))}}">
                    @csrf

                    <div class="form-control">
                        <input type="text" name="name" placeholder="Name" />
                    </div>

                    <div class="form-control">
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="form-control">
                        <textarea name="description" placeholder="Description"></textarea>
                    </div>

                    <div class="form-control">
                        <label> Published
                            <input type="checkbox" name="published">
                        </label>
                    </div>
                    <button type="submit">Save</button>
                    <a class="btn btn-light" href="{{url(route("record.index"))}}"></a>
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
