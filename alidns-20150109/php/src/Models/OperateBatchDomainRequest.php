<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest\domainRecordInfo;
use AlibabaCloud\Tea\Model;

class OperateBatchDomainRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description data
     *
     * @var array
     */
    public $domainRecordInfo;
    protected $_name = [
        'lang'             => 'Lang',
        'type'             => 'Type',
        'domainRecordInfo' => 'DomainRecordInfo',
    ];

    public function validate()
    {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('domainRecordInfo', $this->domainRecordInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->domainRecordInfo) {
            $res['DomainRecordInfo'] = [];
            if (null !== $this->domainRecordInfo && \is_array($this->domainRecordInfo)) {
                $n = 0;
                foreach ($this->domainRecordInfo as $item) {
                    $res['DomainRecordInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateBatchDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['DomainRecordInfo'])) {
            if (!empty($map['DomainRecordInfo'])) {
                $model->domainRecordInfo = [];
                $n                       = 0;
                foreach ($map['DomainRecordInfo'] as $item) {
                    $model->domainRecordInfo[$n++] = null !== $item ? domainRecordInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
