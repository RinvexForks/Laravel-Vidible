<?php

namespace BrianFaust\Vidible\Adapters;

use BrianFaust\Vidible\Contracts\ShareableInterface;
use BrianFaust\Vidible\Models\Video;

class Azure extends AbstractAdapter implements ShareableInterface
{
    public function getShareableLink(Video $video, array $filters = [])
    {
    }
}