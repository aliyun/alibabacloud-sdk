<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse\associatedCens\associatedCen;
use AlibabaCloud\Tea\Model;

class associatedCens extends Model
{
    /**
     * @var array
     */
    public $associatedCen;
    protected $_name = [
        'associatedCen' => 'AssociatedCen',
    ];

    public function validate()
    {
        Model::validateRequired('associatedCen', $this->associatedCen, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedCen) {
            $res['AssociatedCen'] = [];
            if (null !== $this->associatedCen && \is_array($this->associatedCen)) {
                $n = 0;
                foreach ($this->associatedCen as $item) {
                    $res['AssociatedCen'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedCens
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedCen'])) {
            if (!empty($map['AssociatedCen'])) {
                $model->associatedCen = [];
                $n                    = 0;
                foreach ($map['AssociatedCen'] as $item) {
                    $model->associatedCen[$n++] = null !== $item ? associatedCen::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
