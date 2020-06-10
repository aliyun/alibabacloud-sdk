<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts;
use AlibabaCloud\Tea\Model;

class DescribeAccountsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.sysadminAccountStatus
     *
     * @var string
     */
    public $systemAdminAccountStatus;

    /**
     * @description data.sysadminAccountFirstActivationTime
     *
     * @var string
     */
    public $systemAdminAccountFirstActivationTime;

    /**
     * @description data.accounts
     *
     * @var accounts
     */
    public $accounts;
    protected $_name = [
        'requestId'                             => 'RequestId',
        'systemAdminAccountStatus'              => 'SystemAdminAccountStatus',
        'systemAdminAccountFirstActivationTime' => 'SystemAdminAccountFirstActivationTime',
        'accounts'                              => 'Accounts',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('systemAdminAccountStatus', $this->systemAdminAccountStatus, true);
        Model::validateRequired('systemAdminAccountFirstActivationTime', $this->systemAdminAccountFirstActivationTime, true);
        Model::validateRequired('accounts', $this->accounts, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemAdminAccountStatus) {
            $res['SystemAdminAccountStatus'] = $this->systemAdminAccountStatus;
        }
        if (null !== $this->systemAdminAccountFirstActivationTime) {
            $res['SystemAdminAccountFirstActivationTime'] = $this->systemAdminAccountFirstActivationTime;
        }
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemAdminAccountStatus'])) {
            $model->systemAdminAccountStatus = $map['SystemAdminAccountStatus'];
        }
        if (isset($map['SystemAdminAccountFirstActivationTime'])) {
            $model->systemAdminAccountFirstActivationTime = $map['SystemAdminAccountFirstActivationTime'];
        }
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }

        return $model;
    }
}
