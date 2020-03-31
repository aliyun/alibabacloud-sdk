<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\BodyPostureResponse\data\outputs\results;

use AlibabaCloud\Tea\Model;

class bodies extends Model
{
    public $confident;
    public $label;
    public $positions;
    protected $_required = [
        'confident' => true,
        'label'     => true,
        'positions' => true,
    ];
    protected $_name = [
        'confident' => 'Confident',
        'label'     => 'Label',
        'positions' => 'Positions',
    ];
    protected $_description = [
        'confident' => 'confident',
        'label'     => 'label',
        'positions' => 'positions',
    ];
}
