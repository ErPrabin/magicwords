<div class="about-page pb-5">
    <div class="container">
        <div class="row about-list">
            @foreach ($specifications as $specification)
                <div class="col-md-3 p-3">
                    <div class="card p-4">
                        <div class="text-center">
                            <div class="square-entity text-center">
                                <i class="fa {{ $specification->fa_icon }} fa-3x pt-1" ></i>
                            </div>

                        </div>
                        <h4 class="text-center py-3">{{ $specification->title }}</h4>
                        <div class="text-center">
                            <p class="p-0 m-0">
                                {!! strip_tags($specification->description) !!}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
