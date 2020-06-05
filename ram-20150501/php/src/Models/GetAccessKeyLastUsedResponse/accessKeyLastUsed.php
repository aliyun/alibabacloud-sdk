<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetAccessKeyLastUsedResponse;

use AlibabaCloud\Tea\Model;

class accessKeyLastUsed extends Model {
    protected $_name = [
        'lastUsedDate' => 'LastUsedDate',
    ];
    public function validate() {
        Model::validateRequired('lastUsedDate', $this->lastUsedDate, true);
    }
    public function toMap() {
        $res = [];
        $res['LastUsedDate'] = $this->lastUsedDate;
        return $res;
    }
    /**
     * @param array $map
     * @return accessKeyLastUsed
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LastUsedDate'])){
            $model->lastUsedDate = $map['LastUsedDate'];
        }
        return $model;
    }
    /**
     * @description LastUsedDate
     * @var string
     */
    public $lastUsedDate;

}
