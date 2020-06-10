<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddMonitorResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateCorpRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateCorpResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetBodyOptionsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetBodyOptionsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceLiveUrlRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceLiveUrlResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceVideoUrlRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceVideoUrlResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceOptionsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceOptionsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListDevicesRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListDevicesResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeImageRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeImageResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchBodyRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchBodyResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopMonitorResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateCorpRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateCorpResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMonitorResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Vcs extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vcs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return GetFaceOptionsResponse
     */
    public function getFaceOptionsWithOptions(GetFaceOptionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetFaceOptionsResponse::fromMap($this->doRequest('GetFaceOptions', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetFaceOptionsResponse
     */
    public function getFaceOptions(GetFaceOptionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFaceOptionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetBodyOptionsResponse
     */
    public function getBodyOptionsWithOptions(GetBodyOptionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetBodyOptionsResponse::fromMap($this->doRequest('GetBodyOptions', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetBodyOptionsResponse
     */
    public function getBodyOptions(GetBodyOptionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBodyOptionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopMonitorResponse
     */
    public function stopMonitorWithOptions(StopMonitorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopMonitorResponse::fromMap($this->doRequest('StopMonitor', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopMonitorResponse
     */
    public function stopMonitor(StopMonitorRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMonitorWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchBodyResponse
     */
    public function searchBodyWithOptions(SearchBodyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchBodyResponse::fromMap($this->doRequest('SearchBody', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchBodyResponse
     */
    public function searchBody(SearchBodyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchBodyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddMonitorResponse
     */
    public function addMonitorWithOptions(AddMonitorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddMonitorResponse::fromMap($this->doRequest('AddMonitor', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddMonitorResponse
     */
    public function addMonitor(AddMonitorRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMonitorWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMonitorResultResponse
     */
    public function getMonitorResultWithOptions(GetMonitorResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMonitorResultResponse::fromMap($this->doRequest('GetMonitorResult', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMonitorResultResponse
     */
    public function getMonitorResult(GetMonitorResultRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonitorResultWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateMonitorResponse
     */
    public function updateMonitorWithOptions(UpdateMonitorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateMonitorResponse::fromMap($this->doRequest('UpdateMonitor', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateMonitorResponse
     */
    public function updateMonitor(UpdateMonitorRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMonitorWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetDeviceVideoUrlResponse
     */
    public function getDeviceVideoUrlWithOptions(GetDeviceVideoUrlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceVideoUrlResponse::fromMap($this->doRequest('GetDeviceVideoUrl', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetDeviceVideoUrlResponse
     */
    public function getDeviceVideoUrl(GetDeviceVideoUrlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceVideoUrlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetInventoryResponse
     */
    public function getInventoryWithOptions(GetInventoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetInventoryResponse::fromMap($this->doRequest('GetInventory', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetInventoryResponse
     */
    public function getInventory(GetInventoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInventoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeImageResponse
     */
    public function recognizeImageWithOptions(RecognizeImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RecognizeImageResponse::fromMap($this->doRequest('RecognizeImage', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeImageResponse
     */
    public function recognizeImage(RecognizeImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeImageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListCorpsResponse
     */
    public function listCorpsWithOptions(ListCorpsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListCorpsResponse::fromMap($this->doRequest('ListCorps', 'HTTPS', 'POST', '2020-05-15', 'AK,APP', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListCorpsResponse
     */
    public function listCorps(ListCorpsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCorpsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateCorpResponse
     */
    public function updateCorpWithOptions(UpdateCorpRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateCorpResponse::fromMap($this->doRequest('UpdateCorp', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateCorpResponse
     */
    public function updateCorp(UpdateCorpRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCorpWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateDeviceResponse
     */
    public function updateDeviceWithOptions(UpdateDeviceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateDeviceResponse::fromMap($this->doRequest('UpdateDevice', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateDeviceResponse
     */
    public function updateDevice(UpdateDeviceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListDevicesResponse
     */
    public function listDevicesWithOptions(ListDevicesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListDevicesResponse::fromMap($this->doRequest('ListDevices', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListDevicesResponse
     */
    public function listDevices(ListDevicesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetDeviceLiveUrlResponse
     */
    public function getDeviceLiveUrlWithOptions(GetDeviceLiveUrlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceLiveUrlResponse::fromMap($this->doRequest('GetDeviceLiveUrl', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetDeviceLiveUrlResponse
     */
    public function getDeviceLiveUrl(GetDeviceLiveUrlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceLiveUrlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchFaceResponse
     */
    public function searchFaceWithOptions(SearchFaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchFaceResponse::fromMap($this->doRequest('SearchFace', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchFaceResponse
     */
    public function searchFace(SearchFaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchFaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddDeviceResponse
     */
    public function addDeviceWithOptions(AddDeviceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddDeviceResponse::fromMap($this->doRequest('AddDevice', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddDeviceResponse
     */
    public function addDevice(AddDeviceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateCorpResponse
     */
    public function createCorpWithOptions(CreateCorpRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateCorpResponse::fromMap($this->doRequest('CreateCorp', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateCorpResponse
     */
    public function createCorp(CreateCorpRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCorpWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDeviceWithOptions(DeleteDeviceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeviceResponse::fromMap($this->doRequest('DeleteDevice', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDevice(DeleteDeviceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceWithOptions($request, $runtime);
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
