<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponse\items\DBInstance\readOnlyDBInstanceIds;

use AlibabaCloud\Tea\Model;

class readOnlyDBInstanceId extends Model {
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['DBInstanceId'] = $this->DBInstanceId;
        return $res;
    }
    /**
     * @param array $map
     * @return readOnlyDBInstanceId
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        return $model;
    }
    /**
     * @description readOnlyDBInstanceId
     * @var string
     */
    public $DBInstanceId;

}
