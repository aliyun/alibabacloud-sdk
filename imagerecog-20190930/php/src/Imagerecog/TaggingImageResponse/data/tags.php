<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\TaggingImageResponse\data;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description confidence
     *
     * @var float
     */
    public $confidence;

    /**
     * @description value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'confidence' => 'Confidence',
        'value'      => 'Value',
    ];

    public function validate()
    {
        Model::validateRequired('confidence', $this->confidence, true);
        Model::validateRequired('value', $this->value, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Confidence'] = $this->confidence;
        $res['Value']      = $this->value;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
