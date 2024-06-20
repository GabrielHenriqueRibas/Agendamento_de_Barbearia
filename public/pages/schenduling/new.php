<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="shortcut icon"
      href="./assets/img/Logo.png"
      type="image/x-icon"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Novo Agendamento</title>
</head>
<body>
    <header class="flex items-center bg-black">
      <img src="/assets/img/Logo.png" alt="logo" class="w-16 m-3" />
      <h1 class="text-white">Agendamento de Horario</h1>
    </header>
    <div class="flex justify-center mt-10">
        <h1>Nome: Gabriel Henrique Ribas</h1>
        <h1 class="mx-8">Email: exemplo@gmail.com</h1>
        <h1>Telefone: (00) 00000-0000</h1>
    </div>

    <div class="ml-8">
        <h1 class="font-bold">Barbeiro:</h1>
        <div class="flex">
            <input type="radio" value="João">
            <label for="joao">João</label>

            <input type="radio" value="Zé" class="ml-10">
            <label for="joao">Zé</label>
        </div>

        <h1 class="font-bold mt-8">Serviços:</h1>
        <div class="flex">
            <input type="checkbox" value="Cabelo">
            <label for="Cabelo">Cabelo</label>

            <input type="checkbox" value="Barba" class="ml-8">
            <label for="Barba" class="mr-8">Barba</label>

            <input type="checkbox" value="Sombrancelha">
            <label for="Sombrancelha">Sombrancelha</label>
        </div>

        <h1 class="font-bold mt-8">Data:</h1>
        <div class="flex">
            <input type="date" name="" id="">
            
        </div>

        <h1 class="font-bold mt-8">Local:</h1>
        <select name="frutas" id="frutas">
            <option value="">Selecione um Local</option>
            <option value="maçã">Rua Exemplo, 2015- bairro- 0000000</option>
            <option value="banana">Rua Exemplo, 2015- bairro- 0000000</option>
            <option value="laranja">Rua Exemplo, 2015- bairro- 0000000</option>
        </select>
    </div>
    <h1 class="flex justify-center mt-10 bg-blue-700">Agendar</h1>
</body>
</html>