<section class="main">
    <div class="container">
        <h3 class="text-center pb-2">Двери компании "Медведев и К"</h3><br>
        <h4 class="text-center">Двухконтурные двери Зубр 2</h4>
        <div class="row m-auto">
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image001.jpg" class="d-block">
            </div>
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image002.jpg" class="d-block">
                <div class="blockquote-footer text-right">Венге</div>
            </div>
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image003.jpg" class="d-block">
                <div class="blockquote-footer text-right">Дуб беленый</div>
            </div>
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image004.jpg" class="d-block">
                <div class="blockquote-footer text-right">Венге светлый</div>
            </div>
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image005.jpg" class="d-block">
                <div class="blockquote-footer text-right">Орех итальянский</div>
            </div>
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image006.jpg" class="d-block">
                <div class="blockquote-footer text-right">Орех миланский</div>
            </div>
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image007.jpg" class="d-block">
                <div class="blockquote-footer text-right">Белое дерево</div>
            </div>
        </div>
        <?php foreach ($data2k as $door) { ?>
            <div class="row py-5">
                <div class="col-md-3 font-weight-bold dr"><?= $door['name']; ?></div>
                <div class="col-md-7">
                    <p><?= $door['description']; ?></p>
                    <p><span class="font-weight-bold">Замок:</span> <?= $door['zamok']; ?> </p>
                    <p><span class="font-weight-bold">Толщина полотна:</span> <?= $door['t.polotna']; ?> </p>
                    <p><span class="font-weight-bold">Вес:</span> <?= $door['ves']; ?> </p>
                    <p><span class="font-weight-bold">Размеры:</span> <?= $door['size']; ?> </p>
                </div>
                <div class="col-md-2 text-right dr"><?= $door['price'] . " ₽"; ?></div>
            </div>
        <?php } ?>

        <h4 class="text-center">Трехконтурные двери Зубр 3</h4>
        <div class="row m-auto">
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image001.jpg" class="d-block">
            </div>
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image010.jpg" class="d-block">
                <div class="blockquote-footer text-right">Венге</div>
            </div>
            <div class="col-mg-3 p-2 mx-auto">
                <img src="/images/medvedev/image011.jpg" class="d-block">
                <div class="blockquote-footer text-right">Дуб беленый лайт</div>
            </div>
        </div>
        <?php foreach ($data3k as $door) { ?>
            <div class="row py-5">
                <div class="col-md-3 font-weight-bold dr"><?= $door['name']; ?></div>
                <div class="col-md-7">
                    <p><?= $door['description']; ?></p>
                    <p><span class="font-weight-bold">Замок:</span> <?= $door['zamok']; ?> </p>
                    <p><span class="font-weight-bold">Толщина полотна:</span> <?= $door['t.polotna']; ?> </p>
                    <p><span class="font-weight-bold">Вес:</span> <?= $door['ves']; ?> </p>
                    <p><span class="font-weight-bold">Размеры:</span> <?= $door['size']; ?> </p>
                </div>
                <div class="col-md-2 text-right dr"><?= $door['price'] . " ₽"; ?></div>
            </div>
        <?php } ?>
    </div>
</section>