<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaCategoryResponse\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description createTimestamp
     *
     * @var int
     */
    public $createTime;

    /**
     * @description modifiedTimestamp
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description ownerId
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description lastOperatorId
     *
     * @var string
     */
    public $lastOperatorId;

    /**
     * @description pid
     *
     * @var int
     */
    public $parentCategoryId;

    /**
     * @description depth
     *
     * @var int
     */
    public $depth;
    protected $_name = [
        'categoryId'       => 'CategoryId',
        'name'             => 'Name',
        'createTime'       => 'CreateTime',
        'modifiedTime'     => 'ModifiedTime',
        'comment'          => 'Comment',
        'ownerId'          => 'OwnerId',
        'lastOperatorId'   => 'LastOperatorId',
        'parentCategoryId' => 'ParentCategoryId',
        'depth'            => 'Depth',
    ];

    public function validate()
    {
        Model::validateRequired('categoryId', $this->categoryId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('lastOperatorId', $this->lastOperatorId, true);
        Model::validateRequired('parentCategoryId', $this->parentCategoryId, true);
        Model::validateRequired('depth', $this->depth, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->lastOperatorId) {
            $res['LastOperatorId'] = $this->lastOperatorId;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['LastOperatorId'])) {
            $model->lastOperatorId = $map['LastOperatorId'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }

        return $model;
    }
}
