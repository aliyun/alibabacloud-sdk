<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponse\items;

use AlibabaCloud\Tea\Model;

class whiteListGroups extends Model {
    protected $_name = [
        'securityIpHosts' => 'SecurityIpHosts',
        'whitelistGroupName' => 'WhitelistGroupName',
    ];
    public function validate() {
        Model::validateRequired('securityIpHosts', $this->securityIpHosts, true);
        Model::validateRequired('whitelistGroupName', $this->whitelistGroupName, true);
    }
    public function toMap() {
        $res = [];
        $res['SecurityIpHosts'] = $this->securityIpHosts;
        $res['WhitelistGroupName'] = $this->whitelistGroupName;
        return $res;
    }
    /**
     * @param array $map
     * @return whiteListGroups
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SecurityIpHosts'])){
            $model->securityIpHosts = $map['SecurityIpHosts'];
        }
        if(isset($map['WhitelistGroupName'])){
            $model->whitelistGroupName = $map['WhitelistGroupName'];
        }
        return $model;
    }
    /**
     * @description description: ECS实例的IP地址和Windows系统的计算机名。格式：ip,hostname。多个实例之间以英文分号（;）隔开。; 
     * @var string
     */
    public $securityIpHosts;

    /**
     * @description description: 分布式事务白名单分组名称。; 
     * @var string
     */
    public $whitelistGroupName;

}
