<?php

/*
 * This file is part of Laravel Vidible.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Vidible\Traits;

trait VidibleTrait
{
    public function videos()
    {
        return $this->morphMany('BrianFaust\Vidible\Models\Video', 'vidible');
    }
}
