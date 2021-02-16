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
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <form role="form" class="row" action="{{ route('admin.category.store') }}" method="post">
                @csrf
                <div class="input-group input-group-md mb-3 col-3">
                    <input type="text" name="name" class="form-control">
                    <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat">Добавить</button>
                  </span>
                </div>
            </form>




            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Список всех категорий</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Название</th>
                            <th>Slug</th>
                            <th style="width: 40px"><i class="fa fa-times" aria-hidden="true"></i></th>
                        </tr>
                        </thead>
                        <tbody>



                        @if($categories)
                            @php($x = 1)
                            @foreach($categories as $key => $category)
                        <tr>
                            <td>{{ $x++ }}.</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <form action="{{ route('admin.category.destroy', ['category' => $category->id]) }}" method="post">
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

        </section>
        <!-- /.content -->
    </div>




@endsection
