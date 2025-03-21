@extends('base') <!-- oq for colocado abaixo vai ir pra base (conteudo vai lá pra base) -->
@section ('titulo', 'Formulário Aluno')
@section('conteudo')

    <h3>Formulário Aluno</h3>


    <form action="{{route('aluno.store')}}" method="post">
        @csrf  <!-- criptografia pro formulario, vê se o formulario enviado é da propria aplicação ou ta sendo enviado por terceiros -->

        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>

        <label for="">CPF</label><br>
        <input type="text" name="cpf"><br>

        <label for="">Telefone</label><br>
        <input type="text" name="telefone"><br>

        <button type="submit">Salvar</button><br>
        
    </form>


@stop
