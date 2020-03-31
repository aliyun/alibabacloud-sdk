<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\DetectObjectResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $score;
    public $type;
    public $boxes;
    protected $_required = [
        'score' => true,
        'type'  => true,
        'boxes' => true,
    ];
    protected $_name = [
        'score' => 'Score',
        'type'  => 'Type',
        'boxes' => 'Boxes',
    ];
    protected $_description = [
        'score' => 'score',
        'type'  => 'type',
        'boxes' => 'boxes',
    ];
}
