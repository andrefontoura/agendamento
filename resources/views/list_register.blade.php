@extends('template')

@section('conteudo')
    <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-8'>
            <a href='{{ url('/register/create') }}'>
                <input class='btn btn-info' value='Adicionar novo Contato'></input>
            </a>
            <hr>

            <table id='datatable-test' class='display'>
                <thead>
                    <tr>
                        <th width='60%'> Nome </th>
                        <th>  </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($register as $dados)
                        <tr>
                            <td>
                                {{ $dados->register_name }}
                            </td>

                            <td>
                                <a href='#{{ $dados->id_register }}'> <input class='btn btn-success' value='Editar'></input> </a>
                                <a href='#{{ $dados->id_register }}'> <input class='btn btn-danger' value='Excluir'></input> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>
        <div class='col-sm-2'></div>
    </div>
@endsection