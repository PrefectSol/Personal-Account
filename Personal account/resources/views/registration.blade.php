@extends('layout')

@section('title')Личный кабинет@endsection

@section('content')

<body class="text-center">
    
<main class="main-registration">
  <img src="https://avatars.mds.yandex.net/i?id=5b5ffe72b54bfc84e561fcd2b1708fe1-5886828-images-thumbs&n=13"
  class="mb-4" alt="" width="150" height="150">
    <h3 class="h3 mb-3 fw-normal">Регистрация</h3>

  <form method="POST" action="{{ route('user.registration') }}">
    @csrf

    <div class="registration-standart">
    <div class="form-floating form-registration">
      <input type="text" class="form-control" name="email" value="" id="email" placeholder="Email">
      <label for="Email">Email</label>
    </div>

    <div class="form-floating form-registration">
      <input type="text" class="form-control" name="passportseries" value="" id="passportseries" placeholder="Серия паспорта">
      <label for="PassportSeries">Серия паспорта</label>
    </div>

    <div class="form-floating form-registration">
      <input type="text" class="form-control" name="passportnumber" id="passportnumber" value="" placeholder="Номер паспорта">
      <label for="PassportNumber">Номер паспорта</label>
    </div>
    </div>

    <div class="registration-passport">
    <div class="form-floating form-registration">
      <input type="text" class="form-control" name="fullname" id="fullname" value="" placeholder="ФИО">
      <label for="FullName">ФИО</label>
    </div>

    <div class="form-floating form-registration">
      <input type="text" class="form-control" name="whoisstringsuedthepassport" id="whoisstringsuedthepassport" 
      value="" required="" placeholder="Кем выдан паспорт">
      <label for="WhoIsstringsuedThePassport">Кем выдан паспорт</label>
    </div>

    <div class="form-floating form-registration">
      <input type="date" class="form-control" name="dateofissueofthepassport" id="dateofissueofthepassport" 
      required="" value="" placeholder="Дата выдачи паспорта">
      <label for="DateOfIssueOfThePassport">Дата выдачи паспорта</label>
    </div>

    <div class="registration-password" id="form-password">
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="password" value="" placeholder="Пароль">
      <label for="Password">Пароль</label>
    </div>
    </div>

    <br>
    </div> 
   <button class="w-100 btn btn-lg btn-primary" name="sendMe" value="1" type="submit">Зарегистрироваться</button>
  </form>

<div class="foot">
    <p class="mt-4 mb-3 text-muted">Не можете придумать надежный пароль? <button href="/" onclick="PasswordGenerator()">Сгенерировать</button></p> 
</div>
</main>

<script>
    function PasswordGenerator() {
        let symbols = ["Q", "q", "W", "w", "E", "e", "R", "r", "T", "t", 
        "Y", "y", "U", "u", "I", "i", "O", "o", "P", "p"];
        var text = "";
        var passwordLenght = Math.floor(Math.random() * 15) + 5 
        for(let i = 0; i < passwordLenght; i++){
            var el = Math.floor(Math.random() * 20)
            text += symbols[el];
        }
        
        document.getElementById('password').value = text;
}
</script>

<style>
    .main-registration{
        padding-left: 440px;
        padding-right: 440px;
    }
    .registration-standart{
      float: left;
    }
    
    .registration-passport{
      float: right;
    }
    #form-password{
      position: relative;
      right: 100px;
    }
    .form-registration{
        padding: 3px;
    }
</style>

@endsection