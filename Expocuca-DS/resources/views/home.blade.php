@extends('layouts.app')

@section('content')
    <main class="flex items-center flex-col gap-2 p-2">
        <h2 class="text-xl font-bold">Placar</h2>
        <p class="text-sm p-1 rounded-lg bg-bg-light">O placar lista apenas o melhor integrante da equipe</p>
        <section class="max-w-4xl border-4 border-border rounded-xl overflow-hidden">
            <table class="w-full table-fixed text-center [&_td]:p-2 [&_th]:p-2">
                <thead>
                    <tr class="odd:bg-highlight">
                        <th>Posição</th>
                        <th>Nome</th>
                        {{-- <th>Equipe</th> --}}
                        <th>Pontuação</th>
                    </tr>
                </thead>
                <tbody class="[&_tr]:even:bg-bg-light [&_tr]:odd:bg-bg">
                    <tr>
                        <td>1</td>
                        <td>Fulano 1</td>
                        {{-- <td>Equipe 1</td> --}}
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Fulano 1</td>
                        {{-- <td>Equipe 1</td> --}}
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Fulano 1</td>
                        {{-- <td>Equipe 1</td> --}}
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Fulano 1</td>
                        {{-- <td>Equipe 1</td> --}}
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Fulano 1</td>
                        {{-- <td>Equipe 1</td> --}}
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <a href="/login" class="bottom-12 left-(middle-position) md:bottom-12 md:left-12 absolute p-1 rounded-lg bg-bg-light hover:bg-bg-highlight">Login para admins</a>
    </main>
@endsection