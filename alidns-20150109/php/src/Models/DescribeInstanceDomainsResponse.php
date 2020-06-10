<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsResponse\instanceDomains;
use AlibabaCloud\Tea\Model;

class DescribeInstanceDomainsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.totalItems
     *
     * @var int
     */
    public $totalItems;

    /**
     * @description module.pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description module.pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description module.totalPages
     *
     * @var int
     */
    public $totalPages;

    /**
     * @description module.data
     *
     * @var array
     */
    public $instanceDomains;
    protected $_name = [
        'requestId'       => 'RequestId',
        'totalItems'      => 'TotalItems',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'totalPages'      => 'TotalPages',
        'instanceDomains' => 'InstanceDomains',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalItems', $this->totalItems, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalPages', $this->totalPages, true);
        Model::validateRequired('instanceDomains', $this->instanceDomains, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->instanceDomains) {
            $res['InstanceDomains'] = [];
            if (null !== $this->instanceDomains && \is_array($this->instanceDomains)) {
                $n = 0;
                foreach ($this->instanceDomains as $item) {
                    $res['InstanceDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceDomainsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['InstanceDomains'])) {
            if (!empty($map['InstanceDomains'])) {
                $model->instanceDomains = [];
                $n                      = 0;
                foreach ($map['InstanceDomains'] as $item) {
                    $model->instanceDomains[$n++] = null !== $item ? instanceDomains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
