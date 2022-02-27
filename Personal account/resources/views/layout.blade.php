<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
    <link rel="stylesheet" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><h5>Личный кабинет</h5></li>
        </ul>

          <form action="/login">
            @csrf
            <button type="submit" class="btn btn-outline-light me-2 log" >Авторизация</button>
          </form>
          <form action="/registration">
            @csrf
           <button type="submit" class="btn btn-warning"> Регистрация</button>
          </form>
          
      </div>
    </div>
  </header>
  <hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>