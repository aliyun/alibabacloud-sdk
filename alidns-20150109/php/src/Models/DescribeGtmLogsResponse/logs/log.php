<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsResponse\logs;

use AlibabaCloud\Tea\Model;

class log extends Model {
    protected $_name = [
        'operTime' => 'OperTime',
        'operAction' => 'OperAction',
        'entityType' => 'EntityType',
        'entityId' => 'EntityId',
        'entityName' => 'EntityName',
        'operIp' => 'OperIp',
        'operTimestamp' => 'OperTimestamp',
        'id' => 'Id',
        'content' => 'Content',
    ];
    public function validate() {
        Model::validateRequired('operTime', $this->operTime, true);
        Model::validateRequired('operAction', $this->operAction, true);
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('entityName', $this->entityName, true);
        Model::validateRequired('operIp', $this->operIp, true);
        Model::validateRequired('operTimestamp', $this->operTimestamp, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('content', $this->content, true);
    }
    public function toMap() {
        $res = [];
        $res['OperTime'] = $this->operTime;
        $res['OperAction'] = $this->operAction;
        $res['EntityType'] = $this->entityType;
        $res['EntityId'] = $this->entityId;
        $res['EntityName'] = $this->entityName;
        $res['OperIp'] = $this->operIp;
        $res['OperTimestamp'] = $this->operTimestamp;
        $res['Id'] = $this->id;
        $res['Content'] = $this->content;
        return $res;
    }
    /**
     * @param array $map
     * @return log
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OperTime'])){
            $model->operTime = $map['OperTime'];
        }
        if(isset($map['OperAction'])){
            $model->operAction = $map['OperAction'];
        }
        if(isset($map['EntityType'])){
            $model->entityType = $map['EntityType'];
        }
        if(isset($map['EntityId'])){
            $model->entityId = $map['EntityId'];
        }
        if(isset($map['EntityName'])){
            $model->entityName = $map['EntityName'];
        }
        if(isset($map['OperIp'])){
            $model->operIp = $map['OperIp'];
        }
        if(isset($map['OperTimestamp'])){
            $model->operTimestamp = $map['OperTimestamp'];
        }
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['Content'])){
            $model->content = $map['Content'];
        }
        return $model;
    }
    /**
     * @description createTime
     * @var string
     */
    public $operTime;

    /**
     * @description action
     * @var string
     */
    public $operAction;

    /**
     * @description entityType
     * @var string
     */
    public $entityType;

    /**
     * @description instanceId
     * @var string
     */
    public $entityId;

    /**
     * @description entityKey
     * @var string
     */
    public $entityName;

    /**
     * @description userClientIp
     * @var string
     */
    public $operIp;

    /**
     * @description createTimestamp
     * @var integer
     */
    public $operTimestamp;

    /**
     * @description id
     * @var integer
     */
    public $id;

    /**
     * @description content
     * @var string
     */
    public $content;

}
