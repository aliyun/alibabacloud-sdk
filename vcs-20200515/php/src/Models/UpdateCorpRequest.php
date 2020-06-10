<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UpdateCorpRequest extends Model
{
    /**
     * @description corpId
     *
     * @var string
     */
    public $corpId;

    /**
     * @description corpName
     *
     * @var string
     */
    public $corpName;

    /**
     * @description isvName
     *
     * @var string
     */
    public $appName;

    /**
     * @description parentCorpId
     *
     * @var string
     */
    public $parentCorpId;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'corpId'       => 'CorpId',
        'corpName'     => 'CorpName',
        'appName'      => 'AppName',
        'parentCorpId' => 'ParentCorpId',
        'description'  => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->parentCorpId) {
            $res['ParentCorpId'] = $this->parentCorpId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCorpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ParentCorpId'])) {
            $model->parentCorpId = $map['ParentCorpId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
