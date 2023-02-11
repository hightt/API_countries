<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /* short_name == alpha3Code API */
    protected $fillable = ['name', 'short_name', 'capital', 'subregion', 'region', 'borders', 'timezones', 'flag_url', 'currencies', 'population'];
    protected $dates = ['created_at','updated_at'];


    public function getBorderCountries()
    {
        return Country::whereIn('short_name', explode(',', $this->borders))->get();
    }

    public function getCountryCurrencies()
    {
        return Currency::whereIn('code', explode(',', $this->currencies))->get();
    }
}
