<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesResponse\eipAddresses\eipAddress;
use AlibabaCloud\Tea\Model;

class eipAddresses extends Model
{
    /**
     * @description EipAddress
     *
     * @var array
     */
    public $eipAddress;
    protected $_name = [
        'eipAddress' => 'EipAddress',
    ];

    public function validate()
    {
        Model::validateRequired('eipAddress', $this->eipAddress, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = [];
            if (null !== $this->eipAddress && \is_array($this->eipAddress)) {
                $n = 0;
                foreach ($this->eipAddress as $item) {
                    $res['EipAddress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipAddress'])) {
            if (!empty($map['EipAddress'])) {
                $model->eipAddress = [];
                $n                 = 0;
                foreach ($map['EipAddress'] as $item) {
                    $model->eipAddress[$n++] = null !== $item ? eipAddress::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
