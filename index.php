<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Século do Ano</title>
</head>

<body>

    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar o século em que se encontra o ano determinado por usuário!</p>
                <p>Exemplo:</p>

                <ul>
                    <li>Ano 1905 = <b>século 20</b> e Ano 1700 = <b>século 17</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Entre com o ano em que deseja se saber o século</h2>

            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                    <label for="ano">Ano</label>
                    <input type="number" class="campoTexto" name="ano" required />

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>

</body>
</html>