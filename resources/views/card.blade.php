<div class="rounded bg-white p-3 my-1">
    <a href="/details/{{ $car->id }}" class="text-dark">
        <h6 class="mb-0 font-weight-bold"> {{ $car->name }}</h6>
        <p class="small text-muted font-weight-semibold">{{ $car->type }}</p>
        <div class="text-center">
            <img src="{{ asset('storage/' . $car->image) }}" alt="">
        </div>
        <div class="d-flex text-muted mt-4 justify-content-between align-items-center text-sm">
            <div class="">
                <i class="fas fa-gas-pump"></i>
                {{ $car->capacity }}L
            </div>
            <div class="">
                <i class="fas fa-compass"></i>
                {{ $car->transmission }}
            </div>
            <div class="">
                <i class="fas fa-user-group"></i>
                {{ $car->seats }} Personnes
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="font-weight-bold">
                CFA {{ $car->price_per_day }} <span class="font-weight-normal small text-muted">/jour</span>
            </div>
            <div class="">
                <button class="btn btn-primary btn-sm">Louer</button>
            </div>
        </div>
    </a>
</div>
