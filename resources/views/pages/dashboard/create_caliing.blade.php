@extends('layouts.theme1')

@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="edit/create_caller.php" method="POST" enctype='multipart/form-data'>
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title">Расписать звонок</h4>
            <p class="text-muted mb-4">Укажите базовые данные и потребности клиента</p>
            <div id="smart_wizard_circles">
                <ul>
                    <li><a href="#step-1"><i class="fas fa-phone d-block"></i><small>Шаг звонок</small></a></li>
                    <li><a href="#step-2"><i class="far fa-envelope d-block"></i><small>Шаг потребности</small></a></li>
                </ul>

                <div class="p-3 sw-circle-content mb-3">
                    <div id="step-1" class="">
                        <div class="form-group row" style="display: none;">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Автор</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="author_project" value="{{  __('!!!Пользователь!!!') }}" id="example-text-input" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Имя компании</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name_comp" id="example-text-input" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Сайт</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="url_site" id="example-text-input" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Контактное лицо</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="contacts_user" id="example-text-input" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Номер телефона</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="phone_users" id="example-text-input" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Статус звонка</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status_caller">
                                    <option></option>
                                    <option>{{__('Статусы звонка!!!!!')}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label text-right">Дата встречи/звонка</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" value="" name="deadline" id="example-date-input">
                            </div>
                        </div>

                    </div>
                    <div id="step-2" class="">

                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6 class="input-title mt-0">Тариф</h6>
                                <select class="select2 form-control mb-3 custom-select" name="tarif" style="width: 100%; height:76px;">
                                    <option>Выбрать</option>
                                    <option>{{__('Тарифы')}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Оплата для клиента</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="price" id="example-text-input" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Желаемый домен</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="domain_site" id="example-text-input" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Деятельность компании</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="desc_comp" id="example-text-input" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Комментарий</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="comment" placeholder="Комментарий" autocomplete="off"></textarea>
                            </div>
                        </div>

                    </div>
                </div><!--end /div-->
            </div> <!--end smartwizard-->
        </div><!--end card-body-->
    </div><!--end card-->
    </form>
    </div>
    </div>
    </div><!--end card-body-->
    </div><!--end card-->
    </div><!--end col-->
    </div><!--end row-->



@endsection
