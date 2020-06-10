<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\serviceConfig;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\serviceConfig\mockHeaders\mockHeader;
use AlibabaCloud\Tea\Model;

class mockHeaders extends Model
{
    /**
     * @description MockHeader
     *
     * @var array
     */
    public $mockHeader;
    protected $_name = [
        'mockHeader' => 'MockHeader',
    ];

    public function validate()
    {
        Model::validateRequired('mockHeader', $this->mockHeader, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mockHeader) {
            $res['MockHeader'] = [];
            if (null !== $this->mockHeader && \is_array($this->mockHeader)) {
                $n = 0;
                foreach ($this->mockHeader as $item) {
                    $res['MockHeader'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mockHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MockHeader'])) {
            if (!empty($map['MockHeader'])) {
                $model->mockHeader = [];
                $n                 = 0;
                foreach ($map['MockHeader'] as $item) {
                    $model->mockHeader[$n++] = null !== $item ? mockHeader::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
