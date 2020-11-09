<!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatilbe" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Ouvidoria UniCesumar">
        <meta name="author" content="Thyago França">

        <title>Ouvidoria UniCesumar</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>

        <div class="container">
            <div class="text-center" style="margin-top: 20px">
                <img src="unicesumar.png" />
                <h2 style="margin-top:20px">Ouvidoria</h2>
                <p class="lead">Caso necessário entre em contato conosco.<br />Estamos à disposição para mais esclarecimentos sobre a utilização do serviço.</p>
            </div>
            <?php
                session_start();
                if(isset($_SESSION['protocolo'])) { ?>
                    <div class="alert alert-success" role="alert">
                      <?= $_SESSION['protocolo'] ?>
                    </div>
            <?php } unset($_SESSION['protocolo']); ?>

            <div class="row">
                <div class="col-md-12">
                    <h4>Manifestações</h4>
                    <div class="card">
                        <div class="card-header">Online</div>
                        <div class="col-md-12" style="margin-top: 20px"> 
                            <p>Para manifestação online, clique no botão "Cadastrar manifestação" e, caso opte por se identificar, insira os seus dados e a manifestação nos campos exigidos. Um protocolo será gerado para acompanhamento. Caso opte pelo anonimato, insira apenas os dados da manifestação.</p>  
                            <hr />
                            <a href="cadastrar.html" class="btn btn-danger btn-lg btn-block" style="margin-bottom: 20px">Cadastrar Manifestação</a>
                        </div>
                    </div><!-- /card -->

                    <div class="card">
                        <div class="card-header">Consultar</div>
                        <div class="col-md-12" style="margin-top: 20px"> 
                            <form action='consultar.php' method='post'>
                                <div class="col-md-12">
                                    <label for="protocolo">Número da Ocorrência</label>
                                    <input type="text" class="form-control" id="protocolo" name="protocolo" required>
                                </div>
                                <hr />
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar" style="margin-bottom:50px">
                                </div>
                            </form>
                        </div><!-- /col-md-12 -->
                    </div><!-- /card -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->
        </div><!-- /container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>