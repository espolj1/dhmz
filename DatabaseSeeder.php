<?php

namespace Database\Seeders;

use App\Models\city;
use App\Models\meteorological_station;
use App\Models\station_owner;
use Database\Factories\MeteorologicalStationFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $station_categories = [
            ['name'=>'Glavna meteorološka postaja'],
            ['name'=>'Klimatološka postaja'],
            ['name'=>'Automatska meteorološka postaja'],
            ['name'=>'Kišomjerna postaja']
            
        ];
        DB::table('station_categories')->insert($station_categories);

        $station_types = [
            ['name'=>'A'],
            ['name'=>'VTRPO'],
            ['name'=>'VTRP'],
            ['name'=>'VZrZrTRPO'],
            ['name'=>'O']
        ];
        DB::table('station_types')->insert($station_types);

        $sensors_types = [
            ['name'=>'šalični', 'measuring_range'=>'0-70m/s', 'measuring_element'=>'brzina strujanja zraka'],
            ['name'=>'ultrazvučni', 'measuring_range'=>'0-85m/s', 'measuring_element'=>'brzina strujanja zraka'],
            ['name'=>'digitalni', 'measuring_range'=>'800-1100 hPa', 'measuring_element'=>'atmosferski tlak']
        ];
        DB::table('sensors_types')->insert($sensors_types);

        $sensors = [
            ['serial_number'=>'J67834278', 'name'=>'PTB330', 'manufacturer'=>'VAISALA', 'id_sensor_type'=>'3'],
            ['serial_number'=>'Z12534889', 'name'=>'PTB330', 'manufacturer'=>'VAISALA', 'id_sensor_type'=>'3'],
            ['serial_number'=>'X34572098', 'name'=>'PTB330', 'manufacturer'=>'VAISALA', 'id_sensor_type'=>'3'],
            ['serial_number'=>'089634215673', 'name'=>'4.3351.00.000', 'manufacturer'=>'THIES', 'id_sensor_type'=>'1'],
            ['serial_number'=>'R78934533', 'name'=>'WMT 702', 'manufacturer'=>'VAISALA', 'id_sensor_type'=>'2']
        ];
        DB::table('sensors')->insert($sensors);

        $certificates = [
            ['number'=>'780/21', 'date'=>'2021-11-10', 'id_sensor'=>'1'],
            ['number'=>'781/21', 'date'=>'2021-11-11', 'id_sensor'=>'2'],
            ['number'=>'782/21', 'date'=>'2021-11-11', 'id_sensor'=>'3']
        ];
        DB::table('certificates')->insert($certificates);

        $cities = [
            ['name'=>'Zagreb', 'post_number'=>'10000'],
            ['name'=>'Malinska', 'post_number'=>'51511'],
            ['name'=>'Crikvenica', 'post_number'=>'51260'],
            ['name'=>'Opatija', 'post_number'=>'51410'],
            ['name'=>'Zadar', 'post_number'=>'23000'],
            ['name'=>'Valpovo', 'post_number'=>'31322']
        ];
        DB::table('cities')->insert($cities);

        $station_owners = [
            ['name'=>'DHMZ', 'streat'=>'Ravnice', 'streat_number'=>'bb', 'phone'=>'014564666', 'email'=>'dhmz@cirus.dhz.hr', 'id_city'=>'1'],
            ['name'=>'Hrvatske vode', 'streat'=>'Ulica Grada Vukovara', 'streat_number'=>'220', 'phone'=>'016307333', 'email'=>'voda@voda.hr', 'id_city'=>'1'],
            ['name'=>'HC doo', 'streat'=>'Vončinina', 'streat_number'=>'3', 'phone'=>'014722555', 'email'=>'javnost@hrvatske-ceste.hr', 'id_city'=>'1'],
            ['name'=>'Eko Murvica', 'streat'=>'Trg Stjepana Radića', 'streat_number'=>'1/2', 'phone'=>'051455500', 'email'=>'ekomurvica@ekomurvica', 'id_city'=>'3'],
        ];

        DB::table('station_owners')->insert($station_owners);

        $meteorological_stations = [
            ['name'=>'Zadar', 'ip_adress'=>'', 'sim_card'=>'', 'manufacturer'=>'Tritonel', 'image'=>'', 'id_type'=>'4', 'id_category'=>'1', 'id_city'=>'5', 'id_station_owner'=>'1'],
            ['name'=>'Lokvine', 'ip_adress'=>'192.168.172.13', 'sim_card'=>'0991954321', 'manufacturer'=>'Tritonel', 'image'=>'', 'id_type'=>'1', 'id_category'=>'3', 'id_city'=>'5', 'id_station_owner'=>'3'],
            ['name'=>'Maslenički most', 'ip_adress'=>'192.168.172.55', 'sim_card'=>'0991964532', 'manufacturer'=>'Tritonel', 'image'=>'', 'id_type'=>'1', 'id_category'=>'3', 'id_city'=>'5', 'id_station_owner'=>'3'],
            ['name'=>'Valpovo', 'ip_adress'=>'192.168.172.112', 'sim_card'=>'0991944512', 'manufacturer'=>'Tritonel', 'image'=>'', 'id_type'=>'5', 'id_category'=>'4', 'id_city'=>'6', 'id_station_owner'=>'2']
        ];
        DB::table('meteorological_stations')->insert($meteorological_stations);

        $install = [
            ['date'=>'2021.12.17.', 'id_sensor'=>'1', 'id_met_station'=>'1'],
            ['date'=>'2021.12.17.', 'id_sensor'=>'5', 'id_met_station'=>'1'],
            ['date'=>'2021.12.20.', 'id_sensor'=>'4', 'id_met_station'=>'3']
        ];
        DB::table('installed')->insert($install);

        city::factory()
            ->count(env('SEED_CITY'))
            ->create();

        meteorological_station::factory()
                            ->count(env('SEED_METEOROLOGICAL_STATION'))
                            ->create();

    }
}
