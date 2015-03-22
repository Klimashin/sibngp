<header class="navbar navbar-default">
    <div class="container-fluid">
        <div id="navbar">
            <ul class="navbar-nav nav">
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Dolor</a></li>
                <li><a href="#">Sit</a></li>
            </ul>
        </div>
        <div id="logo">Сибнефтегазпроект</div>
    </div>
</header>

<div class="modal fade" id="sertificate-gallery-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <?php
            foreach ($sertificates as $sertificate) {
                ?><div class="gallery-item"><img width="840" height="1188" src="<?= $sertificate ?>"></div><?php
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
                ?><div class="gallery-item"><img width="840" height="1188" src="<?= $recall ?>"></div><?php
            }
            ?>
        </div>     
    </div>
  </div>
</div>
<section id="content">
    <div id="left">
        <section id="about-us">
            About Us
        </section>
        <section id="sertificate-gallery">
            <div class="gallery">
            <?php
                foreach ($sertificates as $sertificate) {
                    ?><a type="button" data-toggle="modal" data-target="#sertificate-gallery-modal">
                        <div class="gallery-item"><img src="<?= $sertificate ?>"></div>
                      </a><?php
                }
            ?>
            </div>
        </section>
        <section id="information">
            <h1>Кратко о предприятии</h1>
            <div>
                <p>ООО «Cибнефтегазпрoект» — это проектная организация, обладающая современной технической базой, выпускающая проектную документацию по нескольким основным направлениям: объекты обустройства нефтяных и газоконденсатных месторождений, объекты общезаводского хозяйства нефтегазоперерабатывающих заводов, объекты магистральных газопроводов и нефтепроводов, нефтебазы, автодороги и линии электропередач, а также объекты вспомогательного назначения в нефтяной и газовой отрасли, в том числе опасных производственных объектов при добыче, переработке, транспортировке и хранении нефти и газа.</p>
                <p>Наше предприятие образовано в 2008 году и состоит из квалифицированных специалистов. Молодой, мобильный и трудолюбивый коллектив располагает необходимым материапьно-техническим комплексом для полноценного ведения и выполнения работ любой сложности и объемов.</p>
                <p>Наша организация характеризуется гибкой финансовой политикой по отношению к заказчику.</p>
                <p>Проекты выполняются посредством современного комплекса лицензионного программного обеспечения. Благодаря сильному инженерному составу и серьезному контролю качества, мы выпускаем проектную документацию полностью соответствующую требованиям и стандартам качества.</p>
                <p>ООО «Сибнефтегазпроект» является членом некоммерческого партнерства по защите прав и законных интересов лиц, осуществляющих подготовку проектной документации — Томское проектное объединение по повышению качества проектной продукции» (саморегупируемая организация). Имеет сертификат соответствия требованиям ГОСТ Р ИСО 9001-2001(1509001-2000), ГОСТ Р ИСО 14001-2007 (150 14001:2004), ГОСТ 12.0.230-2007, ОН5А5 18001:2007.</p>
        </section>
        <section id="vacancies">
            Vacancies
        </section>
    </div>
    <div id="right">
        <section id="motivation">
            <img src="//sdelanounas.ru/i/c/2/c2RlbGFub3VuYXMucnUvdXBsb2Fkcy84LzYvODYzMTM0ODIzNzI0MS5qcGVn.jpg">
        </section>
        <section id="partners">
            <h1>Наши партнеры</h1>
            <ol>
                <li>Группа компаний Imperial Еnегgу</li>
                <li>ООО «Газпром трансгаз Томск»</li>
                <li>ООО «Томск-Терминал»</li>
                <li>ООО «Газпром добыча Кузнецк» г.Кемерово</li>
                <li>Филиал ООО «ЛEКОЙЛ-Иижиниринг» «КогалымНИПИнефть» в г.Тюмени</li>
                <li>ООО «РН-КрасноярскНИПИнефтьт г.Красноярск</li>
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
            <div class="gallery">
            <?php
                foreach ($recalls as $recall) {
                    ?><a type="button" data-toggle="modal" data-target="#recall-gallery-modal">
                        <div class="gallery-item"><img src="<?= $recall ?>"></div>
                      </a><?php
                }
            ?>
            </div>
        </section>
        <section id="contacts">
            <h1>Реквизиты и контактная информация</h1>
            <p>Полное наименование организации:
            Общество с ограниченной ответственностью "Сибнефтегазпроект"<p>
            <p>Фактический адрес: 634012, г.Томск, пр.Кирова, д.58, стр.55</p>
            <p>Телефоны/приемная: (3822) 480-388, 480-488, 480-588</p>
            <p>ФАКС: (3822) 480-388</p>
            <p>E-mail: sngpro@sibngp.ru</p>
        </section>
    </div>
</section>
 <script type="text/javascript">
$(document).ready(function(){
    $('.gallery').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
    });

    $('#sertificate-gallery-modal .modal-body, #recall-gallery-modal .modal-body').slick({
      dots: false,
      infinite: true,
      speed: 500,
    });

    $('a[data-toggle="modal"]').click(function(e) {
        $($(this).data('target') + ' .modal-body').slick('slickGoTo', $(this).data('slick-index'), false);
    });
});
  </script>
