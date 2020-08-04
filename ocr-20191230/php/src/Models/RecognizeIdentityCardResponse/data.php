<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse\data\backResult;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse\data\frontResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var frontResult
     */
    public $frontResult;

    /**
     * @var backResult
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
        $res = [];
        if (null !== $this->frontResult) {
            $res['FrontResult'] = null !== $this->frontResult ? $this->frontResult->toMap() : null;
        }
        if (null !== $this->backResult) {
            $res['BackResult'] = null !== $this->backResult ? $this->backResult->toMap() : null;
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
        if (isset($map['FrontResult'])) {
            $model->frontResult = frontResult::fromMap($map['FrontResult']);
        }
        if (isset($map['BackResult'])) {
            $model->backResult = backResult::fromMap($map['BackResult']);
        }

        return $model;
    }
}
