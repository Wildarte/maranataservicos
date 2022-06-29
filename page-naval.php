<?php 
// Template Name: naval 
get_header();
?>

    <main style="background-color: #BDBDBD; width: 100%">

        <header class="header2">
            <div class="header2_content container-768">
                <a href="<?= home_url() ?>">maranataservicos.com.br</a>
                <a href="<?= home_url() ?>">
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
                                serviços e reparos navais.
                            </p>
                            <p>
                                Segurança, saúde e conservação do meio ambiente são
                                valores importantes para nossos clientes e para nossa
                                empresa.
                            </p>
                        </div>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/img-civil-home.png" alt="">
                    </div>
                    <p>Para assumir este compromisso a empresa mantém programas de treinamentos continuos
                        nessas áreas. Nosso time refina práticas de trabalho para incorporá-las nas frentes de
                        serviço, visando completar com sucesso os variados projetos onde a empresa participa.</p>
                    <hr class="hr-dot">
    
                    <div class="row-img">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/img-naval-home-2.png" alt="" style="margin-right: 15px;">
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
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img-naval-home-3.png" alt="">
                    <p>
                        Trabalhe conosco</p>
                    <p>
                        Envie seu currículo para o e-mail
                        <a href="mailto:naval@maranataservicos.com.br">naval@maranataservicos.com.br</a> 
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
                            projetos de pequeno médio e grande porte com alto padrão de
                            qualidade e excelência na execução dos seus serviços.<br>
                            A empresa oferece sua própria equipe com profissionais qualificados
                            para a realização das tarefas e especializados em atendimento
                            comercial e residencial com eficiência e confiabilidade
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
                    <h3>LIMPEZA DE TANQUES</h3>

                    <p>
                        A empresa realiza todo tipo de limpeza de tanques seguindo as normas.
                    </p>
                    
                    <H3>TRATAMENTO E PINTURA</H3>

                    <p>
                        Realiza todo o tipo de tratamento e pintura em plataformas e embarcações.
                    </p>

                    <h3>MONTAGEM E DESMONTAGEM DE ANDAIMES</h3>
    
                    <p>
                        Montagem e desmontagem de andaime em plataforma de petróleo e embarcações mão de obra e fornecimento de material.
                    </p>
    
                    <h3>DRAGAGEM</h3>
                    <p>A Maranata Serviços LTDA visa realizar seus serviços com maestria e garantir resultados que superam as expectativas dos seus clientes e coopera com a preservação do meio ambiente, para isto conta com equipamentos modernos e equipe treinada que fazem o trabalho para obter o sucesso esperado.</p>

                    <p>Segue abaixo os serviços prestados pela empresa:</p>

                    <ul style="list-style: circle; margin-left: 20px">
                        <li>Escavação e remoção de solos;</li>
                        <li>Desassoreamento em geral;</li>
                        <li>Abertura rebaixamento alargamento e aprofundamento de canal de rios;</li>
                        <li>Remoção de vegetação autica e sedimentos;</li>
                        <li>Limpeza em estação de tratamento de efluentes captação de água;</li>
                        <li>Limpeza em tanques de lavagem de cena lagoas de aeração e sedimentação;</li>
                        <li>Tanques naturais e artificiais;</li>
                    </ul>

                    <h3>ISOLAMENTO TÉRMICO</h3>
                    <p>Além de fornecer materiais e serviços de montagem de isolamento térmico a MARANATA SERVIÇOS LTDA executa estudos
                        e projetos térmicos fornecendo aos interessados informações como perdas de calor temperatura externa economia de
                        energia etc. Estas informações permitem a escolha dos materiais mais adequados para cada situação com economia e
                        eficiência.</p>

                        <h3>ENSAIO NÃO DESTRUTIVO</h3>
                        <p>
                            Os Ensaios Não Destrutivos END são técnicas utilizadas na inspeção de materiais e equipamentos sem danificá-los sendo 
executados nas etapas de fabricação, construção, montagem e manutenção.
                        </p>
                        <p>
                            Constituem uma das principais ferramentas do controle da qualidade de materiais e produtos contribuindo para garantir
a qualidade reduzir os custos e aumentar a confiabilidade da inspeção.
                        </p>

                        <p>
                            São largamente utilizadas nos setores petroleopetroumico aeronutico aeroespacial siderurgico naval
eletromecânico papel e celulose entre outros, contribuem para a qualidade dos bens e serviços redução de custo
preservação da vida e do meio ambiente sendo fator de competitividade para as empresas que os utilizam.
                        </p>

                        <p>
                            Os END incluem métodos capazes de proporcionar informações a respeito do teor de defeitos de um determinado produto
das características tecnológicas de um material ou ainda da monitoração da degradação em serviço de componentes, equipamentos e estruturas.
                        </p>

                        <p>
                            Os métodos mais usuais de END são ensaio visual luido penetrante, partículas magnéticas, ultra-som, radiografia, Raios
e Gama, correntes parasitas, análise de vibrações, termografia, emissão acstica ,estanueidade e análise de
deformações.
                        </p>
                    
                    
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
                        
                        <a href="mailto:naval@maranataservicos.com.br">naval@maranataservicos.com.br</a>
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
    
</body>
</html>