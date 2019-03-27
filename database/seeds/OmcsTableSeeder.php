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
    public function get_omcs()
    {
        return[
        [
          'company'   => 'company_1',
          'age_start' => 0,
          'age_end'   => 40,
          'price'     => 10,
          'days'     => 7,
        ],
        [
          'company'   => 'company_1',
          'age_start' => 41,
          'age_end'   => 50,
          'price'     => 17,
          'days'     => 7,
        ],
        [
          'company'   => 'company_1',
          'age_start' => 51,
          'age_end'   => 60,
          'price'     => 22,
          'days'     => 7,
        ],

        [
          'company'   => 'company_1',
          'age_start' => 61,
          'age_end'   => 70,
          'price'     => 34,
          'days'     => 7,
        ],

        [
          'company'   => 'company_2',
          'age_start' => 0,
          'age_end'   => 20,
          'price'     => 22,
          'days'     => 7,
        ],
        [
          'company'   => 'company_2',
          'age_start' => 21,
          'age_end'   => 40,
          'price'     => 33,
          'days'     => 7,
        ],
        [
          'company'   => 'company_2',
          'age_start' => 41,
          'age_end'   => 50,
          'price'     => 44,
          'days'     => 7,
        ],
        [
          'company'   => 'company_2',
          'age_start' => 51,
          'age_end'   => 80,
          'price'     => 155,
          'days'     => 7,
        ],

        [
          'company'   => 'company_3',
          'age_start' => 0,
          'age_end'   => 30,
          'price'     => 200,
          'days'     => 7,
        ],
        [
          'company'   => 'company_3',
          'age_start' => 31,
          'age_end'   => 50,
          'price'     => 300,
          'days'     => 7,
        ],
        [
          'company'   => 'company_3',
          'age_start' => 51,
          'age_end'   => 70,
          'price'     => 400,
          'days'     => 7,
        ],
        [
          'company'   => 'company_3',
          'age_start' => 71,
          'age_end'   => 80,
          'price'     => 600,
          'days'     => 7,
        ],

        [
          'company'   => 'company_1',
          'age_start' => 0,
          'age_end'   => 40,
          'price'     => 100,
          'days'     => 30,
        ],
        [
          'company'   => 'company_1',
          'age_start' => 41,
          'age_end'   => 50,
          'price'     => 107,
          'days'     => 30,
        ],
        [
          'company'   => 'company_1',
          'age_start' => 51,
          'age_end'   => 60,
          'price'     => 202,
          'days'     => 30,
        ],

        [
          'company'   => 'company_1',
          'age_start' => 61,
          'age_end'   => 70,
          'price'     => 304,
          'days'     => 30,
        ],

        [
          'company'   => 'company_2',
          'age_start' => 0,
          'age_end'   => 20,
          'price'     => 202,
          'days'     => 30,
        ],
        [
          'company'   => 'company_2',
          'age_start' => 21,
          'age_end'   => 40,
          'price'     => 303,
          'days'     => 30,
        ],
        [
          'company'   => 'company_2',
          'age_start' => 41,
          'age_end'   => 50,
          'price'     => 404,
          'days'     => 30,
        ],
        [
          'company'   => 'company_2',
          'age_start' => 51,
          'age_end'   => 80,
          'price'     => 1055,
          'days'     => 30,
        ],

        [
          'company'   => 'company_3',
          'age_start' => 0,
          'age_end'   => 30,
          'price'     => 2000,
          'days'     => 30,
        ],
        [
          'company'   => 'company_3',
          'age_start' => 31,
          'age_end'   => 50,
          'price'     => 3000,
          'days'     => 30,
        ],
        [
          'company'   => 'company_3',
          'age_start' => 51,
          'age_end'   => 70,
          'price'     => 4000,
          'days'     => 30,
        ],
        [
          'company'   => 'company_3',
          'age_start' => 71,
          'age_end'   => 80,
          'price'     => 6000,
          'days'     => 30,
        ],



      ];
    }
    public function run()
    {
      $omcs = $this->get_omcs() ;
      foreach ($omcs as $omc) {
        Omc::create($omc);
      }
    }
  }
