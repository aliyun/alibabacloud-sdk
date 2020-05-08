<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponse\keyVersions;
use AlibabaCloud\Tea\Model;

class ListKeyVersionsResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description TotalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description PageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description PageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description KeyVersions
     *
     * @var ListKeyVersionsResponse.keyVersions
     */
    public $keyVersions;
    protected $_name = [
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'keyVersions' => 'KeyVersions',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('keyVersions', $this->keyVersions, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['RequestId']   = $this->requestId;
        $res['TotalCount']  = $this->totalCount;
        $res['PageNumber']  = $this->pageNumber;
        $res['PageSize']    = $this->pageSize;
        $res['KeyVersions'] = null !== $this->keyVersions ? $this->keyVersions->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListKeyVersionsResponse
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
        if (isset($map['KeyVersions'])) {
            $model->keyVersions = keyVersions::fromMap($map['KeyVersions']);
        }

        return $model;
    }
}
