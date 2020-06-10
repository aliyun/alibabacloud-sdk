<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class SearchBodyRequest extends Model
{
    /**
     * @description corpId
     *
     * @var string
     */
    public $corpId;

    /**
     * @description gbId
     *
     * @var string
     */
    public $gbId;

    /**
     * @description startTimestamp
     *
     * @var int
     */
    public $startTimeStamp;

    /**
     * @description endTimestamp
     *
     * @var int
     */
    public $endTimeStamp;

    /**
     * @description pageNo
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description optionList_json
     *
     * @var array
     */
    public $optionList;
    protected $_name = [
        'corpId'         => 'CorpId',
        'gbId'           => 'GbId',
        'startTimeStamp' => 'StartTimeStamp',
        'endTimeStamp'   => 'EndTimeStamp',
        'pageNo'         => 'PageNo',
        'pageSize'       => 'PageSize',
        'optionList'     => 'OptionList',
    ];

    public function validate()
    {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('startTimeStamp', $this->startTimeStamp, true);
        Model::validateRequired('endTimeStamp', $this->endTimeStamp, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->optionList) {
            $res['OptionList'] = $this->optionList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchBodyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['OptionList'])) {
            $model->optionList = $map['OptionList'];
        }

        return $model;
    }
}
