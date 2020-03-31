<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\TaggingImageResponse\data;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    public $confidence;
    public $value;
    protected $_required = [
        'confidence' => true,
        'value'      => true,
    ];
    protected $_name = [
        'confidence' => 'Confidence',
        'value'      => 'Value',
    ];
    protected $_description = [
        'confidence' => 'confidence',
        'value'      => 'value',
    ];
}
