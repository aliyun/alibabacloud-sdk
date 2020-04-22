<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\RecognizeVehicleTypeResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description score
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'name'  => 'Name',
        'score' => 'Score',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('score', $this->score, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Name']  = $this->name;
        $res['Score'] = $this->score;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
