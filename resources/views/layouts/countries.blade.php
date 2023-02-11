@extends('layouts.index')

@section('content')
    <div class="row">
        <x-details-box :countries="$countries"></x-details-box>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-3 m-0 p-0">
            <div class="main-content ms-2 me-2 p-3">
                <x-countries.countries-table :headers="['Country', 'Flag', 'Region', 'Population']" :countries="$countries"></x-countries.countries-table>
            </div>
        </div>
    </div>
@endsection
