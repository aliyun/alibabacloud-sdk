<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponse\DBClusterSecurityGroups;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponse\items;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterAccessWhitelistResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.groupItems
     *
     * @var items
     */
    public $items;

    /**
     * @description data.securityGroupRel
     *
     * @var DBClusterSecurityGroups
     */
    public $DBClusterSecurityGroups;
    protected $_name = [
        'requestId'               => 'RequestId',
        'items'                   => 'Items',
        'DBClusterSecurityGroups' => 'DBClusterSecurityGroups',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('items', $this->items, true);
        Model::validateRequired('DBClusterSecurityGroups', $this->DBClusterSecurityGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->DBClusterSecurityGroups) {
            $res['DBClusterSecurityGroups'] = null !== $this->DBClusterSecurityGroups ? $this->DBClusterSecurityGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterAccessWhitelistResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['DBClusterSecurityGroups'])) {
            $model->DBClusterSecurityGroups = DBClusterSecurityGroups::fromMap($map['DBClusterSecurityGroups']);
        }

        return $model;
    }
}
