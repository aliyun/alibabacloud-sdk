<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\RecognizeVehicleDashboardResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $score;
    public $className;
    public $label;
    public $boxes;
    protected $_required = [
        'score'     => true,
        'className' => true,
        'label'     => true,
        'boxes'     => true,
    ];
    protected $_name = [
        'score'     => 'Score',
        'className' => 'ClassName',
        'label'     => 'Label',
        'boxes'     => 'Boxes',
    ];
    protected $_description = [
        'score'     => 'score',
        'className' => 'className',
        'label'     => 'label',
        'boxes'     => 'boxes',
    ];
}
