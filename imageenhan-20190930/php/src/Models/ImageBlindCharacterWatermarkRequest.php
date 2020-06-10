<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ImageBlindCharacterWatermarkRequest extends Model
{
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

    /**
     * @description originImageUrl
     *
     * @var string
     */
    public $originImageURL;
    protected $_name = [
        'functionType'      => 'FunctionType',
        'text'              => 'Text',
        'watermarkImageURL' => 'WatermarkImageURL',
        'outputFileType'    => 'OutputFileType',
        'qualityFactor'     => 'QualityFactor',
        'originImageURL'    => 'OriginImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('functionType', $this->functionType, true);
        Model::validateRequired('qualityFactor', $this->qualityFactor, true);
        Model::validateRequired('originImageURL', $this->originImageURL, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->originImageURL) {
            $res['OriginImageURL'] = $this->originImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageBlindCharacterWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['OriginImageURL'])) {
            $model->originImageURL = $map['OriginImageURL'];
        }

        return $model;
    }
}
