<table class="table table-hover">
    <thead>
        <tr>
            @foreach ($headers as $header)
                <th scope="col">{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @forelse ($countries as $country)
            <tr data-url="{{ route('countries.show', $country->id) }}" style="cursor: pointer;">
                <td class="col-3">{{ $country->name }}</td>
                <td class="col-3"><img class="img-fluid" src="{{ $country->flag_url }}" alt="" width="45px"></td>
                <td class="col-3">{{ $country->region }}</td>
                <td class="col-3">{{ number_format($country->population, 0, ' ', ' ') }}</td>
            </tr>
        @empty
            <h5>No data</h5>
        @endforelse
    </tbody>
</table>


<script>
    $('tbody tr').click(function() {
        window.location= $(this).data('url');
    });
</script>
