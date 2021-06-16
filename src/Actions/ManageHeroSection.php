<?php

namespace Epmnzava\LaravelCms\Actions;

use Epmnzava\LaravelCms\Models\HeroSection;

class ManageHeroSection
{

    public $herosection;
    public function __construct()
    {
    }

    public function addSection(
        $title,
        $caption = "",
        $section_background_image_path = "",
        $cta_link = "",
        $cta_title = "",
        $meta_data = ""
    ) {

        $this->herosection = HeroSection::create([
            'title' => $title,
            'caption' => $caption,
            'section_background_image' => $section_background_image_path,
            'cta_link' => $cta_link,
            'cta_title' => $cta_title,
            'meta_data' => $meta_data


        ]);


        return $this;
    }
}
