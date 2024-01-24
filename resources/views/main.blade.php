$extends('layout.main')
$section('content')

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
    <section id="about" class="bg-blue">
      <div class="wrapper about">
        <div class="about__article">
          <h1 class="about__title">Обо мне</h1>
          <p class="about__bio">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book.
          </p>
        </div>
        <div>
          <div>
            <img class="about__image" src="images/me.png" />
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="bg-grey">
      <div class="container">
        <div class="contact">
          <h1 class="contact__title text-center">Обсудим проект?</h1>
          <div>
            <p class="contact__text text-center">
              Заполните форму обратной связи
            </p>
          </div>
          <div>
            <p>Ваше имя</p>
            <input class="contact__input" type="text" placeholder="Мустафа" />
          </div>
          <div>
            <p>Ваше email</p>
            <input
              id="email"
              class="contact__input"
              type="email"
              placeholder="mail@example.com"
            />
          </div>
          <div>
            <p>Ваш телефон</p>
            <input
              id="phone-mask"
              class="contact__input"
              type="text"
              placeholder="+7928 777 65 55"
            />
          </div>
          <button class="contact__btn">Отправить</button>
          <p class="contact__text">
            Или свяжитесь со мной удобным способом связи, расположенным ниже
          </p>
        </div>
      </div>
    </section>
    $endsection
