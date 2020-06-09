<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class ListFaceEntitiesRequest extends Model {
    protected $_name = [
        'dbName' => 'DbName',
        'offset' => 'Offset',
        'limit' => 'Limit',
        'token' => 'Token',
        'labels' => 'Labels',
        'entityIdPrefix' => 'EntityIdPrefix',
        'order' => 'Order',
    ];
    public function validate() {
        Model::validateRequired('dbName', $this->dbName, true);
    }
    public function toMap() {
        $res = [];
        $res['DbName'] = $this->dbName;
        $res['Offset'] = $this->offset;
        $res['Limit'] = $this->limit;
        $res['Token'] = $this->token;
        $res['Labels'] = $this->labels;
        $res['EntityIdPrefix'] = $this->entityIdPrefix;
        $res['Order'] = $this->order;
        return $res;
    }
    /**
     * @param array $map
     * @return ListFaceEntitiesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DbName'])){
            $model->dbName = $map['DbName'];
        }
        if(isset($map['Offset'])){
            $model->offset = $map['Offset'];
        }
        if(isset($map['Limit'])){
            $model->limit = $map['Limit'];
        }
        if(isset($map['Token'])){
            $model->token = $map['Token'];
        }
        if(isset($map['Labels'])){
            $model->labels = $map['Labels'];
        }
        if(isset($map['EntityIdPrefix'])){
            $model->entityIdPrefix = $map['EntityIdPrefix'];
        }
        if(isset($map['Order'])){
            $model->order = $map['Order'];
        }
        return $model;
    }
    /**
     * @description dbName
     * @var string
     */
    public $dbName;

    /**
     * @description offset
     * @var integer
     */
    public $offset;

    /**
     * @description limit
     * @var integer
     */
    public $limit;

    /**
     * @description token
     * @var string
     */
    public $token;

    /**
     * @description labels
     * @var string
     */
    public $labels;

    /**
     * @description entityIdPrefix
     * @var string
     */
    public $entityIdPrefix;

    /**
     * @description order
     * @var string
     */
    public $order;

}
