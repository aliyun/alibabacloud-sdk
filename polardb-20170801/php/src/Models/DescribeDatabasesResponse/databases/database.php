<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse\databases;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse\databases\database\accounts;

class database extends Model {
    protected $_name = [
        'DBName' => 'DBName',
        'DBStatus' => 'DBStatus',
        'DBDescription' => 'DBDescription',
        'characterSetName' => 'CharacterSetName',
        'engine' => 'Engine',
        'accounts' => 'Accounts',
    ];
    public function validate() {
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('DBStatus', $this->DBStatus, true);
        Model::validateRequired('DBDescription', $this->DBDescription, true);
        Model::validateRequired('characterSetName', $this->characterSetName, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('accounts', $this->accounts, true);
    }
    public function toMap() {
        $res = [];
        $res['DBName'] = $this->DBName;
        $res['DBStatus'] = $this->DBStatus;
        $res['DBDescription'] = $this->DBDescription;
        $res['CharacterSetName'] = $this->characterSetName;
        $res['Engine'] = $this->engine;
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
        if(isset($map['DBStatus'])){
            $model->DBStatus = $map['DBStatus'];
        }
        if(isset($map['DBDescription'])){
            $model->DBDescription = $map['DBDescription'];
        }
        if(isset($map['CharacterSetName'])){
            $model->characterSetName = $map['CharacterSetName'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
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
     * @description dbStatus
     * @var string
     */
    public $DBStatus;

    /**
     * @description dbDescription
     * @var string
     */
    public $DBDescription;

    /**
     * @description characterSetName
     * @var string
     */
    public $characterSetName;

    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description accounts
     * @var accounts
     */
    public $accounts;

}
