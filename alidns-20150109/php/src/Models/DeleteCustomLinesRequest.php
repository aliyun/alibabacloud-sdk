<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomLinesRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'lineIds' => 'LineIds',
    ];
    public function validate() {
        Model::validateRequired('lineIds', $this->lineIds, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['LineIds'] = $this->lineIds;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteCustomLinesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['LineIds'])){
            $model->lineIds = $map['LineIds'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description lineIds
     * @var string
     */
    public $lineIds;

}
