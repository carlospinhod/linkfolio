<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Profile;
use App\Models\SocialLink;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($username)
    {
        $profile = Profile::where('username', $username)->first();

        if($profile){
            $content = array();
            $links = Link::where('profile_id', $profile->id)->orderBy('order', 'asc')->get();
            if($links){
                foreach ($links as $link){
                    $content['links'][] = [
                        'title' => $link->title,
                        'url' => $link->url,

                    ];
                }

            }
            $social_links = SocialLink::where('profile_id', $profile->id)->orderBy('order', 'asc')->get();
            if($social_links){
                foreach ($social_links as $link){
                    $social_network = new SocialNetwork();
                    $icon = $social_network->getIcon($link->social_network_id);
                    $content['social_links'][] = [
                        'icon' => $icon,
                        'url' => $link->url,
                    ];
                }
            }
            $content = [
                'bio' => $profile->bio,
                'profile_image' => $profile->profile_image,
            ];

            return view('profile.index', compact('content'));
        }else{
            return 404;
        }
    }
}
