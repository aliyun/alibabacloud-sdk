<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeDrivingLicenseAdvanceRequest extends Model
{
    public $imageURLObject;
    public $side;
    protected $_required = [
        'imageURLObject' => true,
        'side'           => true,
    ];
    protected $_description = [
        'imageURLObject' => 'ImageURLObject',
        'side'           => 'side',
    ];
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'side'           => 'Side',
    ];
}
