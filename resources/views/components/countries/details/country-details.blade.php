<div class="details-box ms-2 p-3 mt-2">
    <div class="text-center">
        <img class="img-fluid w-50" src="{{ $country->flag_url }}">
    </div>
    <h4 class="fw-bold text-center mt-2">{{ $country->name }}</h4>
    <hr>
    <div class="row" style="font-size: 20px;">
        <div class="col-12 mb-1">
            <i class="fa-solid fa-person"></i>
            <span>{{ number_format($country->population, 0, ' ', ' ') }}</span>
        </div>
        <div class="col-12 mb-1">
            <i class="fa-solid fa-city"></i>
            <span>{{ $country->capital }}</span>
        </div>
        <div class="col-12 mb-1">
            <i class="fa-solid fa-globe"></i>
            <span>{{ $country->region }}</span>
        </div>
        <div class="col-12 mb-1">
            <i class="fa-solid fa-location-dot"></i>
            <span> {{ $country->subregion }}</span>
        </div>
    </div>
</div>
