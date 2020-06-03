<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class BatchAuditTest01Request extends Model {
    protected $_name = [
        'name' => 'Name',
        'batchAuditTest01' => 'BatchAuditTest01',
        'demo01' => 'Demo01',
        'test010101' => 'Test010101',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['BatchAuditTest01'] = $this->batchAuditTest01;
        $res['Demo01'] = $this->demo01;
        $res['Test010101'] = $this->test010101;
        return $res;
    }
    /**
     * @param array $map
     * @return BatchAuditTest01Request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['BatchAuditTest01'])){
            $model->batchAuditTest01 = $map['BatchAuditTest01'];
        }
        if(isset($map['Demo01'])){
            $model->demo01 = $map['Demo01'];
        }
        if(isset($map['Test010101'])){
            $model->test010101 = $map['Test010101'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description BatchAuditTest01
     * @var string
     */
    public $batchAuditTest01;

    /**
     * @description Demo01
     * @var string
     */
    public $demo01;

    /**
     * @description Test010101
     * @var bool
     */
    public $test010101;

}
