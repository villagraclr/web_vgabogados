<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>
@props(['practice_areas'])
<section class="bg-02-b contact-01">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="head-001">
                        <h2>Comuníquese con nosotros</h2>
                        <p>¿Necesitas asesoramiento legal o tienes alguna pregunta legal urgente? Estamos aquí para ayudarte. Por favor, tómate un momento para completar nuestro formulario de contacto y uno de nuestros abogados expertos se pondrá en contacto contigo a la brevedad posible.</p>
                    </div>
                </div>
            </div>
            <div class="row my_row_y mar-01">
                <x-flash />
                <form action="{{route('send')}}" method="post" name="contact_form" id="contact_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Ingrese Nombre" class="form-control" value="{{old('name')}}"> 
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Ingrese Email" class="form-control" value="{{old('email')}}"> 
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                            <input type="phone" name="phone" id="phone" placeholder="Ingrese Teléfono" class="form-control" value="{{old('phone')}}"> 
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select name="practice_area_id" id="practice_area_id" class="form-control">
                                <option value="">Seleccione área de práctica</option>
                                if(isset($practice_areas) && count($practice_areas)>0){
                                    @foreach ($practice_areas as $practice_area)
                                        <option value="{{$practice_area['id']}}" @selected(old('practice_area_id') == $practice_area['id'])>{{$practice_area['title']}}</option>
                                    @endforeach
                                }
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select name="subject_id" id="subject_id" class="form-control">
                                    <option value="">Seleccione Motivo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                            <input type="text" name="subject" id="subject" placeholder="Asunto" class="form-control" value="{{old('subject')}}"> 
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="8" required="" data-error="Escriba mensaje" placeholder="Describa su caso" class="form-control">
                                {{old('subject')}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="btn-001">
                                {{csrf_field()}}
                                <input type="hidden" name="practice_area_title" id="practice_area_title" value="{{old('practice_area_title')}}">
                                <input type="hidden" name="subject_title" id="subject_title" value="{{old('subject_title')}}">
                                <input type="submit" value="Enviar" class="btn btn-send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="mab-01">
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.606368902236!2d-70.6566682848451!3d-33.43350538077895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5703c10e3f1%3A0xfa766c2889f439eb!2sVG+ABOGADOS+ASOCIADOS!5e0!3m2!1ses-419!2scl!4v1560468764664!5m2!1ses-419!2scl" height="450" frameborder="0" allowfullscreen=""></iframe>
    </section>