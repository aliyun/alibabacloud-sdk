<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDrivingLicenseResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $faceResult;
    public $backResult;
    protected $_required = [
        'faceResult' => true,
        'backResult' => true,
    ];
    protected $_name = [
        'faceResult' => 'FaceResult',
        'backResult' => 'BackResult',
    ];
    protected $_description = [
        'faceResult' => 'faceResult',
        'backResult' => 'backResult',
    ];
}
