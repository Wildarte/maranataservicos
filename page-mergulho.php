<?php 
// Template Name: mergulho 
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
                <img class="animate__animated animate__fadeInDown" src="<?= get_template_directory_uri() ?>/assets/img/logo-2.png" alt="">
            </div>
            <div class="img_header_top">
                <img class="animate__animated animate__fadeInDown" src="<?= get_template_directory_uri() ?>/assets/img/cubo-sub.png" alt="">
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
            <div class="content_home" style="" id="section">
                <div class="content_home_left">
                    <div class="row-img">
                        <div class="top_home">
                            <p>Todos os membros da equipe são treinados e habilitados em
                                conformidade com a legislação brasileira e qualificados para
                                serviços subaqáticos.
                            </p>
                            <p>
                                Segurança, saúde e conservação do meio ambiente são valores importantes para nossos clientes e para nossa empresa.
                            </p>
                        </div>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/img-mergulho-home.png" alt="">
                    </div>
                    <p>Para assumir este compromisso a empresa mantém programas de treinamentos contínuos
                        nessa área, Nosso time refina práticas de trabalho para incorporá-las nas frentes do
                        serviço visando completar com sucesso os variados projetos onde a empresa participa.</p>
                    <hr class="hr-dot">
    
                    <div class="row-img">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/img-mergulho-home2.png" alt="" style="margin-right: 15px;">
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
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img-mergulho-home3.png" alt="">
                    <p>
                        Trabalhe conosco</p>
                    <p>
                        Envie seu currículo para o e-mail
                        <a href="mailto:mergulho@maranataservicos.com.br">mergulho@maranataservicos.com.br</a> 
                        Aguarde nosso contato
                    </p>
                </div>
            </div>


            <div class="content_empresa d-flex no-wrap-desktop p-10" id="section" style="display: none;">
                <div class="content_empresa_left f-70 p-10">
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
                        <div class="f-33 p-10">
                            <h4>Missão</h4>
                            <p>
                                Fornecer ao mercado
                                um serviço com
                                excelência e
                                qualidade</p>
                            
                        </div>
                        <div class="f-33 p-10">
                            <h4>Visão</h4>
                            <p>
                                Ser reconhecida como a empresa
                                premium da sua
                                categoria</p>
                                
                        </div>
                        <div class="f-33 p-10">
                            <h4>Valores</h4>
                            <p>
                                Atuar no mercado com
                                ética e transparência
                                sempre em
                                conformidade com as
                                leis que regem o país</p>
                        </div>
                    </div>
                </div>

                <div class="content_empresa_right f-30 p-10">
                    <video width="320" height="240" controls>
                        <source src="<?= get_template_directory_uri() ?>/assets/video/video.mp4" type="video/mp4">
                      Seu navegador não suporta esse vídeo
                      </video>
                </div>
                
            </div>

            <div class="content_servicos p-10 bg-white" style="display: none;" id="section">
                <div class="d-block">
                    <h3>MERGULHO</h3>

                    <p>
                        A Maranata Serviços Sub-Aquáticos de Mergulho Profissional Ltda uma companhia prestadora de serviços subaquáticos
                        estabelecida na cidade de Niterói Rio de Janeiro - Brasil atendendo a clientes de vários portos nos âmbitos local, regional e nacional
                        em sua maior parte pessoas jurídicas de direito público e privado estabelecidas nas áreas de saneamento naval estruturas
                        de engenharia e hidrelétricas.
                    </p>
    
                    <p>
                        Proporcionar aos nossos clientes as melhores soluções subaquáticas com qualidade o segurança nas mais diversas
                        condições de operação de mergulho, tem sido o grande desafio que superamos no dia-a-dia ao longo de nossa existência.
                    </p>
    
                    <p>
                        Nosso diferencial se expressa em uma prática operacional de mergulho experiente e focada na viabilidade das soluções
                        suportada e otimizada por um Sistema de Gestão da Qualidade em constante evolução habilitando-nos ao nível de
                        excelência vivenciado e exigido por nossos principais clientes.
                        <span style="display: none;">
                            Nossos profissionais: “constantemente treinados em suas
                            reais técnicas operacionais específicas bem como sobre como se integrar e contribuir para o Sistema de Gestão da
                        </span>
                    </p>
    
                    <h3>LIMPEZA DE OBRAS VIVAS</h3>
                    <p>Todo tipo de serviço nas embarcações flutuantes, vistoria, inspeção, limpeza de cascos, retirada de incrustações etc.</p>
    
                    <h3>INSPEÇÃO VISUAL</h3>
                    <p>Todo e qualuer tipo de inspeção visual embarcações, plataformas hidrelétricas em trecho submarino do oleoduto
                        interna de tubulaçes etc.</p>
    
                    <h3>TAMPOAMENTO</h3>
                    <p>Todo e qualuer tipo de vedação em embarcações com massa, e chapas sobrepostas compensados marítimos etc.</p>
    
                    <h3>FOTOGRAFIA E FILMAGEM SUBMERSA</h3>
                    <p>Executa todo tipo de registro dos serviços por meios de fotos e filmagem com DVDs editados proporcionado ao
                        cliente armazenar toda execução do serviço.</p>
    
                    <h3>CORTE E SOLDA</h3>
                    <p>Serviços de instalação e reparo de estruturas submarinas realizando este tipo de serviço com a maior habilidade e eficiência</p>
    
                    <h3>COLOCAÇÃO DE DEFESAS</h3>
                    <p>A nossa empresa trabalha na colocação de todo e qualuer tipo de defesas</p>
    
                    <H3>PROCURAS</H3>
                    <p>Efetuamos todo tipo de procura subaquática</p>
    
                    <H3>DRAGAGEM</H3>
                    <p>Realizamos todo tipo de dragagem</p>
    
                    <H3>LOCAÇÃO DE MÃO DE OBRAS</H3>
                    <p>A nossa empresa também trabalha com locação de mão de obra</p>
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
                        
                        <a href="mailto:mergulho@maranataservicos.com.br">mergulho@maranataservicos.com.br</a>
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