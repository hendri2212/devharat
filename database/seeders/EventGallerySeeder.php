<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Gallery;
use Carbon\Carbon;

class EventGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'name' => 'Workshop Laravel Modern',
                'description' => 'Belajar membangun aplikasi web yang cepat dan aman menggunakan Laravel 11 dan Livewire.',
                'event_date' => Carbon::now()->addDays(15),
            ],
            [
                'name' => 'DevHarat Monthly Meetup',
                'description' => 'Ajang silaturahmi dan sharing session antar developer di Kotabaru. Coffee & Networking!',
                'event_date' => Carbon::now()->addDays(30),
            ],
            [
                'name' => 'Kotabaru Digital Hackathon',
                'description' => 'Kompetisi coding 24 jam untuk menciptakan solusi digital bagi kemajuan UMKM di Kotabaru.',
                'event_date' => Carbon::now()->addDays(45),
            ],
            [
                'name' => 'UI/UX Design Boot Camp',
                'description' => 'Mengenal prinsip desain modern dan tools terbaru seperti Figma untuk UI/UX.',
                'event_date' => Carbon::now()->addDays(60),
            ],
            [
                'name' => 'Mobile App Development with Flutter',
                'description' => 'Membangun aplikasi mobile cross-platform (Android & iOS) dengan satu codebase.',
                'event_date' => Carbon::now()->addDays(75),
            ],
            [
                'name' => 'Kotabaru Tech Conference',
                'description' => 'Konferensi teknologi terbesar di Kotabaru menghadirkan pembicara ahli dari industri digital.',
                'event_date' => Carbon::now()->addDays(90),
            ],
        ];

        foreach ($events as $eventData) {
            $event = Event::create($eventData);

            // Add a gallery item for each event
            Gallery::create([
                'event_id' => $event->id,
                'title' => 'Moment from ' . $event->name,
                'description' => 'Momen kebersamaan saat acara ' . $event->name,
                'image' => 'gallery/sample.jpg', // Placeholder path
            ]);
        }
    }
}
