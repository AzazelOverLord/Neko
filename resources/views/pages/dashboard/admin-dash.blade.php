@extends('layouts.theme1')

@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body mb-0">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <div class="">
                            <h4 class="mt-0 header-title">Уникальных посетителей</h4>
                            <h2 class="mt-0 font-weight-bold"></h2>
                            <p class="mb-0 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>14.5%</span> Up From Last Week</p>
                        </div>
                    </div><!--end col-->
                    <div class="col-4 align-self-center">
                        <div class="icon-info text-right">
                            <i class="dripicons-cart bg-soft-warning"></i>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
            <div class="card-body overflow-hidden p-0">
                <div class="d-flex mb-0 h-100 dash-info-box">
                    <div class="w-100">
                        <div class="apexchart-wrapper">
                            <div id="dash_spark_1" class="chart-gutters"></div>
                        </div>
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body mb-0">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <div class="">
                            <h4 class="mt-0 header-title">Просмотров</h4>
                            <h2 class="mt-0 font-weight-bold"></h2>
                            <p class="mb-0 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>14.5%</span> Up from yesterday</p>
                        </div>
                    </div><!--end col-->
                    <div class="col-4 align-self-center">
                        <div class="icon-info text-right">
                            <i class="dripicons-wallet bg-soft-success"></i>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
            <div class="card-body overflow-hidden p-0">
                <div class="d-flex mb-0 h-100 dash-info-box">
                    <div class="w-100">
                        <div class="apexchart-wrapper">
                            <div id="apex_column1" class="chart-gutters"></div>
                        </div>
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
    <div class="col-lg-4">
        <div class="card carousel-bg-img">
            <div class="card-body dash-info-carousel mb-0">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 align-self-center">
                                    <div class="text-center">
                                        <h4 class="mt-0 header-title text-left">Заявки с сайта</h4>
                                        <div class="icon-info my-3">
                                            <i class="dripicons-basket bg-soft-info"></i>
                                        </div>
                                        <h2 class="mt-0 font-weight-bold"></h2>
                                        <p class="mb-1 text-muted"><span class="text-danger"><i class="mdi mdi-arrow-down"></i>1.5%</span> Down From Last week</p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end carousel-item-->

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 align-self-center">
                                    <div class="text-center">
                                        <h4 class="mt-0 header-title text-left">Всего в плане</h4>
                                        <div class="icon-info my-3">
                                            <i class="dripicons-user-group bg-soft-success"></i>
                                        </div>
                                        <h2 class="mt-0 font-weight-bold"></h2>
                                        <p class="mb-1 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>11.1%</span> Up from yesterday</p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end carousel-item-->

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 align-self-center">
                                    <div class="text-center">
                                        <h4 class="mt-0 header-title text-left">Обработанно за день</h4>
                                        <div class="icon-info my-3">
                                            <i class="dripicons-user-group bg-soft-success"></i>
                                        </div>
                                        <h2 class="mt-0 font-weight-bold"></h2>
                                        <p class="mb-1 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>11.1%</span> Up from yesterday</p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end carousel-item-->

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Общая информация</h4>

                <!-- Nav tabs -->
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" data-toggle="tab" href="#meeting" role="tab">Встречи</a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link " data-toggle="tab" href="#maket" role="tab">Макеты</a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#calling" role="tab">Задания</a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">Звонки</a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Заявки с сайта</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="meeting" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Компания</th>
                                        <th>Делать макет?</th>
                                        <th>Макет готов?</th>
                                        <th>Статус заявки</th>
                                        <th>Дата встречи</th>
                                        <th>Менеджер</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    @foreach($calls as $call)
                                        <tr>
                                            <td>{{ $call->id }}</td>
                                            <td>{{ $call->name_company }}</td>
                                            <td>{{ $call->need_maket }}</td>
                                            <td>{{ $call->maket }}</td>
                                            <td>{{ $call->status_bid }}</td>
                                            <td>{{ $call->date_meet }}</td>
                                            <td>{{ $call->need_maket }}</td>
                                            <td>{{ $call->caller }}</td>

                                        </tr>
                                    @endforeach
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane p-3" id="maket" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Компания</th>
                                        <th>Делать макет?</th>
                                        <th>Макет готов?</th>
                                        <th>Статус заявки</th>
                                        <th>Дата встречи</th>
                                        <th>Менеджер</th>
                                        <th></th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane p-3" id="calling" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Заголовок</th>
                                        <th>Project Manager</th>
                                        <th>Исполнитель</th>
                                        <th>Выполнено</th>
                                        <th>deadline</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($wtasks as $task)
                                        <tr>
                                            <td>{{ $task->id }}</td>
                                            <td>{{ $task->title }}</td>
                                            <td><a href="UserProfile.php?profile={{ $task->id_project_manager }}">{{ $task->PMProject->name }}</a></td>
                                            <td><a href="UserProfile.php?profile={{ $task->id_user }}">{{ $task->UserProject->name }}</a></td>
                                            <td>что-то</td>
                                            <td>{{ $task->dead_line }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Компания</th>
                                <th>Делать макет?</th>
                                <th>Макет готов?</th>
                                <th>Статус заявки</th>
                                <th>Дата встречи</th>
                                <th>Менеджер</th>
                                <th></th>
                            </tr>
                            </thead>


                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Имя</th>
                                <th>Номер телефона</th>
                                <th>Почта</th>
                                <th>Сообщение</th>
                                <th>Дата создания</th>
                            </tr>
                            </thead>


                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="card">

        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card overflow-hidden">
            <div class="card-body bg-gradient3">
                <div class="">
                    <div class="card-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h2 class="font-weight-bold text-white">Булик активности</h2>
                </div>
            </div><!--end card-body-->
            <div class="card-body dash-info-carousel">
                <div id="carousel_review" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="media">

                                <div class="media-body align-self-center">
                                    <h4 class="mt-0 header-title">Активность за день</h4>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="">
                                    <div id="d2_payment" class="apex-charts"></div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="media">

                                <div class="media-body align-self-center">
                                    <h4 class="mt-0 header-title">Активность за месяц</h4>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="">
                                    <div id="d1_payment" class="apex-charts"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel_review" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel_review" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->


</div><!--end row-->
@endsection
