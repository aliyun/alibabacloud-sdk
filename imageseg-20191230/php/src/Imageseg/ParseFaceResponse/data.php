<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\ParseFaceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $originImageURL;
    public $elements;
    protected $_required = [
        'originImageURL' => true,
        'elements'       => true,
    ];
    protected $_name = [
        'originImageURL' => 'OriginImageURL',
        'elements'       => 'Elements',
    ];
    protected $_description = [
        'originImageURL' => 'originImageUrl',
        'elements'       => 'elements',
    ];
}
