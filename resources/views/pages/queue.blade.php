@extends('layouts.app')
@section('content')
 <main>
  <div class="container">
   <div class="main-block mds-3">
    <ol class="breadcrumb small">
     <li class="breadcrumb-item"><a href="/">Главная</a></li>
     <li class="breadcrumb-item active">Очередь</li>
    </ol>
    <h4 class="mb-3">Очередь</h4>
    <div class="form-group row mb-4">
     <div class="col">
      <select class="form-control" onchange="location.href=&#39;/pages/queue?/&#39;+this.value">
       <option value="0" disabled selected>Муниципалитет</option>
       @foreach($kinders as $kinder)
        <option>{{ $kinder->audan }}</option>
      @endforeach
      </select>
     </div>
    </div>
    <table class="table table-sm">
     <thead>
     <tr>
      <th width="50">№</th>
      <th>ФИО ребенка</th>
      <th width="30%">Дата подачи</th>
     </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
  </div>
 </main>
@endsection