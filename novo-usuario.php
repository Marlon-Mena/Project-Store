<h1>Novo Usuário</h1>
<form action="?page-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
            <input type="text" name="nome" class="from control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
            <input type="email" name="email" class="from control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
            <input type="password" name="senha" class="from control">
    </div>
    <div class="mb-3">
        <label>Data</label>
            <input type="date" name="data_nasc" class="from control">
    </div>
    <div class="mb-3">
      <button input type="submit" class="btnbtn-primary">Enviar</button>
    </div>
</form>