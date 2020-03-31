<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class EraseVideoSubtitlesRequest extends Model
{
    public $videoUrl;
    public $BX;
    public $BY;
    public $BW;
    public $BH;
    protected $_required = [
        'videoUrl' => true,
    ];
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'BX'       => 'BX',
        'BY'       => 'BY',
        'BW'       => 'BW',
        'BH'       => 'BH',
    ];
    protected $_description = [
        'videoUrl' => 'videoUrl',
        'BX'       => 'bx',
        'BY'       => 'by',
        'BW'       => 'bw',
        'BH'       => 'bh',
    ];
}
