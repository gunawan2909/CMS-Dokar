@switch($catagory->view)
    @case('1')
        <div class="row row-cols-4">
            @foreach ($catagory->content as $item)
                <div class="card m-2 border border-4 border-start-0 border-top-0 rounded-5" style="width: 18rem;">
                    <div class="row m-2">
                        <div class="col-3">
                            <img src="{{ asset('storage/' . $item->directory) }}" class="d-inline" style=" width: 60px">
                        </div>
                        <div class="col-7 m-2">
                            <h4 class="">{{ $item->name }}</h4>
                        </div>
                    </div>

                    <p>{!! $item->body !!} </p>

                </div>
            @endforeach

        </div>
    @break

    @case('2')
        <div class="row row-cols-4 rounded-5" style="background-color: #8EB1C7;">
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

    @case('3')
        <div class="d-flex justify-content-center">
            <div class="col-8">
                @foreach ($catagory->content as $item)
                    <div class="row justify-content-md-center">
                        <div class="col-lg-5 -ml-1">
                            <img src="{{ asset('storage/' . $item->directory) }}" style="width: 250px">
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <h1 class="text-Start">{{ $item->name }}</h1>
                            </div>
                            <div class="row justify-content-md-center">
                                <p class="text-start">{!! $item->body !!} </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @break

        @case('4')
            <div class="d-flex justify-content-center">
                <div class="row">
                    @foreach ($catagory->content as $item)
                        <div class="col m-2 border border-5 border-start-0 border-top-0 rounded-circle pb-4 pt-4">
                            <div class="row justify-content-center">

                                <div class="col-12 ">
                                    <div class="text-center">
                                        <img class="rounded-3" src="{{ asset('storage/' . $item->directory) }}"
                                            style="width: 70px; height :110px">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <p class="text-center">{{ $item->name }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @break

            @case('5')
                <div class="row">
                    @foreach ($catagory->content as $item)
                        <p class="text-start fw-bold fs-1">{{ $item->name }}</p>
                        <p class="">{!! $item->body !!}</p>
                    @endforeach

                </div>
            @break

            @case('6')
                <div class="row">
                    @foreach ($catagory->content as $item)
                        <div class="col m-2 p-3 rounded-4" style="background: rgba(142, 177, 199, 0.5)">
                            <div class="flex">
                                <p class="fs-3 fw-bold">{{ $item->name }}</P>
                                <p> {!! $item->body !!} </p>
                                <div class="align-self-stretch">
                                    <img class="rounded float-end " src="{{ asset('storage/' . $item->directory) }}"
                                        style="width: 150px; height :150px">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @break

            @case('7')
                <<div class="d-flex justify-content-center">
                    <div class="row">
                        @foreach ($catagory->content as $item)
                            <div class="col m-2 border border-5 border-start-0 border-top-0 rounded-circle pb-4 pt-4">
                                <div class="row justify-content-center">

                                    <div class="col-12 ">
                                        <div class="text-center">
                                            <img class="rounded-3" src="{{ asset('storage/' . $item->directory) }}"
                                                style="width: 70px; height :110px">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="text-center">{{ $item->name }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @break

                @case('8')
                    <div class="row">
                        @foreach ($catagory->content as $item)
                            <p class="text-start fw-bold fs-3">{{ $item->name }}</p>
                            <img class="rounded" src="{{ asset('storage/' . $item->directory) }}" style=" width: 100%;
                                                                                            height: auto;">
                        @endforeach

                    </div>
                @break

                @default
            @endswitch
