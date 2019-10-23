<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/new.css">

    <title><?= $meta['title']; ?></title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <nav class="header_nav">
                    <ul class="menu d-flex">
                        <li class="menu__item"><span class="menu__text">Каталог</span>
                            <ul class="menu__item_sub catalog">
                                <li><a href="/catalog/stock">Металлические двери (на складе)</a></li>
                                <li><a href="/catalog/finished">Металлические двери (готовые решения)</a></li>
                                <li><a href="/catalog/medvedev">Металлические двери "Медведев и К"</a></li>
                                <li><a href="/catalog/to-order">Металлические двери (на заказ)</a></li>
                                <li><a href="/catalog/hales">Межкомнатные двери</a></li>
                            </ul>
                        </li>
                        <li class="menu__item"><span class="menu__text">Услуги</span>
                            <ul class="menu__item_sub services">
                                <li><a href="/info/installation">Замер, доставка, установка</a></li>
                                <li><a href="/info/contract">Договор и оплата</a></li>
                                <li><a href="/info/guarantee">Гарантия</a></li>
                            </ul>
                        </li>
                        <li class="menu__item"><a href="/info/discounts">Скидки</a></li>
                        <li class="menu__item"><a href="/info/about">О компании</a></li>
                        <li class="menu__item"><a href="/info/contacts">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row header_logo">
            <div class="col-md-3 logo">
                <a href="/"><img src="/images/template/logo.png" alt="Logo"></a>
            </div>
            <div class="col-md-3 phone">
                <a href="#"><img src="/images/template/phone.png" alt="Phone"></a>
            </div>
        </div>
    </div>


</header>

<div class="container text-center p-4">
    <img src="/images/404.png" class="p-3">
    <h3>Ошибка 404. Страница не найдена</h3>
    <p>Неправильно набран адрес или такой страницы не существует</p>
    <a href="/" class="brown">Перейти на главную</a>
</div>

<footer class="footer">
    <div class="container-fluid">
        <div class="row footer__item">
            <div class="col-sm-6 copyright">
                © 2018 ООО "Эльта". Разработка и дизайн сайта - EviXen<br>
                <a href="/info/confi">Политика конфиденциальности и защиты информации</a>
            </div>
            <div class="col-sm-3 layout ">
                <form action="/" method="post" class="layout-form">
                    <div class="row d-flex align-items-center">
                        <label for="layout" class="col-auto col-form-label f_label">Шаблон:</label>
                        <div class="col-auto f_select">
                            <select class="form-control form-control-sm" id="layout" name="layout">
                                <option>classic</option>
                                <option>new</option>
                            </select>
                        </div>
                        <div class="col-auto f_submit">
                            <button type="submit" class="btn btn-success btn-sm">Go</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-2">
                <a href="/admin" class="admin_icon"><i class="fas fa-unlock"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
</body>
</html>