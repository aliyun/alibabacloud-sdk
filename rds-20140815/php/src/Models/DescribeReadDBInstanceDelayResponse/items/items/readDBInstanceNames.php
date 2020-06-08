<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items\items;

use AlibabaCloud\Tea\Model;

class readDBInstanceNames extends Model {
    protected $_name = [
        'readDBInstanceName' => 'ReadDBInstanceName',
    ];
    public function validate() {
        Model::validateRequired('readDBInstanceName', $this->readDBInstanceName, true);
    }
    public function toMap() {
        $res = [];
        $res['ReadDBInstanceName'] = [];
        if(null !== $this->readDBInstanceName){
            $res['ReadDBInstanceName'] = $this->readDBInstanceName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return readDBInstanceNames
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ReadDBInstanceName'])){
            if(!empty($map['ReadDBInstanceName'])){
                $model->readDBInstanceName = [];
                $model->readDBInstanceName = $map['ReadDBInstanceName'];
            }
        }
        return $model;
    }
    /**
     * @description ReadDBInstanceName
     * @var array
     */
    public $readDBInstanceName;

}
