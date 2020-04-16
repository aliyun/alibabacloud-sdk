<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\SDK\Kms\V20160120\Kms\ListKeysResponse\keys;
use AlibabaCloud\Tea\Model;

class ListKeysResponse extends Model
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
     * @description data.keys
     *
     * @var ListKeysResponse.keys
     */
    public $keys;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'keys'       => 'Keys',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('keys', $this->keys, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['TotalCount'] = $this->totalCount;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize']   = $this->pageSize;
        $res['RequestId']  = $this->requestId;
        $res['Keys']       = null !== $this->keys ? $this->keys->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListKeysResponse
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
        if (isset($map['Keys'])) {
            $model->keys = ListKeysResponse\keys::fromMap($map['Keys']);
        }

        return $model;
    }
}
