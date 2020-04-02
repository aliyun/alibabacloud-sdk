<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeStampResponse\data\results;

use AlibabaCloud\Tea\Model;

class generalText extends Model
{
    /**
     * @description content
     *
     * @var string
     */
    public $content;
    /**
     * @description confidence
     *
     * @var float
     */
    public $confidence;
    protected $_name = [
        'content'    => 'Content',
        'confidence' => 'Confidence',
    ];

    public function validate()
    {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('confidence', $this->confidence, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Content']    = $this->content;
        $res['Confidence'] = $this->confidence;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return generalText
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        return $model;
    }
}
