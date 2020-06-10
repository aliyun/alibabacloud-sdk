<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesResponse\aliases;
use AlibabaCloud\Tea\Model;

class ListAliasesResponse extends Model
{
    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.Aliases
     *
     * @var aliases
     */
    public $aliases;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'aliases'    => 'Aliases',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('aliases', $this->aliases, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aliases) {
            $res['Aliases'] = null !== $this->aliases ? $this->aliases->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAliasesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Aliases'])) {
            $model->aliases = aliases::fromMap($map['Aliases']);
        }

        return $model;
    }
}
