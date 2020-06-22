<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description loginEmail
     *
     * @var string
     */
    public $loginEmail;

    /**
     * @description accountType
     *
     * @var string
     */
    public $accountType;

    /**
     * @description mpk
     *
     * @var int
     */
    public $mpk;

    /**
     * @description hostingStatus
     *
     * @var string
     */
    public $hostingStatus;

    /**
     * @description creditLimitStatus
     *
     * @var string
     */
    public $creditLimitStatus;

    /**
     * @description isCertified
     *
     * @var bool
     */
    public $isCertified;
    protected $_name = [
        'loginEmail'        => 'LoginEmail',
        'accountType'       => 'AccountType',
        'mpk'               => 'Mpk',
        'hostingStatus'     => 'HostingStatus',
        'creditLimitStatus' => 'CreditLimitStatus',
        'isCertified'       => 'IsCertified',
    ];

    public function validate()
    {
        Model::validateRequired('loginEmail', $this->loginEmail, true);
        Model::validateRequired('accountType', $this->accountType, true);
        Model::validateRequired('mpk', $this->mpk, true);
        Model::validateRequired('hostingStatus', $this->hostingStatus, true);
        Model::validateRequired('creditLimitStatus', $this->creditLimitStatus, true);
        Model::validateRequired('isCertified', $this->isCertified, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginEmail) {
            $res['LoginEmail'] = $this->loginEmail;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }
        if (null !== $this->hostingStatus) {
            $res['HostingStatus'] = $this->hostingStatus;
        }
        if (null !== $this->creditLimitStatus) {
            $res['CreditLimitStatus'] = $this->creditLimitStatus;
        }
        if (null !== $this->isCertified) {
            $res['IsCertified'] = $this->isCertified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginEmail'])) {
            $model->loginEmail = $map['LoginEmail'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }
        if (isset($map['HostingStatus'])) {
            $model->hostingStatus = $map['HostingStatus'];
        }
        if (isset($map['CreditLimitStatus'])) {
            $model->creditLimitStatus = $map['CreditLimitStatus'];
        }
        if (isset($map['IsCertified'])) {
            $model->isCertified = $map['IsCertified'];
        }

        return $model;
    }
}
