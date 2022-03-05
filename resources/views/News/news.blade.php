@extends('layouts.layout')
@section('content')
    @include('layouts.parts.header')
    <main>
        <div class="container">
            <h1>News List</h1>
            <div class="content">
                <div class="row d-flex justify-content-between">
                    @foreach($newsList as $news)

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{$news['image']}}" class="img-fluid rounded-start" alt="photo">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="/news/{{$news['id']}}">
                                            <h3 class="card-title">{{$news['title']}}</h3>
                                        </a>
                                        <p class="card-text">{{$news['description']}}</p>
                                        <p class="card-text"><small class="text-muted">{{$news['author']}}</small></p>
                                        <p class="card-text"><small class="text-muted">{{$news['status']}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                    <div class="news">--}}
                        {{--                        <h3>--}}
                        {{--                           --}}
                        {{--                        </h3>--}}
                        {{--                        <img src="{{$news['image']}}" alt="photo">--}}
                        {{--                        <br>--}}
                        {{--                        <p>Статус: {{$news['status']}}</p>--}}
                        {{--                        <p>Автор: {{$news['author']}}</p>--}}
                        {{--                        <p>{{$news['description']}}</p>--}}
                        {{--                    </div>--}}
                        {{--                    <hr>--}}
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    @include('layouts.parts.footer')
@endsection
