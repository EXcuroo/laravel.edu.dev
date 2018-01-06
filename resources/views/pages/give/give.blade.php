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
                <div class="col current">1. Информация об услуге</div>
                <div class="col disabled">2. Подтверждение факта подачи заявления впервые</div>
                <div class="col disabled">3. Заявление на постановку в электронную очередь</div>
            </div>

            <p><strong>Перед заполнением заявления просим вас внимательно ознакомиться с условиями подачи заявления.</strong></p>
            <p>Если в заявлении указано наличие льгот, либо потребность по здоровью, а также, если заявление было подано законным представителем (за исключением подачи заявления от имени родителей), то Вам необходимо обратиться в Ваш районный отдел образования с оригиналами документов, подтверждающих право на льготы, потребность по здоровью, либо подтверждающих право на представление интересов ребенка.</p>
            <p>Проверить статус заявления и место Вашего ребенка в очереди можно по серии и номеру свидетельства о рождении ребенка.</p>
            <p class="alert alert-info">Ваше место в очереди может меняться как в сторону понижения, так и в сторону повышения. Очередь смещается вниз, если в очередности появился ребенок, который сменил желаемое дошкольное образовательное учреждение в связи со сменой места жительства, а дата его постановки на очередь раньше Вашей (по решению представительного органа муниципального образования). Очередь смещается вверх, если из очереди в указанное дошкольное образовательное учреждение выбыл один из детей (например, ребенок получил место в детском саду, либо Заявитель отказался от получения услуги).</p>

            <form method="post" action="{{ route('give.step2') }}">
                {{ csrf_field() }}
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="chk1" value="1" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">С условиями подачи заявления согласен(на)</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="chk2" value="1" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Я согласен(на), что для получения электронной услуги мои персональные данные и персональные данные моего ребенка будут обработаны в ведомственных информационных системах с соблюдением требований закона РФ от 27.07.2006 №152-ФЗ "О персональных данных"</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="chk3" value="1" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Об ответственности за предоставление заведомо ложных сведений, либо подложных документов, в соответствии с законодательством Российской Федерации предупрежден</span>
                </label>

                <div class="d-flex justify-content-between">
                    <input type="submit" class="btn btn-primary" value="Продолжить">
                </div>
            </form>
        </div>
    </div>
</main>
@endsection