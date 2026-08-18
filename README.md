# 🛒 Sistema de Cálculo de Desconto por Forma de Pagamento

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![W3.CSS](https://img.shields.io/badge/W3.CSS-009688?style=for-the-badge&logo=w3c&logoColor=white)

Aplicação Web desenvolvida em **PHP** para simulação e processamento de descontos progressivos baseados na **forma de pagamento** escolhida pelo cliente. 

Projeto desenvolvido como parte dos estudos de **Estruturas de Decisão Encadeadas (`if...elseif...else`) e Manipulação de Formulários via Método POST**.

---

## 📌 Regras de Negócio

O sistema avalia a forma de pagamento selecionada e aplica automaticamente o percentual de desconto correspondente sobre o valor total da compra:

| Forma de Pagamento | Desconto Aplicado |
| :--- | :--- |
| **Depósito Bancário** | **10%** de desconto |
| **Boleto Bancário** | **8%** de desconto |
| **Cartão de Crédito** | **0%** (Sem desconto) |

---

## 📂 Estrutura do Projeto

```text
agenda3/
├── formularioPagamento.php   # Interface web de captura (Formulário HTML/W3.CSS)
├── descontoAction.php        # Processamento lógico e exibição do comprovante
└── README.md                 # Documentação do projeto
