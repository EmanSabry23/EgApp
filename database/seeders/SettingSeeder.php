<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key' => 'email' ,
            'value' => 'egapp@gmail.com',
        ]);
        Setting::create([
            'key' => 'phone' ,
            'value' => '01016663555',
        ]);
        Setting::create([
            'key' => 'address' ,
            'value' => '232 , شارع 6 مدينة نصر',
        ]);
        Setting::create([
            'key' => 'logo' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'favicon' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'facebook' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'skype' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'instagram' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'whatsapp' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'linkedin' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'Happy customers' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'work hours' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'completed projects' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'city' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'country' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'websitename' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'websiteDescription' ,
            'value' => '',
        ]);
        Setting::create([
            'key' => 'aboutUsDescription',
            'value' => 'لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. هو مجرد نص وهمي لصناعة الطباعة والتنضيد.'
        ]);

        Setting::create([
            'key' => 'image',
            'value' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fstackoverflow.com%2Fquestions%2F67089803%2Fimage-source-not-readable-error-occurs-every-time-when-i-use-intervention-pack&psig=AOvVaw2_KNj3fzI4lBeNbU06NIA3&ust=1672968963469000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCICGnZ2lr_wCFQAAAAAdAAAAABAD'
        ]);
    }
}
