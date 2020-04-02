<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\RecognizeImageColorResponse\data;

use AlibabaCloud\Tea\Model;

class colorTemplateList extends Model
{
    /**
     * @description color
     *
     * @var string
     */
    public $color;
    /**
     * @description label
     *
     * @var string
     */
    public $label;
    /**
     * @description percentage
     *
     * @var float
     */
    public $percentage;
    protected $_name = [
        'color'      => 'Color',
        'label'      => 'Label',
        'percentage' => 'Percentage',
    ];

    public function validate()
    {
        Model::validateRequired('color', $this->color, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('percentage', $this->percentage, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Color']      = $this->color;
        $res['Label']      = $this->label;
        $res['Percentage'] = $this->percentage;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return colorTemplateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        return $model;
    }
}
