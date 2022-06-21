@extends('dokar.index')
@section('constrain')
    @foreach ($catagories as $catagory)
        <div class="row ms-3">
            <div class="col m-2">
                @switch($catagory->view)
                    @case('3')
                    @break

                    @case('4')
                    @break

                    @case('5')
                    @break

                    @default
                        <div class="col">
                            <h1>{{ $catagory->name }}
                        </div>
                        <h6>{{ $catagory->describe }}</h6>
                @endswitch

                <div class="col align-self-center">
                    @include('dashboard.view')
                </div>

            </div>
        </div>
    @endforeach
@endsection
