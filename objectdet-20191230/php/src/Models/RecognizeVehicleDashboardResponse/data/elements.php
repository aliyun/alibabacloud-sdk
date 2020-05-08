<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehicleDashboardResponse\data;

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
     * @description className
     *
     * @var string
     */
    public $className;

    /**
     * @description label
     *
     * @var string
     */
    public $label;

    /**
     * @description boxes
     *
     * @var array
     */
    public $boxes;
    protected $_name = [
        'score'     => 'Score',
        'className' => 'ClassName',
        'label'     => 'Label',
        'boxes'     => 'Boxes',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('className', $this->className, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('boxes', $this->boxes, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['Score']     = $this->score;
        $res['ClassName'] = $this->className;
        $res['Label']     = $this->label;
        $res['Boxes']     = [];
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
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
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
