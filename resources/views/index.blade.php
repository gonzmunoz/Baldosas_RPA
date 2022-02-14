@extends('layout')

@section('content')
<div class="section-full bg-white content-inner">
    <div class="container">
        <div class="section-head text-center ">
            <h2 class="text-uppercase">Nuestras <span class="text-primary">Baldosas</span></h2>
        </div>
        <div class="section-content ">
            <div class="row">
                @foreach($floorTiles as $floorTile)
                <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                    <div class="dlab-box">
                        <div class="dlab-media"><img src="{{ asset('images/baldosas') . '/' . $floorTile['imagen'] }}" alt=""></a></div>
                        <div class="dlab-info p-a20 text-center">
                            <div class="p-lr20">
                                <h4 class="m-a0 bg-primary service-head">
                                    @if(session('userLogged'))
                                    {{ $floorTile["nombre"] }}
                                    @else
                                    <a href="{{ route('askBudget', $floorTile['id']) }}" class="text-white">{{ $floorTile["nombre"] }}</a>
                                    @endif
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection