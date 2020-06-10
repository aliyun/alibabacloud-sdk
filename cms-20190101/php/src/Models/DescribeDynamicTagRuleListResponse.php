<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponse\tagGroupList;
use AlibabaCloud\Tea\Model;

class DescribeDynamicTagRuleListResponse extends Model
{
    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description msg
     *
     * @var string
     */
    public $message;

    /**
     * @description traceId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description total
     *
     * @var int
     */
    public $total;

    /**
     * @description pageNumber
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description resources
     *
     * @var tagGroupList
     */
    public $tagGroupList;
    protected $_name = [
        'success'      => 'Success',
        'code'         => 'Code',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'total'        => 'Total',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'tagGroupList' => 'TagGroupList',
    ];

    public function validate()
    {
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('tagGroupList', $this->tagGroupList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tagGroupList) {
            $res['TagGroupList'] = null !== $this->tagGroupList ? $this->tagGroupList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDynamicTagRuleListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TagGroupList'])) {
            $model->tagGroupList = tagGroupList::fromMap($map['TagGroupList']);
        }

        return $model;
    }
}
