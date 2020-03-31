<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\HandPostureResponse\data\outputs\results;

use AlibabaCloud\Tea\Model;

class box extends Model
{
    public $confident;
    public $positions;
    protected $_required = [
        'confident' => true,
        'positions' => true,
    ];
    protected $_name = [
        'confident' => 'Confident',
        'positions' => 'Positions',
    ];
    protected $_description = [
        'confident' => 'confident',
        'positions' => 'positions',
    ];
}
