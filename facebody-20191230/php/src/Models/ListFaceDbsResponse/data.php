<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceDbsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceDbsResponse\data\dbList;

class data extends Model {
    protected $_name = [
        'dbList' => 'DbList',
    ];
    public function validate() {
        Model::validateRequired('dbList', $this->dbList, true);
    }
    public function toMap() {
        $res = [];
        $res['DbList'] = [];
        if(null !== $this->dbList && is_array($this->dbList)){
            $n = 0;
            foreach($this->dbList as $item){
                $res['DbList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DbList'])){
            if(!empty($map['DbList'])){
                $model->dbList = [];
                $n = 0;
                foreach($map['DbList'] as $item) {
                    $model->dbList[$n++] = null !== $item ? dbList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description dbList
     * @var array
     */
    public $dbList;

}
