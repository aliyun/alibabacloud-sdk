<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponse\ipv6TranslatorEntries;
use AlibabaCloud\Tea\Model;

class DescribeIPv6TranslatorEntriesResponse extends Model
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
     * @var ipv6TranslatorEntries
     */
    public $ipv6TranslatorEntries;
    protected $_name = [
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'ipv6TranslatorEntries' => 'Ipv6TranslatorEntries',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('ipv6TranslatorEntries', $this->ipv6TranslatorEntries, true);
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
        if (null !== $this->ipv6TranslatorEntries) {
            $res['Ipv6TranslatorEntries'] = null !== $this->ipv6TranslatorEntries ? $this->ipv6TranslatorEntries->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIPv6TranslatorEntriesResponse
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
        if (isset($map['Ipv6TranslatorEntries'])) {
            $model->ipv6TranslatorEntries = ipv6TranslatorEntries::fromMap($map['Ipv6TranslatorEntries']);
        }

        return $model;
    }
}
