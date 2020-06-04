<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponse;

use AlibabaCloud\Tea\Model;

class securityIpList extends Model {
    protected $_name = [
        'securityGroupName' => 'SecurityGroupName',
        'ips' => 'Ips',
        'creationTime' => 'CreationTime',
        'modificationTime' => 'ModificationTime',
    ];
    public function validate() {
        Model::validateRequired('securityGroupName', $this->securityGroupName, true);
        Model::validateRequired('ips', $this->ips, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
    }
    public function toMap() {
        $res = [];
        $res['SecurityGroupName'] = $this->securityGroupName;
        $res['Ips'] = $this->ips;
        $res['CreationTime'] = $this->creationTime;
        $res['ModificationTime'] = $this->modificationTime;
        return $res;
    }
    /**
     * @param array $map
     * @return securityIpList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SecurityGroupName'])){
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if(isset($map['Ips'])){
            $model->ips = $map['Ips'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ModificationTime'])){
            $model->modificationTime = $map['ModificationTime'];
        }
        return $model;
    }
    /**
     * @description securityGroupName
     * @var string
     */
    public $securityGroupName;

    /**
     * @description ips
     * @var string
     */
    public $ips;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description modifyTime
     * @var string
     */
    public $modificationTime;

}
