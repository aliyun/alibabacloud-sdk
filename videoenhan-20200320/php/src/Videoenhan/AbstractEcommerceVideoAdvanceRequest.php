<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class AbstractEcommerceVideoAdvanceRequest extends Model
{
    public $videoUrlObject;
    public $duration;
    public $width;
    public $height;
    protected $_required = [
        'videoUrlObject' => true,
        'duration'       => true,
    ];
    protected $_description = [
        'videoUrlObject' => 'VideoUrlObject',
        'duration'       => 'duration',
        'width'          => 'width',
        'height'         => 'height',
    ];
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'duration'       => 'Duration',
        'width'          => 'Width',
        'height'         => 'Height',
    ];
}
