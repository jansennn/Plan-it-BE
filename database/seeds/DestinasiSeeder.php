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
                'image' => 'https://images.unsplash.com/photo-1615009482945-8d5cc7f3993e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE3NjAxMDQ3&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',
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
                'image' => 'https://images.unsplash.com/photo-1601352209571-252c535a05c9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE3NjAxMDk2&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'image' => 'https://images.unsplash.com/photo-1586703449297-0618fa522ecf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE3NjAxMTQ2&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'image' => 'https://images.unsplash.com/photo-1553515831-1ee03d85e31c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE3NjAxMTkz&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'image' => 'https://images.unsplash.com/photo-1545886290-dc80d8908b9e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE3NjAxMjc2&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'image' => 'https://images.unsplash.com/photo-1591121213542-7020cc7a0b52?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE3NjAxMzEy&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'image' => 'https://images.unsplash.com/photo-1583527385201-4478c90e9c6d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjE3NjAxMzc0&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit',
                'opening_hours' => '',
                'closed_hours' => '',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

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
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu euismod lorem, id ultricies lorem. Sed sagittis pretium metus, rhoncus faucibus sem pulvinar eget. Nunc nulla magna, volutpat eu scelerisque eu, bibendum id magna. Integer bibendum efficitur lorem. Etiam pretium imperdiet nisi, in tristique nisi iaculis id. Etiam sed cursus nulla. Curabitur varius at ex vitae fermentum.

Etiam fringilla ligula ac sollicitudin ullamcorper. Nulla facilisi. Ut nisi mauris, gravida vel dictum id, convallis at nibh. In sagittis nibh leo, quis blandit tellus hendrerit quis. Nam accumsan nulla at justo aliquet, vitae porttitor nibh auctor. Donec pretium ornare massa, ut congue orci faucibus interdum. Aenean malesuada sollicitudin tortor, eget placerat nibh congue eu. Sed ornare quam odio, ut fermentum neque rhoncus vel. Integer pharetra est non nibh consequat, rutrum congue lectus tempus. Vivamus rutrum viverra sapien non luctus. Maecenas lacinia ante arcu. Praesent consectetur, magna molestie elementum varius, sem massa iaculis nisi, non faucibus arcu ante sit amet risus. Nullam a ultrices lacus. Morbi nec malesuada enim. Cras condimentum justo et arcu venenatis, at interdum metus mattis. Etiam a risus eget lectus ornare tincidunt at id leo.

Nulla ac nibh sit amet ante fringilla auctor nec eget sapien. Maecenas sodales, tellus eu placerat ullamcorper, sem massa auctor leo, vel egestas quam ligula vitae dui. Proin quis ipsum ex. Quisque malesuada lacinia egestas. Morbi tincidunt placerat imperdiet. Sed eu congue ante. Morbi lacus sapien, feugiat ac scelerisque ut, vestibulum quis dui. Donec elementum posuere nisi ac consequat. Maecenas eget fermentum tellus. Proin non ultrices lorem. Nunc consequat ipsum non erat finibus pulvinar. Fusce id dictum velit, vitae consequat nisi. Curabitur semper dolor risus, at suscipit tellus tincidunt nec. Nulla eu lacus at quam congue scelerisque ut at massa.

Quisque id orci eu metus hendrerit sodales. Mauris vitae fringilla felis. Nullam convallis, odio ut egestas tristique, lacus ipsum egestas erat, non consequat libero enim id quam. Integer cursus urna erat, non dignissim lacus tincidunt a. Praesent porta metus in cursus tincidunt. In hac habitasse platea dictumst. Quisque iaculis orci at malesuada dictum. Donec malesuada consectetur sem sed iaculis. Nunc tempor nisl nisi, in pretium neque tempor sit amet. Quisque at sapien ac tortor sodales condimentum et eget tortor. Maecenas elementum dignissim ornare. Pellentesque mattis nisl nec mauris condimentum posuere. Proin ac justo ipsum. Sed vitae condimentum neque. Curabitur eleifend sit amet tortor tempor condimentum.

Mauris non congue nibh. Proin rutrum diam eget vehicula vestibulum. Vivamus a risus quis ligula consectetur sodales a nec est. Duis velit massa, cursus ac auctor a, faucibus ut lorem. Sed venenatis augue id diam facilisis, molestie maximus neque maximus. Proin leo arcu, tristique quis libero imperdiet, faucibus rhoncus urna. Sed quis cursus mauris. Nam dignissim suscipit sollicitudin. Morbi hendrerit lacus id nunc molestie, eu tristique dolor auctor.',

                'status' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
