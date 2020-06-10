<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponse\domainTransfers;

use AlibabaCloud\Tea\Model;

class domainTransfer extends Model
{
    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description createTimestamp
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description fromUserId
     *
     * @var int
     */
    public $fromUserId;

    /**
     * @description targetUserId
     *
     * @var int
     */
    public $targetUserId;

    /**
     * @description id
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'domainName'      => 'DomainName',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'fromUserId'      => 'FromUserId',
        'targetUserId'    => 'TargetUserId',
        'id'              => 'Id',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('fromUserId', $this->fromUserId, true);
        Model::validateRequired('targetUserId', $this->targetUserId, true);
        Model::validateRequired('id', $this->id, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->fromUserId) {
            $res['FromUserId'] = $this->fromUserId;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTransfer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['FromUserId'])) {
            $model->fromUserId = $map['FromUserId'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
