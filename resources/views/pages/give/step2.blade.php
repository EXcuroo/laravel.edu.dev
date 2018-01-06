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
                <div class="col current">2. Подтверждение факта подачи заявления впервые</div>
                <div class="col disabled">3. Заявление на постановку в электронную очередь</div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <form method="post" action="/give/step3">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Серия документа</label>
                            <div class="input-group">
                                <select name="series" class="form-control" required="">
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                    <option value="VI">VI</option>
                                    <option value="VII">VII</option>
                                    <option value="VIII">VIII</option>
                                    <option value="IX">IX</option>
                                    <option value="X">X</option>
                                </select>
                                <span class="input-group-addon">—</span>
                                <input type="text" name="series2" class="form-control" maxlength="2" pattern="[А-Я]{2}" autocomplete="off" placeholder="АА" required="">
                            </div>
                        </div>
                        <small class="form-text text-muted form-group">В серии свидетельства о рождении РФ должны присутствовать римские цифры и буквы русского алфавита: например, III-АР</small>
                        <div class="form-group">
                            <label>Номер документа</label>
                            <input type="text" name="number" class="form-control" maxlength="6" pattern="[0-9]{6}" autocomplete="off" placeholder="123456" required="">
                        </div>
                        <div class="form-group">
                            <label>Дата выдачи</label>
                            <input type="text" name="date" class="form-control" maxlength="10" pattern="[0-9]{2}.[0-9]{2}.[0-9]{4}" autocomplete="off" required="">
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="/give" class="btn btn-light">Назад</a>
                            <input type="submit" class="btn btn-primary" value="Продолжить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection