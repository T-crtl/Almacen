<ul class="nav nav-tabs w-100" id="myTab" role="tablist" style="font-size: 12px;">
    @foreach ($rutas as $key => $ruta)
        <li class="nav-item pr-1 text-center radius-top-30" style="width: fit-content !important;">
            <a class="nav-item nav-link @if ($loop->first) active @endif tabModulo"
                id="tab-{{ $loop->index }}" data-toggle="tab" href="#modulo{{ $loop->index }}"
                role="tab">{{ $key }}</a>
        </li>
    @endforeach
</ul>




<div class="tab-content">
    @foreach ($rutas as $key => $ruta)
        <div class="tab-pane @if ($loop->first) show active @endif getViewModulo"
            data-route="{{ $ruta }}" id="modulo{{ $loop->index }}" role="tabpanel">
        </div>
    @endforeach
</div>
