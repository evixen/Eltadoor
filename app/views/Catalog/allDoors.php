<section class="main">
    <div class="container">
        <div class="row">
            <?php foreach ($data as $door) { ?>
            <div class="col-12 col-sm-6 col-md-4">
                <ul class="d-block table_d">
                    <li class="text-center name"><?= "<a href='/catalog/{$table}/{$door['translit']}' 
                                                                        class='dr'>\"{$door['name']}\"</a>"; ?></li>
                    <li class="img_d"><?= "<a href='/catalog/{$table}/{$door['translit']}' class='dr'>
                                <img src='/images/{$table}/{$door['translit']}.png' alt=''></a>"; ?></li>
                    <li>
                        <div class="row door-row">
                            <div class="col-lg-4 door-text">Эксплуатация на улице:</div>
                            <div class="col-lg-7 door-text"><?= $door['ulica']; ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row door-row">
                            <div class="col-lg-4 door-text">Уплотнение:</div>
                            <div class="col-lg-7 door-text"><?= $door['uplotnitel']; ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row door-row">
                            <div class="col-lg-4 door-text">Отделка снаружи:</div>
                            <div class="col-lg-7 door-text"><?= $door['otdelka_out']; ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row door-row">
                            <div class="col-lg-4 door-text">Отделка внутри:</div>
                            <div class="col-lg-7 door-text"><?= $door['otdelka_in']; ?></div>
                        </div>
                    </li>
                    <li class="text-center price">
                        <div class="dr"><?= isset($door['price']) ? $door['price'] :
                                $door['price_2k'] . ' / ' . $door['price_3k']; ?>₽
                        </div>
                    </li>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>
</section>