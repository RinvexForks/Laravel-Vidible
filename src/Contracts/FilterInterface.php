<?php

namespace BrianFaust\Vidible\Contracts;

use FFMpeg\Media\Video;

interface FilterInterface
{
    public function applyFilter(Video $video);
}