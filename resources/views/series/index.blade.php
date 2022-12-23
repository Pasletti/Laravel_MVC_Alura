<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>

    <!-- @{{ nome }} --><!-- o blade ignora o parse e passa o literal -->

    <script>
        // const series = {{ Js::from($series) }};
    </script>
</x-layout>