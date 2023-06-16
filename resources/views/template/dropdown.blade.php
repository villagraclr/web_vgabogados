
<script>
        $(document).ready(function () {
            $('#practice_area_id').on('change', function () {
                var practice_area_id = this.value;
                $("#subject_id").html('');
                $.ajax({
                    url: "{{url('api/fetch-practice-area')}}",
                    type: "POST",
                    data: {
                        practice_area_id: practice_area_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#subject_id').html('<option value="">Seleccione Motivo</option>');
                        $.each(result.subjects, function (key, value) {
                            $("#subject_id").append('<option value="' + value
                                .id + '">' + value.title + '</option>');
                        });
                    }
                });
            });
        });
    </script>