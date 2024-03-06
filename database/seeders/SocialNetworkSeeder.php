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
            ['name' => 'Facebook', 'base_domain' => 'https://www.facebook.com/', 'icon' => ''],
            ['name' => 'Instagram', 'base_domain' => 'https://www.instagram.com/', 'icon' => ''],
            ['name' => 'Twitter', 'base_domain' => 'https://twitter.com/', 'icon' => ''],
            ['name' => 'LinkedIn', 'base_domain' => 'https://www.linkedin.com/', 'icon' => ''],
            ['name' => 'Snapchat', 'base_domain' => 'https://www.snapchat.com/', 'icon' => ''],
            ['name' => 'Pinterest', 'base_domain' => 'https://www.pinterest.com/', 'icon' => ''],
            ['name' => 'TikTok', 'base_domain' => 'https://www.tiktok.com/', 'icon' => ''],
            ['name' => 'YouTube', 'base_domain' => 'https://www.youtube.com/', 'icon' => ''],
            ['name' => 'WhatsApp', 'base_domain' => 'https://www.whatsapp.com/', 'icon' => ''],
            ['name' => 'Reddit', 'base_domain' => 'https://www.reddit.com/', 'icon' => ''],
            ['name' => 'Threads', 'base_domain' => 'https://www.threads.net/', 'icon' => ''],
        ];

        foreach ($socialNetworks as $network) {
            SocialNetwork::create($network);
        }
    }
}
