<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponse\attachedMediaList;

use AlibabaCloud\Tea\Model;

class categories extends Model {
    protected $_name = [
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'level' => 'Level',
        'parentId' => 'ParentId',
    ];
    public function validate() {
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('parentId', $this->parentId, true);
    }
    public function toMap() {
        $res = [];
        $res['CateId'] = $this->cateId;
        $res['CateName'] = $this->cateName;
        $res['Level'] = $this->level;
        $res['ParentId'] = $this->parentId;
        return $res;
    }
    /**
     * @param array $map
     * @return categories
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['CateName'])){
            $model->cateName = $map['CateName'];
        }
        if(isset($map['Level'])){
            $model->level = $map['Level'];
        }
        if(isset($map['ParentId'])){
            $model->parentId = $map['ParentId'];
        }
        return $model;
    }
    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description cateName
     * @var string
     */
    public $cateName;

    /**
     * @description level
     * @var integer
     */
    public $level;

    /**
     * @description parentId
     * @var integer
     */
    public $parentId;

}
