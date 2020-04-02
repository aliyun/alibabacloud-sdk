<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectPedestrianResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
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
     * @description boxes
     *
     * @var array
     */
    public $boxes;
    protected $_name = [
        'score' => 'Score',
        'type'  => 'Type',
        'boxes' => 'Boxes',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('boxes', $this->boxes, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Score'] = $this->score;
        $res['Type']  = $this->type;
        $res['Boxes'] = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }

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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
