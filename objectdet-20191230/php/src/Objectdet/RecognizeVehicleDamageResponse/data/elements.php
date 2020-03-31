<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\RecognizeVehicleDamageResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $score;
    public $type;
    public $scores;
    public $boxes;
    protected $_required = [
        'score'  => true,
        'type'   => true,
        'scores' => true,
        'boxes'  => true,
    ];
    protected $_name = [
        'score'  => 'Score',
        'type'   => 'Type',
        'scores' => 'Scores',
        'boxes'  => 'Boxes',
    ];
    protected $_description = [
        'score'  => 'score',
        'type'   => 'type',
        'scores' => 'scores',
        'boxes'  => 'boxes',
    ];
}
