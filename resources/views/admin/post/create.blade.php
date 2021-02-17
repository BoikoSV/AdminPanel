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

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col">
                    <div class="card card-primary">
                        <div class="card-body">
                            <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="inputName">Заголовок поста</label>
                                    <input type="text" name="title" id="inputName" value="{{ old('title') }}" class="form-control">
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            @isset($categories)
                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="inputStatus">Выберете категорию</label>
                                    <select name="category_id" class="form-control custom-select">
                                        <option selected="" disabled="">Без категории</option>
                                        @foreach($categories as $key => $category)
                                        <option value="{{ $key }}">{{ $category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endisset
                            <div class="row">
                                <input name="image" type="file">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="inputDescription">Короткое описание</label>
                                    <textarea name="description" id="textarea_description" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Текст поста</label>
                                <textarea name="content" id="textarea_content" class="form-control" rows="4"></textarea>
                                @error('content')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success float-right">Добавить пост</button>
                                    </div>
                                </div>
                            </form>
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
