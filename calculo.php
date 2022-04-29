<?php
    function seculoAno($ano) {
        if($ano <= 100) {
            return 1;
        }else if($ano > 100 && $ano <= 1000) {
            if($ano == 1000){
                return 10;
            }
            $final = substr(strval($ano), -2);
            $inicial = substr(strval($ano), 0, 1);
        }else{
            $final = substr(strval($ano), -2);
            $inicial = substr(strval($ano), 0, 2);
        }

        if(intval($final) == 00) {
            return $inicial;
        }else{
            return $inicial +1;
        }
    }

    $mensagem = '';

    if ($_POST) {
        $ano = $_POST['ano'];

        if (is_numeric($ano)) {

            if ($ano > 0) {
                $seculo = seculoAno($ano);

                $mensagem .= '<div class="sucesso">';
                $mensagem .= '<p>Ano: '. $ano .'</p>';
                $mensagem .= '<p>Século: <b>'. $seculo .'</b></p>';
                $mensagem .= '</div>';
            }else{
                $mensagem .= '<div class="erro">'; 
                $mensagem .= '<p><b>O valor do ano deve ser maior que zero!</b></p>';
                $mensagem .= '</div>'; 
            }
            
        }else{
            $mensagem .= '<div class="erro">';
            $mensagem .= '<p><b>O valor recebido não é numérico!</b></p>';
            $mensagem .= '</div>'; 
        }
    }else{
        $mensagem .= '<div class="erro">';
        $mensagem .= '<p><b>Erro ao receber informações do formulário!</b></p>';
        $mensagem .= '</div>'; 
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado</h2>
            <div class="conteudo-painel">
                <?php echo $mensagem; ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>    
</body>
</html>