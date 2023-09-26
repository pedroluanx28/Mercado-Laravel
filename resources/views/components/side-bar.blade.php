<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    #sidebar {
        width: 70px;
        min-height: 100vh;
        max-height: 100%;
        transition: 300ms linear;
    }

    #sidebar a {
        text-decoration: none;
    }

    .span-sidebar {
        display: none;
        margin-left: 4px;
    }

    /* .icons {
        width: 50px;
        margin: 0;
        padding: 0;
    } */
</style>

<div class="bg-primary text-white fw-bold px-2" id="sidebar">
    <ul class="list-group">
        <a href={{ route('dashboard') }}>
            <li class="list-group-item text-white bg-transparent border-0 text-nowrap d-flex align-items-center">
                <x-feathericon-shopping-cart />
                <span class="span-sidebar">
                    Produtos
                </span>
            </li>
        </a>

        <a href={{ route('index.categories') }}>
            <li class="list-group-item text-white bg-transparent border-0 text-nowrap d-flex align-items-center">
                <x-feathericon-archive />
                <span class="span-sidebar">
                    Categorias
                </span>
            </li>
        </a>

        <a href={{ route('form.products') }}>
            <li class="list-group-item text-white bg-transparent border-0 text-nowrap d-flex align-items-center">
                <x-feathericon-folder-plus />
                <span class="span-sidebar">
                    Novo Produto
                </span>
            </li>
        </a>

        <a href={{ route('form.categories') }}>
            <li class="list-group-item text-white bg-transparent border-0 text-nowrap d-flex align-items-center">
                <x-feathericon-folder-plus />
                <span class="span-sidebar">
                    Nova Categoria
                </span>
            </li>
        </a>
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let sidebar = document.querySelector('#sidebar');


    function isOpen() {
        if (sidebar.style.width != '200px') {
            sidebar.style.width = '200px';
            $('.span-sidebar').show();
        } else {
            sidebar.style.width = '70px';
            $('.span-sidebar').hide();
        }
    }
</script>