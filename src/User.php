<?php

namespace App;

class User
{
    public function playVideo(VideoPlayer $videoPlayer)
    {
        return $videoPlayer->play();
    }

    public function manageWorker(ManageableInterface $manageable)
    {
        return $manageable->manage();
    }
}
