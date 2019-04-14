@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                     <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required >

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>
                                    <div class="col-md-6">
                                        <input id="content" type="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" value="{{ old('content') }}" required >

                                        @if ($errors->has('content'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('content') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="tag" class="col-md-4 col-form-label text-md-right">{{ __('Tag') }}</label>
                                    <div class="col-md-6">
                                        <input id="tag" type="morph" class="form-control{{ $errors->has('tag') ? ' is-invalid' : '' }}" name="tag" value="{{ old('tag') }}" required >

                                        @if ($errors->has('tag'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('tag') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>
                                    <div class="col-md-6">
                                        <input id="comment" type="text" class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}" name="comment" value="{{ old('comment') }}" required >

                                        @if ($errors->has('comment'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('comment') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
