<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\ListImagesResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $scrollId;
    public $imageList;
    protected $_required = [
        'scrollId'  => true,
        'imageList' => true,
    ];
    protected $_name = [
        'scrollId'  => 'ScrollId',
        'imageList' => 'ImageList',
    ];
    protected $_description = [
        'scrollId'  => 'scrollId',
        'imageList' => 'imageList',
    ];
}
