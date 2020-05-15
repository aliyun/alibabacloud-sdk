<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponse\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\plates\roi;
use AlibabaCloud\Tea\Model;

class plates extends Model
{
    /**
     * @description confidence
     *
     * @var float
     */
    public $confidence;

    /**
     * @description plateNumber
     *
     * @var string
     */
    public $plateNumber;

    /**
     * @description plateType
     *
     * @var string
     */
    public $plateType;

    /**
     * @description plateTypeConfidence
     *
     * @var float
     */
    public $plateTypeConfidence;

    /**
     * @description roi
     *
     * @var roi
     */
    public $roi;
    protected $_name = [
        'confidence'          => 'Confidence',
        'plateNumber'         => 'PlateNumber',
        'plateType'           => 'PlateType',
        'plateTypeConfidence' => 'PlateTypeConfidence',
        'roi'                 => 'Roi',
    ];

    public function validate()
    {
        Model::validateRequired('confidence', $this->confidence, true);
        Model::validateRequired('plateNumber', $this->plateNumber, true);
        Model::validateRequired('plateType', $this->plateType, true);
        Model::validateRequired('plateTypeConfidence', $this->plateTypeConfidence, true);
        Model::validateRequired('roi', $this->roi, true);
    }

    public function toMap()
    {
        $res                        = [];
        $res['Confidence']          = $this->confidence;
        $res['PlateNumber']         = $this->plateNumber;
        $res['PlateType']           = $this->plateType;
        $res['PlateTypeConfidence'] = $this->plateTypeConfidence;
        $res['Roi']                 = null !== $this->roi ? $this->roi->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }
        if (isset($map['PlateType'])) {
            $model->plateType = $map['PlateType'];
        }
        if (isset($map['PlateTypeConfidence'])) {
            $model->plateTypeConfidence = $map['PlateTypeConfidence'];
        }
        if (isset($map['Roi'])) {
            $model->roi = roi::fromMap($map['Roi']);
        }

        return $model;
    }
}
