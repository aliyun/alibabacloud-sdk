<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\CompareFaceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $confidence;
    public $thresholds;
    public $rectAList;
    public $rectBList;
    protected $_required = [
        'confidence' => true,
        'thresholds' => true,
        'rectAList'  => true,
        'rectBList'  => true,
    ];
    protected $_name = [
        'confidence' => 'Confidence',
        'thresholds' => 'Thresholds',
        'rectAList'  => 'RectAList',
        'rectBList'  => 'RectBList',
    ];
    protected $_description = [
        'confidence' => 'confidence',
        'thresholds' => 'thresholds',
        'rectAList'  => 'rectAList',
        'rectBList'  => 'rectBList',
    ];
}
