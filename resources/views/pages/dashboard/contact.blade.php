@extends('layouts.theme1')

@section('content')

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Наши контактные данные</h4>
                        <form class="" action="edit/update_adress.php" method="POST">
                            <div class="form-group">
                                <label>Адрес</label>
                                <input type="text" class="form-control" name="adress" required placeholder="введите адрес" value="{{('Адрес')}}" />
                            </div><!--end form-group-->

                            <div class="form-group">
                                <label>E-Mail</label>
                                <div>
                                    <input type="email" class="form-control" name="mail" required
                                           parsley-type="email" placeholder="Введите почту" value="{{('Емайл')}}" />
                                </div>
                            </div><!--end form-group-->

                            <div class="form-group">
                                <label>Номер телефона</label>
                                <div>
                                    <input data-parsley-type="number" type="text" name="phone"
                                           class="form-control" required
                                           placeholder="Номер телефона" value="{{('Номер телефона')}}" />
                                </div>
                            </div><!--end form-group-->

                            <div class="form-group">
                                <label>Статус</label>
                                <input type="text" class="form-control" name="status" required placeholder="введите статус" value="{{('Статус')}}" />
                            </div><!--end form-group-->

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Сохранить
                                </button>
                            </div><!--end form-group-->
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!-- end col -->
        </div> <!-- end row -->
@endsection
