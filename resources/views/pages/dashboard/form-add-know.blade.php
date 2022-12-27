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

                                    <h4 class="mt-0 header-title">Тэги по умолчанию</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="index.php">Главное меню</a></li>
                                                            <li class="breadcrumb-item"><a href="form-add-know.php">Особенности</a></li>
                                                            <li class="breadcrumb-item active">Изменение особенности</li>
                                                        </ol>
                                                    </div>
                                                    <h4 class="mt-0 header-title">Добавить</h4>
                                                    <div class="general-label">
                                                        <form class="form-inline" action="edit/edit_know.php" method="POST" role="form">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Тэг</label>

                                                                <input type="text" name="category" class="form-control form-control" id="exampleInputEmail2" value="<? echo $row['name']; ?>" placeholder="Категория">
                                                                <input type="text" name="id_cat" class="form-control form-control" id="exampleInputEmail2" value="<? echo $id_cat; ?>" placeholder="Категория" style="display: none;">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary ml-2 " id="example-text-input">Изменить</button>
                                                        </form>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->


                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
