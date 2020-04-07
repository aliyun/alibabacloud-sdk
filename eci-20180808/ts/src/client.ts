// This file is auto-generated, don't edit it
import RPCUtil from '@alicloud/rpc-util';
import Util, * as $Util from '@alicloud/tea-util';
import Credential, * as $Credential from '@alicloud/credentials';
import { Readable } from 'stream';
import * as $tea from '@alicloud/tea-typescript';

export class Config extends $tea.Model {
  accessKeyId?: string;
  accessKeySecret?: string;
  type?: string;
  securityToken?: string;
  endpoint: string;
  protocol?: string;
  regionId: string;
  readTimeout?: number;
  connectTimeout?: number;
  httpProxy?: string;
  httpsProxy?: string;
  socks5Proxy?: string;
  socks5NetWork?: string;
  noProxy?: string;
  userAgent?: string;
  maxIdleConns?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'accessKeyId',
      accessKeySecret: 'accessKeySecret',
      type: 'type',
      securityToken: 'securityToken',
      endpoint: 'endpoint',
      protocol: 'protocol',
      regionId: 'regionId',
      readTimeout: 'read timeout',
      connectTimeout: 'connect timeout',
      httpProxy: 'http proxy',
      httpsProxy: 'https proxy',
      socks5Proxy: 'socks5 proxy',
      socks5NetWork: 'socks5 NetWork',
      noProxy: 'no proxy',
      userAgent: 'userAgent',
      maxIdleConns: 'maxIdleConns',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      accessKeySecret: 'string',
      type: 'string',
      securityToken: 'string',
      endpoint: 'string',
      protocol: 'string',
      regionId: 'string',
      readTimeout: 'number',
      connectTimeout: 'number',
      httpProxy: 'string',
      httpsProxy: 'string',
      socks5Proxy: 'string',
      socks5NetWork: 'string',
      noProxy: 'string',
      userAgent: 'string',
      maxIdleConns: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponse extends $tea.Model {
  requestId: string;
  regions: DescribeRegionsResponseRegions[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regions: 'Regions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regions: { 'type': 'array', 'itemType': DescribeRegionsResponseRegions },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeImageCachesRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  imageCacheId?: string;
  imageCacheName?: string;
  snapshotId?: string;
  image?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      imageCacheId: 'ImageCacheId',
      imageCacheName: 'ImageCacheName',
      snapshotId: 'SnapshotId',
      image: 'Image',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      imageCacheId: 'string',
      imageCacheName: 'string',
      snapshotId: 'string',
      image: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeImageCachesResponse extends $tea.Model {
  requestId: string;
  imageCaches: DescribeImageCachesResponseImageCaches[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      imageCaches: 'ImageCaches',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      imageCaches: { 'type': 'array', 'itemType': DescribeImageCachesResponseImageCaches },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageCacheRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  imageCacheId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      imageCacheId: 'ImageCacheId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      imageCacheId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageCacheResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateImageCacheRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  zoneId?: string;
  securityGroupId: string;
  VSwitchId: string;
  imageCacheName: string;
  imageRegistryCredential?: CreateImageCacheRequestImageRegistryCredential[];
  eipInstanceId?: string;
  resourceGroupId?: string;
  clientToken?: string;
  image: string[];
  imageCacheSize?: number;
  retentionDays?: number;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      securityGroupId: 'SecurityGroupId',
      VSwitchId: 'VSwitchId',
      imageCacheName: 'ImageCacheName',
      imageRegistryCredential: 'ImageRegistryCredential',
      eipInstanceId: 'EipInstanceId',
      resourceGroupId: 'ResourceGroupId',
      clientToken: 'ClientToken',
      image: 'Image',
      imageCacheSize: 'ImageCacheSize',
      retentionDays: 'RetentionDays',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      zoneId: 'string',
      securityGroupId: 'string',
      VSwitchId: 'string',
      imageCacheName: 'string',
      imageRegistryCredential: { 'type': 'array', 'itemType': CreateImageCacheRequestImageRegistryCredential },
      eipInstanceId: 'string',
      resourceGroupId: 'string',
      clientToken: 'string',
      image: { 'type': 'array', 'itemType': 'string' },
      imageCacheSize: 'number',
      retentionDays: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateImageCacheResponse extends $tea.Model {
  requestId: string;
  imageCacheId: string;
  containerGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      imageCacheId: 'ImageCacheId',
      containerGroupId: 'ContainerGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      imageCacheId: 'string',
      containerGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  containerGroupIds: string;
  resourceGroupId?: string;
  metricType?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      containerGroupIds: 'ContainerGroupIds',
      resourceGroupId: 'ResourceGroupId',
      metricType: 'MetricType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      containerGroupIds: 'string',
      resourceGroupId: 'string',
      metricType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponse extends $tea.Model {
  requestId: string;
  monitorDatas: DescribeMultiContainerGroupMetricResponseMonitorDatas[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      monitorDatas: 'MonitorDatas',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      monitorDatas: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatas },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  containerGroupId: string;
  startTime?: string;
  endTime?: string;
  period?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      containerGroupId: 'string',
      startTime: 'string',
      endTime: 'string',
      period: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricResponse extends $tea.Model {
  requestId: string;
  containerGroupId: string;
  records: DescribeContainerGroupMetricResponseRecords[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      containerGroupId: 'ContainerGroupId',
      records: 'Records',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      containerGroupId: 'string',
      records: { 'type': 'array', 'itemType': DescribeContainerGroupMetricResponseRecords },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupByTemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  template: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      template: 'Template',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      template: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupByTemplateResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupFromTemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  template: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      template: 'Template',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      template: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupFromTemplateResponse extends $tea.Model {
  requestId: string;
  containerGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      containerGroupId: 'ContainerGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      containerGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId?: string;
  containerGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      containerGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponse extends $tea.Model {
  requestId: string;
  template: ExportContainerGroupTemplateResponseTemplate;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      template: 'Template',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      template: ExportContainerGroupTemplateResponseTemplate,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestartContainerGroupRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  containerGroupId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      containerGroupId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestartContainerGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  containerGroupId: string;
  restartPolicy?: string;
  tag?: UpdateContainerGroupRequestTag[];
  volume?: UpdateContainerGroupRequestVolume[];
  dnsConfig: UpdateContainerGroupRequestDnsConfig;
  container?: UpdateContainerGroupRequestContainer[];
  initContainer?: UpdateContainerGroupRequestInitContainer[];
  imageRegistryCredential?: UpdateContainerGroupRequestImageRegistryCredential[];
  clientToken?: string;
  cpu?: number;
  memory?: number;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      restartPolicy: 'RestartPolicy',
      tag: 'Tag',
      volume: 'Volume',
      dnsConfig: 'DnsConfig',
      container: 'Container',
      initContainer: 'InitContainer',
      imageRegistryCredential: 'ImageRegistryCredential',
      clientToken: 'ClientToken',
      cpu: 'Cpu',
      memory: 'Memory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      containerGroupId: 'string',
      restartPolicy: 'string',
      tag: { 'type': 'array', 'itemType': UpdateContainerGroupRequestTag },
      volume: { 'type': 'array', 'itemType': UpdateContainerGroupRequestVolume },
      dnsConfig: UpdateContainerGroupRequestDnsConfig,
      container: { 'type': 'array', 'itemType': UpdateContainerGroupRequestContainer },
      initContainer: { 'type': 'array', 'itemType': UpdateContainerGroupRequestInitContainer },
      imageRegistryCredential: { 'type': 'array', 'itemType': UpdateContainerGroupRequestImageRegistryCredential },
      clientToken: 'string',
      cpu: 'number',
      memory: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  cpu: number;
  memory: number;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      cpu: 'Cpu',
      memory: 'Memory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      cpu: 'number',
      memory: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponse extends $tea.Model {
  requestId: string;
  priceInfo: DescribeContainerGroupPriceResponsePriceInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      priceInfo: 'PriceInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      priceInfo: DescribeContainerGroupPriceResponsePriceInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExecContainerCommandRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  containerGroupId: string;
  containerName: string;
  command: string;
  TTY?: boolean;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      containerName: 'ContainerName',
      command: 'Command',
      TTY: 'TTY',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      containerGroupId: 'string',
      containerName: 'string',
      command: 'string',
      TTY: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExecContainerCommandResponse extends $tea.Model {
  requestId: string;
  webSocketUri: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      webSocketUri: 'WebSocketUri',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      webSocketUri: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerLogRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  containerGroupId: string;
  containerName: string;
  startTime?: string;
  tail?: number;
  lastTime?: boolean;
  sinceSeconds?: number;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      containerName: 'ContainerName',
      startTime: 'StartTime',
      tail: 'Tail',
      lastTime: 'LastTime',
      sinceSeconds: 'SinceSeconds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      containerGroupId: 'string',
      containerName: 'string',
      startTime: 'string',
      tail: 'number',
      lastTime: 'boolean',
      sinceSeconds: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerLogResponse extends $tea.Model {
  requestId: string;
  containerName: string;
  content: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      containerName: 'ContainerName',
      content: 'Content',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      containerName: 'string',
      content: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  zoneId?: string;
  securityGroupId: string;
  VSwitchId: string;
  containerGroupName: string;
  restartPolicy?: string;
  tag?: CreateContainerGroupRequestTag[];
  imageRegistryCredential?: CreateContainerGroupRequestImageRegistryCredential[];
  container: CreateContainerGroupRequestContainer[];
  volume?: CreateContainerGroupRequestVolume[];
  eipInstanceId?: string;
  initContainer?: CreateContainerGroupRequestInitContainer[];
  dnsConfig: CreateContainerGroupRequestDnsConfig;
  cpu?: number;
  memory?: number;
  resourceGroupId?: string;
  dnsPolicy?: string;
  clientToken?: string;
  hostAliase?: CreateContainerGroupRequestHostAliase[];
  arn?: CreateContainerGroupRequestArn[];
  instanceType?: string;
  securityContext: CreateContainerGroupRequestSecurityContext;
  slsEnable?: boolean;
  imageSnapshotId?: string;
  ramRoleName?: string;
  ntpServer?: string[];
  terminationGracePeriodSeconds?: number;
  autoMatchImageCache?: boolean;
  ipv6AddressCount?: number;
  activeDeadlineSeconds?: number;
  spotStrategy?: string;
  spotPriceLimit?: number;
  VSwitchStrategy?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      securityGroupId: 'SecurityGroupId',
      VSwitchId: 'VSwitchId',
      containerGroupName: 'ContainerGroupName',
      restartPolicy: 'RestartPolicy',
      tag: 'Tag',
      imageRegistryCredential: 'ImageRegistryCredential',
      container: 'Container',
      volume: 'Volume',
      eipInstanceId: 'EipInstanceId',
      initContainer: 'InitContainer',
      dnsConfig: 'DnsConfig',
      cpu: 'Cpu',
      memory: 'Memory',
      resourceGroupId: 'ResourceGroupId',
      dnsPolicy: 'DnsPolicy',
      clientToken: 'ClientToken',
      hostAliase: 'HostAliase',
      arn: 'Arn',
      instanceType: 'InstanceType',
      securityContext: 'SecurityContext',
      slsEnable: 'SlsEnable',
      imageSnapshotId: 'ImageSnapshotId',
      ramRoleName: 'RamRoleName',
      ntpServer: 'NtpServer',
      terminationGracePeriodSeconds: 'TerminationGracePeriodSeconds',
      autoMatchImageCache: 'AutoMatchImageCache',
      ipv6AddressCount: 'Ipv6AddressCount',
      activeDeadlineSeconds: 'ActiveDeadlineSeconds',
      spotStrategy: 'SpotStrategy',
      spotPriceLimit: 'SpotPriceLimit',
      VSwitchStrategy: 'VSwitchStrategy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      zoneId: 'string',
      securityGroupId: 'string',
      VSwitchId: 'string',
      containerGroupName: 'string',
      restartPolicy: 'string',
      tag: { 'type': 'array', 'itemType': CreateContainerGroupRequestTag },
      imageRegistryCredential: { 'type': 'array', 'itemType': CreateContainerGroupRequestImageRegistryCredential },
      container: { 'type': 'array', 'itemType': CreateContainerGroupRequestContainer },
      volume: { 'type': 'array', 'itemType': CreateContainerGroupRequestVolume },
      eipInstanceId: 'string',
      initContainer: { 'type': 'array', 'itemType': CreateContainerGroupRequestInitContainer },
      dnsConfig: CreateContainerGroupRequestDnsConfig,
      cpu: 'number',
      memory: 'number',
      resourceGroupId: 'string',
      dnsPolicy: 'string',
      clientToken: 'string',
      hostAliase: { 'type': 'array', 'itemType': CreateContainerGroupRequestHostAliase },
      arn: { 'type': 'array', 'itemType': CreateContainerGroupRequestArn },
      instanceType: 'string',
      securityContext: CreateContainerGroupRequestSecurityContext,
      slsEnable: 'boolean',
      imageSnapshotId: 'string',
      ramRoleName: 'string',
      ntpServer: { 'type': 'array', 'itemType': 'string' },
      terminationGracePeriodSeconds: 'number',
      autoMatchImageCache: 'boolean',
      ipv6AddressCount: 'number',
      activeDeadlineSeconds: 'number',
      spotStrategy: 'string',
      spotPriceLimit: 'number',
      VSwitchStrategy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupResponse extends $tea.Model {
  requestId: string;
  containerGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      containerGroupId: 'ContainerGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      containerGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  zoneId?: string;
  VSwitchId?: string;
  nextToken?: string;
  limit?: number;
  tag?: DescribeContainerGroupsRequestTag[];
  containerGroupIds?: string;
  containerGroupName?: string;
  status?: string;
  resourceGroupId?: string;
  withEvent?: boolean;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      VSwitchId: 'VSwitchId',
      nextToken: 'NextToken',
      limit: 'Limit',
      tag: 'Tag',
      containerGroupIds: 'ContainerGroupIds',
      containerGroupName: 'ContainerGroupName',
      status: 'Status',
      resourceGroupId: 'ResourceGroupId',
      withEvent: 'WithEvent',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      zoneId: 'string',
      VSwitchId: 'string',
      nextToken: 'string',
      limit: 'number',
      tag: { 'type': 'array', 'itemType': DescribeContainerGroupsRequestTag },
      containerGroupIds: 'string',
      containerGroupName: 'string',
      status: 'string',
      resourceGroupId: 'string',
      withEvent: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  totalCount: number;
  containerGroups: DescribeContainerGroupsResponseContainerGroups[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      totalCount: 'TotalCount',
      containerGroups: 'ContainerGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      totalCount: 'number',
      containerGroups: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroups },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteContainerGroupRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  regionId: string;
  containerGroupId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      regionId: 'string',
      containerGroupId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteContainerGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegions extends $tea.Model {
  regionId: string;
  regionEndpoint: string;
  zones: string[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      regionEndpoint: 'RegionEndpoint',
      zones: 'Zones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      regionEndpoint: 'string',
      zones: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeImageCachesResponseImageCachesEvents extends $tea.Model {
  count: number;
  type: string;
  name: string;
  message: string;
  firstTimestamp: string;
  lastTimestamp: string;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      type: 'Type',
      name: 'Name',
      message: 'Message',
      firstTimestamp: 'FirstTimestamp',
      lastTimestamp: 'LastTimestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      type: 'string',
      name: 'string',
      message: 'string',
      firstTimestamp: 'string',
      lastTimestamp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeImageCachesResponseImageCaches extends $tea.Model {
  containerGroupId: string;
  imageCacheId: string;
  imageCacheName: string;
  snapshotId: string;
  progress: string;
  status: string;
  expireDateTime: string;
  creationTime: string;
  events: DescribeImageCachesResponseImageCachesEvents[];
  images: string[];
  static names(): { [key: string]: string } {
    return {
      containerGroupId: 'ContainerGroupId',
      imageCacheId: 'ImageCacheId',
      imageCacheName: 'ImageCacheName',
      snapshotId: 'SnapshotId',
      progress: 'Progress',
      status: 'Status',
      expireDateTime: 'ExpireDateTime',
      creationTime: 'CreationTime',
      events: 'Events',
      images: 'Images',
    };
  }

  static types(): { [key: string]: any } {
    return {
      containerGroupId: 'string',
      imageCacheId: 'string',
      imageCacheName: 'string',
      snapshotId: 'string',
      progress: 'string',
      status: 'string',
      expireDateTime: 'string',
      creationTime: 'string',
      events: { 'type': 'array', 'itemType': DescribeImageCachesResponseImageCachesEvents },
      images: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateImageCacheRequestImageRegistryCredential extends $tea.Model {
  server: string;
  userName: string;
  password: string;
  static names(): { [key: string]: string } {
    return {
      server: 'Server',
      userName: 'UserName',
      password: 'Password',
    };
  }

  static types(): { [key: string]: any } {
    return {
      server: 'string',
      userName: 'string',
      password: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU extends $tea.Model {
  limit: number;
  load: number;
  usageCoreNanoSeconds: number;
  usageNanoCores: number;
  static names(): { [key: string]: string } {
    return {
      limit: 'Limit',
      load: 'Load',
      usageCoreNanoSeconds: 'UsageCoreNanoSeconds',
      usageNanoCores: 'UsageNanoCores',
    };
  }

  static types(): { [key: string]: any } {
    return {
      limit: 'number',
      load: 'number',
      usageCoreNanoSeconds: 'number',
      usageNanoCores: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory extends $tea.Model {
  availableBytes: number;
  usageBytes: number;
  cache: number;
  workingSet: number;
  rss: number;
  static names(): { [key: string]: string } {
    return {
      availableBytes: 'AvailableBytes',
      usageBytes: 'UsageBytes',
      cache: 'Cache',
      workingSet: 'WorkingSet',
      rss: 'Rss',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableBytes: 'number',
      usageBytes: 'number',
      cache: 'number',
      workingSet: 'number',
      rss: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers extends $tea.Model {
  name: string;
  CPU: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU;
  memory: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      CPU: 'CPU',
      memory: 'Memory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      CPU: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU,
      memory: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU extends $tea.Model {
  limit: number;
  load: number;
  usageCoreNanoSeconds: number;
  usageNanoCores: number;
  static names(): { [key: string]: string } {
    return {
      limit: 'Limit',
      load: 'Load',
      usageCoreNanoSeconds: 'UsageCoreNanoSeconds',
      usageNanoCores: 'UsageNanoCores',
    };
  }

  static types(): { [key: string]: any } {
    return {
      limit: 'number',
      load: 'number',
      usageCoreNanoSeconds: 'number',
      usageNanoCores: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory extends $tea.Model {
  availableBytes: number;
  usageBytes: number;
  cache: number;
  workingSet: number;
  rss: number;
  static names(): { [key: string]: string } {
    return {
      availableBytes: 'AvailableBytes',
      usageBytes: 'UsageBytes',
      cache: 'Cache',
      workingSet: 'WorkingSet',
      rss: 'Rss',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableBytes: 'number',
      usageBytes: 'number',
      cache: 'number',
      workingSet: 'number',
      rss: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces extends $tea.Model {
  txBytes: number;
  rxBytes: number;
  txErrors: number;
  rxErrors: number;
  name: string;
  static names(): { [key: string]: string } {
    return {
      txBytes: 'TxBytes',
      rxBytes: 'RxBytes',
      txErrors: 'TxErrors',
      rxErrors: 'RxErrors',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      txBytes: 'number',
      rxBytes: 'number',
      txErrors: 'number',
      rxErrors: 'number',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork extends $tea.Model {
  interfaces: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces[];
  static names(): { [key: string]: string } {
    return {
      interfaces: 'Interfaces',
    };
  }

  static types(): { [key: string]: any } {
    return {
      interfaces: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasRecords extends $tea.Model {
  timestamp: string;
  containers: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers[];
  CPU: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU;
  memory: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory;
  network: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork;
  static names(): { [key: string]: string } {
    return {
      timestamp: 'Timestamp',
      containers: 'Containers',
      CPU: 'CPU',
      memory: 'Memory',
      network: 'Network',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timestamp: 'string',
      containers: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers },
      CPU: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU,
      memory: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory,
      network: DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats extends $tea.Model {
  device: string;
  type: string;
  limit: number;
  usage: number;
  baseUsage: number;
  available: number;
  hasInodes: boolean;
  inodes: number;
  inodesFree: number;
  readsCompleted: number;
  readsMerged: number;
  sectorsRead: number;
  readTime: number;
  writesCompleted: number;
  writesMerged: number;
  sectorsWritten: number;
  writeTime: number;
  ioInProgress: number;
  ioTime: number;
  weightedIoTime: number;
  static names(): { [key: string]: string } {
    return {
      device: 'Device',
      type: 'Type',
      limit: 'Limit',
      usage: 'Usage',
      baseUsage: 'BaseUsage',
      available: 'Available',
      hasInodes: 'HasInodes',
      inodes: 'Inodes',
      inodesFree: 'InodesFree',
      readsCompleted: 'ReadsCompleted',
      readsMerged: 'ReadsMerged',
      sectorsRead: 'SectorsRead',
      readTime: 'ReadTime',
      writesCompleted: 'WritesCompleted',
      writesMerged: 'WritesMerged',
      sectorsWritten: 'SectorsWritten',
      writeTime: 'WriteTime',
      ioInProgress: 'IoInProgress',
      ioTime: 'IoTime',
      weightedIoTime: 'WeightedIoTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      device: 'string',
      type: 'string',
      limit: 'number',
      usage: 'number',
      baseUsage: 'number',
      available: 'number',
      hasInodes: 'boolean',
      inodes: 'number',
      inodesFree: 'number',
      readsCompleted: 'number',
      readsMerged: 'number',
      sectorsRead: 'number',
      readTime: 'number',
      writesCompleted: 'number',
      writesMerged: 'number',
      sectorsWritten: 'number',
      writeTime: 'number',
      ioInProgress: 'number',
      ioTime: 'number',
      weightedIoTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats extends $tea.Model {
  id: string;
  make: string;
  model: string;
  memoryTotal: number;
  memoryUsed: number;
  dutyCycle: number;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      make: 'Make',
      model: 'Model',
      memoryTotal: 'MemoryTotal',
      memoryUsed: 'MemoryUsed',
      dutyCycle: 'DutyCycle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      make: 'string',
      model: 'string',
      memoryTotal: 'number',
      memoryUsed: 'number',
      dutyCycle: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage extends $tea.Model {
  total: number;
  user: number;
  system: number;
  perCpuUsages: number[];
  static names(): { [key: string]: string } {
    return {
      total: 'Total',
      user: 'User',
      system: 'System',
      perCpuUsages: 'PerCpuUsages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      total: 'number',
      user: 'number',
      system: 'number',
      perCpuUsages: { 'type': 'array', 'itemType': 'long' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS extends $tea.Model {
  periods: number;
  throttledPeriods: number;
  throttledTime: number;
  static names(): { [key: string]: string } {
    return {
      periods: 'Periods',
      throttledPeriods: 'ThrottledPeriods',
      throttledTime: 'ThrottledTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      periods: 'number',
      throttledPeriods: 'number',
      throttledTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats extends $tea.Model {
  loadAverage: number;
  cpuUsage: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage;
  cpuCFS: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS;
  static names(): { [key: string]: string } {
    return {
      loadAverage: 'LoadAverage',
      cpuUsage: 'CpuUsage',
      cpuCFS: 'CpuCFS',
    };
  }

  static types(): { [key: string]: any } {
    return {
      loadAverage: 'number',
      cpuUsage: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage,
      cpuCFS: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes extends $tea.Model {
  device: string;
  major: number;
  minor: number;
  stats: string;
  static names(): { [key: string]: string } {
    return {
      device: 'Device',
      major: 'Major',
      minor: 'Minor',
      stats: 'Stats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      device: 'string',
      major: 'number',
      minor: 'number',
      stats: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced extends $tea.Model {
  device: string;
  major: number;
  minor: number;
  stats: string;
  static names(): { [key: string]: string } {
    return {
      device: 'Device',
      major: 'Major',
      minor: 'Minor',
      stats: 'Stats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      device: 'string',
      major: 'number',
      minor: 'number',
      stats: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued extends $tea.Model {
  device: string;
  major: number;
  minor: number;
  stats: string;
  static names(): { [key: string]: string } {
    return {
      device: 'Device',
      major: 'Major',
      minor: 'Minor',
      stats: 'Stats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      device: 'string',
      major: 'number',
      minor: 'number',
      stats: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors extends $tea.Model {
  device: string;
  major: number;
  minor: number;
  stats: string;
  static names(): { [key: string]: string } {
    return {
      device: 'Device',
      major: 'Major',
      minor: 'Minor',
      stats: 'Stats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      device: 'string',
      major: 'number',
      minor: 'number',
      stats: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime extends $tea.Model {
  device: string;
  major: number;
  minor: number;
  stats: string;
  static names(): { [key: string]: string } {
    return {
      device: 'Device',
      major: 'Major',
      minor: 'Minor',
      stats: 'Stats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      device: 'string',
      major: 'number',
      minor: 'number',
      stats: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime extends $tea.Model {
  device: string;
  major: number;
  minor: number;
  stats: string;
  static names(): { [key: string]: string } {
    return {
      device: 'Device',
      major: 'Major',
      minor: 'Minor',
      stats: 'Stats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      device: 'string',
      major: 'number',
      minor: 'number',
      stats: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged extends $tea.Model {
  device: string;
  major: number;
  minor: number;
  stats: string;
  static names(): { [key: string]: string } {
    return {
      device: 'Device',
      major: 'Major',
      minor: 'Minor',
      stats: 'Stats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      device: 'string',
      major: 'number',
      minor: 'number',
      stats: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime extends $tea.Model {
  device: string;
  major: number;
  minor: number;
  stats: string;
  static names(): { [key: string]: string } {
    return {
      device: 'Device',
      major: 'Major',
      minor: 'Minor',
      stats: 'Stats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      device: 'string',
      major: 'number',
      minor: 'number',
      stats: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats extends $tea.Model {
  ioServiceBytes: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes[];
  ioServiced: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced[];
  ioQueued: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued[];
  sectors: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors[];
  ioServiceTime: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime[];
  ioWaitTime: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime[];
  ioMerged: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged[];
  ioTime: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime[];
  static names(): { [key: string]: string } {
    return {
      ioServiceBytes: 'IoServiceBytes',
      ioServiced: 'IoServiced',
      ioQueued: 'IoQueued',
      sectors: 'Sectors',
      ioServiceTime: 'IoServiceTime',
      ioWaitTime: 'IoWaitTime',
      ioMerged: 'IoMerged',
      ioTime: 'IoTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ioServiceBytes: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes },
      ioServiced: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced },
      ioQueued: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued },
      sectors: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors },
      ioServiceTime: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime },
      ioWaitTime: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime },
      ioMerged: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged },
      ioTime: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData extends $tea.Model {
  pgFault: number;
  pgmajFault: number;
  static names(): { [key: string]: string } {
    return {
      pgFault: 'PgFault',
      pgmajFault: 'PgmajFault',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pgFault: 'number',
      pgmajFault: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData extends $tea.Model {
  pgFault: number;
  pgmajFault: number;
  static names(): { [key: string]: string } {
    return {
      pgFault: 'PgFault',
      pgmajFault: 'PgmajFault',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pgFault: 'number',
      pgmajFault: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats extends $tea.Model {
  usage: number;
  maxUsage: number;
  cache: number;
  rss: number;
  swap: number;
  workingSet: number;
  failCnt: number;
  containerData: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData;
  hierarchicalData: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData;
  static names(): { [key: string]: string } {
    return {
      usage: 'Usage',
      maxUsage: 'MaxUsage',
      cache: 'Cache',
      rss: 'Rss',
      swap: 'Swap',
      workingSet: 'WorkingSet',
      failCnt: 'FailCnt',
      containerData: 'ContainerData',
      hierarchicalData: 'HierarchicalData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      usage: 'number',
      maxUsage: 'number',
      cache: 'number',
      rss: 'number',
      swap: 'number',
      workingSet: 'number',
      failCnt: 'number',
      containerData: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData,
      hierarchicalData: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats extends $tea.Model {
  name: string;
  rxBytes: number;
  rxPackets: number;
  rxErrors: number;
  rxDropped: number;
  txBytes: number;
  txPackets: number;
  txDropped: number;
  txErrors: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      rxBytes: 'RxBytes',
      rxPackets: 'RxPackets',
      rxErrors: 'RxErrors',
      rxDropped: 'RxDropped',
      txBytes: 'TxBytes',
      txPackets: 'TxPackets',
      txDropped: 'TxDropped',
      txErrors: 'TxErrors',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      rxBytes: 'number',
      rxPackets: 'number',
      rxErrors: 'number',
      rxDropped: 'number',
      txBytes: 'number',
      txPackets: 'number',
      txDropped: 'number',
      txErrors: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp extends $tea.Model {
  established: number;
  synSent: number;
  synRecv: number;
  finWait1: number;
  finWait2: number;
  timeWait: number;
  close: number;
  closeWait: number;
  lastAck: number;
  listen: number;
  closing: number;
  static names(): { [key: string]: string } {
    return {
      established: 'Established',
      synSent: 'SynSent',
      synRecv: 'SynRecv',
      finWait1: 'FinWait1',
      finWait2: 'FinWait2',
      timeWait: 'TimeWait',
      close: 'Close',
      closeWait: 'CloseWait',
      lastAck: 'LastAck',
      listen: 'Listen',
      closing: 'Closing',
    };
  }

  static types(): { [key: string]: any } {
    return {
      established: 'number',
      synSent: 'number',
      synRecv: 'number',
      finWait1: 'number',
      finWait2: 'number',
      timeWait: 'number',
      close: 'number',
      closeWait: 'number',
      lastAck: 'number',
      listen: 'number',
      closing: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 extends $tea.Model {
  established: number;
  synSent: number;
  synRecv: number;
  finWait1: number;
  finWait2: number;
  timeWait: number;
  close: number;
  closeWait: number;
  lastAck: number;
  listen: number;
  closing: number;
  static names(): { [key: string]: string } {
    return {
      established: 'Established',
      synSent: 'SynSent',
      synRecv: 'SynRecv',
      finWait1: 'FinWait1',
      finWait2: 'FinWait2',
      timeWait: 'TimeWait',
      close: 'Close',
      closeWait: 'CloseWait',
      lastAck: 'LastAck',
      listen: 'Listen',
      closing: 'Closing',
    };
  }

  static types(): { [key: string]: any } {
    return {
      established: 'number',
      synSent: 'number',
      synRecv: 'number',
      finWait1: 'number',
      finWait2: 'number',
      timeWait: 'number',
      close: 'number',
      closeWait: 'number',
      lastAck: 'number',
      listen: 'number',
      closing: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp extends $tea.Model {
  listen: number;
  dropped: number;
  rxQueued: number;
  txQueued: number;
  static names(): { [key: string]: string } {
    return {
      listen: 'Listen',
      dropped: 'Dropped',
      rxQueued: 'RxQueued',
      txQueued: 'TxQueued',
    };
  }

  static types(): { [key: string]: any } {
    return {
      listen: 'number',
      dropped: 'number',
      rxQueued: 'number',
      txQueued: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6 extends $tea.Model {
  listen: number;
  dropped: number;
  rxQueued: number;
  txQueued: number;
  static names(): { [key: string]: string } {
    return {
      listen: 'Listen',
      dropped: 'Dropped',
      rxQueued: 'RxQueued',
      txQueued: 'TxQueued',
    };
  }

  static types(): { [key: string]: any } {
    return {
      listen: 'number',
      dropped: 'number',
      rxQueued: 'number',
      txQueued: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats extends $tea.Model {
  name: string;
  rxBytes: number;
  rxPackets: number;
  rxErrors: number;
  rxDropped: number;
  txBytes: number;
  txPackets: number;
  txDropped: number;
  txErrors: number;
  interfaceStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats[];
  tcp: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp;
  tcp6: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6;
  udp: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp;
  udp6: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      rxBytes: 'RxBytes',
      rxPackets: 'RxPackets',
      rxErrors: 'RxErrors',
      rxDropped: 'RxDropped',
      txBytes: 'TxBytes',
      txPackets: 'TxPackets',
      txDropped: 'TxDropped',
      txErrors: 'TxErrors',
      interfaceStats: 'InterfaceStats',
      tcp: 'Tcp',
      tcp6: 'Tcp6',
      udp: 'Udp',
      udp6: 'Udp6',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      rxBytes: 'number',
      rxPackets: 'number',
      rxErrors: 'number',
      rxDropped: 'number',
      txBytes: 'number',
      txPackets: 'number',
      txDropped: 'number',
      txErrors: 'number',
      interfaceStats: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats },
      tcp: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp,
      tcp6: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6,
      udp: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp,
      udp6: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats extends $tea.Model {
  nrSleeping: number;
  nrRunning: number;
  nrStopped: number;
  nrUninterruptible: number;
  nrIoWait: number;
  static names(): { [key: string]: string } {
    return {
      nrSleeping: 'NrSleeping',
      nrRunning: 'NrRunning',
      nrStopped: 'NrStopped',
      nrUninterruptible: 'NrUninterruptible',
      nrIoWait: 'NrIoWait',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nrSleeping: 'number',
      nrRunning: 'number',
      nrStopped: 'number',
      nrUninterruptible: 'number',
      nrIoWait: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats extends $tea.Model {
  timestamp: string;
  fsStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats[];
  acceleratorStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats[];
  cpuStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats;
  diskIoStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats;
  memoryStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats;
  networkStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats;
  taskStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats;
  static names(): { [key: string]: string } {
    return {
      timestamp: 'Timestamp',
      fsStats: 'FsStats',
      acceleratorStats: 'AcceleratorStats',
      cpuStats: 'CpuStats',
      diskIoStats: 'DiskIoStats',
      memoryStats: 'MemoryStats',
      networkStats: 'NetworkStats',
      taskStats: 'TaskStats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timestamp: 'string',
      fsStats: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats },
      acceleratorStats: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats },
      cpuStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats,
      diskIoStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats,
      memoryStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats,
      networkStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats,
      taskStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu extends $tea.Model {
  limit: number;
  maxLimit: number;
  mask: string;
  quota: number;
  period: number;
  static names(): { [key: string]: string } {
    return {
      limit: 'Limit',
      maxLimit: 'MaxLimit',
      mask: 'Mask',
      quota: 'Quota',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      limit: 'number',
      maxLimit: 'number',
      mask: 'string',
      quota: 'number',
      period: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory extends $tea.Model {
  limit: number;
  reservation: number;
  swapLimit: number;
  static names(): { [key: string]: string } {
    return {
      limit: 'Limit',
      reservation: 'Reservation',
      swapLimit: 'SwapLimit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      limit: 'number',
      reservation: 'number',
      swapLimit: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec extends $tea.Model {
  creationTime: string;
  hasCpu: boolean;
  hasMemory: boolean;
  hasNetwork: boolean;
  hasFilesystem: boolean;
  hasDiskIo: boolean;
  hasCustomMetrics: boolean;
  image: string;
  labels: string;
  envs: string;
  containerCpu: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu;
  containerMemory: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory;
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      hasCpu: 'HasCpu',
      hasMemory: 'HasMemory',
      hasNetwork: 'HasNetwork',
      hasFilesystem: 'HasFilesystem',
      hasDiskIo: 'HasDiskIo',
      hasCustomMetrics: 'HasCustomMetrics',
      image: 'Image',
      labels: 'Labels',
      envs: 'Envs',
      containerCpu: 'ContainerCpu',
      containerMemory: 'ContainerMemory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      hasCpu: 'boolean',
      hasMemory: 'boolean',
      hasNetwork: 'boolean',
      hasFilesystem: 'boolean',
      hasDiskIo: 'boolean',
      hasCustomMetrics: 'boolean',
      image: 'string',
      labels: 'string',
      envs: 'string',
      containerCpu: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu,
      containerMemory: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos extends $tea.Model {
  id: string;
  name: string;
  namespace: string;
  labels: string;
  containerStats: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats[];
  containerSpec: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec;
  aliases: string[];
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      name: 'Name',
      namespace: 'Namespace',
      labels: 'Labels',
      containerStats: 'ContainerStats',
      containerSpec: 'ContainerSpec',
      aliases: 'Aliases',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      name: 'string',
      namespace: 'string',
      labels: 'string',
      containerStats: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats },
      containerSpec: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec,
      aliases: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMultiContainerGroupMetricResponseMonitorDatas extends $tea.Model {
  containerGroupId: string;
  records: DescribeMultiContainerGroupMetricResponseMonitorDatasRecords[];
  containerInfos: DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos[];
  static names(): { [key: string]: string } {
    return {
      containerGroupId: 'ContainerGroupId',
      records: 'Records',
      containerInfos: 'ContainerInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      containerGroupId: 'string',
      records: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasRecords },
      containerInfos: { 'type': 'array', 'itemType': DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricResponseRecordsContainersCPU extends $tea.Model {
  usageNanoCores: number;
  usageCoreNanoSeconds: number;
  load: number;
  limit: number;
  static names(): { [key: string]: string } {
    return {
      usageNanoCores: 'UsageNanoCores',
      usageCoreNanoSeconds: 'UsageCoreNanoSeconds',
      load: 'Load',
      limit: 'Limit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      usageNanoCores: 'number',
      usageCoreNanoSeconds: 'number',
      load: 'number',
      limit: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricResponseRecordsContainersMemory extends $tea.Model {
  availableBytes: number;
  usageBytes: number;
  cache: number;
  workingSet: number;
  rss: number;
  static names(): { [key: string]: string } {
    return {
      availableBytes: 'AvailableBytes',
      usageBytes: 'UsageBytes',
      cache: 'Cache',
      workingSet: 'WorkingSet',
      rss: 'Rss',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableBytes: 'number',
      usageBytes: 'number',
      cache: 'number',
      workingSet: 'number',
      rss: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricResponseRecordsContainers extends $tea.Model {
  name: string;
  CPU: DescribeContainerGroupMetricResponseRecordsContainersCPU;
  memory: DescribeContainerGroupMetricResponseRecordsContainersMemory;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      CPU: 'CPU',
      memory: 'Memory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      CPU: DescribeContainerGroupMetricResponseRecordsContainersCPU,
      memory: DescribeContainerGroupMetricResponseRecordsContainersMemory,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricResponseRecordsCPU extends $tea.Model {
  usageNanoCores: number;
  usageCoreNanoSeconds: number;
  load: number;
  limit: number;
  static names(): { [key: string]: string } {
    return {
      usageNanoCores: 'UsageNanoCores',
      usageCoreNanoSeconds: 'UsageCoreNanoSeconds',
      load: 'Load',
      limit: 'Limit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      usageNanoCores: 'number',
      usageCoreNanoSeconds: 'number',
      load: 'number',
      limit: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricResponseRecordsMemory extends $tea.Model {
  availableBytes: number;
  usageBytes: number;
  cache: number;
  workingSet: number;
  rss: number;
  static names(): { [key: string]: string } {
    return {
      availableBytes: 'AvailableBytes',
      usageBytes: 'UsageBytes',
      cache: 'Cache',
      workingSet: 'WorkingSet',
      rss: 'Rss',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableBytes: 'number',
      usageBytes: 'number',
      cache: 'number',
      workingSet: 'number',
      rss: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricResponseRecordsNetworkInterfaces extends $tea.Model {
  txBytes: number;
  rxBytes: number;
  txErrors: number;
  rxErrors: number;
  name: string;
  static names(): { [key: string]: string } {
    return {
      txBytes: 'TxBytes',
      rxBytes: 'RxBytes',
      txErrors: 'TxErrors',
      rxErrors: 'RxErrors',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      txBytes: 'number',
      rxBytes: 'number',
      txErrors: 'number',
      rxErrors: 'number',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricResponseRecordsNetwork extends $tea.Model {
  interfaces: DescribeContainerGroupMetricResponseRecordsNetworkInterfaces[];
  static names(): { [key: string]: string } {
    return {
      interfaces: 'Interfaces',
    };
  }

  static types(): { [key: string]: any } {
    return {
      interfaces: { 'type': 'array', 'itemType': DescribeContainerGroupMetricResponseRecordsNetworkInterfaces },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupMetricResponseRecords extends $tea.Model {
  timestamp: string;
  containers: DescribeContainerGroupMetricResponseRecordsContainers[];
  CPU: DescribeContainerGroupMetricResponseRecordsCPU;
  memory: DescribeContainerGroupMetricResponseRecordsMemory;
  network: DescribeContainerGroupMetricResponseRecordsNetwork;
  static names(): { [key: string]: string } {
    return {
      timestamp: 'Timestamp',
      containers: 'Containers',
      CPU: 'CPU',
      memory: 'Memory',
      network: 'Network',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timestamp: 'string',
      containers: { 'type': 'array', 'itemType': DescribeContainerGroupMetricResponseRecordsContainers },
      CPU: DescribeContainerGroupMetricResponseRecordsCPU,
      memory: DescribeContainerGroupMetricResponseRecordsMemory,
      network: DescribeContainerGroupMetricResponseRecordsNetwork,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateTags extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateResources extends $tea.Model {
  cpu: number;
  memory: number;
  static names(): { [key: string]: string } {
    return {
      cpu: 'Cpu',
      memory: 'Memory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cpu: 'number',
      memory: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems extends $tea.Model {
  mode: number;
  path: string;
  content: string;
  static names(): { [key: string]: string } {
    return {
      mode: 'Mode',
      path: 'Path',
      content: 'Content',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mode: 'number',
      path: 'string',
      content: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile extends $tea.Model {
  defaultMode: number;
  items: ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems[];
  static names(): { [key: string]: string } {
    return {
      defaultMode: 'DefaultMode',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      defaultMode: 'number',
      items: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir extends $tea.Model {
  sizeLimit: string;
  static names(): { [key: string]: string } {
    return {
      sizeLimit: 'SizeLimit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sizeLimit: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs extends $tea.Model {
  server: string;
  path: string;
  readOnly: boolean;
  static names(): { [key: string]: string } {
    return {
      server: 'Server',
      path: 'Path',
      readOnly: 'ReadOnly',
    };
  }

  static types(): { [key: string]: any } {
    return {
      server: 'string',
      path: 'string',
      readOnly: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecVolumes extends $tea.Model {
  name: string;
  configFile: ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile;
  emptyDir: ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir;
  nfs: ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      configFile: 'ConfigFile',
      emptyDir: 'EmptyDir',
      nfs: 'Nfs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      configFile: ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile,
      emptyDir: ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir,
      nfs: ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef extends $tea.Model {
  fieldPath: string;
  static names(): { [key: string]: string } {
    return {
      fieldPath: 'FieldPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldPath: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom extends $tea.Model {
  fieldRef: ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef;
  static names(): { [key: string]: string } {
    return {
      fieldRef: 'FieldRef',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldRef: ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv extends $tea.Model {
  name: string;
  value: string;
  valueFrom: ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
      valueFrom: 'ValueFrom',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
      valueFrom: ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts extends $tea.Model {
  name: string;
  protocol: string;
  containerPort: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      protocol: 'Protocol',
      containerPort: 'ContainerPort',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      protocol: 'string',
      containerPort: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts extends $tea.Model {
  name: string;
  subPath: string;
  mountPath: string;
  readOnly: boolean;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      subPath: 'SubPath',
      mountPath: 'MountPath',
      readOnly: 'ReadOnly',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      subPath: 'string',
      mountPath: 'string',
      readOnly: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls extends $tea.Model {
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext extends $tea.Model {
  sysctls: ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls[];
  static names(): { [key: string]: string } {
    return {
      sysctls: 'Sysctls',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sysctls: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources extends $tea.Model {
  cpu: number;
  memory: number;
  static names(): { [key: string]: string } {
    return {
      cpu: 'Cpu',
      memory: 'Memory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cpu: 'number',
      memory: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecInitContainers extends $tea.Model {
  name: string;
  image: string;
  imagePullPolicy: string;
  stdin: boolean;
  stdinOnce: boolean;
  tty: boolean;
  workingDir: string;
  env: ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv[];
  ports: ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts[];
  volumeMounts: ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts[];
  securityContext: ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext;
  resources: ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources;
  command: string[];
  args: string[];
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      image: 'Image',
      imagePullPolicy: 'ImagePullPolicy',
      stdin: 'Stdin',
      stdinOnce: 'StdinOnce',
      tty: 'Tty',
      workingDir: 'WorkingDir',
      env: 'Env',
      ports: 'Ports',
      volumeMounts: 'VolumeMounts',
      securityContext: 'SecurityContext',
      resources: 'Resources',
      command: 'Command',
      args: 'Args',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      image: 'string',
      imagePullPolicy: 'string',
      stdin: 'boolean',
      stdinOnce: 'boolean',
      tty: 'boolean',
      workingDir: 'string',
      env: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv },
      ports: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts },
      volumeMounts: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts },
      securityContext: ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext,
      resources: ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources,
      command: { 'type': 'array', 'itemType': 'string' },
      args: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef extends $tea.Model {
  fieldPath: string;
  static names(): { [key: string]: string } {
    return {
      fieldPath: 'FieldPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldPath: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom extends $tea.Model {
  fieldRef: ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef;
  static names(): { [key: string]: string } {
    return {
      fieldRef: 'FieldRef',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldRef: ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersEnv extends $tea.Model {
  name: string;
  value: string;
  valueFrom: ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
      valueFrom: 'ValueFrom',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
      valueFrom: ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersPorts extends $tea.Model {
  name: string;
  protocol: string;
  containerPort: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      protocol: 'Protocol',
      containerPort: 'ContainerPort',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      protocol: 'string',
      containerPort: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts extends $tea.Model {
  name: string;
  subPath: string;
  mountPath: string;
  readOnly: boolean;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      subPath: 'SubPath',
      mountPath: 'MountPath',
      readOnly: 'ReadOnly',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      subPath: 'string',
      mountPath: 'string',
      readOnly: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls extends $tea.Model {
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext extends $tea.Model {
  sysctls: ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls[];
  static names(): { [key: string]: string } {
    return {
      sysctls: 'Sysctls',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sysctls: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersResources extends $tea.Model {
  cpu: number;
  memory: number;
  static names(): { [key: string]: string } {
    return {
      cpu: 'Cpu',
      memory: 'Memory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cpu: 'number',
      memory: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec extends $tea.Model {
  command: string[];
  static names(): { [key: string]: string } {
    return {
      command: 'Command',
    };
  }

  static types(): { [key: string]: any } {
    return {
      command: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket extends $tea.Model {
  port: number;
  static names(): { [key: string]: string } {
    return {
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet extends $tea.Model {
  scheme: string;
  path: string;
  port: number;
  static names(): { [key: string]: string } {
    return {
      scheme: 'Scheme',
      path: 'Path',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      scheme: 'string',
      path: 'string',
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe extends $tea.Model {
  initialDelaySeconds: number;
  periodSeconds: number;
  successThreshold: number;
  failureThreshold: number;
  timeoutSeconds: number;
  exec: ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec;
  tcpSocket: ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket;
  httpGet: ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet;
  static names(): { [key: string]: string } {
    return {
      initialDelaySeconds: 'InitialDelaySeconds',
      periodSeconds: 'PeriodSeconds',
      successThreshold: 'SuccessThreshold',
      failureThreshold: 'FailureThreshold',
      timeoutSeconds: 'TimeoutSeconds',
      exec: 'Exec',
      tcpSocket: 'TcpSocket',
      httpGet: 'HttpGet',
    };
  }

  static types(): { [key: string]: any } {
    return {
      initialDelaySeconds: 'number',
      periodSeconds: 'number',
      successThreshold: 'number',
      failureThreshold: 'number',
      timeoutSeconds: 'number',
      exec: ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec,
      tcpSocket: ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket,
      httpGet: ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec extends $tea.Model {
  command: string[];
  static names(): { [key: string]: string } {
    return {
      command: 'Command',
    };
  }

  static types(): { [key: string]: any } {
    return {
      command: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket extends $tea.Model {
  port: number;
  static names(): { [key: string]: string } {
    return {
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet extends $tea.Model {
  scheme: string;
  path: string;
  port: number;
  static names(): { [key: string]: string } {
    return {
      scheme: 'Scheme',
      path: 'Path',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      scheme: 'string',
      path: 'string',
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe extends $tea.Model {
  initialDelaySeconds: number;
  periodSeconds: number;
  successThreshold: number;
  failureThreshold: number;
  timeoutSeconds: number;
  exec: ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec;
  tcpSocket: ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket;
  httpGet: ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet;
  static names(): { [key: string]: string } {
    return {
      initialDelaySeconds: 'InitialDelaySeconds',
      periodSeconds: 'PeriodSeconds',
      successThreshold: 'SuccessThreshold',
      failureThreshold: 'FailureThreshold',
      timeoutSeconds: 'TimeoutSeconds',
      exec: 'Exec',
      tcpSocket: 'TcpSocket',
      httpGet: 'HttpGet',
    };
  }

  static types(): { [key: string]: any } {
    return {
      initialDelaySeconds: 'number',
      periodSeconds: 'number',
      successThreshold: 'number',
      failureThreshold: 'number',
      timeoutSeconds: 'number',
      exec: ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec,
      tcpSocket: ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket,
      httpGet: ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecContainers extends $tea.Model {
  name: string;
  image: string;
  imagePullPolicy: string;
  stdin: boolean;
  stdinOnce: boolean;
  tty: boolean;
  workingDir: string;
  env: ExportContainerGroupTemplateResponseTemplateSpecContainersEnv[];
  ports: ExportContainerGroupTemplateResponseTemplateSpecContainersPorts[];
  volumeMounts: ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts[];
  securityContext: ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext;
  resources: ExportContainerGroupTemplateResponseTemplateSpecContainersResources;
  readinessProbe: ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe;
  livenessProbe: ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe;
  command: string[];
  args: string[];
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      image: 'Image',
      imagePullPolicy: 'ImagePullPolicy',
      stdin: 'Stdin',
      stdinOnce: 'StdinOnce',
      tty: 'Tty',
      workingDir: 'WorkingDir',
      env: 'Env',
      ports: 'Ports',
      volumeMounts: 'VolumeMounts',
      securityContext: 'SecurityContext',
      resources: 'Resources',
      readinessProbe: 'ReadinessProbe',
      livenessProbe: 'LivenessProbe',
      command: 'Command',
      args: 'Args',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      image: 'string',
      imagePullPolicy: 'string',
      stdin: 'boolean',
      stdinOnce: 'boolean',
      tty: 'boolean',
      workingDir: 'string',
      env: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecContainersEnv },
      ports: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecContainersPorts },
      volumeMounts: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts },
      securityContext: ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext,
      resources: ExportContainerGroupTemplateResponseTemplateSpecContainersResources,
      readinessProbe: ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe,
      livenessProbe: ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe,
      command: { 'type': 'array', 'itemType': 'string' },
      args: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions extends $tea.Model {
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecDnsConfig extends $tea.Model {
  options: ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions[];
  nameServers: string[];
  searches: string[];
  static names(): { [key: string]: string } {
    return {
      options: 'Options',
      nameServers: 'NameServers',
      searches: 'Searches',
    };
  }

  static types(): { [key: string]: any } {
    return {
      options: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions },
      nameServers: { 'type': 'array', 'itemType': 'string' },
      searches: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls extends $tea.Model {
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpecSecurityContext extends $tea.Model {
  sysctls: ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls[];
  static names(): { [key: string]: string } {
    return {
      sysctls: 'Sysctls',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sysctls: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplateSpec extends $tea.Model {
  restartPolicy: string;
  dnsPolicy: string;
  volumes: ExportContainerGroupTemplateResponseTemplateSpecVolumes[];
  initContainers: ExportContainerGroupTemplateResponseTemplateSpecInitContainers[];
  containers: ExportContainerGroupTemplateResponseTemplateSpecContainers[];
  dnsConfig: ExportContainerGroupTemplateResponseTemplateSpecDnsConfig;
  securityContext: ExportContainerGroupTemplateResponseTemplateSpecSecurityContext;
  static names(): { [key: string]: string } {
    return {
      restartPolicy: 'RestartPolicy',
      dnsPolicy: 'DnsPolicy',
      volumes: 'Volumes',
      initContainers: 'InitContainers',
      containers: 'Containers',
      dnsConfig: 'DnsConfig',
      securityContext: 'SecurityContext',
    };
  }

  static types(): { [key: string]: any } {
    return {
      restartPolicy: 'string',
      dnsPolicy: 'string',
      volumes: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecVolumes },
      initContainers: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecInitContainers },
      containers: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateSpecContainers },
      dnsConfig: ExportContainerGroupTemplateResponseTemplateSpecDnsConfig,
      securityContext: ExportContainerGroupTemplateResponseTemplateSpecSecurityContext,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExportContainerGroupTemplateResponseTemplate extends $tea.Model {
  regionId: string;
  zoneId: string;
  securityGroupId: string;
  VSwitchId: string;
  resourceGroupId: string;
  eipInstanceId: string;
  containerGroupName: string;
  instanceType: string;
  tags: ExportContainerGroupTemplateResponseTemplateTags[];
  resources: ExportContainerGroupTemplateResponseTemplateResources;
  spec: ExportContainerGroupTemplateResponseTemplateSpec;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      securityGroupId: 'SecurityGroupId',
      VSwitchId: 'VSwitchId',
      resourceGroupId: 'ResourceGroupId',
      eipInstanceId: 'EipInstanceId',
      containerGroupName: 'ContainerGroupName',
      instanceType: 'InstanceType',
      tags: 'Tags',
      resources: 'Resources',
      spec: 'Spec',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      zoneId: 'string',
      securityGroupId: 'string',
      VSwitchId: 'string',
      resourceGroupId: 'string',
      eipInstanceId: 'string',
      containerGroupName: 'string',
      instanceType: 'string',
      tags: { 'type': 'array', 'itemType': ExportContainerGroupTemplateResponseTemplateTags },
      resources: ExportContainerGroupTemplateResponseTemplateResources,
      spec: ExportContainerGroupTemplateResponseTemplateSpec,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestVolumeNFSVolume extends $tea.Model {
  server?: string;
  path?: string;
  readOnly?: boolean;
  static names(): { [key: string]: string } {
    return {
      server: 'Server',
      path: 'Path',
      readOnly: 'ReadOnly',
    };
  }

  static types(): { [key: string]: any } {
    return {
      server: 'string',
      path: 'string',
      readOnly: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath extends $tea.Model {
  content?: string;
  path?: string;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      path: 'Path',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
      path: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestVolumeConfigFileVolume extends $tea.Model {
  configFileToPath: UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath[];
  static names(): { [key: string]: string } {
    return {
      configFileToPath: 'ConfigFileToPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      configFileToPath: { 'type': 'array', 'itemType': UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestVolumeEmptyDirVolume extends $tea.Model {
  medium?: string;
  static names(): { [key: string]: string } {
    return {
      medium: 'Medium',
    };
  }

  static types(): { [key: string]: any } {
    return {
      medium: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestVolume extends $tea.Model {
  name?: string;
  type?: string;
  NFSVolume: UpdateContainerGroupRequestVolumeNFSVolume;
  configFileVolume: UpdateContainerGroupRequestVolumeConfigFileVolume;
  emptyDirVolume: UpdateContainerGroupRequestVolumeEmptyDirVolume;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      type: 'Type',
      NFSVolume: 'NFSVolume',
      configFileVolume: 'ConfigFileVolume',
      emptyDirVolume: 'EmptyDirVolume',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      type: 'string',
      NFSVolume: UpdateContainerGroupRequestVolumeNFSVolume,
      configFileVolume: UpdateContainerGroupRequestVolumeConfigFileVolume,
      emptyDirVolume: UpdateContainerGroupRequestVolumeEmptyDirVolume,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestDnsConfigOption extends $tea.Model {
  name?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestDnsConfig extends $tea.Model {
  nameServer?: string[];
  search?: string[];
  option?: UpdateContainerGroupRequestDnsConfigOption[];
  static names(): { [key: string]: string } {
    return {
      nameServer: 'NameServer',
      search: 'Search',
      option: 'Option',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nameServer: { 'type': 'array', 'itemType': 'string' },
      search: { 'type': 'array', 'itemType': 'string' },
      option: { 'type': 'array', 'itemType': UpdateContainerGroupRequestDnsConfigOption },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerEnvironmentVar extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerPort extends $tea.Model {
  protocol?: string;
  port?: number;
  static names(): { [key: string]: string } {
    return {
      protocol: 'Protocol',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      protocol: 'string',
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerVolumeMount extends $tea.Model {
  name?: string;
  mountPath?: string;
  subPath?: string;
  readOnly?: boolean;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      mountPath: 'MountPath',
      subPath: 'SubPath',
      readOnly: 'ReadOnly',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      mountPath: 'string',
      subPath: 'string',
      readOnly: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerReadinessProbeTcpSocket extends $tea.Model {
  port?: number;
  static names(): { [key: string]: string } {
    return {
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerReadinessProbeExec extends $tea.Model {
  command: string[];
  static names(): { [key: string]: string } {
    return {
      command: 'Command',
    };
  }

  static types(): { [key: string]: any } {
    return {
      command: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerReadinessProbeHttpGet extends $tea.Model {
  path?: string;
  port?: number;
  scheme?: string;
  static names(): { [key: string]: string } {
    return {
      path: 'Path',
      port: 'Port',
      scheme: 'Scheme',
    };
  }

  static types(): { [key: string]: any } {
    return {
      path: 'string',
      port: 'number',
      scheme: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerReadinessProbe extends $tea.Model {
  tcpSocket: UpdateContainerGroupRequestContainerReadinessProbeTcpSocket;
  exec: UpdateContainerGroupRequestContainerReadinessProbeExec;
  httpGet: UpdateContainerGroupRequestContainerReadinessProbeHttpGet;
  initialDelaySeconds?: number;
  periodSeconds?: number;
  successThreshold?: number;
  failureThreshold?: number;
  timeoutSeconds?: number;
  static names(): { [key: string]: string } {
    return {
      tcpSocket: 'TcpSocket',
      exec: 'Exec',
      httpGet: 'HttpGet',
      initialDelaySeconds: 'InitialDelaySeconds',
      periodSeconds: 'PeriodSeconds',
      successThreshold: 'SuccessThreshold',
      failureThreshold: 'FailureThreshold',
      timeoutSeconds: 'TimeoutSeconds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tcpSocket: UpdateContainerGroupRequestContainerReadinessProbeTcpSocket,
      exec: UpdateContainerGroupRequestContainerReadinessProbeExec,
      httpGet: UpdateContainerGroupRequestContainerReadinessProbeHttpGet,
      initialDelaySeconds: 'number',
      periodSeconds: 'number',
      successThreshold: 'number',
      failureThreshold: 'number',
      timeoutSeconds: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerLivenessProbeTcpSocket extends $tea.Model {
  port?: number;
  static names(): { [key: string]: string } {
    return {
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerLivenessProbeExec extends $tea.Model {
  command: string[];
  static names(): { [key: string]: string } {
    return {
      command: 'Command',
    };
  }

  static types(): { [key: string]: any } {
    return {
      command: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerLivenessProbeHttpGet extends $tea.Model {
  path?: string;
  port?: number;
  scheme?: string;
  static names(): { [key: string]: string } {
    return {
      path: 'Path',
      port: 'Port',
      scheme: 'Scheme',
    };
  }

  static types(): { [key: string]: any } {
    return {
      path: 'string',
      port: 'number',
      scheme: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerLivenessProbe extends $tea.Model {
  tcpSocket: UpdateContainerGroupRequestContainerLivenessProbeTcpSocket;
  exec: UpdateContainerGroupRequestContainerLivenessProbeExec;
  httpGet: UpdateContainerGroupRequestContainerLivenessProbeHttpGet;
  initialDelaySeconds?: number;
  periodSeconds?: number;
  successThreshold?: number;
  failureThreshold: number;
  timeoutSeconds?: number;
  static names(): { [key: string]: string } {
    return {
      tcpSocket: 'TcpSocket',
      exec: 'Exec',
      httpGet: 'HttpGet',
      initialDelaySeconds: 'InitialDelaySeconds',
      periodSeconds: 'PeriodSeconds',
      successThreshold: 'SuccessThreshold',
      failureThreshold: 'FailureThreshold',
      timeoutSeconds: 'TimeoutSeconds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tcpSocket: UpdateContainerGroupRequestContainerLivenessProbeTcpSocket,
      exec: UpdateContainerGroupRequestContainerLivenessProbeExec,
      httpGet: UpdateContainerGroupRequestContainerLivenessProbeHttpGet,
      initialDelaySeconds: 'number',
      periodSeconds: 'number',
      successThreshold: 'number',
      failureThreshold: 'number',
      timeoutSeconds: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerSecurityContextCapability extends $tea.Model {
  add: string[];
  static names(): { [key: string]: string } {
    return {
      add: 'Add',
    };
  }

  static types(): { [key: string]: any } {
    return {
      add: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainerSecurityContext extends $tea.Model {
  readOnlyRootFilesystem?: boolean;
  runAsUser?: number;
  capability: UpdateContainerGroupRequestContainerSecurityContextCapability;
  static names(): { [key: string]: string } {
    return {
      readOnlyRootFilesystem: 'ReadOnlyRootFilesystem',
      runAsUser: 'RunAsUser',
      capability: 'Capability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readOnlyRootFilesystem: 'boolean',
      runAsUser: 'number',
      capability: UpdateContainerGroupRequestContainerSecurityContextCapability,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestContainer extends $tea.Model {
  name?: string;
  image?: string;
  cpu?: number;
  memory?: number;
  workingDir?: string;
  imagePullPolicy?: string;
  stdin?: boolean;
  stdinOnce?: boolean;
  tty?: boolean;
  command: string[];
  arg: string[];
  environmentVar: UpdateContainerGroupRequestContainerEnvironmentVar[];
  port: UpdateContainerGroupRequestContainerPort[];
  volumeMount: UpdateContainerGroupRequestContainerVolumeMount[];
  readinessProbe: UpdateContainerGroupRequestContainerReadinessProbe;
  livenessProbe: UpdateContainerGroupRequestContainerLivenessProbe;
  securityContext: UpdateContainerGroupRequestContainerSecurityContext;
  gpu?: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      image: 'Image',
      cpu: 'Cpu',
      memory: 'Memory',
      workingDir: 'WorkingDir',
      imagePullPolicy: 'ImagePullPolicy',
      stdin: 'Stdin',
      stdinOnce: 'StdinOnce',
      tty: 'Tty',
      command: 'Command',
      arg: 'Arg',
      environmentVar: 'EnvironmentVar',
      port: 'Port',
      volumeMount: 'VolumeMount',
      readinessProbe: 'ReadinessProbe',
      livenessProbe: 'LivenessProbe',
      securityContext: 'SecurityContext',
      gpu: 'Gpu',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      image: 'string',
      cpu: 'number',
      memory: 'number',
      workingDir: 'string',
      imagePullPolicy: 'string',
      stdin: 'boolean',
      stdinOnce: 'boolean',
      tty: 'boolean',
      command: { 'type': 'array', 'itemType': 'string' },
      arg: { 'type': 'array', 'itemType': 'string' },
      environmentVar: { 'type': 'array', 'itemType': UpdateContainerGroupRequestContainerEnvironmentVar },
      port: { 'type': 'array', 'itemType': UpdateContainerGroupRequestContainerPort },
      volumeMount: { 'type': 'array', 'itemType': UpdateContainerGroupRequestContainerVolumeMount },
      readinessProbe: UpdateContainerGroupRequestContainerReadinessProbe,
      livenessProbe: UpdateContainerGroupRequestContainerLivenessProbe,
      securityContext: UpdateContainerGroupRequestContainerSecurityContext,
      gpu: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestInitContainerEnvironmentVar extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestInitContainerPort extends $tea.Model {
  port?: number;
  protocol: string;
  static names(): { [key: string]: string } {
    return {
      port: 'Port',
      protocol: 'Protocol',
    };
  }

  static types(): { [key: string]: any } {
    return {
      port: 'number',
      protocol: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestInitContainerVolumeMount extends $tea.Model {
  name?: string;
  mountPath?: string;
  subPath?: string;
  readOnly?: boolean;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      mountPath: 'MountPath',
      subPath: 'SubPath',
      readOnly: 'ReadOnly',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      mountPath: 'string',
      subPath: 'string',
      readOnly: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestInitContainerSecurityContextCapability extends $tea.Model {
  add: string[];
  static names(): { [key: string]: string } {
    return {
      add: 'Add',
    };
  }

  static types(): { [key: string]: any } {
    return {
      add: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestInitContainerSecurityContext extends $tea.Model {
  readOnlyRootFilesystem?: boolean;
  runAsUser?: number;
  capability: UpdateContainerGroupRequestInitContainerSecurityContextCapability;
  static names(): { [key: string]: string } {
    return {
      readOnlyRootFilesystem: 'ReadOnlyRootFilesystem',
      runAsUser: 'RunAsUser',
      capability: 'Capability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readOnlyRootFilesystem: 'boolean',
      runAsUser: 'number',
      capability: UpdateContainerGroupRequestInitContainerSecurityContextCapability,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestInitContainer extends $tea.Model {
  name?: string;
  image?: string;
  cpu?: number;
  memory?: number;
  workingDir?: string;
  imagePullPolicy?: string;
  stdin?: boolean;
  stdinOnce?: boolean;
  tty?: boolean;
  command: string[];
  arg: string[];
  environmentVar: UpdateContainerGroupRequestInitContainerEnvironmentVar[];
  port: UpdateContainerGroupRequestInitContainerPort[];
  volumeMount: UpdateContainerGroupRequestInitContainerVolumeMount[];
  securityContext: UpdateContainerGroupRequestInitContainerSecurityContext;
  gpu?: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      image: 'Image',
      cpu: 'Cpu',
      memory: 'Memory',
      workingDir: 'WorkingDir',
      imagePullPolicy: 'ImagePullPolicy',
      stdin: 'Stdin',
      stdinOnce: 'StdinOnce',
      tty: 'Tty',
      command: 'Command',
      arg: 'Arg',
      environmentVar: 'EnvironmentVar',
      port: 'Port',
      volumeMount: 'VolumeMount',
      securityContext: 'SecurityContext',
      gpu: 'Gpu',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      image: 'string',
      cpu: 'number',
      memory: 'number',
      workingDir: 'string',
      imagePullPolicy: 'string',
      stdin: 'boolean',
      stdinOnce: 'boolean',
      tty: 'boolean',
      command: { 'type': 'array', 'itemType': 'string' },
      arg: { 'type': 'array', 'itemType': 'string' },
      environmentVar: { 'type': 'array', 'itemType': UpdateContainerGroupRequestInitContainerEnvironmentVar },
      port: { 'type': 'array', 'itemType': UpdateContainerGroupRequestInitContainerPort },
      volumeMount: { 'type': 'array', 'itemType': UpdateContainerGroupRequestInitContainerVolumeMount },
      securityContext: UpdateContainerGroupRequestInitContainerSecurityContext,
      gpu: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateContainerGroupRequestImageRegistryCredential extends $tea.Model {
  server?: string;
  userName?: string;
  password?: string;
  static names(): { [key: string]: string } {
    return {
      server: 'Server',
      userName: 'UserName',
      password: 'Password',
    };
  }

  static types(): { [key: string]: any } {
    return {
      server: 'string',
      userName: 'string',
      password: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponsePriceInfoRulesRule extends $tea.Model {
  ruleId: number;
  description: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'number',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponsePriceInfoRules extends $tea.Model {
  rule: DescribeContainerGroupPriceResponsePriceInfoRulesRule[];
  static names(): { [key: string]: string } {
    return {
      rule: 'Rule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rule: { 'type': 'array', 'itemType': DescribeContainerGroupPriceResponsePriceInfoRulesRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule extends $tea.Model {
  ruleId: number;
  description: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'number',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules extends $tea.Model {
  rule: DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule[];
  static names(): { [key: string]: string } {
    return {
      rule: 'Rule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rule: { 'type': 'array', 'itemType': DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo extends $tea.Model {
  resource: string;
  originalPrice: number;
  discountPrice: number;
  tradePrice: number;
  rules: DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules;
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
      originalPrice: 'OriginalPrice',
      discountPrice: 'DiscountPrice',
      tradePrice: 'TradePrice',
      rules: 'Rules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: 'string',
      originalPrice: 'number',
      discountPrice: 'number',
      tradePrice: 'number',
      rules: DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos extends $tea.Model {
  detailInfo: DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo[];
  static names(): { [key: string]: string } {
    return {
      detailInfo: 'DetailInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      detailInfo: { 'type': 'array', 'itemType': DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponsePriceInfoPrice extends $tea.Model {
  originalPrice: number;
  discountPrice: number;
  tradePrice: number;
  currency: string;
  detailInfos: DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos;
  static names(): { [key: string]: string } {
    return {
      originalPrice: 'OriginalPrice',
      discountPrice: 'DiscountPrice',
      tradePrice: 'TradePrice',
      currency: 'Currency',
      detailInfos: 'DetailInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      originalPrice: 'number',
      discountPrice: 'number',
      tradePrice: 'number',
      currency: 'string',
      detailInfos: DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponsePriceInfo extends $tea.Model {
  rules: DescribeContainerGroupPriceResponsePriceInfoRules;
  price: DescribeContainerGroupPriceResponsePriceInfoPrice;
  static names(): { [key: string]: string } {
    return {
      rules: 'Rules',
      price: 'Price',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rules: DescribeContainerGroupPriceResponsePriceInfoRules,
      price: DescribeContainerGroupPriceResponsePriceInfoPrice,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestTag extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestImageRegistryCredential extends $tea.Model {
  server: string;
  userName: string;
  password: string;
  static names(): { [key: string]: string } {
    return {
      server: 'Server',
      userName: 'UserName',
      password: 'Password',
    };
  }

  static types(): { [key: string]: any } {
    return {
      server: 'string',
      userName: 'string',
      password: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerVolumeMount extends $tea.Model {
  mountPath: string;
  readOnly: boolean;
  name?: string;
  subPath?: string;
  static names(): { [key: string]: string } {
    return {
      mountPath: 'MountPath',
      readOnly: 'ReadOnly',
      name: 'Name',
      subPath: 'SubPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mountPath: 'string',
      readOnly: 'boolean',
      name: 'string',
      subPath: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerPort extends $tea.Model {
  protocol: string;
  port: number;
  static names(): { [key: string]: string } {
    return {
      protocol: 'Protocol',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      protocol: 'string',
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerEnvironmentVarFieldRef extends $tea.Model {
  fieldPath?: string;
  static names(): { [key: string]: string } {
    return {
      fieldPath: 'FieldPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldPath: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerEnvironmentVar extends $tea.Model {
  key?: string;
  value?: string;
  fieldRef: CreateContainerGroupRequestContainerEnvironmentVarFieldRef;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
      fieldRef: 'FieldRef',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
      fieldRef: CreateContainerGroupRequestContainerEnvironmentVarFieldRef,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerReadinessProbeHttpGet extends $tea.Model {
  path?: string;
  port?: number;
  scheme?: string;
  static names(): { [key: string]: string } {
    return {
      path: 'Path',
      port: 'Port',
      scheme: 'Scheme',
    };
  }

  static types(): { [key: string]: any } {
    return {
      path: 'string',
      port: 'number',
      scheme: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerReadinessProbeExec extends $tea.Model {
  command: string[];
  static names(): { [key: string]: string } {
    return {
      command: 'Command',
    };
  }

  static types(): { [key: string]: any } {
    return {
      command: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerReadinessProbeTcpSocket extends $tea.Model {
  port?: number;
  static names(): { [key: string]: string } {
    return {
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerReadinessProbe extends $tea.Model {
  httpGet: CreateContainerGroupRequestContainerReadinessProbeHttpGet;
  initialDelaySeconds?: number;
  periodSeconds?: number;
  successThreshold?: number;
  failureThreshold?: number;
  timeoutSeconds?: number;
  exec: CreateContainerGroupRequestContainerReadinessProbeExec;
  tcpSocket: CreateContainerGroupRequestContainerReadinessProbeTcpSocket;
  static names(): { [key: string]: string } {
    return {
      httpGet: 'HttpGet',
      initialDelaySeconds: 'InitialDelaySeconds',
      periodSeconds: 'PeriodSeconds',
      successThreshold: 'SuccessThreshold',
      failureThreshold: 'FailureThreshold',
      timeoutSeconds: 'TimeoutSeconds',
      exec: 'Exec',
      tcpSocket: 'TcpSocket',
    };
  }

  static types(): { [key: string]: any } {
    return {
      httpGet: CreateContainerGroupRequestContainerReadinessProbeHttpGet,
      initialDelaySeconds: 'number',
      periodSeconds: 'number',
      successThreshold: 'number',
      failureThreshold: 'number',
      timeoutSeconds: 'number',
      exec: CreateContainerGroupRequestContainerReadinessProbeExec,
      tcpSocket: CreateContainerGroupRequestContainerReadinessProbeTcpSocket,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerLivenessProbeHttpGet extends $tea.Model {
  path?: string;
  port?: number;
  scheme?: string;
  static names(): { [key: string]: string } {
    return {
      path: 'Path',
      port: 'Port',
      scheme: 'Scheme',
    };
  }

  static types(): { [key: string]: any } {
    return {
      path: 'string',
      port: 'number',
      scheme: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerLivenessProbeExec extends $tea.Model {
  command: string[];
  static names(): { [key: string]: string } {
    return {
      command: 'Command',
    };
  }

  static types(): { [key: string]: any } {
    return {
      command: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerLivenessProbeTcpSocket extends $tea.Model {
  port?: number;
  static names(): { [key: string]: string } {
    return {
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerLivenessProbe extends $tea.Model {
  httpGet: CreateContainerGroupRequestContainerLivenessProbeHttpGet;
  initialDelaySeconds?: number;
  periodSeconds?: number;
  successThreshold?: number;
  failureThreshold?: number;
  timeoutSeconds?: number;
  exec: CreateContainerGroupRequestContainerLivenessProbeExec;
  tcpSocket: CreateContainerGroupRequestContainerLivenessProbeTcpSocket;
  static names(): { [key: string]: string } {
    return {
      httpGet: 'HttpGet',
      initialDelaySeconds: 'InitialDelaySeconds',
      periodSeconds: 'PeriodSeconds',
      successThreshold: 'SuccessThreshold',
      failureThreshold: 'FailureThreshold',
      timeoutSeconds: 'TimeoutSeconds',
      exec: 'Exec',
      tcpSocket: 'TcpSocket',
    };
  }

  static types(): { [key: string]: any } {
    return {
      httpGet: CreateContainerGroupRequestContainerLivenessProbeHttpGet,
      initialDelaySeconds: 'number',
      periodSeconds: 'number',
      successThreshold: 'number',
      failureThreshold: 'number',
      timeoutSeconds: 'number',
      exec: CreateContainerGroupRequestContainerLivenessProbeExec,
      tcpSocket: CreateContainerGroupRequestContainerLivenessProbeTcpSocket,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerSecurityContextCapability extends $tea.Model {
  add: string[];
  static names(): { [key: string]: string } {
    return {
      add: 'Add',
    };
  }

  static types(): { [key: string]: any } {
    return {
      add: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerSecurityContext extends $tea.Model {
  capability: CreateContainerGroupRequestContainerSecurityContextCapability;
  readOnlyRootFilesystem?: boolean;
  runAsUser?: number;
  static names(): { [key: string]: string } {
    return {
      capability: 'Capability',
      readOnlyRootFilesystem: 'ReadOnlyRootFilesystem',
      runAsUser: 'RunAsUser',
    };
  }

  static types(): { [key: string]: any } {
    return {
      capability: CreateContainerGroupRequestContainerSecurityContextCapability,
      readOnlyRootFilesystem: 'boolean',
      runAsUser: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader extends $tea.Model {
  name?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader extends $tea.Model {
  name?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestContainer extends $tea.Model {
  image: string;
  name: string;
  cpu?: number;
  memory?: number;
  workingDir?: string;
  imagePullPolicy?: string;
  command?: string[];
  arg?: string[];
  volumeMount?: CreateContainerGroupRequestContainerVolumeMount[];
  port?: CreateContainerGroupRequestContainerPort[];
  environmentVar?: CreateContainerGroupRequestContainerEnvironmentVar[];
  readinessProbe: CreateContainerGroupRequestContainerReadinessProbe;
  livenessProbe: CreateContainerGroupRequestContainerLivenessProbe;
  securityContext: CreateContainerGroupRequestContainerSecurityContext;
  stdin?: boolean;
  stdinOnce?: boolean;
  tty?: boolean;
  gpu?: number;
  lifecyclePostStartHandlerHttpGetHost?: string;
  lifecyclePostStartHandlerHttpGetPort?: number;
  lifecyclePostStartHandlerHttpGetPath?: string;
  lifecyclePostStartHandlerHttpGetScheme?: string;
  lifecyclePostStartHandlerHttpGetHttpHeader?: CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader[];
  lifecyclePostStartHandlerExec?: string[];
  lifecyclePostStartHandlerTcpSocketHost?: string;
  lifecyclePostStartHandlerTcpSocketPort?: number;
  lifecyclePreStopHandlerHttpGetHost?: string;
  lifecyclePreStopHandlerHttpGetPort?: number;
  lifecyclePreStopHandlerHttpGetPath?: string;
  lifecyclePreStopHandlerHttpGetScheme?: string;
  lifecyclePreStopHandlerHttpGetHttpHeader?: CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader[];
  lifecyclePreStopHandlerExec?: string[];
  lifecyclePreStopHandlerTcpSocketHost?: string;
  lifecyclePreStopHandlerTcpSocketPort?: number;
  static names(): { [key: string]: string } {
    return {
      image: 'Image',
      name: 'Name',
      cpu: 'Cpu',
      memory: 'Memory',
      workingDir: 'WorkingDir',
      imagePullPolicy: 'ImagePullPolicy',
      command: 'Command',
      arg: 'Arg',
      volumeMount: 'VolumeMount',
      port: 'Port',
      environmentVar: 'EnvironmentVar',
      readinessProbe: 'ReadinessProbe',
      livenessProbe: 'LivenessProbe',
      securityContext: 'SecurityContext',
      stdin: 'Stdin',
      stdinOnce: 'StdinOnce',
      tty: 'Tty',
      gpu: 'Gpu',
      lifecyclePostStartHandlerHttpGetHost: 'LifecyclePostStartHandlerHttpGetHost',
      lifecyclePostStartHandlerHttpGetPort: 'LifecyclePostStartHandlerHttpGetPort',
      lifecyclePostStartHandlerHttpGetPath: 'LifecyclePostStartHandlerHttpGetPath',
      lifecyclePostStartHandlerHttpGetScheme: 'LifecyclePostStartHandlerHttpGetScheme',
      lifecyclePostStartHandlerHttpGetHttpHeader: 'LifecyclePostStartHandlerHttpGetHttpHeader',
      lifecyclePostStartHandlerExec: 'LifecyclePostStartHandlerExec',
      lifecyclePostStartHandlerTcpSocketHost: 'LifecyclePostStartHandlerTcpSocketHost',
      lifecyclePostStartHandlerTcpSocketPort: 'LifecyclePostStartHandlerTcpSocketPort',
      lifecyclePreStopHandlerHttpGetHost: 'LifecyclePreStopHandlerHttpGetHost',
      lifecyclePreStopHandlerHttpGetPort: 'LifecyclePreStopHandlerHttpGetPort',
      lifecyclePreStopHandlerHttpGetPath: 'LifecyclePreStopHandlerHttpGetPath',
      lifecyclePreStopHandlerHttpGetScheme: 'LifecyclePreStopHandlerHttpGetScheme',
      lifecyclePreStopHandlerHttpGetHttpHeader: 'LifecyclePreStopHandlerHttpGetHttpHeader',
      lifecyclePreStopHandlerExec: 'LifecyclePreStopHandlerExec',
      lifecyclePreStopHandlerTcpSocketHost: 'LifecyclePreStopHandlerTcpSocketHost',
      lifecyclePreStopHandlerTcpSocketPort: 'LifecyclePreStopHandlerTcpSocketPort',
    };
  }

  static types(): { [key: string]: any } {
    return {
      image: 'string',
      name: 'string',
      cpu: 'number',
      memory: 'number',
      workingDir: 'string',
      imagePullPolicy: 'string',
      command: { 'type': 'array', 'itemType': 'string' },
      arg: { 'type': 'array', 'itemType': 'string' },
      volumeMount: { 'type': 'array', 'itemType': CreateContainerGroupRequestContainerVolumeMount },
      port: { 'type': 'array', 'itemType': CreateContainerGroupRequestContainerPort },
      environmentVar: { 'type': 'array', 'itemType': CreateContainerGroupRequestContainerEnvironmentVar },
      readinessProbe: CreateContainerGroupRequestContainerReadinessProbe,
      livenessProbe: CreateContainerGroupRequestContainerLivenessProbe,
      securityContext: CreateContainerGroupRequestContainerSecurityContext,
      stdin: 'boolean',
      stdinOnce: 'boolean',
      tty: 'boolean',
      gpu: 'number',
      lifecyclePostStartHandlerHttpGetHost: 'string',
      lifecyclePostStartHandlerHttpGetPort: 'number',
      lifecyclePostStartHandlerHttpGetPath: 'string',
      lifecyclePostStartHandlerHttpGetScheme: 'string',
      lifecyclePostStartHandlerHttpGetHttpHeader: { 'type': 'array', 'itemType': CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader },
      lifecyclePostStartHandlerExec: { 'type': 'array', 'itemType': 'string' },
      lifecyclePostStartHandlerTcpSocketHost: 'string',
      lifecyclePostStartHandlerTcpSocketPort: 'number',
      lifecyclePreStopHandlerHttpGetHost: 'string',
      lifecyclePreStopHandlerHttpGetPort: 'number',
      lifecyclePreStopHandlerHttpGetPath: 'string',
      lifecyclePreStopHandlerHttpGetScheme: 'string',
      lifecyclePreStopHandlerHttpGetHttpHeader: { 'type': 'array', 'itemType': CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader },
      lifecyclePreStopHandlerExec: { 'type': 'array', 'itemType': 'string' },
      lifecyclePreStopHandlerTcpSocketHost: 'string',
      lifecyclePreStopHandlerTcpSocketPort: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestVolumeNFSVolume extends $tea.Model {
  server?: string;
  path?: string;
  readOnly?: boolean;
  static names(): { [key: string]: string } {
    return {
      server: 'Server',
      path: 'Path',
      readOnly: 'ReadOnly',
    };
  }

  static types(): { [key: string]: any } {
    return {
      server: 'string',
      path: 'string',
      readOnly: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath extends $tea.Model {
  content?: string;
  path?: string;
  mode?: number;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      path: 'Path',
      mode: 'Mode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
      path: 'string',
      mode: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestVolumeConfigFileVolume extends $tea.Model {
  configFileToPath: CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath[];
  defaultModel?: number;
  static names(): { [key: string]: string } {
    return {
      configFileToPath: 'ConfigFileToPath',
      defaultModel: 'DefaultModel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      configFileToPath: { 'type': 'array', 'itemType': CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath },
      defaultModel: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestVolumeEmptyDirVolume extends $tea.Model {
  medium?: string;
  static names(): { [key: string]: string } {
    return {
      medium: 'Medium',
    };
  }

  static types(): { [key: string]: any } {
    return {
      medium: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestVolumeDiskVolume extends $tea.Model {
  diskId?: string;
  fsType?: string;
  diskSize?: number;
  static names(): { [key: string]: string } {
    return {
      diskId: 'DiskId',
      fsType: 'FsType',
      diskSize: 'DiskSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      diskId: 'string',
      fsType: 'string',
      diskSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestVolumeFlexVolume extends $tea.Model {
  driver?: string;
  fsType?: string;
  options?: string;
  static names(): { [key: string]: string } {
    return {
      driver: 'Driver',
      fsType: 'FsType',
      options: 'Options',
    };
  }

  static types(): { [key: string]: any } {
    return {
      driver: 'string',
      fsType: 'string',
      options: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestVolumeHostPathVolume extends $tea.Model {
  type?: string;
  path?: string;
  static names(): { [key: string]: string } {
    return {
      type: 'Type',
      path: 'Path',
    };
  }

  static types(): { [key: string]: any } {
    return {
      type: 'string',
      path: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestVolume extends $tea.Model {
  name?: string;
  NFSVolume: CreateContainerGroupRequestVolumeNFSVolume;
  configFileVolume: CreateContainerGroupRequestVolumeConfigFileVolume;
  type?: string;
  emptyDirVolume: CreateContainerGroupRequestVolumeEmptyDirVolume;
  diskVolume: CreateContainerGroupRequestVolumeDiskVolume;
  flexVolume: CreateContainerGroupRequestVolumeFlexVolume;
  hostPathVolume: CreateContainerGroupRequestVolumeHostPathVolume;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      NFSVolume: 'NFSVolume',
      configFileVolume: 'ConfigFileVolume',
      type: 'Type',
      emptyDirVolume: 'EmptyDirVolume',
      diskVolume: 'DiskVolume',
      flexVolume: 'FlexVolume',
      hostPathVolume: 'HostPathVolume',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      NFSVolume: CreateContainerGroupRequestVolumeNFSVolume,
      configFileVolume: CreateContainerGroupRequestVolumeConfigFileVolume,
      type: 'string',
      emptyDirVolume: CreateContainerGroupRequestVolumeEmptyDirVolume,
      diskVolume: CreateContainerGroupRequestVolumeDiskVolume,
      flexVolume: CreateContainerGroupRequestVolumeFlexVolume,
      hostPathVolume: CreateContainerGroupRequestVolumeHostPathVolume,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestInitContainerVolumeMount extends $tea.Model {
  mountPath?: string;
  readOnly?: boolean;
  name?: string;
  subPath?: string;
  static names(): { [key: string]: string } {
    return {
      mountPath: 'MountPath',
      readOnly: 'ReadOnly',
      name: 'Name',
      subPath: 'SubPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mountPath: 'string',
      readOnly: 'boolean',
      name: 'string',
      subPath: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestInitContainerPort extends $tea.Model {
  protocol?: string;
  port?: number;
  static names(): { [key: string]: string } {
    return {
      protocol: 'Protocol',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      protocol: 'string',
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef extends $tea.Model {
  fieldPath?: string;
  static names(): { [key: string]: string } {
    return {
      fieldPath: 'FieldPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldPath: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestInitContainerEnvironmentVar extends $tea.Model {
  key?: string;
  value?: string;
  fieldRef: CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
      fieldRef: 'FieldRef',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
      fieldRef: CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestInitContainerSecurityContextCapability extends $tea.Model {
  add: string[];
  static names(): { [key: string]: string } {
    return {
      add: 'Add',
    };
  }

  static types(): { [key: string]: any } {
    return {
      add: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestInitContainerSecurityContext extends $tea.Model {
  capability: CreateContainerGroupRequestInitContainerSecurityContextCapability;
  readOnlyRootFilesystem?: boolean;
  runAsUser?: number;
  static names(): { [key: string]: string } {
    return {
      capability: 'Capability',
      readOnlyRootFilesystem: 'ReadOnlyRootFilesystem',
      runAsUser: 'RunAsUser',
    };
  }

  static types(): { [key: string]: any } {
    return {
      capability: CreateContainerGroupRequestInitContainerSecurityContextCapability,
      readOnlyRootFilesystem: 'boolean',
      runAsUser: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestInitContainer extends $tea.Model {
  name?: string;
  image?: string;
  cpu?: number;
  memory?: number;
  workingDir?: string;
  imagePullPolicy?: string;
  command: string[];
  arg: string[];
  volumeMount: CreateContainerGroupRequestInitContainerVolumeMount[];
  port: CreateContainerGroupRequestInitContainerPort[];
  environmentVar: CreateContainerGroupRequestInitContainerEnvironmentVar[];
  securityContext: CreateContainerGroupRequestInitContainerSecurityContext;
  gpu?: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      image: 'Image',
      cpu: 'Cpu',
      memory: 'Memory',
      workingDir: 'WorkingDir',
      imagePullPolicy: 'ImagePullPolicy',
      command: 'Command',
      arg: 'Arg',
      volumeMount: 'VolumeMount',
      port: 'Port',
      environmentVar: 'EnvironmentVar',
      securityContext: 'SecurityContext',
      gpu: 'Gpu',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      image: 'string',
      cpu: 'number',
      memory: 'number',
      workingDir: 'string',
      imagePullPolicy: 'string',
      command: { 'type': 'array', 'itemType': 'string' },
      arg: { 'type': 'array', 'itemType': 'string' },
      volumeMount: { 'type': 'array', 'itemType': CreateContainerGroupRequestInitContainerVolumeMount },
      port: { 'type': 'array', 'itemType': CreateContainerGroupRequestInitContainerPort },
      environmentVar: { 'type': 'array', 'itemType': CreateContainerGroupRequestInitContainerEnvironmentVar },
      securityContext: CreateContainerGroupRequestInitContainerSecurityContext,
      gpu: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestDnsConfigOption extends $tea.Model {
  name?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestDnsConfig extends $tea.Model {
  nameServer?: string[];
  search?: string[];
  option?: CreateContainerGroupRequestDnsConfigOption[];
  static names(): { [key: string]: string } {
    return {
      nameServer: 'NameServer',
      search: 'Search',
      option: 'Option',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nameServer: { 'type': 'array', 'itemType': 'string' },
      search: { 'type': 'array', 'itemType': 'string' },
      option: { 'type': 'array', 'itemType': CreateContainerGroupRequestDnsConfigOption },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestHostAliase extends $tea.Model {
  ip?: string;
  hostname: string[];
  static names(): { [key: string]: string } {
    return {
      ip: 'Ip',
      hostname: 'Hostname',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ip: 'string',
      hostname: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestArn extends $tea.Model {
  roleArn?: string;
  roleType?: string;
  assumeRoleFor?: string;
  static names(): { [key: string]: string } {
    return {
      roleArn: 'RoleArn',
      roleType: 'RoleType',
      assumeRoleFor: 'AssumeRoleFor',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleArn: 'string',
      roleType: 'string',
      assumeRoleFor: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestSecurityContextSysctl extends $tea.Model {
  name?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateContainerGroupRequestSecurityContext extends $tea.Model {
  sysctl?: CreateContainerGroupRequestSecurityContextSysctl[];
  static names(): { [key: string]: string } {
    return {
      sysctl: 'Sysctl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sysctl: { 'type': 'array', 'itemType': CreateContainerGroupRequestSecurityContextSysctl },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsRequestTag extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsTags extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsEvents extends $tea.Model {
  count: number;
  type: string;
  name: string;
  message: string;
  firstTimestamp: string;
  lastTimestamp: string;
  reason: string;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      type: 'Type',
      name: 'Name',
      message: 'Message',
      firstTimestamp: 'FirstTimestamp',
      lastTimestamp: 'LastTimestamp',
      reason: 'Reason',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      type: 'string',
      name: 'string',
      message: 'string',
      firstTimestamp: 'string',
      lastTimestamp: 'string',
      reason: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts extends $tea.Model {
  name: string;
  mountPath: string;
  readOnly: boolean;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      mountPath: 'MountPath',
      readOnly: 'ReadOnly',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      mountPath: 'string',
      readOnly: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersPorts extends $tea.Model {
  port: number;
  protocol: string;
  static names(): { [key: string]: string } {
    return {
      port: 'Port',
      protocol: 'Protocol',
    };
  }

  static types(): { [key: string]: any } {
    return {
      port: 'number',
      protocol: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef extends $tea.Model {
  fieldPath: string;
  static names(): { [key: string]: string } {
    return {
      fieldPath: 'FieldPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldPath: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom extends $tea.Model {
  fieldRef: DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef;
  static names(): { [key: string]: string } {
    return {
      fieldRef: 'FieldRef',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldRef: DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars extends $tea.Model {
  key: string;
  value: string;
  valueFrom: DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
      valueFrom: 'ValueFrom',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
      valueFrom: DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersPreviousState extends $tea.Model {
  state: string;
  detailStatus: string;
  exitCode: number;
  startTime: string;
  finishTime: string;
  reason: string;
  message: string;
  signal: number;
  static names(): { [key: string]: string } {
    return {
      state: 'State',
      detailStatus: 'DetailStatus',
      exitCode: 'ExitCode',
      startTime: 'StartTime',
      finishTime: 'FinishTime',
      reason: 'Reason',
      message: 'Message',
      signal: 'Signal',
    };
  }

  static types(): { [key: string]: any } {
    return {
      state: 'string',
      detailStatus: 'string',
      exitCode: 'number',
      startTime: 'string',
      finishTime: 'string',
      reason: 'string',
      message: 'string',
      signal: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersCurrentState extends $tea.Model {
  state: string;
  detailStatus: string;
  exitCode: number;
  startTime: string;
  finishTime: string;
  reason: string;
  message: string;
  signal: number;
  static names(): { [key: string]: string } {
    return {
      state: 'State',
      detailStatus: 'DetailStatus',
      exitCode: 'ExitCode',
      startTime: 'StartTime',
      finishTime: 'FinishTime',
      reason: 'Reason',
      message: 'Message',
      signal: 'Signal',
    };
  }

  static types(): { [key: string]: any } {
    return {
      state: 'string',
      detailStatus: 'string',
      exitCode: 'number',
      startTime: 'string',
      finishTime: 'string',
      reason: 'string',
      message: 'string',
      signal: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet extends $tea.Model {
  path: string;
  port: number;
  scheme: string;
  static names(): { [key: string]: string } {
    return {
      path: 'Path',
      port: 'Port',
      scheme: 'Scheme',
    };
  }

  static types(): { [key: string]: any } {
    return {
      path: 'string',
      port: 'number',
      scheme: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket extends $tea.Model {
  host: string;
  port: number;
  static names(): { [key: string]: string } {
    return {
      host: 'Host',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      host: 'string',
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe extends $tea.Model {
  initialDelaySeconds: number;
  periodSeconds: number;
  timeoutSeconds: number;
  successThreshold: number;
  failureThreshold: number;
  httpGet: DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet;
  tcpSocket: DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket;
  execs: string[];
  static names(): { [key: string]: string } {
    return {
      initialDelaySeconds: 'InitialDelaySeconds',
      periodSeconds: 'PeriodSeconds',
      timeoutSeconds: 'TimeoutSeconds',
      successThreshold: 'SuccessThreshold',
      failureThreshold: 'FailureThreshold',
      httpGet: 'HttpGet',
      tcpSocket: 'TcpSocket',
      execs: 'Execs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      initialDelaySeconds: 'number',
      periodSeconds: 'number',
      timeoutSeconds: 'number',
      successThreshold: 'number',
      failureThreshold: 'number',
      httpGet: DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet,
      tcpSocket: DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket,
      execs: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet extends $tea.Model {
  path: string;
  port: number;
  scheme: string;
  static names(): { [key: string]: string } {
    return {
      path: 'Path',
      port: 'Port',
      scheme: 'Scheme',
    };
  }

  static types(): { [key: string]: any } {
    return {
      path: 'string',
      port: 'number',
      scheme: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket extends $tea.Model {
  host: string;
  port: number;
  static names(): { [key: string]: string } {
    return {
      host: 'Host',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      host: 'string',
      port: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe extends $tea.Model {
  initialDelaySeconds: number;
  periodSeconds: number;
  timeoutSeconds: number;
  successThreshold: number;
  failureThreshold: number;
  httpGet: DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet;
  tcpSocket: DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket;
  execs: string[];
  static names(): { [key: string]: string } {
    return {
      initialDelaySeconds: 'InitialDelaySeconds',
      periodSeconds: 'PeriodSeconds',
      timeoutSeconds: 'TimeoutSeconds',
      successThreshold: 'SuccessThreshold',
      failureThreshold: 'FailureThreshold',
      httpGet: 'HttpGet',
      tcpSocket: 'TcpSocket',
      execs: 'Execs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      initialDelaySeconds: 'number',
      periodSeconds: 'number',
      timeoutSeconds: 'number',
      successThreshold: 'number',
      failureThreshold: 'number',
      httpGet: DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet,
      tcpSocket: DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket,
      execs: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability extends $tea.Model {
  adds: string[];
  static names(): { [key: string]: string } {
    return {
      adds: 'Adds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      adds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext extends $tea.Model {
  readOnlyRootFilesystem: boolean;
  runAsUser: number;
  capability: DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability;
  static names(): { [key: string]: string } {
    return {
      readOnlyRootFilesystem: 'ReadOnlyRootFilesystem',
      runAsUser: 'RunAsUser',
      capability: 'Capability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readOnlyRootFilesystem: 'boolean',
      runAsUser: 'number',
      capability: DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsContainers extends $tea.Model {
  name: string;
  image: string;
  memory: number;
  cpu: number;
  restartCount: number;
  workingDir: string;
  imagePullPolicy: string;
  ready: boolean;
  gpu: number;
  stdin: boolean;
  stdinOnce: boolean;
  tty: boolean;
  volumeMounts: DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts[];
  ports: DescribeContainerGroupsResponseContainerGroupsContainersPorts[];
  environmentVars: DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars[];
  previousState: DescribeContainerGroupsResponseContainerGroupsContainersPreviousState;
  currentState: DescribeContainerGroupsResponseContainerGroupsContainersCurrentState;
  readinessProbe: DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe;
  livenessProbe: DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe;
  securityContext: DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext;
  commands: string[];
  args: string[];
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      image: 'Image',
      memory: 'Memory',
      cpu: 'Cpu',
      restartCount: 'RestartCount',
      workingDir: 'WorkingDir',
      imagePullPolicy: 'ImagePullPolicy',
      ready: 'Ready',
      gpu: 'Gpu',
      stdin: 'Stdin',
      stdinOnce: 'StdinOnce',
      tty: 'Tty',
      volumeMounts: 'VolumeMounts',
      ports: 'Ports',
      environmentVars: 'EnvironmentVars',
      previousState: 'PreviousState',
      currentState: 'CurrentState',
      readinessProbe: 'ReadinessProbe',
      livenessProbe: 'LivenessProbe',
      securityContext: 'SecurityContext',
      commands: 'Commands',
      args: 'Args',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      image: 'string',
      memory: 'number',
      cpu: 'number',
      restartCount: 'number',
      workingDir: 'string',
      imagePullPolicy: 'string',
      ready: 'boolean',
      gpu: 'number',
      stdin: 'boolean',
      stdinOnce: 'boolean',
      tty: 'boolean',
      volumeMounts: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts },
      ports: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsContainersPorts },
      environmentVars: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars },
      previousState: DescribeContainerGroupsResponseContainerGroupsContainersPreviousState,
      currentState: DescribeContainerGroupsResponseContainerGroupsContainersCurrentState,
      readinessProbe: DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe,
      livenessProbe: DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe,
      securityContext: DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext,
      commands: { 'type': 'array', 'itemType': 'string' },
      args: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths extends $tea.Model {
  content: string;
  path: string;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      path: 'Path',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
      path: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsVolumes extends $tea.Model {
  type: string;
  name: string;
  NFSVolumePath: string;
  NFSVolumeServer: string;
  NFSVolumeReadOnly: boolean;
  diskVolumeDiskId: string;
  diskVolumeFsType: string;
  flexVolumeDriver: string;
  flexVolumeFsType: string;
  flexVolumeOptions: string;
  configFileVolumeConfigFileToPaths: DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths[];
  static names(): { [key: string]: string } {
    return {
      type: 'Type',
      name: 'Name',
      NFSVolumePath: 'NFSVolumePath',
      NFSVolumeServer: 'NFSVolumeServer',
      NFSVolumeReadOnly: 'NFSVolumeReadOnly',
      diskVolumeDiskId: 'DiskVolumeDiskId',
      diskVolumeFsType: 'DiskVolumeFsType',
      flexVolumeDriver: 'FlexVolumeDriver',
      flexVolumeFsType: 'FlexVolumeFsType',
      flexVolumeOptions: 'FlexVolumeOptions',
      configFileVolumeConfigFileToPaths: 'ConfigFileVolumeConfigFileToPaths',
    };
  }

  static types(): { [key: string]: any } {
    return {
      type: 'string',
      name: 'string',
      NFSVolumePath: 'string',
      NFSVolumeServer: 'string',
      NFSVolumeReadOnly: 'boolean',
      diskVolumeDiskId: 'string',
      diskVolumeFsType: 'string',
      flexVolumeDriver: 'string',
      flexVolumeFsType: 'string',
      flexVolumeOptions: 'string',
      configFileVolumeConfigFileToPaths: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts extends $tea.Model {
  name: string;
  mountPath: string;
  readOnly: boolean;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      mountPath: 'MountPath',
      readOnly: 'ReadOnly',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      mountPath: 'string',
      readOnly: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainersPorts extends $tea.Model {
  port: number;
  protocol: string;
  static names(): { [key: string]: string } {
    return {
      port: 'Port',
      protocol: 'Protocol',
    };
  }

  static types(): { [key: string]: any } {
    return {
      port: 'number',
      protocol: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef extends $tea.Model {
  fieldPath: string;
  static names(): { [key: string]: string } {
    return {
      fieldPath: 'FieldPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldPath: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom extends $tea.Model {
  fieldRef: DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef;
  static names(): { [key: string]: string } {
    return {
      fieldRef: 'FieldRef',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fieldRef: DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars extends $tea.Model {
  key: string;
  value: string;
  valueFrom: DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
      valueFrom: 'ValueFrom',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
      valueFrom: DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState extends $tea.Model {
  state: string;
  detailStatus: string;
  exitCode: number;
  startTime: string;
  finishTime: string;
  reason: string;
  message: string;
  signal: number;
  static names(): { [key: string]: string } {
    return {
      state: 'State',
      detailStatus: 'DetailStatus',
      exitCode: 'ExitCode',
      startTime: 'StartTime',
      finishTime: 'FinishTime',
      reason: 'Reason',
      message: 'Message',
      signal: 'Signal',
    };
  }

  static types(): { [key: string]: any } {
    return {
      state: 'string',
      detailStatus: 'string',
      exitCode: 'number',
      startTime: 'string',
      finishTime: 'string',
      reason: 'string',
      message: 'string',
      signal: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState extends $tea.Model {
  state: string;
  detailStatus: string;
  exitCode: number;
  startTime: string;
  finishTime: string;
  reason: string;
  message: string;
  signal: number;
  static names(): { [key: string]: string } {
    return {
      state: 'State',
      detailStatus: 'DetailStatus',
      exitCode: 'ExitCode',
      startTime: 'StartTime',
      finishTime: 'FinishTime',
      reason: 'Reason',
      message: 'Message',
      signal: 'Signal',
    };
  }

  static types(): { [key: string]: any } {
    return {
      state: 'string',
      detailStatus: 'string',
      exitCode: 'number',
      startTime: 'string',
      finishTime: 'string',
      reason: 'string',
      message: 'string',
      signal: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability extends $tea.Model {
  adds: string[];
  static names(): { [key: string]: string } {
    return {
      adds: 'Adds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      adds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext extends $tea.Model {
  readOnlyRootFilesystem: boolean;
  runAsUser: number;
  capability: DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability;
  static names(): { [key: string]: string } {
    return {
      readOnlyRootFilesystem: 'ReadOnlyRootFilesystem',
      runAsUser: 'RunAsUser',
      capability: 'Capability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readOnlyRootFilesystem: 'boolean',
      runAsUser: 'number',
      capability: DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsInitContainers extends $tea.Model {
  name: string;
  image: string;
  cpu: number;
  memory: number;
  restartCount: number;
  workingDir: string;
  imagePullPolicy: string;
  ready: boolean;
  gpu: number;
  volumeMounts: DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts[];
  ports: DescribeContainerGroupsResponseContainerGroupsInitContainersPorts[];
  environmentVars: DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars[];
  previousState: DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState;
  currentState: DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState;
  securityContext: DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext;
  command: string[];
  args: string[];
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      image: 'Image',
      cpu: 'Cpu',
      memory: 'Memory',
      restartCount: 'RestartCount',
      workingDir: 'WorkingDir',
      imagePullPolicy: 'ImagePullPolicy',
      ready: 'Ready',
      gpu: 'Gpu',
      volumeMounts: 'VolumeMounts',
      ports: 'Ports',
      environmentVars: 'EnvironmentVars',
      previousState: 'PreviousState',
      currentState: 'CurrentState',
      securityContext: 'SecurityContext',
      command: 'Command',
      args: 'Args',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      image: 'string',
      cpu: 'number',
      memory: 'number',
      restartCount: 'number',
      workingDir: 'string',
      imagePullPolicy: 'string',
      ready: 'boolean',
      gpu: 'number',
      volumeMounts: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts },
      ports: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsInitContainersPorts },
      environmentVars: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars },
      previousState: DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState,
      currentState: DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState,
      securityContext: DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext,
      command: { 'type': 'array', 'itemType': 'string' },
      args: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsHostAliases extends $tea.Model {
  ip: string;
  hostnames: string[];
  static names(): { [key: string]: string } {
    return {
      ip: 'Ip',
      hostnames: 'Hostnames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ip: 'string',
      hostnames: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions extends $tea.Model {
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsDnsConfig extends $tea.Model {
  options: DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions[];
  nameServers: string[];
  searches: string[];
  static names(): { [key: string]: string } {
    return {
      options: 'Options',
      nameServers: 'NameServers',
      searches: 'Searches',
    };
  }

  static types(): { [key: string]: any } {
    return {
      options: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions },
      nameServers: { 'type': 'array', 'itemType': 'string' },
      searches: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls extends $tea.Model {
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroupsEciSecurityContext extends $tea.Model {
  sysctls: DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls[];
  static names(): { [key: string]: string } {
    return {
      sysctls: 'Sysctls',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sysctls: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupsResponseContainerGroups extends $tea.Model {
  containerGroupId: string;
  containerGroupName: string;
  regionId: string;
  zoneId: string;
  memory: number;
  cpu: number;
  VSwitchId: string;
  securityGroupId: string;
  restartPolicy: string;
  intranetIp: string;
  status: string;
  internetIp: string;
  creationTime: string;
  succeededTime: string;
  eniInstanceId: string;
  instanceType: string;
  expiredTime: string;
  failedTime: string;
  ramRoleName: string;
  ipv6Address: string;
  vpcId: string;
  discount: number;
  resourceGroupId: string;
  tags: DescribeContainerGroupsResponseContainerGroupsTags[];
  events: DescribeContainerGroupsResponseContainerGroupsEvents[];
  containers: DescribeContainerGroupsResponseContainerGroupsContainers[];
  volumes: DescribeContainerGroupsResponseContainerGroupsVolumes[];
  initContainers: DescribeContainerGroupsResponseContainerGroupsInitContainers[];
  hostAliases: DescribeContainerGroupsResponseContainerGroupsHostAliases[];
  dnsConfig: DescribeContainerGroupsResponseContainerGroupsDnsConfig;
  eciSecurityContext: DescribeContainerGroupsResponseContainerGroupsEciSecurityContext;
  static names(): { [key: string]: string } {
    return {
      containerGroupId: 'ContainerGroupId',
      containerGroupName: 'ContainerGroupName',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      memory: 'Memory',
      cpu: 'Cpu',
      VSwitchId: 'VSwitchId',
      securityGroupId: 'SecurityGroupId',
      restartPolicy: 'RestartPolicy',
      intranetIp: 'IntranetIp',
      status: 'Status',
      internetIp: 'InternetIp',
      creationTime: 'CreationTime',
      succeededTime: 'SucceededTime',
      eniInstanceId: 'EniInstanceId',
      instanceType: 'InstanceType',
      expiredTime: 'ExpiredTime',
      failedTime: 'FailedTime',
      ramRoleName: 'RamRoleName',
      ipv6Address: 'Ipv6Address',
      vpcId: 'VpcId',
      discount: 'Discount',
      resourceGroupId: 'ResourceGroupId',
      tags: 'Tags',
      events: 'Events',
      containers: 'Containers',
      volumes: 'Volumes',
      initContainers: 'InitContainers',
      hostAliases: 'HostAliases',
      dnsConfig: 'DnsConfig',
      eciSecurityContext: 'EciSecurityContext',
    };
  }

  static types(): { [key: string]: any } {
    return {
      containerGroupId: 'string',
      containerGroupName: 'string',
      regionId: 'string',
      zoneId: 'string',
      memory: 'number',
      cpu: 'number',
      VSwitchId: 'string',
      securityGroupId: 'string',
      restartPolicy: 'string',
      intranetIp: 'string',
      status: 'string',
      internetIp: 'string',
      creationTime: 'string',
      succeededTime: 'string',
      eniInstanceId: 'string',
      instanceType: 'string',
      expiredTime: 'string',
      failedTime: 'string',
      ramRoleName: 'string',
      ipv6Address: 'string',
      vpcId: 'string',
      discount: 'number',
      resourceGroupId: 'string',
      tags: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsTags },
      events: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsEvents },
      containers: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsContainers },
      volumes: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsVolumes },
      initContainers: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsInitContainers },
      hostAliases: { 'type': 'array', 'itemType': DescribeContainerGroupsResponseContainerGroupsHostAliases },
      dnsConfig: DescribeContainerGroupsResponseContainerGroupsDnsConfig,
      eciSecurityContext: DescribeContainerGroupsResponseContainerGroupsEciSecurityContext,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client {
  _endpoint: string;
  _regionId: string;
  _protocol: string;
  _userAgent: string;
  _readTimeout: number;
  _connectTimeout: number;
  _httpProxy: string;
  _httpsProxy: string;
  _noProxy: string;
  _socks5Proxy: string;
  _socks5NetWork: string;
  _maxIdleConns: number;
  _credential: Credential;

  constructor(config: Config) {
    if (Util.isUnset($tea.toMap(config))) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config' can not be unset",
      });
    }

    if (Util.empty(config.endpoint)) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config.endpoint' can not be empty",
      });
    }

    if (Util.empty(config.regionId)) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config.regionId' can not be empty",
      });
    }

    if (Util.empty(config.type)) {
      config.type = "access_key";
    }

    let credentialConfig = new $Credential.Config({
      accessKeyId: config.accessKeyId,
      type: config.type,
      accessKeySecret: config.accessKeySecret,
      securityToken: config.securityToken,
    });
    this._credential = new Credential(credentialConfig);
    this._endpoint = config.endpoint;
    this._protocol = config.protocol;
    this._regionId = config.regionId;
    this._userAgent = config.userAgent;
    this._readTimeout = config.readTimeout;
    this._connectTimeout = config.connectTimeout;
    this._httpProxy = config.httpProxy;
    this._httpsProxy = config.httpsProxy;
    this._noProxy = config.noProxy;
    this._socks5Proxy = config.socks5Proxy;
    this._socks5NetWork = config.socks5NetWork;
    this._maxIdleConns = config.maxIdleConns;
  }

  async _request(action: string, protocol: string, method: string, authType: string, query: {[key: string]: any}, body: {[key: string]: any}, runtime: $Util.RuntimeOptions): Promise<{[key: string]: any}> {
    let _runtime: { [key: string]: any } = {
      timeouted: "retry",
      readTimeout: Util.defaultNumber(runtime.readTimeout, this._readTimeout),
      connectTimeout: Util.defaultNumber(runtime.connectTimeout, this._connectTimeout),
      httpProxy: Util.defaultString(runtime.httpProxy, this._httpProxy),
      httpsProxy: Util.defaultString(runtime.httpsProxy, this._httpsProxy),
      noProxy: Util.defaultString(runtime.noProxy, this._noProxy),
      maxIdleConns: Util.defaultNumber(runtime.maxIdleConns, this._maxIdleConns),
      retry: {
        retryable: runtime.autoretry,
        maxAttempts: Util.defaultNumber(runtime.maxAttempts, 2),
      },
      backoff: {
        policy: Util.defaultString(runtime.backoffPolicy, "no"),
        period: Util.defaultNumber(runtime.backoffPeriod, 0),
      },
      ignoreSSL: runtime.ignoreSSL,
    }

    let _lastRequest = null;
    let _now = Date.now();
    let _retryTimes = 0;
    while ($tea.allowRetry(_runtime['retry'], _retryTimes, _now)) {
      if (_retryTimes > 0) {
        let _backoffTime = $tea.getBackoffTime(_runtime['backoff'], _retryTimes);
        if (_backoffTime > 0) {
          await $tea.sleep(_backoffTime);
        }
      }

      _retryTimes = _retryTimes + 1;
      try {
        let request_ = new $tea.Request();
        request_.protocol = Util.defaultString(this._protocol, protocol);
        request_.method = method;
        request_.pathname = "/";
        request_.query = RPCUtil.query({
          Action: action,
          Format: "json",
          RegionId: this._regionId,
          Timestamp: RPCUtil.getTimestamp(),
          Version: "2018-08-08",
          SignatureNonce: Util.getNonce(),
          ...query,
        });
        if (!Util.isUnset(body)) {
          let tmp = Util.anyifyMapValue(RPCUtil.query(body));
          request_.body = new $tea.BytesReadable(Util.toFormString(tmp));
        }

        request_.headers = {
          host: RPCUtil.getHost("Eci", this._regionId, this._endpoint),
          'user-agent': this.getUserAgent(),
        };
        if (!Util.equalString(authType, "Anonymous")) {
          let accessKeyId = await this.getAccessKeyId();
          let accessKeySecret = await this.getAccessKeySecret();
          request_.query["SignatureMethod"] = "HMAC-SHA1";
          request_.query["SignatureVersion"] = "1.0";
          request_.query["AccessKeyId"] = accessKeyId;
          request_.query["Signature"] = RPCUtil.getSignature(request_, accessKeySecret);
        }

        _lastRequest = request_;
        let response_ = await $tea.doAction(request_, _runtime);

        let obj = await Util.readAsJSON(response_.body);
        let res = Util.assertAsMap(obj);
        if (RPCUtil.hasError(res)) {
          throw $tea.newError({
            message: res["Message"],
            data: res,
            code: res["Code"],
          });
        }

        return res;
      } catch (ex) {
        if ($tea.isRetryable(ex)) {
          continue;
        }
        throw ex;
      }
    }

    throw $tea.newUnretryableError(_lastRequest);
  }

  async describeRegions(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    return $tea.cast<DescribeRegionsResponse>(await this._request("DescribeRegions", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DescribeRegionsResponse({}));
  }

  async describeImageCaches(request: DescribeImageCachesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeImageCachesResponse> {
    return $tea.cast<DescribeImageCachesResponse>(await this._request("DescribeImageCaches", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DescribeImageCachesResponse({}));
  }

  async deleteImageCache(request: DeleteImageCacheRequest, runtime: $Util.RuntimeOptions): Promise<DeleteImageCacheResponse> {
    return $tea.cast<DeleteImageCacheResponse>(await this._request("DeleteImageCache", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DeleteImageCacheResponse({}));
  }

  async createImageCache(request: CreateImageCacheRequest, runtime: $Util.RuntimeOptions): Promise<CreateImageCacheResponse> {
    return $tea.cast<CreateImageCacheResponse>(await this._request("CreateImageCache", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new CreateImageCacheResponse({}));
  }

  async describeMultiContainerGroupMetric(request: DescribeMultiContainerGroupMetricRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMultiContainerGroupMetricResponse> {
    return $tea.cast<DescribeMultiContainerGroupMetricResponse>(await this._request("DescribeMultiContainerGroupMetric", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DescribeMultiContainerGroupMetricResponse({}));
  }

  async describeContainerGroupMetric(request: DescribeContainerGroupMetricRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContainerGroupMetricResponse> {
    return $tea.cast<DescribeContainerGroupMetricResponse>(await this._request("DescribeContainerGroupMetric", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DescribeContainerGroupMetricResponse({}));
  }

  async updateContainerGroupByTemplate(request: UpdateContainerGroupByTemplateRequest, runtime: $Util.RuntimeOptions): Promise<UpdateContainerGroupByTemplateResponse> {
    return $tea.cast<UpdateContainerGroupByTemplateResponse>(await this._request("UpdateContainerGroupByTemplate", "HTTPS", "POST", "AK", $tea.toMap(request), null, runtime), new UpdateContainerGroupByTemplateResponse({}));
  }

  async createContainerGroupFromTemplate(request: CreateContainerGroupFromTemplateRequest, runtime: $Util.RuntimeOptions): Promise<CreateContainerGroupFromTemplateResponse> {
    return $tea.cast<CreateContainerGroupFromTemplateResponse>(await this._request("CreateContainerGroupFromTemplate", "HTTPS", "POST", "AK", $tea.toMap(request), null, runtime), new CreateContainerGroupFromTemplateResponse({}));
  }

  async exportContainerGroupTemplate(request: ExportContainerGroupTemplateRequest, runtime: $Util.RuntimeOptions): Promise<ExportContainerGroupTemplateResponse> {
    return $tea.cast<ExportContainerGroupTemplateResponse>(await this._request("ExportContainerGroupTemplate", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new ExportContainerGroupTemplateResponse({}));
  }

  async restartContainerGroup(request: RestartContainerGroupRequest, runtime: $Util.RuntimeOptions): Promise<RestartContainerGroupResponse> {
    return $tea.cast<RestartContainerGroupResponse>(await this._request("RestartContainerGroup", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new RestartContainerGroupResponse({}));
  }

  async updateContainerGroup(request: UpdateContainerGroupRequest, runtime: $Util.RuntimeOptions): Promise<UpdateContainerGroupResponse> {
    return $tea.cast<UpdateContainerGroupResponse>(await this._request("UpdateContainerGroup", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new UpdateContainerGroupResponse({}));
  }

  async describeContainerGroupPrice(request: DescribeContainerGroupPriceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContainerGroupPriceResponse> {
    return $tea.cast<DescribeContainerGroupPriceResponse>(await this._request("DescribeContainerGroupPrice", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DescribeContainerGroupPriceResponse({}));
  }

  async execContainerCommand(request: ExecContainerCommandRequest, runtime: $Util.RuntimeOptions): Promise<ExecContainerCommandResponse> {
    return $tea.cast<ExecContainerCommandResponse>(await this._request("ExecContainerCommand", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new ExecContainerCommandResponse({}));
  }

  async describeContainerLog(request: DescribeContainerLogRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContainerLogResponse> {
    return $tea.cast<DescribeContainerLogResponse>(await this._request("DescribeContainerLog", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DescribeContainerLogResponse({}));
  }

  async createContainerGroup(request: CreateContainerGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateContainerGroupResponse> {
    return $tea.cast<CreateContainerGroupResponse>(await this._request("CreateContainerGroup", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new CreateContainerGroupResponse({}));
  }

  async describeContainerGroups(request: DescribeContainerGroupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContainerGroupsResponse> {
    return $tea.cast<DescribeContainerGroupsResponse>(await this._request("DescribeContainerGroups", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DescribeContainerGroupsResponse({}));
  }

  async deleteContainerGroup(request: DeleteContainerGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteContainerGroupResponse> {
    return $tea.cast<DeleteContainerGroupResponse>(await this._request("DeleteContainerGroup", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DeleteContainerGroupResponse({}));
  }

  getUserAgent(): string {
    let userAgent = Util.getUserAgent(this._userAgent);
    return userAgent;
  }

  async getAccessKeyId(): Promise<string> {
    if (Util.isUnset(this._credential)) {
      return "";
    }

    let accessKeyId = await this._credential.getAccessKeyId();
    return accessKeyId;
  }

  async getAccessKeySecret(): Promise<string> {
    if (Util.isUnset(this._credential)) {
      return "";
    }

    let secret = await this._credential.getAccessKeySecret();
    return secret;
  }

}
