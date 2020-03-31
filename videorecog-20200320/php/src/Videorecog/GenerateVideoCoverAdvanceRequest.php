<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Videorecog;

use AlibabaCloud\Tea\Model;

class GenerateVideoCoverAdvanceRequest extends Model
{
    public $videoUrlObject;
    public $isGif;
    protected $_required = [
        'videoUrlObject' => true,
        'isGif'          => true,
    ];
    protected $_description = [
        'videoUrlObject' => 'VideoUrlObject',
        'isGif'          => 'isGif',
    ];
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'isGif'          => 'IsGif',
    ];
}
