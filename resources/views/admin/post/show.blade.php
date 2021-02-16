@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Новый пост</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="card">
                <div class="card-body">
                    @isset($post)
                    <div class="content">
                        <div class="row">
                            <h5 class="col-2 text-maroon">Заголовок:</h5>
                            <p class="col">{{ $post->title ? $post->title : '' }}</p>
                            <div class="col">
                                <a href="" class="btn btn-success">Редактировать</a>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="col-2 text-maroon">Slug:</h5>
                            <p class="col">{{ $post->slug ? $post->slug : '' }}</p>
                        </div>
                        <div class="row">
                            <h5 class="col-2 text-maroon">Автор:</h5>
                            <p class="col">{{ $post->user ? $post->user->name : '' }}</p>
                        </div>
                        <div class="row">
                            <h5 class="col-2 text-maroon">Категория:</h5>
                            <p class="col">{{ $post->category ? $post->category->name : 'Категория не установленна' }}</p>
                        </div>
                        <div class="row">
                            <h5 class="col-2 text-maroon">Статус:</h5>
                            <p class="col">{{ $post->is_publish ? 'Опубликован' : 'Не опубликован' }}</p>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                @if($post->is_publish === 0)
                                    <a href="{{ route('admin.post.status', ['post' => $post->id]) }}" class="btn btn-primary">Опубликовать</a>
                                @else
                                    <a href="{{ route('admin.post.status', ['post' => $post->id]) }}" class="btn btn-warning">Снять с публикации</a>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <img src="{{ $post->image ? url('storage/' . $post->image) : url(env('NO_IMAGE_AVAILABLE')) }}" width="300">
                        </div>
                            <div class="row">
                                @isset($post->image)
                                <form action="{{ route('admin.post.destroy', ['post' => $post->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mt-3" type="submit">Удалить</button>
                                </form>
                                @endisset
                            </div>
                        <div class="row mt-5">
                            <h5 class="col-2 text-maroon">Короткое описание:</h5>
                            <div class="col">{!! $post->description ? $post->description : '' !!}</div>
                        </div>
                        <div class="row mt-5">
                            <h5 class="col-2 text-maroon">Текст статьи:</h5>
                            <div class="col">{!! $post->content ? $post->content : '' !!}</div>
                        </div>
                    </div>
                        @endisset
                </div>
        </section>


    </div>
@endsection
