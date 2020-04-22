<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeCharacterRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description minHeight
     *
     * @var int
     */
    public $minHeight;

    /**
     * @description outputProbability
     *
     * @var bool
     */
    public $outputProbability;
    protected $_name = [
        'imageURL'          => 'ImageURL',
        'minHeight'         => 'MinHeight',
        'outputProbability' => 'OutputProbability',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('minHeight', $this->minHeight, true);
        Model::validateRequired('outputProbability', $this->outputProbability, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['ImageURL']          = $this->imageURL;
        $res['MinHeight']         = $this->minHeight;
        $res['OutputProbability'] = $this->outputProbability;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeCharacterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
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
