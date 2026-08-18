<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Importação do framework W3.CSS para estilização ágil -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Sistema de Vendas - Forma de Pagamento</title>
</head>
<body class="w3-light-grey">

    <div class="w3-content" style="max-width:600px; margin-top:50px;">
        <div class="w3-card-4">
            
            <!-- Cabeçalho do Card -->
            <div class="w3-container w3-teal">
                <h2>Simulador de Desconto por Pagamento</h2>
            </div>

            <!-- Formulário com envio via POST -->
            <form class="w3-container w3-white w3-padding-24" method="post" action="descontoAction.php">
                
                <label class="w3-text-teal"><b>Nome do Cliente</b></label>
                <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text" placeholder="Digite o nome completo" required>
                
                <br>
                <label class="w3-text-teal"><b>Valor da Compra (R$)</b></label>
                <input class="w3-input w3-border w3-light-grey" name="txtValorCompra" type="number" step="0.01" placeholder="Ex: 1500.00" required>
                
                <br>
                <label class="w3-text-teal"><b>Forma de Pagamento</b></label>
                <select class="w3-select w3-border w3-light-grey" name="cmbPag" required>
                    <option value="" disabled selected>Escolha a forma de pagamento</option>
                    <option value="deposito">Depósito (10% de desconto)</option>
                    <option value="boleto">Boleto (8% de desconto)</option>
                    <option value="cartaoCredito">Cartão de Crédito (Sem desconto)</option>
                </select>
                
                <br><br>
                <button class="w3-btn w3-teal w3-block w3-section w3-ripple" type="submit">Processar Pagamento</button>
            </form>

        </div>
    </div>

</body>
</html>
