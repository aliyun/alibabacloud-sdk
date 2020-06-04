<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateAuditRequest extends Model {
    protected $_name = [
        'auditContent' => 'AuditContent',
    ];
    public function validate() {
        Model::validateRequired('auditContent', $this->auditContent, true);
    }
    public function toMap() {
        $res = [];
        $res['AuditContent'] = $this->auditContent;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateAuditRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AuditContent'])){
            $model->auditContent = $map['AuditContent'];
        }
        return $model;
    }
    /**
     * @description auditContent
     * @var string
     */
    public $auditContent;

}
