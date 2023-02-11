@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <x-countries.details.country-details :country="$country" />
        </div>
        <div class="col-lg-4">
            <x-countries.details.borders :bordersCountries="$country->getBorderCountries()" />
        </div>
        <div class="col-lg-4">
            <x-countries.details.currencies :currencies="$country->currencies" />
        </div>
    </div>
@endsection
