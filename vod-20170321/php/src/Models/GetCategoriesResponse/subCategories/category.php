<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponse\subCategories;

use AlibabaCloud\Tea\Model;

class category extends Model
{
    /**
     * @description cateId
     *
     * @var int
     */
    public $cateId;

    /**
     * @description cateName
     *
     * @var string
     */
    public $cateName;

    /**
     * @description level
     *
     * @var int
     */
    public $level;

    /**
     * @description parentId
     *
     * @var int
     */
    public $parentId;

    /**
     * @description subTotal
     *
     * @var int
     */
    public $subTotal;

    /**
     * @description type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cateId'   => 'CateId',
        'cateName' => 'CateName',
        'level'    => 'Level',
        'parentId' => 'ParentId',
        'subTotal' => 'SubTotal',
        'type'     => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('parentId', $this->parentId, true);
        Model::validateRequired('subTotal', $this->subTotal, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->subTotal) {
            $res['SubTotal'] = $this->subTotal;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return category
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['SubTotal'])) {
            $model->subTotal = $map['SubTotal'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
