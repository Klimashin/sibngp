<!--[if gt IE 8]>-->
<div class="modal fade" id="sertificate-gallery-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <?php
            foreach ($sertificates as $sertificate) {
                ?><div class="gallery-item">
                    <img src="<?= $sertificate ?>" class="img-responsive" alt="sertificate">
                </div><?php
            }
            ?>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="recall-gallery-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <?php
            foreach ($recalls as $recall) {
                ?><div class="gallery-item">
                    <img src="<?= $recall ?>" class="img-responsive" alt="sertificate">
                </div><?php
            }
            ?>
        </div>
    </div>
  </div>
</div>
<!--<![endif]-->
<section id="content">
    <div id="left">
        <div id="logo"><img src="/assets/img/logo.png"></div>
        <section id="about-us">
            <h1>Основные направления деятельности нашего предприятия</h1>
            </p>Проектирование опасных производственных объектов нефтегазовой и нефтехимической отраслей, в том числе:</p>
            <ul>
                <li>Проектирование объектов нефтегазодобычи;</li>
                <li>Проектирование объектов хранения и перевалки газа и нефтепродуктов;</li>
                <li>Проектирование нефтеперерабатывающих и нефтехимических предприятий, в том числе: НПЗ первичной и вторичной (глубокой) переработки нефти для производства высокооктановых бензинов (АИ-92, АИ-95), установки подготовки и стабилизации углеводородного сырья, газоперерабатывающие заводы и пр.;</li>
                <li>Проектирование автомобильных заправочных станций;</li>
                <li>Внедрение (монтаж, пуско-наладка) систем контрольно-измерительных приборов и автоматики (КИПиА), систем автоматизированного управления технологическими процессами любого масштаба и функциональности.</li>
            </ul>
            <p>За время существования нашего предприятия было разработано более 30-ти проектов строительства, реконструкции и модернизации различных опасных производственных объектов, основную долю составляют объекты обустройства нефтяных и газокондехсатныхместорождений.</p>
            <p>Ведущими инженерами-проектировщиками 000 "Сибнефтегазпроект" производится постоянный контроль выполнения проектной документации в соответствии с нормами, требованиями и правилами, установленными нормативными документами, в соответствии с постановлением Правительства РФ от 16.02.2008 № 87 «О составе разделов проектной документаци и требованиях к их сoдержанию», положением «0 порядке рассмотрения проектной документации потенциально опасных производств в химической, нефтехимической и нефтеперерабатывающей промышленности» и другими руководящими документами.</p>
            <p>Подготовка проектной документации осуществляется в соответствии с законодательством Российской Федерации о государственной тайне.</p>
        </section>
        <section id="sertificate-gallery">
            <h1>Сертификаты</h1>
            <!--[if !IE 9]>
            <p>Ваш браузер устарел. Пожалуйста, обновите его, чтобы отобразить этот блок.</p>
            <![endif]-->
            <!--[if gte IE 9]><!-->
            <div class="gallery hidden-sm hidden-xs">
            <?php
                foreach ($sertThumbs as $sertificate) {
                    ?><a type="button" data-toggle="modal" data-target="#sertificate-gallery-modal">
                        <div class="gallery-item"><img src="<?= $sertificate ?>"></div>
                      </a><?php
                }
            ?>
            </div>
            <a class="visible-sm visible-xs" tabindex="0" role="button"
               data-toggle="modal" data-target="#sertificate-gallery-modal">Открыть галерею сертификатов</a>
            <!--<![endif]-->
        </section>
        <section id="information">
            <h1>Кратко о предприятии</h1>
            <div>
                <p>ООО «Cибнефтегазпрoект» — это проектная организация, обладающая современной технической базой, выпускающая проектную документацию по нескольким основным направлениям: объекты обустройства нефтяных и газоконденсатных месторождений, объекты общезаводского хозяйства нефтегазоперерабатывающих заводов, объекты магистральных газопроводов и нефтепроводов, нефтебазы, автодороги и линии электропередач, а также объекты вспомогательного назначения в нефтяной и газовой отрасли, в том числе опасных производственных объектов при добыче, переработке, транспортировке и хранении нефти и газа.</p>
                <p>Наше предприятие образовано в 2008 году и состоит из квалифицированных специалистов. Молодой, мобильный и трудолюбивый коллектив располагает необходимым материапьно-техническим комплексом для полноценного ведения и выполнения работ любой сложности и объемов.</p>
                <p>Наша организация характеризуется гибкой финансовой политикой по отношению к заказчику.</p>
                <p>Проекты выполняются посредством современного комплекса лицензионного программного обеспечения. Благодаря сильному инженерному составу и серьезному контролю качества, мы выпускаем проектную документацию полностью соответствующую требованиям и стандартам качества.</p>
                <p>ООО «Сибнефтегазпроект» является членом некоммерческого партнерства по защите прав и законных интересов лиц, осуществляющих подготовку проектной документации — Томское проектное объединение по повышению качества проектной продукции» (саморегупируемая организация). Имеет сертификат соответствия требованиям ГОСТ Р ИСО 9001-2001(1509001-2000), ГОСТ Р ИСО 14001-2007 (150 14001:2004), ГОСТ 12.0.230-2007, ОНSАS 18001:2007.</p>
            </div>
        </section>
        <section id="vacancies">
            <h1 hidden-sm hidden-xs>Вакансии</h1>
            <p>В настоящее время вакансий нет</p>
        </section>
    </div>
    <div id="right">
        <section id="motivation">
            <img width="512px" src="<?= $slides[0] ?>">
        </section>
        <section id="partners">
            <h1>Наши партнеры</h1>
            <ol>
                <li>Группа компаний Imperial Еnегgу</li>
                <li>ООО «Газпром трансгаз Томск»</li>
                <li>ООО «Томск-Терминал»</li>
                <li>ООО «Газпром добыча Кузнецк» г.Кемерово</li>
                <li>Филиал ООО «ЛУКОЙЛ-Иижиниринг» «КогалымНИПИнефть» в г.Тюмень</li>
                <li>ООО «РН-КрасноярскНИПИнефть г.Красноярск</li>
                <li>ООО «Техностроймонтаж» г.Санкт-Петербург</li>
                <li>ОАО «Якутская топливно-энергетическая компания» г.Якутск</li>
                <li>ООО «ЦАНТ», г.Белград, Украина</li>
                <li>ООО «ПЛКГРУПП», г.Казань</li>
                <li>ТПП «Когалымнефтегаз», г.Когалым, ХМАО</li>
                <li>ООО «ТЗК АЭРОФЬЮЭЛС», г.Москва</li>
                <li>ООО «НОВАТЭК-ТАРКОСАЛЕНЕФТЕГАЗ» ЯНАО, г.Тарко-Сале</li>
                <li>ООО «Бондарский НПЗ»</li>
                <li>ООО «Томская нефть»</li>
            </ol>
        </section>
        <section id="recall-gallery">
            <h1 hidden-sm hidden-xs>Отзывы</h1>
            <!--[if !IE 9]>
            <p>Ваш браузер устарел. Пожалуйста, обновите его, чтобы отобразить этот блок.</p>
            <![endif]-->
            <!--[if gte IE 9]><!-->
            <div class="gallery hidden-sm hidden-xs">
            <?php
                foreach ($recallThumbs as $recall) {
                    ?><a type="button" data-toggle="modal" data-target="#recall-gallery-modal">
                        <div class="gallery-item"><img src="<?= $recall ?>"></div>
                      </a><?php
                }
            ?>
            </div>
            <a class="visible-sm visible-xs" tabindex="0" role="button"
               data-toggle="modal" data-target="#sertificate-gallery-modal">Открыть галерею отзывов</a>
            <!--<![endif]-->
        </section>
        <section id="contacts">
            <h1>Реквизиты и контактная информация</h1>
            <p>Полное наименование организации: Общество с ограниченной ответственностью "Сибнефтегазпроект"<p>
            <p>Фактический адрес: 634012, г.Томск, пр.Кирова, д.58, стр.55</p>
            <p>Телефоны/приемная: (3822) 480-388, 480-488, 480-588</p>
            <p>ФАКС: (3822) 480-388</p>
            <p>E-mail: sngpro@sibngp.ru</p>
            <a href="/assets/docs/karta_mart.doc" download>Скачать карточку предприятия</a>
        </section>
    </div>
</section>
<!--[if gte IE 9]><!-->
<script type="text/javascript">
$(document).ready(function(){
    $('.gallery').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1
    });

    var currentSlide = 0;
    $('#motivation>img').click(function (e) {
        var slides = <?= json_encode($slides) ?>;

        currentSlide++;
        if (currentSlide >= slides.length) { currentSlide = 0; }

        $(this).attr('src', slides[currentSlide]);
    });

    $('#sertificate-gallery-modal .modal-body, #recall-gallery-modal .modal-body').slick({
        dots: false,
        infinite: true,
        speed: 500
    });

    $('a[data-toggle="modal"]').click(function(e) {
        $($(this).data('target') + ' .modal-body').slick('slickGoTo', $(this).data('slick-index'), false);
    });

    $('.modal.fade').scroll(function (e) {
        var top = $(this).scrollTop() / 1000 * 100;
        if (top < 30) { top = 30; }
        if (top > 80) { top = 80; }
        $('.modal-body .slick-prev, .modal-body .slick-next').css('top', top + '%');
    });

    $(document).on('shown.bs.modal', function () {
        $('.modal.fade').trigger('scroll');
        $(window).trigger('resize');
    });
});
</script>
<!--<![endif]-->
