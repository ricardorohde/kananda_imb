<!-- Corpo do site [PARTE DINAMICA]-->
<section class="row">
    <!-- CHAMADA title-destaque -->
    <article class="col-xs-12 bg-azul title-destaque">
        <h2><strong><?php echo ucwords($imovel['imovel_imovel']) . ' - ' . $imovel['finalidade_imovel'] ?> </strong><br><small>
                CÓD <?php echo $imovel['referencia_imovel']; ?> </small></h2>
    </article><!-- FIM CHAMADA title-destaque -->

    <!-- CHAMADA SLIDE DO IMÓVEL-->
    <article class="col-xs-12 bg-azul slide-imovel">
        <div class="col-md-offset-2 col-md-8 col-sm-12">

            <div class="fotorama" data-width="850" data-ratio="850/478" data-max-width="100%" data-nav="thumbs"  data-allowfullscreen="true">
                <?php
                if (isset($imagens) && !empty($imagens)) :
                    foreach ($imagens as $imagem) :
                        ?>
                        <a href="<?php echo BASE_URL . '/' . $imagem['imagem_imagem']; ?>"><img src="<?php echo BASE_URL . '/' . $imagem['imagem_imagem']; ?>" alt="Kananda Negócios Imobiliários Casa a Venda" title="Kananda Negócios Imobiliários Casa a Venda"></a>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>

    </article><!-- FIM SLIDE DO IMÓVEL-->
    <!--CONTEUDO DO IMÓVEL-->
    <article class="col-xs-12 list-container">

        <section class="list-descricao-imovel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#descricaoImovel" aria-controls="descricaoImovel" role="tab" data-toggle="tab">Descrição</a></li>
                <li role="presentation"><a href="#localidadeImovel" aria-controls="localidadeImovel" role="tab" data-toggle="tab" onclick="inicialize_mapa_imovel();">Localização</a></li>
                <li role="presentation"><a href="#contataImovel" aria-controls="contataImovel" role="tab" data-toggle="tab">Contato</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Descrição do imóvel -->
                <div role="tabpanel" class="tab-pane active" id="descricaoImovel">
                    <p class="text-justify">
                        <?php
                        if (isset($imovel['descricao_descricao']) && $imovel['descricao_descricao'] != "") :
                            echo '<strong>Descrição:</strong><br>';
                            echo $imovel['descricao_descricao'];
                        endif;
                        if (isset($imovel['valor_descricao'])) :
                            ?>
                            <strong>Valor: </strong><br>
                            <?php echo $imovel['valor_descricao'] ?>
                        <?php endif; ?>
                    </p>
                    <p class="text-right">
                        <!-- Your like button code -->
                    <div class="fb-like" data-href="<?php echo BASE_URL . '/imovel/index/' . $imovel['cod_imovel'] ?>"  data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-share="true"></div>
                    </p>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><strong>Especificações</strong></div>
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                    <?php
                                if (isset($imovel['suite_imovel']) && $imovel['suite_imovel'] != 0) :
                                    ?>
                                    <li><span class="font-bold">Suite(s): </span> <?php echo $imovel['suite_imovel'] ?></li>
                                    <?php
                                endif;
                                ?>
                                <?php if (isset($imovel['quarto_imovel']) && $imovel['quarto_imovel'] != 0) : ?>
                                    <li><span class="font-bold">Quarto(s): </span> <?php echo $imovel['quarto_imovel'] ?></li>
                                    <?php
                                endif;
                                if (isset($imovel['banheiro_imovel']) && $imovel['banheiro_imovel'] != 0) :
                                    ?>
                                    <li><span class="font-bold">Banheiro(s): </span> <?php echo $imovel['banheiro_imovel'] ?></li>
                                    <?php
                                endif;
                                if (isset($imovel['garagem_imovel']) && $imovel['garagem_imovel'] != 0) :
                                    ?>
                                    <li><span class="font-bold">Vagas: </span> <?php echo $imovel['garagem_imovel'] ?></li>
                                    <?php
                                endif;
                                if (isset($imovel['largura_imovel']) && $imovel['largura_imovel'] != 0) :
                                    ?>
                                    <li><span class="font-bold">Largura: </span> <?php echo $imovel['largura_imovel'] ?></li>
                                    <?php
                                endif;
                                if (isset($imovel['comprimento_imovel']) && $imovel['comprimento_imovel'] != 0) :
                                    ?>
                                    <li><span class="font-bold">Comprimento: </span> <?php echo $imovel['comprimento_imovel'] ?></li>
                                    <?php
                                endif;
                                if (isset($imovel['area_construida_imovel']) && $imovel['area_construida_imovel'] != 0) :
                                    ?>
                                    <li><span class="font-bold">Área Construida: </span> <?php echo $imovel['area_construida_imovel'] ?></li>
                                    <?php
                                endif;
                                if (isset($imovel['area_total_imovel']) && $imovel['area_total_imovel'] != 0) :
                                    ?>
                                    <li><span class="font-bold">Área do Terreno: </span> <?php echo $imovel['area_total_imovel'] ?></li>
                                    <?php
                                endif;
                                if (isset($imovel['logradouro_endereco']) && $imovel['logradouro_endereco'] != '') :
                                    ?>
                                    <li style="text-transform: capitalize;"><span class="font-bold" style="text-transform: capitalize;">Endereço: </span> <?php echo $imovel['logradouro_endereco'] ?>, nº <?php echo $imovel['numero_endereco'] ?>, <?php echo $imovel['bairro_endereco'] ?> - <?php echo $imovel['complemento_endereco'] ?> -<?php echo $imovel['cidade_endereco'] ?> - PA</li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div><!-- Descrição do imóvel -->
                <!-- localização do imóvel -->
                <div role="tabpanel" class="tab-pane" id="localidadeImovel">
                    <div class="mapa">
                        <div id="view-mapa"></div>
                        <script type="text/javascript"> var latitude_imovel, longitude_imovel;</script>
                        <?php
                        echo "<script>var latitude_imovel ='" . $imovel['latitude_endereco'] . "';</script>";
                        echo "<script>var longitude_imovel ='" . $imovel['longitude_endereco'] . "';</script>";
                        ?>
                        <div class="caption">
                            <h3><span class="font-bold">Endereço: </span></h3>
                            <p style="text-transform: capitalize;"><?php echo $imovel['logradouro_endereco'] ?>, nº <?php echo $imovel['numero_endereco'] ?>, <?php echo $imovel['bairro_endereco'] ?> - <?php echo $imovel['complemento_endereco'] ?> -<?php echo $imovel['cidade_endereco'] ?> - PA</p>
                        </div>
                    </div><!-- fim MAPA-->
                </div> <!-- localização do imóvel -->
                <!-- contato -->
                <div role="tabpanel" class="tab-pane" id="contataImovel">
                    <div class="row">
                        <div class="col-md-4">
                            <h3><strong class="font-bold">Contato: </strong></h3>
                            <p><b>Fixo:</b> (93) 3518-0367</p>
                            <p><b>VIVO:</b> (93) 99242-2027</p>
                            <p><b>WhatsApp:</b> (93) 98124-3015</p>
                            <p><b>Email:</b> Contato@kananda.imb.br</p>
                            <h3><strong class="font-bold">Endereço: </strong></h3>
                            <p>Rua 4ª (Quarta), nº 361 - Floresta - Itaituba - PA</p>
                        </div>
                        <div class="col-md-8">
                            <h3 class="text-center"><strong>Formulário de Contato</strong></h3>
                            <!-- FORMULÁRIO PARA CONTATO -->
                            <form method="POST" class="form-contato">
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon " id="iNome"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control"  name="nNome" placeholder="Nome Completo" aria-describedby="iNome">
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon " id="nTelefone"><span class="glyphicon glyphicon-phone"></span></span>
                                        <input type="text" class="form-control" name="nTelefone" placeholder="(99) 9999-9999" aria-describedby="nTelefone">
                                    </div>
                                </div>


                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon " id="iEmail"><span class="glyphicon glyphicon-envelope"></span></span>
                                        <input type="email" class="form-control" name="nEmail" placeholder="email@provedor.com" aria-describedby="iEmail">
                                    </div>
                                </div>  
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="nMensagem"  rows="5" class="form-control" placeholder="Mensagem">Olá! Achei esse imóvel (Cod. <?php echo $imovel['referencia_imovel']; ?>, Tipo do Imóvel: <?php echo $imovel['imovel_imovel']; ?>, Finalidade: <?php echo $imovel['finalidade_imovel']; ?>, Categoria: <?php echo $imovel['categoria_imovel']; ?>) através do site . Por favor, gostaria de mais informações sobre o mesmo. Aguardo contato. Grato.</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <input type="submit" class="btn btn-lg btn-default" value="Enviar Mensagem" name="nEnviar">
                                </div>
                            </form><!-- FIM FORMULÁRIO PARA CONTATO -->
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>  <!-- contato -->
            </div>
        </section>

    </article><!-- FIM CONTEUDO DO IMÓVEL-->
</section>
