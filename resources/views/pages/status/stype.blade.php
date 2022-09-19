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
                                    <h4 class="mt-0 header-title">Типы сайта по умолчанию</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Добавить</h4>
                                                    <div class="general-label">
                                                        <form class="form-inline" action="edit/create_cat.php" method="POST" role="form">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Тэг</label>
                                                                <input type="text" name="category" class="form-control form-control" id="exampleInputEmail2" placeholder="Категория">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary ml-2 " id="example-text-input">Добавить</button>
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
                                            <th>Категория</th>
                                            <th></th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($status as $stat)
                                            <tr>
                                                <td>
                                                    {{ $stat->id }}
                                                </td>
                                                <td>
                                                    {{ $stat->name }}
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="edditing_cat.php?id_tarif=%s"><button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button></a>
                                                        <a href="edit/delete_cat.php?id_tarif=%s"><button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
