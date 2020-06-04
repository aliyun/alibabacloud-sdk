<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515;

use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceOptionsRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceOptionsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetBodyOptionsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetBodyOptionsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopMonitorResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchBodyRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchBodyResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddMonitorResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMonitorResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceVideoUrlRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceVideoUrlResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeImageRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeImageResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateCorpRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateCorpResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListDevicesRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListDevicesResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceLiveUrlRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceLiveUrlResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateCorpRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateCorpResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceResponse;

class Vcs extends Rpc {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "regional";
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param GetFaceOptionsRequest $request
     * @param RuntimeOptions $runtime
     * @return GetFaceOptionsResponse
     * @throws \Exception
     */
    public function getFaceOptionsWithOptions(GetFaceOptionsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetFaceOptionsResponse::fromMap($this->doRequest("GetFaceOptions", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param GetFaceOptionsRequest $request
     * @return GetFaceOptionsResponse
     * @throws \Exception
     */
    public function getFaceOptions(GetFaceOptionsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getFaceOptionsWithOptions($request, $runtime);
    }

    /**
     * @param GetBodyOptionsRequest $request
     * @param RuntimeOptions $runtime
     * @return GetBodyOptionsResponse
     * @throws \Exception
     */
    public function getBodyOptionsWithOptions(GetBodyOptionsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetBodyOptionsResponse::fromMap($this->doRequest("GetBodyOptions", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param GetBodyOptionsRequest $request
     * @return GetBodyOptionsResponse
     * @throws \Exception
     */
    public function getBodyOptions(GetBodyOptionsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getBodyOptionsWithOptions($request, $runtime);
    }

    /**
     * @param StopMonitorRequest $request
     * @param RuntimeOptions $runtime
     * @return StopMonitorResponse
     * @throws \Exception
     */
    public function stopMonitorWithOptions(StopMonitorRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return StopMonitorResponse::fromMap($this->doRequest("StopMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param StopMonitorRequest $request
     * @return StopMonitorResponse
     * @throws \Exception
     */
    public function stopMonitor(StopMonitorRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->stopMonitorWithOptions($request, $runtime);
    }

    /**
     * @param SearchBodyRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchBodyResponse
     * @throws \Exception
     */
    public function searchBodyWithOptions(SearchBodyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SearchBodyResponse::fromMap($this->doRequest("SearchBody", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param SearchBodyRequest $request
     * @return SearchBodyResponse
     * @throws \Exception
     */
    public function searchBody(SearchBodyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->searchBodyWithOptions($request, $runtime);
    }

    /**
     * @param AddMonitorRequest $request
     * @param RuntimeOptions $runtime
     * @return AddMonitorResponse
     * @throws \Exception
     */
    public function addMonitorWithOptions(AddMonitorRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddMonitorResponse::fromMap($this->doRequest("AddMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param AddMonitorRequest $request
     * @return AddMonitorResponse
     * @throws \Exception
     */
    public function addMonitor(AddMonitorRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addMonitorWithOptions($request, $runtime);
    }

    /**
     * @param GetMonitorResultRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMonitorResultResponse
     * @throws \Exception
     */
    public function getMonitorResultWithOptions(GetMonitorResultRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMonitorResultResponse::fromMap($this->doRequest("GetMonitorResult", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param GetMonitorResultRequest $request
     * @return GetMonitorResultResponse
     * @throws \Exception
     */
    public function getMonitorResult(GetMonitorResultRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMonitorResultWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMonitorRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateMonitorResponse
     * @throws \Exception
     */
    public function updateMonitorWithOptions(UpdateMonitorRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateMonitorResponse::fromMap($this->doRequest("UpdateMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateMonitorRequest $request
     * @return UpdateMonitorResponse
     * @throws \Exception
     */
    public function updateMonitor(UpdateMonitorRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateMonitorWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceVideoUrlRequest $request
     * @param RuntimeOptions $runtime
     * @return GetDeviceVideoUrlResponse
     * @throws \Exception
     */
    public function getDeviceVideoUrlWithOptions(GetDeviceVideoUrlRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetDeviceVideoUrlResponse::fromMap($this->doRequest("GetDeviceVideoUrl", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param GetDeviceVideoUrlRequest $request
     * @return GetDeviceVideoUrlResponse
     * @throws \Exception
     */
    public function getDeviceVideoUrl(GetDeviceVideoUrlRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getDeviceVideoUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetInventoryRequest $request
     * @param RuntimeOptions $runtime
     * @return GetInventoryResponse
     * @throws \Exception
     */
    public function getInventoryWithOptions(GetInventoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetInventoryResponse::fromMap($this->doRequest("GetInventory", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param GetInventoryRequest $request
     * @return GetInventoryResponse
     * @throws \Exception
     */
    public function getInventory(GetInventoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getInventoryWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeImageRequest $request
     * @param RuntimeOptions $runtime
     * @return RecognizeImageResponse
     * @throws \Exception
     */
    public function recognizeImageWithOptions(RecognizeImageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RecognizeImageResponse::fromMap($this->doRequest("RecognizeImage", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param RecognizeImageRequest $request
     * @return RecognizeImageResponse
     * @throws \Exception
     */
    public function recognizeImage(RecognizeImageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->recognizeImageWithOptions($request, $runtime);
    }

    /**
     * @param ListCorpsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListCorpsResponse
     * @throws \Exception
     */
    public function listCorpsWithOptions(ListCorpsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListCorpsResponse::fromMap($this->doRequest("ListCorps", "HTTPS", "POST", "2020-05-15", "AK,APP", null, $request, $runtime));
    }

    /**
     * @param ListCorpsRequest $request
     * @return ListCorpsResponse
     * @throws \Exception
     */
    public function listCorps(ListCorpsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listCorpsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCorpRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateCorpResponse
     * @throws \Exception
     */
    public function updateCorpWithOptions(UpdateCorpRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateCorpResponse::fromMap($this->doRequest("UpdateCorp", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateCorpRequest $request
     * @return UpdateCorpResponse
     * @throws \Exception
     */
    public function updateCorp(UpdateCorpRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateCorpWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateDeviceResponse
     * @throws \Exception
     */
    public function updateDeviceWithOptions(UpdateDeviceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateDeviceResponse::fromMap($this->doRequest("UpdateDevice", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateDeviceRequest $request
     * @return UpdateDeviceResponse
     * @throws \Exception
     */
    public function updateDevice(UpdateDeviceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListDevicesRequest $request
     * @param RuntimeOptions $runtime
     * @return ListDevicesResponse
     * @throws \Exception
     */
    public function listDevicesWithOptions(ListDevicesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListDevicesResponse::fromMap($this->doRequest("ListDevices", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param ListDevicesRequest $request
     * @return ListDevicesResponse
     * @throws \Exception
     */
    public function listDevices(ListDevicesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listDevicesWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceLiveUrlRequest $request
     * @param RuntimeOptions $runtime
     * @return GetDeviceLiveUrlResponse
     * @throws \Exception
     */
    public function getDeviceLiveUrlWithOptions(GetDeviceLiveUrlRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetDeviceLiveUrlResponse::fromMap($this->doRequest("GetDeviceLiveUrl", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param GetDeviceLiveUrlRequest $request
     * @return GetDeviceLiveUrlResponse
     * @throws \Exception
     */
    public function getDeviceLiveUrl(GetDeviceLiveUrlRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getDeviceLiveUrlWithOptions($request, $runtime);
    }

    /**
     * @param SearchFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchFaceResponse
     * @throws \Exception
     */
    public function searchFaceWithOptions(SearchFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SearchFaceResponse::fromMap($this->doRequest("SearchFace", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param SearchFaceRequest $request
     * @return SearchFaceResponse
     * @throws \Exception
     */
    public function searchFace(SearchFaceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->searchFaceWithOptions($request, $runtime);
    }

    /**
     * @param AddDeviceRequest $request
     * @param RuntimeOptions $runtime
     * @return AddDeviceResponse
     * @throws \Exception
     */
    public function addDeviceWithOptions(AddDeviceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddDeviceResponse::fromMap($this->doRequest("AddDevice", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param AddDeviceRequest $request
     * @return AddDeviceResponse
     * @throws \Exception
     */
    public function addDevice(AddDeviceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CreateCorpRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateCorpResponse
     * @throws \Exception
     */
    public function createCorpWithOptions(CreateCorpRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateCorpResponse::fromMap($this->doRequest("CreateCorp", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateCorpRequest $request
     * @return CreateCorpResponse
     * @throws \Exception
     */
    public function createCorp(CreateCorpRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createCorpWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDeviceResponse
     * @throws \Exception
     */
    public function deleteDeviceWithOptions(DeleteDeviceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteDeviceResponse::fromMap($this->doRequest("DeleteDevice", "HTTPS", "POST", "2020-05-15", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteDeviceRequest $request
     * @return DeleteDeviceResponse
     * @throws \Exception
     */
    public function deleteDevice(DeleteDeviceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDeviceWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array $endpointMap
     * @param string $endpoint
     * @return string
     * @throws \Exception
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap["regionId"])) {
            return $endpointMap["regionId"];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
