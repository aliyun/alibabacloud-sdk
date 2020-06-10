<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse\success;

use AlibabaCloud\Tea\Model;

class apiImportSwaggerSuccess extends Model
{
    /**
     * @description path
     *
     * @var string
     */
    public $path;

    /**
     * @description httpMethod
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description apiUid
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description apiOperation
     *
     * @var string
     */
    public $apiOperation;
    protected $_name = [
        'path'         => 'Path',
        'httpMethod'   => 'HttpMethod',
        'apiUid'       => 'ApiUid',
        'apiOperation' => 'ApiOperation',
    ];

    public function validate()
    {
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('httpMethod', $this->httpMethod, true);
        Model::validateRequired('apiUid', $this->apiUid, true);
        Model::validateRequired('apiOperation', $this->apiOperation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
        }
        if (null !== $this->apiOperation) {
            $res['ApiOperation'] = $this->apiOperation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiImportSwaggerSuccess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }
        if (isset($map['ApiOperation'])) {
            $model->apiOperation = $map['ApiOperation'];
        }

        return $model;
    }
}
