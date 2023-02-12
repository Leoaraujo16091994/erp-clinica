@extends ('layout')

@section('tituloPagina', 'Cadastro de Produtos')
@section('tituloNavegador', 'Cadastro de Produtos')


@section('content')
    <div id="app">
        <div class="col-lg-12">
        <br>
            <formulario-produto :codigo="{{$codigoRandomico}}"></formulario-produto>
                    
        
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group  btn-group-sm me-2" role="group">
                    <button id="btnCadastrar" type="button" onClick="buscarPaciente()" class="btn btn-outline-primary btn-lg" alt="botaoPesquisar"> 
                        Pesquisar </button>
                </div>
        
                <div class="btn-group  btn-group-sm me-2" role="group">
                    <button type="submit" class="btn btn-outline-danger btn-lg" onClick="limparCampos()" alt="botaoLimpar">
                        Limpar</button>       
                </div>
            
                <div class="btn-group  btn-group-sm me-2" role="group" >
                    <button type="submit" class="btn btn-outline-success btn-lg"  onclick="location.href='/produto/create'" alt="botaoCadastrar"> Cadastrar</button>       
                </div>
            </div>
            
            <br>
            <br>
            
        </div>
    <div>

    @endsection


   