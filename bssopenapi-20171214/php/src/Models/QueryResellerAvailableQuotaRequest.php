<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryResellerAvailableQuotaRequest extends Model
{
    /**
     * @description itemCodes
     *
     * @var string
     */
    public $itemCodes;
    protected $_name = [
        'itemCodes' => 'ItemCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemCodes) {
            $res['ItemCodes'] = $this->itemCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryResellerAvailableQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemCodes'])) {
            $model->itemCodes = $map['ItemCodes'];
        }

        return $model;
    }
}
