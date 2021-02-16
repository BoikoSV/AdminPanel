@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper" style="min-height: 1419.6px;">
        <!-- Content Header (Page header) -->
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

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Пользователи</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="text-align: center">
                                ФИО
                            </th>
                            <th style="text-align: center">
                                Аватар
                            </th>
                            <th style="text-align: center">
                                Статус
                            </th>
                            <th class="text-center" style="text-align: center">
                                Проверен/Не проверен
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($users)
                            @foreach($users as $user)
                        <tr>
                            <td style="text-align: center">
                                <a>
                                    {{ $user->name }}
                                </a>
                                <br>
                                <small>
                                    {{ $user->created_at }}
                                </small>
                            </td>
                            <td style="text-align: center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="{{ $user->avatar ? $user->avatar : asset('assets/admin/img/avatar.png') }}">
                                    </li>
                                </ul>

                            </td>
                            <td class="project-state"  style="text-align: center">
                                @if($user->is_admin)
                                <span class="badge badge-success">Администратор</span>
                                @else
                                    <span class="badge badge-info">Пользователь</span>
                                @endif
                            </td>
                            <td style="text-align: center">
                                {{ $user->is_verified ? 'Проверен' : 'Не проверен' }}
                            </td>
                            <td class="project-actions text-right"  style="text-align: center; display: flex">
                                <a class="btn btn-primary btn-sm mr-1" href=" {{ route('admin.user.show', ['user' => $user->id]) }}">
                                    <i class="fas fa-folder">
                                    </i>
                                   Смотреть
                                </a>
                                <form action="{{ route('admin.user.destroy', ['user' => $user->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Удалить</button>
                                    </form>
                            </td>
                        </tr>
                            @endforeach
                        @endisset
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
