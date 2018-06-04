@extends('template')

@section('conteudo')

    @if(session()->has('message'))
        <div class='row'>
            <div class='col-sm-2'></div>
            <div class='col-sm-12'>
                <div class='alert alert-success'> {{ session('message') }} </div>
            </div>
            <div class='col-sm-2'></div>
        </div>
    @endif

    @if($errors->any())

        <div class='row'>
            <div class='col-sm-2'></div>
            <div class='col-sm-12'>
                @foreach ($errors->all() as $error)
                    <div class='alert alert-danger'> {{ $error }} </div>
                @endforeach
            </div>
            <div class='col-sm-2'></div>
        </div>

    @endif

    <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-8'>
            
            <form action='/register/store' method='POST'>
                {{ csrf_field() }}
                <div class="form-group">
                    <Span> Nome Completo </span>
                    <input class='form-control' type='text' name='register_name'></input>
                </div>

                <div class="form-group">
                    <span> Endereço </span>
                    <textarea class='form-control'  name='register_adress'></textarea>
                </div>

                <div class="form-group">
                    <span> Contato </span>
                    <textarea class='form-control'  name='register_contact'></textarea>
                </div>

                <div class="form-group">
                    <span> Cadastro Tipo </span>
                    <select class='form-control'  name='register_type'>
                        <option value='0'> Func. Adm </option>
                        <option value='1'> Medico </option>
                        <option value='2'> Paciente </option>
                    </select>
                </div>

                <div class='form-group'>
                    <input type='submit' class='btn btn-info' value='Cadastrar'> </input>
                    <input type='reset' class='btn btn-danger' value='Limpar'> </input>
                </div>
            </form>
        </div>
        <div class='col-sm-2'></div>
    </div>
@endsection