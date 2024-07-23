<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Cadastrar Novo Produto</h1>
        <form action="{{ route('produtos.guardar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome do produto" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição do Produto</label>
                <textarea id="descricao" name="descricao" class="form-control" placeholder="Descrição do produto" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="preco">Valor do Produto</label>
                <input type="number" id="preco" name="preco" class="form-control" placeholder="Valor do produto" step="0.01" required>
            </div>

            <div class="form-group">
                <label>Disponível para Venda</label>
                <div class="form-check">
                    <input type="radio" id="sim" name="disponivel" value="1" class="form-check-input" required>
                    <label for="sim" class="form-check-label">Sim</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="nao" name="disponivel" value="0" class="form-check-input" required>
                    <label for="nao" class="form-check-label">Não</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
