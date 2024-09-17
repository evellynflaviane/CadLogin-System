<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Cadastre-se</title>
    </head>
    <body>
        <div>
            <h2>Cadastro de Usuario</h2>
            <form method="post" action="">
                <label for="">Nome</label>
                <input type="text"name="nome" id="nome" required>

                <label for="">Email</label>
                <input type="email" name="email"ide="email" required>

                <label for="">Senha</label>
                <input type="passaword" name="senha"id="senha" required>

                <label for="">Perfil</label>
                <input type="perfil" name="perfil"id="perfil">
                <select name= perfil id="perfil">              
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
</select>
<button type="submit">Cadastrar</button>
</form>
<a href="">Voltar ao Login

</body>