<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\AddCategoryResponse\category;

class AddCategoryResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'category' => 'Category',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('category', $this->category, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Category'] = null !== $this->category ? $this->category->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return AddCategoryResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
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
     * @description data.category
     * @var category
     */
    public $category;

}
