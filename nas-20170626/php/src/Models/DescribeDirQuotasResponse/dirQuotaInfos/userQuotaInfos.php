<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponse\dirQuotaInfos;

use AlibabaCloud\Tea\Model;

class userQuotaInfos extends Model
{
    /**
     * @var string
     */
    public $userType;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var int
     */
    public $sizeLimit;

    /**
     * @var int
     */
    public $sizeReal;

    /**
     * @var int
     */
    public $fileCountLimit;

    /**
     * @var int
     */
    public $fileCountReal;
    protected $_name = [
        'userType'       => 'UserType',
        'userId'         => 'UserId',
        'quotaType'      => 'QuotaType',
        'sizeLimit'      => 'SizeLimit',
        'sizeReal'       => 'SizeReal',
        'fileCountLimit' => 'FileCountLimit',
        'fileCountReal'  => 'FileCountReal',
    ];

    public function validate()
    {
        Model::validateRequired('userType', $this->userType, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('quotaType', $this->quotaType, true);
        Model::validateRequired('sizeLimit', $this->sizeLimit, true);
        Model::validateRequired('sizeReal', $this->sizeReal, true);
        Model::validateRequired('fileCountLimit', $this->fileCountLimit, true);
        Model::validateRequired('fileCountReal', $this->fileCountReal, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }
        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }
        if (null !== $this->sizeReal) {
            $res['SizeReal'] = $this->sizeReal;
        }
        if (null !== $this->fileCountLimit) {
            $res['FileCountLimit'] = $this->fileCountLimit;
        }
        if (null !== $this->fileCountReal) {
            $res['FileCountReal'] = $this->fileCountReal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userQuotaInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }
        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }
        if (isset($map['SizeReal'])) {
            $model->sizeReal = $map['SizeReal'];
        }
        if (isset($map['FileCountLimit'])) {
            $model->fileCountLimit = $map['FileCountLimit'];
        }
        if (isset($map['FileCountReal'])) {
            $model->fileCountReal = $map['FileCountReal'];
        }

        return $model;
    }
}
