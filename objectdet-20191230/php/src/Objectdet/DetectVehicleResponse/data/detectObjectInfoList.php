<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\DetectVehicleResponse\data;

use AlibabaCloud\Tea\Model;

class detectObjectInfoList extends Model
{
    public $score;
    public $type;
    public $id;
    public $boxes;
    protected $_required = [
        'score' => true,
        'type'  => true,
        'id'    => true,
        'boxes' => true,
    ];
    protected $_name = [
        'score' => 'Score',
        'type'  => 'Type',
        'id'    => 'Id',
        'boxes' => 'Boxes',
    ];
    protected $_description = [
        'score' => 'score',
        'type'  => 'type',
        'id'    => 'id',
        'boxes' => 'boxes',
    ];
}
