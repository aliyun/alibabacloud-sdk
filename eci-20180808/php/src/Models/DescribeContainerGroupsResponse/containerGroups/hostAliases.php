<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\Tea\Model;

class hostAliases extends Model
{
    /**
     * @description ip
     *
     * @var string
     */
    public $ip;

    /**
     * @description hostnames
     *
     * @var array
     */
    public $hostnames;
    protected $_name = [
        'ip'        => 'Ip',
        'hostnames' => 'Hostnames',
    ];

    public function validate()
    {
        Model::validateRequired('ip', $this->ip, true);
        Model::validateRequired('hostnames', $this->hostnames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->hostnames) {
            $res['Hostnames'] = [];
            if (null !== $this->hostnames) {
                $res['Hostnames'] = $this->hostnames;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostAliases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = [];
                $model->hostnames = $map['Hostnames'];
            }
        }

        return $model;
    }
}
