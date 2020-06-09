<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponse\dirQuotaInfos;

use AlibabaCloud\Tea\Model;

class userQuotaInfos extends Model {
    protected $_name = [
        'userType' => 'UserType',
        'userId' => 'UserId',
        'quotaType' => 'QuotaType',
        'sizeLimit' => 'SizeLimit',
        'sizeReal' => 'SizeReal',
        'fileCountLimit' => 'FileCountLimit',
        'fileCountReal' => 'FileCountReal',
    ];
    public function validate() {
        Model::validateRequired('userType', $this->userType, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('quotaType', $this->quotaType, true);
        Model::validateRequired('sizeLimit', $this->sizeLimit, true);
        Model::validateRequired('sizeReal', $this->sizeReal, true);
        Model::validateRequired('fileCountLimit', $this->fileCountLimit, true);
        Model::validateRequired('fileCountReal', $this->fileCountReal, true);
    }
    public function toMap() {
        $res = [];
        $res['UserType'] = $this->userType;
        $res['UserId'] = $this->userId;
        $res['QuotaType'] = $this->quotaType;
        $res['SizeLimit'] = $this->sizeLimit;
        $res['SizeReal'] = $this->sizeReal;
        $res['FileCountLimit'] = $this->fileCountLimit;
        $res['FileCountReal'] = $this->fileCountReal;
        return $res;
    }
    /**
     * @param array $map
     * @return userQuotaInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserType'])){
            $model->userType = $map['UserType'];
        }
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
        if(isset($map['QuotaType'])){
            $model->quotaType = $map['QuotaType'];
        }
        if(isset($map['SizeLimit'])){
            $model->sizeLimit = $map['SizeLimit'];
        }
        if(isset($map['SizeReal'])){
            $model->sizeReal = $map['SizeReal'];
        }
        if(isset($map['FileCountLimit'])){
            $model->fileCountLimit = $map['FileCountLimit'];
        }
        if(isset($map['FileCountReal'])){
            $model->fileCountReal = $map['FileCountReal'];
        }
        return $model;
    }
    /**
     * @description userType
     * @var string
     */
    public $userType;

    /**
     * @description userId
     * @var string
     */
    public $userId;

    /**
     * @description quotaType
     * @var string
     */
    public $quotaType;

    /**
     * @description sizeLimit
     * @var integer
     */
    public $sizeLimit;

    /**
     * @description sizeReal
     * @var integer
     */
    public $sizeReal;

    /**
     * @description fileCountLimit
     * @var integer
     */
    public $fileCountLimit;

    /**
     * @description fileCountReal
     * @var integer
     */
    public $fileCountReal;

}
