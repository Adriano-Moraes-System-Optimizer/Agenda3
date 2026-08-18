<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Importação do framework W3.CSS (mesmo padrão do formulário) -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Resumo da Compra</title>
</head>
<body class="w3-light-grey">

    <div class="w3-content" style="max-width:600px; margin-top:50px;">
        <div class="w3-card-4 w3-white">
            
            <!-- Cabeçalho idêntico ao do formulário -->
            <div class="w3-container w3-teal">
                <h2>Resumo do Pagamento</h2>
            </div>

            <div class="w3-container w3-padding-24">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nome = $_POST["txtNome"] ?? '';
                    $valorCompra = floatval($_POST["txtValorCompra"] ?? 0);
                    $formaPagamento = $_POST["cmbPag"] ?? '';

                    $descontoPorcentagem = 0;
                    $nomePagamento = "";

                    // Lógica de cálculo ajustada
                    if ($formaPagamento == "cartaoCredito") {
                        $descontoPorcentagem = 0;
                        $nomePagamento = "Cartão de Crédito";
                    } elseif ($formaPagamento == "boleto") {
                        $descontoPorcentagem = 8;
                        $nomePagamento = "Boleto Bancário";
                    } elseif ($formaPagamento == "deposito") {
                        $descontoPorcentagem = 10;
                        $nomePagamento = "Depósito Bancário";
                    } else {
                        echo "<div class='w3-panel w3-red w3-padding-16'>Forma de pagamento inválida.</div>";
                        echo "<a href='formularioPagamento.php' class='w3-btn w3-teal w3-block w3-section'>Voltar</a>";
                        exit;
                    }

                    $valorDesconto = ($valorCompra * $descontoPorcentagem) / 100;
                    $valorFinal = $valorCompra - $valorDesconto;
                ?>

                    <!-- Estrutura legível em lista/tópicos -->
                    <p class="w3-large"><b>Cliente:</b> <?php echo htmlspecialchars($nome); ?></p>
                    <p><b>Forma de Pagamento:</b> <?php echo $nomePagamento; ?></p>
                    <hr>
                    <p><b>Valor Original da Compra:</b> R$ <?php echo number_format($valorCompra, 2, ',', '.'); ?></p>
                    <p><b>Desconto Aplicado (<?php echo $descontoPorcentagem; ?>%):</b> R$ <?php echo number_format($valorDesconto, 2, ',', '.'); ?></p>
                    
                    <!-- Destaque visual para o Valor Final -->
                    <div class="w3-panel w3-pale-green w3-leftbar w3-border-green w3-padding-16">
                        <h3 class="w3-text-green" style="margin:0;">
                            <b>Valor Final: R$ <?php echo number_format($valorFinal, 2, ',', '.'); ?></b>
                        </h3>
                    </div>

                    <!-- Botão para retornar ao formulário -->
                    <a href="formularioPagamento.php" class="w3-btn w3-teal w3-block w3-section w3-ripple">Realizar Novo Cálculo</a>

                <?php
                } else {
                    echo "<div class='w3-panel w3-amber w3-padding-16'>Acesso direto inválido. Utilize o formulário.</div>";
                    echo "<a href='formularioPagamento.php' class='w3-btn w3-teal w3-block w3-section'>Voltar ao Formulário</a>";
                }
                ?>
            </div>

        </div>
    </div>

</body>
</html>

