<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .icons {
            width: 80%;
        }

        .button-icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column h-100">
        <div class="bg-primary text-white fw-bold p-4 d-flex flex-row align-items-center justify-content-between">
            <button class="btn btn-transparent text-white fw-bold" onclick="isOpen()"><x-feathericon-align-justify /></button>
        </div>
        <div class="w-100 d-flex flex-row h-100">
            <x-side-bar />
            <div class="container pt-3">
                <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                    <h3>Categorias</h3>
                </div>
                @foreach ($categories as $category)
                    <div class="card col-12 border-2 mb-3">
                        <div class="card-body d-flex flex-row justify-content-between align-items-center">
                            <div class="d-flex flex-column">
                                <span><strong>ID</strong>: {{ $category->id }}</span>
                                <span><strong>Nome</strong>: {{ $category->nome }}</span>
                                <span><strong>Descrição</strong>: {{ $category->descricao }}</span>
                            </div>
                            <div>
                                <a href={{ route('edit.products', 2) }}>
                                    <button class="btn btn-success button-icon" ><x-feathericon-edit class="icons" /></button>
                                </a>
                                <button class="btn btn-danger button-icon"><x-feathericon-x class="icons" />
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <p>Exibindo de {{$categories->firstItem()}} até {{$categories->lastItem()}} de {{$categories->total()}} resultados </p>
                    {{ $categories->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>