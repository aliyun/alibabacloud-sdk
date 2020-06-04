<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponse\subCategories;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponse\category;

class GetCategoriesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'subTotal' => 'SubTotal',
        'subCategories' => 'SubCategories',
        'category' => 'Category',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('subTotal', $this->subTotal, true);
        Model::validateRequired('subCategories', $this->subCategories, true);
        Model::validateRequired('category', $this->category, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SubTotal'] = $this->subTotal;
        $res['SubCategories'] = null !== $this->subCategories ? $this->subCategories->toMap() : null;
        $res['Category'] = null !== $this->category ? $this->category->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetCategoriesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SubTotal'])){
            $model->subTotal = $map['SubTotal'];
        }
        if(isset($map['SubCategories'])){
            $model->subCategories = subCategories::fromMap($map['SubCategories']);
        }
        if(isset($map['Category'])){
            $model->category = category::fromMap($map['Category']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.subTotal
     * @var integer
     */
    public $subTotal;

    /**
     * @description data.subCategories
     * @var subCategories
     */
    public $subCategories;

    /**
     * @description data.category
     * @var category
     */
    public $category;

}
