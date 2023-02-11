<div class="details-box ms-2 p-3 mt-2">
    <div class="row">
        <h5>Border countries</h5>
    </div>
    <hr>
    <div class="row" style="font-size: 20px;">
        @foreach ($bordersCountries as $borderCountry)
            <div class="borderCountry pt-2 pb-2" data-url="{{ route('countries.show', $borderCountry->id) }}">
                <div class="row">
                    <div class="col-8">{{ $borderCountry->name }}</div>
                    <div class="col-4"><img class="img-fluid" width="45px" src="{{ $borderCountry->flag_url }}"></div>
                </div>
            </div>
            <hr class="mt-2" style="opacity: 0.09;">
        @endforeach
    </div>
</div>


<script>
    $('.borderCountry').click(function() {
        window.location = $(this).data('url');
    });
</script>
