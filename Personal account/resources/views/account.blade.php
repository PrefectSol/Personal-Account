@extends('layout')

@section('title')Личный кабинет@endsection

@section('content')

<div class="py-3 photo">
    <h1>Личные данные</h1>
      <img src="https://st2.depositphotos.com/8440746/11803/v/450/depositphotos_118036714-stock-illustration-user-icon-laptop-computer-device.jpg"
       alt="" width="230" height="230">
    </div>
    
    <form action="{{ route('user.logout') }}">
      @csrf
     <button class="btn btn-warning exit" type="submit">Выйти из аккаунта</button>
    </form>

    <form method="POST" class="account-data" action="{{ route('user.saveChanges') }}">
      @csrf

      <div class="anketa">
      <h2>Анкета</h2>
  <div class="col-md-20">
        <label for="Country" class="form-label">Страна</label>
        <select class="form-select" name="country" id="country">
          <option>Выберите...</option>
          <option value="Russia">Россия</option>
          <option value="Etc">Другое</option>
        </select>
      </div>
      
      <div class="col-md-20">
        <label for="Gender" class="form-label">Ваш пол</label>
        <select class="form-select" name="gender" id="gender">
          <option>Выберите...</option>
          <option value="male">Мужской</option>
          <option value="female">Женский</option>
        </select>
      </div>
      </div>

    <div class="standart">
    <div class="form-floating form-data">
      <input type="text" class="form-control" name="email" id="email" value="{{ $dataUser->email }}" placeholder="Email">
      <label for="Email">Email</label>
    </div>
    <div class="form-floating form-data">
      <input type="text" class="form-control" name="passportseries" id="passportseries" value="{{ $dataUser->passportseries }}" 
      placeholder="Серия паспорта">
      <label for="PassportSeries">Серия паспорта</label>
    </div>
    <div class="form-floating form-data">
      <input type="text" class="form-control" name="passportnumber" id="passportnumber" value="{{ $dataUser->passportnumber }}"
       placeholder="Номер паспорта">
      <label for="PassportNumber">Номер паспорта</label>
    </div>
    </div>

    <div class="passport">
    <div class="form-floating form-data">
      <input type="text" class="form-control" name="fullname" id="fullname" value="{{ $dataUser->fullname }}" placeholder="ФИО">
      <label for="FullName">ФИО</label>
    </div>
    <div class="form-floating form-data">
      <input type="text" class="form-control" name="whoisstringsuedthepassport" id="whoisstringsuedthepassport" 
      value="{{ $dataUser->whoisstringsuedthepassport }}"  placeholder="Кем выдан паспорт">
      <label for="WhoIsstringsuedThePassport">Кем выдан паспорт</label>
    </div>
    <div class="form-floating form-data">
      <input type="date" class="form-control" name="dateofissueofthepassport" id="dateofissueofthepassport" 
      value="{{ $dataUser->dateofissueofthepassport }}"  placeholder="Дата выдачи паспорта">
      <label for="DateOfIssueOfThePassport">Дата выдачи паспорта</label>
    </div>

    <div class="password" id="password">
    <div class="form-floating form-data" >
      <input type="password" class="form-control" name="password" id="password" value="{{ $dataUser->password }}" placeholder="Пароль">
      <label for="Password">Пароль</label>

    </div>
    </div>
    </div>
    <button class="w-100 btn btn-lg btn-primary save" name="sendMe" value="1" type="submit">Применить все изменения</button>
      </div>
  </div>
  </form>

<div class="foot" >
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-5 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="" class="mb-3 me-5 mb-md-0 text-muted text-decoration-none lh-1"></a>
      <span class="text-muted">© 2022 Солодков Максим | Prefect</span>
    </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li><a class="giticon" href="https://github.com/PrefectSol">
        <img src="https://www.8thwall.com/static/web/static/gitHub-bbe48010c13f36106f684d7991f0570c.png" width="50" height="50" /></a></li>
    </ul>
  </footer>
</div>

<style>

  .exit{
    border: 1px solid black;
    position: relative;
    float: right;
    bottom: 320px;
    left: 100px;
  }
  .giticon{
    padding-right: 50px;
  }
  .anketa{
    position: relative;
    padding-left: 15%;
    height: 10px;
    left: 300px;
    bottom: 210px;
  }
  .foot{
      position: relative;
      top: 330px;
  }
  .save{
      position: relative;
      padding: 5px;
      bottom: 180px;
      right: 50px;
  }
  .account-data{
      position: relative;
      padding-left: 440px;
      padding-right: 540px;
      height: 0px;
  }
  .form-data{
      padding: 2px;
      bottom: 200px;
      right: 50px;
  }
</style>
@endsection