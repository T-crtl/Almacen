@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Peopledatabase
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Agregar') }} Personal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('peopledatabases.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('peopledatabase.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
