<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddCustomLineResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.id
     *
     * @var int
     */
    public $lineId;

    /**
     * @description module.code
     *
     * @var string
     */
    public $lineCode;
    protected $_name = [
        'requestId' => 'RequestId',
        'lineId'    => 'LineId',
        'lineCode'  => 'LineCode',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('lineId', $this->lineId, true);
        Model::validateRequired('lineCode', $this->lineCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCustomLineResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }

        return $model;
    }
}
