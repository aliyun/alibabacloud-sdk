<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDNSSLBStatusResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.recordCount
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description module.open
     *
     * @var bool
     */
    public $open;
    protected $_name = [
        'requestId'   => 'RequestId',
        'recordCount' => 'RecordCount',
        'open'        => 'Open',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordCount', $this->recordCount, true);
        Model::validateRequired('open', $this->open, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDNSSLBStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }

        return $model;
    }
}
