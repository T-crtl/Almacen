<ul class="nav nav-tabs w-100" id="myTab" role="tablist" style="font-size: 12px;">
    <li class="nav-item pr-1 text-center radius-top-30" style="width: fit-content !important;">
        <a class="nav-item nav-link active tabModulo" id="tab-1" data-toggle="tab" href="#modulo1"
            role="tab">Resguardos</a>
    </li>
    <li class="nav-item pr-1 text-center radius-top-30" style="width: fit-content !important;">
        <a class="nav-item nav-link tabModulo" id="tab-2" data-toggle="tab" href="#modulo2"
            role="tab">Traslados</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane show active getViewModulo" data-route="{{ route('consultas.index') }}" id="modulo1"
        role="tabpanel">
    </div>
    <div class="tab-pane getViewModulo" data-route="{{ route('trasladoArticulo.index') }}" id="modulo2"
        role="tabpanel"></div>
</div>
