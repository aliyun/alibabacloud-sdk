<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01Response\demo01;

use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01Response\demo01\demo011\demo011;
use AlibabaCloud\Tea\Model;

class demo011 extends Model
{
    /**
     * @description Demo011
     *
     * @var array
     */
    public $demo011;
    protected $_name = [
        'demo011' => 'Demo011',
    ];

    public function validate()
    {
        Model::validateRequired('demo011', $this->demo011, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demo011) {
            $res['Demo011'] = [];
            if (null !== $this->demo011 && \is_array($this->demo011)) {
                $n = 0;
                foreach ($this->demo011 as $item) {
                    $res['Demo011'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demo011
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Demo011'])) {
            if (!empty($map['Demo011'])) {
                $model->demo011 = [];
                $n              = 0;
                foreach ($map['Demo011'] as $item) {
                    $model->demo011[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
