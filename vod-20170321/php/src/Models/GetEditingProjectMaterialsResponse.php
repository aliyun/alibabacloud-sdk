<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponse\materialList;

class GetEditingProjectMaterialsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'materialList' => 'MaterialList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('materialList', $this->materialList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MaterialList'] = null !== $this->materialList ? $this->materialList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetEditingProjectMaterialsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MaterialList'])){
            $model->materialList = materialList::fromMap($map['MaterialList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.materialDOs
     * @var materialList
     */
    public $materialList;

}
