@extends('layouts.layout')

@section('content')
    @include('layouts.parts.header')
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="content">
                    <div class="news">
                        <h3>{{$news['title']}}</h3>
                        <img src="{{$news['image']}}" alt="photo">
                        <br>
                        <p>Статус: {{$news['status']}}</p>
                        <p>Автор: {{$news['author']}}</p>
                        <p>{{$news['description']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.parts.footer')
@endsection
