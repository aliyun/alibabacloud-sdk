<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponse\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponse\data\plates\roi;
use AlibabaCloud\Tea\Model;

class plates extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var string
     */
    public $plateType;

    /**
     * @var float
     */
    public $plateTypeConfidence;

    /**
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
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }
        if (null !== $this->plateType) {
            $res['PlateType'] = $this->plateType;
        }
        if (null !== $this->plateTypeConfidence) {
            $res['PlateTypeConfidence'] = $this->plateTypeConfidence;
        }
        if (null !== $this->roi) {
            $res['Roi'] = null !== $this->roi ? $this->roi->toMap() : null;
        }

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
