<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts\DBInstanceAccount\databasePrivileges;

class DBInstanceAccount extends Model {
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'accountName' => 'AccountName',
        'accountStatus' => 'AccountStatus',
        'accountType' => 'AccountType',
        'accountDescription' => 'AccountDescription',
        'privExceeded' => 'PrivExceeded',
        'databasePrivileges' => 'DatabasePrivileges',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('accountStatus', $this->accountStatus, true);
        Model::validateRequired('accountType', $this->accountType, true);
        Model::validateRequired('accountDescription', $this->accountDescription, true);
        Model::validateRequired('privExceeded', $this->privExceeded, true);
        Model::validateRequired('databasePrivileges', $this->databasePrivileges, true);
    }
    public function toMap() {
        $res = [];
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['AccountName'] = $this->accountName;
        $res['AccountStatus'] = $this->accountStatus;
        $res['AccountType'] = $this->accountType;
        $res['AccountDescription'] = $this->accountDescription;
        $res['PrivExceeded'] = $this->privExceeded;
        $res['DatabasePrivileges'] = null !== $this->databasePrivileges ? $this->databasePrivileges->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DBInstanceAccount
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['AccountName'])){
            $model->accountName = $map['AccountName'];
        }
        if(isset($map['AccountStatus'])){
            $model->accountStatus = $map['AccountStatus'];
        }
        if(isset($map['AccountType'])){
            $model->accountType = $map['AccountType'];
        }
        if(isset($map['AccountDescription'])){
            $model->accountDescription = $map['AccountDescription'];
        }
        if(isset($map['PrivExceeded'])){
            $model->privExceeded = $map['PrivExceeded'];
        }
        if(isset($map['DatabasePrivileges'])){
            $model->databasePrivileges = databasePrivileges::fromMap($map['DatabasePrivileges']);
        }
        return $model;
    }
    /**
     * @description dbInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description accountName
     * @var string
     */
    public $accountName;

    /**
     * @description accountStatus
     * @var string
     */
    public $accountStatus;

    /**
     * @description accountType
     * @var string
     */
    public $accountType;

    /**
     * @description accountDescription
     * @var string
     */
    public $accountDescription;

    /**
     * @description privExceeded
     * @var string
     */
    public $privExceeded;

    /**
     * @description databasePrivileges
     * @var databasePrivileges
     */
    public $databasePrivileges;

}
