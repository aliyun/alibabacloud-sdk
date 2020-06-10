<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLCollectorPolicyResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.configValue
     *
     * @var string
     */
    public $SQLCollectorStatus;

    /**
     * @description data.storagePeriod
     *
     * @var int
     */
    public $storagePeriod;
    protected $_name = [
        'requestId'          => 'RequestId',
        'SQLCollectorStatus' => 'SQLCollectorStatus',
        'storagePeriod'      => 'StoragePeriod',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('SQLCollectorStatus', $this->SQLCollectorStatus, true);
        Model::validateRequired('storagePeriod', $this->storagePeriod, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SQLCollectorStatus) {
            $res['SQLCollectorStatus'] = $this->SQLCollectorStatus;
        }
        if (null !== $this->storagePeriod) {
            $res['StoragePeriod'] = $this->storagePeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLCollectorPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQLCollectorStatus'])) {
            $model->SQLCollectorStatus = $map['SQLCollectorStatus'];
        }
        if (isset($map['StoragePeriod'])) {
            $model->storagePeriod = $map['StoragePeriod'];
        }

        return $model;
    }
}
