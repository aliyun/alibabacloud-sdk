<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdResponse\aliases;
use AlibabaCloud\Tea\Model;

class ListAliasesByKeyIdResponse extends Model
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
     * @var ListAliasesByKeyIdResponse.aliases
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
        $res               = [];
        $res['TotalCount'] = $this->totalCount;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize']   = $this->pageSize;
        $res['RequestId']  = $this->requestId;
        $res['Aliases']    = null !== $this->aliases ? $this->aliases->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAliasesByKeyIdResponse
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
