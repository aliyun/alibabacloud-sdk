<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse\data\redeem\redeem;
use AlibabaCloud\Tea\Model;

class redeem extends Model
{
    /**
     * @description Redeem
     *
     * @var array
     */
    public $redeem;
    protected $_name = [
        'redeem' => 'Redeem',
    ];

    public function validate()
    {
        Model::validateRequired('redeem', $this->redeem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->redeem) {
            $res['Redeem'] = [];
            if (null !== $this->redeem && \is_array($this->redeem)) {
                $n = 0;
                foreach ($this->redeem as $item) {
                    $res['Redeem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redeem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Redeem'])) {
            if (!empty($map['Redeem'])) {
                $model->redeem = [];
                $n             = 0;
                foreach ($map['Redeem'] as $item) {
                    $model->redeem[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
