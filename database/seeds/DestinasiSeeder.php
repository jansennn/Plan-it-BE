<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DestinasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Destination::insert([
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Sipinsur Park Geosite and Pine Forest',
                'address' => 'Parulohan, Paranginan, Humbang Hasundutan Regency, North Sumatra 22476',
                'rating' => 4.6,
                'lat' => '2.3292948779032194',
                'long' => '98.88146899953911',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Free beach Parapat Lake Toba',
                'address' => 'Danau Toba, Jalan Siantar Parapat, Parapat, Tiga Raja, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174',
                'rating' => 4.6,
                'lat' => '2.6688020452602426',
                'long' => '98.93698026885184',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Situmurun Waterfall',
                'address' => 'Jonggi Nihuta, Lumban Julu, Hatinggian, Lumban Julu, Kabupaten Toba Samosir, Sumatera Utara 22386',
                'rating' => 4.6,
                'lat' => '2.537423365999603',
                'long' => '99.00808606700146',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Bukit Indah Simarjarunjung',
                'address' => 'Jl. Simarjarunjung, Butu Bayu Pane Raja, Dolok Pardamean, Kabupaten Simalungun, Sumatera Utara 21163',
                'rating' => 4.6,
                'lat' => '2.813442671331432',
                'long' => '98.7812476738662',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Bukit Beta Tuk-tuk',
                'address' => 'tuk tuk danau, Toba, South Siantar, Pematang Siantar City, North Sumatra',
                'rating' => 4.6,
                'lat' => '2.6612895296993804',
                'long' => '98.84693818419517',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Bukit Pahoda',
                'address' => 'Lumban Silintong, Balige, Toba Samosir Regency, North Sumatra 22312',
                'rating' => 4.6,
                'lat' => '2.3477669543972643',
                'long' => '99.04058833816592',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'PASIR PUTIH LUMBAN BULBUL',
                'address' => 'Parulohan, Paranginan, Humbang Hasundutan Regency, North Sumatra 22476',
                'rating' => 4.6,
                'lat' => '2.348399474112258',
                'long' => '99.07533518419578',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'BUKIT travel Gibeon',
                'address' => 'Unnamed Road, Kabupaten Toba Samosir, 21174, Sionggang Utara, Lumban Julu, Kabupaten Toba Samosir, Sumatera Utara 21174',
                'rating' => 4.6,
                'lat' => '2.59111748053953',
                'long' => '98.99787425535948',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Menara Pandang Tele Samosir',
                'address' => 'Turpuk Limbong, Harian, Samosir Regency, North Sumatra 22396',
                'rating' => 4.6,
                'lat' => '2.5523283983934175',
                'long' => '98.63982674001632',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Bukit Senyum',
                'address' => 'Motung, Ajibata, Toba Samosir Regency, North Sumatra',
                'rating' => 4.6,
                'lat' => '2.6491439051024264',
                'long' => '98.91738729938865',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Bukit Holbung Samosir',
                'address' => 'Parulohan, Paranginan, Humbang Hasundutan Regency, North Sumatra 22476',
                'rating' => 4.7,
                'lat' => '2.535513803432476',
                'long' => '98.70413869583736',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Danau Toba Parapat',
                'address' => 'Jalan Siborong Borong - Parapat, Sibaganding, Girsang Sipangan Bolon, Sibaganding, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174',
                'rating' => 4.6,
                'lat' => '2.6860535839254527',
                'long' => '98.92693689283671',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Pakkodian',
                'address' => 'Danau Toba, Lintong Nihuta, Tampahan, Kabupaten Toba Samosir, Sumatera Utara 22312',
                'rating' => 4.6,
                'lat' => '2.3398882955751645',
                'long' => '99.01343071118085',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Efrata Waterfall',
                'address' => 'Sosor Dolok, Harian, Sosor Dolok, Harian, Kabupaten Samosir, Sumatera Utara 22396',
                'rating' => 4.6,
                'lat' => '2.537123882864582',
                'long' => '98.64501649953868',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],[
                'category_wisata_id' => 1,
                'kabupaten_id' => 2,
                'name' => 'Indah Sipinggan Beach',
                'address' => 'Danau, Toba, Siantar Sel., Kota Pematang Siantar, Sumatera Utara 22394',
                'rating' => 4.6,
                'lat' => '2.4322792776163236',
                'long' => '98.89753921383783',
                'image' => 'https://images.unsplash.com/photo-1615442291764-fa9d4be3cfdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE1NjEyMTY4&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
