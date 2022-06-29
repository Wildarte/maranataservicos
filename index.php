<?php get_header();  ?>

    <main class="main_home">

        <div class="main_home_content container">

            <header class="header container">
                <div class="header_home">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="logo maranata serviços">
                    <h1 class="container-768">Formada por experientes profissionais, a MARANATA se dedica a projetos de pequeno,
                        médio e grande porte, com alto padrão de qualidade e excelência na execução dos seus serviços</h1>
                </div>
            </header>
    
            <section class="menu_home container">
                <a href="<?= home_url() ?>/mergulho">
                    <div class="title_img">
                        <p>Serviços subaquaticos</p>
                    </div>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img1.png" alt="maranata serviços mergulho">
                </a>
                <a href="<?= home_url() ?>/civil">
                    <div class="title_img">
                        <p>Construção projetos e reforma civil</p>
                    </div>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img2.png" alt="maranata serviços construção civil">
                </a>
                <a href="<?= home_url() ?>/naval">
                    <div class="title_img">
                        <p>serviços e reparos navais</p>
                    </div>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img3.png" alt="maranata serviços navais">
                </a>
            </section>

            <div class="footer_home container">
                <p>® 2008 - 2022 Maranata Serviços (21) 2719-1147</p>
                    <p><a href="mailto:leonardo@matanataservicos.com.br"> leonardo@matanataservicos.com.br</a></p>
            </div>

        </div>

        <div class="bg-full">
            <div id="bg-gray-1"></div>
            <div id="bg-gray-2"></div>
            <div id="bg-gray-3"></div>
        </div>

    </main>

    <script>
        function play() {
            var audio = new Audio('<?= get_template_directory_uri() ?>/assets/beep.mp3');
            audio.play();
        }
        const imgs = document.querySelectorAll('.menu_home a img');

        imgs.forEach((item) => {

            item.addEventListener('mouseover', () => {
                play();
            });

        });

    </script>
    
 <?php get_footer() ?>