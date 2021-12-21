@push('js')
        <script>
            $(function() {
                var cidades = {{ Js::from($cidades) }};

                $('#estado').change(function() {
                    var estado = $(this).val();
                    var options = '<option></option>';

                    $.each(cidades, function(index, value) {
                        if (index == estado) {
                            $.each(value, function(index, cidade) {
                                options +=
                                    '<option value="' + cidade.id + '">' +
                                    cidade.cidade +
                                    '</option>';
                            });
                        }
                    });

                    $('#cidade').children().remove();
                    $('#cidade').append(options);
                });
            })
        </script>
    @endpush