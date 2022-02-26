@extends('layout')

@section('title')Личный кабинет@endsection

@section('content')

<body class="text-center">

<main class="form-login">
  <img class="mb-4" src="https://avatars.mds.yandex.net/i?id=5b5ffe72b54bfc84e561fcd2b1708fe1-5886828-images-thumbs&n=13" alt="" 
  width="150" height="150">
    <h3 class="h3 mb-3 fw-normal">Авторизация</h3>

  <form method="POST" action="{{ route('user.login') }}">
    @csrf

    <div class="form-input form-floating">
      <input type="text" class="form-control floatingInput" name="email" value="" id="email" placeholder="Email">
      <label for="email">Email</label>
    </div>

    <div class="form-input form-floating">
      <input type="password" class="form-control floatingInput" name="password" value="" id="password" placeholder="Пароль">
      <label for="password">Пароль</label>
    </div>
    <br>

    <button class="w-100 btn btn-lg btn-primary" name="sendMe" value="1" type="submit">Войти</button>
    
  </form>
  <div class="mute-text">
  <p class="mt-1 mb-3 text-muted ">Не зарегистрированы?<a href="/registration" class="text-gray">Зарегистрироваться</a></p>
  </div>
</main>
</body>

<style>
    .form-login{
        padding-left: 500px;
        padding-right: 500px;
    }
    .form-input{
        padding: 2px;
    }
</style>

@endsection