<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Videorecog;

use AlibabaCloud\Tea\Model;

class GenerateVideoCoverRequest extends Model
{
    public $videoUrl;
    public $isGif;
    protected $_required = [
        'videoUrl' => true,
        'isGif'    => true,
    ];
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'isGif'    => 'IsGif',
    ];
    protected $_description = [
        'videoUrl' => 'videoUrl',
        'isGif'    => 'isGif',
    ];
}
