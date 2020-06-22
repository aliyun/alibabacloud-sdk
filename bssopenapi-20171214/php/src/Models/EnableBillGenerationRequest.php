<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class EnableBillGenerationRequest extends Model
{
    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        Model::validateRequired('productCode', $this->productCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableBillGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
