<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class supportedInstanceTypesList extends Model
{
    /**
     * @description SupportedInstanceTypesList
     *
     * @var array
     */
    public $supportedInstanceTypesList;
    protected $_name = [
        'supportedInstanceTypesList' => 'SupportedInstanceTypesList',
    ];

    public function validate()
    {
        Model::validateRequired('supportedInstanceTypesList', $this->supportedInstanceTypesList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedInstanceTypesList) {
            $res['SupportedInstanceTypesList'] = [];
            if (null !== $this->supportedInstanceTypesList) {
                $res['SupportedInstanceTypesList'] = $this->supportedInstanceTypesList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedInstanceTypesList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedInstanceTypesList'])) {
            if (!empty($map['SupportedInstanceTypesList'])) {
                $model->supportedInstanceTypesList = [];
                $model->supportedInstanceTypesList = $map['SupportedInstanceTypesList'];
            }
        }

        return $model;
    }
}
