<?php

namespace Epmnzava\LaravelCms;

use Epmnzava\LaravelCms\Actions\ManageHeroSection;

class LaravelCms
{


    /**
     * Function to add herosection
     */
    public function addHeroSection(
        $title,
        $caption = "",
        $section_background_image_path = "",
        $cta_link = "",
        $cta_title = "",
        $meta_data = ""
    ) {

        $heroaction = new ManageHeroSection;
        $section = $heroaction->addSection($title, $caption, $section_background_image_path, $cta_link, $cta_title, $meta_data);

        return $section->herosection;
    }
}
