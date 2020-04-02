<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\RecognizeFurnitureAttributeResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description predStyleId
     *
     * @var string
     */
    public $predStyleId;
    /**
     * @description predStyle
     *
     * @var string
     */
    public $predStyle;
    /**
     * @description predProbability
     *
     * @var float
     */
    public $predProbability;
    protected $_name = [
        'predStyleId'     => 'PredStyleId',
        'predStyle'       => 'PredStyle',
        'predProbability' => 'PredProbability',
    ];

    public function validate()
    {
        Model::validateRequired('predStyleId', $this->predStyleId, true);
        Model::validateRequired('predStyle', $this->predStyle, true);
        Model::validateRequired('predProbability', $this->predProbability, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['PredStyleId']     = $this->predStyleId;
        $res['PredStyle']       = $this->predStyle;
        $res['PredProbability'] = $this->predProbability;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PredStyleId'])) {
            $model->predStyleId = $map['PredStyleId'];
        }
        if (isset($map['PredStyle'])) {
            $model->predStyle = $map['PredStyle'];
        }
        if (isset($map['PredProbability'])) {
            $model->predProbability = $map['PredProbability'];
        }

        return $model;
    }
}
