<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class AbstractEcommerceVideoRequest extends Model
{
    public $videoUrl;
    public $duration;
    public $width;
    public $height;
    protected $_required = [
        'videoUrl' => true,
        'duration' => true,
    ];
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'duration' => 'Duration',
        'width'    => 'Width',
        'height'   => 'Height',
    ];
    protected $_description = [
        'videoUrl' => 'videoUrl',
        'duration' => 'duration',
        'width'    => 'width',
        'height'   => 'height',
    ];
}
