// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Vcs20200515.Models;

namespace AlibabaCloud.SDK.Vcs20200515
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            CheckConfig(config);
            this._endpoint = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public GetFaceOptionsResponse GetFaceOptionsWithOptions(GetFaceOptionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetFaceOptionsResponse>(DoRequest("GetFaceOptions", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetFaceOptionsResponse> GetFaceOptionsWithOptionsAsync(GetFaceOptionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetFaceOptionsResponse>(await DoRequestAsync("GetFaceOptions", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public GetFaceOptionsResponse GetFaceOptions(GetFaceOptionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetFaceOptionsWithOptions(request, runtime);
        }

        public async Task<GetFaceOptionsResponse> GetFaceOptionsAsync(GetFaceOptionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetFaceOptionsWithOptionsAsync(request, runtime);
        }

        public GetBodyOptionsResponse GetBodyOptionsWithOptions(GetBodyOptionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBodyOptionsResponse>(DoRequest("GetBodyOptions", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetBodyOptionsResponse> GetBodyOptionsWithOptionsAsync(GetBodyOptionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBodyOptionsResponse>(await DoRequestAsync("GetBodyOptions", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public GetBodyOptionsResponse GetBodyOptions(GetBodyOptionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetBodyOptionsWithOptions(request, runtime);
        }

        public async Task<GetBodyOptionsResponse> GetBodyOptionsAsync(GetBodyOptionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetBodyOptionsWithOptionsAsync(request, runtime);
        }

        public StopMonitorResponse StopMonitorWithOptions(StopMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopMonitorResponse>(DoRequest("StopMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StopMonitorResponse> StopMonitorWithOptionsAsync(StopMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopMonitorResponse>(await DoRequestAsync("StopMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public StopMonitorResponse StopMonitor(StopMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StopMonitorWithOptions(request, runtime);
        }

        public async Task<StopMonitorResponse> StopMonitorAsync(StopMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StopMonitorWithOptionsAsync(request, runtime);
        }

        public SearchBodyResponse SearchBodyWithOptions(SearchBodyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchBodyResponse>(DoRequest("SearchBody", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchBodyResponse> SearchBodyWithOptionsAsync(SearchBodyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchBodyResponse>(await DoRequestAsync("SearchBody", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public SearchBodyResponse SearchBody(SearchBodyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchBodyWithOptions(request, runtime);
        }

        public async Task<SearchBodyResponse> SearchBodyAsync(SearchBodyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchBodyWithOptionsAsync(request, runtime);
        }

        public AddMonitorResponse AddMonitorWithOptions(AddMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddMonitorResponse>(DoRequest("AddMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddMonitorResponse> AddMonitorWithOptionsAsync(AddMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddMonitorResponse>(await DoRequestAsync("AddMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public AddMonitorResponse AddMonitor(AddMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddMonitorWithOptions(request, runtime);
        }

        public async Task<AddMonitorResponse> AddMonitorAsync(AddMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddMonitorWithOptionsAsync(request, runtime);
        }

        public GetMonitorResultResponse GetMonitorResultWithOptions(GetMonitorResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMonitorResultResponse>(DoRequest("GetMonitorResult", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMonitorResultResponse> GetMonitorResultWithOptionsAsync(GetMonitorResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMonitorResultResponse>(await DoRequestAsync("GetMonitorResult", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public GetMonitorResultResponse GetMonitorResult(GetMonitorResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMonitorResultWithOptions(request, runtime);
        }

        public async Task<GetMonitorResultResponse> GetMonitorResultAsync(GetMonitorResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMonitorResultWithOptionsAsync(request, runtime);
        }

        public UpdateMonitorResponse UpdateMonitorWithOptions(UpdateMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateMonitorResponse>(DoRequest("UpdateMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateMonitorResponse> UpdateMonitorWithOptionsAsync(UpdateMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateMonitorResponse>(await DoRequestAsync("UpdateMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public UpdateMonitorResponse UpdateMonitor(UpdateMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateMonitorWithOptions(request, runtime);
        }

        public async Task<UpdateMonitorResponse> UpdateMonitorAsync(UpdateMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateMonitorWithOptionsAsync(request, runtime);
        }

        public GetDeviceVideoUrlResponse GetDeviceVideoUrlWithOptions(GetDeviceVideoUrlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDeviceVideoUrlResponse>(DoRequest("GetDeviceVideoUrl", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetDeviceVideoUrlResponse> GetDeviceVideoUrlWithOptionsAsync(GetDeviceVideoUrlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDeviceVideoUrlResponse>(await DoRequestAsync("GetDeviceVideoUrl", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public GetDeviceVideoUrlResponse GetDeviceVideoUrl(GetDeviceVideoUrlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetDeviceVideoUrlWithOptions(request, runtime);
        }

        public async Task<GetDeviceVideoUrlResponse> GetDeviceVideoUrlAsync(GetDeviceVideoUrlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetDeviceVideoUrlWithOptionsAsync(request, runtime);
        }

        public GetInventoryResponse GetInventoryWithOptions(GetInventoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInventoryResponse>(DoRequest("GetInventory", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetInventoryResponse> GetInventoryWithOptionsAsync(GetInventoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInventoryResponse>(await DoRequestAsync("GetInventory", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public GetInventoryResponse GetInventory(GetInventoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetInventoryWithOptions(request, runtime);
        }

        public async Task<GetInventoryResponse> GetInventoryAsync(GetInventoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetInventoryWithOptionsAsync(request, runtime);
        }

        public RecognizeImageResponse RecognizeImageWithOptions(RecognizeImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeImageResponse>(DoRequest("RecognizeImage", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeImageResponse> RecognizeImageWithOptionsAsync(RecognizeImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeImageResponse>(await DoRequestAsync("RecognizeImage", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeImageResponse RecognizeImage(RecognizeImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RecognizeImageWithOptions(request, runtime);
        }

        public async Task<RecognizeImageResponse> RecognizeImageAsync(RecognizeImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RecognizeImageWithOptionsAsync(request, runtime);
        }

        public ListCorpsResponse ListCorpsWithOptions(ListCorpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListCorpsResponse>(DoRequest("ListCorps", "HTTPS", "POST", "2020-05-15", "AK,APP", null, request.ToMap(), runtime));
        }

        public async Task<ListCorpsResponse> ListCorpsWithOptionsAsync(ListCorpsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListCorpsResponse>(await DoRequestAsync("ListCorps", "HTTPS", "POST", "2020-05-15", "AK,APP", null, request.ToMap(), runtime));
        }

        public ListCorpsResponse ListCorps(ListCorpsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListCorpsWithOptions(request, runtime);
        }

        public async Task<ListCorpsResponse> ListCorpsAsync(ListCorpsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListCorpsWithOptionsAsync(request, runtime);
        }

        public UpdateCorpResponse UpdateCorpWithOptions(UpdateCorpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateCorpResponse>(DoRequest("UpdateCorp", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateCorpResponse> UpdateCorpWithOptionsAsync(UpdateCorpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateCorpResponse>(await DoRequestAsync("UpdateCorp", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public UpdateCorpResponse UpdateCorp(UpdateCorpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateCorpWithOptions(request, runtime);
        }

        public async Task<UpdateCorpResponse> UpdateCorpAsync(UpdateCorpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateCorpWithOptionsAsync(request, runtime);
        }

        public UpdateDeviceResponse UpdateDeviceWithOptions(UpdateDeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDeviceResponse>(DoRequest("UpdateDevice", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateDeviceResponse> UpdateDeviceWithOptionsAsync(UpdateDeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDeviceResponse>(await DoRequestAsync("UpdateDevice", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public UpdateDeviceResponse UpdateDevice(UpdateDeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateDeviceWithOptions(request, runtime);
        }

        public async Task<UpdateDeviceResponse> UpdateDeviceAsync(UpdateDeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateDeviceWithOptionsAsync(request, runtime);
        }

        public ListDevicesResponse ListDevicesWithOptions(ListDevicesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDevicesResponse>(DoRequest("ListDevices", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListDevicesResponse> ListDevicesWithOptionsAsync(ListDevicesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDevicesResponse>(await DoRequestAsync("ListDevices", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public ListDevicesResponse ListDevices(ListDevicesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListDevicesWithOptions(request, runtime);
        }

        public async Task<ListDevicesResponse> ListDevicesAsync(ListDevicesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListDevicesWithOptionsAsync(request, runtime);
        }

        public GetDeviceLiveUrlResponse GetDeviceLiveUrlWithOptions(GetDeviceLiveUrlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDeviceLiveUrlResponse>(DoRequest("GetDeviceLiveUrl", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetDeviceLiveUrlResponse> GetDeviceLiveUrlWithOptionsAsync(GetDeviceLiveUrlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDeviceLiveUrlResponse>(await DoRequestAsync("GetDeviceLiveUrl", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public GetDeviceLiveUrlResponse GetDeviceLiveUrl(GetDeviceLiveUrlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetDeviceLiveUrlWithOptions(request, runtime);
        }

        public async Task<GetDeviceLiveUrlResponse> GetDeviceLiveUrlAsync(GetDeviceLiveUrlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetDeviceLiveUrlWithOptionsAsync(request, runtime);
        }

        public SearchFaceResponse SearchFaceWithOptions(SearchFaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchFaceResponse>(DoRequest("SearchFace", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchFaceResponse> SearchFaceWithOptionsAsync(SearchFaceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchFaceResponse>(await DoRequestAsync("SearchFace", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public SearchFaceResponse SearchFace(SearchFaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchFaceWithOptions(request, runtime);
        }

        public async Task<SearchFaceResponse> SearchFaceAsync(SearchFaceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchFaceWithOptionsAsync(request, runtime);
        }

        public AddDeviceResponse AddDeviceWithOptions(AddDeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDeviceResponse>(DoRequest("AddDevice", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddDeviceResponse> AddDeviceWithOptionsAsync(AddDeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDeviceResponse>(await DoRequestAsync("AddDevice", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public AddDeviceResponse AddDevice(AddDeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddDeviceWithOptions(request, runtime);
        }

        public async Task<AddDeviceResponse> AddDeviceAsync(AddDeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddDeviceWithOptionsAsync(request, runtime);
        }

        public CreateCorpResponse CreateCorpWithOptions(CreateCorpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCorpResponse>(DoRequest("CreateCorp", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateCorpResponse> CreateCorpWithOptionsAsync(CreateCorpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCorpResponse>(await DoRequestAsync("CreateCorp", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public CreateCorpResponse CreateCorp(CreateCorpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateCorpWithOptions(request, runtime);
        }

        public async Task<CreateCorpResponse> CreateCorpAsync(CreateCorpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateCorpWithOptionsAsync(request, runtime);
        }

        public DeleteDeviceResponse DeleteDeviceWithOptions(DeleteDeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDeviceResponse>(DoRequest("DeleteDevice", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDeviceResponse> DeleteDeviceWithOptionsAsync(DeleteDeviceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDeviceResponse>(await DoRequestAsync("DeleteDevice", "HTTPS", "POST", "2020-05-15", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDeviceResponse DeleteDevice(DeleteDeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDeviceWithOptions(request, runtime);
        }

        public async Task<DeleteDeviceResponse> DeleteDeviceAsync(DeleteDeviceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDeviceWithOptionsAsync(request, runtime);
        }

        public string GetEndpoint(string productId, string regionId, string endpointRule, string network, string suffix, Dictionary<string, string> endpointMap, string endpoint)
        {
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpoint))
            {
                return endpoint;
            }
            if (!AlibabaCloud.TeaUtil.Common.IsUnset(endpointMap) && !AlibabaCloud.TeaUtil.Common.Empty(endpointMap.Get(regionId)))
            {
                return endpointMap.Get(regionId);
            }
            return AlibabaCloud.EndpointUtil.Common.GetEndpointRules(productId, regionId, endpointRule, network, suffix);
        }

    }
}
