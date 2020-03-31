<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Imageseg;

use AlibabaCloud\Tea\Model;

class RefineMaskAdvanceRequest extends Model
{
    public $imageURLObject;
    public $maskImageURL;
    protected $_required = [
        'imageURLObject' => true,
        'maskImageURL'   => true,
    ];
    protected $_description = [
        'imageURLObject' => 'ImageURLObject',
        'maskImageURL'   => 'maskImageUrl',
    ];
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'maskImageURL'   => 'MaskImageURL',
    ];
}
