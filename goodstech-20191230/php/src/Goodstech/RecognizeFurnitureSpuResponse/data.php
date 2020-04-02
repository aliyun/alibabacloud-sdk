<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\RecognizeFurnitureSpuResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description predCateId
     *
     * @var string
     */
    public $predCateId;
    /**
     * @description predCate
     *
     * @var string
     */
    public $predCate;
    /**
     * @description predProbability
     *
     * @var float
     */
    public $predProbability;
    protected $_name = [
        'predCateId'      => 'PredCateId',
        'predCate'        => 'PredCate',
        'predProbability' => 'PredProbability',
    ];

    public function validate()
    {
        Model::validateRequired('predCateId', $this->predCateId, true);
        Model::validateRequired('predCate', $this->predCate, true);
        Model::validateRequired('predProbability', $this->predProbability, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['PredCateId']      = $this->predCateId;
        $res['PredCate']        = $this->predCate;
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
        if (isset($map['PredCateId'])) {
            $model->predCateId = $map['PredCateId'];
        }
        if (isset($map['PredCate'])) {
            $model->predCate = $map['PredCate'];
        }
        if (isset($map['PredProbability'])) {
            $model->predProbability = $map['PredProbability'];
        }

        return $model;
    }
}
