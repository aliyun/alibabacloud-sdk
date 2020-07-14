// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class DescribeRegionsRequest extends $tea.Model {
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId: string;
  imageCacheId?: string;
  imageCacheName?: string;
  snapshotId?: string;
  image?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      imageCacheId: 'ImageCacheId',
      imageCacheName: 'ImageCacheName',
      snapshotId: 'SnapshotId',
      image: 'Image',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId: string;
  imageCacheId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      imageCacheId: 'ImageCacheId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId: string;
  zoneId?: string;
  securityGroupId: string;
  vSwitchId: string;
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
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      securityGroupId: 'SecurityGroupId',
      vSwitchId: 'VSwitchId',
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
      regionId: 'string',
      zoneId: 'string',
      securityGroupId: 'string',
      vSwitchId: 'string',
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
  regionId: string;
  containerGroupIds: string;
  resourceGroupId?: string;
  metricType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      containerGroupIds: 'ContainerGroupIds',
      resourceGroupId: 'ResourceGroupId',
      metricType: 'MetricType',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId: string;
  containerGroupId: string;
  startTime?: string;
  endTime?: string;
  period?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId: string;
  template: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      template: 'Template',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId: string;
  template: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      template: 'Template',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId?: string;
  containerGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId: string;
  containerGroupId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId: string;
  cpu?: number;
  memory?: number;
  instanceType?: string;
  spotStrategy?: string;
  zoneId?: string;
  spotPriceLimit?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      cpu: 'Cpu',
      memory: 'Memory',
      instanceType: 'InstanceType',
      spotStrategy: 'SpotStrategy',
      zoneId: 'ZoneId',
      spotPriceLimit: 'SpotPriceLimit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      cpu: 'number',
      memory: 'number',
      instanceType: 'string',
      spotStrategy: 'string',
      zoneId: 'string',
      spotPriceLimit: 'number',
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
  regionId: string;
  containerGroupId: string;
  containerName: string;
  command: string;
  TTY?: boolean;
  stdin?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      containerName: 'ContainerName',
      command: 'Command',
      TTY: 'TTY',
      stdin: 'Stdin',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      containerGroupId: 'string',
      containerName: 'string',
      command: 'string',
      TTY: 'boolean',
      stdin: 'boolean',
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
  regionId: string;
  containerGroupId: string;
  containerName: string;
  startTime?: string;
  tail?: number;
  lastTime?: boolean;
  sinceSeconds?: number;
  limitBytes?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      containerName: 'ContainerName',
      startTime: 'StartTime',
      tail: 'Tail',
      lastTime: 'LastTime',
      sinceSeconds: 'SinceSeconds',
      limitBytes: 'LimitBytes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      containerGroupId: 'string',
      containerName: 'string',
      startTime: 'string',
      tail: 'number',
      lastTime: 'boolean',
      sinceSeconds: 'number',
      limitBytes: 'number',
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
  regionId: string;
  zoneId?: string;
  securityGroupId: string;
  vSwitchId: string;
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
  scheduleStrategy?: string;
  tenantVSwitchId?: string;
  tenantSecurityGroupId?: string;
  corePattern?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      securityGroupId: 'SecurityGroupId',
      vSwitchId: 'VSwitchId',
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
      scheduleStrategy: 'ScheduleStrategy',
      tenantVSwitchId: 'TenantVSwitchId',
      tenantSecurityGroupId: 'TenantSecurityGroupId',
      corePattern: 'CorePattern',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      zoneId: 'string',
      securityGroupId: 'string',
      vSwitchId: 'string',
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
      scheduleStrategy: 'string',
      tenantVSwitchId: 'string',
      tenantSecurityGroupId: 'string',
      corePattern: 'string',
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
  regionId: string;
  zoneId?: string;
  vSwitchId?: string;
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
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      vSwitchId: 'VSwitchId',
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
      regionId: 'string',
      zoneId: 'string',
      vSwitchId: 'string',
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
  regionId: string;
  containerGroupId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      containerGroupId: 'ContainerGroupId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
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
  regionId: string;
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
      regionId: 'RegionId',
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
      regionId: 'string',
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
  vSwitchId: string;
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
      vSwitchId: 'VSwitchId',
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
      vSwitchId: 'string',
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

export class DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice extends $tea.Model {
  zoneId: string;
  instanceType: string;
  spotPrice: number;
  originPrice: number;
  static names(): { [key: string]: string } {
    return {
      zoneId: 'ZoneId',
      instanceType: 'InstanceType',
      spotPrice: 'SpotPrice',
      originPrice: 'OriginPrice',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zoneId: 'string',
      instanceType: 'string',
      spotPrice: 'number',
      originPrice: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContainerGroupPriceResponsePriceInfoSpotPrices extends $tea.Model {
  spotPrice: DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice[];
  static names(): { [key: string]: string } {
    return {
      spotPrice: 'SpotPrice',
    };
  }

  static types(): { [key: string]: any } {
    return {
      spotPrice: { 'type': 'array', 'itemType': DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice },
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
  spotPrices: DescribeContainerGroupPriceResponsePriceInfoSpotPrices;
  price: DescribeContainerGroupPriceResponsePriceInfoPrice;
  static names(): { [key: string]: string } {
    return {
      rules: 'Rules',
      spotPrices: 'SpotPrices',
      price: 'Price',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rules: DescribeContainerGroupPriceResponsePriceInfoRules,
      spotPrices: DescribeContainerGroupPriceResponsePriceInfoSpotPrices,
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
  terminationMessagePath?: string;
  terminationMessagePolicy?: string;
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
      terminationMessagePath: 'TerminationMessagePath',
      terminationMessagePolicy: 'TerminationMessagePolicy',
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
      terminationMessagePath: 'string',
      terminationMessagePolicy: 'string',
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
  defaultMode?: number;
  static names(): { [key: string]: string } {
    return {
      configFileToPath: 'ConfigFileToPath',
      defaultMode: 'DefaultMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      configFileToPath: { 'type': 'array', 'itemType': CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath },
      defaultMode: 'number',
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
  terminationMessagePath?: string;
  terminationMessagePolicy?: string;
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
      terminationMessagePath: 'TerminationMessagePath',
      terminationMessagePolicy: 'TerminationMessagePolicy',
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
      terminationMessagePath: 'string',
      terminationMessagePolicy: 'string',
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
  vSwitchId: string;
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
  tenantEniInstanceId: string;
  tenantVSwitchId: string;
  tenantSecurityGroupId: string;
  spotStrategy: string;
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
      vSwitchId: 'VSwitchId',
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
      tenantEniInstanceId: 'TenantEniInstanceId',
      tenantVSwitchId: 'TenantVSwitchId',
      tenantSecurityGroupId: 'TenantSecurityGroupId',
      spotStrategy: 'SpotStrategy',
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
      vSwitchId: 'string',
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
      tenantEniInstanceId: 'string',
      tenantVSwitchId: 'string',
      tenantSecurityGroupId: 'string',
      spotStrategy: 'string',
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


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("eci", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async describeRegionsWithOptions(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRegionsResponse>(await this.doRequest("DescribeRegions", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new DescribeRegionsResponse({}));
  }

  async describeRegions(request: DescribeRegionsRequest): Promise<DescribeRegionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRegionsWithOptions(request, runtime);
  }

  async describeImageCachesWithOptions(request: DescribeImageCachesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeImageCachesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeImageCachesResponse>(await this.doRequest("DescribeImageCaches", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new DescribeImageCachesResponse({}));
  }

  async describeImageCaches(request: DescribeImageCachesRequest): Promise<DescribeImageCachesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeImageCachesWithOptions(request, runtime);
  }

  async deleteImageCacheWithOptions(request: DeleteImageCacheRequest, runtime: $Util.RuntimeOptions): Promise<DeleteImageCacheResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteImageCacheResponse>(await this.doRequest("DeleteImageCache", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new DeleteImageCacheResponse({}));
  }

  async deleteImageCache(request: DeleteImageCacheRequest): Promise<DeleteImageCacheResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteImageCacheWithOptions(request, runtime);
  }

  async createImageCacheWithOptions(request: CreateImageCacheRequest, runtime: $Util.RuntimeOptions): Promise<CreateImageCacheResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateImageCacheResponse>(await this.doRequest("CreateImageCache", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new CreateImageCacheResponse({}));
  }

  async createImageCache(request: CreateImageCacheRequest): Promise<CreateImageCacheResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createImageCacheWithOptions(request, runtime);
  }

  async describeMultiContainerGroupMetricWithOptions(request: DescribeMultiContainerGroupMetricRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMultiContainerGroupMetricResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMultiContainerGroupMetricResponse>(await this.doRequest("DescribeMultiContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new DescribeMultiContainerGroupMetricResponse({}));
  }

  async describeMultiContainerGroupMetric(request: DescribeMultiContainerGroupMetricRequest): Promise<DescribeMultiContainerGroupMetricResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMultiContainerGroupMetricWithOptions(request, runtime);
  }

  async describeContainerGroupMetricWithOptions(request: DescribeContainerGroupMetricRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContainerGroupMetricResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeContainerGroupMetricResponse>(await this.doRequest("DescribeContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new DescribeContainerGroupMetricResponse({}));
  }

  async describeContainerGroupMetric(request: DescribeContainerGroupMetricRequest): Promise<DescribeContainerGroupMetricResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeContainerGroupMetricWithOptions(request, runtime);
  }

  async updateContainerGroupByTemplateWithOptions(request: UpdateContainerGroupByTemplateRequest, runtime: $Util.RuntimeOptions): Promise<UpdateContainerGroupByTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateContainerGroupByTemplateResponse>(await this.doRequest("UpdateContainerGroupByTemplate", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new UpdateContainerGroupByTemplateResponse({}));
  }

  async updateContainerGroupByTemplate(request: UpdateContainerGroupByTemplateRequest): Promise<UpdateContainerGroupByTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateContainerGroupByTemplateWithOptions(request, runtime);
  }

  async createContainerGroupFromTemplateWithOptions(request: CreateContainerGroupFromTemplateRequest, runtime: $Util.RuntimeOptions): Promise<CreateContainerGroupFromTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateContainerGroupFromTemplateResponse>(await this.doRequest("CreateContainerGroupFromTemplate", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new CreateContainerGroupFromTemplateResponse({}));
  }

  async createContainerGroupFromTemplate(request: CreateContainerGroupFromTemplateRequest): Promise<CreateContainerGroupFromTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createContainerGroupFromTemplateWithOptions(request, runtime);
  }

  async exportContainerGroupTemplateWithOptions(request: ExportContainerGroupTemplateRequest, runtime: $Util.RuntimeOptions): Promise<ExportContainerGroupTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<ExportContainerGroupTemplateResponse>(await this.doRequest("ExportContainerGroupTemplate", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new ExportContainerGroupTemplateResponse({}));
  }

  async exportContainerGroupTemplate(request: ExportContainerGroupTemplateRequest): Promise<ExportContainerGroupTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.exportContainerGroupTemplateWithOptions(request, runtime);
  }

  async restartContainerGroupWithOptions(request: RestartContainerGroupRequest, runtime: $Util.RuntimeOptions): Promise<RestartContainerGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<RestartContainerGroupResponse>(await this.doRequest("RestartContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new RestartContainerGroupResponse({}));
  }

  async restartContainerGroup(request: RestartContainerGroupRequest): Promise<RestartContainerGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.restartContainerGroupWithOptions(request, runtime);
  }

  async updateContainerGroupWithOptions(request: UpdateContainerGroupRequest, runtime: $Util.RuntimeOptions): Promise<UpdateContainerGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateContainerGroupResponse>(await this.doRequest("UpdateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new UpdateContainerGroupResponse({}));
  }

  async updateContainerGroup(request: UpdateContainerGroupRequest): Promise<UpdateContainerGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateContainerGroupWithOptions(request, runtime);
  }

  async describeContainerGroupPriceWithOptions(request: DescribeContainerGroupPriceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContainerGroupPriceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeContainerGroupPriceResponse>(await this.doRequest("DescribeContainerGroupPrice", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new DescribeContainerGroupPriceResponse({}));
  }

  async describeContainerGroupPrice(request: DescribeContainerGroupPriceRequest): Promise<DescribeContainerGroupPriceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeContainerGroupPriceWithOptions(request, runtime);
  }

  async execContainerCommandWithOptions(request: ExecContainerCommandRequest, runtime: $Util.RuntimeOptions): Promise<ExecContainerCommandResponse> {
    Util.validateModel(request);
    return $tea.cast<ExecContainerCommandResponse>(await this.doRequest("ExecContainerCommand", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new ExecContainerCommandResponse({}));
  }

  async execContainerCommand(request: ExecContainerCommandRequest): Promise<ExecContainerCommandResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.execContainerCommandWithOptions(request, runtime);
  }

  async describeContainerLogWithOptions(request: DescribeContainerLogRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContainerLogResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeContainerLogResponse>(await this.doRequest("DescribeContainerLog", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new DescribeContainerLogResponse({}));
  }

  async describeContainerLog(request: DescribeContainerLogRequest): Promise<DescribeContainerLogResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeContainerLogWithOptions(request, runtime);
  }

  async createContainerGroupWithOptions(request: CreateContainerGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateContainerGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateContainerGroupResponse>(await this.doRequest("CreateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new CreateContainerGroupResponse({}));
  }

  async createContainerGroup(request: CreateContainerGroupRequest): Promise<CreateContainerGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createContainerGroupWithOptions(request, runtime);
  }

  async describeContainerGroupsWithOptions(request: DescribeContainerGroupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContainerGroupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeContainerGroupsResponse>(await this.doRequest("DescribeContainerGroups", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new DescribeContainerGroupsResponse({}));
  }

  async describeContainerGroups(request: DescribeContainerGroupsRequest): Promise<DescribeContainerGroupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeContainerGroupsWithOptions(request, runtime);
  }

  async deleteContainerGroupWithOptions(request: DeleteContainerGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteContainerGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteContainerGroupResponse>(await this.doRequest("DeleteContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", null, $tea.toMap(request), runtime), new DeleteContainerGroupResponse({}));
  }

  async deleteContainerGroup(request: DeleteContainerGroupRequest): Promise<DeleteContainerGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteContainerGroupWithOptions(request, runtime);
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
