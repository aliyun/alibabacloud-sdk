<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups;

use AlibabaCloud\Tea\Model;

class securityIPGroup extends Model
{
    /**
     * @description securityIPGroupName
     *
     * @var string
     */
    public $securityIPGroupName;

    /**
     * @description securityIps
     *
     * @var string
     */
    public $securityIPs;
    protected $_name = [
        'securityIPGroupName' => 'SecurityIPGroupName',
        'securityIPs'         => 'SecurityIPs',
    ];

    public function validate()
    {
        Model::validateRequired('securityIPGroupName', $this->securityIPGroupName, true);
        Model::validateRequired('securityIPs', $this->securityIPs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityIPGroupName) {
            $res['SecurityIPGroupName'] = $this->securityIPGroupName;
        }
        if (null !== $this->securityIPs) {
            $res['SecurityIPs'] = $this->securityIPs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIPGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityIPGroupName'])) {
            $model->securityIPGroupName = $map['SecurityIPGroupName'];
        }
        if (isset($map['SecurityIPs'])) {
            $model->securityIPs = $map['SecurityIPs'];
        }

        return $model;
    }
}
