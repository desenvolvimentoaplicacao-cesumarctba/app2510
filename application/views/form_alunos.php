<form action="/Aluno/recebePost?tipo=<?= $tipo ?>" method="POST">
    ID <input type="text" name="id" readonly value="<?= $tipo ? '' : $aluno[0]->id ?>"> <br>

    Nome <input type="text" name="nome" value="<?= $tipo ? '' : $aluno[0]->nome ?>"> <br>
    RA  <input type="text" name="ra" value="<?= $tipo ? '' : $aluno[0]->ra ?>"> <br>

    URL Git <input type="text" name="urlgit" value="<?= $tipo ? '' : $aluno[0]->urlgit ?>"> <br>
    
    <input type="submit" value="Salvar">
</form>