@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Campus
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Agregar') }} Plantel</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('campuses.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('campus.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
