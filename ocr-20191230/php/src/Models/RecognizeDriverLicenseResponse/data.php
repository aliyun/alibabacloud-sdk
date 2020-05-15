<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponse;

use AlibabaCloud\SDK\Ocr\V20191230\Models\data\backResult;
use AlibabaCloud\SDK\Ocr\V20191230\Models\data\faceResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description faceResult
     *
     * @var faceResult
     */
    public $faceResult;

    /**
     * @description backResult
     *
     * @var backResult
     */
    public $backResult;
    protected $_name = [
        'faceResult' => 'FaceResult',
        'backResult' => 'BackResult',
    ];

    public function validate()
    {
        Model::validateRequired('faceResult', $this->faceResult, true);
        Model::validateRequired('backResult', $this->backResult, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['FaceResult'] = null !== $this->faceResult ? $this->faceResult->toMap() : null;
        $res['BackResult'] = null !== $this->backResult ? $this->backResult->toMap() : null;

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
        if (isset($map['FaceResult'])) {
            $model->faceResult = faceResult::fromMap($map['FaceResult']);
        }
        if (isset($map['BackResult'])) {
            $model->backResult = backResult::fromMap($map['BackResult']);
        }

        return $model;
    }
}
