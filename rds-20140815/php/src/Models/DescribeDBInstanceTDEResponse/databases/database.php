<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDEResponse\databases;

use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $DBName;

    /**
     * @description tdeStatus
     *
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'DBName'    => 'DBName',
        'TDEStatus' => 'TDEStatus',
    ];

    public function validate()
    {
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('TDEStatus', $this->TDEStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return database
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
