<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendas Bressan</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">
  <!-- Cabeçalho -->
  <header class="bg-blue-600 text-white py-6">
    <div class="container mx-auto px-4 flex justify-between items-center">
      <h1 class="text-3xl font-bold">Bressan Vendas B2B</h1>
      <img src="https://www.bressan.com.br/images/logo-texto-bressan-400-ok.png" alt="Logo Bressan" class="h-12">
    </div>
  </header>

  <!-- Seção Principal -->
  <main class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <!-- Informações sobre o sistema -->
      <div>
        <h2 class="text-2xl font-bold text-blue-600 mb-4">Aumente Suas Vendas com o Nosso Sistema</h2>
        <p class="text-gray-700 mb-6">
          O nosso novo sistema de vendas foi projetado para otimizar o processo de vendas da sua empresa,
          oferecendo relatórios detalhados e controle total das operações de vendas.
        </p>
        <p class="text-gray-700">
          Simplifique seu trabalho e aumente sua produtividade com as funcionalidades exclusivas que preparamos
          para você. Faça o cadastro da sua empresa e aproveite!
        </p>
      </div>

      <!-- Formulário de Cadastro -->
      <div>
        <h3 class="text-xl font-semibold text-blue-600 mb-4">Cadastre-se</h3>
        <form class="bg-white p-8 shadow-md rounded-lg space-y-2">
          <div>
            <label class="block text-gray-700 font-semibold mb-2" for="cnpj">CNPJ</label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="cnpj" placeholder="Digite o CNPJ da empresa">
          </div>
          <div>
            <label class="block text-gray-700 font-semibold mb-2" for="nome">Nome da Empresa</label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="nome" placeholder="Digite o nome da empresa">
          </div>
          <!-- <div>
            <label class="block text-gray-700 font-semibold mb-2" for="inscricao_estadual">Inscrição Estadual</label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="inscricao_estadual" placeholder="Digite a inscrição estadual">
          </div> -->
          <div>
            <label class="block text-gray-700 font-semibold mb-2" for="email">E-mail de Contato</label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="email" id="email" placeholder="Digite o e-mail de contato">
          </div>
          <div>
            <label class="block text-gray-700 font-semibold mb-2" for="telefone">Telefone de Contato</label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="tel" id="telefone" placeholder="Digite o telefone de contato">
          </div>
          <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded-lg hover:bg-blue-700">Cadastrar Empresa</button>
        </form>
      </div>

      <div>
        <h2 class="text-2xl font-bold text-blue-600 mb-4">Aumente Suas Vendas com o Nosso Sistema</h2>
        <p class="text-gray-700 mb-6">
          O nosso novo sistema de vendas foi projetado para otimizar o processo de vendas da sua empresa,
          oferecendo relatórios detalhados e controle total das operações de vendas.
        </p>
        <p class="text-gray-700">
          Simplifique seu trabalho e aumente sua produtividade com as funcionalidades exclusivas que preparamos
          para você. Faça o cadastro da sua empresa e aproveite!
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="border rounded-lg text-center bg-white">
          <a href="/login?tipo=cliente" target="_blank">
            <h2 class="text-2xl font-bold text-blue-600 m-4">Sou Cliente/Parceiro</h2>
          </a>
        </div>

        <div class="border rounded-lg text-center bg-white">
          <a href="/login?tipo=colaborador" target="_blank">
            <h2 class="text-2xl font-bold text-blue-400 m-4">Sou Colaborador</h2>
          </a>
        </div>
      </div>

    </div>
  </main>

  <!-- Rodapé -->
  <footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto px-4 text-center">
      <p>&copy; 2024 Bressan. Todos os direitos reservados.</p>
    </div>
  </footer>
</body>

</html>