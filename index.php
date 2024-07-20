<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Projeto Landing Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="author" content="Jenifer Senna">
        <meta name="description" content="aula pratica, projeto 02">
        <link href="css/style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container">
                <div><div class="logo-Day"></div><!-- logo-Day --></div>
                <div><div class="logo-txt"></div><!-- logo-txt --></div>
                <div class="clear"></div>
            </div><!-- container -->
        </header>

        <section class="cover-form">
            <div class="container bg">
                <div class="form-container">
                    <h2>PODE ACREDITAR, AO VIVO É AINDA MAIS BONITO.</h2>
                    <form>
                        <div class="form-wraper">
                            <p>*Nome completo:</p>
                            <input type="text" name="nome" placeholder="Nome" required>
                        </div><!-- form-wraper -->
                        <div class="form-wraper">
                            <p>*E-mail:</p>
                            <input type="text" name="email" placeholder="E-mail" required>
                        </div><!-- form-wraper -->
                        <div class="form-wraper">
                            <p>*Telefone:</p>
                            <input type="text" name="telefone" placeholder="Telefone" required>
                        </div><!-- form-wraper -->
                        <div class="form-wraper">
                            <input type="submit" name="acao" value="Enviar">
                        </div><!-- form-wraper -->
                        <div class="form-wraper">
                            <p>* Campos Obrigatórios</p>
                        </div><!--form-wraper -->
                    </form>
                </div><!-- form-container -->
            </div><!-- container bg -->
        </section><!-- cover-form -->

        <section class="chamada">
            <div class="container">
            <div><h2>Uma chamada para o paraíso.</h2></div>
            <div><p>Morbi varius tortor leo, sit amet egestas lorem scelerisque cursus. Maecenas sagittis consequat magna ut cursus.</p></div>
            </div><!-- container -->
        </section><!-- chamada -->

        <section class="mosaico">
            <div class="container">
                <div class="flex-mosaico">
                    <div style="background-image: url('images/paisagem_01.jpg');" class="item-1-mosaico">

                    </div><!-- item-1-mosaico -->
                    <div class="item-2-mosaico">
                        <p>Nullam id erat dictum, faucibus lectus ac, dictum urna. 
                            Etiam vulputate imperdiet vestibulum. Nam pulvinar porta mauris feugiat 
                            vulputate. Orci varius natoque penatibus et magnis dis parturient montes,
                             nascetur ridiculus mus.</p>
                    </div><!-- item-2-mosaico -->
                </div><!-- flex-mosaico -->
                <div class="flex-mosaico">
                    <div style="background-image: url('images/paisagem_02.jpg'); order: 2;" class="item-1-mosaico">

                    </div><!-- item-1-mosaico -->
                    <div class="item-2-mosaico" style="order: 1;">
                        <p>Sed sed efficitur mi, at dapibus augue. Sed laoreet sodales tristique. 
                            Suspendisse interdum tortor nunc. Integer pharetra, ipsum vitae iaculis
                             sollicitudin, risus ipsum posuere enim, tempor porta eros urna eget sem. 
                             Nullam consequat nec augue id semper. Aenean laoreet ex quam, at semper
                              elit suscipit quis..</p>
                    </div><!-- item-2-mosaico -->
                </div><!-- flex-mosaico -->
                <div class="flex-mosaico">
                    <div style="background-image: url('images/paisagem_03.jpg');" class="item-1-mosaico">

                    </div><!-- item-1-mosaico -->
                    <div class="item-2-mosaico">
                        <p>Donec dapibus aliquam velit vitae faucibus.
                             In hac habitasse platea dictumst. Nam posuere magna lectus, 
                             sit amet accumsan sem feugiat et.</p>
                    </div><!-- item-2-mosaico -->
                </div><!-- flex-mosaico -->
            </div><!-- container -->
        </section><!-- mosaico -->

        <footer>
            <p>Todos os direitos reservados</p>
            <p>Contato: (00) 123.456.789</p>
        </footer>
        
    </body>
</html>