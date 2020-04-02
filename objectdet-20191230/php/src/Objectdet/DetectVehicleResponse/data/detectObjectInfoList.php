<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\DetectVehicleResponse\data;

use AlibabaCloud\Tea\Model;

class detectObjectInfoList extends Model
{
    /**
     * @description score
     *
     * @var float
     */
    public $score;
    /**
     * @description type
     *
     * @var string
     */
    public $type;
    /**
     * @description id
     *
     * @var int
     */
    public $id;
    /**
     * @description boxes
     *
     * @var array
     */
    public $boxes;
    protected $_name = [
        'score' => 'Score',
        'type'  => 'Type',
        'id'    => 'Id',
        'boxes' => 'Boxes',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('boxes', $this->boxes, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Score'] = $this->score;
        $res['Type']  = $this->type;
        $res['Id']    = $this->id;
        $res['Boxes'] = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectObjectInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $model->boxes = $map['Boxes'];
            }
        }

        return $model;
    }
}
