    @extends('template')

    @section('title','Area Success')
        
    @section('contenido')
    <main>
        <div class="container py-4">
            <h2>{{ $msg }}</h2>
            <a href="{{url('area')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </main>
    @endsection