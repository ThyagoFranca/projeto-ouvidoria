<?php

    require_once("includes/conexao.php");
    require_once("classes/ouvidoria.php");

    $protocolo = $_POST['protocolo'];

    $obj = new ouvidoria();
    $result = $obj->consultar($protocolo);

    if ($result['resposta']) {
        $respondido = true;
        $resposta = $result['resposta'];
        $bgcolor = 'p-3 mb-2 bg-success text-white';
        $dataResposta = new \DateTime($result['dataResposta']);
        $dataRespostaFormatada = $dataResposta->format('d/m/Y H:i:s');
    } else {
        $respondido = false;
        $resposta = 'Ainda sem resposta';
        $bgcolor = 'p-3 mb-2 bg-warning text-white';
        $dataResposta = new \DateTime($result['dataResposta']);
        $dataRespostaFormatada = $dataResposta->format('d/m/Y H:i:s');
    }

?>

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

            <div class="row">
                <div class="col-md-12">
                    <h4>Consultar Manifestação</h4>
            
                    <div class="card">
                        <div class="card-header">Resposta da Manifestação</div>
                        <p class="<?php echo $bgcolor?>">
                            <?php echo $resposta ?>
                            <br /><strong><?php echo $dataRespostaFormatada ?></strong>
                        </p>
                    </div><!-- /card -->
            
                    <div class="card">
                        <div class="card-header">Detalhes da Manifestação</div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="text-right">Protocolo</th>
                                    <td><?php echo $result['protocolo']?></td>
                                </tr>
                                <tr>
                                    <th class="text-right">Nome</th>
                                    <td><?php echo $result['nome']?></td>
                                    <th class="text-right">Email</th>
                                    <td><?php echo $result['email']?></td>
                                </tr>
                                <tr>
                                    <th class="text-right">CPF</th>
                                    <td><?php echo $result['cpf']?></td>
                                    <th class="text-right">RG</th>
                                    <td><?php echo $result['rg']?></td>
                                </tr>
                                <tr>
                                    <th class="text-right">Logradouro / Número</th>
                                    <td>
                                        <?php echo $result['logradouro']?>
                                         - 
                                        <?php echo $result['numero']?>
                                    </td>
                                    <th class="text-right">CEP</th>
                                    <td><?php echo $result['rg']?></td>
                                </tr>
                                <tr>
                                    <th class="text-right">Complemento</th>
                                    <td><?php echo $result['complemento']?></td>
                                    <th class="text-right">Bairro</th>
                                    <td><?php echo $result['bairro']?></td>
                                </tr>
                                <tr>
                                    <th class="text-right">Cidade</th>
                                    <td><?php echo $result['cidade']?></td>
                                    <th class="text-right">Estado / País</th>
                                    <td>
                                        <?php echo $result['uf']?>
                                         - 
                                        <?php echo $result['pais']?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Telefone</th>
                                    <td>
                                        (<?php echo $result['telefone_ddd']?>)
                                         <?php echo $result['telefone_numero']?>
                                    </td>
                                    <th class="text-right">Celular</th>
                                    <td>
                                        (<?php echo $result['celular_ddd']?>)
                                         <?php echo $result['celular_numero']?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Mensagem</th>
                                    <td colspan="3">
                                        <?php echo $result['mensagem']?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /card -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->
        </div><!-- /container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>