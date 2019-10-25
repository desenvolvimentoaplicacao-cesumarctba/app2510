<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form action="/Aluno/<?= $acao ?>" method="POST">
        
        <?php if($tipo == 'altera'):  ?>
            Id:   <input type="text" name="id" readonly value="<?= $aluno[0]->id ?>"><br>
            Nome: <input type="text" name="nome" value="<?= $aluno[0]->nome ?>"> <br>
            Data Nascimento: <input type="date" name="nascimento" value="<?= $aluno[0]->nascimento ?>"> <br>
            <input type="submit" value="Salvar">
        <?php elseif($tipo == 'insere'):  ?>
            Nome: <input type="text" name="nome"> <br>
            Data Nascimento: <input type="date" name="nascimento"> <br>
            <input type="submit" value="Salvar">
        <?php endif; ?>
    </form>
</body>
</html>