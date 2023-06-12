<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>

@if(Session::has('mensaje')) 
                <div class="alert alert-{{ Session::get('css') }} alert-dismissible fade show" role="alert">
                   
                        {{ Session::get('mensaje') }}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
  
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif