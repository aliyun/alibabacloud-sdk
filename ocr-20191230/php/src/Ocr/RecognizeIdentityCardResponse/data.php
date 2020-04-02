<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardResponse;

use AlibabaCloud\SDK\Ocr\V20191230\Ocr\data\backResult;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\data\frontResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description frontResult
     *
     * @var data.frontResult
     */
    public $frontResult;
    /**
     * @description backResult
     *
     * @var data.backResult
     */
    public $backResult;
    protected $_name = [
        'frontResult' => 'FrontResult',
        'backResult'  => 'BackResult',
    ];

    public function validate()
    {
        Model::validateRequired('frontResult', $this->frontResult, true);
        Model::validateRequired('backResult', $this->backResult, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['FrontResult'] = null !== $this->frontResult ? $this->frontResult->toMap() : null;
        $res['BackResult']  = null !== $this->backResult ? $this->backResult->toMap() : null;

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
        if (isset($map['FrontResult'])) {
            $model->frontResult = data\frontResult::fromMap($map['FrontResult']);
        }
        if (isset($map['BackResult'])) {
            $model->backResult = data\backResult::fromMap($map['BackResult']);
        }

        return $model;
    }
}
