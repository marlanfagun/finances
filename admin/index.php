<?php
require_once 'verify.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,700;1,200;1,400;1,700&display=swap" rel="stylesheet">
    <title>dev.finance$</title>
    <link rel="icon" href="./assets/money-bag.png">
</head>
<body>
    <header>
        <img src="./assets/logo.svg" alt="Logo Dev Finance">
        <a href="logout.php" class="button logout">Sair</a>
    </header>
    <main class="container">
        <section id="balance">
            <h2 class="sr-only">Balanço</h2>
            <div class="card">
                <h3>
                    <span>Entradas</span>
                    <img src="./assets/income.svg" alt="Imagem de entradas">
                </h3>
                <p id="incomeDisplay">R$ 5.000,00</p>
            </div>
            <div class="card">
                <h3>
                    <span>Saídas</span>
                    <img src="./assets/expense.svg" alt="Imagem de entradas">
                </h3>
                <p id="expenseDisplay">R$ 2.000,00</p>
            </div>
            <div class="card total">
                <h3>
                    <span>Total</span>
                    <img src="./assets/total.svg" alt="Imagem de entradas">
                </h3>
                <p id="totalDisplay">R$ 3.000,00</p>
            </div>
        </section>
        <section id="transaction">
            <h2 class="sr-only">Transações</h2>
            <a href="#" onclick="Modal.open()" class="button new">+ Nova Transação</a>
            <table id="data-table">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>           
                </tbody>
            </table>
        </section>
    </main>

    <div class="modal-overlay">
        <div class="modal">
            <div id="form">
                <h2>Nova Transação</h2>
                <form action="" onsubmit="Form.submit(event)">
                    <div class="input-group">
                        <label 
                            class="sr-only" 
                            for="description">Descrição</label>
                        <input 
                            type="text" 
                            id="description" 
                            name="description" 
                            placeholder="Descrição"/>
                    </div>
                    <div class="input-group">
                        <label 
                            class="sr-only" 
                            for="amount">Valor</label>
                        <input 
                            type="number" 
                            step="0.01"
                            id="amount" 
                            name="amount" 
                            placeholder="0,00"/>
                        <small class="help">Use o sinal - (negativo) para despesas e , (virgula) para casas decimais</small>
                    </div>
                    <div class="input-group">
                        <label 
                            class="sr-only" 
                            for="date">Data</label>
                        <input 
                            type="date" 
                            id="date" 
                            name="date"/>
                    </div>
                    <div class="input-group actions">
                        <a href="#" onclick="Modal.close()" class="button cancel">Cancelar</a>
                        <button>Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <p>2021 - dev.finance$</p>
    </footer>

    <script src="./app.js"></script>
</body>
</html>