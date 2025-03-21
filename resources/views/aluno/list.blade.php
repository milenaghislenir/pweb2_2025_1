@extends('base') <!-- oq for colocado abaixo vai ir pra base (conteudo vai lá pra base) -->
@section ('titulo', 'Listagem Aluno')
@section('conteudo')

    <h3>Listagem de Alunos</h3>

    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
            </tr>
        </thead>
        <body>
            <tr>
                <td>1</td>
                <td>Teste</td>
            </tr>
        </body>
    </table>

@stop <!-- fecha conteudo -->
