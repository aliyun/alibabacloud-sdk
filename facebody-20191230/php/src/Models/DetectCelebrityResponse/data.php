<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponse;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponse\data\faceRecognizeResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var array
     */
    public $faceRecognizeResults;
    protected $_name = [
        'width'                => 'Width',
        'height'               => 'Height',
        'faceRecognizeResults' => 'FaceRecognizeResults',
    ];

    public function validate()
    {
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('faceRecognizeResults', $this->faceRecognizeResults, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->faceRecognizeResults) {
            $res['FaceRecognizeResults'] = [];
            if (null !== $this->faceRecognizeResults && \is_array($this->faceRecognizeResults)) {
                $n = 0;
                foreach ($this->faceRecognizeResults as $item) {
                    $res['FaceRecognizeResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

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
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['FaceRecognizeResults'])) {
            if (!empty($map['FaceRecognizeResults'])) {
                $model->faceRecognizeResults = [];
                $n                           = 0;
                foreach ($map['FaceRecognizeResults'] as $item) {
                    $model->faceRecognizeResults[$n++] = null !== $item ? faceRecognizeResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
