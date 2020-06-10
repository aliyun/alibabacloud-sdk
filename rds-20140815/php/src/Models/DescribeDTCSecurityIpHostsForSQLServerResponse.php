<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponse\items;
use AlibabaCloud\Tea\Model;

class DescribeDTCSecurityIpHostsForSQLServerResponse extends Model
{
    /**
     * @description description: 请求ID。;
     *
     * @var string
     */
    public $requestId;

    /**
     * @description description: 实例ID。;
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: 分布式事务白名单条目数。;
     *
     * @var string
     */
    public $ipHostPairNum;

    /**
     * @description description: 分布式事务白名单分组列表。
     *
     * @var items
     */
    public $items;
    protected $_name = [
        'requestId'     => 'RequestId',
        'DBInstanceId'  => 'DBInstanceId',
        'ipHostPairNum' => 'IpHostPairNum',
        'items'         => 'Items',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('ipHostPairNum', $this->ipHostPairNum, true);
        Model::validateRequired('items', $this->items, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ipHostPairNum) {
            $res['IpHostPairNum'] = $this->ipHostPairNum;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDTCSecurityIpHostsForSQLServerResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['IpHostPairNum'])) {
            $model->ipHostPairNum = $map['IpHostPairNum'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}
