<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./assets/img/Logo.png"
      type="image/x-icon"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
  </head>
  <body class="bg-black">
    <div
      id="container"
      class="flex flex-col bg-zinc-900 items-center justify-center my-12 mx-96 rounded-lg"
    >
      <img src="./assets/img/Logo.png" alt="Logo" class="w-48 mt-5" />

      <h1 class="font-bold text-white text-2xl mt-5">CADASTRO</h1>

      <div class="flex flex-col text-xs text-white">
        <input
          type="text"
          id="container"
          placeholder="Nome"
          class="rounded-full my-5 w-80 px-5 py-2"
        />
        <input
          type="email"
          id="container"
          placeholder="E-mail"
          class="rounded-full mb-5 px-5 py-2"
        />
        <input
          type="password"
          id="container"
          placeholder="Senha"
          class="rounded-full mb-5 px-5 py-2"
        />
      </div>

      <button
        class="bg-sky-500 mt-2 py-2 px-5 rounded-full font-bold text-white"
      >
        REGISTRAR-SE
      </button>
      <p class="mt-3 mb-5 text-white">
        Já possui uma conta? <a href="" class="text-sky-500">Login</a> aqui!
      </p>
    </div>
  </body>
</html>