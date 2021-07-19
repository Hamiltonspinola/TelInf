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
                            <div class="card-title">
                                <a href="{{ route('dashboard') }}"><img src="img/logo.png" alt=""></a>
                            </div>
                            <a href="{{ route('dashboard') }}"><button class="btn btn-dark">Home</button></a>
                            <h3 class="text-center font-weight-light my-4">Cadastro de cliente</h3></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('cliente.store') }}">
                            @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" name="name">
                                    <label for="name">Nome completo</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="rg" type="text" placeholder="Digite seu RG" name="rg">
                                            <label for="rg">RG</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="cpf" type="text" placeholder="Digite seu CPF" name="cpf">
                                            <label for="cpf">CPF</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-5">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="data_nascimento" type="date" name="data_nascimento">
                                            <label for="data_nascimento">Data de Nascimento</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-floating">
                                            <input class="form-control" id="cpf" type="text" placeholder="Digite seu telefone" name="telefone">
                                            <label for="cpf">Telefone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating">
                                            <select name="estado" id="estado">
                                                <option value="BA">Bahia</option>
                                                <option value="SP">São Paulo</option>
                                            </select><br>
                                            <label for="estado">Selecione seu Estado</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Crie uma senha" name="password">
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirme a senha">
                                            <label for="inputPasswordConfirm">Confirme Senha</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <a class="btn btn-primary btn-block"><button class="d-grid" type="submit">Cadastar Cliente</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
