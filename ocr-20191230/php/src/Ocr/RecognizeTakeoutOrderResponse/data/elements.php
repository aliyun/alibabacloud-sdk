<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTakeoutOrderResponse\data;

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
     * @description name
     *
     * @var string
     */
    public $name;
    /**
     * @description value
     *
     * @var string
     */
    public $value;
    /**
     * @description boxes
     *
     * @var array
     */
    public $boxes;
    protected $_name = [
        'score' => 'Score',
        'name'  => 'Name',
        'value' => 'Value',
        'boxes' => 'Boxes',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('boxes', $this->boxes, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Score'] = $this->score;
        $res['Name']  = $this->name;
        $res['Value'] = $this->value;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
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
