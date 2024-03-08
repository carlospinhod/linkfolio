<?php

namespace Database\Seeders;

use App\Models\SocialNetwork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socialNetworks = [
            ['name' => 'Facebook', 'base_domain' => 'https://www.facebook.com/', 'icon' => 'bi-facebook'],
            ['name' => 'Instagram', 'base_domain' => 'https://www.instagram.com/', 'icon' => 'bi-instagram'],
            ['name' => 'Twitter', 'base_domain' => 'https://twitter.com/', 'icon' => 'bi-twitter'],
            ['name' => 'LinkedIn', 'base_domain' => 'https://www.linkedin.com/', 'icon' => 'bi-linkedin'],
            ['name' => 'Snapchat', 'base_domain' => 'https://www.snapchat.com/', 'icon' => 'bi-snapchat'],
            ['name' => 'Pinterest', 'base_domain' => 'https://www.pinterest.com/', 'icon' => 'bi-pinterest'],
            ['name' => 'TikTok', 'base_domain' => 'https://www.tiktok.com/', 'icon' => 'bi-tiktok'],
            ['name' => 'YouTube', 'base_domain' => 'https://www.youtube.com/', 'icon' => 'bi-youtube'],
            ['name' => 'WhatsApp', 'base_domain' => 'https://www.whatsapp.com/', 'icon' => 'bi-whatsapp'],
            ['name' => 'Reddit', 'base_domain' => 'https://www.reddit.com/', 'icon' => 'bi-reddit'],
            ['name' => 'Threads', 'base_domain' => 'https://www.threads.net/', 'icon' => 'bi-alarm'],
        ];

        foreach ($socialNetworks as $network) {
            SocialNetwork::create($network);
        }
    }
}
