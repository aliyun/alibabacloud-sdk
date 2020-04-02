<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\ClassifyVehicleInsuranceResponse\data;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description score
     *
     * @var float
     */
    public $score;
    /**
     * @description name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'score' => 'Score',
        'name'  => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Score'] = $this->score;
        $res['Name']  = $this->name;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
