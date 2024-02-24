<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $pays = [
            'Africa' => [
                'Benin' => 'Benin',
                'Burkina Faso' => 'Burkina Faso',
                'Cape Verde' => 'Cape Verde',
                'Côte d\'Ivoire' => 'Côte d\'Ivoire',
                'Gambia' => 'Gambia',
                'Ghana' => 'Ghana',
                'Guinea' => 'Guinea',
                'Guinea-Bissau' => 'Guinea-Bissau',
                'Liberia' => 'Liberia',
                'Mali' => 'Mali',
                'Mauritania' => 'Mauritania',
                'Niger' => 'Niger',
                'Nigeria' => 'Nigeria',
                'Senegal' => 'Senegal',
                'Sierra Leone' => 'Sierra Leone',
                'Togo' => 'Togo',
            ],

            'Europe' => [
                'Austria' => 'Austria',
                'Belgium' => 'Belgium',
                'France' => 'France',
                'Germany' => 'Germany',
                'Ireland' => 'Ireland',
                'Luxembourg' => 'Luxembourg',
                'Netherlands' => 'Netherlands',
                'Switzerland' => 'Switzerland',
                'United Kingdom' => 'United Kingdom',
            ],

            'America' => [
                'United States' => 'United States',
                'Canada' => 'Canada',
            ],

        ];

        return view('send', ['pays' => $pays]);
    }

    public function check()
    {
        return view('check');
    }

    public function stand()
    {
        $pays = [
            'Africa' => [
                'Benin' => 'Benin',
                'Burkina Faso' => 'Burkina Faso',
                'Cape Verde' => 'Cape Verde',
                'Côte d\'Ivoire' => 'Côte d\'Ivoire',
                'Gambia' => 'Gambia',
                'Ghana' => 'Ghana',
                'Guinea' => 'Guinea',
                'Guinea-Bissau' => 'Guinea-Bissau',
                'Liberia' => 'Liberia',
                'Mali' => 'Mali',
                'Mauritania' => 'Mauritania',
                'Niger' => 'Niger',
                'Nigeria' => 'Nigeria',
                'Senegal' => 'Senegal',
                'Sierra Leone' => 'Sierra Leone',
                'Togo' => 'Togo',
            ],

            'Europe' => [
                'Austria' => 'Austria',
                'Belgium' => 'Belgium',
                'France' => 'France',
                'Germany' => 'Germany',
                'Ireland' => 'Ireland',
                'Luxembourg' => 'Luxembourg',
                'Netherlands' => 'Netherlands',
                'Switzerland' => 'Switzerland',
                'United Kingdom' => 'United Kingdom',
            ],

            'America' => [
                'United States' => 'United States',
                'Canada' => 'Canada',
            ],

        ];
        return view('stand', ['pays' => $pays]);
    }
}
