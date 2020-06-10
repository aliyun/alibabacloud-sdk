<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsForSQLServerResponse\items;
use AlibabaCloud\Tea\Model;

class DescribeOssDownloadsForSQLServerResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description data.migrateIaskId
     *
     * @var string
     */
    public $migrateIaskId;

    /**
     * @description data.items
     *
     * @var items
     */
    public $items;
    protected $_name = [
        'requestId'      => 'RequestId',
        'DBInstanceName' => 'DBInstanceName',
        'migrateIaskId'  => 'MigrateIaskId',
        'items'          => 'Items',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceName', $this->DBInstanceName, true);
        Model::validateRequired('migrateIaskId', $this->migrateIaskId, true);
        Model::validateRequired('items', $this->items, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->migrateIaskId) {
            $res['MigrateIaskId'] = $this->migrateIaskId;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssDownloadsForSQLServerResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['MigrateIaskId'])) {
            $model->migrateIaskId = $map['MigrateIaskId'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}
