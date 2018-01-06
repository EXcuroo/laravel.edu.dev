@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="main-block mds-3">
                <ol class="breadcrumb small">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item active">Подача заявления</li>
                </ol>
                <h4>Подача заявления</h4>
                <div class="row statement-steps">
                    <div class="col"><a href="/give">1. Информация об услуге</a></div>
                    <div class="col"><a href="/give/step2">2. Подтверждение факта подачи заявления впервые</a></div>
                    <div class="col current">3. Заявление на постановку в электронную очередь</div>
                </div>
                <form method="post" action="/give/step3/queue">
                    {{ csrf_field() }}
                    <h6 class="text-uppercase mb-3">Информация о ДОУ</h6>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Муниципалитет<span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <select name="audan" id="municipality_sel" class="form-control form-control-sm" required="">
                                <option value="0" disabled="" selected="">выбрать</option>
                                @foreach($kinders as $kinder)
                                <option>{{ $kinder->audan   }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Название Местности<span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <select name="locality" id="municipality_sel" class="form-control form-control-sm" required="">
                                <option value="0" disabled="" selected="">выбрать</option>
                                @foreach($kinders as $kinder)
                                <option>{{ $kinder->locality   }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!--<div class="form-group row">
                        <label class="col-md-3 col-form-label">Район<span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <select name="district" class="form-control form-control-sm">
                                <option value="0" disabled selected>выбрать</option>
                            </select>
                        </div>
                    </div>-->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Желаемый ДОУ<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <select name="dou" id="kindergarten_sel" class="form-control form-control-sm" required=""><option value="0" disabled="" selected="">выбрать</option>
                                @foreach($kinders as $kinder)

                                <option>{{ $kinder->kindergartens_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Группа по языку</label>
                        <div class="col-md-3">
                            <select name="lang_group" class="form-control form-control-sm" form-control-sm="">
                                <option value="" disabled="" selected="">выбрать</option>
                                <option value="Русский">Русский</option>
                                <option value="Башкирский">Башкирский</option>
                                <option value="Татарский">Татарский</option>
                                <option value="Чувашский">Чувашский</option>
                                <option value="Марийский">Марийский</option>
                                <option value="Удмуртский">Удмуртский</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Желаемая дата поступления<span class="text-danger">*</span></label>
                        <div class="col-md-3">
                            <select name="data_admission" class="form-control form-control-sm" required="">
                                <option value="" disabled="" selected="">выбрать</option>
                                <option value="2018-09-01">Сентябрь 2018</option><option value="2019-09-01">Сентябрь 2019</option><option value="2020-09-01">Сентябрь 2020</option><option value="2021-09-01">Сентябрь 2021</option>                </select>
                        </div>
                    </div>


                    <h6 class="text-uppercase mb-3">Информация о ребенке</h6>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Фамилия<span class="text-danger">*</span></label>
                        <div class="col-md-4">
                            <input name="surname" class="form-control form-control-sm" type="text" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Имя<span class="text-danger">*</span></label>
                        <div class="col-md-4">
                            <input name="name" class="form-control form-control-sm" type="text" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Отчество</label>
                        <div class="col-md-4">
                            <input name="patronymic" class="form-control form-control-sm" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Дата рождения<span class="text-danger">*</span></label>
                        <div class="col-md-3">
                            <input class="form-control form-control-sm" name="date_of_born" type="text" maxlength="10" pattern="[0-9]{2}.[0-9]{2}.[0-9]{4}" placeholder="дд.мм.гггг" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Пол<span class="text-danger">*</span></label>
                        <div class="col-md-2">
                            <select name="gender" class="form-control form-control-sm" required="">
                                <option value="0" disabled="" selected="">выбрать</option>
                                <option value="м">Мужской</option>
                                <option value="ж">Женский</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row d-none lgotfield">
                        <label class="col-md-3 col-form-label">Скан-файл документа, подтверждающего льготу</label>
                        <div class="col-md-9">
                            <input type="file" name="lgfile" class="form-control-file">
                        </div>
                    </div>
                    <div class="alert alert-info">Льгота дает право на приоритетное зачисление ребенка. Чтобы подтвердить наличие льгот, необходимо предоставить соответствующие документы. <br><br> Если вы указали наличие льготы, необходимо прикрепить к заявлению скан-файл документа, подтверждающего льготу.</div>
                    <input type="hidden" name="_token" value="{{csrf_token() }}"><br>
                    <div class="d-flex justify-content-between">
                        <a href="/give/step2" class="btn btn-light">Назад</a>
                        <input type="submit" class="btn btn-primary" value="Подать заявление">
                    </div>
                    <input type="hidden" name="c_ser" value="III-ВВ">
                    <input type="hidden" name="c_num" value="213213">
                    <input type="hidden" name="c_gdate" value="3211221312">
                </form>
            </div>

            <!-- Modal -->
            <div class="modal fade" tabindex="-1" id="lgotModal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Льгота</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body small custom-controls-stacked" id="lgot_sel"><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="1">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети из многодетных семей (3 и более несовершеннолетних детей).</span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="2">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети одиноких родителей, в свидетельстве о рождении которых один из родителей не указан или указан по заявлению, при наличии справки об этом, выданной органами ЗАГС (ф. 25).</span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="3">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети, находящиеся под опекой, сироты.</span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="5">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети-инвалиды, дети, родители (законные представители) или один из родителей (законных представителей) которых являются инвалидами I и II групп.</span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="11">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети, родители которых являются работниками муниципальных дошкольных образовательных учреждений на время их работы в учреждении.</span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="12">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети граждан, подвергшихся воздействию радиации вследствие катастрофы на Чернобыльской АЭС.</span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="13">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети сотрудников: органов внутренних дел, органов по делам гражданской обороны, чрезвычайным ситуациям и ликвидации последствий стихийных бедствий, органов пограничной службы, органов Федеральной службы безопасности, иных сотрудников органов безопасности </span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="14">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети военнослужащих.</span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="15">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети, родители которых являются работниками учреждений и органов уголовно-исполнительной системы.</span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="16">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети, работающих одиноких родителей.</span>                                    </label><label class="custom-control custom-radio">                                        <input name="lgot" type="radio" class="custom-control-input" value="17">                                        <span class="custom-control-indicator"></span>                                        <span class="custom-control-description">Дети-близнецы</span>                                    </label></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary savelgot">Сохранить</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Отмена</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection