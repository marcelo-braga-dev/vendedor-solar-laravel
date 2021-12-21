@extends('layouts.app')

@section('content')
    <x-layout.body.main title="Cadastrar Kit Fotovoltaico" url-button="">
        <form method="POST" action="{{ route('admin.kits.store') }}"> @csrf
            <div class="row">
                <div class="col">
                    <x-inputs.input label="Modelo do Kit Fotovoltaico" type="text" name="modelo" value="" required />
                </div>
            </div>
            <hr>

            {{-- Inversor --}}
            <div class="row">
                <div class="col-md-6">
                    <x-inputs.select label="Inversor" name="inversor" required>
                        <option value=""></option>
                        @foreach ($produtos as $produto)
                            @if ($produto->tipo == 'inversor')
                                <option value="{{ $produto->id }}">
                                    {{ $produto->nome }} [{{ ucfirst($produto->categoria) }}]
                                </option>
                            @endif
                        @endforeach
                    </x-inputs.select>
                </div>
                <div class="col-md-6">
                    <x-inputs.select label="Painel" name="potencia_painel" required>
                        <option value=""></option>
                        @foreach ($paineis as $indice => $painel)
                            <optgroup label="{{ $marcas[$indice] }}">
                                @foreach ($painel as $potencia)
                                    <option value="{{ $potencia['id'] }}">
                                        {{ $marcas[$indice] }} [{{ $potencia['potencia'] }} Wp]
                                    </option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </x-inputs.select>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-3">
                    <x-inputs.input-box-right label="Potência do Kit" name="potencia" type="number" box="kWp" step="0.001"
                        value="" required />
                </div>
                <div class="col-md-3">
                    <x-inputs.select label="Fornecedor" name="fornecedor" required>
                        <option></option>
                        @foreach ($fornecedores as $fornecedor)
                            <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                        @endforeach
                    </x-inputs.select>
                </div>
                <div class="col-md-3">
                    <x-inputs.input-box-left label="Preço do Fornecedor" type="text" box="R$" name="preco_fornecedor"
                        step="0.01" data-mask="000.000.000,00" data-mask-reverse="true" value="" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <x-inputs.select label="Estrutura do Kit" name="estrutura" required>
                        <option value=""></option>
                        @foreach ($estruturas as $estrutura)
                            <option value="{{ $estrutura->id }}">{{ $estrutura->nome }}</option>
                        @endforeach
                    </x-inputs.select>
                </div>
                <div class="col-md-3">
                    <x-inputs.select label="Tensão do Kit" name="tensao" required>
                        <option value=""></option>
                        <option value="220">220V</option>
                        <option value="380">380V</option>
                    </x-inputs.select>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col">
                    <x-inputs.textarea label="Produtos do Kit" name="produtos" value="" rows="10" required />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <x-inputs.textarea label="Observações" name="observacoes" value="" rows="2" />
                </div>
            </div>
            <div class="row p-4">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">CADASTRAR KIT</button>
                </div>
            </div>
        </form>
        {{-- @error('modelo')
            <pre>{{ $message }}</pre>
        @enderror --}}
    </x-layout.body.main>
@endsection
@push('js')
    <script src="/assets/js/data-mask.js"></script>
@endpush
