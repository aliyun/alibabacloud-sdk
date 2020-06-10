<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest;

use AlibabaCloud\Tea\Model;

class domainRecordInfo extends Model
{
    /**
     * @description domainName
     *
     * @var string
     */
    public $domain;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description rr
     *
     * @var string
     */
    public $rr;

    /**
     * @description value
     *
     * @var string
     */
    public $value;

    /**
     * @description ttl
     *
     * @var int
     */
    public $ttl;

    /**
     * @description priority
     *
     * @var int
     */
    public $priority;

    /**
     * @description line
     *
     * @var string
     */
    public $line;

    /**
     * @description newRr
     *
     * @var string
     */
    public $newRr;

    /**
     * @description newType
     *
     * @var string
     */
    public $newType;

    /**
     * @description newValue
     *
     * @var string
     */
    public $newValue;
    protected $_name = [
        'domain'   => 'Domain',
        'type'     => 'Type',
        'rr'       => 'Rr',
        'value'    => 'Value',
        'ttl'      => 'Ttl',
        'priority' => 'Priority',
        'line'     => 'Line',
        'newRr'    => 'NewRr',
        'newType'  => 'NewType',
        'newValue' => 'NewValue',
    ];

    public function validate()
    {
        Model::validateRequired('domain', $this->domain, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->newRr) {
            $res['NewRr'] = $this->newRr;
        }
        if (null !== $this->newType) {
            $res['NewType'] = $this->newType;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainRecordInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['NewRr'])) {
            $model->newRr = $map['NewRr'];
        }
        if (isset($map['NewType'])) {
            $model->newType = $map['NewType'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }

        return $model;
    }
}
