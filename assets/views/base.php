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
    </div>
</header>
<section id="content">
    <div id="left">
        <section id="about-us">
            About Us
        </section>
        <section id="sertificate-gallery">
            <div class="gallery">
            <?php
                foreach ($sertificates as $sertificate) {
                    ?><div class="gallery-item"><img src="<?= $sertificate ?>"></div><?php
                }
            ?>
            </div>
        </section>
        <section id="information">
            Information
        </section>
        <section id="vacancies">
            Vacancies
        </section>
    </div>
    <div id="right">
        <section id="motivation">
            <img src="//sdelanounas.ru/i/c/2/c2RlbGFub3VuYXMucnUvdXBsb2Fkcy84LzYvODYzMTM0ODIzNzI0MS5qcGVn.jpg">
        </section>
        <section id="recall-gallery">
            <div class="gallery">
            <?php
                foreach ($sertificates as $sertificate) {
                    ?><div class="gallery-item"><img src="<?= $sertificate ?>"></div><?php
                }
            ?>
            </div>
        </section>
        <section id="contacts">
            Contacts
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
    });
  </script>