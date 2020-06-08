<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\extra;

use AlibabaCloud\Tea\Model;

class DBInstanceId extends Model {
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['DBInstanceId'] = [];
        if(null !== $this->DBInstanceId){
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DBInstanceId
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBInstanceId'])){
            if(!empty($map['DBInstanceId'])){
                $model->DBInstanceId = [];
                $model->DBInstanceId = $map['DBInstanceId'];
            }
        }
        return $model;
    }
    /**
     * @description DBInstanceId
     * @var array
     */
    public $DBInstanceId;

}
