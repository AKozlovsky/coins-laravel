<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListsController extends Controller
{
    public function continents()
    {
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        $breadcrumbs = [
            ['link' => "", 'name' => __("locale." . "Home")],
            ['name' => __("locale." . "Lists")],
            ['name' => __("locale." . "By continents")]
        ];

        return view('pages.lists.continents', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
    }

    public function countries()
    {
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        $breadcrumbs = [
            ['link' => "", 'name' => __("locale." . "Home")],
            ['name' => __("locale." . "Lists")],
            ['name' => __("locale." . "By countries")]
        ];

        $countries = $this->_getCountries();

        return view('pages.lists.countries', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs, 'countries' => $countries]);
    }

    public function otherCriteria()
    {
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        $breadcrumbs = [
            ['link' => "", 'name' => __("locale." . "Home")],
            ['name' => __("locale." . "Lists")],
            ['name' => __("locale." . "By other criteria")]
        ];

        $data = [
            "monarchs" => $this->_getValuesByColumn("other_criteria", "monarch"),
            "reign_periods_from" => $this->_getValuesByColumn("other_criteria", "reign_period_from"),
            "reign_periods_to" => $this->_getValuesByColumn("other_criteria", "reign_period_to"),
            "years_mintage" => $this->_getValuesByColumn("other_criteria", "year_mintage"),
            "names_of_currency" => $this->_getNamesOfCurrency(),
            "centuries" => $this->_getValuesByColumn("other_criteria", "century"),
            "metals" => $this->_getValuesByColumn("other_criteria", "metal"),
            "qualities" => $this->_getValuesByColumn("other_criteria", "quality")
        ];

        return view('pages.lists.other-criteria', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs, 'data' => $data]);
    }

    public function list($continent, $country = null)
    {
        $name = $link = '';

        if ($continent != "null") {
            $link = "continents";
            $name = "By continents";
            $continent = $this->_setUpperFirst($continent);
        } elseif ($country != null) {
            $link = "countries";
            $name = "By countries";
            $country = $this->_setUpperFirst($country);
        }

        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        $breadcrumbs = [
            ['link' => "", 'name' => __("locale." . "Home")],
            ['name' => __("locale." . "Lists")],
            ['link' => $link, 'name' => __("locale." . $name)],
            ['name' => __("countries." . ($continent != "null" ? $continent : ($country != null ? $country : "")))]
        ];

        $headerColumns = array('Currency', 'Symbol', 'Value');

        if ($continent != "null")
            $data = $this->_getDataByContinent($continent);
        elseif ($country != null) {
            $data = $this->_getDataByCountry($country);
            array_unshift($headerColumns, 'Country');
        }

        return view('pages.lists.list', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs, 'headerColumns' => $headerColumns, 'data' => $data, 'continent' => $continent]);
    }

    private function _setUpperFirst($name)
    {
        $name = str_replace("-", " ", $name);
        $name = array_map(function ($a) {
            return ucfirst($a);
        }, explode(' ', $name));
        $name = implode(" ", $name);
        return $name;
    }

    private function _getDataByContinent($continent)
    {
        return DB::table('collections')
            ->join('continents', 'collections.continent', '=', 'continents.code')
            ->join('countries', 'collections.country', '=', 'countries.code')
            ->join('items', 'collections.item', '=', 'items.id')
            ->join('currencies', 'items.currency', '=', 'currencies.code')
            ->join('numerical_values', 'items.numerical_value', '=', 'numerical_values.value')
            ->select('countries.country_name AS country', 'currencies.name AS currency', 'currencies.symbol', 'numerical_values.value')
            ->where('continents.continent_name', '=', $continent)
            ->get();
    }

    private function _getDataByCountry($country)
    {
        return DB::table('collections')
            ->join('continents', 'collections.continent', '=', 'continents.code')
            ->join('countries', 'collections.country', '=', 'countries.code')
            ->join('items', 'collections.item', '=', 'items.id')
            ->join('currencies', 'items.currency', '=', 'currencies.code')
            ->join('numerical_values', 'items.numerical_value', '=', 'numerical_values.value')
            ->select('currencies.name AS currency', 'currencies.symbol', 'numerical_values.value')
            ->where('countries.country_name', '=', $country)
            ->get();
    }

    private function _getCountries()
    {
        return DB::table('countries')
            ->join('references', 'countries.url', '=', 'references.id')
            ->get();
    }

    private function _getValuesByColumn($table, $column)
    {
        return DB::table($table)
            ->get([$column]);
    }

    private function _getNamesOfCurrency()
    {
        return DB::table('currencies')
            ->join('items', 'currencies.code', '=', 'items.currency')
            ->get();
    }
}
