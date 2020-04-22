<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class ListSecretVersionIdsRequest extends Model
{
    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

    /**
     * @description IncludeDeprecated
     *
     * @var string
     */
    public $includeDeprecated;

    /**
     * @description PageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description PageSize
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'secretName'        => 'SecretName',
        'includeDeprecated' => 'IncludeDeprecated',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
    ];

    public function validate()
    {
        Model::validateRequired('secretName', $this->secretName, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['SecretName']        = $this->secretName;
        $res['IncludeDeprecated'] = $this->includeDeprecated;
        $res['PageNumber']        = $this->pageNumber;
        $res['PageSize']          = $this->pageSize;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretVersionIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['IncludeDeprecated'])) {
            $model->includeDeprecated = $map['IncludeDeprecated'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
