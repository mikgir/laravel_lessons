@extends('layouts.admin')

@section('title', 'Создание новости')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.news.index') }}" type="button"
                   class="btn btn-sm btn-outline-secondary">Назад</a>
            </div>
        </div>
    </div>
    <div class="card radius-15">
        <div class="card-body">
            <div class="card-title">
                <h4 class="mb-0">Добавить новость</h4>
            </div>
            <hr/>
            <form action="{{ route('admin.news.store') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text"
                                                           id="basic-addon1">Титул</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Наименование" aria-label="title"
                           aria-describedby="basic-addon1" name="title" id="title">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text"
                                                           id="basic-addon1">Автор</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Автор" aria-label="author"
                           aria-describedby="basic-addon1" name="author" id="author">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Текст</span>
                    </div>
                    <textarea class="form-control" aria-label="description" rows="10" name="description"
                              id="description"></textarea>
                </div>
                <div class="input-group mt-3 d-flex">
                    <label class="input-group" for="status">
                        <div class="input-group-prepend"><span class="input-group-text">Статус</span>
                        </div>
                        <select class="form-control" name="status" id="status">
                            <option>Выбрать</option>
                            <option>ACTIVE</option>
                            <option>DRAFT</option>
                            <option>BLOCKED</option>
                        </select>
                    </label>

                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
