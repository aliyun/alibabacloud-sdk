<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetFaceOptionsRequest extends Model {
    protected $_name = [
        'corpId' => 'CorpId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['CorpId'] = $this->corpId;
        return $res;
    }
    /**
     * @param array $map
     * @return GetFaceOptionsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        return $model;
    }
    /**
     * @description corpId
     * @var string
     */
    public $corpId;

}
