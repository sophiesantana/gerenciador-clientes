<template>
  <form action="" id="form">
    <div id="container">
      <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
      </div>

      <div>
        <label for="data">Data de Nascimento:</label>
        <input type="date" name="data">
      </div>

      <div>
        <label for="cpf">CPF:</label>
        <input type="number" name="cpf">
      </div>

      <div>
        <label for="rg">RG:</label>
        <input type="number" name="rg">
      </div>

      <div>
        <label for="telefone">Telefone:</label>
        <input type="number" name="telefone" placeholder="DDD + telefone">
      </div>

      <div>
        <label for="password">Senha:</label>
        <input type="password" name="password">
      </div>

      <div>
        <button type="submit">Cadastrar</button>
      </div>
    </div>
  </form>
</template>

<style scoped>

#form {
  background-color: blueviolet;
  text-align: center;
}

#container {
  display: flex;
  flex-direction: column;
}

</style>