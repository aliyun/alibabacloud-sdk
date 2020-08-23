<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponse\dirQuotaInfos;
use AlibabaCloud\Tea\Model;

class DescribeDirQuotasResponse extends Model
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
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var array
     */
    public $dirQuotaInfos;
    protected $_name = [
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
        'pageSize'      => 'PageSize',
        'pageNumber'    => 'PageNumber',
        'dirQuotaInfos' => 'DirQuotaInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('dirQuotaInfos', $this->dirQuotaInfos, true);
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
        if (null !== $this->dirQuotaInfos) {
            $res['DirQuotaInfos'] = [];
            if (null !== $this->dirQuotaInfos && \is_array($this->dirQuotaInfos)) {
                $n = 0;
                foreach ($this->dirQuotaInfos as $item) {
                    $res['DirQuotaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDirQuotasResponse
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
        if (isset($map['DirQuotaInfos'])) {
            if (!empty($map['DirQuotaInfos'])) {
                $model->dirQuotaInfos = [];
                $n                    = 0;
                foreach ($map['DirQuotaInfos'] as $item) {
                    $model->dirQuotaInfos[$n++] = null !== $item ? dirQuotaInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
