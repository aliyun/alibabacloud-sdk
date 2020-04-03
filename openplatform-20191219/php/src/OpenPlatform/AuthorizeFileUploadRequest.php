<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;

use AlibabaCloud\Tea\Model;

class AuthorizeFileUploadRequest extends Model
{
    /**
     * @description product
     *
     * @var string
     */
    public $product;
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'product'  => 'Product',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('product', $this->product, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['Product']  = $this->product;
        $res['RegionId'] = $this->regionId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeFileUploadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
