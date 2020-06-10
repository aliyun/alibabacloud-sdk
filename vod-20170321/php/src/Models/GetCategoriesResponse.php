<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponse\category;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponse\subCategories;
use AlibabaCloud\Tea\Model;

class GetCategoriesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.subTotal
     *
     * @var int
     */
    public $subTotal;

    /**
     * @description data.subCategories
     *
     * @var subCategories
     */
    public $subCategories;

    /**
     * @description data.category
     *
     * @var category
     */
    public $category;
    protected $_name = [
        'requestId'     => 'RequestId',
        'subTotal'      => 'SubTotal',
        'subCategories' => 'SubCategories',
        'category'      => 'Category',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('subTotal', $this->subTotal, true);
        Model::validateRequired('subCategories', $this->subCategories, true);
        Model::validateRequired('category', $this->category, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subTotal) {
            $res['SubTotal'] = $this->subTotal;
        }
        if (null !== $this->subCategories) {
            $res['SubCategories'] = null !== $this->subCategories ? $this->subCategories->toMap() : null;
        }
        if (null !== $this->category) {
            $res['Category'] = null !== $this->category ? $this->category->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCategoriesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubTotal'])) {
            $model->subTotal = $map['SubTotal'];
        }
        if (isset($map['SubCategories'])) {
            $model->subCategories = subCategories::fromMap($map['SubCategories']);
        }
        if (isset($map['Category'])) {
            $model->category = category::fromMap($map['Category']);
        }

        return $model;
    }
}
