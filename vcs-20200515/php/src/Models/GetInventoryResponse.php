<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryResponse\data;

class GetInventoryResponse extends Model {
    protected $_name = [
        'success' => 'Success',
        'data' => 'Data',
    ];
    public function validate() {
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('data', $this->data, true);
    }
    public function toMap() {
        $res = [];
        $res['Success'] = $this->success;
        $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetInventoryResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Success'])){
            $model->success = $map['Success'];
        }
        if(isset($map['Data'])){
            $model->data = data::fromMap($map['Data']);
        }
        return $model;
    }
    /**
     * @description Success
     * @var bool
     */
    public $success;

    /**
     * @description Data
     * @var data
     */
    public $data;

}
