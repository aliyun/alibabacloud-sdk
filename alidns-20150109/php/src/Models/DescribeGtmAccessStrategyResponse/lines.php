<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyResponse\lines\line;
use AlibabaCloud\Tea\Model;

class lines extends Model
{
    /**
     * @description Line
     *
     * @var array
     */
    public $line;
    protected $_name = [
        'line' => 'Line',
    ];

    public function validate()
    {
        Model::validateRequired('line', $this->line, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = [];
            if (null !== $this->line && \is_array($this->line)) {
                $n = 0;
                foreach ($this->line as $item) {
                    $res['Line'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Line'])) {
            if (!empty($map['Line'])) {
                $model->line = [];
                $n           = 0;
                foreach ($map['Line'] as $item) {
                    $model->line[$n++] = null !== $item ? line::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
