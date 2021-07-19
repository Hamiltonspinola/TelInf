<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <div class="row">

                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <a href="{{ route('dashboard') }}"><img src="img/logo.png" alt=""></a>
                                </div>
                                <div class="col-md-4"></div>

                                </div>
                        <div class="card-body">
                            
                            <table class="table table-condensed">

                                <thead>
                        
                                    <tr>
                                        <th>Nome do Cliente</th>
                                        <th>E-mail</th>
                                        <th>Ações</th>
                                    </tr>
                        
                                </thead>
                                
                                <tbody>
                                    <a href="{{ route('dashboard') }}"><button class="btn btn-dark">Cadastrar Cliente</button></a>
                        
                                    
                        
                                    <tr>
                                        <td>
                                            {{ $user->name }} - 
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>      
                                        <td>                                            
                                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('user.edit', $user->id) }}"><button class="btn btn-success">Editar</button></a>
                                                <button class="btn btn-success" type="submit">Excluir</button>
                                            </form>
                                        </td>       
                                    </tr>
                                     
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>