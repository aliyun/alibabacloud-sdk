<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateAuditRequest extends Model
{
    /**
     * @description auditContent
     *
     * @var string
     */
    public $auditContent;
    protected $_name = [
        'auditContent' => 'AuditContent',
    ];

    public function validate()
    {
        Model::validateRequired('auditContent', $this->auditContent, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditContent) {
            $res['AuditContent'] = $this->auditContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditContent'])) {
            $model->auditContent = $map['AuditContent'];
        }

        return $model;
    }
}
