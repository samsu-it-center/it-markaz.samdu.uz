<div class="container mt-4">
    <!-- CATEGORIES -->
    <div class="mb-4 d-flex flex-wrap justify-content-center">
        <button class="btn px-4 py-2 my-1 me-2 {{ is_null($selectedCategory) ? 'btn-primary' : 'btn-outline-primary' }}"
                wire:click="setCategory(null)">
            @lang('crud.all')
        </button>
        @foreach($categories as $category)
            <button
                class="btn px-4 py-2 my-1 mx-1 me-2 {{ $selectedCategory == $category->id ? 'btn-primary' : 'btn-outline-primary' }}"
                wire:click="setCategory({{ $category->id }})">
                {{ $category->{'name_'.$locale} }}
            </button>
        @endforeach
    </div>


    <div class="row">
        @foreach($products as $product)
            <div class="col-md-12 mb-4">
                <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                    <div class="row g-0">
                        <!-- Chap taraf: Ma'lumotlar -->
                        <div class="col-md-6 p-4 d-flex flex-column">
                            <h4 class="card-title fw-bold">{{ $product->{'name_' . $locale} }}</h4>
                            <div>
                                <p class="card-text text-muted">
                                    {!! Str::limit($product->{'description_' . $locale}, 500, '...') !!}
                                </p>
                            </div>
                            <div class="mt-auto">
                                <a href="{{ route('software.show',$product->type ?? 0) }}" target="_blank"
                                   class="btn btn-primary">
                                    @lang('crud.software.view_more') <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- O'ng taraf: Rasm yoki Video -->
                        <div class="col-md-6">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}"
                                     class="img-fluid w-100 object-fit-cover"
                                     alt="Software Image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- LOAD MORE -->
    @if($products->hasMorePages())
        <div class="text-center my-4">
            <button class="btn btn-primary btn-lg px-4 py-2" wire:click="loadMore">
                @lang('crud.more') <i class="ti-reload"></i>
            </button>
        </div>
    @endif
</div>
