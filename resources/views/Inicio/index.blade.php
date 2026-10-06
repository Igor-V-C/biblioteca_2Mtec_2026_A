@extends('layouts.app')

@section('title', 'Início')

@section('content')
    <section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-semibold tracking-tight text-library-text">Aqui é o ínicio</h1>
        <p class="mt-4 max-w-2xl text-base leading-7 text-library-muted">
            Pra modificar essas páginas, vai lá em resources/views que tem todos lá, todo código que você colocar aqui, vai ser exebido pelo
            @ yield('content'), ele em si tá lá no resources/views/layouts/app.blade.php, que é o layout padrão do sistema, e ele é chamado pelo
            @ extends('layouts.app'), que tá no começo do arquivo. Então, se você quiser mudar o layout,
            vai lá no app.blade.php e muda lá, que vai mudar todo o layout em todas essas páginas
        </p>

        <h2>Tailwind Css</h2>
        <p>Primeiramente, é um caos de mexer. Todas as cores estaram no arquivo de configuração do Tailwind (tailwind.config.js). A gente ta usando um preto de cor principal, cinza na nav bar e footer, branco pra texto, e midnight blue para cor secundária</p>
    </section>
@endsection