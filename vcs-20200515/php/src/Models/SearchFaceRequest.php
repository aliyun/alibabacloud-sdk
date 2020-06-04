<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class SearchFaceRequest extends Model {
    protected $_name = [
        'corpId' => 'CorpId',
        'gbId' => 'GbId',
        'startTimeStamp' => 'StartTimeStamp',
        'endTimeStamp' => 'EndTimeStamp',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'optionList' => 'OptionList',
    ];
    public function validate() {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('startTimeStamp', $this->startTimeStamp, true);
        Model::validateRequired('endTimeStamp', $this->endTimeStamp, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }
    public function toMap() {
        $res = [];
        $res['CorpId'] = $this->corpId;
        $res['GbId'] = $this->gbId;
        $res['StartTimeStamp'] = $this->startTimeStamp;
        $res['EndTimeStamp'] = $this->endTimeStamp;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['OptionList'] = $this->optionList;
        return $res;
    }
    /**
     * @param array $map
     * @return SearchFaceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        if(isset($map['GbId'])){
            $model->gbId = $map['GbId'];
        }
        if(isset($map['StartTimeStamp'])){
            $model->startTimeStamp = $map['StartTimeStamp'];
        }
        if(isset($map['EndTimeStamp'])){
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['OptionList'])){
            $model->optionList = $map['OptionList'];
        }
        return $model;
    }
    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description gbId
     * @var string
     */
    public $gbId;

    /**
     * @description startTimestamp
     * @var integer
     */
    public $startTimeStamp;

    /**
     * @description endTimestamp
     * @var integer
     */
    public $endTimeStamp;

    /**
     * @description pageNo
     * @var integer
     */
    public $pageNo;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description optionList_json
     * @var array
     */
    public $optionList;

}
