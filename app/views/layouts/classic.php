<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="/">
    <title><?= $meta['title']; ?></title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/classic.css">
</head>
<body>
<?php if (isset($_SESSION['error'])) {
    echo "<div>{$_SESSION['error']}</div>";
    unset($_SESSION['error']);
} else {
    if (isset($_SESSION['success'])) {
        echo "<div>{$_SESSION['success']}</div>";
        unset($_SESSION['success']);
    }
} ?>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header_top clearfix">
                <div class="header_logo">
                    <a href="/" class="logo">
                        <img src="/images/template/logo.png" alt="" class="logo_pic">
                    </a>
                </div>
                <div class="header_phone">
                    <div class="phone">
                        <a href="#" class="phone_ref">
                            <img src="/images/template/phone.png" alt="" class="phone_pic">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="canvas">
        <div class="top_body">
            <nav class="nav">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="/" class="nav_link">
								<span class="nav_title">
									Главная
								</span>
                        </a>
                    </li>
                    <li class="nav_item">
							<span class="nav_dot">
								.
							</span>
                    </li>
                    <li class="nav_item">
							<span class="nav_title">
								Каталог
							</span>
                        <ul class="sub_menu catalog">
                            <li><a href="/catalog/stock">Металлические двери (на складе)</a></li>
                            <li><a href="/catalog/finished">Металлические двери (готовые решения)</a></li>
                            <li><a href="/catalog/medvedev">Металлические двери "Медведев и К"</a></li>
                            <li><a href="/catalog/to-order">Металлические двери (на заказ)</a></li>
                            <li><a href="/catalog/hales">Межкомнатные двери</a></li>
                        </ul>
                    </li>
                    <li class="nav_item">
							<span class="nav_dot">
								.
							</span>
                    </li>
                    <li class="nav_item">
							<span class="nav_title">
								Услуги
							</span>
                        <ul class="sub_menu services">
                            <li><a href="/info/installation">Замер, доставка, <br>установка</a></li>
                            <li><a href="/info/contract">Договор и оплата</a></li>
                            <li><a href="/info/guarantee">Гарантия</a></li>
                        </ul>
                    </li>
                    <li class="nav_item">
							<span class="nav_dot">
								.
							</span>
                    </li>
                    <li class="nav_item">
                        <a href="/info/discounts" class="nav_link">
								<span class="nav_title">
									Скидки
								</span>
                        </a>
                    </li>
                    <li class="nav_item">
							<span class="nav_dot">
								.
							</span>
                    </li>
                    <li class="nav_item">
                        <a href="/info/about" class="nav_link">
								<span class="nav_title">
									О компании
								</span>
                        </a>
                    </li>
                    <li class="nav_item">
							<span class="nav_dot">
								.
							</span>
                    </li>
                    <li class="nav_item">
                        <a href="/info/contacts" class="nav_link">
								<span class="nav_title">
									Контакты
								</span>
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="mid_body">
            <?= $content; ?>
            <div class="social">

            </div>
            <div class="empty">

            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="footer_nav">
            <ul class="f_nav_list">
                <li class="f_nav_item">
                    <a href="/" class="f_nav_link">
								<span class="f_nav_title">
									Главная
								</span>
                    </a>
                </li>
                <li class="f_nav_item">
							<span class="f_nav_dot">
								.
							</span>
                </li>
                <li class="f_nav_item">
							<span class="f_nav_title">
								Каталог
							</span>
                    <ul class="f_sub_menu f_catalog">
                        <li><a href="/catalog/stock">Металлические двери (на складе)</a></li>
                        <li><a href="/catalog/finished">Металлические двери (готовые решения)</a></li>
                        <li><a href="/catalog/medvedev">Металлические двери "Медведев и К"</a></li>
                        <li><a href="/catalog/to-order">Металлические двери (на заказ)</a></li>
                        <li><a href="/catalog/hales">Межкомнатные двери</a></li>
                    </ul>
                </li>
                <li class="f_nav_item">
							<span class="f_nav_dot">
								.
							</span>
                </li>
                <li class="f_nav_item">
							<span class="f_nav_title">
								Услуги
							</span>
                    <ul class="f_sub_menu f_services">
                        <li><a href="/info/installation">Замер, доставка, <br>установка</a></li>
                        <li><a href="/info/contract">Договор и оплата</a></li>
                        <li><a href="/info/guarantee">Гарантия</a></li>
                    </ul>
                </li>
                <li class="f_nav_item">
							<span class="f_nav_dot">
								.
							</span>
                </li>
                <li class="f_nav_item">
                    <a href="/info/discounts" class="f_nav_link">
								<span class="f_nav_title">
									Скидки
								</span>
                    </a>
                </li>
                <li class="f_nav_item">
							<span class="f_nav_dot">
								.
							</span>
                </li>
                <li class="f_nav_item">
                    <a href="/info/about" class="f_nav_link">
								<span class="f_nav_title">
									О компании
								</span>
                    </a>
                </li>
                <li class="f_nav_item">
							<span class="f_nav_dot">
								.
							</span>
                </li>
                <li class="f_nav_item">
                    <a href="/info/contacts" class="f_nav_link">
								<span class="f_nav_title">
									Контакты
								</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="container layout">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-5 footer_copyright">
                    <p class="copyright">
                        © 2018 <span class="copy_color">ООО "Эльта"</span>. Разработка и дизайн сайта - <span
                                class="copy_color">EviXen</span><br>
                        <a href="/info/confi" class="copy_link">Политика конфиденциальности и защиты информации</a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <form action="/" method="post" class="layout-form">
                        <div class="row d-flex justify-content-center align-items-center">
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
                <div class="col-sm-1">
                    <a href="/admin" class="admin_icon"><i class="fas fa-unlock"></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>