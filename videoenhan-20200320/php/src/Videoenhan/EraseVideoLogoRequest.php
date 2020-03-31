<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class EraseVideoLogoRequest extends Model
{
    public $videoUrl;
    public $boxes;
    protected $_required = [
        'videoUrl' => true,
    ];
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'boxes'    => 'Boxes',
    ];
    protected $_description = [
        'videoUrl' => 'videoUrl',
        'boxes'    => 'boxes',
    ];
}
