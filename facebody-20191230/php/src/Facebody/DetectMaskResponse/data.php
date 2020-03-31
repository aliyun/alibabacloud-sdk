<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectMaskResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $mask;
    public $faceProbability;
    protected $_required = [
        'mask'            => true,
        'faceProbability' => true,
    ];
    protected $_name = [
        'mask'            => 'Mask',
        'faceProbability' => 'FaceProbability',
    ];
    protected $_description = [
        'mask'            => 'mask',
        'faceProbability' => 'faceProbability',
    ];
}
