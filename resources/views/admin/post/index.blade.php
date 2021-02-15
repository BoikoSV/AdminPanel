@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Категории</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>




        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>
                         {{-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                           placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>  TODO Прикрутить поиск --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Заголовок</th>
                                    <th>Автор</th>
                                    <th>Категория</th>
                                    <th>Статус</th>
                                    <th>Дата создания</th>
                                    <th>Просмотров</th>
                                    <th>Лайков</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($posts)
                                    @foreach($posts as $key => $post)
                                <tr>
                                    <td><a href="{{ route('admin.post.show', ['post' => $post->id]) }}">{{ $post->title }}</a></td>
                                    <td>{{ $post->user !== null ? $post->user->name : 'Не указан' }}</td>
                                    <td>{{ $post->category_id ? $post->category->name : 'Без категории' }}</td>
                                    <td>
                                        @if($post->is_publish)
                                            <a href="{{ route('admin.post.status', ['post' => $post->id]) }}">
                                                <i class="fa fa-check text-success" aria-hidden="true"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('admin.post.status', ['post' => $post->id]) }}">
                                                <i class="fa fa-times text-danger" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                    </td>
                                    <td>{{ $post->created_at->format('H:i d.m.Y') }}</td>
                                    <td>{{ $post->views }}</td>
                                    <td>{{ $post->likes }}</td>
                                    <td style="display: flex">
                                            <a href="{{ route('admin.post.edit', ['post' => $post->id]) }}">
                                                <i class="fa fa-edit text-success" aria-hidden="true"></i>
                                            </a>
                                        <form action="" method="post">
                                            @csrf
                                            @method('delete')
                                            <button style="border: none; background: none; outline: none;" type="submit">
                                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>





@endsection
