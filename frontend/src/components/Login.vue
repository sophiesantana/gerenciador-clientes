<template>
  <form action="" id="form">
    <div id="container">
      <div>
        <label for="email">CPF:</label>
        <input type="email" name="email">
      </div>

      <div>
        <label for="password">Senha:</label>
        <input type="password" name="password">
      </div>

      <div id="btn-recover-pass">
        <button type="submit">Logar</button>
        <p>Esqueceu a senha?</p>
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

#btn-recover-pass {
  display: flex;
  justify-content: center;
  background-color: aqua;
}

</style>