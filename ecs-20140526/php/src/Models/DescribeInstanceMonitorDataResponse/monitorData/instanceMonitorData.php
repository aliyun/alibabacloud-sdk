<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponse\monitorData;

use AlibabaCloud\Tea\Model;

class instanceMonitorData extends Model
{
    /**
     * @description resourceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description item2Value.CPU
     *
     * @var int
     */
    public $CPU;

    /**
     * @description item2Value.IntranetRX
     *
     * @var int
     */
    public $intranetRX;

    /**
     * @description item2Value.IntranetTX
     *
     * @var int
     */
    public $intranetTX;

    /**
     * @description item2Value.IntranetBandwidth
     *
     * @var int
     */
    public $intranetBandwidth;

    /**
     * @description item2Value.InternetRX
     *
     * @var int
     */
    public $internetRX;

    /**
     * @description item2Value.InternetTX
     *
     * @var int
     */
    public $internetTX;

    /**
     * @description item2Value.InternetBandwidth
     *
     * @var int
     */
    public $internetBandwidth;

    /**
     * @description item2Value.IOPSRead
     *
     * @var int
     */
    public $IOPSRead;

    /**
     * @description item2Value.IOPSWrite
     *
     * @var int
     */
    public $IOPSWrite;

    /**
     * @description item2Value.BPSRead
     *
     * @var int
     */
    public $BPSRead;

    /**
     * @description item2Value.BPSWrite
     *
     * @var int
     */
    public $BPSWrite;

    /**
     * @description item2Value.CPUCreditUsage
     *
     * @var float
     */
    public $CPUCreditUsage;

    /**
     * @description item2Value.CPUCreditBalance
     *
     * @var float
     */
    public $CPUCreditBalance;

    /**
     * @description item2Value.CPUAdvanceCreditBalance
     *
     * @var float
     */
    public $CPUAdvanceCreditBalance;

    /**
     * @description item2Value.CPUNotpaidSurplusCreditUsage
     *
     * @var float
     */
    public $CPUNotpaidSurplusCreditUsage;

    /**
     * @description timeStamp
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'instanceId'                   => 'InstanceId',
        'CPU'                          => 'CPU',
        'intranetRX'                   => 'IntranetRX',
        'intranetTX'                   => 'IntranetTX',
        'intranetBandwidth'            => 'IntranetBandwidth',
        'internetRX'                   => 'InternetRX',
        'internetTX'                   => 'InternetTX',
        'internetBandwidth'            => 'InternetBandwidth',
        'IOPSRead'                     => 'IOPSRead',
        'IOPSWrite'                    => 'IOPSWrite',
        'BPSRead'                      => 'BPSRead',
        'BPSWrite'                     => 'BPSWrite',
        'CPUCreditUsage'               => 'CPUCreditUsage',
        'CPUCreditBalance'             => 'CPUCreditBalance',
        'CPUAdvanceCreditBalance'      => 'CPUAdvanceCreditBalance',
        'CPUNotpaidSurplusCreditUsage' => 'CPUNotpaidSurplusCreditUsage',
        'timeStamp'                    => 'TimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('CPU', $this->CPU, true);
        Model::validateRequired('intranetRX', $this->intranetRX, true);
        Model::validateRequired('intranetTX', $this->intranetTX, true);
        Model::validateRequired('intranetBandwidth', $this->intranetBandwidth, true);
        Model::validateRequired('internetRX', $this->internetRX, true);
        Model::validateRequired('internetTX', $this->internetTX, true);
        Model::validateRequired('internetBandwidth', $this->internetBandwidth, true);
        Model::validateRequired('IOPSRead', $this->IOPSRead, true);
        Model::validateRequired('IOPSWrite', $this->IOPSWrite, true);
        Model::validateRequired('BPSRead', $this->BPSRead, true);
        Model::validateRequired('BPSWrite', $this->BPSWrite, true);
        Model::validateRequired('CPUCreditUsage', $this->CPUCreditUsage, true);
        Model::validateRequired('CPUCreditBalance', $this->CPUCreditBalance, true);
        Model::validateRequired('CPUAdvanceCreditBalance', $this->CPUAdvanceCreditBalance, true);
        Model::validateRequired('CPUNotpaidSurplusCreditUsage', $this->CPUNotpaidSurplusCreditUsage, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->intranetRX) {
            $res['IntranetRX'] = $this->intranetRX;
        }
        if (null !== $this->intranetTX) {
            $res['IntranetTX'] = $this->intranetTX;
        }
        if (null !== $this->intranetBandwidth) {
            $res['IntranetBandwidth'] = $this->intranetBandwidth;
        }
        if (null !== $this->internetRX) {
            $res['InternetRX'] = $this->internetRX;
        }
        if (null !== $this->internetTX) {
            $res['InternetTX'] = $this->internetTX;
        }
        if (null !== $this->internetBandwidth) {
            $res['InternetBandwidth'] = $this->internetBandwidth;
        }
        if (null !== $this->IOPSRead) {
            $res['IOPSRead'] = $this->IOPSRead;
        }
        if (null !== $this->IOPSWrite) {
            $res['IOPSWrite'] = $this->IOPSWrite;
        }
        if (null !== $this->BPSRead) {
            $res['BPSRead'] = $this->BPSRead;
        }
        if (null !== $this->BPSWrite) {
            $res['BPSWrite'] = $this->BPSWrite;
        }
        if (null !== $this->CPUCreditUsage) {
            $res['CPUCreditUsage'] = $this->CPUCreditUsage;
        }
        if (null !== $this->CPUCreditBalance) {
            $res['CPUCreditBalance'] = $this->CPUCreditBalance;
        }
        if (null !== $this->CPUAdvanceCreditBalance) {
            $res['CPUAdvanceCreditBalance'] = $this->CPUAdvanceCreditBalance;
        }
        if (null !== $this->CPUNotpaidSurplusCreditUsage) {
            $res['CPUNotpaidSurplusCreditUsage'] = $this->CPUNotpaidSurplusCreditUsage;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['IntranetRX'])) {
            $model->intranetRX = $map['IntranetRX'];
        }
        if (isset($map['IntranetTX'])) {
            $model->intranetTX = $map['IntranetTX'];
        }
        if (isset($map['IntranetBandwidth'])) {
            $model->intranetBandwidth = $map['IntranetBandwidth'];
        }
        if (isset($map['InternetRX'])) {
            $model->internetRX = $map['InternetRX'];
        }
        if (isset($map['InternetTX'])) {
            $model->internetTX = $map['InternetTX'];
        }
        if (isset($map['InternetBandwidth'])) {
            $model->internetBandwidth = $map['InternetBandwidth'];
        }
        if (isset($map['IOPSRead'])) {
            $model->IOPSRead = $map['IOPSRead'];
        }
        if (isset($map['IOPSWrite'])) {
            $model->IOPSWrite = $map['IOPSWrite'];
        }
        if (isset($map['BPSRead'])) {
            $model->BPSRead = $map['BPSRead'];
        }
        if (isset($map['BPSWrite'])) {
            $model->BPSWrite = $map['BPSWrite'];
        }
        if (isset($map['CPUCreditUsage'])) {
            $model->CPUCreditUsage = $map['CPUCreditUsage'];
        }
        if (isset($map['CPUCreditBalance'])) {
            $model->CPUCreditBalance = $map['CPUCreditBalance'];
        }
        if (isset($map['CPUAdvanceCreditBalance'])) {
            $model->CPUAdvanceCreditBalance = $map['CPUAdvanceCreditBalance'];
        }
        if (isset($map['CPUNotpaidSurplusCreditUsage'])) {
            $model->CPUNotpaidSurplusCreditUsage = $map['CPUNotpaidSurplusCreditUsage'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
