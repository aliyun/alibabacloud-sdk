<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class ModifyClusterTagsResponseBody extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['requestId'] = $this->requestId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
