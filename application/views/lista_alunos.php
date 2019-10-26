<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/Aluno/formAlunos">Inserir</a>
    <table border='1'>
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>RA</th>
            <th>URL Git</th>
        </thead>
        <tbody>
            <?php foreach($alunos as $aluno): ?>
                <tr>
                    <td><?= $aluno->id ?></td>
                    <td><?= $aluno->nome ?></td>
                    <td><?= $aluno->ra ?></td>
                    <td><?= $aluno->urlgit ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>