<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon" href="https://www.sicoob.com.br/o/sicoob-theme/images/favicon/favicon-96x96.png" type="image/png">
    <title>@yield('title') - Sicoob</title>
</head>


<body>

@section('header')
    <header>
        <div class="px-2 md:px-16 flex items-center justify-between w-screen h-16 text-white bg-sicoob-dark">
            <a href="{{route('form.index')}}"><img width="160" height="35" alt="Sicoob" src="https://www.sicoob.com.br/image/layout_set_logo?img_id=1284127&t=1667326288637"></a>
            <button class="px-3 py-2 text-sm transition duration-500 ease-in-out hover:scale-105 hover:bg-cyan-900 rounded-xl flex md:text-base md:px-5 md:py-2 bg-sicoob-medium-ho" ><a href="{{route('form.index')}}">Reiniciar Formulário</a></button>
        </div>
    </header>
@show

<div class="body-container">
<div class="flex items-start lg:items-center justify-center bg-white lg:bg-gray-100">
    @section('content')
    @show
</div>
</div>


    @stack('scripts')
    <script src="{{ mix('js/app.js') }}" defer></script>

    @section('footer')
        <footer class="text-white px-6 py-12 flex justify-between bg-sicoob-dark">

            <section id="linksuteis">
                <h4> Links Úteis </h4>
                <ol>
                    <li>Sipag</li>
                    <li>Consórcio Sicoob</li>
                    <li>Coopcerto</li>
                    <li>Mercado Financeiro</li>
                </ol>
            </section>

            <section id="nossosCanais">
                <h4>Nossos Canais</h4>
                <ol>
                    <li>Fale Conosco</li>
                    <li>Imprensa</li>
                    <li>Canais de Atendimento</li>
                    <li>Ouvidoria</li>
                    <li>Canais Digitais</li>
                </ol>
            </section>
            <section id="acesseTambem">
                <h4>Acesse também</h4>
                <ol>
                    <li>Segurança</li>
                    <li>Indícios de Ilicitude</li>
                </ol>
            </section>
            <section id="Ouvidoria">
                <h6>Ouvidoria</h6>
                <h4>0800 725 0996</h4>
                <p>Reclamações, elogios e sugestões.</p>
                <p>De segunda a sexta, das 8h às 20h.</p>
                <br>
                <h4>0800 940 0458</h4>
                <p>Deficientes auditivos ou de fala.</p>
                <p>De segunda a sexta, das 8h às 20h.</p>
            </section>
        </footer>
    @show

</body>

</html>
