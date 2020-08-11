<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentResponse\eipSegments\eipSegment;
use AlibabaCloud\Tea\Model;

class eipSegments extends Model
{
    /**
     * @var array
     */
    public $eipSegment;
    protected $_name = [
        'eipSegment' => 'EipSegment',
    ];

    public function validate()
    {
        Model::validateRequired('eipSegment', $this->eipSegment, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipSegment) {
            $res['EipSegment'] = [];
            if (null !== $this->eipSegment && \is_array($this->eipSegment)) {
                $n = 0;
                foreach ($this->eipSegment as $item) {
                    $res['EipSegment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipSegments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipSegment'])) {
            if (!empty($map['EipSegment'])) {
                $model->eipSegment = [];
                $n                 = 0;
                foreach ($map['EipSegment'] as $item) {
                    $model->eipSegment[$n++] = null !== $item ? eipSegment::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
