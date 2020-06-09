<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponse\domainTransfers;

use AlibabaCloud\Tea\Model;

class domainTransfer extends Model {
    protected $_name = [
        'domainName' => 'DomainName',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'fromUserId' => 'FromUserId',
        'targetUserId' => 'TargetUserId',
        'id' => 'Id',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('fromUserId', $this->fromUserId, true);
        Model::validateRequired('targetUserId', $this->targetUserId, true);
        Model::validateRequired('id', $this->id, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainName'] = $this->domainName;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['FromUserId'] = $this->fromUserId;
        $res['TargetUserId'] = $this->targetUserId;
        $res['Id'] = $this->id;
        return $res;
    }
    /**
     * @param array $map
     * @return domainTransfer
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CreateTimestamp'])){
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if(isset($map['FromUserId'])){
            $model->fromUserId = $map['FromUserId'];
        }
        if(isset($map['TargetUserId'])){
            $model->targetUserId = $map['TargetUserId'];
        }
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        return $model;
    }
    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description createTimestamp
     * @var integer
     */
    public $createTimestamp;

    /**
     * @description fromUserId
     * @var integer
     */
    public $fromUserId;

    /**
     * @description targetUserId
     * @var integer
     */
    public $targetUserId;

    /**
     * @description id
     * @var integer
     */
    public $id;

}
