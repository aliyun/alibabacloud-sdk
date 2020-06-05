<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceEntitiesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceEntitiesResponse\data\entities;

class data extends Model {
    protected $_name = [
        'token' => 'Token',
        'totalCount' => 'TotalCount',
        'entities' => 'Entities',
    ];
    public function validate() {
        Model::validateRequired('token', $this->token, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('entities', $this->entities, true);
    }
    public function toMap() {
        $res = [];
        $res['Token'] = $this->token;
        $res['TotalCount'] = $this->totalCount;
        $res['Entities'] = [];
        if(null !== $this->entities && is_array($this->entities)){
            $n = 0;
            foreach($this->entities as $item){
                $res['Entities'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['Token'])){
            $model->token = $map['Token'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['Entities'])){
            if(!empty($map['Entities'])){
                $model->entities = [];
                $n = 0;
                foreach($map['Entities'] as $item) {
                    $model->entities[$n++] = null !== $item ? entities::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description token
     * @var string
     */
    public $token;

    /**
     * @description totalCount
     * @var integer
     */
    public $totalCount;

    /**
     * @description data
     * @var array
     */
    public $entities;

}
