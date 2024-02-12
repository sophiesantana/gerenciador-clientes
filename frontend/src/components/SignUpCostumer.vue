<template>
  <form action="" id="form">
    <div id="container">
      <div class="item">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
      </div>

      <div class="item">
        <label for="data">Data de Nascimento:</label>
        <input type="date" name="data">
      </div>

      <div class="item">
        <label for="cpf">CPF:</label>
        <input type="number" name="cpf">
      </div>

      <div class="item">
        <label for="rg">RG:</label>
        <input type="number" name="rg">
      </div>

      <div class="item">
        <label for="telefone">Telefone:</label>
        <input type="number" name="telefone" placeholder="DDD + telefone">
      </div>

      <div id="adresses">
        <div class="adress">
          <p>Endereço 1:</p>
          <div class="item">
            <label for="street">Rua:</label>
            <input type="text" name="street">
          </div>
          <div class="item">
            <label for="city">Cidade:</label>
            <input type="text" name="city">
          </div>
          <div class="item">
            <label for="state">Estado:</label>
            <input type="text" name="state">
          </div>
          <div class="item">
            <label for="postal-code">CEP:</label>
            <input type="text" name="postal-code">
          </div>
        </div>

        <div class="adress">
          <p>Endereço 2:</p>
          <div class="item">
            <label for="street">Rua:</label>
            <input type="text" name="street">
          </div>
          <div class="item">
            <label for="city">Cidade:</label>
            <input type="text" name="city">
          </div>
          <div class="item">
            <label for="state">Estado:</label>
            <input type="text" name="state">
          </div>
          <div class="item">
            <label for="postal-code">CEP:</label>
            <input type="text" name="postal-code">
          </div>
        </div>
      </div>

      <div>
        <button type="submit">Cadastrar</button>
      </div>
    </div>
  </form>
</template>

<style scoped>

#form {
  text-align: center;
  width: 60%;
  height: 100%;
  display: flex;
  margin: auto;
}

#container {
  display: flex;
  flex-direction: column;
  margin: auto;
}

#adresses {
  display: flex;
  flex-direction: row;
  justify-content: center;
}

.adress {
  display: flex;
  flex-direction: column;
  width: 50%;
  margin-left: 10px;
}
.item {
  margin: 5px;
}

.item > input {
  margin-left: 10px;
  border-radius: 10px;
  border-color: transparent;
}

button {
  margin: 60px;
  background-color: rgb(12, 100, 0);
  font-size: 15px;
  color: white;
  padding: 10px;
  border-radius: 10px;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: rgb(223, 0, 167);
}

</style>