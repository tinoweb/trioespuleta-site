    <?php include_once 'parts/header.php'; ?>

    <body style="overflow-x: hidden;">
        <!-- Top content -->
        <div class="top-content section-container-3">
            <!-- Top menu -->
            <nav class="navbar navbar-inverse na vbar-no-bg" role="navigation" style=" width: 100%;">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" data-target="#top-navbar-1" data-toggle="collapse" type="button">
                            <span class="sr-only">
                                Toggle navigation
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse cor-menu" id="top-navbar-1">
                        <div class="row">
                            <div class="col-md-5">
                                <ul class="nav navbar-nav navbar-left">
                                    <li>
                                        <a class="" href="index.php" style="color: red;">
                                           <i class="fa fa-chevron-left"></i> Voltar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <img alt="" src="img/logo.png" class="logotipo">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Always beautiful -->
            <div class="testimonials-container section-container-3 letras-footer">
                <div class="container">
                    <div class="row" style="position: relative;top: 80px">
                        <div class="col-sm-12 always-beautiful section-description wow fadeIn">
                            <h2 class="letras-footer">
                                Loja
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        Explorando o Coração
                                    </div>
                                    <div class="panel-body">
                                        <img alt="" src="img/livro-aberto.png">

                                            <h3>Descrição do Produto:</h3>
                                             <table class="table" style="color: #000;" align="center">
                                                <tbody align="left">
                                                   <tr>
                                                    <td class="info">Acabamento:</td>
                                                    <td class="success">Brochura</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="info">Altura:</td>
                                                    <td class="success">23.00 cm</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="info">Largura:</td>
                                                    <td class="success">16.00 cm</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="info">Numero de Páginas:</td>
                                                    <td class="success">100</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        Dados para Compra:
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal">

                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" id="nome" placeholder="Nome">
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" id="email" placeholder="Email">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" id="endereco" placeholder="Endereço">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" id="telefone" placeholder="Telefone">
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" id="quantidade" placeholder="Quantidade">
                                            </div>
                                          </div>
                                        </form>
                                           <div class="form-group">
                                                <div class="col-sm-6">
                                                    <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                                <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                                <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                                <input type="hidden" name="itemCode" value="E12959B436362B6BB4FA7F9B0A1DE9E5" />
                                                <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-azul-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                                </form>
                                                <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->

                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- PAGAMENTO PAYPAL-->
                                                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                                    <input type="hidden" name="cmd" value="_s-xclick">
                                                    <input type="hidden" name="hosted_button_id" value="F3R6ZB2BFRMP6">
                                                    <input type="image" src="img/paypal.png" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
                                                    <img alt="" border="0" src="img/paypal.png" width="1" height="1">
                                                    </form>

                                                    <!-- FINAL FORMULARIO BOTAO PAYPAL -->

                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<div class="fuid-container" style="background-color: #009180">
    <div class="row">
        <div class="col-md-12">
            <p style="text-align: justify; color: rgba(181, 167, 167, 0.91); font-size: 13px; position:relative; left: 30%">
                Realização: Projet'Art | Design: Agência Zoom - Unasp-EC | Desenvolvimento: SoftLike
            </p>
        </div>
    </div>
</div>

<?php include_once 'parts/querys.php'; ?>