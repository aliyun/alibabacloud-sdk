<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos\DBInstanceNetInfo;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups\securityIPGroup;

class securityIPGroups extends Model {
    protected $_name = [
        'securityIPGroup' => 'securityIPGroup',
    ];
    public function validate() {
        Model::validateRequired('securityIPGroup', $this->securityIPGroup, true);
    }
    public function toMap() {
        $res = [];
        $res['securityIPGroup'] = [];
        if(null !== $this->securityIPGroup && is_array($this->securityIPGroup)){
            $n = 0;
            foreach($this->securityIPGroup as $item){
                $res['securityIPGroup'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return securityIPGroups
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['securityIPGroup'])){
            if(!empty($map['securityIPGroup'])){
                $model->securityIPGroup = [];
                $n = 0;
                foreach($map['securityIPGroup'] as $item) {
                    $model->securityIPGroup[$n++] = null !== $item ? securityIPGroup::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description securityIPGroup
     * @var array
     */
    public $securityIPGroup;

}
