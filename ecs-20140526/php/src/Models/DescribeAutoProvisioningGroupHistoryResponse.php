<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse\autoProvisioningGroupHistories;
use AlibabaCloud\Tea\Model;

class DescribeAutoProvisioningGroupHistoryResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var autoProvisioningGroupHistories
     */
    public $autoProvisioningGroupHistories;
    protected $_name = [
        'requestId'                      => 'RequestId',
        'totalCount'                     => 'TotalCount',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'autoProvisioningGroupHistories' => 'AutoProvisioningGroupHistories',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('autoProvisioningGroupHistories', $this->autoProvisioningGroupHistories, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->autoProvisioningGroupHistories) {
            $res['AutoProvisioningGroupHistories'] = null !== $this->autoProvisioningGroupHistories ? $this->autoProvisioningGroupHistories->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoProvisioningGroupHistoryResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AutoProvisioningGroupHistories'])) {
            $model->autoProvisioningGroupHistories = autoProvisioningGroupHistories::fromMap($map['AutoProvisioningGroupHistories']);
        }

        return $model;
    }
}
