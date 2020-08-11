<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponse\virtualBorderRouterSet\virtualBorderRouterType;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponse\virtualBorderRouterSet\virtualBorderRouterType\associatedPhysicalConnections\associatedPhysicalConnection;
use AlibabaCloud\Tea\Model;

class associatedPhysicalConnections extends Model
{
    /**
     * @var array
     */
    public $associatedPhysicalConnection;
    protected $_name = [
        'associatedPhysicalConnection' => 'AssociatedPhysicalConnection',
    ];

    public function validate()
    {
        Model::validateRequired('associatedPhysicalConnection', $this->associatedPhysicalConnection, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedPhysicalConnection) {
            $res['AssociatedPhysicalConnection'] = [];
            if (null !== $this->associatedPhysicalConnection && \is_array($this->associatedPhysicalConnection)) {
                $n = 0;
                foreach ($this->associatedPhysicalConnection as $item) {
                    $res['AssociatedPhysicalConnection'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedPhysicalConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedPhysicalConnection'])) {
            if (!empty($map['AssociatedPhysicalConnection'])) {
                $model->associatedPhysicalConnection = [];
                $n                                   = 0;
                foreach ($map['AssociatedPhysicalConnection'] as $item) {
                    $model->associatedPhysicalConnection[$n++] = null !== $item ? associatedPhysicalConnection::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
