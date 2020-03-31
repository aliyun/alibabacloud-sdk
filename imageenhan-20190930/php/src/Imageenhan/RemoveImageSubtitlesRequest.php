<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class RemoveImageSubtitlesRequest extends Model
{
    public $imageURL;
    public $BX;
    public $BY;
    public $BW;
    public $BH;
    protected $_required = [
        'imageURL' => true,
    ];
    protected $_name = [
        'imageURL' => 'ImageURL',
        'BX'       => 'BX',
        'BY'       => 'BY',
        'BW'       => 'BW',
        'BH'       => 'BH',
    ];
    protected $_description = [
        'imageURL' => 'imageUrl',
        'BX'       => 'bx',
        'BY'       => 'by',
        'BW'       => 'bw',
        'BH'       => 'bh',
    ];
}
