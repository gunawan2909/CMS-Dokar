@extends('dokar.index')
@section('constrain')
    @foreach ($catagories as $catagory)
        <div class="container">
            <h1>{{ $catagory->name }}
        </div>

        <h6>{{ $catagory->describe }}</h6>

        <div class="col">
            @foreach ($catagory->content as $item)
                <div class="row m-2">
                    <div class="border-bottom">
                        <div class="row m-2">
                            <div class="col ">
                                <p class="">{{ $item->name }}</p>
                            </div>
                            <div class="col-1 rounded-4 me-auto" style="background-color: #ffbe31">
                                <p class="text-center">
                                    {{ pathinfo('storage/' . $item->directory, PATHINFO_EXTENSION) }}
                                </p>
                            </div>
                            <div class="col"></div>
                            <div class="col">
                                <a class="btn btn-success " href="{{ Route('hukum.download', $item->id) }}"
                                    role="button">Download</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endforeach
@endsection
