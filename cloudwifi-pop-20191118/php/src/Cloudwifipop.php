<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\AddApListToApgroupRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\AddApListToApgroupResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApgroupConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApgroupConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApSsidConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApSsidConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteNetDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteNetDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EffectApConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EffectApConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EffectApgroupConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EffectApgroupConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApAddressByMacRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApAddressByMacResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApAssetRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApAssetResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApDetailedConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApDetailedConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApDetailStatusRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApDetailStatusResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupIdRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupIdResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupSsidConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupSsidConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApInfoFromPoolRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApInfoFromPoolResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApRunHistoryTimeSerRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApRunHistoryTimeSerResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApStatusByGroupIdRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApStatusByGroupIdResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetGroupMiscAggTimeSerRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetGroupMiscAggTimeSerResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetNetDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetNetDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetNetDeviceInfoWithSizeRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetNetDeviceInfoWithSizeResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetRadioRunHistoryTimeSerRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetRadioRunHistoryTimeSerResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetStaStatusListByApRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetStaStatusListByApResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\KickStaRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\KickStaResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListJobOrdersRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListJobOrdersResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListJobOrdersWithSizeRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListJobOrdersWithSizeResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewApgroupConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewApgroupConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewJobOrderRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewJobOrderResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewNetDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewNetDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\PutAppConfigAndSaveRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\PutAppConfigAndSaveResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\QueryJobOrderRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\QueryJobOrderResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RebootApRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RebootApResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RegisterApAssetRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RegisterApAssetResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RepairApRadioRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RepairApRadioResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApgroupSsidConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApgroupSsidConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApRadioConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApRadioConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApSsidConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApSsidConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SetApAddressRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SetApAddressResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SetApNameRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SetApNameResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\UpdateNetDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\UpdateNetDeviceInfoResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Cloudwifipop extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou' => 'cloudwf.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudwifi-pop', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return GetNetDeviceInfoWithSizeResponse
     */
    public function getNetDeviceInfoWithSizeWithOptions(GetNetDeviceInfoWithSizeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetNetDeviceInfoWithSizeResponse::fromMap($this->doRequest('GetNetDeviceInfoWithSize', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetNetDeviceInfoWithSizeResponse
     */
    public function getNetDeviceInfoWithSize(GetNetDeviceInfoWithSizeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetDeviceInfoWithSizeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListJobOrdersWithSizeResponse
     */
    public function listJobOrdersWithSizeWithOptions(ListJobOrdersWithSizeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListJobOrdersWithSizeResponse::fromMap($this->doRequest('ListJobOrdersWithSize', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListJobOrdersWithSizeResponse
     */
    public function listJobOrdersWithSize(ListJobOrdersWithSizeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobOrdersWithSizeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return NewJobOrderResponse
     */
    public function newJobOrderWithOptions(NewJobOrderRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return NewJobOrderResponse::fromMap($this->doRequest('NewJobOrder', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return NewJobOrderResponse
     */
    public function newJobOrder(NewJobOrderRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->newJobOrderWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return NewNetDeviceInfoResponse
     */
    public function newNetDeviceInfoWithOptions(NewNetDeviceInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return NewNetDeviceInfoResponse::fromMap($this->doRequest('NewNetDeviceInfo', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return NewNetDeviceInfoResponse
     */
    public function newNetDeviceInfo(NewNetDeviceInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->newNetDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteNetDeviceInfoResponse
     */
    public function deleteNetDeviceInfoWithOptions(DeleteNetDeviceInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteNetDeviceInfoResponse::fromMap($this->doRequest('DeleteNetDeviceInfo', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteNetDeviceInfoResponse
     */
    public function deleteNetDeviceInfo(DeleteNetDeviceInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryJobOrderResponse
     */
    public function queryJobOrderWithOptions(QueryJobOrderRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryJobOrderResponse::fromMap($this->doRequest('QueryJobOrder', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryJobOrderResponse
     */
    public function queryJobOrder(QueryJobOrderRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobOrderWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetNetDeviceInfoResponse
     */
    public function getNetDeviceInfoWithOptions(GetNetDeviceInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetNetDeviceInfoResponse::fromMap($this->doRequest('GetNetDeviceInfo', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetNetDeviceInfoResponse
     */
    public function getNetDeviceInfo(GetNetDeviceInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListJobOrdersResponse
     */
    public function listJobOrdersWithOptions(ListJobOrdersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListJobOrdersResponse::fromMap($this->doRequest('ListJobOrders', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListJobOrdersResponse
     */
    public function listJobOrders(ListJobOrdersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobOrdersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateNetDeviceInfoResponse
     */
    public function updateNetDeviceInfoWithOptions(UpdateNetDeviceInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateNetDeviceInfoResponse::fromMap($this->doRequest('UpdateNetDeviceInfo', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateNetDeviceInfoResponse
     */
    public function updateNetDeviceInfo(UpdateNetDeviceInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutAppConfigAndSaveResponse
     */
    public function putAppConfigAndSaveWithOptions(PutAppConfigAndSaveRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutAppConfigAndSaveResponse::fromMap($this->doRequest('PutAppConfigAndSave', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutAppConfigAndSaveResponse
     */
    public function putAppConfigAndSave(PutAppConfigAndSaveRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAppConfigAndSaveWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RepairApRadioResponse
     */
    public function repairApRadioWithOptions(RepairApRadioRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RepairApRadioResponse::fromMap($this->doRequest('RepairApRadio', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RepairApRadioResponse
     */
    public function repairApRadio(RepairApRadioRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->repairApRadioWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RebootApResponse
     */
    public function rebootApWithOptions(RebootApRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RebootApResponse::fromMap($this->doRequest('RebootAp', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RebootApResponse
     */
    public function rebootAp(RebootApRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootApWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SaveApRadioConfigResponse
     */
    public function saveApRadioConfigWithOptions(SaveApRadioConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SaveApRadioConfigResponse::fromMap($this->doRequest('SaveApRadioConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SaveApRadioConfigResponse
     */
    public function saveApRadioConfig(SaveApRadioConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApRadioConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetRadioRunHistoryTimeSerResponse
     */
    public function getRadioRunHistoryTimeSerWithOptions(GetRadioRunHistoryTimeSerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetRadioRunHistoryTimeSerResponse::fromMap($this->doRequest('GetRadioRunHistoryTimeSer', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetRadioRunHistoryTimeSerResponse
     */
    public function getRadioRunHistoryTimeSer(GetRadioRunHistoryTimeSerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRadioRunHistoryTimeSerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetApRunHistoryTimeSerResponse
     */
    public function getApRunHistoryTimeSerWithOptions(GetApRunHistoryTimeSerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetApRunHistoryTimeSerResponse::fromMap($this->doRequest('GetApRunHistoryTimeSer', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetApRunHistoryTimeSerResponse
     */
    public function getApRunHistoryTimeSer(GetApRunHistoryTimeSerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApRunHistoryTimeSerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetGroupMiscAggTimeSerResponse
     */
    public function getGroupMiscAggTimeSerWithOptions(GetGroupMiscAggTimeSerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetGroupMiscAggTimeSerResponse::fromMap($this->doRequest('GetGroupMiscAggTimeSer', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetGroupMiscAggTimeSerResponse
     */
    public function getGroupMiscAggTimeSer(GetGroupMiscAggTimeSerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupMiscAggTimeSerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetApInfoFromPoolResponse
     */
    public function getApInfoFromPoolWithOptions(GetApInfoFromPoolRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetApInfoFromPoolResponse::fromMap($this->doRequest('GetApInfoFromPool', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetApInfoFromPoolResponse
     */
    public function getApInfoFromPool(GetApInfoFromPoolRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApInfoFromPoolWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return KickStaResponse
     */
    public function kickStaWithOptions(KickStaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return KickStaResponse::fromMap($this->doRequest('KickSta', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return KickStaResponse
     */
    public function kickSta(KickStaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kickStaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApgroupConfigResponse
     */
    public function deleteApgroupConfigWithOptions(DeleteApgroupConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteApgroupConfigResponse::fromMap($this->doRequest('DeleteApgroupConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApgroupConfigResponse
     */
    public function deleteApgroupConfig(DeleteApgroupConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApgroupConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetApDetailedConfigResponse
     */
    public function getApDetailedConfigWithOptions(GetApDetailedConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetApDetailedConfigResponse::fromMap($this->doRequest('GetApDetailedConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetApDetailedConfigResponse
     */
    public function getApDetailedConfig(GetApDetailedConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApDetailedConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetApDetailStatusResponse
     */
    public function getApDetailStatusWithOptions(GetApDetailStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetApDetailStatusResponse::fromMap($this->doRequest('GetApDetailStatus', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetApDetailStatusResponse
     */
    public function getApDetailStatus(GetApDetailStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApDetailStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApSsidConfigResponse
     */
    public function deleteApSsidConfigWithOptions(DeleteApSsidConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteApSsidConfigResponse::fromMap($this->doRequest('DeleteApSsidConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApSsidConfigResponse
     */
    public function deleteApSsidConfig(DeleteApSsidConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApSsidConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetApgroupIdResponse
     */
    public function getApgroupIdWithOptions(GetApgroupIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetApgroupIdResponse::fromMap($this->doRequest('GetApgroupId', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetApgroupIdResponse
     */
    public function getApgroupId(GetApgroupIdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApgroupIdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetApAddressResponse
     */
    public function setApAddressWithOptions(SetApAddressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetApAddressResponse::fromMap($this->doRequest('SetApAddress', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetApAddressResponse
     */
    public function setApAddress(SetApAddressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApAddressWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SaveApSsidConfigResponse
     */
    public function saveApSsidConfigWithOptions(SaveApSsidConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SaveApSsidConfigResponse::fromMap($this->doRequest('SaveApSsidConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SaveApSsidConfigResponse
     */
    public function saveApSsidConfig(SaveApSsidConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApSsidConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetApStatusByGroupIdResponse
     */
    public function getApStatusByGroupIdWithOptions(GetApStatusByGroupIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetApStatusByGroupIdResponse::fromMap($this->doRequest('GetApStatusByGroupId', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetApStatusByGroupIdResponse
     */
    public function getApStatusByGroupId(GetApStatusByGroupIdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApStatusByGroupIdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EffectApgroupConfigResponse
     */
    public function effectApgroupConfigWithOptions(EffectApgroupConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EffectApgroupConfigResponse::fromMap($this->doRequest('EffectApgroupConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EffectApgroupConfigResponse
     */
    public function effectApgroupConfig(EffectApgroupConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->effectApgroupConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RegisterApAssetResponse
     */
    public function registerApAssetWithOptions(RegisterApAssetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RegisterApAssetResponse::fromMap($this->doRequest('RegisterApAsset', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RegisterApAssetResponse
     */
    public function registerApAsset(RegisterApAssetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerApAssetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EffectApConfigResponse
     */
    public function effectApConfigWithOptions(EffectApConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EffectApConfigResponse::fromMap($this->doRequest('EffectApConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EffectApConfigResponse
     */
    public function effectApConfig(EffectApConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->effectApConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetApNameResponse
     */
    public function setApNameWithOptions(SetApNameRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetApNameResponse::fromMap($this->doRequest('SetApName', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetApNameResponse
     */
    public function setApName(SetApNameRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApNameWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SaveApgroupSsidConfigResponse
     */
    public function saveApgroupSsidConfigWithOptions(SaveApgroupSsidConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SaveApgroupSsidConfigResponse::fromMap($this->doRequest('SaveApgroupSsidConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SaveApgroupSsidConfigResponse
     */
    public function saveApgroupSsidConfig(SaveApgroupSsidConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApgroupSsidConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetStaStatusListByApResponse
     */
    public function getStaStatusListByApWithOptions(GetStaStatusListByApRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetStaStatusListByApResponse::fromMap($this->doRequest('GetStaStatusListByAp', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetStaStatusListByApResponse
     */
    public function getStaStatusListByAp(GetStaStatusListByApRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStaStatusListByApWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetApAddressByMacResponse
     */
    public function getApAddressByMacWithOptions(GetApAddressByMacRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetApAddressByMacResponse::fromMap($this->doRequest('GetApAddressByMac', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetApAddressByMacResponse
     */
    public function getApAddressByMac(GetApAddressByMacRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApAddressByMacWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddApListToApgroupResponse
     */
    public function addApListToApgroupWithOptions(AddApListToApgroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddApListToApgroupResponse::fromMap($this->doRequest('AddApListToApgroup', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddApListToApgroupResponse
     */
    public function addApListToApgroup(AddApListToApgroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addApListToApgroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetApgroupSsidConfigResponse
     */
    public function getApgroupSsidConfigWithOptions(GetApgroupSsidConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetApgroupSsidConfigResponse::fromMap($this->doRequest('GetApgroupSsidConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetApgroupSsidConfigResponse
     */
    public function getApgroupSsidConfig(GetApgroupSsidConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApgroupSsidConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return NewApgroupConfigResponse
     */
    public function newApgroupConfigWithOptions(NewApgroupConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return NewApgroupConfigResponse::fromMap($this->doRequest('NewApgroupConfig', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return NewApgroupConfigResponse
     */
    public function newApgroupConfig(NewApgroupConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->newApgroupConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetApAssetResponse
     */
    public function getApAssetWithOptions(GetApAssetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetApAssetResponse::fromMap($this->doRequest('GetApAsset', 'HTTPS', 'POST', '2019-11-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetApAssetResponse
     */
    public function getApAsset(GetApAssetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApAssetWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
