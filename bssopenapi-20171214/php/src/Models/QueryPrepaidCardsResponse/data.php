<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponse\data\prepaidCard;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description PrepaidCard
     *
     * @var array
     */
    public $prepaidCard;
    protected $_name = [
        'prepaidCard' => 'PrepaidCard',
    ];

    public function validate()
    {
        Model::validateRequired('prepaidCard', $this->prepaidCard, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prepaidCard) {
            $res['PrepaidCard'] = [];
            if (null !== $this->prepaidCard && \is_array($this->prepaidCard)) {
                $n = 0;
                foreach ($this->prepaidCard as $item) {
                    $res['PrepaidCard'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrepaidCard'])) {
            if (!empty($map['PrepaidCard'])) {
                $model->prepaidCard = [];
                $n                  = 0;
                foreach ($map['PrepaidCard'] as $item) {
                    $model->prepaidCard[$n++] = null !== $item ? prepaidCard::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
