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
            ],[
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit Indah Simarjarunjung",
                "address"=> "Jl. Simarjarunjung, Butu Bayu Pane Raja, Dolok Pardamean, Kabupaten Simalungun, Sumatera Utara 21163",
                "description"=> "Tempat melihat pemandangan Danau Toba tempat pengunjung dapat berfoto sambil memakai properti warna-warni.",
                "rating"=> "4,3",
                "latitude"=> "28.133.125",
                "longitude"=> "987.813.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOGI4rJBbkMitX50i5okIP64ZBTA-Nz_EzKd1es=w408-h272-k-no",
                "opening_hours"=> 7,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Air Terjun Situmurun",
                "address"=> "Hatinggian, Lumban Julu, Kabupaten Toba Samosir, Sumatera Utara 22386",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "25.370.625",
                "longitude"=> "9.900.818.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNwgqMpg5prw6AP8TrGGtepLslEmJ58Nq8pjUMM=w408-h306-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Wisata Sipinsur",
                "address"=> "Parulohan, Paranginan, Kabupaten Humbang Hasundutan, Sumatera Utara 22476",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "23.291.875",
                "longitude"=> "9.888.143.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMtikLemCDzLwLaLbku6fA-W5-xhXf2rNyrj880=w408-h306-k-no",
                "opening_hours"=> 9,
                "closed_hours"=> 16,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pantai Bebas Parapat, Danau Toba",
                "address"=> "Danau Toba, Jalan Siantar Parapat, Parapat, Tiga Raja, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "26.685.625",
                "longitude"=> "989.369.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOb_aQJ5-nv-sXcBLUwbAT-UlK37LmfRd5l662q=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit Beta Tuk-tuk",
                "address"=> "Tuktuk Siadong, Simanindo, Kabupaten Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "26.610.625",
                "longitude"=> "988.469.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMSLSGUEoLy4Jue9gbf7ULTdXWwjMUbJffSfumh=w408-h272-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Menara Pandang Tele Samosir",
                "address"=> "Turpuk Limbong, Harian, Kabupaten Samosir, Sumatera Utara 22396",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "25.520.625",
                "longitude"=> "9.863.981.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipO2r385Kl9-Y_rzUBEsTXJI_8GTLtivTnHcJxnq=w408-h306-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit Holbung Samosir",
                "address"=> "Dolok Raja, Harian, Kabupaten Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,7",
                "latitude"=> "25.345.625",
                "longitude"=> "9.870.418.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMeIpbQR9Z6HH-4YFLxmrDtU_5A1hZYm6DOeqAK=w408-h272-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pemandian Air Panas Rianiate",
                "address"=> "Rianiate, Pangururan, Kabupaten Samosir, Sumatera Utara 22393",
                "description"=> "",
                "rating"=> "4",
                "latitude"=> "25.305.625",
                "longitude"=> "987.336.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNlpGS0h23jNwUZDSoNzXf_lRVatkJYuOr98V_R=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Air Terjun Efrata",
                "address"=> "Sosor Dolok, Harian, Kabupaten Samosir, Sumatera Utara 22396",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "25.369.375",
                "longitude"=> "986.449.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipN50e-zxpaTjjDxW3Fft12Gs8Szw0KwNlieZjoM=w408-h725-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 19,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Taman bunga Sapo Juma",
                "address"=> "Tongging, Merek, Kabupaten Karo, Sumatera Utara 22173",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "29.116.875",
                "longitude"=> "985.183.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOfa1WhwB5rRc8dV8kLrstrQA_4nO1gVsbpa12e=w426-h240-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 17,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Aek Rangat Pangururan",
                "address"=> "Siogung-Ogung, Pangururan, Kabupaten Samosir, Sumatera Utara 22392",
                "description"=> "",
                "rating"=> "4,3",
                "latitude"=> "26.186.875",
                "longitude"=> "986.755.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipN764Zuv5lw-ddqPnu81kNx_DhdZQvTg7pX7cez=w408-h544-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Objek Wisata Budaya Batu Kursi Raja Siallagan",
                "address"=> "Ambarita, Simanindo, Kabupaten Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,7",
                "latitude"=> "26.790.625",
                "longitude"=> "988.361.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipN6qcQc5BwpKyOxxeS6tsiqzvPd1CS1RlEklR8j=w408-h306-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Air Terjun Sipiso Piso",
                "address"=> "Tongging, Merek, Kabupaten Karo, Sumatera Utara 22173",
                "description"=> "Air terjun setinggi 394 kaki & danau di jantung hutan pinus, yang dapat diakses melalui jalan buatan.",
                "rating"=> "4,5",
                "latitude"=> "29.164.375",
                "longitude"=> "9.851.956.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipO7a5zF-UdKJWFIftRsv-DIcerTXqdQ0xtlzl_e=w408-h271-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pertunjukan Tari SIGALE GALE",
                "address"=> "Tomok, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "26.518.125",
                "longitude"=> "9.886.081.250.000.000",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPSMLo9zehSGfaRop_BNk6bKiKwN1Vg95_puB8d=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pantai Paris",
                "address"=> "Tigaras, Dolok Pardamean, Kabupaten Simalungun, Sumatera Utara 21163",
                "description"=> "",
                "rating"=> "4,2",
                "latitude"=> "27.874.375",
                "longitude"=> "988.059.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNuU4fNavi6cXCLO71RPM2qRtQJ4pdEGyXLaNhO=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Danau Toba Parapat",
                "address"=> "Jalan Siborong Borong - Parapat, Sibaganding, Girsang Sipangan Bolon, Sibaganding, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "26.838.125",
                "longitude"=> "989.260.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNyjJO1Ebvbw2SKAPJpPvg6_41g3-8u08tisJif=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit Pahoda",
                "address"=> "Lumban Silintong, Balige, Kabupaten Toba Samosir, Sumatera Utara 22312",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "23.475.625",
                "longitude"=> "9.904.068.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOGCgFaDzq9rXAGWtEHWAY31V7ZwKU4wePCrhRy=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Gunung Pusuk Buhit",
                "address"=> "Ginolat, Sianjur Mula Mula, Kabupaten Samosir, Sumatera Utara 22396",
                "description"=> "",
                "rating"=> "4,7",
                "latitude"=> "26.005.625",
                "longitude"=> "986.515.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMVGED7rRKmA_lShrLVUQkpT2e8x8xLkOFYyAeC=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Wisata BUKIT GIBEON SIBISA PARAPAT",
                "address"=> "Sionggang Utara, Lumban Julu, Kabupaten Toba Samosir, Sumatera Utara 21174",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "25.908.125",
                "longitude"=> "989.978.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNEpME1sz0awD0vHrUV45_m8sOx-JNs7H6kyMNH=w408-h564-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Batu Kursi Raja Siallagan ( Stone Chair of King Siallagan )",
                "address"=> "Huta Siallagan Siallagan-Pindaraya, Ambarita, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "26.790.625",
                "longitude"=> "988.364.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOrlp6hp_5BDM3mhzu3rBQobvKWywG9A_bsyLCh=w408-h272-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "BUKIT SIATTARATAS",
                "address"=> "Paropo, Silahi Sabungan, Kabupaten Dairi, Sumatera Utara 22281",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "28.150.625",
                "longitude"=> "9.852.443.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMHhzqp_jqk51FXxAb0timsKo1eFjW7s7qFbU2l=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Long Beach",
                "address"=> "Pardamean Ajibata, Ajibata, Kabupaten Toba Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,1",
                "latitude"=> "26.523.125",
                "longitude"=> "9.893.243.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNye_BTe-DufdVPjvezbmvEfNK6REnMbOtbpfrn=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit Senyum",
                "address"=> "Motung, Ajibata, Kabupaten Toba Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "26.358.125",
                "longitude"=> "9.892.106.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipN_rOMEPn-2IT099trYCgEWUztNV8hI-AMxypdP=w426-h240-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 17,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "The Kaldera",
                "address"=> "Pardamean Sibisa, Ajibata, Kabupaten Toba Samosir, Sumatera Utara 22386",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "26.065.625",
                "longitude"=> "989.461.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNuw7r_rX5PARahvGMyWlbrWQA9_ndgZarlFI02=w427-h240-k-no",
                "opening_hours"=> 9,
                "closed_hours"=> 15,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Tanjung Unta",
                "address"=> "Jalan St. H.H. Damanik, Tambun Raya, Pamatang, Tigaras, Dolok Pardamean, Kabupaten Simalungun, Sumatera Utara 21186",
                "description"=> "",
                "rating"=> "4,3",
                "latitude"=> "27.721.875",
                "longitude"=> "988.083.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPWjU46SQihl35pEKGSuHW-DBmOZWTLSQc1bQqX=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Batu Gantung",
                "address"=> "Lake Toba, Kabupaten Simalungun, Sumatera Utara 21174",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "26.884.375",
                "longitude"=> "989.243.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOuExbInCRTzEMkWvVSXMschN0dPY9lLzZhhi_T=w408-h408-k-no",
                "opening_hours"=> 9.3,
                "closed_hours"=> 17.3,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Tao Silalahi hotel",
                "address"=> "Silalahi I, Silalahi III, Silahi Sabungan, Kabupaten Dairi, Sumatera Utara 22281",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "27.908.125",
                "longitude"=> "9.853.293.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNOoqJWlIVs71Ni9PggCrRTGtHxTak8LwJiRmAb=w408-h272-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "PASIR PUTIH LUMBAN BULBUL",
                "address"=> "Jl. Sibolahotang, Sibola Hotangsas, Balige, Kabupaten Toba Samosir, Sumatera Utara 22312",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "23.481.875",
                "longitude"=> "990.753.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOcWfrx0790mF6DIPP8774GxElrWLLbLoDyFD2J=w408-h272-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 21.3,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit Senyum Motung",
                "address"=> "Motung, Ajibata, Kabupaten Toba Samosir, Sumatera Utara 22386",
                "description"=> "",
                "rating"=> "5",
                "latitude"=> "26.190.625",
                "longitude"=> "989.328.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPd83UKgbsfjZlKYmdtEE9YxrZeWy7oi_d1Epj9=w426-h240-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 17,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "01/03/2021 06=>13"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pulau Paropo",
                "address"=> "III, Paropo I, Silahi Sabungan, Kabupaten Dairi, Sumatera Utara 22281",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "28.445.625",
                "longitude"=> "985.290.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipP6J4jYNIqZPSttxLr8u0ucuVPD-xc9BvVvYQZh=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "01/03/2021 06=>13",
                "updated_at"=> "44256,25972"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Batak Museum",
                "address"=> "Tomok, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,3",
                "latitude"=> "26.506.875",
                "longitude"=> "988.601.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOWFNZwkdlT2k4_l9eqfgwABKH9ZIX2j8mdvhIK=w408-h544-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 20,
                "status"=> 1,
                "created_at"=> "44256,25972",
                "updated_at"=> "44256,25973"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Aek Sipangolu Bakkara",
                "address"=> "Simangulampe, Bakti Raja, Kabupaten Humbang Hasundutan, Sumatera Utara 22457",
                "description"=> "",
                "rating"=> "4,3",
                "latitude"=> "23.240.625",
                "longitude"=> "988.463.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPj8H0EGGh8JnmAIFwOl4SvbihLq9ZoWuVfZOUN=w408-h544-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "44256,25973",
                "updated_at"=> "44256,25975"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Air Terjun Janji",
                "address"=> "Tipang, Bakti Raja, Kabupaten Humbang Hasundutan, Sumatera Utara 22457",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "23.394.375",
                "longitude"=> "988.145.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMMlFH8hjwvDiakhvEYVR8Fn0K6f8DO6aqqfNVi=w408-h725-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25975",
                "updated_at"=> "44256,25976"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "AIR TERJUN SIGARATTUNG ( Sampuran Na Pitu)",
                "address"=> "Tomok, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "26.100.625",
                "longitude"=> "988.641.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMMcd7ZpK5kybAe90U4yNec4AqZWjFBF4cNEEOq=w408-h544-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25976",
                "updated_at"=> "44256,25977"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pantai Paris Tigaras",
                "address"=> "Jalan Raya Tigaras Partuahan, Bangun Pane, Dolok Pardamean, Kabupaten Simalungun, Sumatera Utara 21163",
                "description"=> "",
                "rating"=> "4,3",
                "latitude"=> "28.014.375",
                "longitude"=> "987.800.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPEss-CJCpUp92ZwF_Yb7GuOsKXvLPB6uTaI5pL=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25977",
                "updated_at"=> "44256,25978"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pemandian Bukit Gibeon",
                "address"=> "Sionggang Utara, Lumban Julu, Kabupaten Toba Samosir, Sumatera Utara 21174",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "25.853.125",
                "longitude"=> "9.899.431.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPa8enf9eHAYgpbjmhHZ7sdoXo1ISfPSPRlLHUZ=w408-h544-k-no",
                "opening_hours"=> 9,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "44256,25978",
                "updated_at"=> "44256,25979"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pakkodian Toba",
                "address"=> "Danau Toba, Lintong Nihuta, Tampahan, Kabupaten Toba Samosir, Sumatera Utara 22312",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "23.395.625",
                "longitude"=> "990.134.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMuyXAkmzdFnU6bGBZ_NeIKkCpUVas-HNeUJMpp=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25979",
                "updated_at"=> "44256,2598"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit Doa",
                "address"=> "Huta Ginjang, Muara, Kabupaten Tapanuli Utara, Sumatera Utara 22312",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "23.148.125",
                "longitude"=> "989.803.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMmf_8OmDrhVQ5HOtZJSjlBzLUcGsxtRsN8cEF4=w408-h544-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,2598",
                "updated_at"=> "44256,25981"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Sibolazi Beach",
                "address"=> "Sibolazi, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,2",
                "latitude"=> "27.485.625",
                "longitude"=> "9.875.093.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNk_9bBP20sXhnr62i9B4LhtTN7aLO1hITPcOg0=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25981",
                "updated_at"=> "44256,25983"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Taman Wisata Kera Sibaganding",
                "address"=> "Sibaganding, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174",
                "description"=> "",
                "rating"=> "4,1",
                "latitude"=> "26.926.875",
                "longitude"=> "9.892.706.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipO4RiH36GyGrwN0oHHZCUEnZ7SUJdN5hlWdqZaM=w408-h544-k-no",
                "opening_hours"=> 10.3,
                "closed_hours"=> 16,
                "status"=> 1,
                "created_at"=> "44256,25983",
                "updated_at"=> "44256,25984"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit Burung",
                "address"=> "Siboro, Sianjur Mula Mula, Kabupaten Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,7",
                "latitude"=> "26.316.875",
                "longitude"=> "986.549.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMHmGPchjKU5CAhHvtu0qLTTUIhqfZGe8jcW0hS=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25984",
                "updated_at"=> "44256,25985"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Tugu D.I PANJAITAN",
                "address"=> "Napitupulu Bagasan, Balige, Kabupaten Toba Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "23.345.625",
                "longitude"=> "9.906.406.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipP_brEwCdUCu_F2jGVLYIoN9Fn-zMu9aueuvSaL=w408-h271-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25985",
                "updated_at"=> "44256,25986"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Simanimbo Waterfall",
                "address"=> "Ambar Halim, Pintu Pohan Meranti, Ambar Halim, Pintu Pohan Merant, Kabupaten Toba Samosir, Sumatera Utara 22384",
                "description"=> "",
                "rating"=> "4,3",
                "latitude"=> "25.139.375",
                "longitude"=> "992.631.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNJVNCFD3B1um1CxVIE7raNu9d6RwBrPyXxsCht=w424-h240-k-no",
                "opening_hours"=> 6,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "44256,25986",
                "updated_at"=> "44256,25987"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Sapo Juma",
                "address"=> "Jl. Tongging - Silalahi, Tongging, Merek, Kabupaten Karo, Sumatera Utara 22173",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "29.101.875",
                "longitude"=> "9.851.956.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNA_C_4zIzEWZkZskeUAfwnHuteOskt3FGvvy76=w408-h306-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 17,
                "status"=> 1,
                "created_at"=> "44256,25987",
                "updated_at"=> "44256,25988"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Kebun Teh Bahbutong, Sidamanik",
                "address"=> "Sidamanik, Kabupaten Simalungun, Sumatera Utara 21171",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "28.563.125",
                "longitude"=> "9.890.781.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPXhwwLoZOfHAZwhuOkht4Rp4s4bp_4J82Wi3HG=w408-h306-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "44256,25988",
                "updated_at"=> "44256,2599"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Batu Hobon",
                "address"=> "Sarimarrihit, Sianjur Mula Mula, Kabupaten Samosir, Sumatera Utara 22396",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "25.901.875",
                "longitude"=> "9.862.906.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOKC5w8E_jNxZ3Zz3VxBBlXxdIZ60xlxCJobZok=w408-h544-k-no",
                "opening_hours"=> 9,
                "closed_hours"=> 17,
                "status"=> 1,
                "created_at"=> "44256,2599",
                "updated_at"=> "44256,25991"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Air Terjun Binanga Bolon",
                "address"=> "Purba Dolok, Purba, Kabupaten Simalungun, Sumatera Utara 21165",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "28.461.875",
                "longitude"=> "9.872.881.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMqZBkVvvDWGvXApJqQhePEYVeNFdTgd0E1Sqyu=w408-h544-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25991",
                "updated_at"=> "44256,25992"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Batuhoda Beach",
                "address"=> "Desa, Cinta Dame, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "27.596.875",
                "longitude"=> "9.872.518.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMCbOXt_9Jal9BHjlHepxnr5RfTKfVU1iA5qgw=w427-h240-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 19,
                "status"=> 1,
                "created_at"=> "44256,25992",
                "updated_at"=> "44256,25993"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Batu marhosa",
                "address"=> "Jl. Pulau Samosir, Tomok, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "26.041.875",
                "longitude"=> "988.680.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipO6XSc0DhGlVbJ2bdEPoBeLxVlUGZHTqOIhsdK-=w451-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25993",
                "updated_at"=> "44256,25994"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "GaBOk",
                "address"=> "Pangambatan, Merek, Kabupaten Karo, Sumatera Utara 22173",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "28.988.125",
                "longitude"=> "9.850.993.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPs-0XJenDrQXzeJ_ZMaWeAufvE7JLlPctAk-fq=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25994",
                "updated_at"=> "44256,25995"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Taman Eden 100",
                "address"=> "Taman eden 100 Lumbanrang, Ps. Lumban Julu, Lumban Julu, Kabupaten Toba Samosir, Sumatera Utara 22386",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "25.910.625",
                "longitude"=> "9.903.893.749.999.990",
                "image"=> "https=>//maps.gstatic.com/tactile/pane/default_geocode-1x.png",
                "opening_hours"=> 8,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "44256,25995",
                "updated_at"=> "44256,25997"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pulau Tolping",
                "address"=> "Pulau Samosir, Simanindo, Kabupaten Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,1",
                "latitude"=> "27.128.125",
                "longitude"=> "988.126.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNaLesjecyaBg-5VUYaBqqjNmix_fdySwoLriCZ=w426-h240-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 19,
                "status"=> 1,
                "created_at"=> "44256,25997",
                "updated_at"=> "44256,25998"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pantai Indah Situngkir (PIS)",
                "address"=> "Toba, Pangururan, Sialanguan, Pangururan, Kabupaten Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,3",
                "latitude"=> "26.978.125",
                "longitude"=> "986.900.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMVbdUrQRJg_4ksWVBISqFtn2rN5TBk23WA4Vuy=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25998",
                "updated_at"=> "44256,25999"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Air Terjun Sigura-Gura",
                "address"=> "Halado, Pintu Pohan Merant, Kabupaten Toba Samosir, Sumatera Utara 21274",
                "description"=> "",
                "rating"=> "4,3",
                "latitude"=> "25.484.375",
                "longitude"=> "9.930.268.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNYwkglaRaXMzS16dEsjqS44DBWSX-bpNGptzNt=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,25999",
                "updated_at"=> "44256,26"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pantai Kenangan",
                "address"=> "Jalan Besar Pematang Siantar Tigaras, Tigaras, Dolok Pardamean, Kabupaten Simalungun, Sumatera Utara 21163",
                "description"=> "",
                "rating"=> "4,2",
                "latitude"=> "27.841.875",
                "longitude"=> "988.040.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNZJazATaVhxjm1xLLlqh72ugQnBrGTknsnOM_M=w408-h306-k-no",
                "opening_hours"=> 7,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26",
                "updated_at"=> "44256,26001"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Puncak Huta Ginjang",
                "address"=> "Sitanggor, Muara, Kabupaten Tapanuli Utara, Sumatera Utara 22476",
                "description"=> "",
                "rating"=> "4,7",
                "latitude"=> "23.148.125",
                "longitude"=> "989.710.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipP_xho3baz0qbrvhunjBxLFqQZQ_qywtjLiGZxq=w408-h271-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26001",
                "updated_at"=> "44256,26002"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Muara Nauli",
                "address"=> "Hutana Godang, Muara, Kabupaten Tapanuli Utara, Sumatera Utara 22476",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "23.333.125",
                "longitude"=> "989.166.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMGKTewKWirdSp8N7epYJ27l8KZHrJ91J-cZm9p=w425-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26002",
                "updated_at"=> "44256,26003"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Perkemahan Paropo",
                "address"=> "Paropo I, Silahi Sabungan, Kabupaten Dairi, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "28.449.375",
                "longitude"=> "9.852.806.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipM3Gtbq4RNlX66TsHhnLTa0G1PY1NOZASOi0qaZ=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26003",
                "updated_at"=> "44256,26005"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Danau Sidihoni Samosir",
                "address"=> "Desa Sidihoni Samosir, Salaon Toba, Ronggur Nihuta, Kabupaten Samosir, Sumatera Utara 22392",
                "description"=> "",
                "rating"=> "4,2",
                "latitude"=> "26.018.125",
                "longitude"=> "9.874.731.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOg80TKtKT8PQJB6TTimKtS4Em5cDR-_fjDHms=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26005",
                "updated_at"=> "44256,26006"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Kota Balige",
                "address"=> "Jl. Sm Raja No.6, Napitupulu Bagasan, Balige, Kabupaten Toba Samosir, Sumatera Utara 22311",
                "description"=> "",
                "rating"=> "4,8",
                "latitude"=> "23.346.875",
                "longitude"=> "9.906.468.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipO7ZnzZsQHIG1r90UHUKAsxhMKtP2g42wXtSoo=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26006",
                "updated_at"=> "44256,26007"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Inna Parapat",
                "address"=> "Danau Toba, Jl. Marihat No.1, Tiga Raja, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "26.651.875",
                "longitude"=> "989.310.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOpIu1PToREK_gsrYi_AtSSv-u1I2xuiuafeABt=w408-h272-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26007",
                "updated_at"=> "44256,26008"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Tugu Toga Aritonang",
                "address"=> "Desa, Dolok Martumbur, Muara, Kabupaten Tapanuli Utara, Sumatera Utara 22476",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "23.395.625",
                "longitude"=> "989.419.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPy-uG3UqesH67ELf5rctSRqtDxFzhcmm5wtZEP=w427-h240-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 19,
                "status"=> 1,
                "created_at"=> "44256,26008",
                "updated_at"=> "44256,26009"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Sigurgur Beach & Restaurant",
                "address"=> "Unnamed Road, Simarmata, Simanindo, Samosir Regency, North Sumatra 22395",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "27.483.125",
                "longitude"=> "987.141.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNZTu2FF7913cOS_6DAs8EHs6JaKvdYJfvaQePN=w426-h240-k-no",
                "opening_hours"=> 9,
                "closed_hours"=> 20,
                "status"=> 1,
                "created_at"=> "44256,26009",
                "updated_at"=> "44256,2601"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Dermaga Silalahi",
                "address"=> "Silalahi II, Silahi Sabungan, Kabupaten Dairi, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,2",
                "latitude"=> "27.913.125",
                "longitude"=> "9.853.218.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOmUL6D_NX1sHtFAAqq2mKoOJafEgk1h1WgVX3F=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,2601",
                "updated_at"=> "44256,26012"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pantai Pasir Putih Parbaba",
                "address"=> "Situngkir, Pangururan, Kabupaten Samosir, Sumatera Utara 22392",
                "description"=> "",
                "rating"=> "4,1",
                "latitude"=> "26.955.625",
                "longitude"=> "986.898.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNEtj4Ag-OURYH5hegKT975sNH13ZeewZZ2kMey=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26012",
                "updated_at"=> "44256,26013"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "PENATAPAN PARHALLOW SIGARANTUNG",
                "address"=> "Tomok, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "26.173.125",
                "longitude"=> "9.887.231.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMaxQ1qEaFhXeDvbJhfKVH6lFTOoCTvw3T6NEM9=w408-h306-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 23,
                "status"=> 1,
                "created_at"=> "44256,26013",
                "updated_at"=> "44256,26014"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pusat Informasi Geopark Kaldera Toba Sigulatti",
                "address"=> "Sigulatti, Sarimarrihit, Sianjur Mula Mula, Kabupaten Samosir, Sumatera Utara 22396",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "25.935.625",
                "longitude"=> "986.335.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNZwdy1En3AHRFJ6p8xaZZ9Y6QM-Yvbe3H9oBs=w408-h544-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "44256,26014",
                "updated_at"=> "44256,26015"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Batu Maroppa",
                "address"=> "Tamba Dolok, Sitio-Tio, Kabupaten Samosir, Sumatera Utara 22391",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "24.764.375",
                "longitude"=> "987.191.875",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMxdTw-eaKvTKhK5o2i03JY3wu7qnYJX8OWw8Ly=w426-h240-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26015",
                "updated_at"=> "44256,26016"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Museum Huta Bolon Simanindo",
                "address"=> "Jl. Pelabuhan Simanindo, Simanindo Sangkal, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,1",
                "latitude"=> "27.523.125",
                "longitude"=> "9.874.443.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOTiZNJzq2K_Wmeunc_LRJfTH7ntg2cu7VdUGJf=w426-h240-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 17,
                "status"=> 1,
                "created_at"=> "44256,26016",
                "updated_at"=> "44256,26017"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Tombak Sulusulu",
                "address"=> "Marbun Tonga Marbun Dolok, Bakti Raja, Simamora, Humbang Hasundutan, Kabupaten Humbang Hasundutan, Sumatera Utara 22457",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "23.076.875",
                "longitude"=> "988.060.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPgE8OBS7uSnSRz1pfuW74DvW_Rk70QB1KK3C2K=w426-h240-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 17,
                "status"=> 1,
                "created_at"=> "44256,26017",
                "updated_at"=> "44256,26019"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Air Terjun Siboruon",
                "address"=> "Siboruon, Balige, Kabupaten Toba Samosir, Sumatera Utara 22312",
                "description"=> "",
                "rating"=> "4,8",
                "latitude"=> "22.896.875",
                "longitude"=> "9.908.393.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNkZ3HCmjUc3aLDp6VS7znXvcdj8-Rdjol-jn9L=w408-h544-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 19,
                "status"=> 1,
                "created_at"=> "44256,26019",
                "updated_at"=> "44256,2602"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Air Terjun Aek Limut",
                "address"=> "Meranti Utara, Pintu Pohan Merant, Kabupaten Toba Samosir, Sumatera Utara 21274",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "25.598.125",
                "longitude"=> "993.479.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipOadcoZtSPpk2FW138Cq-54HMQY1IEJOs5ojTOe=w408-h839-k-no",
                "opening_hours"=> 9,
                "closed_hours"=> 17,
                "status"=> 1,
                "created_at"=> "44256,2602",
                "updated_at"=> "44256,26021"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pantai Indah Sipinggan",
                "address"=> "Danau, Toba, Siantar Sel., Kota Pematang Siantar, Sumatera Utara 22394",
                "description"=> "",
                "rating"=> "",
                "latitude"=> "24.319.375",
                "longitude"=> "9.889.756.249.999.990",
                "image"=> "https=>//streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=dJYZ7BM27srODmoVj6oF5w&cb_client=search.gws-prod.gps&w=408&h=240&yaw=181.93112&pitch=0&thumbfov=100",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26021",
                "updated_at"=> "44256,26022"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "PANTAI AGADON",
                "address"=> "Sibaruang, Lumban Julu, Kabupaten Toba Samosir, Sumatera Utara 22386",
                "description"=> "",
                "rating"=> "4,9",
                "latitude"=> "25.106.875",
                "longitude"=> "990.405.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipM-Bb3EtNNfJIXdxvLEMUhBm2GjuLTLugjL87M=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26022",
                "updated_at"=> "44256,26023"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pemandian Aek Sipitu Dai",
                "address"=> "Aek Sipitudai, Sianjur Mula Mula, Kabupaten Samosir, Sumatera Utara 22396",
                "description"=> "",
                "rating"=> "4,2",
                "latitude"=> "25.786.875",
                "longitude"=> "9.864.756.249.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMD-DXUuZp6uIAB_ABd00sqfr8Uq4rVl_v_KSDB=w408-h302-k-no",
                "opening_hours"=> 7,
                "closed_hours"=> 19,
                "status"=> 1,
                "created_at"=> "44256,26023",
                "updated_at"=> "44256,26024"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Air Terjun Simolap",
                "address"=> "Sibongkare, Tara bintang, Kabupaten Humbang Hasundutan, Sumatera Utara 22456",
                "description"=> "",
                "rating"=> "5",
                "latitude"=> "22.708.125",
                "longitude"=> "985.185.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipM9c_FOYoa_WLR-Ddzlt8EWUUpMxhgA-UUiggPV=w408-h741-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26024",
                "updated_at"=> "44256,26025"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bumi Perkemahan Silalahi",
                "address"=> "Paropo I, Silahi Sabungan, Kabupaten Dairi, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,5",
                "latitude"=> "28.325.625",
                "longitude"=> "985.270.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPmVB_dUJG2cMdH8KB1khEFl7Y44sjn3Txrisj8=w408-h271-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26025",
                "updated_at"=> "44256,26027"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Labyrinth, Taman Simalem Resort",
                "address"=> "Km 9, Jalan Raya, Merek, Kodon-Kodon, Merek, Kabupaten Karo, Sumatera Utara 22173",
                "description"=> "",
                "rating"=> "3,7",
                "latitude"=> "28.853.125",
                "longitude"=> "985.029.375",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipM54pJJe4ASetMqxQ6vP8Qk6OA4_QXQ0_tnl8MR=w408-h725-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26027",
                "updated_at"=> "44256,26028"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit Sipolha",
                "address"=> "Bukit Sipolha, Sipolha Horison, Pematang Sidamanik, Simalungun Regency, North Sumatra 21186",
                "description"=> "",
                "rating"=> "4,7",
                "latitude"=> "27.349.375",
                "longitude"=> "988.593.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPkIA6UmELmLPqjWUdzKH9UdsMLMV4WVurnEccN=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26028",
                "updated_at"=> "44256,26029"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Bukit gajah bobok",
                "address"=> "Jl. Raya Merek-Sidikalang, Situnggaling, Merek, Kabupaten Karo, Sumatera Utara 22173",
                "description"=> "",
                "rating"=> "4,6",
                "latitude"=> "29.349.375",
                "longitude"=> "985.050.625",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNneS9fJ1pXls9wwnUIrL84V8sSppC_JqCc28d0=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26029",
                "updated_at"=> "44256,2603"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Taman Reklamasi",
                "address"=> "Pardomuan I, Pangururan, Kabupaten Samosir, Sumatera Utara 22392",
                "description"=> "",
                "rating"=> "4,3",
                "latitude"=> "26.013.125",
                "longitude"=> "987.013.125",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipM0-RlNzq-Z2uXfUgJ6YdoF5nWrQE-UqlTBPI3z=w408-h305-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,2603",
                "updated_at"=> "44256,26031"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pasar TOMOK",
                "address"=> "Tomok, Simanindo, Kabupaten Samosir, Sumatera Utara 22395",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "26.520.625",
                "longitude"=> "9.886.268.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipPCTJWNQ8aLz8mrH2I8oNIEiLcbn2CLYJ5oo3oH=w408-h306-k-no",
                "opening_hours"=> 8,
                "closed_hours"=> 18,
                "status"=> 1,
                "created_at"=> "44256,26031",
                "updated_at"=> "44256,26032"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Open Stage Pangururan",
                "address"=> "Ps. Pangururan, Pangururan, Kabupaten Samosir, Sumatera Utara 22392",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "26.088.125",
                "longitude"=> "9.869.693.749.999.990",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipMOk9hZSdbO_MxzsqP96tAwn34JVc0piJsUa_Kd=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26032",
                "updated_at"=> "44256,26034"
            ],
            [
                "kabupaten_id"=> 1,
                "category_wisata_id"=> 1,
                "name"=> "Pusuk Buhit Mountain",
                "address"=> "Pardugul, Pangururan, Kabupaten Samosir, Sumatera Utara",
                "description"=> "",
                "rating"=> "4,4",
                "latitude"=> "26.376.875",
                "longitude"=> "9.871.506.250.000.000",
                "image"=> "https=>//lh5.googleusercontent.com/p/AF1QipNphzPpLt6TMtAkAMen451Dmrc39Cv7SivLcHPV=w408-h306-k-no",
                "opening_hours"=> 0,
                "closed_hours"=> 0,
                "status"=> 1,
                "created_at"=> "44256,26034",
                "updated_at"=> "44256,26035"
            ],
        ]);
    }
}
