<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizePassportMRZResponse\data;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description recognitionScore
     *
     * @var float
     */
    public $recognitionScore;

    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description detectionScore
     *
     * @var float
     */
    public $detectionScore;

    /**
     * @description bandBoxes
     *
     * @var array
     */
    public $bandBoxes;
    protected $_name = [
        'name'             => 'Name',
        'recognitionScore' => 'RecognitionScore',
        'content'          => 'Content',
        'detectionScore'   => 'DetectionScore',
        'bandBoxes'        => 'BandBoxes',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('recognitionScore', $this->recognitionScore, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('detectionScore', $this->detectionScore, true);
        Model::validateRequired('bandBoxes', $this->bandBoxes, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['Name']             = $this->name;
        $res['RecognitionScore'] = $this->recognitionScore;
        $res['Content']          = $this->content;
        $res['DetectionScore']   = $this->detectionScore;
        $res['BandBoxes']        = [];
        if (null !== $this->bandBoxes) {
            $res['BandBoxes'] = $this->bandBoxes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecognitionScore'])) {
            $model->recognitionScore = $map['RecognitionScore'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DetectionScore'])) {
            $model->detectionScore = $map['DetectionScore'];
        }
        if (isset($map['BandBoxes'])) {
            if (!empty($map['BandBoxes'])) {
                $model->bandBoxes = [];
                $model->bandBoxes = $map['BandBoxes'];
            }
        }

        return $model;
    }
}
