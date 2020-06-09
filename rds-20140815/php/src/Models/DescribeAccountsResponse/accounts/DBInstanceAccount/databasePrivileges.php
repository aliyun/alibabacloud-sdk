<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts\DBInstanceAccount;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts\DBInstanceAccount\databasePrivileges\databasePrivilege;

class databasePrivileges extends Model {
    protected $_name = [
        'databasePrivilege' => 'DatabasePrivilege',
    ];
    public function validate() {
        Model::validateRequired('databasePrivilege', $this->databasePrivilege, true);
    }
    public function toMap() {
        $res = [];
        $res['DatabasePrivilege'] = [];
        if(null !== $this->databasePrivilege && is_array($this->databasePrivilege)){
            $n = 0;
            foreach($this->databasePrivilege as $item){
                $res['DatabasePrivilege'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return databasePrivileges
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DatabasePrivilege'])){
            if(!empty($map['DatabasePrivilege'])){
                $model->databasePrivilege = [];
                $n = 0;
                foreach($map['DatabasePrivilege'] as $item) {
                    $model->databasePrivilege[$n++] = null !== $item ? databasePrivilege::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DatabasePrivilege
     * @var array
     */
    public $databasePrivilege;

}
