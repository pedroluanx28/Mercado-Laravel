<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar novo produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .div-shadow {
            box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
            width: 550px;
        }
    </style>
</head>
<body>
    <div class="container pt-4 text-center">
        <div class="div-shadow p-5 d-inline-block rounded">
            <h2 class="w-100 text-center mb-3">Adicionar novo produto</h2>
            <form action={{ route('store.products') }} method="POST" class="form-group m-auto">
                @csrf
                <input type="text" name="nome" class="form-control mb-3" placeholder="Nome" value={{ $product->nome }}>
                <select name="category_id" class="form-select mb-3">
                    @foreach ($categories as $category)
                        <option value={{ $category->id }} @if ($product->category_id === $category->id) selected @endif>{{ $category->nome }}</option>
                    @endforeach
                </select>
                <div style="text-align: right;">
                    <button class="btn btn-success ">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</html>