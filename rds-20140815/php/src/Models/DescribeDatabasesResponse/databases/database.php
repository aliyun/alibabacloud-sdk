<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponse\databases;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponse\databases\database\accounts;

class database extends Model {
    protected $_name = [
        'DBName' => 'DBName',
        'DBInstanceId' => 'DBInstanceId',
        'engine' => 'Engine',
        'DBStatus' => 'DBStatus',
        'characterSetName' => 'CharacterSetName',
        'DBDescription' => 'DBDescription',
        'accounts' => 'Accounts',
    ];
    public function validate() {
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('DBStatus', $this->DBStatus, true);
        Model::validateRequired('characterSetName', $this->characterSetName, true);
        Model::validateRequired('DBDescription', $this->DBDescription, true);
        Model::validateRequired('accounts', $this->accounts, true);
    }
    public function toMap() {
        $res = [];
        $res['DBName'] = $this->DBName;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['Engine'] = $this->engine;
        $res['DBStatus'] = $this->DBStatus;
        $res['CharacterSetName'] = $this->characterSetName;
        $res['DBDescription'] = $this->DBDescription;
        $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return database
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['DBStatus'])){
            $model->DBStatus = $map['DBStatus'];
        }
        if(isset($map['CharacterSetName'])){
            $model->characterSetName = $map['CharacterSetName'];
        }
        if(isset($map['DBDescription'])){
            $model->DBDescription = $map['DBDescription'];
        }
        if(isset($map['Accounts'])){
            $model->accounts = accounts::fromMap($map['Accounts']);
        }
        return $model;
    }
    /**
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description dbInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description dbStatus
     * @var string
     */
    public $DBStatus;

    /**
     * @description characterSetName
     * @var string
     */
    public $characterSetName;

    /**
     * @description dbDescription
     * @var string
     */
    public $DBDescription;

    /**
     * @description accounts
     * @var accounts
     */
    public $accounts;

}
