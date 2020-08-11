<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Tea\Model;

class networkTypes extends Model
{
    /**
     * @description supportedNetworkCategory
     *
     * @var array
     */
    public $supportedNetworkCategory;
    protected $_name = [
        'supportedNetworkCategory' => 'supportedNetworkCategory',
    ];

    public function validate()
    {
        Model::validateRequired('supportedNetworkCategory', $this->supportedNetworkCategory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedNetworkCategory) {
            $res['supportedNetworkCategory'] = $this->supportedNetworkCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['supportedNetworkCategory'])) {
            if (!empty($map['supportedNetworkCategory'])) {
                $model->supportedNetworkCategory = $map['supportedNetworkCategory'];
            }
        }

        return $model;
    }
}
