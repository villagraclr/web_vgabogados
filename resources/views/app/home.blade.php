@props(['practice_areas'])
@extends('../template.layout')
@section('title','Inicio')
@section('content')
    <x-slider/>
    <x-about/>
    <x-service/>
    <x-contact :practice_areas="$practice_areas"/>
    @push('js')
        <script>
            $(document).ready(function () {
                $('#practice_area_id').on('change', function () {
                    var practice_area_id = this.value;
                    var practice_area_title = "";
                    if(practice_area_id > 0)
                    {
                        practice_area_title = $( "#practice_area_id option:selected" ).text();
                    }
                    $("#practice_area_title").val(practice_area_title);
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
                $('#subject_id').on('change', function () {
                    var subject_id = this.value;
                    var subject_title = "";
                    if(subject_id > 0)
                    {
                        subject_title = $( "#subject_id option:selected" ).text();
                    }
                    $("#subject_title").val(subject_title);
                });
            });
        </script>
    @endpush
@endsection