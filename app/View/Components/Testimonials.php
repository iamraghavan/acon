<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Testimonials extends Component
{
    public $testimonials;

    public function __construct()
    {
        $this->testimonials = [
            [
                'text' => 'I had a great experience at Andavar Nursing College. The faculty is very supportive and the environment is conducive to learning.',
                'name' => 'Abhirami',
                'designation' => 'Nagapattinam',

            ],
            [
                'text' => 'The campus is beautiful and the facilities are top-notch. I highly recommend Andavar Nursing College.',
                'name' => 'Gayathri',
                'designation' => 'Nagapattinam',

            ],
            [
                'text' => 'The education I received at Andavar Nursing College has been invaluable in my career as a nurse.',
                'name' => 'Keerthana R',
                'designation' => 'Nagapattinam',

            ],
        ];
    }

    public function render()
    {
        return view('components.testimonials');
    }
}
