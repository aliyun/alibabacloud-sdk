<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteMetaCategoryRequest extends Model
{
    /**
     * @description categoryId
     *
     * @var int
     */
    public $categoryId;
    protected $_name = [
        'categoryId' => 'CategoryId',
    ];

    public function validate()
    {
        Model::validateRequired('categoryId', $this->categoryId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMetaCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        return $model;
    }
}
