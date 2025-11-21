<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrybem - Carrinho de Compras</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../templates/assets/css/carrinho.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <span class="logo-text">Agry<span class="logo-highlight">bem</span></span>
            </div>
            <nav class="nav">
                <a href="../View/loja.php" class="nav-button">Voltar à Loja</a>
            </nav>
        </div>
    </header>

    <!-- Conteúdo do Carrinho -->
    <main class="cart-page-content">
        <div class="container">
            <h1 class="cart-title">Seu Carrinho</h1>

            <!-- Container de Itens do Carrinho -->
            <div id="cart-items-container">
                <!-- ITENS DO CARRINHO ESTÁTICOS PARA FUTURA INTEGRAÇÃO COM PHP -->
              
                <!-- Item 2: Tomate Cereja (por unidade) -->
                <div class="cart-item" data-product-id="2">
                    <img src="../templates/assets/img/banana.png" alt="Tomate Cereja" class="cart-item-image">
                    <div class="cart-item-details">
                        <span class="cart-item-name">Banana</span>
                        <span class="cart-item-category">Fruta</span>
                        <span class="cart-item-base-price">Preço base: R$ 3,50 / un</span>
                    </div>
                    <div class="cart-item-controls">
                        <div class="quantity-unit-group">
                            <!-- Input de quantidade reativado -->
                            <input type="number" value="3" min="1" step="1">
                            <!-- Select de unidade reativado com opção un -->
                            <select>
                                <option value="un" selected>un</option>
                            </select>
                        </div>
                        <span class="item-total-price">R$ 10,50</span>
                        <button class="remove-item-btn" disabled>Remover</button>
                    </div>
                </div>


                <!-- Item 2: Tomate Cereja (por unidade) -->
                <div class="cart-item" data-product-id="2">
                    <img src="../templates/assets/img/tomate pag inicial.png" alt="Tomate Cereja" class="cart-item-image">
                    <div class="cart-item-details">
                        <span class="cart-item-name">Tomate Cereja</span>
                        <span class="cart-item-category">Legumes</span>
                        <span class="cart-item-base-price">Preço base: R$ 3,50 / un</span>
                    </div>
                    <div class="cart-item-controls">
                        <div class="quantity-unit-group">
                            <!-- Input de quantidade reativado -->
                            <input type="number" value="3" min="1" step="1">
                            <!-- Select de unidade reativado com opção un -->
                            <select>
                                <option value="un" selected>un</option>
                            </select>
                        </div>
                        <span class="item-total-price">R$ 10,50</span>
                        <button class="remove-item-btn" disabled>Remover</button>
                    </div>
                </div>

                <!-- Item 3: Alface Crespa (por unidade) -->
                <div class="cart-item" data-product-id="3">
                    <img src="../templates/assets/img/grid principal 1.png" alt="Alface Crespa" class="cart-item-image">
                    <div class="cart-item-details">
                        <span class="cart-item-name">Laranja</span>
                        <span class="cart-item-category">Fruta</span>
                        <span class="cart-item-base-price">Preço base: R$ 2,00 / un</span>
                    </div>
                    <div class="cart-item-controls">
                        <div class="quantity-unit-group">
                            <!-- Input de quantidade reativado -->
                            <input type="number" value="1" min="1" step="1">
                            <!-- Select de unidade reativado com opção un -->
                            <select>
                                <option value="un" selected>un</option>
                            </select>
                        </div>
                        <span class="item-total-price">R$ 2,00</span>
                        <button class="remove-item-btn" disabled>Remover</button>
                    </div>
                </div>
                
                <!-- FIM DOS ITENS DO CARRINHO ESTÁTICOS -->
            </div>

            <!-- Resumo do Carrinho -->
            <div class="cart-summary">
                <div class="summary-details">
                    <span class="summary-total-label">Total Geral:</span>
                    <!-- Total calculado manualmente para os itens de exemplo: 8,99 + 10,50 + 2,00 = 21,49 -->
                    <span class="summary-total-value" id="grand-total">R$ 21,49</span>
                </div>
                <!-- O botão de finalizar pedido agora é um link para simular a navegação -->
                <a href="../View/checkout.php" class="checkout-btn" id="checkout-btn">Finalizar Pedido</a>
            </div>
        </div>
    </main>
 <!-- Api Vlibras -->
    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>
</html>