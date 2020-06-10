<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityResponse\data;

use AlibabaCloud\Tea\Model;

class categories extends Model
{
    /**
     * @description score
     *
     * @var float
     */
    public $score;

    /**
     * @description categoryName
     *
     * @var string
     */
    public $categoryName;

    /**
     * @description categoryId
     *
     * @var string
     */
    public $categoryId;
    protected $_name = [
        'score'        => 'Score',
        'categoryName' => 'CategoryName',
        'categoryId'   => 'CategoryId',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('categoryName', $this->categoryName, true);
        Model::validateRequired('categoryId', $this->categoryId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        return $model;
    }
}
