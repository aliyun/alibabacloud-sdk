<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\ClassifyingRubbishResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description category
     *
     * @var string
     */
    public $category;
    /**
     * @description categoryScore
     *
     * @var float
     */
    public $categoryScore;
    /**
     * @description rubbish
     *
     * @var string
     */
    public $rubbish;
    /**
     * @description rubbishScore
     *
     * @var float
     */
    public $rubbishScore;
    protected $_name = [
        'category'      => 'Category',
        'categoryScore' => 'CategoryScore',
        'rubbish'       => 'Rubbish',
        'rubbishScore'  => 'RubbishScore',
    ];

    public function validate()
    {
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('categoryScore', $this->categoryScore, true);
        Model::validateRequired('rubbish', $this->rubbish, true);
        Model::validateRequired('rubbishScore', $this->rubbishScore, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['Category']      = $this->category;
        $res['CategoryScore'] = $this->categoryScore;
        $res['Rubbish']       = $this->rubbish;
        $res['RubbishScore']  = $this->rubbishScore;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CategoryScore'])) {
            $model->categoryScore = $map['CategoryScore'];
        }
        if (isset($map['Rubbish'])) {
            $model->rubbish = $map['Rubbish'];
        }
        if (isset($map['RubbishScore'])) {
            $model->rubbishScore = $map['RubbishScore'];
        }

        return $model;
    }
}
