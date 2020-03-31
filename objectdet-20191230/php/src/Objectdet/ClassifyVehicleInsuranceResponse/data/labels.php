<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\ClassifyVehicleInsuranceResponse\data;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    public $score;
    public $name;
    protected $_required = [
        'score' => true,
        'name'  => true,
    ];
    protected $_name = [
        'score' => 'Score',
        'name'  => 'Name',
    ];
    protected $_description = [
        'score' => 'score',
        'name'  => 'name',
    ];
}
