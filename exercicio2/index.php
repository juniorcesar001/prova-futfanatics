<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FutFanatics - Pedido Recebido</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="images/favicon1.ico"/>
</head>
<body>

<section class="back_blue">
<!-- DIVISORIA AZUL NO FUNDO-->
</section>

<header>
    <div class="header_nav">
        <img src="images/Logo_FutFanatics.png" alt="Logo da FutFanatics">

        <div class="header_nav_social">
            <a href="#"><i class="icon iconP_insta"></i></a>
            <a href="#"><i class="icon iconP_twitter"></i></a>
            <a href="#"><i class="icon iconP_face"></i></a>
        </div>
    </div>

    <div class="banner">
        <h2 class="banner_title">Grande jogada, Silvio!</h2>
        <p class="banner_content">Recebemos o seu pedido <span>[cod_pedido]</span>, realizado no dia <span>[data_pedido].</span></p>
    </div>
</header>

<main class="main">
    <!------------------>
    <!-- Nº DO PEDIDO -->
    <!------------------>
    <div class="main_flex">
        <div class="main_flex_item bk_gray">
            <h2>Número do pedido:</h2>
            <span>[cod_pedido]</span>
        </div>
        <div class="main_flex_item bk_green">
            <h3>Mais informações do pedido </h3>
            <i></i>
        </div>
    </div>
    <!---------------------->
    <!-- STATUS DO PEDIDO -->
    <!---------------------->
    <section class="main_box main_order">
        <div class="main_box_status">
            <img src="images/Bloco_Status_Pedido.png" alt="Status do Pedido">
        </div>

        <p>Fala <b>[nome_cliente]</b>, tudo certo?</p>
        <p>Seu pedido foi recebido aqui na Fut, agora é só <b>aguardar a confirmação de pagamento.</b> Quando confirmado, iniciaremos o procedimento de entrega juntamente com a transportadora escolhida. </p>
        <p>- Se você pagou com cartão, <b>em breve</b> vai receber a confirmação ou status por e-mail.</p>
        <p>⁃ Caso tenha escolhido pagar por boleto, a sua instituição financeira demora <b>até 48 horas</b> para confirmar o seu pagamento. Na mesma hora que recebermos a confirmação, vamos te enviar um e-mail avisando.</p>
        <p>Se você perdeu o boleto, segue o jogo, pode encontrar ele <a href="#">aqui</a> ou na seção de pagamento logo abaixo.</p>

    </section>

    <section class="main_box">
        <h2>Detalhe do Pedido</h2>
        <table class="tb_detail">
            <thead>
            <tr>
                <th colspan="3">Produtos</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="3"></td>
                <td>1</td>
                <td>R$49,90</td>
                <td>R$49,90</td>
            </tr>
            </tbody>
        </table>
            <br>
        <table class="tb_detail">
            <tr>
                <th>Frete </th>
                <td>[valor_envio]</td>
            </tr>
            <tr>
                <th>Desconto</th>
                <td>[acrescimo_desconto_forma_pgto]</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>[total_pedido]</td>
            </tr>

            <tr>
                <th>Transportadora Responsável:</th>
                <td>[forma_envio]</td>
            </tr>
        </table>


    </section>

    <section class="main_box">
        <h2>Dados de Pagamento</h2>
        <table class="tb_detail">
            <thead>
            <tr>
                <th>Forma de Pagamento</th>
                <th>Efetuar Pagamento</th>
                <th>Alterar Forma de Pagto</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>[forma_pagamento_escolhida_pedido]</td>
                <td><a href="#">Clique aqui</a></td>
                <td><a href="#">Clique aqui</a></td>
            </tr>
            </tbody>
        </table>
        <br><br><br>
    </section>

    <section class="main_box">
        <h2>Seu endereço e prazo de entrega</h2>
        <p><b>Olho no lance!</b>O prazo de entrega é sempre informado em dias úteis e começa a ser contado a partir da data de postagem do seu pedido.</p>
        <table class="tb_address">
            <tr>
                <th >Endereço
                    <br><br><br><br>
                </th>
                <td colspan="3">[endereco_entrega_pedido]</td>
            </tr>
            <tr>
                <th>Frete Escolhido</th>
                <td colspan="3">[forma_envio]</td>
            </tr>
            <tr>
                <th>Prazo de Entrega</th>
                <td colspan="3">[prazo_recebimento]</td>
            </tr>
        </table>
    </section>

    <section class="main_box">
        <h2>Informações importantes</h2>
        <p>- A partir deste momento você não pode incluir produtos em seu pedido ou alterar o endereço de entrega. Caso queira adquirir outros produtos, realize uma nova compra;</p>
        <p>- Os itens do seu pedido já <b>estão reservados em nosso estoque</b>. Se pagamento não seja efetuado em até <b>5 dias </b>a partir da data de envio deste e-mail, os produtos ficarão novamente disponíveis no site e poderão ser comprados por outros clientes;</p>
        <p>- Para sua comodidade e segurança, as informações inseridas em seu cadastro são passíveis de confirmação, feita através de contato telefônico. Caso isso ocorra, o prazo da entrega do seu pedido pode sofrer alguma alteração.</p>
    </section>

    <section class="main_box">
        <h2>Central de Relacionamento</h2>
        <p>Para dúvidas e informações, você pode conversar com a nossa Central de Relacionamento. Lembrando que atendemos de segunda a sexta-feira (das 8h às 18h) e aos sábados (das 8h às 12h), das seguintes formas:</p>
        <div class="main_box_row">
            <div class="main_box_row_col">
                <img src="images/IconeG_Telefone.png" alt="">
                <p>Ligue (18) 3199-0404 e fale com de nossos atendentes</p>
            </div>
            <div class="main_box_row_col">
                <img src="images/IconeG_Balão.png" alt="">
                <p>Acesse o chat online e tire suas dúvidas em tempo real</p>
            </div>
        </div>

        <div class="main_box_row">
            <div class="main_box_row_col">
                <img src="images/IconeG_Email.png" alt="">
                <p>Envie um e-mail para contato@futfanatics.com.br</p>
            </div>
            <div class="main_box_row_col">
                <img src="images/IconeG_RedeSocial.png" alt="">
                <p>Fale com a Fut nas mídias sociais #somostodosfanaticos</p>
            </div>
        </div>
        
    </section>
    
    <section class="main_banner">
        <img src="images/Banner_VejaOBlog.png" alt="Veja Agora o blog da Fut, clique aqui.">
    </section>
    <hr>

</main>

<footer class="footer">
    <div class="footer_head">
        <img src="images/Logo_FutFanatics.png" alt="">
        <p>FF.Com Esportes Ltda. - CNPJ 05.328.923/0001-90<br>
            Rodovia Arthur Boigues Filho, 59 CEP: 19026-650 Presidente Prudente - SP
        </p>
        <p>
            <b>CENTRAL DE RELACIONAMENTO: </b>Segunda a Sexta, 8h às 20h | Sábado, 8h às 12h <br>
            E-mail: contato@futfanatics.com.br | Fone: (18) 3199-0404
        </p>
    </div>

    <div class="footer_cards">
        <div class="sprite sprite-IconeP_Boleto"></div>
        <div class="sprite sprite-IconeP_Visa"></div>
        <div class="sprite sprite-IconeP_American"></div>
        <div class="sprite sprite-IconeP_Elo"></div>
        <div class="sprite sprite-IconeP_Hipercard"></div>
        <div class="sprite sprite-IconeP_PayPal"></div>
        <div class="sprite sprite-IconeP_MasterCard"></div>
        <div class="sprite sprite-IconeP_Ebit"></div>
    </div>

    <div class="footer_foot">
        <p>
            <b>INFORMAÇÕES GERAIS:</b>
            Os preços, promoções, condições de pagamento e frete são válidos exclusivamente para compras realizadas via internet e poderão sofrer alterações sem prévio aviso. Em caso de divergência, o preço válido é sempre o do carrinho. Imagens meramente ilustrativas.
        </p>

        <p>
            <b>CONDIÇÕES DE FRETE:</b>
            Frete Grátis para todo Brasil. Consulte nossa Política de Frete no Portal de Ajuda da loja ou simule o valor para sua região na página de carrinho.
        </p>

        <p>
            <b>CONDIÇÕES DE PARCELAMENTO:</b>
            Pagamento parcelado em cartões de crédito com bandeira Visa, Mastercard, Dinners, Hipercard, American Express e Elo em até 10x sem juros com parcela mínima de R$ 34,90. Pagamento parcelado no PayPal em até 12x sem juros com parcela mínima de R$ 19,90. Venda sujeita a análise e confirmação de dados.
        </p>
    </div>
</footer>

</body>
</html>