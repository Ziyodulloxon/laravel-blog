@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">
                            Категории 0
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">
                            Материалов 0
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">
                            Посетитлей 0
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">
                            Сегодня 0
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-block btn-default">
                    Создать категорию
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">
                        категория первая
                    </h4>
                    <p class="list-group-item-text">
                        Количество материалов
                    </p>
                </a>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-block btn-default">
                    Создать материал
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">
                        категория первая
                    </h4>
                    <p class="list-group-item-text">
                        Количество материалов
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection()
