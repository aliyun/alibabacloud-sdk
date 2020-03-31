<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\RecognizeFurnitureAttributeResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $predStyleId;
    public $predStyle;
    public $predProbability;
    protected $_required = [
        'predStyleId'     => true,
        'predStyle'       => true,
        'predProbability' => true,
    ];
    protected $_name = [
        'predStyleId'     => 'PredStyleId',
        'predStyle'       => 'PredStyle',
        'predProbability' => 'PredProbability',
    ];
    protected $_description = [
        'predStyleId'     => 'predStyleId',
        'predStyle'       => 'predStyle',
        'predProbability' => 'predProbability',
    ];
}
