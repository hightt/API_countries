<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Currency;
use Exception;

class ApiController extends Controller
{
    public function get()
    {
        // $json = file_get_contents('https://restcountries.com/v2/all');
        $json = file_get_contents('data.json');
        $countries = json_decode($json, true);
        $this->addToDB($countries);
    }

    public function addToDB(array $countries)
    {
        foreach ($countries as $country) {
            $countryDb = Country::where('short_name', $country['alpha3Code'])->first();
            $bordersResult = "";
            $timezonesResult = "";

            if (isset($countryDb)) {
                continue;
            }

            if (isset($country['borders'])) {
                $bordersResult = collect($country['borders'])->implode(',');
            }

            if (isset($country['timezones'])) {
                $timezonesResult = collect($country['timezones'])->implode(',');
            }

            $currencies = $country['currencies'] ?? NULL;
            if ($currencies) {
                $currenciesCodes = [];
                foreach ($currencies as $currency) {
                    try {
                        if (!Currency::where('code', $currency['code'])->exists()) {
                            $currency = Currency::create([
                                'code' => $currency['code'],
                                'name' => $currency['name'],
                                'symbol' => $currency['symbol'],
                            ]);
                        }
                        $currenciesCodes[] = $currency['code'];
                    } catch (Exception $e) {
                        echo sprintf("Create Currency exception error: %s", $e->getMessage());
                        break;
                    }
                }
            }


            $currenciesCodesToString = collect($currenciesCodes)->implode(',');
            try {
                Country::create([
                    'name' => $country['name'],
                    'short_name' => $country['alpha3Code'],
                    'capital' => $country['capital'] ?? NULL,
                    'subregion' => $country['subregion'],
                    'region' => $country['region'],
                    'borders' => $bordersResult,
                    'timezones' => $timezonesResult,
                    'flag_url' => $country['flags']['png'],
                    'currencies' => $currenciesCodesToString,
                    'population' => $country['population'],
                ]);
            } catch (Exception $e) {
                echo sprintf("Create Country exception error: %s", $e->getMessage());
                break;
            }
        }
    }
}
