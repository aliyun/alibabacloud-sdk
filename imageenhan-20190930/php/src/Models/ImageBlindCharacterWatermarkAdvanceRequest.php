<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ImageBlindCharacterWatermarkAdvanceRequest extends Model
{
    /**
     * @description OriginImageURLObject
     *
     * @var Stream
     */
    public $originImageURLObject;

    /**
     * @description functionType
     *
     * @var string
     */
    public $functionType;

    /**
     * @description text
     *
     * @var string
     */
    public $text;

    /**
     * @description watermarkImageUrl
     *
     * @var string
     */
    public $watermarkImageURL;

    /**
     * @description outputFileType
     *
     * @var string
     */
    public $outputFileType;

    /**
     * @description qualityFactor
     *
     * @var int
     */
    public $qualityFactor;
    protected $_name = [
        'originImageURLObject' => 'OriginImageURLObject',
        'functionType'         => 'FunctionType',
        'text'                 => 'Text',
        'watermarkImageURL'    => 'WatermarkImageURL',
        'outputFileType'       => 'OutputFileType',
        'qualityFactor'        => 'QualityFactor',
    ];

    public function validate()
    {
        Model::validateRequired('originImageURLObject', $this->originImageURLObject, true);
        Model::validateRequired('functionType', $this->functionType, true);
        Model::validateRequired('qualityFactor', $this->qualityFactor, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originImageURLObject) {
            $res['OriginImageURLObject'] = $this->originImageURLObject;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->watermarkImageURL) {
            $res['WatermarkImageURL'] = $this->watermarkImageURL;
        }
        if (null !== $this->outputFileType) {
            $res['OutputFileType'] = $this->outputFileType;
        }
        if (null !== $this->qualityFactor) {
            $res['QualityFactor'] = $this->qualityFactor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageBlindCharacterWatermarkAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginImageURLObject'])) {
            $model->originImageURLObject = $map['OriginImageURLObject'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURL = $map['WatermarkImageURL'];
        }
        if (isset($map['OutputFileType'])) {
            $model->outputFileType = $map['OutputFileType'];
        }
        if (isset($map['QualityFactor'])) {
            $model->qualityFactor = $map['QualityFactor'];
        }

        return $model;
    }
}
