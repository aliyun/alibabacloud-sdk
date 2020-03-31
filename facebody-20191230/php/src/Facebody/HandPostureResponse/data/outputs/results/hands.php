<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\HandPostureResponse\data\outputs\results;

use AlibabaCloud\Tea\Model;

class hands extends Model
{
    public $confident;
    public $keyPoints;
    protected $_required = [
        'confident' => true,
        'keyPoints' => true,
    ];
    protected $_name = [
        'confident' => 'Confident',
        'keyPoints' => 'KeyPoints',
    ];
    protected $_description = [
        'confident' => 'confident',
        'keyPoints' => 'keypoints',
    ];
}
