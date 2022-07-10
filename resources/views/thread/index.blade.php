@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">スレッド作成</div>
                <div class="card-body">
                    <form method="POST" action="{{ action('ThreadController@create')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">タイトル</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">本文</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control " name="body"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    作成
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">スレッド一覧</h6>
                @foreach($threads as $thread)
                    <div class="media text-muted pt-3">
                      <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="" class="mr-2 rounded">
                      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">{{ $thread->title . " @" . $thread->user->name }}</strong>
                        {{ $thread->body }}
                      </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection