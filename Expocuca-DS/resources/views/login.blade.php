@extends('layouts.app')

@section('content')
    <main class="flex items-center flex-col gap-2 p-2">
        <h2 class="text-xl font-bold">Login para Administradores</h2>
        <form class="max-w-xl border-4 border-border rounded-xl overflow-hidden p-4 flex flex-col gap-8" method="POST" action="auth">
            <p class="text-lg font-bold text-center">Caso seja um Administrador, entre com o nome de usuário e senha fornecidos para você</p>
            <section class="flex flex-col gap-2">
                @csrf
                <p>Nome de usuário</p>
                <input type="text" placeholder="Usuário" class="block focus:outline-2 focus:outline-offset-2 focus:outline-highlight bg-bg-light rounded-xl p-2">
            </section>
            <section class="flex flex-col gap-2">
                <p>Senha</p>
                <input type="password" placeholder="Senha" class="block focus:outline-2 focus:outline-offset-2 focus:outline-highlight bg-bg-light rounded-xl p-2">
            </section>
            <a href="auth" class="mx-auto"><button class="py-2 px-4 bg-highlight rounded-xl font-semibold hover:bg-highlight-hover cursor-pointer">Logar</button></a>
        </form>
        <a href="/" class="bottom-12 left-(middle-position) md:bottom-12 md:left-12 absolute p-1 rounded-lg bg-bg-light hover:bg-bg-highlight">Voltar para o placar</a>
    </main>
@endsection