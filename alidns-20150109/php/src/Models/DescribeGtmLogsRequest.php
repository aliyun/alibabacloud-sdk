<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmLogsRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description keyword
     *
     * @var string
     */
    public $keyword;

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
     * @description startTime
     *
     * @var int
     */
    public $startTimestamp;

    /**
     * @description endTime
     *
     * @var int
     */
    public $endTimestamp;
    protected $_name = [
        'lang'           => 'Lang',
        'instanceId'     => 'InstanceId',
        'keyword'        => 'Keyword',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'startTimestamp' => 'StartTimestamp',
        'endTimestamp'   => 'EndTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }

        return $model;
    }
}
