<?php

use Illuminate\Support\Str;


use App\Models\Component;

return [
    'pages' => [
        Str::slug('home'),
        Str::slug('aboutus'),
        Str::slug('service)'),
        Str::slug('contact'),
    ],
    'meta_dropdown' => [
        'title',
        'description'
    ],
    'menu' => [
        ['name' => 'Component', 'slug' => 'component'],
        ['name' => 'Service', 'slug' => 'service'],
        ['name' => 'Career', 'slug' => 'career'],
        ['name' => 'Technology', 'slug' => 'technology'],
        ['name' => 'Specification', 'slug' => 'specification'],
        ['name' => 'Why Choose Us', 'slug' => 'why-choose-us'],
        ['name' => 'Testimonial', 'slug' => 'testimonial'],
        // ['name' => 'Working Process', 'slug' => 'working-process'],
        ['name' => 'MetaTag', 'slug' => 'meta-tag'],



    ],
    'category' => ['mobile-development', 'frontend', 'backend', 'design', 'database'],
    'add-exclude' => ['Component'],
    'list-exclude' => []
];
