<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LatestEventsCirculars extends Component
{
    public $events;

    public function __construct()
    {
        $this->events = [
            [
                'title' => 'Nursing Symposium 2024',
                'description' => 'Join us for a comprehensive symposium on the latest advancements in nursing.',
                'created_at' => '2024-08-20',
                'author' => 'Dr. Gomathi',
                'comments_count' => 5,
                'image' => 'images/blog.svg',
                'url' => 'event-details.html',
            ],
            [
                'title' => 'Health Camp 2024',
                'description' => 'Our annual health camp is back with free health check-ups and consultations.',
                'created_at' => '2024-07-15',
                'author' => 'Health Committee',
                'comments_count' => 12,
                'image' => 'images/blog.svg',
                'url' => 'event-details.html',
            ],
            [
                'title' => 'Alumni Meet 2024',
                'description' => 'Reconnect with your batchmates and celebrate your journey at Andavar College.',
                'created_at' => '2024-06-25',
                'author' => 'Alumni Association',
                'comments_count' => 8,
                'image' => 'images/blog.svg',
                'url' => 'event-details.html',
            ],
            [
                'title' => 'Alumni Meet 2024',
                'description' => 'Reconnect with your batchmates and celebrate your journey at Andavar College.',
                'created_at' => '2024-06-25',
                'author' => 'Alumni Association',
                'comments_count' => 8,
                'image' => 'images/blog.svg',
                'url' => 'event-details.html',
            ],
        ];
    }

    public function render()
    {
        return view('components.latest-events-circulars', ['events' => $this->events]);
    }
}
