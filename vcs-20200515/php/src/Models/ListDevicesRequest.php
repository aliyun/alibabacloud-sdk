<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class ListDevicesRequest extends Model {
    protected $_name = [
        'corpId' => 'CorpId',
        'gbId' => 'GbId',
        'deviceName' => 'DeviceName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['CorpId'] = $this->corpId;
        $res['GbId'] = $this->gbId;
        $res['DeviceName'] = $this->deviceName;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return ListDevicesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        if(isset($map['GbId'])){
            $model->gbId = $map['GbId'];
        }
        if(isset($map['DeviceName'])){
            $model->deviceName = $map['DeviceName'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
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
     * @description name
     * @var string
     */
    public $deviceName;

    /**
     * @description pageNo
     * @var integer
     */
    public $pageNumber;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

}
