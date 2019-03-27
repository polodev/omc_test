<?php

use App\Omc;
use Illuminate\Database\Seeder;

class OmcsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $omcs = [
        [
          'company'   => 'company_1',
          'age_start' => 0,
          'age_end'   => 40,
          'price'     => 10,
        ],
        [
          'company'   => 'company_1',
          'age_start' => 41,
          'age_end'   => 50,
          'price'     => 17,
        ],
        [
          'company'   => 'company_1',
          'age_start' => 51,
          'age_end'   => 60,
          'price'     => 22,
        ],

        [
          'company'   => 'company_1',
          'age_start' => 61,
          'age_end'   => 70,
          'price'     => 34,
        ],

        [
          'company'   => 'company_2',
          'age_start' => 0,
          'age_end'   => 20,
          'price'     => 22,
        ],
        [
          'company'   => 'company_2',
          'age_start' => 21,
          'age_end'   => 40,
          'price'     => 33,
        ],
        [
          'company'   => 'company_2',
          'age_start' => 41,
          'age_end'   => 50,
          'price'     => 44,
        ],
        [
          'company'   => 'company_2',
          'age_start' => 51,
          'age_end'   => 80,
          'price'     => 155,
        ],

        [
          'company'   => 'company_3',
          'age_start' => 0,
          'age_end'   => 30,
          'price'     => 200,
        ],
        [
          'company'   => 'company_3',
          'age_start' => 31,
          'age_end'   => 50,
          'price'     => 300,
        ],
        [
          'company'   => 'company_3',
          'age_start' => 51,
          'age_end'   => 70,
          'price'     => 400,
        ],
        [
          'company'   => 'company_3',
          'age_start' => 71,
          'age_end'   => 80,
          'price'     => 600,
        ],

      ];
      foreach ($omcs as $omc) {
        Omc::create($omc);
      }
    }
  }
