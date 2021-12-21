<x-body title="Gerar Proposta - Sistema Convencional" url-button="">
    <div class="row">
        <div class="col-md-6">
            <x-inputs.select label="Cliente" name="cliente">
                <option></option>
                @foreach ($clientes as $item)
                    <option value="{{ $item->id }}">{{ $item->nome }}</option>
                @endforeach
            </x-inputs.select>
        </div>
        <div class="col-6 col-md-3">
            <x-inputs.select label="Estado" name="estado" id="estado">
                <option></option>
                @foreach ($estados as $estado)
                    <option value="{{ $estado->sigla }}">{{ $estado->estado }}</option>
                @endforeach
            </x-inputs.select>
        </div>
        <div class="col-6 col-md-3">
            <x-inputs.select label="Cidade" name="cidade" id="cidade" />
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-md-3">
            <x-inputs.select label="Estrutura" name="estrutura" id="estrutura">
                <option></option>
                @foreach (get_estruturas() as $item)
                    <option value="{{ $item->id }}">{{ $item->nome }}</option>
                @endforeach
            </x-inputs.select>
        </div>
        <div class="col-6 col-md-3">
            <x-inputs.select label="Tensão" name="tensao" id="tensao">
                <option></option>
                <optgroup label="220V">
                    <option value="220">220V / Bifásico</option>
                    <option value="220">220V / Trifásico</option>
                </optgroup>
                <optgroup label="380V">
                    <option value="380">380V / Bifásico</option>
                    <option value="380">380V / Trifásico</option>
                </optgroup>
            </x-inputs.select>
        </div>
        <div class="col-6 col-md-3">
            <x-inputs.select label="Orientação da Instalação" name="orientacao" id="orientacao">
                <option></option>
                <option value="bifasica">Norte</option>
                <option value="trifasica">Sul</option>
            </x-inputs.select>
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-md-3">
            <x-inputs.input-box-right label="Média Consumo Mensal" box="kWh/mês" type="number" name="consumo"
                id="consumo" value="" />
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col text-center">
            <button class="btn btn-primary" id="pesquisar-kits">Avançar</button>
        </div>
    </div>

    @push('js')
        <script>
            $(function() {
                $('#pesquisar-kits').click(function() {
                    $.get(
                        "{{ route('vendedor.orcamentos.calc-convencional') }}", {

                            'cidade': $('#cidade').val(),
                            'estrutura': $('#estrutura').val(),
                            'tensao': $('#tensao').val(),
                            'orientacao': $('#orientacao').val(),
                            'consumo': $('#consumo').val(),
                            'verificar_trafo': true
                        },
                        function(result) {
                            //var obj = jQuery.parseJSON(result);
                            console.log(result);
                            //criaCartao(obj);
                        });
                });
            })
        </script>
    @endpush
    @include('assets\js\select-cidades-estados')
</x-body>
