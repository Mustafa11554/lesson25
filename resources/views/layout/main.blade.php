<!DOCTYPE html>
<html lang="ru"> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $titile ?? 'Default title '}}</title>
    <!-- <script src="https://unpkg.com/imask"></script> -->
    <!-- <script defer src="main.js"></script> -->
    @vite('resources/css/main.scss')
    <section class="bg-blue">
      <div class="container introduction">
        <div>
          <h1 class="introduction__header">Меня зовут Мустафа</h1>
          <p class="introduction__text">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
          </p>
        </div>
        <div>
          <img src="images/me.png" class="introduction__img" />
        </div>
      </div>
    </section>
</head>
</body>
@include('layout.footer')
@yield('content')
</body>
</html>