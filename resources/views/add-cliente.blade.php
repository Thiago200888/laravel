<form action="{ route('cliente/add' )}" method="post">
    @csrf
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <button type="submit">Cadastrar</button>
</form>