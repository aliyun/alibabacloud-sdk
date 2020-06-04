<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UpdateCorpRequest extends Model {
    protected $_name = [
        'corpId' => 'CorpId',
        'corpName' => 'CorpName',
        'appName' => 'AppName',
        'parentCorpId' => 'ParentCorpId',
        'description' => 'Description',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['CorpId'] = $this->corpId;
        $res['CorpName'] = $this->corpName;
        $res['AppName'] = $this->appName;
        $res['ParentCorpId'] = $this->parentCorpId;
        $res['Description'] = $this->description;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateCorpRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        if(isset($map['CorpName'])){
            $model->corpName = $map['CorpName'];
        }
        if(isset($map['AppName'])){
            $model->appName = $map['AppName'];
        }
        if(isset($map['ParentCorpId'])){
            $model->parentCorpId = $map['ParentCorpId'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        return $model;
    }
    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description corpName
     * @var string
     */
    public $corpName;

    /**
     * @description isvName
     * @var string
     */
    public $appName;

    /**
     * @description parentCorpId
     * @var string
     */
    public $parentCorpId;

    /**
     * @description description
     * @var string
     */
    public $description;

}
