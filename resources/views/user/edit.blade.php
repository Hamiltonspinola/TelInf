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
                          @include('includes.alerts')                            
                          <div class="row">

                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <a href="{{ route('dashboard') }}"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="col-md-4"></div>

                            </div>
                            <a href="{{ route('dashboard') }}"><button class="btn btn-dark">Home</button></a>
                            <h3 class="text-center font-weight-light my-4">Editar Usuário</h3></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('PUT')
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" name="name" value="{{ $user->name }}">
                                    <label for="name">Nome completo</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="email" type="email" placeholder="Digite seu email" name="email" value="{{ $user->email }}">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Crie uma senha">
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <a class="btn btn-primary btn-block"><button class="d-grid" type="submit">Atualizar</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
