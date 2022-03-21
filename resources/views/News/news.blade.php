@extends('layouts.main')
@section('title', 'Все новости')
@section('content')
    <main class="site-main">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header mt-xl-3">
                <h3>ПОСЛЕДНИЕ НОВОСТИ</h3>
            </div>
            <!-- Section Header /- -->
            <div class="row d-grid justify-content-between">
                @foreach($newsList as $news )
                    <div class="col-xs-4">
                        <!-- Type Post -->
                        <div class="type-post color-6">
                            <div class="entry-cover"><a href="{{ route('news.show', $news['id']) }}"><img
                                        src="{{ $news['image'] }}"
                                        style="width: 100%"
                                        alt="Post"/></a>
                            </div>
                            <div class="entry-content">
                                <div class="post-category"><a href="#" title="Technology">Technology</a></div>
                                <h3 class="entry-title"><a href="#">{{ $news['title'] }}</a></h3>
                                <p>{{ $news['description'] }}</p>
                                <div class="entry-footer">
                                    <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                    <span class="post-like"><i class="fa fa-heart-o"></i><a
                                            href="#">127</a></span>
                                    <span class="post-view"><i class="fa fa-eye"></i><a href="#">756</a></span>
                                </div>
                                <a href="{{ route('news.show', $news['id']) }}" title="WATCH NOW">Читать</a>
                            </div>
                        </div>
                        <!-- Type Post /- -->
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
