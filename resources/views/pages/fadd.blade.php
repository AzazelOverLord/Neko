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
                                    {{
                                        Breadcrumbs::render('form-add', $cat)
                                    }}
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


                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
