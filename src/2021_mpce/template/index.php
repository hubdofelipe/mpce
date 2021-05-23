<?php include 'header.php'; ?>

<div class="page-wrapper content-wrapper">
    <section class="banner">
        <div class="container">
            <div class="banner__text" data-aos="fade-down">
                <img src="assets/images/text-banner.png">
            </div>
            <div class="banner__image" data-aos="fade-up">
                <img src="assets/images/logo-banner.png">
            </div>
        </div>
    </section>

    <section class="apresentation">
        <div class="container">
            <h2 data-aos="fade-left">
                Você é do <br>
                tamanho <br>
                dos seus <br>
                <b>sonhos</b>
            </h2>
            <div class="video" data-aos="fade-right">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bXz0SbJ7pMM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <?php include 'template-parts/button.php'; ?>
    </section>

    <section class="countdown">
        <div class="countdown__container" data-aos="flip-right">
            <h2>GARANTA HOJE</h2>
            <h3>APROVEITANDO O VALOR </h3>
            <h4>PROMOCIONAL</h4>

            <div class="countdown__time">
                <div class="countdown__item">
                    <span>00</span>
                    <small>Horas</small>
                </div>
                <div class="countdown__item">
                    <span>00</span>
                    <small>Minutos</small>
                </div>
                <div class="countdown__item">
                    <span>00</span>
                    <small>Segundos</small>
                </div>
            </div>

            <p>
                Você está cansado de estudar de forma errada, de tentar e não conseguir? Adquira agora o método Missão PMCE!
            </p>

            <?php include 'template-parts/button.php'; ?>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2>O QUE DIZEM SOBRE O CURSO?</h2>
            <div class="testimonials__controllers">
                <div class="swiper-container testimonials__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide testimonials__slide">
                            <img src="assets/images/testimonial-01.jpg" alt="">
                        </div>
                        <div class="swiper-slide testimonials__slide">
                            <img src="assets/images/testimonial-02.jpg" alt="">
                        </div>
                        <div class="swiper-slide testimonials__slide">
                            <img src="assets/images/testimonial-03.jpg" alt="">
                        </div>
                    </div>
                </div>
                <button class="testimonials__prev"></button>
                <button class="testimonials__next"></button>
            </div>
            <?php include 'template-parts/button.php'; ?>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <h2> PERGUNTAS FREQUENTES:</h2>

            <h3>> QUAL A DURAÇÃO DO CURSO?</h3>
            <p>O acesso é ilimitado até a data da prova</p>

            <h3>> O CURSO TEM AULAS DE DISCIPLINAS?</h3>
            <p>As aulas são apenas de mentoria, sendo inclusos: materiais de apoio totalmente exclusivos e estratégicos, resumos e dicas de estudo visando aumentar seu rendimento por disciplina.</p>

            <h3>> O valor do curso é único ou mensal?</h3>
            <p>ÚNICO, pago apenas uma vez. (Boleto ou parcelado no cartão)</p>

            <h3>> Há grupo de WhatsApp ou Telegram?</h3>
            <p>
            Não, pois a plataforma do curso é completa, sendo ela o principal meio para nossa comunicação </p>

            <h3>> Quando as aulas e materiais são atualizados?</h3>
            <p>Imediatamente após sairem novidades sobre o concurso.</p>
        </div>
    </section>

</div>

<?php include 'footer.php'; ?>
