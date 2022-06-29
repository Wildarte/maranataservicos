<?php 
// Template Name: civil 
get_header();
?>

    <main style="background-color: #BDBDBD; width: 100%">

        <header class="header2">
            <div class="header2_content container-768">
                <a href="<?= home_url() ?>">maranataservicos.com.br</a>
                <a href="i<?= home_url() ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/home.png" alt="">
                </a>
                
            </div>
        </header>

        <section class="header_top container-980">
            <div class="logo_header_top">
                <img class="animate__animated animate__fadeInDown" src="<?= get_template_directory_uri() ?>/assets/img/logo-civil.png" alt="">
            </div>
            <div class="img_header_top">
                <img class="animate__animated animate__fadeInDown" src="<?= get_template_directory_uri() ?>/assets/img/cubo-civil.png" alt="">
            </div>
            <div class="header_menu">
                <nav class="menu">
                    <ul class="list_menu animate__animated animate__fadeInDown">
                        <li>
                            <a id="item-menu" href="#">home</a>
                        </li>
                        <li>
                            <a id="item-menu" href="#">empresa</a>
                        </li>
                        <li>
                            <a id="item-menu" href="#">serviços</a>
                        </li>
                        <li>
                            <a id="item-menu" href="#">clientes</a>
                        </li>
                        <li>
                            <a id="item-menu" href="#">contato</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </section>

        <div class="faixa-gray"></div>

        <section class="container_content container-980 d-flex" style="background-color: #A4A4A3;">
            <div class="content_home" id="section">
                <div class="content_home_left">
                    <div class="row-img">
                        <div class="top_home">
                            <p>Todos os membros da equipe são treinados e habilitados em
                                conformidade com a legislação brasileira e qualificados para
                                construção, projetos e reforma civil.
                            </p>
                            <p>
                                Segurança, saúde e conservação do meio ambiente são
                                valores importantes para nossos clientes e para nossa
                                empresa.
                            </p>
                        </div>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/img-civil-home.png" alt="">
                    </div>
                    <p>Para assumir este compromisso a empresa mantém programas de treinamentos contínuos
                        nessas áreas. Nosso time refina práticas do trabalho para incorporá-las nas frentes de
                        serviço visando completar com sucesso os variados projetos onde a empresa participa.</p>
                    <hr class="hr-dot">
    
                    <div class="row-img">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/img-civil-home-2.png" alt="" style="margin-right: 15px;">
                        <p>Nossa empresa tem um profundo comprometimento com a
                            segurança, o meio ambiente e a saúde dos seus clientes e
                            colaboradores. Com foco no melhor desempenho das suas
                            atividades, nós buscamos e conseguimos as certificações
                            necessárias.</p>
                    </div>
                </div>
                <div class="content_home_right">
                    <h3>
                        MARANATA</h3>
                    <p>
                        Formada por experientes
                        profissionais a MARANATA se
                        dedica a projetos de pequeno,
                        médio e grande porte com alto
                        padrão de qualidade e excelência
                        na execução dos seus serviços.
                    </p>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img-civil-home-3.png" alt="">
                    <p>
                        Trabalhe conosco</p>
                    <p>
                        Envie seu currículo para o e-mail
                        <a href="mailto:obras@maranataservicos.com.br">obras@maranataservicos.com.br</a> 
                        Aguarde nosso contato
                    </p>
                </div>
            </div>


            <div class="content_empresa d-flex no-wrap-desktop p-10" id="section" style="display: none;">
                <div class="content_empresa_left f-100 p-10">
                    <div class="top_empresa">
                        <p>
                            Maranata Serviços LTDA<br>
                            Formada por experientes profissionais a MARANATA se dedica a
                            projetos de pequeno, médio e grande porte com alto padrão de
                            qualidade e excelência na execução dos seus serviços.<br>
                            A empresa oferece sua própria equipe com profissionais qualificados
                            para a realização das tarefas e especializados em atendimento
                            comercial e residencial com eficiência e confiabilidade.
                        </p>
                    </div>

                    <hr class="hr-dot">

                    <div class="d-flex">
                        <div class="f-33 p-10" style="align-content: space-between;">
                            <h4>Missão</h4>
                            <p>
                                Fornecer ao mercado
                                um serviço com
                                excelência e
                                qualidade</p>
                                <div style="width: 100%; text-align: right;">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/empresa1.png" alt="">
                                </div>
                        </div>
                        <div class="f-33 p-10">
                            <h4>Visão</h4>
                            <p>
                                Ser reconhecida como a empresa
                                premium da sua
                                categoria</p>
                                <div style="width: 100%; text-align: right;">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/empresa2.png" alt="">
                                </div>
                        </div>
                        <div class="f-33 p-10">
                            <h4>Valores</h4>
                            <p>
                                Atuar no mercado com
                                ética e transparência
                                sempre em
                                conformidade com as
                                leis que regem o país</p>
                                <div style="width: 100%; text-align: right;">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/empresa3.png" alt="">
                                </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="content_servicos p-10 bg-white" style="display: none;" id="section">
                <div class="d-block">
                    <h3>TOPOGRAFIA</h3>

                    <p>
                        Levantamento topográfico planialtimetrico, projetos em AutoCAD, projetos específicos no total e em tenues serviços geo-referenciados com GPS.
                    </p>
                    
                    <H3>PINTURA</H3>

                    <p>
                        É iniciada com trabalho de percussão que consiste na análise da área a ser pintada rebocos e paredes que precisem de reforma.<br>
                        A pintura feita com uso de balancim andaimes e Ja Os profissionais usam o equipamento de segurança individual EPI e o material utilizado top no segmento tintas e seladores de marcas consagradas como Suvinil e Sherin-illians.
                    </p>

                    <h3>REFORMAS</h3>
    
                    <p>
                        Todo tipo de reformas para casas prédios empresas entre outros e também com reformas de telhados e assessoria para obras.
                    </p>
    
                    <h3>CONSTRUÇÕES E REFORMAS</h3>
                    <p>Todo tipo de construção e reforma incluindo a pintura</p>
    
                    <h3>IMPERMEABILIZAÇÃO</h3>

                    <H3>PAISAGISMO</H3>

                    <H3>ELETRICIDADE EM GERAL</H3>

                    <H3>HIDRÁULICA</H3>

                    <H3>LIMPEZA E CONSERVAÇÃO</H3>
                    <p>Mão de obra e material</p>

                    <h3>PASTILHAS</h3>
                    <p>Lavagem e colação</p>

                    <h3>MÁRMORE</h3>
                    <p>Lavagem e colcação</p>

                    <h3>CONCRETO</h3>
                    <p>Polimento e enverniamento</p>

                    <h3>PROJETOS</h3>
                    <p>Desenvolvimento de todo e qualquer tipo de projeto de arquitetura e topografia em AutoCAD</p>

                    <h3>LOCAÇÃO DE MÃO DE OBRA</h3>

                    <h3>PORTARIAS E LUMINOTÉCNICOS</h3>
                    <p>Serviço de proteiro e serviço de iluminação que tem como objetivo melhorar a luz a segurança do ambiente</p>

                    <h3>PORTARIA PABX</h3>
                    <p>Tecnicos preparados para a instalação do equipamento em residencias ou empresas com matrias disponiveis para venda</p>

                    <h3>INTERFONES</h3>

                    <H3>PORTÃO ELETRÔNICO</H3>

                    <H3>CÂMERAS DE SEGURANÇA</H3>   
                    
                </div>
                
            </div>

            <div class="content_clientes d-flex p-10" style="display: none;" id="section">
                <div class="card_cliente f-33">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/1.png" alt="">
                </div>
                <div class="card_cliente f-33">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/2.png" alt="">
                </div>
                <div class="card_cliente f-33">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/3.png" alt="">
                </div>
                <div class="card_cliente f-33">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/4.png" alt="">
                </div>
                <div class="card_cliente f-33">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/5.png" alt="">
                </div>
                <div class="card_cliente f-33">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/6.png" alt="">
                </div>
                <div class="card_cliente f-33">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/7.png" alt="">
                </div>
                <div class="card_cliente f-33">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/8.png" alt="">
                </div>
                <div class="card_cliente f-33">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/9.png" alt="">
                </div>
            </div>


            <div class="content_contato d-flex p-10" style="display: none;" id="section">

                <div class="f-50 p-10">

                    <div class="d-flex" style="justify-content: space-between; margin-bottom: 15px">
                        <a href="tel:+552127191147">(21) 2719-1147</a>
                        
                        <a href="mailto:obras@maranataservicos.com.br">obras@maranataservicos.com.br</a>
                    </div>

                    <hr class="hr-dot">

                    <img src="<?= get_template_directory_uri() ?>/assets/img/contact.png" alt="">

                    <hr class="hr-dot">

                    <div>
                        <p>Endereço</p>
                        <p>Av. Ernani do Amaral Peixoto</p>
                        <p>n Sala Centro Niterói - RJ</p>
                    </div>

                </div>

                <div class="contato_right f-50 p-10">
                    <form action="" method="post">
                        <div class="form_group">
                            <label for="">Nome</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="form_group">
                            <label for="">email</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="form_group">
                            <label for="">Assunto</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="form_group">
                            <label for="">Texto</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form_group">
                            <button type="submit">enviar</button>
                        </div>
                    </form>
                </div>

            </div>

        </section>
    </main>

    <div class="faixa-gray-short"></div>

    <footer class="footer2 container-980">
        <div>
            <p>© 2008 - 2022 Maranata Serviços</p>
        </div>

        <div>
            <a href="tel:+552127191147">(21) 2719-1147</a>
        </div>
    </footer>

    <script>
        const item_menu = document.querySelectorAll('#item-menu');
        const sections = document.querySelectorAll('#section');

        item_menu.forEach((item, index) => {

            item.addEventListener('click', function(){

                sections.forEach((item) => {
                    
                    item.style.display = "none";

                });
                sections[index].style.display = "flex";

            });

            

        })
    </script>
    
    
<?php get_footer() ?>