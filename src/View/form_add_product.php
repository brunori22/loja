<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Loja, De, Varejo">
    <title>Loja de varejo - cadastro de produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-red-400">
        <ul class="flex">
            <li class="mx-3">
                <a href="../index.html">Home</a>
            </li>
            <li>
                <a href="#">Novo produto</a>
            </li>
        </ul>
    </header>
    <main>
        <form action="../controller/product.php" method="POST">
            <section class="columns-3">
                <article>
                    <label for="name">
                        Digite o nome do produto
                    </label>
                    <input type="text" id="name" name="name" class="border border-green-400">
                </article>
            </section>
        </form>
    </main>
</body>
</html>