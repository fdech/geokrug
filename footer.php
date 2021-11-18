<footer class="main-footer">
    <div class="container">
        <div class="main-footer__wrapper">
            <div class="main-footer__column">
                <div class="logo">
                    <img src="assets/img/Logo.svg" width="100" height="100" alt="">
                    <a class="logo__link" href="index.php">
                        <div class="logo__title">
                            <h1 class="logo__main-title">ГеоКруг</h1>
                            <h2 class="logo__subtitle">Культура - рядом</h2>
                        </div>
                    </a> 
                </div>
            </div>
            <div class="main-footer__column">
                <h3 class='main-footer__title'>Разработчики</h3>
                <ul class="main-footer__list">
                    <li class="main-footer__item">Дмитрий Григорьев Сергеевич</li>
                    <li class="main-footer__item">Даниил Кумыков Альбертович</li>
                    <li class="main-footer__item">Егор Татаринов Сергеевич</li>
                    <li class="main-footer__item">Яков Смолин Сергеевич</li>
                    
                </ul>
            </div>
            <div class="main-footer__column">
                <h3 class='main-footer__title'>Наставник</h3>
                <p class="main-footer__item main-footer__item--bold">Дергунов Александр Евгеньевич (наставник)</p>
                <p class='main-footer__item'>altxfdech@gmail.com</p>
                <p class='main-footer__item'>+7-909-800-42-62</p>
            </div>
        </div> 
    </div>
</footer>
<section class="modal modal__login">
    <h2 class="modal__title">Авторизация</h2>
    <p class="modal__subtitle">ВВЕДИТЕ ПОЖАЛУЙСТА СВОЙ ЛОГИН И ПАРОЛЬ</p>
    <form method="POST" action="validation-form/auth.php">
        <p>
            <label class="visually-hidden" for="login-login">Логин</label>
            <input class="login__user" id="login-login" type="text" name="username" placeholder="Логин">
        </p>
        <p>
            <label class="visually-hidden" for="login-password">Пароль</label>
            <input class="login__password" id="login-password" type="password" name="password" placeholder="••••••••">
          </p>
        <button class="btn">Войти</button>
        <a href="register.php" class="btn btn__link">Зарегистрироваться</a>
    </form>
    <button class="modal__close">Закрыть</button>
</section>

</main>
<script src='assets/js/cam-script.js'></script>
<script src="assets/js/script.js"></script>
</body>
</html>