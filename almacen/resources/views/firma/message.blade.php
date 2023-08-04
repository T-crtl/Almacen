    @extends('template')

    @section('title','Firma Success')
        
    @section('contenido')
    <main>
        <div class="container py-4">
            <h2>{{ $msg }}</h2>
            <a href="{{url('firma')}}" class="btn btn-secondary">Regresar</a>
        </div>
        
    </main>
    @endsection