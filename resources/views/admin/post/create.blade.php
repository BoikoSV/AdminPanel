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
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Add</li>
                        </ol>
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
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="inputName">Заголовок поста</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="inputStatus">Status</label>
                                    <select class="form-control custom-select">
                                        <option selected="" disabled="">Без категории</option>
                                        <option>Мобильные телефоны</option>
                                        <option>Аксессуары</option>
                                        <option>Телевизоры</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <img src="{{ asset('assets/admin/img/photo3.jpg') }}" width="300" alt="..." class="img-thumbnail">
                            </div>
                            <div class="row">
                                <a href="">Удалить</a>
                            </div>
                            <div class="row">
                                <form action="">
                                    <input type="file">
                                    <button type="submit">Загрузить</button>
                                </form>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="inputDescription">Короткое описание</label>
                                    <textarea id="textarea_description" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Текст поста</label>
                                <textarea id="textarea_content" class="form-control" rows="4"></textarea>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-success float-right">Добавить пост</button>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
