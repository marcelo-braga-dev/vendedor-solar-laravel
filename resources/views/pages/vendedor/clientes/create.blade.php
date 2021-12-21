<x-body title="Cadastrar Cliente" url-button="">
    <form method="POST" action="{{ route('vendedor.clientes.store') }}"> @csrf
        <div class="row">
            <div class="col">
                <x-inputs.input label="Nome" name="nome" type="text" value="" />
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <x-inputs.select label="Estado" name="estado" id="estado">
                    <option></option>
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->sigla }}">{{ $estado->estado }}</option>
                    @endforeach
                </x-inputs.select>
            </div>
            <div class="col-4">
                <x-inputs.select label="Cidade" name="cidade" id="cidade">
                </x-inputs.select>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>

    @include('assets\js\select-cidades-estados')
</x-body>
