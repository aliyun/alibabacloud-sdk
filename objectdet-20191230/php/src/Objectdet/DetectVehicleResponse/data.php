<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\DetectVehicleResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $width;
    public $height;
    public $detectObjectInfoList;
    protected $_required = [
        'width'                => true,
        'height'               => true,
        'detectObjectInfoList' => true,
    ];
    protected $_name = [
        'width'                => 'Width',
        'height'               => 'Height',
        'detectObjectInfoList' => 'DetectObjectInfoList',
    ];
    protected $_description = [
        'width'                => 'width',
        'height'               => 'height',
        'detectObjectInfoList' => 'detectObjectInfoList',
    ];
}
