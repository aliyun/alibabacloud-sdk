<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts;

class DescribeAccountsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'systemAdminAccountStatus' => 'SystemAdminAccountStatus',
        'systemAdminAccountFirstActivationTime' => 'SystemAdminAccountFirstActivationTime',
        'accounts' => 'Accounts',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('systemAdminAccountStatus', $this->systemAdminAccountStatus, true);
        Model::validateRequired('systemAdminAccountFirstActivationTime', $this->systemAdminAccountFirstActivationTime, true);
        Model::validateRequired('accounts', $this->accounts, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SystemAdminAccountStatus'] = $this->systemAdminAccountStatus;
        $res['SystemAdminAccountFirstActivationTime'] = $this->systemAdminAccountFirstActivationTime;
        $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAccountsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SystemAdminAccountStatus'])){
            $model->systemAdminAccountStatus = $map['SystemAdminAccountStatus'];
        }
        if(isset($map['SystemAdminAccountFirstActivationTime'])){
            $model->systemAdminAccountFirstActivationTime = $map['SystemAdminAccountFirstActivationTime'];
        }
        if(isset($map['Accounts'])){
            $model->accounts = accounts::fromMap($map['Accounts']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.sysadminAccountStatus
     * @var string
     */
    public $systemAdminAccountStatus;

    /**
     * @description data.sysadminAccountFirstActivationTime
     * @var string
     */
    public $systemAdminAccountFirstActivationTime;

    /**
     * @description data.accounts
     * @var accounts
     */
    public $accounts;

}
