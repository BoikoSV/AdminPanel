@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper" style="min-height: 1419.6px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Projects</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="card">
                <div class="card-body">
                    <form role="form" action="{{ route('admin.user.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ФИО</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Введите ФИО">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Введите свой email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Пароль</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Добавьте фотографию</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="avatar" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать фото</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Загрузить</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
