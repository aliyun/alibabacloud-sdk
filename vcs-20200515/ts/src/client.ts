// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class GetFaceOptionsRequest extends $tea.Model {
  corpId?: string;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetFaceOptionsResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: GetFaceOptionsResponseData[];
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: { 'type': 'array', 'itemType': GetFaceOptionsResponseData },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetBodyOptionsRequest extends $tea.Model {
  corpId?: string;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetBodyOptionsResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: GetBodyOptionsResponseData[];
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: { 'type': 'array', 'itemType': GetBodyOptionsResponseData },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopMonitorRequest extends $tea.Model {
  taskId?: string;
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopMonitorResponse extends $tea.Model {
  code: string;
  data: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      data: 'Data',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      data: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchBodyRequest extends $tea.Model {
  corpId: string;
  gbId?: string;
  startTimeStamp: number;
  endTimeStamp: number;
  pageNo: number;
  pageSize: number;
  optionList?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      gbId: 'GbId',
      startTimeStamp: 'StartTimeStamp',
      endTimeStamp: 'EndTimeStamp',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      optionList: 'OptionList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      gbId: 'string',
      startTimeStamp: 'number',
      endTimeStamp: 'number',
      pageNo: 'number',
      pageSize: 'number',
      optionList: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchBodyResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: SearchBodyResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: SearchBodyResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddMonitorRequest extends $tea.Model {
  corpId?: string;
  monitorType?: string;
  description?: string;
  batchIndicator?: number;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      monitorType: 'MonitorType',
      description: 'Description',
      batchIndicator: 'BatchIndicator',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      monitorType: 'string',
      description: 'string',
      batchIndicator: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddMonitorResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  data: AddMonitorResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      data: AddMonitorResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMonitorResultRequest extends $tea.Model {
  corpId: string;
  taskId: string;
  minRecordId?: string;
  startTime?: number;
  endTime?: number;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      taskId: 'TaskId',
      minRecordId: 'MinRecordId',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      taskId: 'string',
      minRecordId: 'string',
      startTime: 'number',
      endTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMonitorResultResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: GetMonitorResultResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: GetMonitorResultResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateMonitorRequest extends $tea.Model {
  corpId?: string;
  taskId?: string;
  ruleName?: string;
  deviceOperateType?: string;
  deviceList?: string;
  picOperateType?: string;
  picList?: string;
  attributeOperateType?: string;
  attributeName?: string;
  attributeValueList?: string;
  description?: string;
  ruleExpression?: string;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      taskId: 'TaskId',
      ruleName: 'RuleName',
      deviceOperateType: 'DeviceOperateType',
      deviceList: 'DeviceList',
      picOperateType: 'PicOperateType',
      picList: 'PicList',
      attributeOperateType: 'AttributeOperateType',
      attributeName: 'AttributeName',
      attributeValueList: 'AttributeValueList',
      description: 'Description',
      ruleExpression: 'RuleExpression',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      taskId: 'string',
      ruleName: 'string',
      deviceOperateType: 'string',
      deviceList: 'string',
      picOperateType: 'string',
      picList: 'string',
      attributeOperateType: 'string',
      attributeName: 'string',
      attributeValueList: 'string',
      description: 'string',
      ruleExpression: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateMonitorResponse extends $tea.Model {
  code: string;
  data: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      data: 'Data',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      data: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDeviceVideoUrlRequest extends $tea.Model {
  corpId: string;
  gbId?: string;
  startTime?: number;
  endTime?: number;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      gbId: 'GbId',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      gbId: 'string',
      startTime: 'number',
      endTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDeviceVideoUrlResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetInventoryRequest extends $tea.Model {
  commodityCode?: string;
  static names(): { [key: string]: string } {
    return {
      commodityCode: 'CommodityCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      commodityCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetInventoryResponse extends $tea.Model {
  success: boolean;
  data: GetInventoryResponseData;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      data: GetInventoryResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeImageRequest extends $tea.Model {
  corpId: string;
  picContent: string;
  picFormat: string;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      picContent: 'PicContent',
      picFormat: 'PicFormat',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      picContent: 'string',
      picFormat: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeImageResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: RecognizeImageResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: RecognizeImageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListCorpsRequest extends $tea.Model {
  pageNumber: number;
  pageSize: number;
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListCorpsResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: ListCorpsResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: ListCorpsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateCorpRequest extends $tea.Model {
  corpId?: string;
  corpName?: string;
  appName?: string;
  parentCorpId?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      corpName: 'CorpName',
      appName: 'AppName',
      parentCorpId: 'ParentCorpId',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      corpName: 'string',
      appName: 'string',
      parentCorpId: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateCorpResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDeviceRequest extends $tea.Model {
  gbId?: string;
  deviceName?: string;
  deviceType?: string;
  deviceAddress?: string;
  deviceSite?: string;
  deviceDirection?: string;
  deviceResolution?: string;
  bitRate?: string;
  corpId?: string;
  vendor?: string;
  static names(): { [key: string]: string } {
    return {
      gbId: 'GbId',
      deviceName: 'DeviceName',
      deviceType: 'DeviceType',
      deviceAddress: 'DeviceAddress',
      deviceSite: 'DeviceSite',
      deviceDirection: 'DeviceDirection',
      deviceResolution: 'DeviceResolution',
      bitRate: 'BitRate',
      corpId: 'CorpId',
      vendor: 'Vendor',
    };
  }

  static types(): { [key: string]: any } {
    return {
      gbId: 'string',
      deviceName: 'string',
      deviceType: 'string',
      deviceAddress: 'string',
      deviceSite: 'string',
      deviceDirection: 'string',
      deviceResolution: 'string',
      bitRate: 'string',
      corpId: 'string',
      vendor: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDeviceResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDevicesRequest extends $tea.Model {
  corpId?: string;
  gbId?: string;
  deviceName?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      gbId: 'GbId',
      deviceName: 'DeviceName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      gbId: 'string',
      deviceName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDevicesResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: ListDevicesResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: ListDevicesResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDeviceLiveUrlRequest extends $tea.Model {
  corpId: string;
  gbId?: string;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      gbId: 'GbId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      gbId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDeviceLiveUrlResponse extends $tea.Model {
  code: string;
  url: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      url: 'Url',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      url: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceRequest extends $tea.Model {
  corpId: string;
  gbId?: string;
  startTimeStamp: number;
  endTimeStamp: number;
  pageNo: number;
  pageSize: number;
  optionList?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      gbId: 'GbId',
      startTimeStamp: 'StartTimeStamp',
      endTimeStamp: 'EndTimeStamp',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      optionList: 'OptionList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      gbId: 'string',
      startTimeStamp: 'number',
      endTimeStamp: 'number',
      pageNo: 'number',
      pageSize: 'number',
      optionList: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: SearchFaceResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: SearchFaceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDeviceRequest extends $tea.Model {
  gbId?: string;
  deviceName?: string;
  deviceType?: string;
  deviceAddress?: string;
  deviceSite?: string;
  deviceDirection?: string;
  deviceResolution?: string;
  bitRate?: string;
  corpId?: string;
  vendor?: string;
  static names(): { [key: string]: string } {
    return {
      gbId: 'GbId',
      deviceName: 'DeviceName',
      deviceType: 'DeviceType',
      deviceAddress: 'DeviceAddress',
      deviceSite: 'DeviceSite',
      deviceDirection: 'DeviceDirection',
      deviceResolution: 'DeviceResolution',
      bitRate: 'BitRate',
      corpId: 'CorpId',
      vendor: 'Vendor',
    };
  }

  static types(): { [key: string]: any } {
    return {
      gbId: 'string',
      deviceName: 'string',
      deviceType: 'string',
      deviceAddress: 'string',
      deviceSite: 'string',
      deviceDirection: 'string',
      deviceResolution: 'string',
      bitRate: 'string',
      corpId: 'string',
      vendor: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDeviceResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCorpRequest extends $tea.Model {
  corpName: string;
  appName: string;
  parentCorpId?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      corpName: 'CorpName',
      appName: 'AppName',
      parentCorpId: 'ParentCorpId',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpName: 'string',
      appName: 'string',
      parentCorpId: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCorpResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  corpId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      corpId: 'CorpId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      corpId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDeviceRequest extends $tea.Model {
  corpId?: string;
  gbId?: string;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      gbId: 'GbId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      gbId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDeviceResponse extends $tea.Model {
  requestId: string;
  code: string;
  data: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      data: 'Data',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      data: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetFaceOptionsResponseDataOptionList extends $tea.Model {
  key: string;
  name: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetFaceOptionsResponseData extends $tea.Model {
  key: string;
  name: string;
  optionList: GetFaceOptionsResponseDataOptionList[];
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      name: 'Name',
      optionList: 'OptionList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      name: 'string',
      optionList: { 'type': 'array', 'itemType': GetFaceOptionsResponseDataOptionList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetBodyOptionsResponseDataOptionList extends $tea.Model {
  key: string;
  name: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetBodyOptionsResponseData extends $tea.Model {
  key: string;
  name: string;
  optionList: GetBodyOptionsResponseDataOptionList[];
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      name: 'Name',
      optionList: 'OptionList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      name: 'string',
      optionList: { 'type': 'array', 'itemType': GetBodyOptionsResponseDataOptionList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchBodyResponseDataRecords extends $tea.Model {
  gbId: string;
  imageUrl: string;
  leftTopX: number;
  leftTopY: number;
  rightBottomX: number;
  rightBottomY: number;
  score: number;
  targetImageUrl: string;
  static names(): { [key: string]: string } {
    return {
      gbId: 'GbId',
      imageUrl: 'ImageUrl',
      leftTopX: 'LeftTopX',
      leftTopY: 'LeftTopY',
      rightBottomX: 'RightBottomX',
      rightBottomY: 'RightBottomY',
      score: 'Score',
      targetImageUrl: 'TargetImageUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      gbId: 'string',
      imageUrl: 'string',
      leftTopX: 'number',
      leftTopY: 'number',
      rightBottomX: 'number',
      rightBottomY: 'number',
      score: 'number',
      targetImageUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchBodyResponseData extends $tea.Model {
  pageNo: number;
  pageSize: number;
  totalCount: number;
  totalPage: number;
  records: SearchBodyResponseDataRecords[];
  static names(): { [key: string]: string } {
    return {
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      totalPage: 'TotalPage',
      records: 'Records',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNo: 'number',
      pageSize: 'number',
      totalCount: 'number',
      totalPage: 'number',
      records: { 'type': 'array', 'itemType': SearchBodyResponseDataRecords },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddMonitorResponseData extends $tea.Model {
  taskId: string;
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMonitorResultResponseDataRecords extends $tea.Model {
  rightBottomY: string;
  rightBottomX: string;
  leftUpY: string;
  leftUpX: string;
  gbId: string;
  score: string;
  picUrl: string;
  shotTime: string;
  monitorPicUrl: string;
  static names(): { [key: string]: string } {
    return {
      rightBottomY: 'RightBottomY',
      rightBottomX: 'RightBottomX',
      leftUpY: 'LeftUpY',
      leftUpX: 'LeftUpX',
      gbId: 'GbId',
      score: 'Score',
      picUrl: 'PicUrl',
      shotTime: 'ShotTime',
      monitorPicUrl: 'MonitorPicUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rightBottomY: 'string',
      rightBottomX: 'string',
      leftUpY: 'string',
      leftUpX: 'string',
      gbId: 'string',
      score: 'string',
      picUrl: 'string',
      shotTime: 'string',
      monitorPicUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMonitorResultResponseData extends $tea.Model {
  maxId: string;
  records: GetMonitorResultResponseDataRecords[];
  static names(): { [key: string]: string } {
    return {
      maxId: 'MaxId',
      records: 'Records',
    };
  }

  static types(): { [key: string]: any } {
    return {
      maxId: 'string',
      records: { 'type': 'array', 'itemType': GetMonitorResultResponseDataRecords },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetInventoryResponseDataResultObject extends $tea.Model {
  buyerId: string;
  commodityCode: string;
  currentInventory: string;
  validEndTime: string;
  validStartTime: string;
  instanceId: string;
  inventoryId: string;
  static names(): { [key: string]: string } {
    return {
      buyerId: 'BuyerId',
      commodityCode: 'CommodityCode',
      currentInventory: 'CurrentInventory',
      validEndTime: 'ValidEndTime',
      validStartTime: 'ValidStartTime',
      instanceId: 'InstanceId',
      inventoryId: 'InventoryId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      buyerId: 'string',
      commodityCode: 'string',
      currentInventory: 'string',
      validEndTime: 'string',
      validStartTime: 'string',
      instanceId: 'string',
      inventoryId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetInventoryResponseData extends $tea.Model {
  resultObject: GetInventoryResponseDataResultObject[];
  static names(): { [key: string]: string } {
    return {
      resultObject: 'ResultObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resultObject: { 'type': 'array', 'itemType': GetInventoryResponseDataResultObject },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeImageResponseDataBodyList extends $tea.Model {
  feature: string;
  fileName: string;
  imageBaseSixFour: string;
  leftTopX: string;
  leftTopY: string;
  localFeature: string;
  respiratorColor: string;
  rightBottomX: string;
  rightBottomY: string;
  static names(): { [key: string]: string } {
    return {
      feature: 'Feature',
      fileName: 'FileName',
      imageBaseSixFour: 'ImageBaseSixFour',
      leftTopX: 'LeftTopX',
      leftTopY: 'LeftTopY',
      localFeature: 'LocalFeature',
      respiratorColor: 'RespiratorColor',
      rightBottomX: 'RightBottomX',
      rightBottomY: 'RightBottomY',
    };
  }

  static types(): { [key: string]: any } {
    return {
      feature: 'string',
      fileName: 'string',
      imageBaseSixFour: 'string',
      leftTopX: 'string',
      leftTopY: 'string',
      localFeature: 'string',
      respiratorColor: 'string',
      rightBottomX: 'string',
      rightBottomY: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeImageResponseDataFaceList extends $tea.Model {
  feature: string;
  fileName: string;
  imageBaseSixFour: string;
  leftTopX: string;
  leftTopY: string;
  localFeature: string;
  respiratorColor: string;
  rightBottomX: string;
  rightBottomY: string;
  static names(): { [key: string]: string } {
    return {
      feature: 'Feature',
      fileName: 'FileName',
      imageBaseSixFour: 'ImageBaseSixFour',
      leftTopX: 'LeftTopX',
      leftTopY: 'LeftTopY',
      localFeature: 'LocalFeature',
      respiratorColor: 'RespiratorColor',
      rightBottomX: 'RightBottomX',
      rightBottomY: 'RightBottomY',
    };
  }

  static types(): { [key: string]: any } {
    return {
      feature: 'string',
      fileName: 'string',
      imageBaseSixFour: 'string',
      leftTopX: 'string',
      leftTopY: 'string',
      localFeature: 'string',
      respiratorColor: 'string',
      rightBottomX: 'string',
      rightBottomY: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeImageResponseData extends $tea.Model {
  bodyList: RecognizeImageResponseDataBodyList[];
  faceList: RecognizeImageResponseDataFaceList[];
  static names(): { [key: string]: string } {
    return {
      bodyList: 'BodyList',
      faceList: 'FaceList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bodyList: { 'type': 'array', 'itemType': RecognizeImageResponseDataBodyList },
      faceList: { 'type': 'array', 'itemType': RecognizeImageResponseDataFaceList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListCorpsResponseDataRecords extends $tea.Model {
  corpId: string;
  corpName: string;
  description: string;
  createDate: string;
  parentCorpId: string;
  appName: string;
  deviceCount: number;
  static names(): { [key: string]: string } {
    return {
      corpId: 'CorpId',
      corpName: 'CorpName',
      description: 'Description',
      createDate: 'CreateDate',
      parentCorpId: 'ParentCorpId',
      appName: 'AppName',
      deviceCount: 'DeviceCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      corpId: 'string',
      corpName: 'string',
      description: 'string',
      createDate: 'string',
      parentCorpId: 'string',
      appName: 'string',
      deviceCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListCorpsResponseData extends $tea.Model {
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  totalPage: number;
  records: ListCorpsResponseDataRecords[];
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      totalPage: 'TotalPage',
      records: 'Records',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      totalPage: 'number',
      records: { 'type': 'array', 'itemType': ListCorpsResponseDataRecords },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDevicesResponseDataRecords extends $tea.Model {
  accessProtocolType: string;
  bitRate: string;
  coverImageUrl: string;
  gbId: string;
  deviceAddress: string;
  deviceDirection: string;
  deviceSite: string;
  latitude: string;
  longitude: string;
  deviceName: string;
  resolution: string;
  sipGBId: string;
  sipPassword: string;
  sipServerIp: string;
  sipServerPort: string;
  status: number;
  deviceType: string;
  vendor: string;
  createTime: string;
  static names(): { [key: string]: string } {
    return {
      accessProtocolType: 'AccessProtocolType',
      bitRate: 'BitRate',
      coverImageUrl: 'CoverImageUrl',
      gbId: 'GbId',
      deviceAddress: 'DeviceAddress',
      deviceDirection: 'DeviceDirection',
      deviceSite: 'DeviceSite',
      latitude: 'Latitude',
      longitude: 'Longitude',
      deviceName: 'DeviceName',
      resolution: 'Resolution',
      sipGBId: 'SipGBId',
      sipPassword: 'SipPassword',
      sipServerIp: 'SipServerIp',
      sipServerPort: 'SipServerPort',
      status: 'Status',
      deviceType: 'DeviceType',
      vendor: 'Vendor',
      createTime: 'CreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessProtocolType: 'string',
      bitRate: 'string',
      coverImageUrl: 'string',
      gbId: 'string',
      deviceAddress: 'string',
      deviceDirection: 'string',
      deviceSite: 'string',
      latitude: 'string',
      longitude: 'string',
      deviceName: 'string',
      resolution: 'string',
      sipGBId: 'string',
      sipPassword: 'string',
      sipServerIp: 'string',
      sipServerPort: 'string',
      status: 'number',
      deviceType: 'string',
      vendor: 'string',
      createTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDevicesResponseData extends $tea.Model {
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  totalPage: number;
  records: ListDevicesResponseDataRecords[];
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      totalPage: 'TotalPage',
      records: 'Records',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      totalPage: 'number',
      records: { 'type': 'array', 'itemType': ListDevicesResponseDataRecords },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceResponseDataRecords extends $tea.Model {
  gbId: string;
  imageUrl: string;
  leftTopX: number;
  leftTopY: number;
  rightBottomX: number;
  rightBottomY: number;
  score: number;
  targetImageUrl: string;
  static names(): { [key: string]: string } {
    return {
      gbId: 'GbId',
      imageUrl: 'ImageUrl',
      leftTopX: 'LeftTopX',
      leftTopY: 'LeftTopY',
      rightBottomX: 'RightBottomX',
      rightBottomY: 'RightBottomY',
      score: 'Score',
      targetImageUrl: 'TargetImageUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      gbId: 'string',
      imageUrl: 'string',
      leftTopX: 'number',
      leftTopY: 'number',
      rightBottomX: 'number',
      rightBottomY: 'number',
      score: 'number',
      targetImageUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceResponseData extends $tea.Model {
  pageNo: number;
  pageSize: number;
  totalCount: number;
  totalPage: number;
  records: SearchFaceResponseDataRecords[];
  static names(): { [key: string]: string } {
    return {
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      totalPage: 'TotalPage',
      records: 'Records',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNo: 'number',
      pageSize: 'number',
      totalCount: 'number',
      totalPage: 'number',
      records: { 'type': 'array', 'itemType': SearchFaceResponseDataRecords },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "regional";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("vcs", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async getFaceOptionsWithOptions(request: GetFaceOptionsRequest, runtime: $Util.RuntimeOptions): Promise<GetFaceOptionsResponse> {
    Util.validateModel(request);
    return $tea.cast<GetFaceOptionsResponse>(await this.doRequest("GetFaceOptions", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new GetFaceOptionsResponse({}));
  }

  async getFaceOptions(request: GetFaceOptionsRequest): Promise<GetFaceOptionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getFaceOptionsWithOptions(request, runtime);
  }

  async getBodyOptionsWithOptions(request: GetBodyOptionsRequest, runtime: $Util.RuntimeOptions): Promise<GetBodyOptionsResponse> {
    Util.validateModel(request);
    return $tea.cast<GetBodyOptionsResponse>(await this.doRequest("GetBodyOptions", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new GetBodyOptionsResponse({}));
  }

  async getBodyOptions(request: GetBodyOptionsRequest): Promise<GetBodyOptionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getBodyOptionsWithOptions(request, runtime);
  }

  async stopMonitorWithOptions(request: StopMonitorRequest, runtime: $Util.RuntimeOptions): Promise<StopMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<StopMonitorResponse>(await this.doRequest("StopMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new StopMonitorResponse({}));
  }

  async stopMonitor(request: StopMonitorRequest): Promise<StopMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.stopMonitorWithOptions(request, runtime);
  }

  async searchBodyWithOptions(request: SearchBodyRequest, runtime: $Util.RuntimeOptions): Promise<SearchBodyResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchBodyResponse>(await this.doRequest("SearchBody", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new SearchBodyResponse({}));
  }

  async searchBody(request: SearchBodyRequest): Promise<SearchBodyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchBodyWithOptions(request, runtime);
  }

  async addMonitorWithOptions(request: AddMonitorRequest, runtime: $Util.RuntimeOptions): Promise<AddMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<AddMonitorResponse>(await this.doRequest("AddMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new AddMonitorResponse({}));
  }

  async addMonitor(request: AddMonitorRequest): Promise<AddMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addMonitorWithOptions(request, runtime);
  }

  async getMonitorResultWithOptions(request: GetMonitorResultRequest, runtime: $Util.RuntimeOptions): Promise<GetMonitorResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMonitorResultResponse>(await this.doRequest("GetMonitorResult", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new GetMonitorResultResponse({}));
  }

  async getMonitorResult(request: GetMonitorResultRequest): Promise<GetMonitorResultResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMonitorResultWithOptions(request, runtime);
  }

  async updateMonitorWithOptions(request: UpdateMonitorRequest, runtime: $Util.RuntimeOptions): Promise<UpdateMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateMonitorResponse>(await this.doRequest("UpdateMonitor", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new UpdateMonitorResponse({}));
  }

  async updateMonitor(request: UpdateMonitorRequest): Promise<UpdateMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateMonitorWithOptions(request, runtime);
  }

  async getDeviceVideoUrlWithOptions(request: GetDeviceVideoUrlRequest, runtime: $Util.RuntimeOptions): Promise<GetDeviceVideoUrlResponse> {
    Util.validateModel(request);
    return $tea.cast<GetDeviceVideoUrlResponse>(await this.doRequest("GetDeviceVideoUrl", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new GetDeviceVideoUrlResponse({}));
  }

  async getDeviceVideoUrl(request: GetDeviceVideoUrlRequest): Promise<GetDeviceVideoUrlResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getDeviceVideoUrlWithOptions(request, runtime);
  }

  async getInventoryWithOptions(request: GetInventoryRequest, runtime: $Util.RuntimeOptions): Promise<GetInventoryResponse> {
    Util.validateModel(request);
    return $tea.cast<GetInventoryResponse>(await this.doRequest("GetInventory", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new GetInventoryResponse({}));
  }

  async getInventory(request: GetInventoryRequest): Promise<GetInventoryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getInventoryWithOptions(request, runtime);
  }

  async recognizeImageWithOptions(request: RecognizeImageRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeImageResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizeImageResponse>(await this.doRequest("RecognizeImage", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new RecognizeImageResponse({}));
  }

  async recognizeImage(request: RecognizeImageRequest): Promise<RecognizeImageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.recognizeImageWithOptions(request, runtime);
  }

  async listCorpsWithOptions(request: ListCorpsRequest, runtime: $Util.RuntimeOptions): Promise<ListCorpsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListCorpsResponse>(await this.doRequest("ListCorps", "HTTPS", "POST", "2020-05-15", "AK,APP", null, $tea.toMap(request), runtime), new ListCorpsResponse({}));
  }

  async listCorps(request: ListCorpsRequest): Promise<ListCorpsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listCorpsWithOptions(request, runtime);
  }

  async updateCorpWithOptions(request: UpdateCorpRequest, runtime: $Util.RuntimeOptions): Promise<UpdateCorpResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateCorpResponse>(await this.doRequest("UpdateCorp", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new UpdateCorpResponse({}));
  }

  async updateCorp(request: UpdateCorpRequest): Promise<UpdateCorpResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateCorpWithOptions(request, runtime);
  }

  async updateDeviceWithOptions(request: UpdateDeviceRequest, runtime: $Util.RuntimeOptions): Promise<UpdateDeviceResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateDeviceResponse>(await this.doRequest("UpdateDevice", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new UpdateDeviceResponse({}));
  }

  async updateDevice(request: UpdateDeviceRequest): Promise<UpdateDeviceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateDeviceWithOptions(request, runtime);
  }

  async listDevicesWithOptions(request: ListDevicesRequest, runtime: $Util.RuntimeOptions): Promise<ListDevicesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListDevicesResponse>(await this.doRequest("ListDevices", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new ListDevicesResponse({}));
  }

  async listDevices(request: ListDevicesRequest): Promise<ListDevicesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listDevicesWithOptions(request, runtime);
  }

  async getDeviceLiveUrlWithOptions(request: GetDeviceLiveUrlRequest, runtime: $Util.RuntimeOptions): Promise<GetDeviceLiveUrlResponse> {
    Util.validateModel(request);
    return $tea.cast<GetDeviceLiveUrlResponse>(await this.doRequest("GetDeviceLiveUrl", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new GetDeviceLiveUrlResponse({}));
  }

  async getDeviceLiveUrl(request: GetDeviceLiveUrlRequest): Promise<GetDeviceLiveUrlResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getDeviceLiveUrlWithOptions(request, runtime);
  }

  async searchFaceWithOptions(request: SearchFaceRequest, runtime: $Util.RuntimeOptions): Promise<SearchFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchFaceResponse>(await this.doRequest("SearchFace", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new SearchFaceResponse({}));
  }

  async searchFace(request: SearchFaceRequest): Promise<SearchFaceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchFaceWithOptions(request, runtime);
  }

  async addDeviceWithOptions(request: AddDeviceRequest, runtime: $Util.RuntimeOptions): Promise<AddDeviceResponse> {
    Util.validateModel(request);
    return $tea.cast<AddDeviceResponse>(await this.doRequest("AddDevice", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new AddDeviceResponse({}));
  }

  async addDevice(request: AddDeviceRequest): Promise<AddDeviceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addDeviceWithOptions(request, runtime);
  }

  async createCorpWithOptions(request: CreateCorpRequest, runtime: $Util.RuntimeOptions): Promise<CreateCorpResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateCorpResponse>(await this.doRequest("CreateCorp", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new CreateCorpResponse({}));
  }

  async createCorp(request: CreateCorpRequest): Promise<CreateCorpResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createCorpWithOptions(request, runtime);
  }

  async deleteDeviceWithOptions(request: DeleteDeviceRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDeviceResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDeviceResponse>(await this.doRequest("DeleteDevice", "HTTPS", "POST", "2020-05-15", "AK", null, $tea.toMap(request), runtime), new DeleteDeviceResponse({}));
  }

  async deleteDevice(request: DeleteDeviceRequest): Promise<DeleteDeviceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDeviceWithOptions(request, runtime);
  }

  getEndpoint(productId: string, regionId: string, endpointRule: string, network: string, suffix: string, endpointMap: {[key: string ]: string}, endpoint: string): string {
    if (!Util.empty(endpoint)) {
      return endpoint;
    }

    if (!Util.isUnset(endpointMap) && !Util.empty(endpointMap[regionId])) {
      return endpointMap[regionId];
    }

    return EndpointUtil.getEndpointRules(productId, regionId, endpointRule, network, suffix);
  }

}
