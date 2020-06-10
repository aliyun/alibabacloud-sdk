<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponse\ipControlInfos;
use AlibabaCloud\Tea\Model;

class DescribeIpControlsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description data
     *
     * @var ipControlInfos
     */
    public $ipControlInfos;
    protected $_name = [
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
        'ipControlInfos' => 'IpControlInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('ipControlInfos', $this->ipControlInfos, true);
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->ipControlInfos) {
            $res['IpControlInfos'] = null !== $this->ipControlInfos ? $this->ipControlInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpControlsResponse
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['IpControlInfos'])) {
            $model->ipControlInfos = ipControlInfos::fromMap($map['IpControlInfos']);
        }

        return $model;
    }
}
