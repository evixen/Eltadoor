<section class="main">
    <div class="container">
        <div class="alisa"></div>
        <div class="row content">
            <div class="col text-1"><p><span class="dr">К</span>омпания Эльта является официальным представителем и
                    дилером таких производителей
                    белорусских дверей, как
                    Стальная линия, Зион, Медведь и К, Халес.</p>
                <p><span class="dr">Э</span>ти компании идут в ногу с современными технологиями, дизайном и качеством
                    производимых товаров, на
                    территории республики Беларусь. Они популярны среди населения не только в Белоруссии, но и на всей
                    территории СНГ.</p></div>

        </div>
        <div class="row">
            <div class="col text-2"><p><span class="dr">М</span>ы предлагаем высококачественные и сравнительно недорогие
                    металлические и межкомнатные
                    двери.<br>
                    А так же современный дизайн, новейшие экологические материалы отделки, огромное количество цветовых
                    решений.<br>
                    Использование станков с ЧПУ позволяет изготавливать двери с минимальными зазорами и
                    максимальными противовзломными характеристиками, с повышенной тепло и шумо изоляцией.</p>
            </div>
            <div class="col-md-6 video_sl">
                <iframe width="560" height="315" src="//www.youtube.com/embed/d7mXCCnFRDw" frameborder="0"
                        allowfullscreen="" class="video__item"></iframe>
            </div>
            <div class="col-md-12 text-3">
                <p><span class="dr">З</span>аводы работают напрямую с производителями комплектующих, что гарантирует
                    достаточно быстрое и
                    качественное изготовление дверей. Идя в ногу с развитием современных технологий, инженеры
                    разработали
                    двери с терморазрывом для установки в загородные дома.</p>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider">
                    <div class="photos">
                        <?php foreach ($doors as $door) {
                            echo "<img src='/images/slider/{$door->translit}.png' class='photo'>";
                        }; ?>
                    </div>
                    <div class="d-flex justify-content-center buttons">
                        <button type="button" class="btn btn-success btn-sm prev"><</button>
                        <button type="button" class="btn btn-success btn-sm next">></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

