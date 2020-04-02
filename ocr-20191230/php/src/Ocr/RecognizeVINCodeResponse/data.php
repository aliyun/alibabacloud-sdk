<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVINCodeResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description vinCode
     *
     * @var string
     */
    public $vinCode;
    protected $_name = [
        'vinCode' => 'VinCode',
    ];

    public function validate()
    {
        Model::validateRequired('vinCode', $this->vinCode, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['VinCode'] = $this->vinCode;

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
        if (isset($map['VinCode'])) {
            $model->vinCode = $map['VinCode'];
        }

        return $model;
    }
}
