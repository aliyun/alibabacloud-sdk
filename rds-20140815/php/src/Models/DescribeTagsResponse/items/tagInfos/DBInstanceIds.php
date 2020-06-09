<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponse\items\tagInfos;

use AlibabaCloud\Tea\Model;

class DBInstanceIds extends Model {
    protected $_name = [
        'DBInstanceIds' => 'DBInstanceIds',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceIds', $this->DBInstanceIds, true);
    }
    public function toMap() {
        $res = [];
        $res['DBInstanceIds'] = [];
        if(null !== $this->DBInstanceIds){
            $res['DBInstanceIds'] = $this->DBInstanceIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DBInstanceIds
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBInstanceIds'])){
            if(!empty($map['DBInstanceIds'])){
                $model->DBInstanceIds = [];
                $model->DBInstanceIds = $map['DBInstanceIds'];
            }
        }
        return $model;
    }
    /**
     * @description DBInstanceIds
     * @var array
     */
    public $DBInstanceIds;

}
