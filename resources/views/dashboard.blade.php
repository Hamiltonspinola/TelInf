<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('user.edit', $usuario->id) }}"><button class="btn btn-dark" style="width: 45%;"> Editar Usuário</button></a>
            <a href="{{ route('user.show', $usuario->id) }}"><button class="btn btn-danger" style="width: 45%;"> Dados do Usuário</button></a>
            </div>                                    
        </div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="card shadow-lg border-0 rounded-lg mt-5">                        
                        <div class="card-header">                            
                            <div class="card-title">                                
                                <div class="row">

                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <a href="{{ route('dashboard') }}"><img src="img/logo.png" alt=""></a>
                                </div>
                                <div class="col-md-4"></div>

                                </div>
                                
                                
                            </div>
                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <a href="{{ route('cliente.create') }}"><button class="btn btn-primary" style="width: 45%;"> Cadastrar Cliente</button></a>
                                    <a href="{{ route('cliente.show') }}"><button class="btn btn-warning" style="width: 45%;"> Consultar Clientes Cadastrados</button></a>
                                </div>
                                <div class="col-md-2"></div>

                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
