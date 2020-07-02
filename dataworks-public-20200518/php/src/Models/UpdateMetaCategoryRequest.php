<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetaCategoryRequest extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description categoryId
     *
     * @var int
     */
    public $categoryId;
    protected $_name = [
        'name'       => 'Name',
        'comment'    => 'Comment',
        'categoryId' => 'CategoryId',
    ];

    public function validate()
    {
        Model::validateRequired('categoryId', $this->categoryId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMetaCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        return $model;
    }
}
