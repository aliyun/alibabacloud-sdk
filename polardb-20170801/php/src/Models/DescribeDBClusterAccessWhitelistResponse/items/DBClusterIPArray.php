<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponse\items;

use AlibabaCloud\Tea\Model;

class DBClusterIPArray extends Model
{
    /**
     * @description groupName
     *
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @description groupTag
     *
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @description securityIPList
     *
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'DBClusterIPArrayName'      => 'DBClusterIPArrayName',
        'DBClusterIPArrayAttribute' => 'DBClusterIPArrayAttribute',
        'securityIps'               => 'SecurityIps',
    ];

    public function validate()
    {
        Model::validateRequired('DBClusterIPArrayName', $this->DBClusterIPArrayName, true);
        Model::validateRequired('DBClusterIPArrayAttribute', $this->DBClusterIPArrayAttribute, true);
        Model::validateRequired('securityIps', $this->securityIps, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterIPArrayName) {
            $res['DBClusterIPArrayName'] = $this->DBClusterIPArrayName;
        }
        if (null !== $this->DBClusterIPArrayAttribute) {
            $res['DBClusterIPArrayAttribute'] = $this->DBClusterIPArrayAttribute;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusterIPArray
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterIPArrayName'])) {
            $model->DBClusterIPArrayName = $map['DBClusterIPArrayName'];
        }
        if (isset($map['DBClusterIPArrayAttribute'])) {
            $model->DBClusterIPArrayAttribute = $map['DBClusterIPArrayAttribute'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
