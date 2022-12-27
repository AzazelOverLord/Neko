@extends('layouts.theme1')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Главное меню</a></li>
                                            <li class="breadcrumb-item active"><a href="form_create_status_call.php">Статусы звонка</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="mt-0 header-title">Статусы звонка по умолчанию</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Добавить</h4>
                                                    <div class="general-label">
                                                        <form class="form-inline" action="edit/create_status_call.php" method="POST" role="form">
                                                            <div class="form-group col-md-6">
                                                                <label class="sr-only" for="exampleInputEmail2">Статус звонка</label>
                                                                <input type="text" name="category" class="form-control form-control" id="exampleInputEmail2" placeholder="Статус звонка">
                                                            </div>
                                                            <br>
                                                            <div class="form-group col-md-12">
                                                                <button type="submit" class="btn btn-primary ml-2 " id="example-text-input">Добавить</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th></th>
                                        </tr>
                                        </thead>


                                        <tbody>

                                                        <tr>
                                                            <td>
                                                                %s
                                                            </td>
                                                            <td>%s</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a href="edditing_status_call.php?id_tarif=%s"><button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button></a>
                                                                    <a href="edit/delete_status_call.php?id_tarif=%s"><button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button></a>
                                                                  </div>
                                                            </td>
                                                        </tr>

                                                            <tr>
                                                            <td>
                                                                0
                                                            </td>
                                                            <td>К сожанию здесь в данный момент пусто</td>


                                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
