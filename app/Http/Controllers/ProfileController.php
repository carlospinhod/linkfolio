<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Profile;
use App\Models\ProfileStatistic;
use App\Models\SocialLink;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($username)
    {
        $profile = Profile::where('username', $username)->first();
        $content = array();
        if ($profile) {
            $this->newProfileVisit($profile);
            $content = [
                'bio' => $profile->bio,
                'profile_image' => $profile->profile_image,
                'username' => $profile->username,
            ];
            $links = Link::where('profile_id', $profile->id)->orderBy('order', 'asc')->get();
            if ($links) {
                foreach ($links as $link) {
                    $content['links'][] = [
                        'title' => $link->title,
                        'url' => $link->url,
                    ];
                }
            }
            $social_links = SocialLink::where('profile_id', $profile->id)->orderBy('order', 'asc')->get();

            if ($social_links) {
                foreach ($social_links as $link) {
                    $social_network = new SocialNetwork();
                    $icon = $social_network->getIcon($link->social_network_id);
                    $url = $social_network->getDomain($link->social_network_id) . $link->url;
                    $content['social_links'][] = [
                        'icon' => $icon,
                        'url' => $url,
                    ];
                }
            }

            return view('layouts.default', compact('content'));
        } else {
            return 404;
        }
    }
    function newProfileVisit(Profile $profile)
    {
        $isMobile = request()->header('sec-ch-ua-mobile');
        $platform = request()->header('sec-ch-ua-platform');
        if ($isMobile == '?0'){
            $isMobile = 'Desktop';

        }else{
            $isMobile = 'Mobile';
        }
        $action_details =json_encode([
            'device_type' => $isMobile,
            'device_platform' => $platform
        ]);
        ProfileStatistic::create([
            'profile_id' => $profile->id,
            'action_type' => 'profile_visit',
            'action_details' => $action_details,
        ]);
    }
}
