<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossBackupMetaListResponse\items;

use AlibabaCloud\Tea\Model;

class meta extends Model {
    protected $_name = [
        'database' => 'Database',
        'tables' => 'Tables',
        'size' => 'Size',
    ];
    public function validate() {
        Model::validateRequired('database', $this->database, true);
        Model::validateRequired('tables', $this->tables, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        $res['Database'] = $this->database;
        $res['Tables'] = $this->tables;
        $res['Size'] = $this->size;
        return $res;
    }
    /**
     * @param array $map
     * @return meta
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Database'])){
            $model->database = $map['Database'];
        }
        if(isset($map['Tables'])){
            $model->tables = $map['Tables'];
        }
        if(isset($map['Size'])){
            $model->size = $map['Size'];
        }
        return $model;
    }
    /**
     * @description database
     * @var string
     */
    public $database;

    /**
     * @description tables
     * @var string
     */
    public $tables;

    /**
     * @description size
     * @var string
     */
    public $size;

}
