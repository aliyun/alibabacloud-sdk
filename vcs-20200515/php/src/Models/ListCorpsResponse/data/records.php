<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpsResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model {
    protected $_name = [
        'corpId' => 'CorpId',
        'corpName' => 'CorpName',
        'description' => 'Description',
        'createDate' => 'CreateDate',
        'parentCorpId' => 'ParentCorpId',
        'appName' => 'AppName',
        'deviceCount' => 'DeviceCount',
    ];
    public function validate() {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('corpName', $this->corpName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('parentCorpId', $this->parentCorpId, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('deviceCount', $this->deviceCount, true);
    }
    public function toMap() {
        $res = [];
        $res['CorpId'] = $this->corpId;
        $res['CorpName'] = $this->corpName;
        $res['Description'] = $this->description;
        $res['CreateDate'] = $this->createDate;
        $res['ParentCorpId'] = $this->parentCorpId;
        $res['AppName'] = $this->appName;
        $res['DeviceCount'] = $this->deviceCount;
        return $res;
    }
    /**
     * @param array $map
     * @return records
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        if(isset($map['CorpName'])){
            $model->corpName = $map['CorpName'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['CreateDate'])){
            $model->createDate = $map['CreateDate'];
        }
        if(isset($map['ParentCorpId'])){
            $model->parentCorpId = $map['ParentCorpId'];
        }
        if(isset($map['AppName'])){
            $model->appName = $map['AppName'];
        }
        if(isset($map['DeviceCount'])){
            $model->deviceCount = $map['DeviceCount'];
        }
        return $model;
    }
    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description corpName
     * @var string
     */
    public $corpName;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description gmtCreate
     * @var string
     */
    public $createDate;

    /**
     * @description parentCorpId
     * @var string
     */
    public $parentCorpId;

    /**
     * @description isvName
     * @var string
     */
    public $appName;

    /**
     * @description deviceCount
     * @var integer
     */
    public $deviceCount;

}
