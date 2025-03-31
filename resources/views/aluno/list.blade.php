@extends('base') <!-- oq for colocado abaixo vai ir pra base (conteudo vai lá pra base) -->
@section ('titulo', 'Listagem Aluno')
@section('conteudo')

    <h3>Listagem de Alunos</h3>


   <a href="{{url('aluno/create')}}">Novo</a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>CPF</td>
                <td>Telefone</td>
                <td>Ação</td>
                <td>Ação</td>
            </tr>
        </thead>
        <body>

            @foreach ($dados as $item)

            <tr>
                <td><?php echo $item ->id; ?></td><!-- carrega o id  -->

                <td>{{$item->id }}</td>
                <td>{{$item->nome }}</td>
                <td>{{$item->cpf }}</td>
                <td>{{$item->telefone }}</td>
                <td>
                    <a href="{{route('aluno.edit',$item->id)}}">Editar</a>
                </td>
                <td>
                    <form action="{{route('aluno.destroy', $item->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit"
                        onclick="return confirm ('Deseja remover o registro?')">Remover</buttom>

                    </form>
                </td>
            </tr>
            @endforeach
        </body>
    </table>

@stop <!-- fecha conteudo -->
