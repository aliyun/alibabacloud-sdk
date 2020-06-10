<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceResponse\items;

use AlibabaCloud\Tea\Model;

class DBInstancePerformance extends Model
{
    /**
     * @description cpuUsage
     *
     * @var string
     */
    public $CPUUsage;

    /**
     * @description iopsUsage
     *
     * @var string
     */
    public $IOPSUsage;

    /**
     * @description diskUsage
     *
     * @var string
     */
    public $diskUsage;

    /**
     * @description sessionUsage
     *
     * @var string
     */
    public $sessionUsage;

    /**
     * @description dbInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description dbInstanceDescription
     *
     * @var string
     */
    public $DBInstanceDescription;
    protected $_name = [
        'CPUUsage'              => 'CPUUsage',
        'IOPSUsage'             => 'IOPSUsage',
        'diskUsage'             => 'DiskUsage',
        'sessionUsage'          => 'SessionUsage',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceDescription' => 'DBInstanceDescription',
    ];

    public function validate()
    {
        Model::validateRequired('CPUUsage', $this->CPUUsage, true);
        Model::validateRequired('IOPSUsage', $this->IOPSUsage, true);
        Model::validateRequired('diskUsage', $this->diskUsage, true);
        Model::validateRequired('sessionUsage', $this->sessionUsage, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBInstanceDescription', $this->DBInstanceDescription, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPUUsage) {
            $res['CPUUsage'] = $this->CPUUsage;
        }
        if (null !== $this->IOPSUsage) {
            $res['IOPSUsage'] = $this->IOPSUsage;
        }
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }
        if (null !== $this->sessionUsage) {
            $res['SessionUsage'] = $this->sessionUsage;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstancePerformance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPUUsage'])) {
            $model->CPUUsage = $map['CPUUsage'];
        }
        if (isset($map['IOPSUsage'])) {
            $model->IOPSUsage = $map['IOPSUsage'];
        }
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }
        if (isset($map['SessionUsage'])) {
            $model->sessionUsage = $map['SessionUsage'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        return $model;
    }
}
