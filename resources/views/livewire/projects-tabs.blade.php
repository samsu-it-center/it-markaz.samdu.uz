<div class="my-2">
    <!-- TAB BUTTONLAR -->
    <div class="custom-tab customize-tab tabs_creative btn-group mb-4">
        <button class="btn px-4 py-2 {{ $activeTab == 1 ? 'btn-primary' : 'btn-outline-primary' }}"
                wire:click="setTab(1)">
            @lang('crud.about_card.title_1')
        </button>

        <button class="btn px-4 py-2 {{ $activeTab == 2 ? 'btn-primary' : 'btn-outline-primary' }}"
                wire:click="setTab(2)">
            @lang('crud.about_card.title_2')
        </button>
    </div>

    <!-- LOYIHALAR RO'YXATI -->
    <div class="row">
        @foreach($projects as $project)
            <div class="col-md-12 mb-4">
                <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                    <div class="row g-0">
                        <!-- Rasm -->
                        <div class="col-md-6">
                            <img src="{{ asset('storage/' . $project->image) }}"
                                 alt="Project Image"
                                 class="img-fluid rounded-start w-100 h-100 object-fit-cover"
                                 style="max-height: 150px;">
                        </div>
                        <!-- Ma'lumotlar -->
                        <div class="col-md-6">
                            <div
                                class="card-body d-flex justify-content-center justify-items-center align-items-center">
                                <div>
                                    <h4 class="card-title fw-bold">{{ $project->{'title_'.session('locale') ?? 'uz'} }}</h4>
                                    <p class="card-text text-muted">{!! $project->{'description_'.session('locale') ?? 'uz'} !!}</p>
                                    <a href="{{ route('start-up.show', $project->id) }}"
                                       class="btn btn-primary">
                                        @lang('crud.software.views') <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- LOAD MORE -->
    @if($projects->hasMorePages())
        <div class="text-center mt-4">
            <button class="btn btn-primary btn-lg px-4 py-2" wire:click="loadMore">
                @lang('crud.more') <i class="ti-reload"></i>
            </button>
        </div>
    @endif
</div>
