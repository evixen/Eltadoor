<section class="main">
    <div class="container">
        <h3 class="text-center dr">"<?= $data['name']; ?>"</h3>
        <p class="text-center"><img src="/images/<?= $table . '/' . $data['translit'] . '.png'; ?>"
                                    class="one_door_pic"></p>
        <h4 class="dr text-center "><?= isset($data['price']) ? $data['price'] :
                $data['price_2k'] . ' / ' . $data['price_3k']; ?> ₽</h4>
        <p><span class="font-weight-bold">Эксплуатация на улице:</span> <?= $data['ulica']; ?></p>
        <p><span class="font-weight-bold">Защита цилиндра:</span> <?= $data['z_cylindra']; ?></p>
        <p><span class="font-weight-bold">Толщина полотна:</span> <?= $data['t_polotna']; ?></p>
        <p><span class="font-weight-bold">Уплотнитель:</span><?= $data['uplotnitel']; ?></p>
        <p><span class="font-weight-bold">Цилиндр секрета:</span> <?= $data['cylindr']; ?></p>
        <p><span class="font-weight-bold">Глазок:</span> <?= $data['glazok']; ?></p>
        <p><span class="font-weight-bold">Верхний замок:</span> <?= $data['v_zamok']; ?></p>
        <p><span class="font-weight-bold">Нижний замок:</span> <?= $data['n_zamok']; ?></p>
        <p><span class="font-weight-bold">Окраска коробки:</span> <?= $data['color_korospanki']; ?></p>
        <p><span class="font-weight-bold">Отделка внутри:</span> <?= $data['otdelka_in']; ?></p>
        <p><span class="font-weight-bold">Отделка снаружи:</span> <?= $data['otdelka_out']; ?></p>
        <p><span class="font-weight-bold">Утеплитель:</span> <?= $data['uteplitel']; ?></p>
        <p><span class="font-weight-bold">Ручки:</span> <?= $data['furnitura']; ?></p>
        <p><span class="font-weight-bold">Наличник:</span> <?= $data['nalichnik']; ?></p>
        <p><span class="font-weight-bold">Размеры:</span> <?= $data['size']; ?></p>
    </div>
</section>
