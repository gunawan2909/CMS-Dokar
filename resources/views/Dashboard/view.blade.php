@switch($catagory->view)
    @case('1')
        <div class="row row-cols-4">
            @foreach ($catagory->content as $item)
                <div class="card m-1 " style="width: 18rem;">
                    <div class="row m-2">
                        <div class="col-3">
                            <img src="{{ asset('storage/' . $item->directory) }}" class="d-inline">
                        </div>
                        <div class="col">
                            <h4 class="">{{ $item->name }}</h4>
                        </div>
                    </div>

                    <p>{!! $item->body !!} </p>

                </div>
            @endforeach

        </div>
    @break

    @case('2')
        <div class="row row-cols-4 bg-info">
            @foreach ($catagory->content as $item)
                <div class="mt-3">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $item->directory) }}">

                    </div>

                    <h5 class="text-center">{{ $item->name }}</h5>
                    <p class="text-center">{!! $item->body !!} </p>
                </div>
            @endforeach

        </div>
    @break

    @default
@endswitch
