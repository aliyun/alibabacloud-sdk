<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class AdjustVideoColorRequest extends Model
{
    public $videoUrl;
    public $videoBitrate;
    public $videoCodec;
    public $videoFormat;
    public $mode;
    protected $_required = [
        'videoUrl' => true,
        'mode'     => true,
    ];
    protected $_name = [
        'videoUrl'     => 'VideoUrl',
        'videoBitrate' => 'VideoBitrate',
        'videoCodec'   => 'VideoCodec',
        'videoFormat'  => 'VideoFormat',
        'mode'         => 'Mode',
    ];
    protected $_description = [
        'videoUrl'     => 'videoUrl',
        'videoBitrate' => 'videoBitrate',
        'videoCodec'   => 'videoCodec',
        'videoFormat'  => 'videoFormat',
        'mode'         => 'mode',
    ];
}
