<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeCharacterAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var int
     */
    public $minHeight;

    /**
     * @var bool
     */
    public $outputProbability;
    protected $_name = [
        'imageURLObject'    => 'ImageURLObject',
        'minHeight'         => 'MinHeight',
        'outputProbability' => 'OutputProbability',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
        Model::validateRequired('minHeight', $this->minHeight, true);
        Model::validateRequired('outputProbability', $this->outputProbability, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->minHeight) {
            $res['MinHeight'] = $this->minHeight;
        }
        if (null !== $this->outputProbability) {
            $res['OutputProbability'] = $this->outputProbability;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeCharacterAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['MinHeight'])) {
            $model->minHeight = $map['MinHeight'];
        }
        if (isset($map['OutputProbability'])) {
            $model->outputProbability = $map['OutputProbability'];
        }

        return $model;
    }
}
