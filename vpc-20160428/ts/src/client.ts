// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class ListNatGatewayEcsMetricRequest extends $tea.Model {
  regionId: string;
  dryRun?: boolean;
  natGatewayId: string;
  timePoint: number;
  orderKey?: string;
  orderType?: string;
  privateIpAddress?: string;
  nextToken?: string;
  maxResults?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dryRun: 'DryRun',
      natGatewayId: 'NatGatewayId',
      timePoint: 'TimePoint',
      orderKey: 'OrderKey',
      orderType: 'OrderType',
      privateIpAddress: 'PrivateIpAddress',
      nextToken: 'NextToken',
      maxResults: 'MaxResults',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dryRun: 'boolean',
      natGatewayId: 'string',
      timePoint: 'number',
      orderKey: 'string',
      orderType: 'string',
      privateIpAddress: 'string',
      nextToken: 'string',
      maxResults: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListNatGatewayEcsMetricResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  maxResults: number;
  metricDataList: ListNatGatewayEcsMetricResponseMetricDataList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      maxResults: 'MaxResults',
      metricDataList: 'MetricDataList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      maxResults: 'number',
      metricDataList: { 'type': 'array', 'itemType': ListNatGatewayEcsMetricResponseMetricDataList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableNatGatewayEcsMetricRequest extends $tea.Model {
  regionId: string;
  dryRun?: boolean;
  natGatewayId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dryRun: 'DryRun',
      natGatewayId: 'NatGatewayId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dryRun: 'boolean',
      natGatewayId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableNatGatewayEcsMetricResponse extends $tea.Model {
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

export class EnableNatGatewayEcsMetricRequest extends $tea.Model {
  regionId: string;
  dryRun?: boolean;
  natGatewayId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dryRun: 'DryRun',
      natGatewayId: 'NatGatewayId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dryRun: 'boolean',
      natGatewayId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableNatGatewayEcsMetricResponse extends $tea.Model {
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

export class CreateDhcpOptionsSetRequest extends $tea.Model {
  regionId: string;
  domainNameServers?: string;
  dhcpOptionsSetName?: string;
  dhcpOptionsSetDescription?: string;
  domainName?: string;
  clientToken?: string;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      domainNameServers: 'DomainNameServers',
      dhcpOptionsSetName: 'DhcpOptionsSetName',
      dhcpOptionsSetDescription: 'DhcpOptionsSetDescription',
      domainName: 'DomainName',
      clientToken: 'ClientToken',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      domainNameServers: 'string',
      dhcpOptionsSetName: 'string',
      dhcpOptionsSetDescription: 'string',
      domainName: 'string',
      clientToken: 'string',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDhcpOptionsSetResponse extends $tea.Model {
  requestId: string;
  dhcpOptionsSetId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dhcpOptionsSetId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReplaceVpcDhcpOptionsSetRequest extends $tea.Model {
  regionId: string;
  dhcpOptionsSetId: string;
  vpcId: string;
  clientToken?: string;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      vpcId: 'VpcId',
      clientToken: 'ClientToken',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dhcpOptionsSetId: 'string',
      vpcId: 'string',
      clientToken: 'string',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReplaceVpcDhcpOptionsSetResponse extends $tea.Model {
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

export class UpdateDhcpOptionsSetAttributeRequest extends $tea.Model {
  regionId: string;
  dhcpOptionsSetId: string;
  domainNameServers?: string;
  domainName?: string;
  dhcpOptionsSetName?: string;
  dhcpOptionsSetDescription?: string;
  clientToken?: string;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      domainNameServers: 'DomainNameServers',
      domainName: 'DomainName',
      dhcpOptionsSetName: 'DhcpOptionsSetName',
      dhcpOptionsSetDescription: 'DhcpOptionsSetDescription',
      clientToken: 'ClientToken',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dhcpOptionsSetId: 'string',
      domainNameServers: 'string',
      domainName: 'string',
      dhcpOptionsSetName: 'string',
      dhcpOptionsSetDescription: 'string',
      clientToken: 'string',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDhcpOptionsSetAttributeResponse extends $tea.Model {
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

export class GetDhcpOptionsSetRequest extends $tea.Model {
  regionId: string;
  dhcpOptionsSetId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dhcpOptionsSetId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDhcpOptionsSetResponse extends $tea.Model {
  requestId: string;
  dhcpOptionsSetName: string;
  dhcpOptionsSetDescription: string;
  dhcpOptionsSetId: string;
  ownerId: number;
  status: string;
  associateVpcs: GetDhcpOptionsSetResponseAssociateVpcs[];
  dhcpOptions: GetDhcpOptionsSetResponseDhcpOptions;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dhcpOptionsSetName: 'DhcpOptionsSetName',
      dhcpOptionsSetDescription: 'DhcpOptionsSetDescription',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      ownerId: 'OwnerId',
      status: 'Status',
      associateVpcs: 'AssociateVpcs',
      dhcpOptions: 'DhcpOptions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dhcpOptionsSetName: 'string',
      dhcpOptionsSetDescription: 'string',
      dhcpOptionsSetId: 'string',
      ownerId: 'number',
      status: 'string',
      associateVpcs: { 'type': 'array', 'itemType': GetDhcpOptionsSetResponseAssociateVpcs },
      dhcpOptions: GetDhcpOptionsSetResponseDhcpOptions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDhcpOptionsSetsRequest extends $tea.Model {
  regionId: string;
  nextToken?: string;
  maxResults?: number;
  domainName?: string;
  dhcpOptionsSetId?: string[];
  dhcpOptionsSetName?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      nextToken: 'NextToken',
      maxResults: 'MaxResults',
      domainName: 'DomainName',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      dhcpOptionsSetName: 'DhcpOptionsSetName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      nextToken: 'string',
      maxResults: 'number',
      domainName: 'string',
      dhcpOptionsSetId: { 'type': 'array', 'itemType': 'string' },
      dhcpOptionsSetName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDhcpOptionsSetsResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  dhcpOptionsSets: ListDhcpOptionsSetsResponseDhcpOptionsSets[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      dhcpOptionsSets: 'DhcpOptionsSets',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      dhcpOptionsSets: { 'type': 'array', 'itemType': ListDhcpOptionsSetsResponseDhcpOptionsSets },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachDhcpOptionsSetFromVpcRequest extends $tea.Model {
  regionId: string;
  dhcpOptionsSetId: string;
  vpcId: string;
  clientToken?: string;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      vpcId: 'VpcId',
      clientToken: 'ClientToken',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dhcpOptionsSetId: 'string',
      vpcId: 'string',
      clientToken: 'string',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachDhcpOptionsSetFromVpcResponse extends $tea.Model {
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

export class AttachDhcpOptionsSetToVpcRequest extends $tea.Model {
  regionId: string;
  dhcpOptionsSetId: string;
  vpcId: string;
  clientToken?: string;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      vpcId: 'VpcId',
      clientToken: 'ClientToken',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dhcpOptionsSetId: 'string',
      vpcId: 'string',
      clientToken: 'string',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachDhcpOptionsSetToVpcResponse extends $tea.Model {
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

export class DeleteDhcpOptionsSetRequest extends $tea.Model {
  regionId: string;
  dhcpOptionsSetId: string;
  clientToken?: string;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      clientToken: 'ClientToken',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dhcpOptionsSetId: 'string',
      clientToken: 'string',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDhcpOptionsSetResponse extends $tea.Model {
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

export class RenewInstanceRequest extends $tea.Model {
  regionId: string;
  instanceId: string;
  pricingCycle: string;
  duration: number;
  instanceType: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      instanceId: 'InstanceId',
      pricingCycle: 'PricingCycle',
      duration: 'Duration',
      instanceType: 'InstanceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      instanceId: 'string',
      pricingCycle: 'string',
      duration: 'number',
      instanceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RenewInstanceResponse extends $tea.Model {
  requestId: string;
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceAutoRenewAttributeRequest extends $tea.Model {
  regionId: string;
  instanceId?: string;
  instanceType: string;
  renewalStatus?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      instanceId: 'InstanceId',
      instanceType: 'InstanceType',
      renewalStatus: 'RenewalStatus',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      instanceId: 'string',
      instanceType: 'string',
      renewalStatus: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceAutoRenewAttributeResponse extends $tea.Model {
  requestId: string;
  totalCount: string;
  pageSize: string;
  pageNumber: string;
  instanceRenewAttributes: DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributes;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      instanceRenewAttributes: 'InstanceRenewAttributes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'string',
      pageSize: 'string',
      pageNumber: 'string',
      instanceRenewAttributes: DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributes,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceAutoRenewalAttributeRequest extends $tea.Model {
  regionId: string;
  instanceId: string;
  pricingCycle: string;
  duration: number;
  instanceType: string;
  clientToken?: string;
  renewalStatus?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      instanceId: 'InstanceId',
      pricingCycle: 'PricingCycle',
      duration: 'Duration',
      instanceType: 'InstanceType',
      clientToken: 'ClientToken',
      renewalStatus: 'RenewalStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      instanceId: 'string',
      pricingCycle: 'string',
      duration: 'number',
      instanceType: 'string',
      clientToken: 'string',
      renewalStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceAutoRenewalAttributeResponse extends $tea.Model {
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

export class ReleaseEipSegmentAddressRequest extends $tea.Model {
  regionId: string;
  segmentInstanceId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      segmentInstanceId: 'SegmentInstanceId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      segmentInstanceId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReleaseEipSegmentAddressResponse extends $tea.Model {
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

export class DescribeEipSegmentRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  segmentInstanceId?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      segmentInstanceId: 'SegmentInstanceId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      segmentInstanceId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipSegmentResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  eipSegments: DescribeEipSegmentResponseEipSegments;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      eipSegments: 'EipSegments',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      eipSegments: DescribeEipSegmentResponseEipSegments,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateEipSegmentAddressRequest extends $tea.Model {
  clientToken?: string;
  bandwidth?: string;
  regionId: string;
  eipMask: string;
  netmode?: string;
  internetChargeType?: string;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      bandwidth: 'Bandwidth',
      regionId: 'RegionId',
      eipMask: 'EipMask',
      netmode: 'Netmode',
      internetChargeType: 'InternetChargeType',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      bandwidth: 'string',
      regionId: 'string',
      eipMask: 'string',
      netmode: 'string',
      internetChargeType: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateEipSegmentAddressResponse extends $tea.Model {
  requestId: string;
  eipSegmentInstanceId: string;
  orderId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      eipSegmentInstanceId: 'EipSegmentInstanceId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      eipSegmentInstanceId: 'string',
      orderId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateVpcCidrBlockRequest extends $tea.Model {
  regionId: string;
  vpcId: string;
  secondaryCidrBlock?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpcId: 'VpcId',
      secondaryCidrBlock: 'SecondaryCidrBlock',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpcId: 'string',
      secondaryCidrBlock: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateVpcCidrBlockResponse extends $tea.Model {
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

export class AssociateVpcCidrBlockRequest extends $tea.Model {
  regionId: string;
  vpcId: string;
  secondaryCidrBlock?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpcId: 'VpcId',
      secondaryCidrBlock: 'SecondaryCidrBlock',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpcId: 'string',
      secondaryCidrBlock: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociateVpcCidrBlockResponse extends $tea.Model {
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

export class DescribeRouterInterfaceAttributeRequest extends $tea.Model {
  regionId: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouterInterfaceAttributeResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  routerInterfaceId: string;
  oppositeRegionId: string;
  role: string;
  spec: string;
  name: string;
  description: string;
  routerId: string;
  routerType: string;
  creationTime: string;
  gmtModified: string;
  endTime: string;
  chargeType: string;
  status: string;
  businessStatus: string;
  connectedTime: string;
  oppositeInterfaceId: string;
  oppositeInterfaceSpec: string;
  oppositeInterfaceStatus: string;
  oppositeInterfaceBusinessStatus: string;
  oppositeRouterId: string;
  oppositeRouterType: string;
  oppositeInterfaceOwnerId: string;
  accessPointId: string;
  oppositeAccessPointId: string;
  healthCheckSourceIp: string;
  healthCheckTargetIp: string;
  oppositeVpcInstanceId: string;
  bandwidth: number;
  vpcInstanceId: string;
  oppositeBandwidth: number;
  hasReservationData: string;
  reservationBandwidth: string;
  reservationInternetChargeType: string;
  reservationActiveTime: string;
  reservationOrderType: string;
  crossBorder: boolean;
  hcThreshold: number;
  hcRate: number;
  healthCheckStatus: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
      routerInterfaceId: 'RouterInterfaceId',
      oppositeRegionId: 'OppositeRegionId',
      role: 'Role',
      spec: 'Spec',
      name: 'Name',
      description: 'Description',
      routerId: 'RouterId',
      routerType: 'RouterType',
      creationTime: 'CreationTime',
      gmtModified: 'GmtModified',
      endTime: 'EndTime',
      chargeType: 'ChargeType',
      status: 'Status',
      businessStatus: 'BusinessStatus',
      connectedTime: 'ConnectedTime',
      oppositeInterfaceId: 'OppositeInterfaceId',
      oppositeInterfaceSpec: 'OppositeInterfaceSpec',
      oppositeInterfaceStatus: 'OppositeInterfaceStatus',
      oppositeInterfaceBusinessStatus: 'OppositeInterfaceBusinessStatus',
      oppositeRouterId: 'OppositeRouterId',
      oppositeRouterType: 'OppositeRouterType',
      oppositeInterfaceOwnerId: 'OppositeInterfaceOwnerId',
      accessPointId: 'AccessPointId',
      oppositeAccessPointId: 'OppositeAccessPointId',
      healthCheckSourceIp: 'HealthCheckSourceIp',
      healthCheckTargetIp: 'HealthCheckTargetIp',
      oppositeVpcInstanceId: 'OppositeVpcInstanceId',
      bandwidth: 'Bandwidth',
      vpcInstanceId: 'VpcInstanceId',
      oppositeBandwidth: 'OppositeBandwidth',
      hasReservationData: 'HasReservationData',
      reservationBandwidth: 'ReservationBandwidth',
      reservationInternetChargeType: 'ReservationInternetChargeType',
      reservationActiveTime: 'ReservationActiveTime',
      reservationOrderType: 'ReservationOrderType',
      crossBorder: 'CrossBorder',
      hcThreshold: 'HcThreshold',
      hcRate: 'HcRate',
      healthCheckStatus: 'HealthCheckStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
      routerInterfaceId: 'string',
      oppositeRegionId: 'string',
      role: 'string',
      spec: 'string',
      name: 'string',
      description: 'string',
      routerId: 'string',
      routerType: 'string',
      creationTime: 'string',
      gmtModified: 'string',
      endTime: 'string',
      chargeType: 'string',
      status: 'string',
      businessStatus: 'string',
      connectedTime: 'string',
      oppositeInterfaceId: 'string',
      oppositeInterfaceSpec: 'string',
      oppositeInterfaceStatus: 'string',
      oppositeInterfaceBusinessStatus: 'string',
      oppositeRouterId: 'string',
      oppositeRouterType: 'string',
      oppositeInterfaceOwnerId: 'string',
      accessPointId: 'string',
      oppositeAccessPointId: 'string',
      healthCheckSourceIp: 'string',
      healthCheckTargetIp: 'string',
      oppositeVpcInstanceId: 'string',
      bandwidth: 'number',
      vpcInstanceId: 'string',
      oppositeBandwidth: 'number',
      hasReservationData: 'string',
      reservationBandwidth: 'string',
      reservationInternetChargeType: 'string',
      reservationActiveTime: 'string',
      reservationOrderType: 'string',
      crossBorder: 'boolean',
      hcThreshold: 'number',
      hcRate: 'number',
      healthCheckStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteExpressCloudConnectionRequest extends $tea.Model {
  regionId: string;
  eccId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      eccId: 'EccId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      eccId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteExpressCloudConnectionResponse extends $tea.Model {
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

export class CancelExpressCloudConnectionRequest extends $tea.Model {
  regionId: string;
  eccId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      eccId: 'EccId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      eccId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelExpressCloudConnectionResponse extends $tea.Model {
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

export class DeletionProtectionRequest extends $tea.Model {
  protectionEnable: boolean;
  type: string;
  instanceId: string;
  clientToken?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      protectionEnable: 'ProtectionEnable',
      type: 'Type',
      instanceId: 'InstanceId',
      clientToken: 'ClientToken',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      protectionEnable: 'boolean',
      type: 'string',
      instanceId: 'string',
      clientToken: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeletionProtectionResponse extends $tea.Model {
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

export class DescribeEipGatewayInfoRequest extends $tea.Model {
  instanceId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipGatewayInfoResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  eipInfos: DescribeEipGatewayInfoResponseEipInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      eipInfos: 'EipInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      eipInfos: DescribeEipGatewayInfoResponseEipInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyBgpPeerAttributeRequest extends $tea.Model {
  regionId: string;
  bgpPeerId: string;
  bgpGroupId?: string;
  peerIpAddress?: string;
  enableBfd?: boolean;
  clientToken?: string;
  bfdMultiHop?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bgpPeerId: 'BgpPeerId',
      bgpGroupId: 'BgpGroupId',
      peerIpAddress: 'PeerIpAddress',
      enableBfd: 'EnableBfd',
      clientToken: 'ClientToken',
      bfdMultiHop: 'BfdMultiHop',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bgpPeerId: 'string',
      bgpGroupId: 'string',
      peerIpAddress: 'string',
      enableBfd: 'boolean',
      clientToken: 'string',
      bfdMultiHop: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyBgpPeerAttributeResponse extends $tea.Model {
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

export class DescribeVpnSslServerLogsRequest extends $tea.Model {
  regionId: string;
  vpnSslServerId: string;
  sslVpnClientCertId?: string;
  from?: number;
  to?: number;
  minutePeriod?: number;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpnSslServerId: 'VpnSslServerId',
      sslVpnClientCertId: 'SslVpnClientCertId',
      from: 'From',
      to: 'To',
      minutePeriod: 'MinutePeriod',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpnSslServerId: 'string',
      sslVpnClientCertId: 'string',
      from: 'number',
      to: 'number',
      minutePeriod: 'number',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnSslServerLogsResponse extends $tea.Model {
  requestId: string;
  count: number;
  isCompleted: boolean;
  pageNumber: number;
  pageSize: number;
  data: DescribeVpnSslServerLogsResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      count: 'Count',
      isCompleted: 'IsCompleted',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      count: 'number',
      isCompleted: 'boolean',
      pageNumber: 'number',
      pageSize: 'number',
      data: DescribeVpnSslServerLogsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyExpressCloudConnectionBandwidthRequest extends $tea.Model {
  regionId: string;
  bandwidth?: string;
  eccId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidth: 'Bandwidth',
      eccId: 'EccId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidth: 'string',
      eccId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyExpressCloudConnectionBandwidthResponse extends $tea.Model {
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

export class ModifyExpressCloudConnectionAttributeRequest extends $tea.Model {
  description?: string;
  regionId: string;
  name?: string;
  eccId: string;
  bgpAs?: string;
  peIp?: string;
  ceIp?: string;
  static names(): { [key: string]: string } {
    return {
      description: 'Description',
      regionId: 'RegionId',
      name: 'Name',
      eccId: 'EccId',
      bgpAs: 'BgpAs',
      peIp: 'PeIp',
      ceIp: 'CeIp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      description: 'string',
      regionId: 'string',
      name: 'string',
      eccId: 'string',
      bgpAs: 'string',
      peIp: 'string',
      ceIp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyExpressCloudConnectionAttributeResponse extends $tea.Model {
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

export class DescribeExpressCloudConnectionsRequest extends $tea.Model {
  regionId: string;
  pageNumber?: number;
  pageSize?: number;
  filter?: DescribeExpressCloudConnectionsRequestFilter[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      filter: 'Filter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      filter: { 'type': 'array', 'itemType': DescribeExpressCloudConnectionsRequestFilter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExpressCloudConnectionsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  expressCloudConnectionSet: DescribeExpressCloudConnectionsResponseExpressCloudConnectionSet;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      expressCloudConnectionSet: 'ExpressCloudConnectionSet',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      expressCloudConnectionSet: DescribeExpressCloudConnectionsResponseExpressCloudConnectionSet,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateExpressCloudConnectionRequest extends $tea.Model {
  regionId: string;
  name?: string;
  description?: string;
  peerCity?: string;
  peerLocation: string;
  idcSP: string;
  portType?: string;
  bandwidth: number;
  contactTel?: string;
  contactMail?: string;
  IDCardNo?: string;
  redundantEccId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      name: 'Name',
      description: 'Description',
      peerCity: 'PeerCity',
      peerLocation: 'PeerLocation',
      idcSP: 'IdcSP',
      portType: 'PortType',
      bandwidth: 'Bandwidth',
      contactTel: 'ContactTel',
      contactMail: 'ContactMail',
      IDCardNo: 'IDCardNo',
      redundantEccId: 'RedundantEccId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      name: 'string',
      description: 'string',
      peerCity: 'string',
      peerLocation: 'string',
      idcSP: 'string',
      portType: 'string',
      bandwidth: 'number',
      contactTel: 'string',
      contactMail: 'string',
      IDCardNo: 'string',
      redundantEccId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateExpressCloudConnectionResponse extends $tea.Model {
  requestId: string;
  eccId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      eccId: 'EccId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      eccId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateNetworkAclEntriesRequest extends $tea.Model {
  ingressAclEntries?: UpdateNetworkAclEntriesRequestIngressAclEntries[];
  egressAclEntries?: UpdateNetworkAclEntriesRequestEgressAclEntries[];
  updateIngressAclEntries?: boolean;
  updateEgressAclEntries?: boolean;
  networkAclId: string;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      ingressAclEntries: 'IngressAclEntries',
      egressAclEntries: 'EgressAclEntries',
      updateIngressAclEntries: 'UpdateIngressAclEntries',
      updateEgressAclEntries: 'UpdateEgressAclEntries',
      networkAclId: 'NetworkAclId',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ingressAclEntries: { 'type': 'array', 'itemType': UpdateNetworkAclEntriesRequestIngressAclEntries },
      egressAclEntries: { 'type': 'array', 'itemType': UpdateNetworkAclEntriesRequestEgressAclEntries },
      updateIngressAclEntries: 'boolean',
      updateEgressAclEntries: 'boolean',
      networkAclId: 'string',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateNetworkAclEntriesResponse extends $tea.Model {
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

export class UnassociateNetworkAclRequest extends $tea.Model {
  resource?: UnassociateNetworkAclRequestResource[];
  networkAclId: string;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
      networkAclId: 'NetworkAclId',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': UnassociateNetworkAclRequestResource },
      networkAclId: 'string',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateNetworkAclResponse extends $tea.Model {
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

export class ModifyNetworkAclAttributesRequest extends $tea.Model {
  networkAclId: string;
  networkAclName?: string;
  description?: string;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      networkAclId: 'NetworkAclId',
      networkAclName: 'NetworkAclName',
      description: 'Description',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclId: 'string',
      networkAclName: 'string',
      description: 'string',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyNetworkAclAttributesResponse extends $tea.Model {
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

export class DescribeNetworkAclsRequest extends $tea.Model {
  networkAclId?: string;
  networkAclName?: string;
  vpcId?: string;
  resourceType?: string;
  resourceId?: string;
  pageNumber?: number;
  pageSize?: number;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      networkAclId: 'NetworkAclId',
      networkAclName: 'NetworkAclName',
      vpcId: 'VpcId',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclId: 'string',
      networkAclName: 'string',
      vpcId: 'string',
      resourceType: 'string',
      resourceId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclsResponse extends $tea.Model {
  requestId: string;
  totalCount: string;
  pageNumber: string;
  pageSize: string;
  networkAcls: DescribeNetworkAclsResponseNetworkAcls;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      networkAcls: 'NetworkAcls',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'string',
      pageNumber: 'string',
      pageSize: 'string',
      networkAcls: DescribeNetworkAclsResponseNetworkAcls,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclAttributesRequest extends $tea.Model {
  networkAclId: string;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      networkAclId: 'NetworkAclId',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclId: 'string',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclAttributesResponse extends $tea.Model {
  requestId: string;
  networkAclAttribute: DescribeNetworkAclAttributesResponseNetworkAclAttribute;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      networkAclAttribute: 'NetworkAclAttribute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      networkAclAttribute: DescribeNetworkAclAttributesResponseNetworkAclAttribute,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteNetworkAclRequest extends $tea.Model {
  networkAclId: string;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      networkAclId: 'NetworkAclId',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclId: 'string',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteNetworkAclResponse extends $tea.Model {
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

export class CreateNetworkAclRequest extends $tea.Model {
  vpcId: string;
  networkAclName?: string;
  description?: string;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      networkAclName: 'NetworkAclName',
      description: 'Description',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      networkAclName: 'string',
      description: 'string',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNetworkAclResponse extends $tea.Model {
  requestId: string;
  networkAclId: string;
  networkAclAttribute: CreateNetworkAclResponseNetworkAclAttribute;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      networkAclId: 'NetworkAclId',
      networkAclAttribute: 'NetworkAclAttribute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      networkAclId: 'string',
      networkAclAttribute: CreateNetworkAclResponseNetworkAclAttribute,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CopyNetworkAclEntriesRequest extends $tea.Model {
  regionId: string;
  networkAclId: string;
  sourceNetworkAclId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      networkAclId: 'NetworkAclId',
      sourceNetworkAclId: 'SourceNetworkAclId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      networkAclId: 'string',
      sourceNetworkAclId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CopyNetworkAclEntriesResponse extends $tea.Model {
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

export class AssociateNetworkAclRequest extends $tea.Model {
  resource?: AssociateNetworkAclRequestResource[];
  networkAclId: string;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
      networkAclId: 'NetworkAclId',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': AssociateNetworkAclRequestResource },
      networkAclId: 'string',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociateNetworkAclResponse extends $tea.Model {
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

export class ModifyCommonBandwidthPackageIpBandwidthRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  eipId: string;
  bandwidth: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      eipId: 'EipId',
      bandwidth: 'Bandwidth',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      eipId: 'string',
      bandwidth: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCommonBandwidthPackageIpBandwidthResponse extends $tea.Model {
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

export class CancelCommonBandwidthPackageIpBandwidthRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  eipId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      eipId: 'EipId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      eipId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelCommonBandwidthPackageIpBandwidthResponse extends $tea.Model {
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

export class CreateVpnPbrRouteEntryRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnGatewayId: string;
  routeSource: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  publishVpc: boolean;
  description?: string;
  overlayMode?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnGatewayId: 'VpnGatewayId',
      routeSource: 'RouteSource',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      publishVpc: 'PublishVpc',
      description: 'Description',
      overlayMode: 'OverlayMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnGatewayId: 'string',
      routeSource: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      publishVpc: 'boolean',
      description: 'string',
      overlayMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVpnPbrRouteEntryResponse extends $tea.Model {
  requestId: string;
  vpnInstanceId: string;
  routeSource: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  overlayMode: string;
  description: string;
  state: string;
  createTime: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpnInstanceId: 'VpnInstanceId',
      routeSource: 'RouteSource',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      overlayMode: 'OverlayMode',
      description: 'Description',
      state: 'State',
      createTime: 'CreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpnInstanceId: 'string',
      routeSource: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      overlayMode: 'string',
      description: 'string',
      state: 'string',
      createTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVpnRouteEntryRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnGatewayId: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  publishVpc: boolean;
  description?: string;
  overlayMode?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnGatewayId: 'VpnGatewayId',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      publishVpc: 'PublishVpc',
      description: 'Description',
      overlayMode: 'OverlayMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnGatewayId: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      publishVpc: 'boolean',
      description: 'string',
      overlayMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVpnRouteEntryResponse extends $tea.Model {
  requestId: string;
  vpnInstanceId: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  overlayMode: string;
  description: string;
  state: string;
  createTime: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpnInstanceId: 'VpnInstanceId',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      overlayMode: 'OverlayMode',
      description: 'Description',
      state: 'State',
      createTime: 'CreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpnInstanceId: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      overlayMode: 'string',
      description: 'string',
      state: 'string',
      createTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVpnPbrRouteEntryRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnGatewayId: string;
  routeSource: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  overlayMode?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnGatewayId: 'VpnGatewayId',
      routeSource: 'RouteSource',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      overlayMode: 'OverlayMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnGatewayId: 'string',
      routeSource: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      overlayMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVpnPbrRouteEntryResponse extends $tea.Model {
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

export class DeleteVpnRouteEntryRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnGatewayId: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  overlayMode?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnGatewayId: 'VpnGatewayId',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      overlayMode: 'OverlayMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnGatewayId: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      overlayMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVpnRouteEntryResponse extends $tea.Model {
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

export class DescribeVpnRouteEntriesRequest extends $tea.Model {
  regionId: string;
  vpnGatewayId: string;
  pageNumber?: number;
  pageSize?: number;
  routeEntryType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpnGatewayId: 'VpnGatewayId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      routeEntryType: 'RouteEntryType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpnGatewayId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      routeEntryType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnRouteEntriesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  vpnRouteEntries: DescribeVpnRouteEntriesResponseVpnRouteEntries;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vpnRouteEntries: 'VpnRouteEntries',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      vpnRouteEntries: DescribeVpnRouteEntriesResponseVpnRouteEntries,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnPbrRouteEntriesRequest extends $tea.Model {
  regionId: string;
  vpnGatewayId: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpnGatewayId: 'VpnGatewayId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpnGatewayId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnPbrRouteEntriesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  vpnPbrRouteEntries: DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntries;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vpnPbrRouteEntries: 'VpnPbrRouteEntries',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      vpnPbrRouteEntries: DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntries,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PublishVpnRouteEntryRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnGatewayId: string;
  routeDest: string;
  nextHop: string;
  routeType: string;
  publishVpc: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnGatewayId: 'VpnGatewayId',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      routeType: 'RouteType',
      publishVpc: 'PublishVpc',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnGatewayId: 'string',
      routeDest: 'string',
      nextHop: 'string',
      routeType: 'string',
      publishVpc: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PublishVpnRouteEntryResponse extends $tea.Model {
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

export class ModifyVpnRouteEntryWeightRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnGatewayId: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  newWeight: number;
  overlayMode?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnGatewayId: 'VpnGatewayId',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      newWeight: 'NewWeight',
      overlayMode: 'OverlayMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnGatewayId: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      newWeight: 'number',
      overlayMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpnRouteEntryWeightResponse extends $tea.Model {
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

export class ModifyVpnPbrRouteEntryWeightRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnGatewayId: string;
  routeSource: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  newWeight: number;
  overlayMode?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnGatewayId: 'VpnGatewayId',
      routeSource: 'RouteSource',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      newWeight: 'NewWeight',
      overlayMode: 'OverlayMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnGatewayId: 'string',
      routeSource: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      newWeight: 'number',
      overlayMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpnPbrRouteEntryWeightResponse extends $tea.Model {
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

export class DescribePhysicalConnectionLOARequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePhysicalConnectionLOAResponse extends $tea.Model {
  requestId: string;
  physicalConnectionLOAType: DescribePhysicalConnectionLOAResponsePhysicalConnectionLOAType;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      physicalConnectionLOAType: 'PhysicalConnectionLOAType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      physicalConnectionLOAType: DescribePhysicalConnectionLOAResponsePhysicalConnectionLOAType,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePhysicalConnectionSetupOrderRequest extends $tea.Model {
  regionId: string;
  accessPointId: string;
  lineOperator: string;
  portType?: string;
  redundantPhysicalConnectionId?: string;
  autoPay?: boolean;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      accessPointId: 'AccessPointId',
      lineOperator: 'LineOperator',
      portType: 'PortType',
      redundantPhysicalConnectionId: 'RedundantPhysicalConnectionId',
      autoPay: 'AutoPay',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      accessPointId: 'string',
      lineOperator: 'string',
      portType: 'string',
      redundantPhysicalConnectionId: 'string',
      autoPay: 'boolean',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePhysicalConnectionSetupOrderResponse extends $tea.Model {
  requestId: string;
  orderId: string;
  physicalConnectionId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
      physicalConnectionId: 'PhysicalConnectionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'string',
      physicalConnectionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePhysicalConnectionOccupancyOrderRequest extends $tea.Model {
  regionId: string;
  physicalConnectionId: string;
  period?: number;
  instanceChargeType?: string;
  autoPay?: boolean;
  pricingCycle?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      physicalConnectionId: 'PhysicalConnectionId',
      period: 'Period',
      instanceChargeType: 'InstanceChargeType',
      autoPay: 'AutoPay',
      pricingCycle: 'PricingCycle',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      physicalConnectionId: 'string',
      period: 'number',
      instanceChargeType: 'string',
      autoPay: 'boolean',
      pricingCycle: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePhysicalConnectionOccupancyOrderResponse extends $tea.Model {
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

export class CompletePhysicalConnectionLOARequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  instanceId: string;
  lineCode: string;
  lineLabel: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      instanceId: 'InstanceId',
      lineCode: 'LineCode',
      lineLabel: 'LineLabel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      instanceId: 'string',
      lineCode: 'string',
      lineLabel: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CompletePhysicalConnectionLOAResponse extends $tea.Model {
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

export class ApplyPhysicalConnectionLOARequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  bandwidth?: number;
  peerLocation?: string;
  instanceId: string;
  companyName: string;
  lineType: string;
  si: string;
  constructionTime: string;
  PMInfo?: ApplyPhysicalConnectionLOARequestPMInfo[];
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      bandwidth: 'Bandwidth',
      peerLocation: 'PeerLocation',
      instanceId: 'InstanceId',
      companyName: 'CompanyName',
      lineType: 'LineType',
      si: 'Si',
      constructionTime: 'ConstructionTime',
      PMInfo: 'PMInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      bandwidth: 'number',
      peerLocation: 'string',
      instanceId: 'string',
      companyName: 'string',
      lineType: 'string',
      si: 'string',
      constructionTime: 'string',
      PMInfo: { 'type': 'array', 'itemType': ApplyPhysicalConnectionLOARequestPMInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyPhysicalConnectionLOAResponse extends $tea.Model {
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

export class ConvertBandwidthPackageRequest extends $tea.Model {
  bandwidthPackageId: string;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      bandwidthPackageId: 'BandwidthPackageId',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bandwidthPackageId: 'string',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ConvertBandwidthPackageResponse extends $tea.Model {
  requestId: string;
  convertInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      convertInstanceId: 'ConvertInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      convertInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyRouteEntryRequest extends $tea.Model {
  regionId: string;
  routeEntryName?: string;
  routeEntryId: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routeEntryName: 'RouteEntryName',
      routeEntryId: 'RouteEntryId',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routeEntryName: 'string',
      routeEntryId: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyRouteEntryResponse extends $tea.Model {
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

export class DescribeRouteEntryListRequest extends $tea.Model {
  regionId: string;
  routeTableId: string;
  routeEntryId?: string;
  destinationCidrBlock?: string;
  routeEntryName?: string;
  ipVersion?: string;
  routeEntryType?: string;
  nextHopId?: string;
  nextHopType?: string;
  maxResult?: number;
  nextToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routeTableId: 'RouteTableId',
      routeEntryId: 'RouteEntryId',
      destinationCidrBlock: 'DestinationCidrBlock',
      routeEntryName: 'RouteEntryName',
      ipVersion: 'IpVersion',
      routeEntryType: 'RouteEntryType',
      nextHopId: 'NextHopId',
      nextHopType: 'NextHopType',
      maxResult: 'MaxResult',
      nextToken: 'NextToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routeTableId: 'string',
      routeEntryId: 'string',
      destinationCidrBlock: 'string',
      routeEntryName: 'string',
      ipVersion: 'string',
      routeEntryType: 'string',
      nextHopId: 'string',
      nextHopType: 'string',
      maxResult: 'number',
      nextToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteEntryListResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  routeEntrys: DescribeRouteEntryListResponseRouteEntrys;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      routeEntrys: 'RouteEntrys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      routeEntrys: DescribeRouteEntryListResponseRouteEntrys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateIPv6TranslatorAclListRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  aclName: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      aclName: 'AclName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      aclName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateIPv6TranslatorAclListResponse extends $tea.Model {
  requestId: string;
  aclId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      aclId: 'AclId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      aclId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIPv6TranslatorAclListRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  aclId: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      aclId: 'AclId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      aclId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIPv6TranslatorAclListResponse extends $tea.Model {
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

export class AddIPv6TranslatorAclListEntryRequest extends $tea.Model {
  regionId: string;
  aclId: string;
  aclEntryIp: string;
  aclEntryComment?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      aclId: 'AclId',
      aclEntryIp: 'AclEntryIp',
      aclEntryComment: 'AclEntryComment',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      aclId: 'string',
      aclEntryIp: 'string',
      aclEntryComment: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddIPv6TranslatorAclListEntryResponse extends $tea.Model {
  requestId: string;
  aclEntryId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      aclEntryId: 'AclEntryId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      aclEntryId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorAclListsRequest extends $tea.Model {
  regionId: string;
  aclId?: string;
  pageNumber?: number;
  pageSize?: number;
  aclName?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      aclId: 'AclId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      aclName: 'AclName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      aclId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      aclName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorAclListsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  ipv6TranslatorAcls: DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAcls;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      ipv6TranslatorAcls: 'Ipv6TranslatorAcls',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      ipv6TranslatorAcls: DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAcls,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIPv6TranslatorAclAttributeRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  aclId: string;
  aclName: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      aclId: 'AclId',
      aclName: 'AclName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      aclId: 'string',
      aclName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIPv6TranslatorAclAttributeResponse extends $tea.Model {
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

export class RemoveIPv6TranslatorAclListEntryRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  aclId: string;
  aclEntryId: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      aclId: 'AclId',
      aclEntryId: 'AclEntryId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      aclId: 'string',
      aclEntryId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveIPv6TranslatorAclListEntryResponse extends $tea.Model {
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

export class DescribeIPv6TranslatorAclListAttributesRequest extends $tea.Model {
  regionId: string;
  aclId: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      aclId: 'AclId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      aclId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorAclListAttributesResponse extends $tea.Model {
  requestId: string;
  aclId: string;
  aclName: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  aclEntries: DescribeIPv6TranslatorAclListAttributesResponseAclEntries;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      aclId: 'AclId',
      aclName: 'AclName',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      aclEntries: 'AclEntries',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      aclId: 'string',
      aclName: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      aclEntries: DescribeIPv6TranslatorAclListAttributesResponseAclEntries,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIPv6TranslatorAclListEntryRequest extends $tea.Model {
  regionId: string;
  aclId: string;
  aclEntryId: string;
  aclEntryComment: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      aclId: 'AclId',
      aclEntryId: 'AclEntryId',
      aclEntryComment: 'AclEntryComment',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      aclId: 'string',
      aclEntryId: 'string',
      aclEntryComment: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIPv6TranslatorAclListEntryResponse extends $tea.Model {
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

export class UnTagResourcesRequest extends $tea.Model {
  resourceType: string;
  resourceId: string[];
  tagKey?: string[];
  regionId: string;
  all?: boolean;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      tagKey: 'TagKey',
      regionId: 'RegionId',
      all: 'All',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      tagKey: { 'type': 'array', 'itemType': 'string' },
      regionId: 'string',
      all: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnTagResourcesResponse extends $tea.Model {
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

export class TagResourcesRequest extends $tea.Model {
  resourceType: string;
  resourceId: string[];
  tag: TagResourcesRequestTag[];
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      tag: 'Tag',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      tag: { 'type': 'array', 'itemType': TagResourcesRequestTag },
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesResponse extends $tea.Model {
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

export class ListTagResourcesRequest extends $tea.Model {
  resourceType: string;
  resourceId?: string[];
  tag?: ListTagResourcesRequestTag[];
  regionId: string;
  nextToken?: string;
  maxResults?: number;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      tag: 'Tag',
      regionId: 'RegionId',
      nextToken: 'NextToken',
      maxResults: 'MaxResults',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      tag: { 'type': 'array', 'itemType': ListTagResourcesRequestTag },
      regionId: 'string',
      nextToken: 'string',
      maxResults: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  tagResources: ListTagResourcesResponseTagResources;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      tagResources: 'TagResources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      tagResources: ListTagResourcesResponseTagResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIpv6InternetBandwidthRequest extends $tea.Model {
  regionId: string;
  ipv6AddressId?: string;
  ipv6InternetBandwidthId?: string;
  bandwidth: number;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6AddressId: 'Ipv6AddressId',
      ipv6InternetBandwidthId: 'Ipv6InternetBandwidthId',
      bandwidth: 'Bandwidth',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6AddressId: 'string',
      ipv6InternetBandwidthId: 'string',
      bandwidth: 'number',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIpv6InternetBandwidthResponse extends $tea.Model {
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

export class ModifyIpv6GatewaySpecRequest extends $tea.Model {
  regionId: string;
  ipv6GatewayId: string;
  spec: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
      spec: 'Spec',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6GatewayId: 'string',
      spec: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIpv6GatewaySpecResponse extends $tea.Model {
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

export class ModifyIpv6GatewayAttributeRequest extends $tea.Model {
  regionId: string;
  ipv6GatewayId: string;
  name?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6GatewayId: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIpv6GatewayAttributeResponse extends $tea.Model {
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

export class ModifyIpv6AddressAttributeRequest extends $tea.Model {
  regionId: string;
  ipv6AddressId: string;
  name?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6AddressId: 'Ipv6AddressId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6AddressId: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIpv6AddressAttributeResponse extends $tea.Model {
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

export class DescribeIpv6GatewaysRequest extends $tea.Model {
  regionId: string;
  ipv6GatewayId?: string;
  vpcId?: string;
  name?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
      vpcId: 'VpcId',
      name: 'Name',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6GatewayId: 'string',
      vpcId: 'string',
      name: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6GatewaysResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  ipv6Gateways: DescribeIpv6GatewaysResponseIpv6Gateways;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      ipv6Gateways: 'Ipv6Gateways',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      ipv6Gateways: DescribeIpv6GatewaysResponseIpv6Gateways,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6GatewayAttributeRequest extends $tea.Model {
  regionId: string;
  ipv6GatewayId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6GatewayId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6GatewayAttributeResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  ipv6GatewayId: string;
  vpcId: string;
  status: string;
  businessStatus: string;
  name: string;
  description: string;
  spec: string;
  instanceChargeType: string;
  expiredTime: string;
  creationTime: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
      vpcId: 'VpcId',
      status: 'Status',
      businessStatus: 'BusinessStatus',
      name: 'Name',
      description: 'Description',
      spec: 'Spec',
      instanceChargeType: 'InstanceChargeType',
      expiredTime: 'ExpiredTime',
      creationTime: 'CreationTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      ipv6GatewayId: 'string',
      vpcId: 'string',
      status: 'string',
      businessStatus: 'string',
      name: 'string',
      description: 'string',
      spec: 'string',
      instanceChargeType: 'string',
      expiredTime: 'string',
      creationTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6EgressOnlyRulesRequest extends $tea.Model {
  regionId: string;
  ipv6GatewayId: string;
  ipv6EgressOnlyRuleId?: string;
  name?: string;
  instanceType?: string;
  instanceId?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
      ipv6EgressOnlyRuleId: 'Ipv6EgressOnlyRuleId',
      name: 'Name',
      instanceType: 'InstanceType',
      instanceId: 'InstanceId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6GatewayId: 'string',
      ipv6EgressOnlyRuleId: 'string',
      name: 'string',
      instanceType: 'string',
      instanceId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6EgressOnlyRulesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  ipv6EgressOnlyRules: DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRules;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      ipv6EgressOnlyRules: 'Ipv6EgressOnlyRules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      ipv6EgressOnlyRules: DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRules,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6AddressesRequest extends $tea.Model {
  regionId: string;
  ipv6AddressId?: string;
  ipv6Address?: string;
  name?: string;
  associatedInstanceId?: string;
  associatedInstanceType?: string;
  networkType?: string;
  vpcId?: string;
  vSwitchId?: string;
  ipv6InternetBandwidthId?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6AddressId: 'Ipv6AddressId',
      ipv6Address: 'Ipv6Address',
      name: 'Name',
      associatedInstanceId: 'AssociatedInstanceId',
      associatedInstanceType: 'AssociatedInstanceType',
      networkType: 'NetworkType',
      vpcId: 'VpcId',
      vSwitchId: 'VSwitchId',
      ipv6InternetBandwidthId: 'Ipv6InternetBandwidthId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6AddressId: 'string',
      ipv6Address: 'string',
      name: 'string',
      associatedInstanceId: 'string',
      associatedInstanceType: 'string',
      networkType: 'string',
      vpcId: 'string',
      vSwitchId: 'string',
      ipv6InternetBandwidthId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6AddressesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  ipv6Addresses: DescribeIpv6AddressesResponseIpv6Addresses;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      ipv6Addresses: 'Ipv6Addresses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      ipv6Addresses: DescribeIpv6AddressesResponseIpv6Addresses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIpv6InternetBandwidthRequest extends $tea.Model {
  regionId: string;
  ipv6AddressId?: string;
  ipv6InternetBandwidthId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6AddressId: 'Ipv6AddressId',
      ipv6InternetBandwidthId: 'Ipv6InternetBandwidthId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6AddressId: 'string',
      ipv6InternetBandwidthId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIpv6InternetBandwidthResponse extends $tea.Model {
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

export class DeleteIpv6GatewayRequest extends $tea.Model {
  regionId: string;
  ipv6GatewayId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6GatewayId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIpv6GatewayResponse extends $tea.Model {
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

export class DeleteIpv6EgressOnlyRuleRequest extends $tea.Model {
  regionId: string;
  ipv6EgressOnlyRuleId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6EgressOnlyRuleId: 'Ipv6EgressOnlyRuleId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6EgressOnlyRuleId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIpv6EgressOnlyRuleResponse extends $tea.Model {
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

export class CreateIpv6GatewayRequest extends $tea.Model {
  regionId: string;
  vpcId: string;
  spec?: string;
  name?: string;
  description?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpcId: 'VpcId',
      spec: 'Spec',
      name: 'Name',
      description: 'Description',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpcId: 'string',
      spec: 'string',
      name: 'string',
      description: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateIpv6GatewayResponse extends $tea.Model {
  requestId: string;
  ipv6GatewayId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      ipv6GatewayId: 'Ipv6GatewayId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      ipv6GatewayId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateIpv6EgressOnlyRuleRequest extends $tea.Model {
  regionId: string;
  ipv6GatewayId: string;
  instanceId: string;
  instanceType?: string;
  name?: string;
  description?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
      instanceId: 'InstanceId',
      instanceType: 'InstanceType',
      name: 'Name',
      description: 'Description',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6GatewayId: 'string',
      instanceId: 'string',
      instanceType: 'string',
      name: 'string',
      description: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateIpv6EgressOnlyRuleResponse extends $tea.Model {
  requestId: string;
  ipv6EgressRuleId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      ipv6EgressRuleId: 'Ipv6EgressRuleId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      ipv6EgressRuleId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateIpv6InternetBandwidthRequest extends $tea.Model {
  regionId: string;
  ipv6GatewayId: string;
  ipv6AddressId: string;
  internetChargeType?: string;
  bandwidth: number;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
      ipv6AddressId: 'Ipv6AddressId',
      internetChargeType: 'InternetChargeType',
      bandwidth: 'Bandwidth',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6GatewayId: 'string',
      ipv6AddressId: 'string',
      internetChargeType: 'string',
      bandwidth: 'number',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateIpv6InternetBandwidthResponse extends $tea.Model {
  requestId: string;
  ipv6AddressId: string;
  internetBandwidthId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      ipv6AddressId: 'Ipv6AddressId',
      internetBandwidthId: 'InternetBandwidthId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      ipv6AddressId: 'string',
      internetBandwidthId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteExpressConnectRequest extends $tea.Model {
  regionId: string;
  routerInterfaceId: string;
  force?: boolean;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routerInterfaceId: 'RouterInterfaceId',
      force: 'Force',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routerInterfaceId: 'string',
      force: 'boolean',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteExpressConnectResponse extends $tea.Model {
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

export class CreateIPv6TranslatorRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  name?: string;
  spec?: string;
  payType?: string;
  pricingCycle?: string;
  duration?: number;
  autoPay?: boolean;
  bandwidth?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      name: 'Name',
      spec: 'Spec',
      payType: 'PayType',
      pricingCycle: 'PricingCycle',
      duration: 'Duration',
      autoPay: 'AutoPay',
      bandwidth: 'Bandwidth',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      name: 'string',
      spec: 'string',
      payType: 'string',
      pricingCycle: 'string',
      duration: 'number',
      autoPay: 'boolean',
      bandwidth: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateIPv6TranslatorResponse extends $tea.Model {
  requestId: string;
  ipv6TranslatorId: string;
  name: string;
  spec: string;
  orderId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      ipv6TranslatorId: 'Ipv6TranslatorId',
      name: 'Name',
      spec: 'Spec',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      ipv6TranslatorId: 'string',
      name: 'string',
      spec: 'string',
      orderId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorsRequest extends $tea.Model {
  regionId: string;
  ipv6TranslatorId?: string;
  name?: string;
  spec?: string;
  status?: string;
  allocateIpv6Addr?: string;
  allocateIpv4Addr?: string;
  payType?: string;
  pageNumber?: number;
  pageSize?: number;
  businessStatus?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6TranslatorId: 'Ipv6TranslatorId',
      name: 'Name',
      spec: 'Spec',
      status: 'Status',
      allocateIpv6Addr: 'AllocateIpv6Addr',
      allocateIpv4Addr: 'AllocateIpv4Addr',
      payType: 'PayType',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      businessStatus: 'BusinessStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6TranslatorId: 'string',
      name: 'string',
      spec: 'string',
      status: 'string',
      allocateIpv6Addr: 'string',
      allocateIpv4Addr: 'string',
      payType: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      businessStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  ipv6Translators: DescribeIPv6TranslatorsResponseIpv6Translators;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      ipv6Translators: 'Ipv6Translators',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      ipv6Translators: DescribeIPv6TranslatorsResponseIpv6Translators,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIPv6TranslatorAttributeRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  ipv6TranslatorId: string;
  name?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      ipv6TranslatorId: 'Ipv6TranslatorId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      ipv6TranslatorId: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIPv6TranslatorAttributeResponse extends $tea.Model {
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

export class ModifyIPv6TranslatorBandwidthRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  ipv6TranslatorId: string;
  bandwidth: number;
  autoPay?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      ipv6TranslatorId: 'Ipv6TranslatorId',
      bandwidth: 'Bandwidth',
      autoPay: 'AutoPay',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      ipv6TranslatorId: 'string',
      bandwidth: 'number',
      autoPay: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIPv6TranslatorBandwidthResponse extends $tea.Model {
  requestId: string;
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateIPv6TranslatorEntryRequest extends $tea.Model {
  regionId: string;
  ipv6TranslatorId: string;
  entryName?: string;
  entryDescription?: string;
  allocateIpv6Port: number;
  backendIpv4Addr: string;
  backendIpv4Port: number;
  transProtocol: string;
  entryBandwidth?: number;
  aclStatus?: string;
  aclType?: string;
  aclId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6TranslatorId: 'Ipv6TranslatorId',
      entryName: 'EntryName',
      entryDescription: 'EntryDescription',
      allocateIpv6Port: 'AllocateIpv6Port',
      backendIpv4Addr: 'BackendIpv4Addr',
      backendIpv4Port: 'BackendIpv4Port',
      transProtocol: 'TransProtocol',
      entryBandwidth: 'EntryBandwidth',
      aclStatus: 'AclStatus',
      aclType: 'AclType',
      aclId: 'AclId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6TranslatorId: 'string',
      entryName: 'string',
      entryDescription: 'string',
      allocateIpv6Port: 'number',
      backendIpv4Addr: 'string',
      backendIpv4Port: 'number',
      transProtocol: 'string',
      entryBandwidth: 'number',
      aclStatus: 'string',
      aclType: 'string',
      aclId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateIPv6TranslatorEntryResponse extends $tea.Model {
  requestId: string;
  ipv6TranslatorEntryId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      ipv6TranslatorEntryId: 'Ipv6TranslatorEntryId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      ipv6TranslatorEntryId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIPv6TranslatorEntryRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  ipv6TranslatorEntryId?: string;
  ipv6TranslatorId?: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      ipv6TranslatorEntryId: 'Ipv6TranslatorEntryId',
      ipv6TranslatorId: 'Ipv6TranslatorId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      ipv6TranslatorEntryId: 'string',
      ipv6TranslatorId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIPv6TranslatorEntryResponse extends $tea.Model {
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

export class ModifyIPv6TranslatorEntryRequest extends $tea.Model {
  regionId: string;
  ipv6TranslatorEntryId: string;
  entryName?: string;
  entryDescription?: string;
  allocateIpv6Port?: number;
  backendIpv4Addr?: string;
  backendIpv4Port?: number;
  transProtocol?: string;
  entryBandwidth?: number;
  aclStatus?: string;
  aclType?: string;
  aclId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6TranslatorEntryId: 'Ipv6TranslatorEntryId',
      entryName: 'EntryName',
      entryDescription: 'EntryDescription',
      allocateIpv6Port: 'AllocateIpv6Port',
      backendIpv4Addr: 'BackendIpv4Addr',
      backendIpv4Port: 'BackendIpv4Port',
      transProtocol: 'TransProtocol',
      entryBandwidth: 'EntryBandwidth',
      aclStatus: 'AclStatus',
      aclType: 'AclType',
      aclId: 'AclId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6TranslatorEntryId: 'string',
      entryName: 'string',
      entryDescription: 'string',
      allocateIpv6Port: 'number',
      backendIpv4Addr: 'string',
      backendIpv4Port: 'number',
      transProtocol: 'string',
      entryBandwidth: 'number',
      aclStatus: 'string',
      aclType: 'string',
      aclId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyIPv6TranslatorEntryResponse extends $tea.Model {
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

export class DescribeIPv6TranslatorEntriesRequest extends $tea.Model {
  regionId: string;
  ipv6TranslatorId?: string;
  ipv6TranslatorEntryId?: string;
  entryName?: string;
  allocateIpv6Addr?: string;
  allocateIpv6Port?: number;
  backendIpv4Addr?: string;
  backendIpv4Port?: number;
  transProtocol?: string;
  aclStatus?: string;
  aclType?: string;
  aclId?: string;
  pageNumber?: number;
  pageSize?: number;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6TranslatorId: 'Ipv6TranslatorId',
      ipv6TranslatorEntryId: 'Ipv6TranslatorEntryId',
      entryName: 'EntryName',
      allocateIpv6Addr: 'AllocateIpv6Addr',
      allocateIpv6Port: 'AllocateIpv6Port',
      backendIpv4Addr: 'BackendIpv4Addr',
      backendIpv4Port: 'BackendIpv4Port',
      transProtocol: 'TransProtocol',
      aclStatus: 'AclStatus',
      aclType: 'AclType',
      aclId: 'AclId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6TranslatorId: 'string',
      ipv6TranslatorEntryId: 'string',
      entryName: 'string',
      allocateIpv6Addr: 'string',
      allocateIpv6Port: 'number',
      backendIpv4Addr: 'string',
      backendIpv4Port: 'number',
      transProtocol: 'string',
      aclStatus: 'string',
      aclType: 'string',
      aclId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorEntriesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  ipv6TranslatorEntries: DescribeIPv6TranslatorEntriesResponseIpv6TranslatorEntries;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      ipv6TranslatorEntries: 'Ipv6TranslatorEntries',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      ipv6TranslatorEntries: DescribeIPv6TranslatorEntriesResponseIpv6TranslatorEntries,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIPv6TranslatorRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  ipv6TranslatorId: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      ipv6TranslatorId: 'Ipv6TranslatorId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      ipv6TranslatorId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteIPv6TranslatorResponse extends $tea.Model {
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

export class AllocateEipAddressProRequest extends $tea.Model {
  regionId: string;
  ipAddress?: string;
  instanceId?: string;
  bandwidth?: string;
  period?: number;
  ISP?: string;
  netmode?: string;
  autoPay?: boolean;
  pricingCycle?: string;
  instanceChargeType?: string;
  internetChargeType?: string;
  resourceGroupId?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipAddress: 'IpAddress',
      instanceId: 'InstanceId',
      bandwidth: 'Bandwidth',
      period: 'Period',
      ISP: 'ISP',
      netmode: 'Netmode',
      autoPay: 'AutoPay',
      pricingCycle: 'PricingCycle',
      instanceChargeType: 'InstanceChargeType',
      internetChargeType: 'InternetChargeType',
      resourceGroupId: 'ResourceGroupId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipAddress: 'string',
      instanceId: 'string',
      bandwidth: 'string',
      period: 'number',
      ISP: 'string',
      netmode: 'string',
      autoPay: 'boolean',
      pricingCycle: 'string',
      instanceChargeType: 'string',
      internetChargeType: 'string',
      resourceGroupId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateEipAddressProResponse extends $tea.Model {
  requestId: string;
  allocationId: string;
  eipAddress: string;
  orderId: number;
  resourceGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      allocationId: 'AllocationId',
      eipAddress: 'EipAddress',
      orderId: 'OrderId',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      allocationId: 'string',
      eipAddress: 'string',
      orderId: 'number',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHighDefinitionMonitorLogAttributeRequest extends $tea.Model {
  regionId: string;
  instanceId: string;
  instanceType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      instanceId: 'InstanceId',
      instanceType: 'InstanceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      instanceId: 'string',
      instanceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHighDefinitionMonitorLogAttributeResponse extends $tea.Model {
  requestId: string;
  success: string;
  instanceId: string;
  instanceType: string;
  logProject: string;
  logStore: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      instanceId: 'InstanceId',
      instanceType: 'InstanceType',
      logProject: 'LogProject',
      logStore: 'LogStore',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'string',
      instanceId: 'string',
      instanceType: 'string',
      logProject: 'string',
      logStore: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyFlowLogAttributeRequest extends $tea.Model {
  regionId: string;
  flowLogId: string;
  flowLogName?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      flowLogId: 'FlowLogId',
      flowLogName: 'FlowLogName',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      flowLogId: 'string',
      flowLogName: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyFlowLogAttributeResponse extends $tea.Model {
  requestId: string;
  success: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFlowLogsRequest extends $tea.Model {
  regionId: string;
  flowLogName?: string;
  flowLogId?: string;
  description?: string;
  resourceType?: string;
  resourceId?: string;
  trafficType?: string;
  projectName?: string;
  logStoreName?: string;
  status?: string;
  pageNumber?: number;
  pageSize?: number;
  vpcId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      flowLogName: 'FlowLogName',
      flowLogId: 'FlowLogId',
      description: 'Description',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      trafficType: 'TrafficType',
      projectName: 'ProjectName',
      logStoreName: 'LogStoreName',
      status: 'Status',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vpcId: 'VpcId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      flowLogName: 'string',
      flowLogId: 'string',
      description: 'string',
      resourceType: 'string',
      resourceId: 'string',
      trafficType: 'string',
      projectName: 'string',
      logStoreName: 'string',
      status: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      vpcId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFlowLogsResponse extends $tea.Model {
  requestId: string;
  success: string;
  totalCount: string;
  pageNumber: string;
  pageSize: string;
  flowLogs: DescribeFlowLogsResponseFlowLogs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      flowLogs: 'FlowLogs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'string',
      totalCount: 'string',
      pageNumber: 'string',
      pageSize: 'string',
      flowLogs: DescribeFlowLogsResponseFlowLogs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteFlowLogRequest extends $tea.Model {
  regionId: string;
  flowLogId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      flowLogId: 'FlowLogId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      flowLogId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteFlowLogResponse extends $tea.Model {
  requestId: string;
  success: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeactiveFlowLogRequest extends $tea.Model {
  regionId: string;
  flowLogId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      flowLogId: 'FlowLogId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      flowLogId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeactiveFlowLogResponse extends $tea.Model {
  requestId: string;
  success: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateFlowLogRequest extends $tea.Model {
  regionId: string;
  flowLogName?: string;
  description?: string;
  resourceType: string;
  resourceId: string;
  trafficType: string;
  projectName: string;
  logStoreName: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      flowLogName: 'FlowLogName',
      description: 'Description',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      trafficType: 'TrafficType',
      projectName: 'ProjectName',
      logStoreName: 'LogStoreName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      flowLogName: 'string',
      description: 'string',
      resourceType: 'string',
      resourceId: 'string',
      trafficType: 'string',
      projectName: 'string',
      logStoreName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateFlowLogResponse extends $tea.Model {
  requestId: string;
  success: string;
  flowLogId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      flowLogId: 'FlowLogId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'string',
      flowLogId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ActiveFlowLogRequest extends $tea.Model {
  regionId: string;
  flowLogId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      flowLogId: 'FlowLogId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      flowLogId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ActiveFlowLogResponse extends $tea.Model {
  requestId: string;
  success: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateRouteTableRequest extends $tea.Model {
  regionId: string;
  routeTableId: string;
  vSwitchId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routeTableId: 'RouteTableId',
      vSwitchId: 'VSwitchId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routeTableId: 'string',
      vSwitchId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateRouteTableResponse extends $tea.Model {
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

export class DeleteRouteTableRequest extends $tea.Model {
  regionId: string;
  routeTableId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routeTableId: 'RouteTableId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routeTableId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRouteTableResponse extends $tea.Model {
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

export class CreateRouteTableRequest extends $tea.Model {
  regionId: string;
  vpcId: string;
  routeTableName?: string;
  description?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpcId: 'VpcId',
      routeTableName: 'RouteTableName',
      description: 'Description',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpcId: 'string',
      routeTableName: 'string',
      description: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRouteTableResponse extends $tea.Model {
  requestId: string;
  routeTableId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      routeTableId: 'RouteTableId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      routeTableId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociateRouteTableRequest extends $tea.Model {
  regionId: string;
  routeTableId: string;
  vSwitchId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routeTableId: 'RouteTableId',
      vSwitchId: 'VSwitchId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routeTableId: 'string',
      vSwitchId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociateRouteTableResponse extends $tea.Model {
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

export class CreateVpnGatewayRequest extends $tea.Model {
  regionId: string;
  name?: string;
  vpcId: string;
  instanceChargeType?: string;
  period?: number;
  autoPay?: boolean;
  bandwidth: number;
  enableIpsec?: boolean;
  enableSsl?: boolean;
  sslConnections?: number;
  vSwitchId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      name: 'Name',
      vpcId: 'VpcId',
      instanceChargeType: 'InstanceChargeType',
      period: 'Period',
      autoPay: 'AutoPay',
      bandwidth: 'Bandwidth',
      enableIpsec: 'EnableIpsec',
      enableSsl: 'EnableSsl',
      sslConnections: 'SslConnections',
      vSwitchId: 'VSwitchId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      name: 'string',
      vpcId: 'string',
      instanceChargeType: 'string',
      period: 'number',
      autoPay: 'boolean',
      bandwidth: 'number',
      enableIpsec: 'boolean',
      enableSsl: 'boolean',
      sslConnections: 'number',
      vSwitchId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVpnGatewayResponse extends $tea.Model {
  requestId: string;
  vpnGatewayId: string;
  name: string;
  orderId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      orderId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MoveResourceGroupRequest extends $tea.Model {
  resourceId: string;
  resourceType: string;
  newResourceGroupId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      resourceId: 'ResourceId',
      resourceType: 'ResourceType',
      newResourceGroupId: 'NewResourceGroupId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceId: 'string',
      resourceType: 'string',
      newResourceGroupId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MoveResourceGroupResponse extends $tea.Model {
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

export class RevokeInstanceFromCenRequest extends $tea.Model {
  regionId: string;
  instanceId: string;
  instanceType: string;
  cenId: string;
  cenOwnerId: number;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      instanceId: 'InstanceId',
      instanceType: 'InstanceType',
      cenId: 'CenId',
      cenOwnerId: 'CenOwnerId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      instanceId: 'string',
      instanceType: 'string',
      cenId: 'string',
      cenOwnerId: 'number',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RevokeInstanceFromCenResponse extends $tea.Model {
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

export class GrantInstanceToCenRequest extends $tea.Model {
  regionId: string;
  instanceId: string;
  instanceType: string;
  cenId: string;
  cenOwnerId: number;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      instanceId: 'InstanceId',
      instanceType: 'InstanceType',
      cenId: 'CenId',
      cenOwnerId: 'CenOwnerId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      instanceId: 'string',
      instanceType: 'string',
      cenId: 'string',
      cenOwnerId: 'number',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GrantInstanceToCenResponse extends $tea.Model {
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

export class DescribeGrantRulesToCenRequest extends $tea.Model {
  regionId: string;
  instanceId: string;
  instanceType: string;
  resourceGroupId?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      instanceId: 'InstanceId',
      instanceType: 'InstanceType',
      resourceGroupId: 'ResourceGroupId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      instanceId: 'string',
      instanceType: 'string',
      resourceGroupId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGrantRulesToCenResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  cenGrantRules: DescribeGrantRulesToCenResponseCenGrantRules;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      cenGrantRules: 'CenGrantRules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      cenGrantRules: DescribeGrantRulesToCenResponseCenGrantRules,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySslVpnServerRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  sslVpnServerId: string;
  name?: string;
  clientIpPool?: string;
  localSubnet?: string;
  proto?: string;
  cipher?: string;
  port?: number;
  compress?: boolean;
  enableMultiFactorAuth?: boolean;
  IDaaSInstanceId?: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      sslVpnServerId: 'SslVpnServerId',
      name: 'Name',
      clientIpPool: 'ClientIpPool',
      localSubnet: 'LocalSubnet',
      proto: 'Proto',
      cipher: 'Cipher',
      port: 'Port',
      compress: 'Compress',
      enableMultiFactorAuth: 'EnableMultiFactorAuth',
      IDaaSInstanceId: 'IDaaSInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      sslVpnServerId: 'string',
      name: 'string',
      clientIpPool: 'string',
      localSubnet: 'string',
      proto: 'string',
      cipher: 'string',
      port: 'number',
      compress: 'boolean',
      enableMultiFactorAuth: 'boolean',
      IDaaSInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySslVpnServerResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  sslVpnServerId: string;
  vpnGatewayId: string;
  name: string;
  localSubnet: string;
  clientIpPool: string;
  createTime: number;
  cipher: string;
  proto: string;
  port: number;
  compress: boolean;
  connections: number;
  maxConnections: number;
  internetIp: string;
  enableMultiFactorAuth: boolean;
  IDaaSInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      sslVpnServerId: 'SslVpnServerId',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      localSubnet: 'LocalSubnet',
      clientIpPool: 'ClientIpPool',
      createTime: 'CreateTime',
      cipher: 'Cipher',
      proto: 'Proto',
      port: 'Port',
      compress: 'Compress',
      connections: 'Connections',
      maxConnections: 'MaxConnections',
      internetIp: 'InternetIp',
      enableMultiFactorAuth: 'EnableMultiFactorAuth',
      IDaaSInstanceId: 'IDaaSInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      sslVpnServerId: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      localSubnet: 'string',
      clientIpPool: 'string',
      createTime: 'number',
      cipher: 'string',
      proto: 'string',
      port: 'number',
      compress: 'boolean',
      connections: 'number',
      maxConnections: 'number',
      internetIp: 'string',
      enableMultiFactorAuth: 'boolean',
      IDaaSInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySslVpnClientCertRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  sslVpnClientCertId: string;
  name?: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      sslVpnClientCertId: 'SslVpnClientCertId',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      sslVpnClientCertId: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySslVpnClientCertResponse extends $tea.Model {
  requestId: string;
  name: string;
  sslVpnClientCertId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      name: 'Name',
      sslVpnClientCertId: 'SslVpnClientCertId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      name: 'string',
      sslVpnClientCertId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnServersRequest extends $tea.Model {
  regionId: string;
  sslVpnServerId?: string;
  vpnGatewayId?: string;
  name?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      sslVpnServerId: 'SslVpnServerId',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      sslVpnServerId: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnServersResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  sslVpnServers: DescribeSslVpnServersResponseSslVpnServers;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      sslVpnServers: 'SslVpnServers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      sslVpnServers: DescribeSslVpnServersResponseSslVpnServers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnClientCertsRequest extends $tea.Model {
  regionId: string;
  sslVpnServerId?: string;
  sslVpnClientCertId?: string;
  name?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      sslVpnServerId: 'SslVpnServerId',
      sslVpnClientCertId: 'SslVpnClientCertId',
      name: 'Name',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      sslVpnServerId: 'string',
      sslVpnClientCertId: 'string',
      name: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnClientCertsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  sslVpnClientCertKeys: DescribeSslVpnClientCertsResponseSslVpnClientCertKeys;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      sslVpnClientCertKeys: 'SslVpnClientCertKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      sslVpnClientCertKeys: DescribeSslVpnClientCertsResponseSslVpnClientCertKeys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnClientCertRequest extends $tea.Model {
  regionId: string;
  sslVpnClientCertId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      sslVpnClientCertId: 'SslVpnClientCertId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      sslVpnClientCertId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnClientCertResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  sslVpnClientCertId: string;
  name: string;
  sslVpnServerId: string;
  caCert: string;
  clientCert: string;
  clientKey: string;
  clientConfig: string;
  createTime: number;
  endTime: number;
  status: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      sslVpnClientCertId: 'SslVpnClientCertId',
      name: 'Name',
      sslVpnServerId: 'SslVpnServerId',
      caCert: 'CaCert',
      clientCert: 'ClientCert',
      clientKey: 'ClientKey',
      clientConfig: 'ClientConfig',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      sslVpnClientCertId: 'string',
      name: 'string',
      sslVpnServerId: 'string',
      caCert: 'string',
      clientCert: 'string',
      clientKey: 'string',
      clientConfig: 'string',
      createTime: 'number',
      endTime: 'number',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSslVpnServerRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  sslVpnServerId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      sslVpnServerId: 'SslVpnServerId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      sslVpnServerId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSslVpnServerResponse extends $tea.Model {
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

export class DeleteSslVpnClientCertRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  sslVpnClientCertId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      sslVpnClientCertId: 'SslVpnClientCertId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      sslVpnClientCertId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSslVpnClientCertResponse extends $tea.Model {
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

export class CreateSslVpnServerRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  vpnGatewayId: string;
  name?: string;
  clientIpPool: string;
  localSubnet: string;
  proto?: string;
  cipher?: string;
  port?: number;
  compress?: boolean;
  enableMultiFactorAuth?: boolean;
  IDaaSInstanceId?: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      clientIpPool: 'ClientIpPool',
      localSubnet: 'LocalSubnet',
      proto: 'Proto',
      cipher: 'Cipher',
      port: 'Port',
      compress: 'Compress',
      enableMultiFactorAuth: 'EnableMultiFactorAuth',
      IDaaSInstanceId: 'IDaaSInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      clientIpPool: 'string',
      localSubnet: 'string',
      proto: 'string',
      cipher: 'string',
      port: 'number',
      compress: 'boolean',
      enableMultiFactorAuth: 'boolean',
      IDaaSInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSslVpnServerResponse extends $tea.Model {
  requestId: string;
  sslVpnServerId: string;
  name: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      sslVpnServerId: 'SslVpnServerId',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      sslVpnServerId: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSslVpnClientCertRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  sslVpnServerId: string;
  name?: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      sslVpnServerId: 'SslVpnServerId',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      sslVpnServerId: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSslVpnClientCertResponse extends $tea.Model {
  requestId: string;
  name: string;
  sslVpnClientCertId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      name: 'Name',
      sslVpnClientCertId: 'SslVpnClientCertId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      name: 'string',
      sslVpnClientCertId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveGlobalAccelerationInstanceIpRequest extends $tea.Model {
  regionId: string;
  globalAccelerationInstanceId: string;
  ipInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      ipInstanceId: 'IpInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      globalAccelerationInstanceId: 'string',
      ipInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveGlobalAccelerationInstanceIpResponse extends $tea.Model {
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

export class AddGlobalAccelerationInstanceIpRequest extends $tea.Model {
  regionId: string;
  globalAccelerationInstanceId: string;
  ipInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      ipInstanceId: 'IpInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      globalAccelerationInstanceId: 'string',
      ipInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGlobalAccelerationInstanceIpResponse extends $tea.Model {
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

export class DescribeRouteTableListRequest extends $tea.Model {
  routerType?: string;
  routerId?: string;
  vpcId?: string;
  routeTableId?: string;
  routeTableName?: string;
  pageNumber?: number;
  pageSize?: number;
  resourceGroupId?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      routerType: 'RouterType',
      routerId: 'RouterId',
      vpcId: 'VpcId',
      routeTableId: 'RouteTableId',
      routeTableName: 'RouteTableName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      resourceGroupId: 'ResourceGroupId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routerType: 'string',
      routerId: 'string',
      vpcId: 'string',
      routeTableId: 'string',
      routeTableName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      resourceGroupId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTableListResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  pageSize: number;
  pageNumber: number;
  totalCount: number;
  routerTableList: DescribeRouteTableListResponseRouterTableList;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      totalCount: 'TotalCount',
      routerTableList: 'RouterTableList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
      pageSize: 'number',
      pageNumber: 'number',
      totalCount: 'number',
      routerTableList: DescribeRouteTableListResponseRouterTableList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyRouteTableAttributesRequest extends $tea.Model {
  routeTableId: string;
  routeTableName?: string;
  description?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      routeTableId: 'RouteTableId',
      routeTableName: 'RouteTableName',
      description: 'Description',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routeTableId: 'string',
      routeTableName: 'string',
      description: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyRouteTableAttributesResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpNetworksRequest extends $tea.Model {
  routerId?: string;
  regionId: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      routerId: 'RouterId',
      regionId: 'RegionId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routerId: 'string',
      regionId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpNetworksResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  bgpNetworks: DescribeBgpNetworksResponseBgpNetworks;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      bgpNetworks: 'BgpNetworks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      bgpNetworks: DescribeBgpNetworksResponseBgpNetworks,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCommonBandwidthPackagePayTypeRequest extends $tea.Model {
  bandwidthPackageId: string;
  payType?: string;
  pricingCycle?: string;
  duration?: number;
  autoPay?: boolean;
  bandwidth?: string;
  kbpsBandwidth?: string;
  resourceBid?: string;
  resourceUid?: number;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      bandwidthPackageId: 'BandwidthPackageId',
      payType: 'PayType',
      pricingCycle: 'PricingCycle',
      duration: 'Duration',
      autoPay: 'AutoPay',
      bandwidth: 'Bandwidth',
      kbpsBandwidth: 'KbpsBandwidth',
      resourceBid: 'ResourceBid',
      resourceUid: 'ResourceUid',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bandwidthPackageId: 'string',
      payType: 'string',
      pricingCycle: 'string',
      duration: 'number',
      autoPay: 'boolean',
      bandwidth: 'string',
      kbpsBandwidth: 'string',
      resourceBid: 'string',
      resourceUid: 'number',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCommonBandwidthPackagePayTypeResponse extends $tea.Model {
  requestId: string;
  orderId: number;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'number',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateGlobalAccelerationInstanceRequest extends $tea.Model {
  regionId: string;
  globalAccelerationInstanceId: string;
  instanceType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      instanceType: 'InstanceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      globalAccelerationInstanceId: 'string',
      instanceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateGlobalAccelerationInstanceResponse extends $tea.Model {
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

export class ModifyGlobalAccelerationInstanceSpecRequest extends $tea.Model {
  regionId: string;
  globalAccelerationInstanceId: string;
  bandwidth: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      bandwidth: 'Bandwidth',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      globalAccelerationInstanceId: 'string',
      bandwidth: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyGlobalAccelerationInstanceSpecResponse extends $tea.Model {
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

export class ModifyGlobalAccelerationInstanceAttributesRequest extends $tea.Model {
  regionId: string;
  globalAccelerationInstanceId: string;
  name?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      globalAccelerationInstanceId: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyGlobalAccelerationInstanceAttributesResponse extends $tea.Model {
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

export class DescribeServerRelatedGlobalAccelerationInstancesRequest extends $tea.Model {
  regionId: string;
  serverId: string;
  serverType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      serverId: 'ServerId',
      serverType: 'ServerType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      serverId: 'string',
      serverType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServerRelatedGlobalAccelerationInstancesResponse extends $tea.Model {
  requestId: string;
  globalAccelerationInstances: DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstances;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      globalAccelerationInstances: 'GlobalAccelerationInstances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      globalAccelerationInstances: DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstances,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGlobalAccelerationInstancesRequest extends $tea.Model {
  regionId: string;
  includeReservationData?: boolean;
  globalAccelerationInstanceId?: string;
  ipAddress?: string;
  name?: string;
  status?: string;
  bandwidthType?: string;
  serviceLocation?: string;
  serverId?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      includeReservationData: 'IncludeReservationData',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      ipAddress: 'IpAddress',
      name: 'Name',
      status: 'Status',
      bandwidthType: 'BandwidthType',
      serviceLocation: 'ServiceLocation',
      serverId: 'ServerId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      includeReservationData: 'boolean',
      globalAccelerationInstanceId: 'string',
      ipAddress: 'string',
      name: 'string',
      status: 'string',
      bandwidthType: 'string',
      serviceLocation: 'string',
      serverId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGlobalAccelerationInstancesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  globalAccelerationInstances: DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstances;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      globalAccelerationInstances: 'GlobalAccelerationInstances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      globalAccelerationInstances: DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstances,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGlobalAccelerationInstanceRequest extends $tea.Model {
  regionId: string;
  globalAccelerationInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      globalAccelerationInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGlobalAccelerationInstanceResponse extends $tea.Model {
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

export class CreateGlobalAccelerationInstanceRequest extends $tea.Model {
  regionId: string;
  serviceLocation: string;
  bandwidth: string;
  bandwidthType?: string;
  name?: string;
  description?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      serviceLocation: 'ServiceLocation',
      bandwidth: 'Bandwidth',
      bandwidthType: 'BandwidthType',
      name: 'Name',
      description: 'Description',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      serviceLocation: 'string',
      bandwidth: 'string',
      bandwidthType: 'string',
      name: 'string',
      description: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGlobalAccelerationInstanceResponse extends $tea.Model {
  requestId: string;
  globalAccelerationInstanceId: string;
  ipAddress: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      ipAddress: 'IpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      globalAccelerationInstanceId: 'string',
      ipAddress: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociateGlobalAccelerationInstanceRequest extends $tea.Model {
  regionId: string;
  globalAccelerationInstanceId: string;
  backendServerId: string;
  backendServerRegionId: string;
  backendServerType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      backendServerId: 'BackendServerId',
      backendServerRegionId: 'BackendServerRegionId',
      backendServerType: 'BackendServerType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      globalAccelerationInstanceId: 'string',
      backendServerId: 'string',
      backendServerRegionId: 'string',
      backendServerType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociateGlobalAccelerationInstanceResponse extends $tea.Model {
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

export class DescribeVSwitchAttributesRequest extends $tea.Model {
  vSwitchId: string;
  regionId?: string;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      vSwitchId: 'VSwitchId',
      regionId: 'RegionId',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vSwitchId: 'string',
      regionId: 'string',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVSwitchAttributesResponse extends $tea.Model {
  requestId: string;
  vSwitchId: string;
  vpcId: string;
  status: string;
  cidrBlock: string;
  ipv6CidrBlock: string;
  zoneId: string;
  availableIpAddressCount: number;
  description: string;
  vSwitchName: string;
  creationTime: string;
  isDefault: boolean;
  resourceGroupId: string;
  networkAclId: string;
  ownerId: number;
  shareType: string;
  routeTable: DescribeVSwitchAttributesResponseRouteTable;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vSwitchId: 'VSwitchId',
      vpcId: 'VpcId',
      status: 'Status',
      cidrBlock: 'CidrBlock',
      ipv6CidrBlock: 'Ipv6CidrBlock',
      zoneId: 'ZoneId',
      availableIpAddressCount: 'AvailableIpAddressCount',
      description: 'Description',
      vSwitchName: 'VSwitchName',
      creationTime: 'CreationTime',
      isDefault: 'IsDefault',
      resourceGroupId: 'ResourceGroupId',
      networkAclId: 'NetworkAclId',
      ownerId: 'OwnerId',
      shareType: 'ShareType',
      routeTable: 'RouteTable',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vSwitchId: 'string',
      vpcId: 'string',
      status: 'string',
      cidrBlock: 'string',
      ipv6CidrBlock: 'string',
      zoneId: 'string',
      availableIpAddressCount: 'number',
      description: 'string',
      vSwitchName: 'string',
      creationTime: 'string',
      isDefault: 'boolean',
      resourceGroupId: 'string',
      networkAclId: 'string',
      ownerId: 'number',
      shareType: 'string',
      routeTable: DescribeVSwitchAttributesResponseRouteTable,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveCommonBandwidthPackageIpRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  ipInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      ipInstanceId: 'IpInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      ipInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveCommonBandwidthPackageIpResponse extends $tea.Model {
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

export class ModifyCommonBandwidthPackageSpecRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  bandwidth: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      bandwidth: 'Bandwidth',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      bandwidth: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCommonBandwidthPackageSpecResponse extends $tea.Model {
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

export class ModifyCommonBandwidthPackageAttributeRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  name?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCommonBandwidthPackageAttributeResponse extends $tea.Model {
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

export class DescribeCommonBandwidthPackagesRequest extends $tea.Model {
  includeReservationData?: boolean;
  regionId: string;
  bandwidthPackageId?: string;
  resourceGroupId?: string;
  name?: string;
  pageNumber?: number;
  pageSize?: number;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      includeReservationData: 'IncludeReservationData',
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      resourceGroupId: 'ResourceGroupId',
      name: 'Name',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      includeReservationData: 'boolean',
      regionId: 'string',
      bandwidthPackageId: 'string',
      resourceGroupId: 'string',
      name: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCommonBandwidthPackagesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  commonBandwidthPackages: DescribeCommonBandwidthPackagesResponseCommonBandwidthPackages;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      commonBandwidthPackages: 'CommonBandwidthPackages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      commonBandwidthPackages: DescribeCommonBandwidthPackagesResponseCommonBandwidthPackages,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCommonBandwidthPackageRequest extends $tea.Model {
  regionId: string;
  force?: string;
  bandwidthPackageId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      force: 'Force',
      bandwidthPackageId: 'BandwidthPackageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      force: 'string',
      bandwidthPackageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCommonBandwidthPackageResponse extends $tea.Model {
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

export class CreateCommonBandwidthPackageRequest extends $tea.Model {
  regionId: string;
  zone?: string;
  ISP?: string;
  name?: string;
  description?: string;
  clientToken?: string;
  resourceGroupId?: string;
  bandwidth: number;
  ratio?: number;
  internetChargeType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      zone: 'Zone',
      ISP: 'ISP',
      name: 'Name',
      description: 'Description',
      clientToken: 'ClientToken',
      resourceGroupId: 'ResourceGroupId',
      bandwidth: 'Bandwidth',
      ratio: 'Ratio',
      internetChargeType: 'InternetChargeType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      zone: 'string',
      ISP: 'string',
      name: 'string',
      description: 'string',
      clientToken: 'string',
      resourceGroupId: 'string',
      bandwidth: 'number',
      ratio: 'number',
      internetChargeType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCommonBandwidthPackageResponse extends $tea.Model {
  requestId: string;
  bandwidthPackageId: string;
  resourceGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      bandwidthPackageId: 'BandwidthPackageId',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      bandwidthPackageId: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddCommonBandwidthPackageIpRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  ipInstanceId: string;
  ipType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      ipInstanceId: 'IpInstanceId',
      ipType: 'IpType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      ipInstanceId: 'string',
      ipType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddCommonBandwidthPackageIpResponse extends $tea.Model {
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

export class ModifyVpnGatewayAttributeRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnGatewayId: string;
  name?: string;
  description?: string;
  autoPropagate?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      description: 'Description',
      autoPropagate: 'AutoPropagate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      description: 'string',
      autoPropagate: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpnGatewayAttributeResponse extends $tea.Model {
  requestId: string;
  vpnGatewayId: string;
  vpcId: string;
  vSwitchId: string;
  internetIp: string;
  intranetIp: string;
  createTime: number;
  endTime: number;
  spec: string;
  name: string;
  description: string;
  status: string;
  businessStatus: string;
  enableBgp: boolean;
  autoPropagate: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpnGatewayId: 'VpnGatewayId',
      vpcId: 'VpcId',
      vSwitchId: 'VSwitchId',
      internetIp: 'InternetIp',
      intranetIp: 'IntranetIp',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      spec: 'Spec',
      name: 'Name',
      description: 'Description',
      status: 'Status',
      businessStatus: 'BusinessStatus',
      enableBgp: 'EnableBgp',
      autoPropagate: 'AutoPropagate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpnGatewayId: 'string',
      vpcId: 'string',
      vSwitchId: 'string',
      internetIp: 'string',
      intranetIp: 'string',
      createTime: 'number',
      endTime: 'number',
      spec: 'string',
      name: 'string',
      description: 'string',
      status: 'string',
      businessStatus: 'string',
      enableBgp: 'boolean',
      autoPropagate: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpnConnectionAttributeRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnConnectionId: string;
  name?: string;
  localSubnet?: string;
  remoteSubnet?: string;
  effectImmediately?: boolean;
  ikeConfig?: string;
  ipsecConfig?: string;
  healthCheckConfig?: string;
  autoConfigRoute?: boolean;
  enableDpd?: boolean;
  enableNatTraversal?: boolean;
  bgpConfig?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnConnectionId: 'VpnConnectionId',
      name: 'Name',
      localSubnet: 'LocalSubnet',
      remoteSubnet: 'RemoteSubnet',
      effectImmediately: 'EffectImmediately',
      ikeConfig: 'IkeConfig',
      ipsecConfig: 'IpsecConfig',
      healthCheckConfig: 'HealthCheckConfig',
      autoConfigRoute: 'AutoConfigRoute',
      enableDpd: 'EnableDpd',
      enableNatTraversal: 'EnableNatTraversal',
      bgpConfig: 'BgpConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnConnectionId: 'string',
      name: 'string',
      localSubnet: 'string',
      remoteSubnet: 'string',
      effectImmediately: 'boolean',
      ikeConfig: 'string',
      ipsecConfig: 'string',
      healthCheckConfig: 'string',
      autoConfigRoute: 'boolean',
      enableDpd: 'boolean',
      enableNatTraversal: 'boolean',
      bgpConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpnConnectionAttributeResponse extends $tea.Model {
  requestId: string;
  vpnConnectionId: string;
  customerGatewayId: string;
  vpnGatewayId: string;
  name: string;
  description: string;
  localSubnet: string;
  remoteSubnet: string;
  createTime: number;
  effectImmediately: boolean;
  enableDpd: boolean;
  enableNatTraversal: boolean;
  ikeConfig: ModifyVpnConnectionAttributeResponseIkeConfig;
  ipsecConfig: ModifyVpnConnectionAttributeResponseIpsecConfig;
  vcoHealthCheck: ModifyVpnConnectionAttributeResponseVcoHealthCheck;
  vpnBgpConfig: ModifyVpnConnectionAttributeResponseVpnBgpConfig;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpnConnectionId: 'VpnConnectionId',
      customerGatewayId: 'CustomerGatewayId',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      description: 'Description',
      localSubnet: 'LocalSubnet',
      remoteSubnet: 'RemoteSubnet',
      createTime: 'CreateTime',
      effectImmediately: 'EffectImmediately',
      enableDpd: 'EnableDpd',
      enableNatTraversal: 'EnableNatTraversal',
      ikeConfig: 'IkeConfig',
      ipsecConfig: 'IpsecConfig',
      vcoHealthCheck: 'VcoHealthCheck',
      vpnBgpConfig: 'VpnBgpConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpnConnectionId: 'string',
      customerGatewayId: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      description: 'string',
      localSubnet: 'string',
      remoteSubnet: 'string',
      createTime: 'number',
      effectImmediately: 'boolean',
      enableDpd: 'boolean',
      enableNatTraversal: 'boolean',
      ikeConfig: ModifyVpnConnectionAttributeResponseIkeConfig,
      ipsecConfig: ModifyVpnConnectionAttributeResponseIpsecConfig,
      vcoHealthCheck: ModifyVpnConnectionAttributeResponseVcoHealthCheck,
      vpnBgpConfig: ModifyVpnConnectionAttributeResponseVpnBgpConfig,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCustomerGatewayAttributeRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  customerGatewayId: string;
  name?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      customerGatewayId: 'CustomerGatewayId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      customerGatewayId: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCustomerGatewayAttributeResponse extends $tea.Model {
  requestId: string;
  customerGatewayId: string;
  ipAddress: string;
  name: string;
  description: string;
  createTime: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      customerGatewayId: 'CustomerGatewayId',
      ipAddress: 'IpAddress',
      name: 'Name',
      description: 'Description',
      createTime: 'CreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      customerGatewayId: 'string',
      ipAddress: 'string',
      name: 'string',
      description: 'string',
      createTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DownloadVpnConnectionConfigRequest extends $tea.Model {
  regionId: string;
  vpnConnectionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpnConnectionId: 'VpnConnectionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpnConnectionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DownloadVpnConnectionConfigResponse extends $tea.Model {
  requestId: string;
  vpnConnectionConfig: DownloadVpnConnectionConfigResponseVpnConnectionConfig;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpnConnectionConfig: 'VpnConnectionConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpnConnectionConfig: DownloadVpnConnectionConfigResponseVpnConnectionConfig,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewaysRequest extends $tea.Model {
  regionId: string;
  vpcId?: string;
  vpnGatewayId?: string;
  status?: string;
  businessStatus?: string;
  pageNumber?: number;
  pageSize?: number;
  tag?: DescribeVpnGatewaysRequestTag[];
  includeReservationData?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpcId: 'VpcId',
      vpnGatewayId: 'VpnGatewayId',
      status: 'Status',
      businessStatus: 'BusinessStatus',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      tag: 'Tag',
      includeReservationData: 'IncludeReservationData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpcId: 'string',
      vpnGatewayId: 'string',
      status: 'string',
      businessStatus: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      tag: { 'type': 'array', 'itemType': DescribeVpnGatewaysRequestTag },
      includeReservationData: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewaysResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  vpnGateways: DescribeVpnGatewaysResponseVpnGateways;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vpnGateways: 'VpnGateways',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      vpnGateways: DescribeVpnGatewaysResponseVpnGateways,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewayRequest extends $tea.Model {
  regionId: string;
  vpnGatewayId: string;
  includeReservationData?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpnGatewayId: 'VpnGatewayId',
      includeReservationData: 'IncludeReservationData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpnGatewayId: 'string',
      includeReservationData: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewayResponse extends $tea.Model {
  requestId: string;
  vpnGatewayId: string;
  vpcId: string;
  vSwitchId: string;
  internetIp: string;
  createTime: number;
  endTime: number;
  spec: string;
  name: string;
  description: string;
  status: string;
  businessStatus: string;
  chargeType: string;
  ipsecVpn: string;
  sslVpn: string;
  sslMaxConnections: number;
  tag: string;
  enableBgp: boolean;
  autoPropagate: boolean;
  tags: DescribeVpnGatewayResponseTags;
  reservationData: DescribeVpnGatewayResponseReservationData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpnGatewayId: 'VpnGatewayId',
      vpcId: 'VpcId',
      vSwitchId: 'VSwitchId',
      internetIp: 'InternetIp',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      spec: 'Spec',
      name: 'Name',
      description: 'Description',
      status: 'Status',
      businessStatus: 'BusinessStatus',
      chargeType: 'ChargeType',
      ipsecVpn: 'IpsecVpn',
      sslVpn: 'SslVpn',
      sslMaxConnections: 'SslMaxConnections',
      tag: 'Tag',
      enableBgp: 'EnableBgp',
      autoPropagate: 'AutoPropagate',
      tags: 'Tags',
      reservationData: 'ReservationData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpnGatewayId: 'string',
      vpcId: 'string',
      vSwitchId: 'string',
      internetIp: 'string',
      createTime: 'number',
      endTime: 'number',
      spec: 'string',
      name: 'string',
      description: 'string',
      status: 'string',
      businessStatus: 'string',
      chargeType: 'string',
      ipsecVpn: 'string',
      sslVpn: 'string',
      sslMaxConnections: 'number',
      tag: 'string',
      enableBgp: 'boolean',
      autoPropagate: 'boolean',
      tags: DescribeVpnGatewayResponseTags,
      reservationData: DescribeVpnGatewayResponseReservationData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionsRequest extends $tea.Model {
  regionId: string;
  vpnGatewayId?: string;
  customerGatewayId?: string;
  pageNumber?: number;
  pageSize?: number;
  vpnConnectionId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpnGatewayId: 'VpnGatewayId',
      customerGatewayId: 'CustomerGatewayId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vpnConnectionId: 'VpnConnectionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpnGatewayId: 'string',
      customerGatewayId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      vpnConnectionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  vpnConnections: DescribeVpnConnectionsResponseVpnConnections;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vpnConnections: 'VpnConnections',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      vpnConnections: DescribeVpnConnectionsResponseVpnConnections,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionRequest extends $tea.Model {
  regionId: string;
  vpnConnectionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpnConnectionId: 'VpnConnectionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpnConnectionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionResponse extends $tea.Model {
  requestId: string;
  vpnConnectionId: string;
  customerGatewayId: string;
  vpnGatewayId: string;
  name: string;
  localSubnet: string;
  remoteSubnet: string;
  createTime: number;
  effectImmediately: boolean;
  status: string;
  enableDpd: boolean;
  enableNatTraversal: boolean;
  ikeConfig: DescribeVpnConnectionResponseIkeConfig;
  ipsecConfig: DescribeVpnConnectionResponseIpsecConfig;
  vcoHealthCheck: DescribeVpnConnectionResponseVcoHealthCheck;
  vpnBgpConfig: DescribeVpnConnectionResponseVpnBgpConfig;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpnConnectionId: 'VpnConnectionId',
      customerGatewayId: 'CustomerGatewayId',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      localSubnet: 'LocalSubnet',
      remoteSubnet: 'RemoteSubnet',
      createTime: 'CreateTime',
      effectImmediately: 'EffectImmediately',
      status: 'Status',
      enableDpd: 'EnableDpd',
      enableNatTraversal: 'EnableNatTraversal',
      ikeConfig: 'IkeConfig',
      ipsecConfig: 'IpsecConfig',
      vcoHealthCheck: 'VcoHealthCheck',
      vpnBgpConfig: 'VpnBgpConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpnConnectionId: 'string',
      customerGatewayId: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      localSubnet: 'string',
      remoteSubnet: 'string',
      createTime: 'number',
      effectImmediately: 'boolean',
      status: 'string',
      enableDpd: 'boolean',
      enableNatTraversal: 'boolean',
      ikeConfig: DescribeVpnConnectionResponseIkeConfig,
      ipsecConfig: DescribeVpnConnectionResponseIpsecConfig,
      vcoHealthCheck: DescribeVpnConnectionResponseVcoHealthCheck,
      vpnBgpConfig: DescribeVpnConnectionResponseVpnBgpConfig,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomerGatewaysRequest extends $tea.Model {
  regionId: string;
  customerGatewayId?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      customerGatewayId: 'CustomerGatewayId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      customerGatewayId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomerGatewaysResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  customerGateways: DescribeCustomerGatewaysResponseCustomerGateways;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      customerGateways: 'CustomerGateways',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      customerGateways: DescribeCustomerGatewaysResponseCustomerGateways,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomerGatewayRequest extends $tea.Model {
  regionId: string;
  customerGatewayId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      customerGatewayId: 'CustomerGatewayId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      customerGatewayId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomerGatewayResponse extends $tea.Model {
  requestId: string;
  customerGatewayId: string;
  ipAddress: string;
  name: string;
  description: string;
  createTime: number;
  asn: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      customerGatewayId: 'CustomerGatewayId',
      ipAddress: 'IpAddress',
      name: 'Name',
      description: 'Description',
      createTime: 'CreateTime',
      asn: 'Asn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      customerGatewayId: 'string',
      ipAddress: 'string',
      name: 'string',
      description: 'string',
      createTime: 'number',
      asn: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVpnGatewayRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnGatewayId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnGatewayId: 'VpnGatewayId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnGatewayId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVpnGatewayResponse extends $tea.Model {
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

export class DeleteVpnConnectionRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  vpnConnectionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      vpnConnectionId: 'VpnConnectionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      vpnConnectionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVpnConnectionResponse extends $tea.Model {
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

export class DeleteCustomerGatewayRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  customerGatewayId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      customerGatewayId: 'CustomerGatewayId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      customerGatewayId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCustomerGatewayResponse extends $tea.Model {
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

export class CreateVpnConnectionRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  customerGatewayId: string;
  vpnGatewayId: string;
  name?: string;
  localSubnet: string;
  remoteSubnet: string;
  effectImmediately?: boolean;
  ikeConfig?: string;
  ipsecConfig?: string;
  healthCheckConfig?: string;
  autoConfigRoute?: boolean;
  enableDpd?: boolean;
  enableNatTraversal?: boolean;
  bgpConfig?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      customerGatewayId: 'CustomerGatewayId',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      localSubnet: 'LocalSubnet',
      remoteSubnet: 'RemoteSubnet',
      effectImmediately: 'EffectImmediately',
      ikeConfig: 'IkeConfig',
      ipsecConfig: 'IpsecConfig',
      healthCheckConfig: 'HealthCheckConfig',
      autoConfigRoute: 'AutoConfigRoute',
      enableDpd: 'EnableDpd',
      enableNatTraversal: 'EnableNatTraversal',
      bgpConfig: 'BgpConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      customerGatewayId: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      localSubnet: 'string',
      remoteSubnet: 'string',
      effectImmediately: 'boolean',
      ikeConfig: 'string',
      ipsecConfig: 'string',
      healthCheckConfig: 'string',
      autoConfigRoute: 'boolean',
      enableDpd: 'boolean',
      enableNatTraversal: 'boolean',
      bgpConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVpnConnectionResponse extends $tea.Model {
  requestId: string;
  vpnConnectionId: string;
  name: string;
  createTime: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpnConnectionId: 'VpnConnectionId',
      name: 'Name',
      createTime: 'CreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpnConnectionId: 'string',
      name: 'string',
      createTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCustomerGatewayRequest extends $tea.Model {
  regionId: string;
  clientToken?: string;
  ipAddress: string;
  name?: string;
  description?: string;
  asn?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      ipAddress: 'IpAddress',
      name: 'Name',
      description: 'Description',
      asn: 'Asn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clientToken: 'string',
      ipAddress: 'string',
      name: 'string',
      description: 'string',
      asn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCustomerGatewayResponse extends $tea.Model {
  requestId: string;
  customerGatewayId: string;
  ipAddress: string;
  name: string;
  description: string;
  createTime: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      customerGatewayId: 'CustomerGatewayId',
      ipAddress: 'IpAddress',
      name: 'Name',
      description: 'Description',
      createTime: 'CreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      customerGatewayId: 'string',
      ipAddress: 'string',
      name: 'string',
      description: 'string',
      createTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyBgpGroupAttributeRequest extends $tea.Model {
  regionId: string;
  bgpGroupId: string;
  name?: string;
  description?: string;
  localAsn?: number;
  peerAsn?: number;
  authKey?: string;
  isFakeAsn?: boolean;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bgpGroupId: 'BgpGroupId',
      name: 'Name',
      description: 'Description',
      localAsn: 'LocalAsn',
      peerAsn: 'PeerAsn',
      authKey: 'AuthKey',
      isFakeAsn: 'IsFakeAsn',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bgpGroupId: 'string',
      name: 'string',
      description: 'string',
      localAsn: 'number',
      peerAsn: 'number',
      authKey: 'string',
      isFakeAsn: 'boolean',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyBgpGroupAttributeResponse extends $tea.Model {
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

export class DescribeBgpPeersRequest extends $tea.Model {
  routerId?: string;
  bgpPeerId?: string;
  bgpGroupId?: string;
  regionId: string;
  isDefault?: boolean;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      routerId: 'RouterId',
      bgpPeerId: 'BgpPeerId',
      bgpGroupId: 'BgpGroupId',
      regionId: 'RegionId',
      isDefault: 'IsDefault',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routerId: 'string',
      bgpPeerId: 'string',
      bgpGroupId: 'string',
      regionId: 'string',
      isDefault: 'boolean',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpPeersResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  bgpPeers: DescribeBgpPeersResponseBgpPeers;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      bgpPeers: 'BgpPeers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      bgpPeers: DescribeBgpPeersResponseBgpPeers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpGroupsRequest extends $tea.Model {
  routerId?: string;
  bgpGroupId?: string;
  regionId: string;
  isDefault?: boolean;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      routerId: 'RouterId',
      bgpGroupId: 'BgpGroupId',
      regionId: 'RegionId',
      isDefault: 'IsDefault',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routerId: 'string',
      bgpGroupId: 'string',
      regionId: 'string',
      isDefault: 'boolean',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpGroupsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  bgpGroups: DescribeBgpGroupsResponseBgpGroups;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      bgpGroups: 'BgpGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      bgpGroups: DescribeBgpGroupsResponseBgpGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBgpPeerRequest extends $tea.Model {
  regionId: string;
  bgpPeerId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bgpPeerId: 'BgpPeerId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bgpPeerId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBgpPeerResponse extends $tea.Model {
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

export class DeleteBgpNetworkRequest extends $tea.Model {
  regionId: string;
  dstCidrBlock: string;
  routerId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dstCidrBlock: 'DstCidrBlock',
      routerId: 'RouterId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dstCidrBlock: 'string',
      routerId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBgpNetworkResponse extends $tea.Model {
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

export class DeleteBgpGroupRequest extends $tea.Model {
  regionId: string;
  bgpGroupId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bgpGroupId: 'BgpGroupId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bgpGroupId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBgpGroupResponse extends $tea.Model {
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

export class CreateBgpPeerRequest extends $tea.Model {
  regionId: string;
  bgpGroupId: string;
  peerIpAddress?: string;
  enableBfd?: boolean;
  clientToken?: string;
  ipVersion?: string;
  bfdMultiHop?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bgpGroupId: 'BgpGroupId',
      peerIpAddress: 'PeerIpAddress',
      enableBfd: 'EnableBfd',
      clientToken: 'ClientToken',
      ipVersion: 'IpVersion',
      bfdMultiHop: 'BfdMultiHop',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bgpGroupId: 'string',
      peerIpAddress: 'string',
      enableBfd: 'boolean',
      clientToken: 'string',
      ipVersion: 'string',
      bfdMultiHop: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateBgpPeerResponse extends $tea.Model {
  requestId: string;
  bgpPeerId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      bgpPeerId: 'BgpPeerId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      bgpPeerId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateBgpGroupRequest extends $tea.Model {
  regionId: string;
  routerId: string;
  name?: string;
  description?: string;
  localAsn?: number;
  peerAsn: number;
  authKey?: string;
  isFakeAsn?: boolean;
  clientToken?: string;
  ipVersion?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routerId: 'RouterId',
      name: 'Name',
      description: 'Description',
      localAsn: 'LocalAsn',
      peerAsn: 'PeerAsn',
      authKey: 'AuthKey',
      isFakeAsn: 'IsFakeAsn',
      clientToken: 'ClientToken',
      ipVersion: 'IpVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routerId: 'string',
      name: 'string',
      description: 'string',
      localAsn: 'number',
      peerAsn: 'number',
      authKey: 'string',
      isFakeAsn: 'boolean',
      clientToken: 'string',
      ipVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateBgpGroupResponse extends $tea.Model {
  requestId: string;
  bgpGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      bgpGroupId: 'BgpGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      bgpGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddBgpNetworkRequest extends $tea.Model {
  regionId: string;
  dstCidrBlock: string;
  vpcId?: string;
  routerId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      dstCidrBlock: 'DstCidrBlock',
      vpcId: 'VpcId',
      routerId: 'RouterId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      dstCidrBlock: 'string',
      vpcId: 'string',
      routerId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddBgpNetworkResponse extends $tea.Model {
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

export class EnableVpcClassicLinkRequest extends $tea.Model {
  regionId: string;
  vpcId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpcId: 'VpcId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpcId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableVpcClassicLinkResponse extends $tea.Model {
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

export class DisableVpcClassicLinkRequest extends $tea.Model {
  regionId: string;
  vpcId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpcId: 'VpcId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpcId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableVpcClassicLinkResponse extends $tea.Model {
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

export class DescribeVpcAttributeRequest extends $tea.Model {
  vpcId: string;
  regionId: string;
  dryRun?: boolean;
  isDefault?: boolean;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      regionId: 'RegionId',
      dryRun: 'DryRun',
      isDefault: 'IsDefault',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      regionId: 'string',
      dryRun: 'boolean',
      isDefault: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcAttributeResponse extends $tea.Model {
  requestId: string;
  vpcId: string;
  regionId: string;
  status: string;
  vpcName: string;
  creationTime: string;
  cidrBlock: string;
  ipv6CidrBlock: string;
  VRouterId: string;
  description: string;
  isDefault: boolean;
  classicLinkEnabled: boolean;
  resourceGroupId: string;
  networkAclNum: string;
  ownerId: number;
  dhcpOptionsSetId: string;
  dhcpOptionsSetStatus: string;
  associatedCens: DescribeVpcAttributeResponseAssociatedCens;
  cloudResources: DescribeVpcAttributeResponseCloudResources;
  vSwitchIds: DescribeVpcAttributeResponseVSwitchIds;
  userCidrs: DescribeVpcAttributeResponseUserCidrs;
  secondaryCidrBlocks: DescribeVpcAttributeResponseSecondaryCidrBlocks;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpcId: 'VpcId',
      regionId: 'RegionId',
      status: 'Status',
      vpcName: 'VpcName',
      creationTime: 'CreationTime',
      cidrBlock: 'CidrBlock',
      ipv6CidrBlock: 'Ipv6CidrBlock',
      VRouterId: 'VRouterId',
      description: 'Description',
      isDefault: 'IsDefault',
      classicLinkEnabled: 'ClassicLinkEnabled',
      resourceGroupId: 'ResourceGroupId',
      networkAclNum: 'NetworkAclNum',
      ownerId: 'OwnerId',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      dhcpOptionsSetStatus: 'DhcpOptionsSetStatus',
      associatedCens: 'AssociatedCens',
      cloudResources: 'CloudResources',
      vSwitchIds: 'VSwitchIds',
      userCidrs: 'UserCidrs',
      secondaryCidrBlocks: 'SecondaryCidrBlocks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpcId: 'string',
      regionId: 'string',
      status: 'string',
      vpcName: 'string',
      creationTime: 'string',
      cidrBlock: 'string',
      ipv6CidrBlock: 'string',
      VRouterId: 'string',
      description: 'string',
      isDefault: 'boolean',
      classicLinkEnabled: 'boolean',
      resourceGroupId: 'string',
      networkAclNum: 'string',
      ownerId: 'number',
      dhcpOptionsSetId: 'string',
      dhcpOptionsSetStatus: 'string',
      associatedCens: DescribeVpcAttributeResponseAssociatedCens,
      cloudResources: DescribeVpcAttributeResponseCloudResources,
      vSwitchIds: DescribeVpcAttributeResponseVSwitchIds,
      userCidrs: DescribeVpcAttributeResponseUserCidrs,
      secondaryCidrBlocks: DescribeVpcAttributeResponseSecondaryCidrBlocks,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociatePhysicalConnectionFromVirtualBorderRouterRequest extends $tea.Model {
  regionId: string;
  vbrId: string;
  physicalConnectionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vbrId: 'VbrId',
      physicalConnectionId: 'PhysicalConnectionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vbrId: 'string',
      physicalConnectionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociatePhysicalConnectionFromVirtualBorderRouterResponse extends $tea.Model {
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

export class AssociatePhysicalConnectionToVirtualBorderRouterRequest extends $tea.Model {
  regionId: string;
  vbrId: string;
  physicalConnectionId: string;
  vlanId: string;
  circuitCode?: string;
  localGatewayIp?: string;
  peerGatewayIp?: string;
  peeringSubnetMask?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vbrId: 'VbrId',
      physicalConnectionId: 'PhysicalConnectionId',
      vlanId: 'VlanId',
      circuitCode: 'CircuitCode',
      localGatewayIp: 'LocalGatewayIp',
      peerGatewayIp: 'PeerGatewayIp',
      peeringSubnetMask: 'PeeringSubnetMask',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vbrId: 'string',
      physicalConnectionId: 'string',
      vlanId: 'string',
      circuitCode: 'string',
      localGatewayIp: 'string',
      peerGatewayIp: 'string',
      peeringSubnetMask: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociatePhysicalConnectionToVirtualBorderRouterResponse extends $tea.Model {
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

export class ModifySnatEntryRequest extends $tea.Model {
  regionId: string;
  snatTableId: string;
  snatEntryId: string;
  snatIp?: string;
  snatEntryName?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      snatTableId: 'SnatTableId',
      snatEntryId: 'SnatEntryId',
      snatIp: 'SnatIp',
      snatEntryName: 'SnatEntryName',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      snatTableId: 'string',
      snatEntryId: 'string',
      snatIp: 'string',
      snatEntryName: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySnatEntryResponse extends $tea.Model {
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

export class ModifyNatGatewaySpecRequest extends $tea.Model {
  regionId: string;
  natGatewayId: string;
  spec: string;
  autoPay?: boolean;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      natGatewayId: 'NatGatewayId',
      spec: 'Spec',
      autoPay: 'AutoPay',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      natGatewayId: 'string',
      spec: 'string',
      autoPay: 'boolean',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyNatGatewaySpecResponse extends $tea.Model {
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

export class ModifyNatGatewayAttributeRequest extends $tea.Model {
  regionId: string;
  natGatewayId: string;
  name?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      natGatewayId: 'NatGatewayId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      natGatewayId: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyNatGatewayAttributeResponse extends $tea.Model {
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

export class ModifyBandwidthPackageAttributeRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  name?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyBandwidthPackageAttributeResponse extends $tea.Model {
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

export class DescribeSnatTableEntriesRequest extends $tea.Model {
  regionId: string;
  snatTableId: string;
  snatEntryId?: string;
  sourceVSwitchId?: string;
  sourceCIDR?: string;
  snatIp?: string;
  snatEntryName?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      snatTableId: 'SnatTableId',
      snatEntryId: 'SnatEntryId',
      sourceVSwitchId: 'SourceVSwitchId',
      sourceCIDR: 'SourceCIDR',
      snatIp: 'SnatIp',
      snatEntryName: 'SnatEntryName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      snatTableId: 'string',
      snatEntryId: 'string',
      sourceVSwitchId: 'string',
      sourceCIDR: 'string',
      snatIp: 'string',
      snatEntryName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSnatTableEntriesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  snatTableEntries: DescribeSnatTableEntriesResponseSnatTableEntries;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      snatTableEntries: 'SnatTableEntries',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      snatTableEntries: DescribeSnatTableEntriesResponseSnatTableEntries,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSnatEntryRequest extends $tea.Model {
  regionId: string;
  snatTableId: string;
  snatEntryId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      snatTableId: 'SnatTableId',
      snatEntryId: 'SnatEntryId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      snatTableId: 'string',
      snatEntryId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSnatEntryResponse extends $tea.Model {
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

export class CreateSnatEntryRequest extends $tea.Model {
  regionId: string;
  snatTableId: string;
  sourceVSwitchId?: string;
  sourceCIDR?: string;
  snatIp: string;
  snatEntryName?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      snatTableId: 'SnatTableId',
      sourceVSwitchId: 'SourceVSwitchId',
      sourceCIDR: 'SourceCIDR',
      snatIp: 'SnatIp',
      snatEntryName: 'SnatEntryName',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      snatTableId: 'string',
      sourceVSwitchId: 'string',
      sourceCIDR: 'string',
      snatIp: 'string',
      snatEntryName: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSnatEntryResponse extends $tea.Model {
  requestId: string;
  snatEntryId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      snatEntryId: 'SnatEntryId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      snatEntryId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateBandwidthPackageRequest extends $tea.Model {
  regionId: string;
  natGatewayId: string;
  name?: string;
  description?: string;
  clientToken?: string;
  ipCount: number;
  bandwidth: number;
  ISP?: string;
  zone?: string;
  internetChargeType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      natGatewayId: 'NatGatewayId',
      name: 'Name',
      description: 'Description',
      clientToken: 'ClientToken',
      ipCount: 'IpCount',
      bandwidth: 'Bandwidth',
      ISP: 'ISP',
      zone: 'Zone',
      internetChargeType: 'InternetChargeType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      natGatewayId: 'string',
      name: 'string',
      description: 'string',
      clientToken: 'string',
      ipCount: 'number',
      bandwidth: 'number',
      ISP: 'string',
      zone: 'string',
      internetChargeType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateBandwidthPackageResponse extends $tea.Model {
  requestId: string;
  bandwidthPackageId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      bandwidthPackageId: 'BandwidthPackageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      bandwidthPackageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateHaVipRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  haVipId: string;
  instanceId: string;
  force?: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      haVipId: 'HaVipId',
      instanceId: 'InstanceId',
      force: 'Force',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      haVipId: 'string',
      instanceId: 'string',
      force: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateHaVipResponse extends $tea.Model {
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

export class UnassociateEipAddressRequest extends $tea.Model {
  force?: boolean;
  regionId?: string;
  allocationId: string;
  instanceId?: string;
  instanceType?: string;
  privateIpAddress?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      force: 'Force',
      regionId: 'RegionId',
      allocationId: 'AllocationId',
      instanceId: 'InstanceId',
      instanceType: 'InstanceType',
      privateIpAddress: 'PrivateIpAddress',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      force: 'boolean',
      regionId: 'string',
      allocationId: 'string',
      instanceId: 'string',
      instanceType: 'string',
      privateIpAddress: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateEipAddressResponse extends $tea.Model {
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

export class TerminateVirtualBorderRouterRequest extends $tea.Model {
  regionId: string;
  vbrId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vbrId: 'VbrId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vbrId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TerminateVirtualBorderRouterResponse extends $tea.Model {
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

export class TerminatePhysicalConnectionRequest extends $tea.Model {
  regionId: string;
  physicalConnectionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      physicalConnectionId: 'PhysicalConnectionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      physicalConnectionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TerminatePhysicalConnectionResponse extends $tea.Model {
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

export class RemoveBandwidthPackageIpsRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  clientToken?: string;
  removedIpAddresses: string[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      clientToken: 'ClientToken',
      removedIpAddresses: 'RemovedIpAddresses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      clientToken: 'string',
      removedIpAddresses: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveBandwidthPackageIpsResponse extends $tea.Model {
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

export class ReleaseEipAddressRequest extends $tea.Model {
  regionId?: string;
  allocationId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      allocationId: 'AllocationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      allocationId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReleaseEipAddressResponse extends $tea.Model {
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

export class RecoverVirtualBorderRouterRequest extends $tea.Model {
  regionId: string;
  vbrId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vbrId: 'VbrId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vbrId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecoverVirtualBorderRouterResponse extends $tea.Model {
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

export class ModifyVSwitchAttributeRequest extends $tea.Model {
  vSwitchId: string;
  vSwitchName?: string;
  regionId?: string;
  description?: string;
  ipv6CidrBlock?: number;
  static names(): { [key: string]: string } {
    return {
      vSwitchId: 'VSwitchId',
      vSwitchName: 'VSwitchName',
      regionId: 'RegionId',
      description: 'Description',
      ipv6CidrBlock: 'Ipv6CidrBlock',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vSwitchId: 'string',
      vSwitchName: 'string',
      regionId: 'string',
      description: 'string',
      ipv6CidrBlock: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVSwitchAttributeResponse extends $tea.Model {
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

export class ModifyVRouterAttributeRequest extends $tea.Model {
  regionId?: string;
  VRouterId: string;
  VRouterName?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      VRouterId: 'VRouterId',
      VRouterName: 'VRouterName',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      VRouterId: 'string',
      VRouterName: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVRouterAttributeResponse extends $tea.Model {
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

export class ModifyVpcAttributeRequest extends $tea.Model {
  vpcId: string;
  description?: string;
  vpcName?: string;
  cidrBlock?: string;
  regionId?: string;
  enableIPv6?: boolean;
  ipv6CidrBlock?: string;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      description: 'Description',
      vpcName: 'VpcName',
      cidrBlock: 'CidrBlock',
      regionId: 'RegionId',
      enableIPv6: 'EnableIPv6',
      ipv6CidrBlock: 'Ipv6CidrBlock',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      description: 'string',
      vpcName: 'string',
      cidrBlock: 'string',
      regionId: 'string',
      enableIPv6: 'boolean',
      ipv6CidrBlock: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpcAttributeResponse extends $tea.Model {
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

export class ModifyVirtualBorderRouterAttributeRequest extends $tea.Model {
  regionId: string;
  vbrId: string;
  vlanId?: number;
  circuitCode?: string;
  localGatewayIp?: string;
  peerGatewayIp?: string;
  peeringSubnetMask?: string;
  minTxInterval?: number;
  minRxInterval?: number;
  detectMultiplier?: number;
  description?: string;
  name?: string;
  associatedPhysicalConnections?: string;
  clientToken?: string;
  localIpv6GatewayIp?: string;
  peerIpv6GatewayIp?: string;
  peeringIpv6SubnetMask?: string;
  enableIpv6?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vbrId: 'VbrId',
      vlanId: 'VlanId',
      circuitCode: 'CircuitCode',
      localGatewayIp: 'LocalGatewayIp',
      peerGatewayIp: 'PeerGatewayIp',
      peeringSubnetMask: 'PeeringSubnetMask',
      minTxInterval: 'MinTxInterval',
      minRxInterval: 'MinRxInterval',
      detectMultiplier: 'DetectMultiplier',
      description: 'Description',
      name: 'Name',
      associatedPhysicalConnections: 'AssociatedPhysicalConnections',
      clientToken: 'ClientToken',
      localIpv6GatewayIp: 'LocalIpv6GatewayIp',
      peerIpv6GatewayIp: 'PeerIpv6GatewayIp',
      peeringIpv6SubnetMask: 'PeeringIpv6SubnetMask',
      enableIpv6: 'EnableIpv6',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vbrId: 'string',
      vlanId: 'number',
      circuitCode: 'string',
      localGatewayIp: 'string',
      peerGatewayIp: 'string',
      peeringSubnetMask: 'string',
      minTxInterval: 'number',
      minRxInterval: 'number',
      detectMultiplier: 'number',
      description: 'string',
      name: 'string',
      associatedPhysicalConnections: 'string',
      clientToken: 'string',
      localIpv6GatewayIp: 'string',
      peerIpv6GatewayIp: 'string',
      peeringIpv6SubnetMask: 'string',
      enableIpv6: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVirtualBorderRouterAttributeResponse extends $tea.Model {
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

export class ModifyRouterInterfaceSpecRequest extends $tea.Model {
  regionId: string;
  routerInterfaceId: string;
  spec: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routerInterfaceId: 'RouterInterfaceId',
      spec: 'Spec',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routerInterfaceId: 'string',
      spec: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyRouterInterfaceSpecResponse extends $tea.Model {
  requestId: string;
  spec: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      spec: 'Spec',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      spec: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyRouterInterfaceAttributeRequest extends $tea.Model {
  regionId: string;
  routerInterfaceId: string;
  name?: string;
  description?: string;
  oppositeInterfaceId?: string;
  oppositeRouterId?: string;
  oppositeRouterType?: string;
  oppositeInterfaceOwnerId?: number;
  healthCheckSourceIp?: string;
  healthCheckTargetIp?: string;
  hcThreshold?: number;
  hcRate?: number;
  deleteHealthCheckIp?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routerInterfaceId: 'RouterInterfaceId',
      name: 'Name',
      description: 'Description',
      oppositeInterfaceId: 'OppositeInterfaceId',
      oppositeRouterId: 'OppositeRouterId',
      oppositeRouterType: 'OppositeRouterType',
      oppositeInterfaceOwnerId: 'OppositeInterfaceOwnerId',
      healthCheckSourceIp: 'HealthCheckSourceIp',
      healthCheckTargetIp: 'HealthCheckTargetIp',
      hcThreshold: 'HcThreshold',
      hcRate: 'HcRate',
      deleteHealthCheckIp: 'DeleteHealthCheckIp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routerInterfaceId: 'string',
      name: 'string',
      description: 'string',
      oppositeInterfaceId: 'string',
      oppositeRouterId: 'string',
      oppositeRouterType: 'string',
      oppositeInterfaceOwnerId: 'number',
      healthCheckSourceIp: 'string',
      healthCheckTargetIp: 'string',
      hcThreshold: 'number',
      hcRate: 'number',
      deleteHealthCheckIp: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyRouterInterfaceAttributeResponse extends $tea.Model {
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

export class ModifyPhysicalConnectionAttributeRequest extends $tea.Model {
  regionId: string;
  physicalConnectionId: string;
  lineOperator?: string;
  bandwidth?: number;
  peerLocation?: string;
  portType?: string;
  redundantPhysicalConnectionId?: string;
  description?: string;
  name?: string;
  clientToken?: string;
  circuitCode?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      physicalConnectionId: 'PhysicalConnectionId',
      lineOperator: 'LineOperator',
      bandwidth: 'bandwidth',
      peerLocation: 'PeerLocation',
      portType: 'PortType',
      redundantPhysicalConnectionId: 'RedundantPhysicalConnectionId',
      description: 'Description',
      name: 'Name',
      clientToken: 'ClientToken',
      circuitCode: 'CircuitCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      physicalConnectionId: 'string',
      lineOperator: 'string',
      bandwidth: 'number',
      peerLocation: 'string',
      portType: 'string',
      redundantPhysicalConnectionId: 'string',
      description: 'string',
      name: 'string',
      clientToken: 'string',
      circuitCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyPhysicalConnectionAttributeResponse extends $tea.Model {
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

export class ModifyHaVipAttributeRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  haVipId: string;
  description?: string;
  name?: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      haVipId: 'HaVipId',
      description: 'Description',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      haVipId: 'string',
      description: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHaVipAttributeResponse extends $tea.Model {
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

export class ModifyForwardEntryRequest extends $tea.Model {
  forwardTableId: string;
  forwardEntryId: string;
  externalIp?: string;
  externalPort?: string;
  internalIp?: string;
  internalPort?: string;
  ipProtocol?: string;
  forwardEntryName?: string;
  regionId: string;
  clientToken?: string;
  portBreak?: boolean;
  static names(): { [key: string]: string } {
    return {
      forwardTableId: 'ForwardTableId',
      forwardEntryId: 'ForwardEntryId',
      externalIp: 'ExternalIp',
      externalPort: 'ExternalPort',
      internalIp: 'InternalIp',
      internalPort: 'InternalPort',
      ipProtocol: 'IpProtocol',
      forwardEntryName: 'ForwardEntryName',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      portBreak: 'PortBreak',
    };
  }

  static types(): { [key: string]: any } {
    return {
      forwardTableId: 'string',
      forwardEntryId: 'string',
      externalIp: 'string',
      externalPort: 'string',
      internalIp: 'string',
      internalPort: 'string',
      ipProtocol: 'string',
      forwardEntryName: 'string',
      regionId: 'string',
      clientToken: 'string',
      portBreak: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyForwardEntryResponse extends $tea.Model {
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

export class ModifyEipAddressAttributeRequest extends $tea.Model {
  allocationId: string;
  bandwidth?: string;
  regionId?: string;
  name?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      allocationId: 'AllocationId',
      bandwidth: 'Bandwidth',
      regionId: 'RegionId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allocationId: 'string',
      bandwidth: 'string',
      regionId: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyEipAddressAttributeResponse extends $tea.Model {
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

export class ModifyBandwidthPackageSpecRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  bandwidth: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      bandwidth: 'Bandwidth',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      bandwidth: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyBandwidthPackageSpecResponse extends $tea.Model {
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

export class EnablePhysicalConnectionRequest extends $tea.Model {
  regionId: string;
  physicalConnectionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      physicalConnectionId: 'PhysicalConnectionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      physicalConnectionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnablePhysicalConnectionResponse extends $tea.Model {
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

export class DescribeZonesRequest extends $tea.Model {
  regionId: string;
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

export class DescribeZonesResponse extends $tea.Model {
  requestId: string;
  zones: DescribeZonesResponseZones;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      zones: 'Zones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      zones: DescribeZonesResponseZones,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVSwitchesRequest extends $tea.Model {
  vpcId?: string;
  vSwitchId?: string;
  zoneId?: string;
  regionId?: string;
  vSwitchName?: string;
  dryRun?: boolean;
  isDefault?: boolean;
  routeTableId?: string;
  resourceGroupId?: string;
  pageNumber?: number;
  pageSize?: number;
  vSwitchOwnerId?: number;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      vSwitchId: 'VSwitchId',
      zoneId: 'ZoneId',
      regionId: 'RegionId',
      vSwitchName: 'VSwitchName',
      dryRun: 'DryRun',
      isDefault: 'IsDefault',
      routeTableId: 'RouteTableId',
      resourceGroupId: 'ResourceGroupId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vSwitchOwnerId: 'VSwitchOwnerId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      vSwitchId: 'string',
      zoneId: 'string',
      regionId: 'string',
      vSwitchName: 'string',
      dryRun: 'boolean',
      isDefault: 'boolean',
      routeTableId: 'string',
      resourceGroupId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      vSwitchOwnerId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVSwitchesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  vSwitches: DescribeVSwitchesResponseVSwitches;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vSwitches: 'VSwitches',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      vSwitches: DescribeVSwitchesResponseVSwitches,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVRoutersRequest extends $tea.Model {
  VRouterId?: string;
  regionId: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      VRouterId: 'VRouterId',
      regionId: 'RegionId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      VRouterId: 'string',
      regionId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVRoutersResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  VRouters: DescribeVRoutersResponseVRouters;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      VRouters: 'VRouters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      VRouters: DescribeVRoutersResponseVRouters,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsRequest extends $tea.Model {
  vpcId?: string;
  regionId: string;
  vpcName?: string;
  isDefault?: boolean;
  dryRun?: boolean;
  resourceGroupId?: string;
  pageNumber?: number;
  pageSize?: number;
  vpcOwnerId?: number;
  dhcpOptionsSetId?: string;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      regionId: 'RegionId',
      vpcName: 'VpcName',
      isDefault: 'IsDefault',
      dryRun: 'DryRun',
      resourceGroupId: 'ResourceGroupId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vpcOwnerId: 'VpcOwnerId',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      regionId: 'string',
      vpcName: 'string',
      isDefault: 'boolean',
      dryRun: 'boolean',
      resourceGroupId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      vpcOwnerId: 'number',
      dhcpOptionsSetId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  vpcs: DescribeVpcsResponseVpcs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      vpcs: 'Vpcs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      vpcs: DescribeVpcsResponseVpcs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersForPhysicalConnectionRequest extends $tea.Model {
  filter?: DescribeVirtualBorderRoutersForPhysicalConnectionRequestFilter[];
  regionId: string;
  physicalConnectionId: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      filter: 'Filter',
      regionId: 'RegionId',
      physicalConnectionId: 'PhysicalConnectionId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      filter: { 'type': 'array', 'itemType': DescribeVirtualBorderRoutersForPhysicalConnectionRequestFilter },
      regionId: 'string',
      physicalConnectionId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersForPhysicalConnectionResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  virtualBorderRouterForPhysicalConnectionSet: DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSet;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      virtualBorderRouterForPhysicalConnectionSet: 'VirtualBorderRouterForPhysicalConnectionSet',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      virtualBorderRouterForPhysicalConnectionSet: DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSet,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersRequest extends $tea.Model {
  regionId: string;
  pageNumber?: number;
  pageSize?: number;
  filter?: DescribeVirtualBorderRoutersRequestFilter[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      filter: 'Filter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      filter: { 'type': 'array', 'itemType': DescribeVirtualBorderRoutersRequestFilter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  virtualBorderRouterSet: DescribeVirtualBorderRoutersResponseVirtualBorderRouterSet;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      virtualBorderRouterSet: 'VirtualBorderRouterSet',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      virtualBorderRouterSet: DescribeVirtualBorderRoutersResponseVirtualBorderRouterSet,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTablesRequest extends $tea.Model {
  regionId?: string;
  VRouterId?: string;
  routeTableId?: string;
  routerType?: string;
  routerId?: string;
  type?: string;
  routeTableName?: string;
  resourceGroupId?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      VRouterId: 'VRouterId',
      routeTableId: 'RouteTableId',
      routerType: 'RouterType',
      routerId: 'RouterId',
      type: 'Type',
      routeTableName: 'RouteTableName',
      resourceGroupId: 'ResourceGroupId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      VRouterId: 'string',
      routeTableId: 'string',
      routerType: 'string',
      routerId: 'string',
      type: 'string',
      routeTableName: 'string',
      resourceGroupId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTablesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  routeTables: DescribeRouteTablesResponseRouteTables;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      routeTables: 'RouteTables',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      routeTables: DescribeRouteTablesResponseRouteTables,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouterInterfacesRequest extends $tea.Model {
  regionId: string;
  includeReservationData?: boolean;
  pageNumber?: number;
  pageSize?: number;
  filter?: DescribeRouterInterfacesRequestFilter[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      includeReservationData: 'IncludeReservationData',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      filter: 'Filter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      includeReservationData: 'boolean',
      pageNumber: 'number',
      pageSize: 'number',
      filter: { 'type': 'array', 'itemType': DescribeRouterInterfacesRequestFilter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouterInterfacesResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  routerInterfaceSet: DescribeRouterInterfacesResponseRouterInterfaceSet;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      routerInterfaceSet: 'RouterInterfaceSet',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      routerInterfaceSet: DescribeRouterInterfacesResponseRouterInterfaceSet,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsRequest extends $tea.Model {
  acceptLanguage?: string;
  static names(): { [key: string]: string } {
    return {
      acceptLanguage: 'AcceptLanguage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      acceptLanguage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponse extends $tea.Model {
  requestId: string;
  regions: DescribeRegionsResponseRegions;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regions: 'Regions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regions: DescribeRegionsResponseRegions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePhysicalConnectionsRequest extends $tea.Model {
  regionId: string;
  pageNumber?: number;
  pageSize?: number;
  filter?: DescribePhysicalConnectionsRequestFilter[];
  includeReservationData?: boolean;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      filter: 'Filter',
      includeReservationData: 'IncludeReservationData',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      filter: { 'type': 'array', 'itemType': DescribePhysicalConnectionsRequestFilter },
      includeReservationData: 'boolean',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePhysicalConnectionsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  physicalConnectionSet: DescribePhysicalConnectionsResponsePhysicalConnectionSet;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      physicalConnectionSet: 'PhysicalConnectionSet',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      physicalConnectionSet: DescribePhysicalConnectionsResponsePhysicalConnectionSet,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNewProjectEipMonitorDataRequest extends $tea.Model {
  regionId?: string;
  allocationId: string;
  startTime: string;
  endTime: string;
  period?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      allocationId: 'AllocationId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      allocationId: 'string',
      startTime: 'string',
      endTime: 'string',
      period: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNewProjectEipMonitorDataResponse extends $tea.Model {
  requestId: string;
  eipMonitorDatas: DescribeNewProjectEipMonitorDataResponseEipMonitorDatas;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      eipMonitorDatas: 'EipMonitorDatas',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      eipMonitorDatas: DescribeNewProjectEipMonitorDataResponseEipMonitorDatas,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysRequest extends $tea.Model {
  regionId: string;
  natGatewayId?: string;
  vpcId?: string;
  name?: string;
  instanceChargeType?: string;
  spec?: string;
  natType?: string;
  resourceGroupId?: string;
  pageNumber?: number;
  pageSize?: number;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      natGatewayId: 'NatGatewayId',
      vpcId: 'VpcId',
      name: 'Name',
      instanceChargeType: 'InstanceChargeType',
      spec: 'Spec',
      natType: 'NatType',
      resourceGroupId: 'ResourceGroupId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      natGatewayId: 'string',
      vpcId: 'string',
      name: 'string',
      instanceChargeType: 'string',
      spec: 'string',
      natType: 'string',
      resourceGroupId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  natGateways: DescribeNatGatewaysResponseNatGateways;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      natGateways: 'NatGateways',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      natGateways: DescribeNatGatewaysResponseNatGateways,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHaVipsRequest extends $tea.Model {
  regionId: string;
  pageNumber?: number;
  pageSize?: number;
  filter?: DescribeHaVipsRequestFilter[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      filter: 'Filter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      filter: { 'type': 'array', 'itemType': DescribeHaVipsRequestFilter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHaVipsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  haVips: DescribeHaVipsResponseHaVips;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      haVips: 'HaVips',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      haVips: DescribeHaVipsResponseHaVips,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeForwardTableEntriesRequest extends $tea.Model {
  regionId: string;
  forwardTableId: string;
  forwardEntryId?: string;
  externalIp?: string;
  externalPort?: string;
  internalIp?: string;
  internalPort?: string;
  ipProtocol?: string;
  forwardEntryName?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      forwardTableId: 'ForwardTableId',
      forwardEntryId: 'ForwardEntryId',
      externalIp: 'ExternalIp',
      externalPort: 'ExternalPort',
      internalIp: 'InternalIp',
      internalPort: 'InternalPort',
      ipProtocol: 'IpProtocol',
      forwardEntryName: 'ForwardEntryName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      forwardTableId: 'string',
      forwardEntryId: 'string',
      externalIp: 'string',
      externalPort: 'string',
      internalIp: 'string',
      internalPort: 'string',
      ipProtocol: 'string',
      forwardEntryName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeForwardTableEntriesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  forwardTableEntries: DescribeForwardTableEntriesResponseForwardTableEntries;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      forwardTableEntries: 'ForwardTableEntries',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      forwardTableEntries: DescribeForwardTableEntriesResponseForwardTableEntries,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipMonitorDataRequest extends $tea.Model {
  regionId?: string;
  allocationId: string;
  startTime: string;
  endTime: string;
  period?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      allocationId: 'AllocationId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      allocationId: 'string',
      startTime: 'string',
      endTime: 'string',
      period: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipMonitorDataResponse extends $tea.Model {
  requestId: string;
  eipMonitorDatas: DescribeEipMonitorDataResponseEipMonitorDatas;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      eipMonitorDatas: 'EipMonitorDatas',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      eipMonitorDatas: DescribeEipMonitorDataResponseEipMonitorDatas,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipAddressesRequest extends $tea.Model {
  regionId: string;
  includeReservationData?: boolean;
  status?: string;
  eipAddress?: string;
  allocationId?: string;
  segmentInstanceId?: string;
  resourceGroupId?: string;
  pageNumber?: number;
  pageSize?: number;
  ISP?: string;
  filter?: DescribeEipAddressesRequestFilter[];
  lockReason?: string;
  associatedInstanceType?: string;
  associatedInstanceId?: string;
  chargeType?: string;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      includeReservationData: 'IncludeReservationData',
      status: 'Status',
      eipAddress: 'EipAddress',
      allocationId: 'AllocationId',
      segmentInstanceId: 'SegmentInstanceId',
      resourceGroupId: 'ResourceGroupId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      ISP: 'ISP',
      filter: 'Filter',
      lockReason: 'LockReason',
      associatedInstanceType: 'AssociatedInstanceType',
      associatedInstanceId: 'AssociatedInstanceId',
      chargeType: 'ChargeType',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      includeReservationData: 'boolean',
      status: 'string',
      eipAddress: 'string',
      allocationId: 'string',
      segmentInstanceId: 'string',
      resourceGroupId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      ISP: 'string',
      filter: { 'type': 'array', 'itemType': DescribeEipAddressesRequestFilter },
      lockReason: 'string',
      associatedInstanceType: 'string',
      associatedInstanceId: 'string',
      chargeType: 'string',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipAddressesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  eipAddresses: DescribeEipAddressesResponseEipAddresses;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      eipAddresses: 'EipAddresses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      eipAddresses: DescribeEipAddressesResponseEipAddresses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBandwidthPackagesRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId?: string;
  natGatewayId?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      natGatewayId: 'NatGatewayId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      natGatewayId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBandwidthPackagesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  bandwidthPackages: DescribeBandwidthPackagesResponseBandwidthPackages;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      bandwidthPackages: 'BandwidthPackages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      bandwidthPackages: DescribeBandwidthPackagesResponseBandwidthPackages,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessPointsRequest extends $tea.Model {
  regionId: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessPointsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  accessPointSet: DescribeAccessPointsResponseAccessPointSet;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      accessPointSet: 'AccessPointSet',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      accessPointSet: DescribeAccessPointsResponseAccessPointSet,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVSwitchRequest extends $tea.Model {
  vSwitchId: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      vSwitchId: 'VSwitchId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vSwitchId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVSwitchResponse extends $tea.Model {
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

export class DeleteVpcRequest extends $tea.Model {
  vpcId: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVpcResponse extends $tea.Model {
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

export class DeleteVirtualBorderRouterRequest extends $tea.Model {
  regionId: string;
  vbrId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vbrId: 'VbrId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vbrId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVirtualBorderRouterResponse extends $tea.Model {
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

export class DeleteRouterInterfaceRequest extends $tea.Model {
  regionId: string;
  routerInterfaceId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routerInterfaceId: 'RouterInterfaceId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routerInterfaceId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRouterInterfaceResponse extends $tea.Model {
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

export class DeleteRouteEntryRequest extends $tea.Model {
  regionId?: string;
  routeTableId?: string;
  routeEntryId?: string;
  destinationCidrBlock?: string;
  nextHopId?: string;
  nextHopList?: DeleteRouteEntryRequestNextHopList[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routeTableId: 'RouteTableId',
      routeEntryId: 'RouteEntryId',
      destinationCidrBlock: 'DestinationCidrBlock',
      nextHopId: 'NextHopId',
      nextHopList: 'NextHopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routeTableId: 'string',
      routeEntryId: 'string',
      destinationCidrBlock: 'string',
      nextHopId: 'string',
      nextHopList: { 'type': 'array', 'itemType': DeleteRouteEntryRequestNextHopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRouteEntryResponse extends $tea.Model {
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

export class DeletePhysicalConnectionRequest extends $tea.Model {
  regionId: string;
  physicalConnectionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      physicalConnectionId: 'PhysicalConnectionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      physicalConnectionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeletePhysicalConnectionResponse extends $tea.Model {
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

export class DeleteNatGatewayRequest extends $tea.Model {
  regionId: string;
  natGatewayId: string;
  force?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      natGatewayId: 'NatGatewayId',
      force: 'Force',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      natGatewayId: 'string',
      force: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteNatGatewayResponse extends $tea.Model {
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

export class DeleteHaVipRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  haVipId: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      haVipId: 'HaVipId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      haVipId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteHaVipResponse extends $tea.Model {
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

export class DeleteForwardEntryRequest extends $tea.Model {
  regionId: string;
  forwardTableId: string;
  forwardEntryId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      forwardTableId: 'ForwardTableId',
      forwardEntryId: 'ForwardEntryId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      forwardTableId: 'string',
      forwardEntryId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteForwardEntryResponse extends $tea.Model {
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

export class DeleteBandwidthPackageRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  force?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      force: 'Force',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      force: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBandwidthPackageResponse extends $tea.Model {
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

export class DeactivateRouterInterfaceRequest extends $tea.Model {
  regionId: string;
  routerInterfaceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routerInterfaceId: 'RouterInterfaceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routerInterfaceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeactivateRouterInterfaceResponse extends $tea.Model {
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

export class CreateVSwitchRequest extends $tea.Model {
  zoneId: string;
  regionId?: string;
  cidrBlock: string;
  ipv6CidrBlock?: number;
  vpcId: string;
  vSwitchName?: string;
  description?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      zoneId: 'ZoneId',
      regionId: 'RegionId',
      cidrBlock: 'CidrBlock',
      ipv6CidrBlock: 'Ipv6CidrBlock',
      vpcId: 'VpcId',
      vSwitchName: 'VSwitchName',
      description: 'Description',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zoneId: 'string',
      regionId: 'string',
      cidrBlock: 'string',
      ipv6CidrBlock: 'number',
      vpcId: 'string',
      vSwitchName: 'string',
      description: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVSwitchResponse extends $tea.Model {
  requestId: string;
  vSwitchId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vSwitchId: 'VSwitchId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vSwitchId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVpcRequest extends $tea.Model {
  regionId: string;
  cidrBlock?: string;
  ipv6CidrBlock?: string;
  enableIpv6?: boolean;
  vpcName?: string;
  description?: string;
  resourceGroupId?: string;
  dryRun?: boolean;
  userCidr?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      cidrBlock: 'CidrBlock',
      ipv6CidrBlock: 'Ipv6CidrBlock',
      enableIpv6: 'EnableIpv6',
      vpcName: 'VpcName',
      description: 'Description',
      resourceGroupId: 'ResourceGroupId',
      dryRun: 'DryRun',
      userCidr: 'UserCidr',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      cidrBlock: 'string',
      ipv6CidrBlock: 'string',
      enableIpv6: 'boolean',
      vpcName: 'string',
      description: 'string',
      resourceGroupId: 'string',
      dryRun: 'boolean',
      userCidr: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVpcResponse extends $tea.Model {
  requestId: string;
  vpcId: string;
  VRouterId: string;
  routeTableId: string;
  resourceGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vpcId: 'VpcId',
      VRouterId: 'VRouterId',
      routeTableId: 'RouteTableId',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vpcId: 'string',
      VRouterId: 'string',
      routeTableId: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVirtualBorderRouterRequest extends $tea.Model {
  regionId: string;
  physicalConnectionId: string;
  vbrOwnerId?: number;
  vlanId: number;
  circuitCode?: string;
  localGatewayIp?: string;
  peerGatewayIp?: string;
  peeringSubnetMask?: string;
  description?: string;
  name?: string;
  clientToken?: string;
  localIpv6GatewayIp?: string;
  peerIpv6GatewayIp?: string;
  peeringIpv6SubnetMask?: string;
  enableIpv6?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      physicalConnectionId: 'PhysicalConnectionId',
      vbrOwnerId: 'VbrOwnerId',
      vlanId: 'VlanId',
      circuitCode: 'CircuitCode',
      localGatewayIp: 'LocalGatewayIp',
      peerGatewayIp: 'PeerGatewayIp',
      peeringSubnetMask: 'PeeringSubnetMask',
      description: 'Description',
      name: 'Name',
      clientToken: 'ClientToken',
      localIpv6GatewayIp: 'LocalIpv6GatewayIp',
      peerIpv6GatewayIp: 'PeerIpv6GatewayIp',
      peeringIpv6SubnetMask: 'PeeringIpv6SubnetMask',
      enableIpv6: 'EnableIpv6',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      physicalConnectionId: 'string',
      vbrOwnerId: 'number',
      vlanId: 'number',
      circuitCode: 'string',
      localGatewayIp: 'string',
      peerGatewayIp: 'string',
      peeringSubnetMask: 'string',
      description: 'string',
      name: 'string',
      clientToken: 'string',
      localIpv6GatewayIp: 'string',
      peerIpv6GatewayIp: 'string',
      peeringIpv6SubnetMask: 'string',
      enableIpv6: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateVirtualBorderRouterResponse extends $tea.Model {
  requestId: string;
  vbrId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vbrId: 'VbrId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vbrId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRouterInterfaceRequest extends $tea.Model {
  regionId: string;
  role: string;
  oppositeRegionId: string;
  spec: string;
  routerType: string;
  routerId: string;
  oppositeInterfaceId?: string;
  oppositeRouterId?: string;
  oppositeRouterType?: string;
  oppositeInterfaceOwnerId?: string;
  healthCheckSourceIp?: string;
  healthCheckTargetIp?: string;
  accessPointId?: string;
  oppositeAccessPointId?: string;
  description?: string;
  name?: string;
  period?: number;
  instanceChargeType?: string;
  autoPay?: boolean;
  pricingCycle?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      role: 'Role',
      oppositeRegionId: 'OppositeRegionId',
      spec: 'Spec',
      routerType: 'RouterType',
      routerId: 'RouterId',
      oppositeInterfaceId: 'OppositeInterfaceId',
      oppositeRouterId: 'OppositeRouterId',
      oppositeRouterType: 'OppositeRouterType',
      oppositeInterfaceOwnerId: 'OppositeInterfaceOwnerId',
      healthCheckSourceIp: 'HealthCheckSourceIp',
      healthCheckTargetIp: 'HealthCheckTargetIp',
      accessPointId: 'AccessPointId',
      oppositeAccessPointId: 'OppositeAccessPointId',
      description: 'Description',
      name: 'Name',
      period: 'Period',
      instanceChargeType: 'InstanceChargeType',
      autoPay: 'AutoPay',
      pricingCycle: 'PricingCycle',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      role: 'string',
      oppositeRegionId: 'string',
      spec: 'string',
      routerType: 'string',
      routerId: 'string',
      oppositeInterfaceId: 'string',
      oppositeRouterId: 'string',
      oppositeRouterType: 'string',
      oppositeInterfaceOwnerId: 'string',
      healthCheckSourceIp: 'string',
      healthCheckTargetIp: 'string',
      accessPointId: 'string',
      oppositeAccessPointId: 'string',
      description: 'string',
      name: 'string',
      period: 'number',
      instanceChargeType: 'string',
      autoPay: 'boolean',
      pricingCycle: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRouterInterfaceResponse extends $tea.Model {
  requestId: string;
  routerInterfaceId: string;
  orderId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      routerInterfaceId: 'RouterInterfaceId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      routerInterfaceId: 'string',
      orderId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRouteEntryRequest extends $tea.Model {
  regionId?: string;
  routeTableId: string;
  destinationCidrBlock: string;
  nextHopId?: string;
  clientToken?: string;
  routeEntryName?: string;
  description?: string;
  nextHopType?: string;
  nextHopList?: CreateRouteEntryRequestNextHopList[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routeTableId: 'RouteTableId',
      destinationCidrBlock: 'DestinationCidrBlock',
      nextHopId: 'NextHopId',
      clientToken: 'ClientToken',
      routeEntryName: 'RouteEntryName',
      description: 'Description',
      nextHopType: 'NextHopType',
      nextHopList: 'NextHopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routeTableId: 'string',
      destinationCidrBlock: 'string',
      nextHopId: 'string',
      clientToken: 'string',
      routeEntryName: 'string',
      description: 'string',
      nextHopType: 'string',
      nextHopList: { 'type': 'array', 'itemType': CreateRouteEntryRequestNextHopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRouteEntryResponse extends $tea.Model {
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

export class CreatePhysicalConnectionRequest extends $tea.Model {
  regionId: string;
  accessPointId: string;
  type?: string;
  lineOperator: string;
  bandwidth?: number;
  peerLocation: string;
  portType?: string;
  redundantPhysicalConnectionId?: string;
  description?: string;
  name?: string;
  circuitCode?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      accessPointId: 'AccessPointId',
      type: 'Type',
      lineOperator: 'LineOperator',
      bandwidth: 'bandwidth',
      peerLocation: 'PeerLocation',
      portType: 'PortType',
      redundantPhysicalConnectionId: 'RedundantPhysicalConnectionId',
      description: 'Description',
      name: 'Name',
      circuitCode: 'CircuitCode',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      accessPointId: 'string',
      type: 'string',
      lineOperator: 'string',
      bandwidth: 'number',
      peerLocation: 'string',
      portType: 'string',
      redundantPhysicalConnectionId: 'string',
      description: 'string',
      name: 'string',
      circuitCode: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreatePhysicalConnectionResponse extends $tea.Model {
  requestId: string;
  physicalConnectionId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      physicalConnectionId: 'PhysicalConnectionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      physicalConnectionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNatGatewayRequest extends $tea.Model {
  regionId: string;
  vpcId: string;
  name?: string;
  description?: string;
  clientToken?: string;
  spec?: string;
  bandwidthPackage?: CreateNatGatewayRequestBandwidthPackage[];
  instanceChargeType?: string;
  pricingCycle?: string;
  duration?: string;
  autoPay?: boolean;
  vSwitchId?: string;
  natType?: string;
  internetChargeType?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpcId: 'VpcId',
      name: 'Name',
      description: 'Description',
      clientToken: 'ClientToken',
      spec: 'Spec',
      bandwidthPackage: 'BandwidthPackage',
      instanceChargeType: 'InstanceChargeType',
      pricingCycle: 'PricingCycle',
      duration: 'Duration',
      autoPay: 'AutoPay',
      vSwitchId: 'VSwitchId',
      natType: 'NatType',
      internetChargeType: 'InternetChargeType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpcId: 'string',
      name: 'string',
      description: 'string',
      clientToken: 'string',
      spec: 'string',
      bandwidthPackage: { 'type': 'array', 'itemType': CreateNatGatewayRequestBandwidthPackage },
      instanceChargeType: 'string',
      pricingCycle: 'string',
      duration: 'string',
      autoPay: 'boolean',
      vSwitchId: 'string',
      natType: 'string',
      internetChargeType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNatGatewayResponse extends $tea.Model {
  requestId: string;
  natGatewayId: string;
  forwardTableIds: CreateNatGatewayResponseForwardTableIds;
  snatTableIds: CreateNatGatewayResponseSnatTableIds;
  bandwidthPackageIds: CreateNatGatewayResponseBandwidthPackageIds;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      natGatewayId: 'NatGatewayId',
      forwardTableIds: 'ForwardTableIds',
      snatTableIds: 'SnatTableIds',
      bandwidthPackageIds: 'BandwidthPackageIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      natGatewayId: 'string',
      forwardTableIds: CreateNatGatewayResponseForwardTableIds,
      snatTableIds: CreateNatGatewayResponseSnatTableIds,
      bandwidthPackageIds: CreateNatGatewayResponseBandwidthPackageIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateHaVipRequest extends $tea.Model {
  name?: string;
  clientToken?: string;
  regionId: string;
  vSwitchId: string;
  ipAddress?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      vSwitchId: 'VSwitchId',
      ipAddress: 'IpAddress',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      clientToken: 'string',
      regionId: 'string',
      vSwitchId: 'string',
      ipAddress: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateHaVipResponse extends $tea.Model {
  requestId: string;
  haVipId: string;
  ipAddress: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      haVipId: 'HaVipId',
      ipAddress: 'IpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      haVipId: 'string',
      ipAddress: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateForwardEntryRequest extends $tea.Model {
  regionId: string;
  forwardTableId: string;
  externalIp: string;
  externalPort: string;
  internalIp: string;
  internalPort: string;
  ipProtocol: string;
  forwardEntryName?: string;
  clientToken?: string;
  portBreak?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      forwardTableId: 'ForwardTableId',
      externalIp: 'ExternalIp',
      externalPort: 'ExternalPort',
      internalIp: 'InternalIp',
      internalPort: 'InternalPort',
      ipProtocol: 'IpProtocol',
      forwardEntryName: 'ForwardEntryName',
      clientToken: 'ClientToken',
      portBreak: 'PortBreak',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      forwardTableId: 'string',
      externalIp: 'string',
      externalPort: 'string',
      internalIp: 'string',
      internalPort: 'string',
      ipProtocol: 'string',
      forwardEntryName: 'string',
      clientToken: 'string',
      portBreak: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateForwardEntryResponse extends $tea.Model {
  requestId: string;
  forwardEntryId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      forwardEntryId: 'ForwardEntryId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      forwardEntryId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ConnectRouterInterfaceRequest extends $tea.Model {
  regionId: string;
  routerInterfaceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routerInterfaceId: 'RouterInterfaceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routerInterfaceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ConnectRouterInterfaceResponse extends $tea.Model {
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

export class CancelPhysicalConnectionRequest extends $tea.Model {
  regionId: string;
  physicalConnectionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      physicalConnectionId: 'PhysicalConnectionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      physicalConnectionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelPhysicalConnectionResponse extends $tea.Model {
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

export class AssociateHaVipRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  haVipId: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      haVipId: 'HaVipId',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      haVipId: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociateHaVipResponse extends $tea.Model {
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

export class AssociateEipAddressRequest extends $tea.Model {
  regionId?: string;
  allocationId: string;
  instanceId: string;
  instanceType?: string;
  instanceRegionId?: string;
  privateIpAddress?: string;
  mode?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      allocationId: 'AllocationId',
      instanceId: 'InstanceId',
      instanceType: 'InstanceType',
      instanceRegionId: 'InstanceRegionId',
      privateIpAddress: 'PrivateIpAddress',
      mode: 'Mode',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      allocationId: 'string',
      instanceId: 'string',
      instanceType: 'string',
      instanceRegionId: 'string',
      privateIpAddress: 'string',
      mode: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociateEipAddressResponse extends $tea.Model {
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

export class AllocateEipAddressRequest extends $tea.Model {
  regionId: string;
  bandwidth?: string;
  period?: number;
  ISP?: string;
  activityId?: number;
  netmode?: string;
  autoPay?: boolean;
  pricingCycle?: string;
  instanceChargeType?: string;
  internetChargeType?: string;
  resourceGroupId?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidth: 'Bandwidth',
      period: 'Period',
      ISP: 'ISP',
      activityId: 'ActivityId',
      netmode: 'Netmode',
      autoPay: 'AutoPay',
      pricingCycle: 'PricingCycle',
      instanceChargeType: 'InstanceChargeType',
      internetChargeType: 'InternetChargeType',
      resourceGroupId: 'ResourceGroupId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidth: 'string',
      period: 'number',
      ISP: 'string',
      activityId: 'number',
      netmode: 'string',
      autoPay: 'boolean',
      pricingCycle: 'string',
      instanceChargeType: 'string',
      internetChargeType: 'string',
      resourceGroupId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateEipAddressResponse extends $tea.Model {
  requestId: string;
  allocationId: string;
  eipAddress: string;
  orderId: number;
  resourceGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      allocationId: 'AllocationId',
      eipAddress: 'EipAddress',
      orderId: 'OrderId',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      allocationId: 'string',
      eipAddress: 'string',
      orderId: 'number',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddBandwidthPackageIpsRequest extends $tea.Model {
  regionId: string;
  bandwidthPackageId: string;
  ipCount: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      bandwidthPackageId: 'BandwidthPackageId',
      ipCount: 'IpCount',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      bandwidthPackageId: 'string',
      ipCount: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddBandwidthPackageIpsResponse extends $tea.Model {
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

export class ActivateRouterInterfaceRequest extends $tea.Model {
  regionId: string;
  routerInterfaceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      routerInterfaceId: 'RouterInterfaceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      routerInterfaceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ActivateRouterInterfaceResponse extends $tea.Model {
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

export class ListNatGatewayEcsMetricResponseMetricDataList extends $tea.Model {
  natGatewayId: string;
  privateIpAddress: string;
  timestamp: number;
  activeSessionNum: number;
  newSessionRate: number;
  rxBps: number;
  txBps: number;
  rxPps: number;
  txPps: number;
  static names(): { [key: string]: string } {
    return {
      natGatewayId: 'NatGatewayId',
      privateIpAddress: 'PrivateIpAddress',
      timestamp: 'Timestamp',
      activeSessionNum: 'ActiveSessionNum',
      newSessionRate: 'NewSessionRate',
      rxBps: 'RxBps',
      txBps: 'TxBps',
      rxPps: 'RxPps',
      txPps: 'TxPps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      natGatewayId: 'string',
      privateIpAddress: 'string',
      timestamp: 'number',
      activeSessionNum: 'number',
      newSessionRate: 'number',
      rxBps: 'number',
      txBps: 'number',
      rxPps: 'number',
      txPps: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDhcpOptionsSetResponseAssociateVpcs extends $tea.Model {
  vpcId: string;
  associateStatus: string;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      associateStatus: 'AssociateStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      associateStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDhcpOptionsSetResponseDhcpOptions extends $tea.Model {
  domainNameServers: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      domainNameServers: 'DomainNameServers',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainNameServers: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDhcpOptionsSetsResponseDhcpOptionsSetsDhcpOptions extends $tea.Model {
  domainNameServers: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      domainNameServers: 'DomainNameServers',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainNameServers: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDhcpOptionsSetsResponseDhcpOptionsSets extends $tea.Model {
  dhcpOptionsSetName: string;
  dhcpOptionsSetDescription: string;
  ownerId: number;
  status: string;
  dhcpOptionsSetId: string;
  associateVpcCount: number;
  dhcpOptions: ListDhcpOptionsSetsResponseDhcpOptionsSetsDhcpOptions;
  static names(): { [key: string]: string } {
    return {
      dhcpOptionsSetName: 'DhcpOptionsSetName',
      dhcpOptionsSetDescription: 'DhcpOptionsSetDescription',
      ownerId: 'OwnerId',
      status: 'Status',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      associateVpcCount: 'AssociateVpcCount',
      dhcpOptions: 'DhcpOptions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dhcpOptionsSetName: 'string',
      dhcpOptionsSetDescription: 'string',
      ownerId: 'number',
      status: 'string',
      dhcpOptionsSetId: 'string',
      associateVpcCount: 'number',
      dhcpOptions: ListDhcpOptionsSetsResponseDhcpOptionsSetsDhcpOptions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributesInstanceRenewAttribute extends $tea.Model {
  instanceId: string;
  renewalStatus: string;
  duration: number;
  pricingCycle: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      renewalStatus: 'RenewalStatus',
      duration: 'Duration',
      pricingCycle: 'PricingCycle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      renewalStatus: 'string',
      duration: 'number',
      pricingCycle: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributes extends $tea.Model {
  instanceRenewAttribute: DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributesInstanceRenewAttribute[];
  static names(): { [key: string]: string } {
    return {
      instanceRenewAttribute: 'InstanceRenewAttribute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceRenewAttribute: { 'type': 'array', 'itemType': DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributesInstanceRenewAttribute },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipSegmentResponseEipSegmentsEipSegment extends $tea.Model {
  instanceId: string;
  segment: string;
  status: string;
  regionId: string;
  ipCount: string;
  name: string;
  descritpion: string;
  creationTime: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      segment: 'Segment',
      status: 'Status',
      regionId: 'RegionId',
      ipCount: 'IpCount',
      name: 'Name',
      descritpion: 'Descritpion',
      creationTime: 'CreationTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      segment: 'string',
      status: 'string',
      regionId: 'string',
      ipCount: 'string',
      name: 'string',
      descritpion: 'string',
      creationTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipSegmentResponseEipSegments extends $tea.Model {
  eipSegment: DescribeEipSegmentResponseEipSegmentsEipSegment[];
  static names(): { [key: string]: string } {
    return {
      eipSegment: 'EipSegment',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eipSegment: { 'type': 'array', 'itemType': DescribeEipSegmentResponseEipSegmentsEipSegment },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipGatewayInfoResponseEipInfosEipInfo extends $tea.Model {
  ip: string;
  ipGw: string;
  ipMask: string;
  static names(): { [key: string]: string } {
    return {
      ip: 'Ip',
      ipGw: 'IpGw',
      ipMask: 'IpMask',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ip: 'string',
      ipGw: 'string',
      ipMask: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipGatewayInfoResponseEipInfos extends $tea.Model {
  eipInfo: DescribeEipGatewayInfoResponseEipInfosEipInfo[];
  static names(): { [key: string]: string } {
    return {
      eipInfo: 'EipInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eipInfo: { 'type': 'array', 'itemType': DescribeEipGatewayInfoResponseEipInfosEipInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnSslServerLogsResponseData extends $tea.Model {
  logs: string[];
  static names(): { [key: string]: string } {
    return {
      logs: 'Logs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      logs: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExpressCloudConnectionsRequestFilter extends $tea.Model {
  key: string;
  value: string[];
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModelsVirtualBorderRouterModel extends $tea.Model {
  instanceId: string;
  accessPointId: string;
  physicalConnectionId: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      accessPointId: 'AccessPointId',
      physicalConnectionId: 'PhysicalConnectionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      accessPointId: 'string',
      physicalConnectionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModels extends $tea.Model {
  virtualBorderRouterModel: DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModelsVirtualBorderRouterModel[];
  static names(): { [key: string]: string } {
    return {
      virtualBorderRouterModel: 'VirtualBorderRouterModel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      virtualBorderRouterModel: { 'type': 'array', 'itemType': DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModelsVirtualBorderRouterModel },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionType extends $tea.Model {
  instanceId: string;
  status: string;
  name: string;
  description: string;
  gmtCreate: string;
  gmtModify: string;
  peerCity: string;
  peerLocation: string;
  portType: string;
  bandwidth: number;
  distance: number;
  redundantEccId: string;
  circuitCode: string;
  isp: string;
  type: string;
  idcSP: string;
  businessStatus: string;
  hasReservationData: string;
  reservationBandwidth: string;
  reservationInternetChargeType: string;
  reservationActiveTime: string;
  reservationOrderType: string;
  applicationType: string;
  applicationId: string;
  applicationStatus: string;
  applicationBandwidth: string;
  endTime: string;
  chargeType: string;
  contactTel: string;
  contactMail: string;
  IDCardNo: string;
  estimatedTime: string;
  bgpAs: string;
  peIp: string;
  ceIp: string;
  constructionPeriod: string;
  virtualBorderRouterModels: DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModels;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      status: 'Status',
      name: 'Name',
      description: 'Description',
      gmtCreate: 'GmtCreate',
      gmtModify: 'GmtModify',
      peerCity: 'PeerCity',
      peerLocation: 'PeerLocation',
      portType: 'PortType',
      bandwidth: 'Bandwidth',
      distance: 'Distance',
      redundantEccId: 'RedundantEccId',
      circuitCode: 'CircuitCode',
      isp: 'Isp',
      type: 'Type',
      idcSP: 'IdcSP',
      businessStatus: 'BusinessStatus',
      hasReservationData: 'HasReservationData',
      reservationBandwidth: 'ReservationBandwidth',
      reservationInternetChargeType: 'ReservationInternetChargeType',
      reservationActiveTime: 'ReservationActiveTime',
      reservationOrderType: 'ReservationOrderType',
      applicationType: 'ApplicationType',
      applicationId: 'ApplicationId',
      applicationStatus: 'ApplicationStatus',
      applicationBandwidth: 'ApplicationBandwidth',
      endTime: 'EndTime',
      chargeType: 'ChargeType',
      contactTel: 'ContactTel',
      contactMail: 'ContactMail',
      IDCardNo: 'IDCardNo',
      estimatedTime: 'EstimatedTime',
      bgpAs: 'BgpAs',
      peIp: 'PeIp',
      ceIp: 'CeIp',
      constructionPeriod: 'ConstructionPeriod',
      virtualBorderRouterModels: 'VirtualBorderRouterModels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      status: 'string',
      name: 'string',
      description: 'string',
      gmtCreate: 'string',
      gmtModify: 'string',
      peerCity: 'string',
      peerLocation: 'string',
      portType: 'string',
      bandwidth: 'number',
      distance: 'number',
      redundantEccId: 'string',
      circuitCode: 'string',
      isp: 'string',
      type: 'string',
      idcSP: 'string',
      businessStatus: 'string',
      hasReservationData: 'string',
      reservationBandwidth: 'string',
      reservationInternetChargeType: 'string',
      reservationActiveTime: 'string',
      reservationOrderType: 'string',
      applicationType: 'string',
      applicationId: 'string',
      applicationStatus: 'string',
      applicationBandwidth: 'string',
      endTime: 'string',
      chargeType: 'string',
      contactTel: 'string',
      contactMail: 'string',
      IDCardNo: 'string',
      estimatedTime: 'string',
      bgpAs: 'string',
      peIp: 'string',
      ceIp: 'string',
      constructionPeriod: 'string',
      virtualBorderRouterModels: DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModels,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExpressCloudConnectionsResponseExpressCloudConnectionSet extends $tea.Model {
  expressCloudConnectionType: DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionType[];
  static names(): { [key: string]: string } {
    return {
      expressCloudConnectionType: 'ExpressCloudConnectionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      expressCloudConnectionType: { 'type': 'array', 'itemType': DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateNetworkAclEntriesRequestIngressAclEntries extends $tea.Model {
  networkAclEntryName: string;
  networkAclEntryId: string;
  policy: string;
  protocol: string;
  sourceCidrIp: string;
  port: string;
  entryType: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      networkAclEntryName: 'NetworkAclEntryName',
      networkAclEntryId: 'NetworkAclEntryId',
      policy: 'Policy',
      protocol: 'Protocol',
      sourceCidrIp: 'SourceCidrIp',
      port: 'Port',
      entryType: 'EntryType',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclEntryName: 'string',
      networkAclEntryId: 'string',
      policy: 'string',
      protocol: 'string',
      sourceCidrIp: 'string',
      port: 'string',
      entryType: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateNetworkAclEntriesRequestEgressAclEntries extends $tea.Model {
  networkAclEntryName: string;
  networkAclEntryId: string;
  policy: string;
  protocol: string;
  destinationCidrIp: string;
  port: string;
  entryType: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      networkAclEntryName: 'NetworkAclEntryName',
      networkAclEntryId: 'NetworkAclEntryId',
      policy: 'Policy',
      protocol: 'Protocol',
      destinationCidrIp: 'DestinationCidrIp',
      port: 'Port',
      entryType: 'EntryType',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclEntryName: 'string',
      networkAclEntryId: 'string',
      policy: 'string',
      protocol: 'string',
      destinationCidrIp: 'string',
      port: 'string',
      entryType: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnassociateNetworkAclRequestResource extends $tea.Model {
  resourceType: string;
  resourceId: string;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
      resourceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntriesIngressAclEntry extends $tea.Model {
  networkAclEntryId: string;
  policy: string;
  protocol: string;
  sourceCidrIp: string;
  port: string;
  entryType: string;
  networkAclEntryName: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      networkAclEntryId: 'NetworkAclEntryId',
      policy: 'Policy',
      protocol: 'Protocol',
      sourceCidrIp: 'SourceCidrIp',
      port: 'Port',
      entryType: 'EntryType',
      networkAclEntryName: 'NetworkAclEntryName',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclEntryId: 'string',
      policy: 'string',
      protocol: 'string',
      sourceCidrIp: 'string',
      port: 'string',
      entryType: 'string',
      networkAclEntryName: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntries extends $tea.Model {
  ingressAclEntry: DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntriesIngressAclEntry[];
  static names(): { [key: string]: string } {
    return {
      ingressAclEntry: 'IngressAclEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ingressAclEntry: { 'type': 'array', 'itemType': DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntriesIngressAclEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntriesEgressAclEntry extends $tea.Model {
  networkAclEntryId: string;
  policy: string;
  protocol: string;
  destinationCidrIp: string;
  port: string;
  entryType: string;
  description: string;
  networkAclEntryName: string;
  static names(): { [key: string]: string } {
    return {
      networkAclEntryId: 'NetworkAclEntryId',
      policy: 'Policy',
      protocol: 'Protocol',
      destinationCidrIp: 'DestinationCidrIp',
      port: 'Port',
      entryType: 'EntryType',
      description: 'Description',
      networkAclEntryName: 'NetworkAclEntryName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclEntryId: 'string',
      policy: 'string',
      protocol: 'string',
      destinationCidrIp: 'string',
      port: 'string',
      entryType: 'string',
      description: 'string',
      networkAclEntryName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntries extends $tea.Model {
  egressAclEntry: DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntriesEgressAclEntry[];
  static names(): { [key: string]: string } {
    return {
      egressAclEntry: 'EgressAclEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      egressAclEntry: { 'type': 'array', 'itemType': DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntriesEgressAclEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclsResponseNetworkAclsNetworkAclResourcesResource extends $tea.Model {
  resourceId: string;
  resourceType: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      resourceId: 'ResourceId',
      resourceType: 'ResourceType',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceId: 'string',
      resourceType: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclsResponseNetworkAclsNetworkAclResources extends $tea.Model {
  resource: DescribeNetworkAclsResponseNetworkAclsNetworkAclResourcesResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeNetworkAclsResponseNetworkAclsNetworkAclResourcesResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclsResponseNetworkAclsNetworkAcl extends $tea.Model {
  networkAclId: string;
  regionId: string;
  networkAclName: string;
  description: string;
  vpcId: string;
  creationTime: string;
  status: string;
  ownerId: number;
  ingressAclEntries: DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntries;
  egressAclEntries: DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntries;
  resources: DescribeNetworkAclsResponseNetworkAclsNetworkAclResources;
  static names(): { [key: string]: string } {
    return {
      networkAclId: 'NetworkAclId',
      regionId: 'RegionId',
      networkAclName: 'NetworkAclName',
      description: 'Description',
      vpcId: 'VpcId',
      creationTime: 'CreationTime',
      status: 'Status',
      ownerId: 'OwnerId',
      ingressAclEntries: 'IngressAclEntries',
      egressAclEntries: 'EgressAclEntries',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclId: 'string',
      regionId: 'string',
      networkAclName: 'string',
      description: 'string',
      vpcId: 'string',
      creationTime: 'string',
      status: 'string',
      ownerId: 'number',
      ingressAclEntries: DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntries,
      egressAclEntries: DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntries,
      resources: DescribeNetworkAclsResponseNetworkAclsNetworkAclResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclsResponseNetworkAcls extends $tea.Model {
  networkAcl: DescribeNetworkAclsResponseNetworkAclsNetworkAcl[];
  static names(): { [key: string]: string } {
    return {
      networkAcl: 'NetworkAcl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAcl: { 'type': 'array', 'itemType': DescribeNetworkAclsResponseNetworkAclsNetworkAcl },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry extends $tea.Model {
  networkAclEntryId: string;
  policy: string;
  protocol: string;
  sourceCidrIp: string;
  port: string;
  entryType: string;
  networkAclEntryName: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      networkAclEntryId: 'NetworkAclEntryId',
      policy: 'Policy',
      protocol: 'Protocol',
      sourceCidrIp: 'SourceCidrIp',
      port: 'Port',
      entryType: 'EntryType',
      networkAclEntryName: 'NetworkAclEntryName',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclEntryId: 'string',
      policy: 'string',
      protocol: 'string',
      sourceCidrIp: 'string',
      port: 'string',
      entryType: 'string',
      networkAclEntryName: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntries extends $tea.Model {
  ingressAclEntry: DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry[];
  static names(): { [key: string]: string } {
    return {
      ingressAclEntry: 'IngressAclEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ingressAclEntry: { 'type': 'array', 'itemType': DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry extends $tea.Model {
  networkAclEntryId: string;
  policy: string;
  protocol: string;
  destinationCidrIp: string;
  port: string;
  entryType: string;
  description: string;
  networkAclEntryName: string;
  static names(): { [key: string]: string } {
    return {
      networkAclEntryId: 'NetworkAclEntryId',
      policy: 'Policy',
      protocol: 'Protocol',
      destinationCidrIp: 'DestinationCidrIp',
      port: 'Port',
      entryType: 'EntryType',
      description: 'Description',
      networkAclEntryName: 'NetworkAclEntryName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclEntryId: 'string',
      policy: 'string',
      protocol: 'string',
      destinationCidrIp: 'string',
      port: 'string',
      entryType: 'string',
      description: 'string',
      networkAclEntryName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntries extends $tea.Model {
  egressAclEntry: DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry[];
  static names(): { [key: string]: string } {
    return {
      egressAclEntry: 'EgressAclEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      egressAclEntry: { 'type': 'array', 'itemType': DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclAttributesResponseNetworkAclAttributeResourcesResource extends $tea.Model {
  resourceId: string;
  resourceType: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      resourceId: 'ResourceId',
      resourceType: 'ResourceType',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceId: 'string',
      resourceType: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclAttributesResponseNetworkAclAttributeResources extends $tea.Model {
  resource: DescribeNetworkAclAttributesResponseNetworkAclAttributeResourcesResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeNetworkAclAttributesResponseNetworkAclAttributeResourcesResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNetworkAclAttributesResponseNetworkAclAttribute extends $tea.Model {
  networkAclId: string;
  regionId: string;
  networkAclName: string;
  description: string;
  vpcId: string;
  creationTime: string;
  status: string;
  ownerId: number;
  ingressAclEntries: DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntries;
  egressAclEntries: DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntries;
  resources: DescribeNetworkAclAttributesResponseNetworkAclAttributeResources;
  static names(): { [key: string]: string } {
    return {
      networkAclId: 'NetworkAclId',
      regionId: 'RegionId',
      networkAclName: 'NetworkAclName',
      description: 'Description',
      vpcId: 'VpcId',
      creationTime: 'CreationTime',
      status: 'Status',
      ownerId: 'OwnerId',
      ingressAclEntries: 'IngressAclEntries',
      egressAclEntries: 'EgressAclEntries',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclId: 'string',
      regionId: 'string',
      networkAclName: 'string',
      description: 'string',
      vpcId: 'string',
      creationTime: 'string',
      status: 'string',
      ownerId: 'number',
      ingressAclEntries: DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntries,
      egressAclEntries: DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntries,
      resources: DescribeNetworkAclAttributesResponseNetworkAclAttributeResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNetworkAclResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry extends $tea.Model {
  networkAclEntryId: string;
  policy: string;
  protocol: string;
  sourceCidrIp: string;
  port: string;
  entryType: string;
  networkAclEntryName: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      networkAclEntryId: 'NetworkAclEntryId',
      policy: 'Policy',
      protocol: 'Protocol',
      sourceCidrIp: 'SourceCidrIp',
      port: 'Port',
      entryType: 'EntryType',
      networkAclEntryName: 'NetworkAclEntryName',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclEntryId: 'string',
      policy: 'string',
      protocol: 'string',
      sourceCidrIp: 'string',
      port: 'string',
      entryType: 'string',
      networkAclEntryName: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNetworkAclResponseNetworkAclAttributeIngressAclEntries extends $tea.Model {
  ingressAclEntry: CreateNetworkAclResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry[];
  static names(): { [key: string]: string } {
    return {
      ingressAclEntry: 'IngressAclEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ingressAclEntry: { 'type': 'array', 'itemType': CreateNetworkAclResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNetworkAclResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry extends $tea.Model {
  networkAclEntryId: string;
  policy: string;
  protocol: string;
  destinationCidrIp: string;
  port: string;
  entryType: string;
  description: string;
  networkAclEntryName: string;
  static names(): { [key: string]: string } {
    return {
      networkAclEntryId: 'NetworkAclEntryId',
      policy: 'Policy',
      protocol: 'Protocol',
      destinationCidrIp: 'DestinationCidrIp',
      port: 'Port',
      entryType: 'EntryType',
      description: 'Description',
      networkAclEntryName: 'NetworkAclEntryName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclEntryId: 'string',
      policy: 'string',
      protocol: 'string',
      destinationCidrIp: 'string',
      port: 'string',
      entryType: 'string',
      description: 'string',
      networkAclEntryName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNetworkAclResponseNetworkAclAttributeEgressAclEntries extends $tea.Model {
  egressAclEntry: CreateNetworkAclResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry[];
  static names(): { [key: string]: string } {
    return {
      egressAclEntry: 'EgressAclEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      egressAclEntry: { 'type': 'array', 'itemType': CreateNetworkAclResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNetworkAclResponseNetworkAclAttributeResourcesResource extends $tea.Model {
  resourceId: string;
  resourceType: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      resourceId: 'ResourceId',
      resourceType: 'ResourceType',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceId: 'string',
      resourceType: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNetworkAclResponseNetworkAclAttributeResources extends $tea.Model {
  resource: CreateNetworkAclResponseNetworkAclAttributeResourcesResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': CreateNetworkAclResponseNetworkAclAttributeResourcesResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNetworkAclResponseNetworkAclAttribute extends $tea.Model {
  networkAclId: string;
  regionId: string;
  networkAclName: string;
  description: string;
  vpcId: string;
  creationTime: string;
  status: string;
  ingressAclEntries: CreateNetworkAclResponseNetworkAclAttributeIngressAclEntries;
  egressAclEntries: CreateNetworkAclResponseNetworkAclAttributeEgressAclEntries;
  resources: CreateNetworkAclResponseNetworkAclAttributeResources;
  static names(): { [key: string]: string } {
    return {
      networkAclId: 'NetworkAclId',
      regionId: 'RegionId',
      networkAclName: 'NetworkAclName',
      description: 'Description',
      vpcId: 'VpcId',
      creationTime: 'CreationTime',
      status: 'Status',
      ingressAclEntries: 'IngressAclEntries',
      egressAclEntries: 'EgressAclEntries',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      networkAclId: 'string',
      regionId: 'string',
      networkAclName: 'string',
      description: 'string',
      vpcId: 'string',
      creationTime: 'string',
      status: 'string',
      ingressAclEntries: CreateNetworkAclResponseNetworkAclAttributeIngressAclEntries,
      egressAclEntries: CreateNetworkAclResponseNetworkAclAttributeEgressAclEntries,
      resources: CreateNetworkAclResponseNetworkAclAttributeResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AssociateNetworkAclRequestResource extends $tea.Model {
  resourceType: string;
  resourceId: string;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
      resourceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnRouteEntriesResponseVpnRouteEntriesVpnRouteEntry extends $tea.Model {
  vpnInstanceId: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  createTime: number;
  state: string;
  asPath: string;
  community: string;
  source: string;
  routeEntryType: string;
  static names(): { [key: string]: string } {
    return {
      vpnInstanceId: 'VpnInstanceId',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      createTime: 'CreateTime',
      state: 'State',
      asPath: 'AsPath',
      community: 'Community',
      source: 'Source',
      routeEntryType: 'RouteEntryType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpnInstanceId: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      createTime: 'number',
      state: 'string',
      asPath: 'string',
      community: 'string',
      source: 'string',
      routeEntryType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnRouteEntriesResponseVpnRouteEntries extends $tea.Model {
  vpnRouteEntry: DescribeVpnRouteEntriesResponseVpnRouteEntriesVpnRouteEntry[];
  static names(): { [key: string]: string } {
    return {
      vpnRouteEntry: 'VpnRouteEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpnRouteEntry: { 'type': 'array', 'itemType': DescribeVpnRouteEntriesResponseVpnRouteEntriesVpnRouteEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntriesVpnPbrRouteEntry extends $tea.Model {
  vpnInstanceId: string;
  routeSource: string;
  routeDest: string;
  nextHop: string;
  weight: number;
  createTime: number;
  state: string;
  static names(): { [key: string]: string } {
    return {
      vpnInstanceId: 'VpnInstanceId',
      routeSource: 'RouteSource',
      routeDest: 'RouteDest',
      nextHop: 'NextHop',
      weight: 'Weight',
      createTime: 'CreateTime',
      state: 'State',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpnInstanceId: 'string',
      routeSource: 'string',
      routeDest: 'string',
      nextHop: 'string',
      weight: 'number',
      createTime: 'number',
      state: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntries extends $tea.Model {
  vpnPbrRouteEntry: DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntriesVpnPbrRouteEntry[];
  static names(): { [key: string]: string } {
    return {
      vpnPbrRouteEntry: 'VpnPbrRouteEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpnPbrRouteEntry: { 'type': 'array', 'itemType': DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntriesVpnPbrRouteEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfoPMInfo extends $tea.Model {
  PMName: string;
  PMContactInfo: string;
  PMCertificateType: string;
  PMCertificateNo: string;
  PMGender: string;
  static names(): { [key: string]: string } {
    return {
      PMName: 'PMName',
      PMContactInfo: 'PMContactInfo',
      PMCertificateType: 'PMCertificateType',
      PMCertificateNo: 'PMCertificateNo',
      PMGender: 'PMGender',
    };
  }

  static types(): { [key: string]: any } {
    return {
      PMName: 'string',
      PMContactInfo: 'string',
      PMCertificateType: 'string',
      PMCertificateNo: 'string',
      PMGender: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfo extends $tea.Model {
  PMInfo: DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfoPMInfo[];
  static names(): { [key: string]: string } {
    return {
      PMInfo: 'PMInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      PMInfo: { 'type': 'array', 'itemType': DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfoPMInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePhysicalConnectionLOAResponsePhysicalConnectionLOAType extends $tea.Model {
  instanceId: string;
  companyName: string;
  companyLocalizedName: string;
  lineType: string;
  lineCode: string;
  lineLabel: string;
  constructionTime: string;
  status: string;
  loaUrl: string;
  SI: string;
  PMInfo: DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfo;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      companyName: 'CompanyName',
      companyLocalizedName: 'CompanyLocalizedName',
      lineType: 'LineType',
      lineCode: 'LineCode',
      lineLabel: 'LineLabel',
      constructionTime: 'ConstructionTime',
      status: 'Status',
      loaUrl: 'LoaUrl',
      SI: 'SI',
      PMInfo: 'PMInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      companyName: 'string',
      companyLocalizedName: 'string',
      lineType: 'string',
      lineCode: 'string',
      lineLabel: 'string',
      constructionTime: 'string',
      status: 'string',
      loaUrl: 'string',
      SI: 'string',
      PMInfo: DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyPhysicalConnectionLOARequestPMInfo extends $tea.Model {
  PMName: string;
  PMContactInfo: string;
  PMCertificateType: string;
  PMCertificateNo: string;
  PMGender: string;
  static names(): { [key: string]: string } {
    return {
      PMName: 'PMName',
      PMContactInfo: 'PMContactInfo',
      PMCertificateType: 'PMCertificateType',
      PMCertificateNo: 'PMCertificateNo',
      PMGender: 'PMGender',
    };
  }

  static types(): { [key: string]: any } {
    return {
      PMName: 'string',
      PMContactInfo: 'string',
      PMCertificateType: 'string',
      PMCertificateNo: 'string',
      PMGender: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHopNextHopRelatedInfo extends $tea.Model {
  instanceType: string;
  regionId: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      instanceType: 'InstanceType',
      regionId: 'RegionId',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceType: 'string',
      regionId: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHop extends $tea.Model {
  nextHopType: string;
  nextHopId: string;
  enabled: number;
  weight: number;
  nextHopRegionId: string;
  nextHopRelatedInfo: DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHopNextHopRelatedInfo;
  static names(): { [key: string]: string } {
    return {
      nextHopType: 'NextHopType',
      nextHopId: 'NextHopId',
      enabled: 'Enabled',
      weight: 'Weight',
      nextHopRegionId: 'NextHopRegionId',
      nextHopRelatedInfo: 'NextHopRelatedInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nextHopType: 'string',
      nextHopId: 'string',
      enabled: 'number',
      weight: 'number',
      nextHopRegionId: 'string',
      nextHopRelatedInfo: DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHopNextHopRelatedInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHops extends $tea.Model {
  nextHop: DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHop[];
  static names(): { [key: string]: string } {
    return {
      nextHop: 'NextHop',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nextHop: { 'type': 'array', 'itemType': DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHop },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteEntryListResponseRouteEntrysRouteEntry extends $tea.Model {
  routeTableId: string;
  destinationCidrBlock: string;
  type: string;
  routeEntryId: string;
  routeEntryName: string;
  description: string;
  status: string;
  ipVersion: string;
  nextHops: DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHops;
  static names(): { [key: string]: string } {
    return {
      routeTableId: 'RouteTableId',
      destinationCidrBlock: 'DestinationCidrBlock',
      type: 'Type',
      routeEntryId: 'RouteEntryId',
      routeEntryName: 'RouteEntryName',
      description: 'Description',
      status: 'Status',
      ipVersion: 'IpVersion',
      nextHops: 'NextHops',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routeTableId: 'string',
      destinationCidrBlock: 'string',
      type: 'string',
      routeEntryId: 'string',
      routeEntryName: 'string',
      description: 'string',
      status: 'string',
      ipVersion: 'string',
      nextHops: DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHops,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteEntryListResponseRouteEntrys extends $tea.Model {
  routeEntry: DescribeRouteEntryListResponseRouteEntrysRouteEntry[];
  static names(): { [key: string]: string } {
    return {
      routeEntry: 'RouteEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routeEntry: { 'type': 'array', 'itemType': DescribeRouteEntryListResponseRouteEntrysRouteEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAclsIPv6TranslatorAcl extends $tea.Model {
  aclId: string;
  aclName: string;
  static names(): { [key: string]: string } {
    return {
      aclId: 'AclId',
      aclName: 'AclName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      aclId: 'string',
      aclName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAcls extends $tea.Model {
  IPv6TranslatorAcl: DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAclsIPv6TranslatorAcl[];
  static names(): { [key: string]: string } {
    return {
      IPv6TranslatorAcl: 'IPv6TranslatorAcl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      IPv6TranslatorAcl: { 'type': 'array', 'itemType': DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAclsIPv6TranslatorAcl },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorAclListAttributesResponseAclEntriesAclEntry extends $tea.Model {
  aclEntryId: string;
  aclEntryIp: string;
  aclEntryComment: string;
  static names(): { [key: string]: string } {
    return {
      aclEntryId: 'AclEntryId',
      aclEntryIp: 'AclEntryIp',
      aclEntryComment: 'AclEntryComment',
    };
  }

  static types(): { [key: string]: any } {
    return {
      aclEntryId: 'string',
      aclEntryIp: 'string',
      aclEntryComment: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorAclListAttributesResponseAclEntries extends $tea.Model {
  aclEntry: DescribeIPv6TranslatorAclListAttributesResponseAclEntriesAclEntry[];
  static names(): { [key: string]: string } {
    return {
      aclEntry: 'AclEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      aclEntry: { 'type': 'array', 'itemType': DescribeIPv6TranslatorAclListAttributesResponseAclEntriesAclEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesRequestTag extends $tea.Model {
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

export class ListTagResourcesRequestTag extends $tea.Model {
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

export class ListTagResourcesResponseTagResourcesTagResource extends $tea.Model {
  tagKey: string;
  tagValue: string;
  resourcId: string;
  resourceType: string;
  resourceId: string;
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
      tagValue: 'TagValue',
      resourcId: 'ResourcId',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: 'string',
      tagValue: 'string',
      resourcId: 'string',
      resourceType: 'string',
      resourceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesResponseTagResources extends $tea.Model {
  tagResource: ListTagResourcesResponseTagResourcesTagResource[];
  static names(): { [key: string]: string } {
    return {
      tagResource: 'TagResource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagResource: { 'type': 'array', 'itemType': ListTagResourcesResponseTagResourcesTagResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6GatewaysResponseIpv6GatewaysIpv6Gateway extends $tea.Model {
  regionId: string;
  ipv6GatewayId: string;
  vpcId: string;
  status: string;
  name: string;
  description: string;
  spec: string;
  instanceChargeType: string;
  businessStatus: string;
  expiredTime: string;
  creationTime: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipv6GatewayId: 'Ipv6GatewayId',
      vpcId: 'VpcId',
      status: 'Status',
      name: 'Name',
      description: 'Description',
      spec: 'Spec',
      instanceChargeType: 'InstanceChargeType',
      businessStatus: 'BusinessStatus',
      expiredTime: 'ExpiredTime',
      creationTime: 'CreationTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipv6GatewayId: 'string',
      vpcId: 'string',
      status: 'string',
      name: 'string',
      description: 'string',
      spec: 'string',
      instanceChargeType: 'string',
      businessStatus: 'string',
      expiredTime: 'string',
      creationTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6GatewaysResponseIpv6Gateways extends $tea.Model {
  ipv6Gateway: DescribeIpv6GatewaysResponseIpv6GatewaysIpv6Gateway[];
  static names(): { [key: string]: string } {
    return {
      ipv6Gateway: 'Ipv6Gateway',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6Gateway: { 'type': 'array', 'itemType': DescribeIpv6GatewaysResponseIpv6GatewaysIpv6Gateway },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRulesIpv6EgressOnlyRule extends $tea.Model {
  ipv6EgressOnlyRuleId: string;
  instanceType: string;
  instanceId: string;
  status: string;
  name: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      ipv6EgressOnlyRuleId: 'Ipv6EgressOnlyRuleId',
      instanceType: 'InstanceType',
      instanceId: 'InstanceId',
      status: 'Status',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6EgressOnlyRuleId: 'string',
      instanceType: 'string',
      instanceId: 'string',
      status: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRules extends $tea.Model {
  ipv6EgressOnlyRule: DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRulesIpv6EgressOnlyRule[];
  static names(): { [key: string]: string } {
    return {
      ipv6EgressOnlyRule: 'Ipv6EgressOnlyRule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6EgressOnlyRule: { 'type': 'array', 'itemType': DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRulesIpv6EgressOnlyRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6AddressesResponseIpv6AddressesIpv6AddressIpv6InternetBandwidth extends $tea.Model {
  bandwidth: number;
  instanceChargeType: string;
  internetChargeType: string;
  businessStatus: string;
  ipv6InternetBandwidthId: string;
  static names(): { [key: string]: string } {
    return {
      bandwidth: 'Bandwidth',
      instanceChargeType: 'InstanceChargeType',
      internetChargeType: 'InternetChargeType',
      businessStatus: 'BusinessStatus',
      ipv6InternetBandwidthId: 'Ipv6InternetBandwidthId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bandwidth: 'number',
      instanceChargeType: 'string',
      internetChargeType: 'string',
      businessStatus: 'string',
      ipv6InternetBandwidthId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6AddressesResponseIpv6AddressesIpv6Address extends $tea.Model {
  ipv6AddressId: string;
  ipv6AddressName: string;
  vSwitchId: string;
  vpcId: string;
  ipv6GatewayId: string;
  ipv6Address: string;
  associatedInstanceId: string;
  associatedInstanceType: string;
  status: string;
  networkType: string;
  realBandwidth: number;
  allocationTime: string;
  ipv6InternetBandwidth: DescribeIpv6AddressesResponseIpv6AddressesIpv6AddressIpv6InternetBandwidth;
  static names(): { [key: string]: string } {
    return {
      ipv6AddressId: 'Ipv6AddressId',
      ipv6AddressName: 'Ipv6AddressName',
      vSwitchId: 'VSwitchId',
      vpcId: 'VpcId',
      ipv6GatewayId: 'Ipv6GatewayId',
      ipv6Address: 'Ipv6Address',
      associatedInstanceId: 'AssociatedInstanceId',
      associatedInstanceType: 'AssociatedInstanceType',
      status: 'Status',
      networkType: 'NetworkType',
      realBandwidth: 'RealBandwidth',
      allocationTime: 'AllocationTime',
      ipv6InternetBandwidth: 'Ipv6InternetBandwidth',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6AddressId: 'string',
      ipv6AddressName: 'string',
      vSwitchId: 'string',
      vpcId: 'string',
      ipv6GatewayId: 'string',
      ipv6Address: 'string',
      associatedInstanceId: 'string',
      associatedInstanceType: 'string',
      status: 'string',
      networkType: 'string',
      realBandwidth: 'number',
      allocationTime: 'string',
      ipv6InternetBandwidth: DescribeIpv6AddressesResponseIpv6AddressesIpv6AddressIpv6InternetBandwidth,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIpv6AddressesResponseIpv6Addresses extends $tea.Model {
  ipv6Address: DescribeIpv6AddressesResponseIpv6AddressesIpv6Address[];
  static names(): { [key: string]: string } {
    return {
      ipv6Address: 'Ipv6Address',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6Address: { 'type': 'array', 'itemType': DescribeIpv6AddressesResponseIpv6AddressesIpv6Address },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6TranslatorIpv6TranslatorEntryIds extends $tea.Model {
  ipv6TranslatorEntryId: string[];
  static names(): { [key: string]: string } {
    return {
      ipv6TranslatorEntryId: 'Ipv6TranslatorEntryId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6TranslatorEntryId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6Translator extends $tea.Model {
  ipv6TranslatorId: string;
  createTime: number;
  endTime: number;
  spec: string;
  name: string;
  description: string;
  status: string;
  businessStatus: string;
  payType: string;
  bandwidth: number;
  allocateIpv6Addr: string;
  allocateIpv4Addr: string;
  availableBandwidth: string;
  regionId: string;
  ipv6TranslatorEntryIds: DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6TranslatorIpv6TranslatorEntryIds;
  static names(): { [key: string]: string } {
    return {
      ipv6TranslatorId: 'Ipv6TranslatorId',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      spec: 'Spec',
      name: 'Name',
      description: 'Description',
      status: 'Status',
      businessStatus: 'BusinessStatus',
      payType: 'PayType',
      bandwidth: 'Bandwidth',
      allocateIpv6Addr: 'AllocateIpv6Addr',
      allocateIpv4Addr: 'AllocateIpv4Addr',
      availableBandwidth: 'AvailableBandwidth',
      regionId: 'RegionId',
      ipv6TranslatorEntryIds: 'Ipv6TranslatorEntryIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6TranslatorId: 'string',
      createTime: 'number',
      endTime: 'number',
      spec: 'string',
      name: 'string',
      description: 'string',
      status: 'string',
      businessStatus: 'string',
      payType: 'string',
      bandwidth: 'number',
      allocateIpv6Addr: 'string',
      allocateIpv4Addr: 'string',
      availableBandwidth: 'string',
      regionId: 'string',
      ipv6TranslatorEntryIds: DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6TranslatorIpv6TranslatorEntryIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorsResponseIpv6Translators extends $tea.Model {
  ipv6Translator: DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6Translator[];
  static names(): { [key: string]: string } {
    return {
      ipv6Translator: 'Ipv6Translator',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6Translator: { 'type': 'array', 'itemType': DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6Translator },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorEntriesResponseIpv6TranslatorEntriesIpv6TranslatorEntry extends $tea.Model {
  ipv6TranslatorId: string;
  ipv6TranslatorEntryId: string;
  allocateIpv6Addr: string;
  allocateIpv6Port: number;
  backendIpv4Addr: string;
  backendIpv4Port: string;
  transProtocol: string;
  entryBandwidth: string;
  entryDescription: string;
  entryName: string;
  entryStatus: string;
  aclStatus: string;
  aclType: string;
  aclId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      ipv6TranslatorId: 'Ipv6TranslatorId',
      ipv6TranslatorEntryId: 'Ipv6TranslatorEntryId',
      allocateIpv6Addr: 'AllocateIpv6Addr',
      allocateIpv6Port: 'AllocateIpv6Port',
      backendIpv4Addr: 'BackendIpv4Addr',
      backendIpv4Port: 'BackendIpv4Port',
      transProtocol: 'TransProtocol',
      entryBandwidth: 'EntryBandwidth',
      entryDescription: 'EntryDescription',
      entryName: 'EntryName',
      entryStatus: 'EntryStatus',
      aclStatus: 'AclStatus',
      aclType: 'AclType',
      aclId: 'AclId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6TranslatorId: 'string',
      ipv6TranslatorEntryId: 'string',
      allocateIpv6Addr: 'string',
      allocateIpv6Port: 'number',
      backendIpv4Addr: 'string',
      backendIpv4Port: 'string',
      transProtocol: 'string',
      entryBandwidth: 'string',
      entryDescription: 'string',
      entryName: 'string',
      entryStatus: 'string',
      aclStatus: 'string',
      aclType: 'string',
      aclId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIPv6TranslatorEntriesResponseIpv6TranslatorEntries extends $tea.Model {
  ipv6TranslatorEntry: DescribeIPv6TranslatorEntriesResponseIpv6TranslatorEntriesIpv6TranslatorEntry[];
  static names(): { [key: string]: string } {
    return {
      ipv6TranslatorEntry: 'Ipv6TranslatorEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipv6TranslatorEntry: { 'type': 'array', 'itemType': DescribeIPv6TranslatorEntriesResponseIpv6TranslatorEntriesIpv6TranslatorEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFlowLogsResponseFlowLogsFlowLog extends $tea.Model {
  flowLogId: string;
  flowLogName: string;
  description: string;
  creationTime: string;
  resourceType: string;
  resourceId: string;
  projectName: string;
  logStoreName: string;
  status: string;
  trafficType: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      flowLogId: 'FlowLogId',
      flowLogName: 'FlowLogName',
      description: 'Description',
      creationTime: 'CreationTime',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      projectName: 'ProjectName',
      logStoreName: 'LogStoreName',
      status: 'Status',
      trafficType: 'TrafficType',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      flowLogId: 'string',
      flowLogName: 'string',
      description: 'string',
      creationTime: 'string',
      resourceType: 'string',
      resourceId: 'string',
      projectName: 'string',
      logStoreName: 'string',
      status: 'string',
      trafficType: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFlowLogsResponseFlowLogs extends $tea.Model {
  flowLog: DescribeFlowLogsResponseFlowLogsFlowLog[];
  static names(): { [key: string]: string } {
    return {
      flowLog: 'FlowLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      flowLog: { 'type': 'array', 'itemType': DescribeFlowLogsResponseFlowLogsFlowLog },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGrantRulesToCenResponseCenGrantRulesCbnGrantRule extends $tea.Model {
  cenInstanceId: string;
  cenOwnerId: number;
  creationTime: string;
  static names(): { [key: string]: string } {
    return {
      cenInstanceId: 'CenInstanceId',
      cenOwnerId: 'CenOwnerId',
      creationTime: 'CreationTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cenInstanceId: 'string',
      cenOwnerId: 'number',
      creationTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGrantRulesToCenResponseCenGrantRules extends $tea.Model {
  cbnGrantRule: DescribeGrantRulesToCenResponseCenGrantRulesCbnGrantRule[];
  static names(): { [key: string]: string } {
    return {
      cbnGrantRule: 'CbnGrantRule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cbnGrantRule: { 'type': 'array', 'itemType': DescribeGrantRulesToCenResponseCenGrantRulesCbnGrantRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnServersResponseSslVpnServersSslVpnServer extends $tea.Model {
  regionId: string;
  sslVpnServerId: string;
  vpnGatewayId: string;
  name: string;
  localSubnet: string;
  clientIpPool: string;
  createTime: number;
  cipher: string;
  proto: string;
  port: number;
  compress: boolean;
  connections: number;
  maxConnections: number;
  internetIp: string;
  enableMultiFactorAuth: boolean;
  IDaaSInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      sslVpnServerId: 'SslVpnServerId',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      localSubnet: 'LocalSubnet',
      clientIpPool: 'ClientIpPool',
      createTime: 'CreateTime',
      cipher: 'Cipher',
      proto: 'Proto',
      port: 'Port',
      compress: 'Compress',
      connections: 'Connections',
      maxConnections: 'MaxConnections',
      internetIp: 'InternetIp',
      enableMultiFactorAuth: 'EnableMultiFactorAuth',
      IDaaSInstanceId: 'IDaaSInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      sslVpnServerId: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      localSubnet: 'string',
      clientIpPool: 'string',
      createTime: 'number',
      cipher: 'string',
      proto: 'string',
      port: 'number',
      compress: 'boolean',
      connections: 'number',
      maxConnections: 'number',
      internetIp: 'string',
      enableMultiFactorAuth: 'boolean',
      IDaaSInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnServersResponseSslVpnServers extends $tea.Model {
  sslVpnServer: DescribeSslVpnServersResponseSslVpnServersSslVpnServer[];
  static names(): { [key: string]: string } {
    return {
      sslVpnServer: 'SslVpnServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sslVpnServer: { 'type': 'array', 'itemType': DescribeSslVpnServersResponseSslVpnServersSslVpnServer },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnClientCertsResponseSslVpnClientCertKeysSslVpnClientCertKey extends $tea.Model {
  regionId: string;
  sslVpnClientCertId: string;
  name: string;
  sslVpnServerId: string;
  createTime: number;
  endTime: number;
  status: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      sslVpnClientCertId: 'SslVpnClientCertId',
      name: 'Name',
      sslVpnServerId: 'SslVpnServerId',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      sslVpnClientCertId: 'string',
      name: 'string',
      sslVpnServerId: 'string',
      createTime: 'number',
      endTime: 'number',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSslVpnClientCertsResponseSslVpnClientCertKeys extends $tea.Model {
  sslVpnClientCertKey: DescribeSslVpnClientCertsResponseSslVpnClientCertKeysSslVpnClientCertKey[];
  static names(): { [key: string]: string } {
    return {
      sslVpnClientCertKey: 'SslVpnClientCertKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sslVpnClientCertKey: { 'type': 'array', 'itemType': DescribeSslVpnClientCertsResponseSslVpnClientCertKeysSslVpnClientCertKey },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTableListResponseRouterTableListRouterTableListTypeTagsTag extends $tea.Model {
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

export class DescribeRouteTableListResponseRouterTableListRouterTableListTypeTags extends $tea.Model {
  tag: DescribeRouteTableListResponseRouterTableListRouterTableListTypeTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeRouteTableListResponseRouterTableListRouterTableListTypeTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTableListResponseRouterTableListRouterTableListTypeVSwitchIds extends $tea.Model {
  vSwitchId: string[];
  static names(): { [key: string]: string } {
    return {
      vSwitchId: 'VSwitchId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vSwitchId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTableListResponseRouterTableListRouterTableListType extends $tea.Model {
  vpcId: string;
  routerType: string;
  routerId: string;
  routeTableId: string;
  routeTableName: string;
  routeTableType: string;
  description: string;
  resourceGroupId: string;
  creationTime: string;
  status: string;
  ownerId: number;
  tags: DescribeRouteTableListResponseRouterTableListRouterTableListTypeTags;
  vSwitchIds: DescribeRouteTableListResponseRouterTableListRouterTableListTypeVSwitchIds;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      routerType: 'RouterType',
      routerId: 'RouterId',
      routeTableId: 'RouteTableId',
      routeTableName: 'RouteTableName',
      routeTableType: 'RouteTableType',
      description: 'Description',
      resourceGroupId: 'ResourceGroupId',
      creationTime: 'CreationTime',
      status: 'Status',
      ownerId: 'OwnerId',
      tags: 'Tags',
      vSwitchIds: 'VSwitchIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      routerType: 'string',
      routerId: 'string',
      routeTableId: 'string',
      routeTableName: 'string',
      routeTableType: 'string',
      description: 'string',
      resourceGroupId: 'string',
      creationTime: 'string',
      status: 'string',
      ownerId: 'number',
      tags: DescribeRouteTableListResponseRouterTableListRouterTableListTypeTags,
      vSwitchIds: DescribeRouteTableListResponseRouterTableListRouterTableListTypeVSwitchIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTableListResponseRouterTableList extends $tea.Model {
  routerTableListType: DescribeRouteTableListResponseRouterTableListRouterTableListType[];
  static names(): { [key: string]: string } {
    return {
      routerTableListType: 'RouterTableListType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routerTableListType: { 'type': 'array', 'itemType': DescribeRouteTableListResponseRouterTableListRouterTableListType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpNetworksResponseBgpNetworksBgpNetwork extends $tea.Model {
  vpcId: string;
  dstCidrBlock: string;
  routerId: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      dstCidrBlock: 'DstCidrBlock',
      routerId: 'RouterId',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      dstCidrBlock: 'string',
      routerId: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpNetworksResponseBgpNetworks extends $tea.Model {
  bgpNetwork: DescribeBgpNetworksResponseBgpNetworksBgpNetwork[];
  static names(): { [key: string]: string } {
    return {
      bgpNetwork: 'BgpNetwork',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bgpNetwork: { 'type': 'array', 'itemType': DescribeBgpNetworksResponseBgpNetworksBgpNetwork },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance extends $tea.Model {
  regionId: string;
  globalAccelerationInstanceId: string;
  ipAddress: string;
  serverIpAddress: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      ipAddress: 'IpAddress',
      serverIpAddress: 'ServerIpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      globalAccelerationInstanceId: 'string',
      ipAddress: 'string',
      serverIpAddress: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstances extends $tea.Model {
  globalAccelerationInstance: DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance[];
  static names(): { [key: string]: string } {
    return {
      globalAccelerationInstance: 'GlobalAccelerationInstance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      globalAccelerationInstance: { 'type': 'array', 'itemType': DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServersBackendServer extends $tea.Model {
  regionId: string;
  serverId: string;
  serverIpAddress: string;
  serverType: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      serverId: 'ServerId',
      serverIpAddress: 'ServerIpAddress',
      serverType: 'ServerType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      serverId: 'string',
      serverIpAddress: 'string',
      serverType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServers extends $tea.Model {
  backendServer: DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServersBackendServer[];
  static names(): { [key: string]: string } {
    return {
      backendServer: 'BackendServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backendServer: { 'type': 'array', 'itemType': DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServersBackendServer },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddressesPublicIpAddress extends $tea.Model {
  allocationId: string;
  ipAddress: string;
  static names(): { [key: string]: string } {
    return {
      allocationId: 'AllocationId',
      ipAddress: 'IpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allocationId: 'string',
      ipAddress: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddresses extends $tea.Model {
  publicIpAddress: DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddressesPublicIpAddress[];
  static names(): { [key: string]: string } {
    return {
      publicIpAddress: 'PublicIpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      publicIpAddress: { 'type': 'array', 'itemType': DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddressesPublicIpAddress },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance extends $tea.Model {
  regionId: string;
  globalAccelerationInstanceId: string;
  ipAddress: string;
  status: string;
  bandwidth: string;
  internetChargeType: string;
  chargeType: string;
  bandwidthType: string;
  accelerationLocation: string;
  serviceLocation: string;
  name: string;
  description: string;
  expiredTime: string;
  creationTime: string;
  hasReservationData: string;
  reservationBandwidth: string;
  reservationInternetChargeType: string;
  reservationActiveTime: string;
  reservationOrderType: string;
  backendServers: DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServers;
  publicIpAddresses: DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddresses;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      globalAccelerationInstanceId: 'GlobalAccelerationInstanceId',
      ipAddress: 'IpAddress',
      status: 'Status',
      bandwidth: 'Bandwidth',
      internetChargeType: 'InternetChargeType',
      chargeType: 'ChargeType',
      bandwidthType: 'BandwidthType',
      accelerationLocation: 'AccelerationLocation',
      serviceLocation: 'ServiceLocation',
      name: 'Name',
      description: 'Description',
      expiredTime: 'ExpiredTime',
      creationTime: 'CreationTime',
      hasReservationData: 'HasReservationData',
      reservationBandwidth: 'ReservationBandwidth',
      reservationInternetChargeType: 'ReservationInternetChargeType',
      reservationActiveTime: 'ReservationActiveTime',
      reservationOrderType: 'ReservationOrderType',
      backendServers: 'BackendServers',
      publicIpAddresses: 'PublicIpAddresses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      globalAccelerationInstanceId: 'string',
      ipAddress: 'string',
      status: 'string',
      bandwidth: 'string',
      internetChargeType: 'string',
      chargeType: 'string',
      bandwidthType: 'string',
      accelerationLocation: 'string',
      serviceLocation: 'string',
      name: 'string',
      description: 'string',
      expiredTime: 'string',
      creationTime: 'string',
      hasReservationData: 'string',
      reservationBandwidth: 'string',
      reservationInternetChargeType: 'string',
      reservationActiveTime: 'string',
      reservationOrderType: 'string',
      backendServers: DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServers,
      publicIpAddresses: DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddresses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstances extends $tea.Model {
  globalAccelerationInstance: DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance[];
  static names(): { [key: string]: string } {
    return {
      globalAccelerationInstance: 'GlobalAccelerationInstance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      globalAccelerationInstance: { 'type': 'array', 'itemType': DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVSwitchAttributesResponseRouteTable extends $tea.Model {
  routeTableId: string;
  routeTableType: string;
  static names(): { [key: string]: string } {
    return {
      routeTableId: 'RouteTableId',
      routeTableType: 'RouteTableType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routeTableId: 'string',
      routeTableType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddressesPublicIpAddresse extends $tea.Model {
  allocationId: string;
  ipAddress: string;
  static names(): { [key: string]: string } {
    return {
      allocationId: 'AllocationId',
      ipAddress: 'IpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allocationId: 'string',
      ipAddress: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddresses extends $tea.Model {
  publicIpAddresse: DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddressesPublicIpAddresse[];
  static names(): { [key: string]: string } {
    return {
      publicIpAddresse: 'PublicIpAddresse',
    };
  }

  static types(): { [key: string]: any } {
    return {
      publicIpAddresse: { 'type': 'array', 'itemType': DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddressesPublicIpAddresse },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackage extends $tea.Model {
  bandwidthPackageId: string;
  regionId: string;
  name: string;
  description: string;
  bandwidth: string;
  instanceChargeType: string;
  internetChargeType: string;
  businessStatus: string;
  creationTime: string;
  expiredTime: string;
  status: string;
  ratio: number;
  resourceGroupId: string;
  hasReservationData: string;
  reservationBandwidth: string;
  reservationInternetChargeType: string;
  reservationActiveTime: string;
  reservationOrderType: string;
  ISP: string;
  deletionProtection: boolean;
  publicIpAddresses: DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddresses;
  static names(): { [key: string]: string } {
    return {
      bandwidthPackageId: 'BandwidthPackageId',
      regionId: 'RegionId',
      name: 'Name',
      description: 'Description',
      bandwidth: 'Bandwidth',
      instanceChargeType: 'InstanceChargeType',
      internetChargeType: 'InternetChargeType',
      businessStatus: 'BusinessStatus',
      creationTime: 'CreationTime',
      expiredTime: 'ExpiredTime',
      status: 'Status',
      ratio: 'Ratio',
      resourceGroupId: 'ResourceGroupId',
      hasReservationData: 'HasReservationData',
      reservationBandwidth: 'ReservationBandwidth',
      reservationInternetChargeType: 'ReservationInternetChargeType',
      reservationActiveTime: 'ReservationActiveTime',
      reservationOrderType: 'ReservationOrderType',
      ISP: 'ISP',
      deletionProtection: 'DeletionProtection',
      publicIpAddresses: 'PublicIpAddresses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bandwidthPackageId: 'string',
      regionId: 'string',
      name: 'string',
      description: 'string',
      bandwidth: 'string',
      instanceChargeType: 'string',
      internetChargeType: 'string',
      businessStatus: 'string',
      creationTime: 'string',
      expiredTime: 'string',
      status: 'string',
      ratio: 'number',
      resourceGroupId: 'string',
      hasReservationData: 'string',
      reservationBandwidth: 'string',
      reservationInternetChargeType: 'string',
      reservationActiveTime: 'string',
      reservationOrderType: 'string',
      ISP: 'string',
      deletionProtection: 'boolean',
      publicIpAddresses: DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddresses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCommonBandwidthPackagesResponseCommonBandwidthPackages extends $tea.Model {
  commonBandwidthPackage: DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackage[];
  static names(): { [key: string]: string } {
    return {
      commonBandwidthPackage: 'CommonBandwidthPackage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      commonBandwidthPackage: { 'type': 'array', 'itemType': DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackage },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpnConnectionAttributeResponseIkeConfig extends $tea.Model {
  psk: string;
  ikeVersion: string;
  ikeMode: string;
  ikeEncAlg: string;
  ikeAuthAlg: string;
  ikePfs: string;
  ikeLifetime: number;
  localId: string;
  remoteId: string;
  static names(): { [key: string]: string } {
    return {
      psk: 'Psk',
      ikeVersion: 'IkeVersion',
      ikeMode: 'IkeMode',
      ikeEncAlg: 'IkeEncAlg',
      ikeAuthAlg: 'IkeAuthAlg',
      ikePfs: 'IkePfs',
      ikeLifetime: 'IkeLifetime',
      localId: 'LocalId',
      remoteId: 'RemoteId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      psk: 'string',
      ikeVersion: 'string',
      ikeMode: 'string',
      ikeEncAlg: 'string',
      ikeAuthAlg: 'string',
      ikePfs: 'string',
      ikeLifetime: 'number',
      localId: 'string',
      remoteId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpnConnectionAttributeResponseIpsecConfig extends $tea.Model {
  ipsecEncAlg: string;
  ipsecAuthAlg: string;
  ipsecPfs: string;
  ipsecLifetime: number;
  static names(): { [key: string]: string } {
    return {
      ipsecEncAlg: 'IpsecEncAlg',
      ipsecAuthAlg: 'IpsecAuthAlg',
      ipsecPfs: 'IpsecPfs',
      ipsecLifetime: 'IpsecLifetime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipsecEncAlg: 'string',
      ipsecAuthAlg: 'string',
      ipsecPfs: 'string',
      ipsecLifetime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpnConnectionAttributeResponseVcoHealthCheck extends $tea.Model {
  enable: string;
  sip: string;
  dip: string;
  interval: number;
  retry: number;
  static names(): { [key: string]: string } {
    return {
      enable: 'Enable',
      sip: 'Sip',
      dip: 'Dip',
      interval: 'Interval',
      retry: 'Retry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enable: 'string',
      sip: 'string',
      dip: 'string',
      interval: 'number',
      retry: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyVpnConnectionAttributeResponseVpnBgpConfig extends $tea.Model {
  enableBgp: string;
  tunnelCidr: string;
  localBgpIp: string;
  peerBgpIp: string;
  localAsn: number;
  peerAsn: number;
  status: string;
  static names(): { [key: string]: string } {
    return {
      enableBgp: 'EnableBgp',
      tunnelCidr: 'TunnelCidr',
      localBgpIp: 'LocalBgpIp',
      peerBgpIp: 'PeerBgpIp',
      localAsn: 'LocalAsn',
      peerAsn: 'PeerAsn',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enableBgp: 'string',
      tunnelCidr: 'string',
      localBgpIp: 'string',
      peerBgpIp: 'string',
      localAsn: 'number',
      peerAsn: 'number',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DownloadVpnConnectionConfigResponseVpnConnectionConfigIkeConfig extends $tea.Model {
  psk: string;
  ikeVersion: string;
  ikeMode: string;
  ikeEncAlg: string;
  ikeAuthAlg: string;
  ikePfs: string;
  ikeLifetime: number;
  localId: string;
  remoteId: string;
  static names(): { [key: string]: string } {
    return {
      psk: 'Psk',
      ikeVersion: 'IkeVersion',
      ikeMode: 'IkeMode',
      ikeEncAlg: 'IkeEncAlg',
      ikeAuthAlg: 'IkeAuthAlg',
      ikePfs: 'IkePfs',
      ikeLifetime: 'IkeLifetime',
      localId: 'LocalId',
      remoteId: 'RemoteId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      psk: 'string',
      ikeVersion: 'string',
      ikeMode: 'string',
      ikeEncAlg: 'string',
      ikeAuthAlg: 'string',
      ikePfs: 'string',
      ikeLifetime: 'number',
      localId: 'string',
      remoteId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DownloadVpnConnectionConfigResponseVpnConnectionConfigIpsecConfig extends $tea.Model {
  ipsecEncAlg: string;
  ipsecAuthAlg: string;
  ipsecPfs: string;
  ipsecLifetime: number;
  static names(): { [key: string]: string } {
    return {
      ipsecEncAlg: 'IpsecEncAlg',
      ipsecAuthAlg: 'IpsecAuthAlg',
      ipsecPfs: 'IpsecPfs',
      ipsecLifetime: 'IpsecLifetime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipsecEncAlg: 'string',
      ipsecAuthAlg: 'string',
      ipsecPfs: 'string',
      ipsecLifetime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DownloadVpnConnectionConfigResponseVpnConnectionConfig extends $tea.Model {
  localSubnet: string;
  remoteSubnet: string;
  local: string;
  remote: string;
  ikeConfig: DownloadVpnConnectionConfigResponseVpnConnectionConfigIkeConfig;
  ipsecConfig: DownloadVpnConnectionConfigResponseVpnConnectionConfigIpsecConfig;
  static names(): { [key: string]: string } {
    return {
      localSubnet: 'LocalSubnet',
      remoteSubnet: 'RemoteSubnet',
      local: 'Local',
      remote: 'Remote',
      ikeConfig: 'IkeConfig',
      ipsecConfig: 'IpsecConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      localSubnet: 'string',
      remoteSubnet: 'string',
      local: 'string',
      remote: 'string',
      ikeConfig: DownloadVpnConnectionConfigResponseVpnConnectionConfigIkeConfig,
      ipsecConfig: DownloadVpnConnectionConfigResponseVpnConnectionConfigIpsecConfig,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewaysRequestTag extends $tea.Model {
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

export class DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTagsTag extends $tea.Model {
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

export class DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTags extends $tea.Model {
  tag: DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayReservationData extends $tea.Model {
  status: string;
  reservationEndTime: string;
  reservationOrderType: string;
  reservationSpec: string;
  reservationIpsec: string;
  reservationSsl: string;
  reservationMaxConnections: number;
  static names(): { [key: string]: string } {
    return {
      status: 'Status',
      reservationEndTime: 'ReservationEndTime',
      reservationOrderType: 'ReservationOrderType',
      reservationSpec: 'ReservationSpec',
      reservationIpsec: 'ReservationIpsec',
      reservationSsl: 'ReservationSsl',
      reservationMaxConnections: 'ReservationMaxConnections',
    };
  }

  static types(): { [key: string]: any } {
    return {
      status: 'string',
      reservationEndTime: 'string',
      reservationOrderType: 'string',
      reservationSpec: 'string',
      reservationIpsec: 'string',
      reservationSsl: 'string',
      reservationMaxConnections: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewaysResponseVpnGatewaysVpnGateway extends $tea.Model {
  vpnGatewayId: string;
  vpcId: string;
  vSwitchId: string;
  internetIp: string;
  createTime: number;
  endTime: number;
  spec: string;
  name: string;
  description: string;
  status: string;
  businessStatus: string;
  chargeType: string;
  ipsecVpn: string;
  sslVpn: string;
  sslMaxConnections: number;
  tag: string;
  enableBgp: boolean;
  autoPropagate: boolean;
  tags: DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTags;
  reservationData: DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayReservationData;
  static names(): { [key: string]: string } {
    return {
      vpnGatewayId: 'VpnGatewayId',
      vpcId: 'VpcId',
      vSwitchId: 'VSwitchId',
      internetIp: 'InternetIp',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      spec: 'Spec',
      name: 'Name',
      description: 'Description',
      status: 'Status',
      businessStatus: 'BusinessStatus',
      chargeType: 'ChargeType',
      ipsecVpn: 'IpsecVpn',
      sslVpn: 'SslVpn',
      sslMaxConnections: 'SslMaxConnections',
      tag: 'Tag',
      enableBgp: 'EnableBgp',
      autoPropagate: 'AutoPropagate',
      tags: 'Tags',
      reservationData: 'ReservationData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpnGatewayId: 'string',
      vpcId: 'string',
      vSwitchId: 'string',
      internetIp: 'string',
      createTime: 'number',
      endTime: 'number',
      spec: 'string',
      name: 'string',
      description: 'string',
      status: 'string',
      businessStatus: 'string',
      chargeType: 'string',
      ipsecVpn: 'string',
      sslVpn: 'string',
      sslMaxConnections: 'number',
      tag: 'string',
      enableBgp: 'boolean',
      autoPropagate: 'boolean',
      tags: DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTags,
      reservationData: DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayReservationData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewaysResponseVpnGateways extends $tea.Model {
  vpnGateway: DescribeVpnGatewaysResponseVpnGatewaysVpnGateway[];
  static names(): { [key: string]: string } {
    return {
      vpnGateway: 'VpnGateway',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpnGateway: { 'type': 'array', 'itemType': DescribeVpnGatewaysResponseVpnGatewaysVpnGateway },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewayResponseTagsTag extends $tea.Model {
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

export class DescribeVpnGatewayResponseTags extends $tea.Model {
  tag: DescribeVpnGatewayResponseTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeVpnGatewayResponseTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnGatewayResponseReservationData extends $tea.Model {
  status: string;
  reservationEndTime: string;
  reservationOrderType: string;
  reservationSpec: string;
  reservationIpsec: string;
  reservationSsl: string;
  reservationMaxConnections: number;
  static names(): { [key: string]: string } {
    return {
      status: 'Status',
      reservationEndTime: 'ReservationEndTime',
      reservationOrderType: 'ReservationOrderType',
      reservationSpec: 'ReservationSpec',
      reservationIpsec: 'ReservationIpsec',
      reservationSsl: 'ReservationSsl',
      reservationMaxConnections: 'ReservationMaxConnections',
    };
  }

  static types(): { [key: string]: any } {
    return {
      status: 'string',
      reservationEndTime: 'string',
      reservationOrderType: 'string',
      reservationSpec: 'string',
      reservationIpsec: 'string',
      reservationSsl: 'string',
      reservationMaxConnections: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIkeConfig extends $tea.Model {
  psk: string;
  ikeVersion: string;
  ikeMode: string;
  ikeEncAlg: string;
  ikeAuthAlg: string;
  ikePfs: string;
  ikeLifetime: number;
  localId: string;
  remoteId: string;
  static names(): { [key: string]: string } {
    return {
      psk: 'Psk',
      ikeVersion: 'IkeVersion',
      ikeMode: 'IkeMode',
      ikeEncAlg: 'IkeEncAlg',
      ikeAuthAlg: 'IkeAuthAlg',
      ikePfs: 'IkePfs',
      ikeLifetime: 'IkeLifetime',
      localId: 'LocalId',
      remoteId: 'RemoteId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      psk: 'string',
      ikeVersion: 'string',
      ikeMode: 'string',
      ikeEncAlg: 'string',
      ikeAuthAlg: 'string',
      ikePfs: 'string',
      ikeLifetime: 'number',
      localId: 'string',
      remoteId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIpsecConfig extends $tea.Model {
  ipsecEncAlg: string;
  ipsecAuthAlg: string;
  ipsecPfs: string;
  ipsecLifetime: number;
  static names(): { [key: string]: string } {
    return {
      ipsecEncAlg: 'IpsecEncAlg',
      ipsecAuthAlg: 'IpsecAuthAlg',
      ipsecPfs: 'IpsecPfs',
      ipsecLifetime: 'IpsecLifetime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipsecEncAlg: 'string',
      ipsecAuthAlg: 'string',
      ipsecPfs: 'string',
      ipsecLifetime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVcoHealthCheck extends $tea.Model {
  enable: string;
  sip: string;
  dip: string;
  interval: number;
  retry: number;
  status: string;
  static names(): { [key: string]: string } {
    return {
      enable: 'Enable',
      sip: 'Sip',
      dip: 'Dip',
      interval: 'Interval',
      retry: 'Retry',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enable: 'string',
      sip: 'string',
      dip: 'string',
      interval: 'number',
      retry: 'number',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVpnBgpConfig extends $tea.Model {
  tunnelCidr: string;
  localBgpIp: string;
  peerBgpIp: string;
  localAsn: string;
  peerAsn: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      tunnelCidr: 'TunnelCidr',
      localBgpIp: 'LocalBgpIp',
      peerBgpIp: 'PeerBgpIp',
      localAsn: 'LocalAsn',
      peerAsn: 'PeerAsn',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tunnelCidr: 'string',
      localBgpIp: 'string',
      peerBgpIp: 'string',
      localAsn: 'string',
      peerAsn: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionsResponseVpnConnectionsVpnConnection extends $tea.Model {
  vpnConnectionId: string;
  customerGatewayId: string;
  vpnGatewayId: string;
  name: string;
  localSubnet: string;
  remoteSubnet: string;
  createTime: number;
  effectImmediately: boolean;
  status: string;
  enableDpd: boolean;
  enableNatTraversal: boolean;
  ikeConfig: DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIkeConfig;
  ipsecConfig: DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIpsecConfig;
  vcoHealthCheck: DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVcoHealthCheck;
  vpnBgpConfig: DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVpnBgpConfig;
  static names(): { [key: string]: string } {
    return {
      vpnConnectionId: 'VpnConnectionId',
      customerGatewayId: 'CustomerGatewayId',
      vpnGatewayId: 'VpnGatewayId',
      name: 'Name',
      localSubnet: 'LocalSubnet',
      remoteSubnet: 'RemoteSubnet',
      createTime: 'CreateTime',
      effectImmediately: 'EffectImmediately',
      status: 'Status',
      enableDpd: 'EnableDpd',
      enableNatTraversal: 'EnableNatTraversal',
      ikeConfig: 'IkeConfig',
      ipsecConfig: 'IpsecConfig',
      vcoHealthCheck: 'VcoHealthCheck',
      vpnBgpConfig: 'VpnBgpConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpnConnectionId: 'string',
      customerGatewayId: 'string',
      vpnGatewayId: 'string',
      name: 'string',
      localSubnet: 'string',
      remoteSubnet: 'string',
      createTime: 'number',
      effectImmediately: 'boolean',
      status: 'string',
      enableDpd: 'boolean',
      enableNatTraversal: 'boolean',
      ikeConfig: DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIkeConfig,
      ipsecConfig: DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIpsecConfig,
      vcoHealthCheck: DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVcoHealthCheck,
      vpnBgpConfig: DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVpnBgpConfig,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionsResponseVpnConnections extends $tea.Model {
  vpnConnection: DescribeVpnConnectionsResponseVpnConnectionsVpnConnection[];
  static names(): { [key: string]: string } {
    return {
      vpnConnection: 'VpnConnection',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpnConnection: { 'type': 'array', 'itemType': DescribeVpnConnectionsResponseVpnConnectionsVpnConnection },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionResponseIkeConfig extends $tea.Model {
  psk: string;
  ikeVersion: string;
  ikeMode: string;
  ikeEncAlg: string;
  ikeAuthAlg: string;
  ikePfs: string;
  ikeLifetime: number;
  localId: string;
  remoteId: string;
  static names(): { [key: string]: string } {
    return {
      psk: 'Psk',
      ikeVersion: 'IkeVersion',
      ikeMode: 'IkeMode',
      ikeEncAlg: 'IkeEncAlg',
      ikeAuthAlg: 'IkeAuthAlg',
      ikePfs: 'IkePfs',
      ikeLifetime: 'IkeLifetime',
      localId: 'LocalId',
      remoteId: 'RemoteId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      psk: 'string',
      ikeVersion: 'string',
      ikeMode: 'string',
      ikeEncAlg: 'string',
      ikeAuthAlg: 'string',
      ikePfs: 'string',
      ikeLifetime: 'number',
      localId: 'string',
      remoteId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionResponseIpsecConfig extends $tea.Model {
  ipsecEncAlg: string;
  ipsecAuthAlg: string;
  ipsecPfs: string;
  ipsecLifetime: number;
  static names(): { [key: string]: string } {
    return {
      ipsecEncAlg: 'IpsecEncAlg',
      ipsecAuthAlg: 'IpsecAuthAlg',
      ipsecPfs: 'IpsecPfs',
      ipsecLifetime: 'IpsecLifetime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipsecEncAlg: 'string',
      ipsecAuthAlg: 'string',
      ipsecPfs: 'string',
      ipsecLifetime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionResponseVcoHealthCheck extends $tea.Model {
  enable: string;
  sip: string;
  dip: string;
  interval: number;
  retry: number;
  status: string;
  static names(): { [key: string]: string } {
    return {
      enable: 'Enable',
      sip: 'Sip',
      dip: 'Dip',
      interval: 'Interval',
      retry: 'Retry',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enable: 'string',
      sip: 'string',
      dip: 'string',
      interval: 'number',
      retry: 'number',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpnConnectionResponseVpnBgpConfig extends $tea.Model {
  enableBgp: string;
  tunnelCidr: string;
  localBgpIp: string;
  peerBgpIp: string;
  localAsn: string;
  peerAsn: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      enableBgp: 'EnableBgp',
      tunnelCidr: 'TunnelCidr',
      localBgpIp: 'LocalBgpIp',
      peerBgpIp: 'PeerBgpIp',
      localAsn: 'LocalAsn',
      peerAsn: 'PeerAsn',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enableBgp: 'string',
      tunnelCidr: 'string',
      localBgpIp: 'string',
      peerBgpIp: 'string',
      localAsn: 'string',
      peerAsn: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomerGatewaysResponseCustomerGatewaysCustomerGateway extends $tea.Model {
  customerGatewayId: string;
  name: string;
  ipAddress: string;
  description: string;
  createTime: number;
  asn: number;
  static names(): { [key: string]: string } {
    return {
      customerGatewayId: 'CustomerGatewayId',
      name: 'Name',
      ipAddress: 'IpAddress',
      description: 'Description',
      createTime: 'CreateTime',
      asn: 'Asn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      customerGatewayId: 'string',
      name: 'string',
      ipAddress: 'string',
      description: 'string',
      createTime: 'number',
      asn: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomerGatewaysResponseCustomerGateways extends $tea.Model {
  customerGateway: DescribeCustomerGatewaysResponseCustomerGatewaysCustomerGateway[];
  static names(): { [key: string]: string } {
    return {
      customerGateway: 'CustomerGateway',
    };
  }

  static types(): { [key: string]: any } {
    return {
      customerGateway: { 'type': 'array', 'itemType': DescribeCustomerGatewaysResponseCustomerGatewaysCustomerGateway },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpPeersResponseBgpPeersBgpPeer extends $tea.Model {
  name: string;
  description: string;
  bgpPeerId: string;
  bgpGroupId: string;
  peerIpAddress: string;
  peerAsn: string;
  authKey: string;
  routerId: string;
  bgpStatus: string;
  status: string;
  keepalive: string;
  localAsn: string;
  hold: string;
  isFake: string;
  routeLimit: string;
  regionId: string;
  enableBfd: boolean;
  ipVersion: string;
  bfdMultiHop: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      description: 'Description',
      bgpPeerId: 'BgpPeerId',
      bgpGroupId: 'BgpGroupId',
      peerIpAddress: 'PeerIpAddress',
      peerAsn: 'PeerAsn',
      authKey: 'AuthKey',
      routerId: 'RouterId',
      bgpStatus: 'BgpStatus',
      status: 'Status',
      keepalive: 'Keepalive',
      localAsn: 'LocalAsn',
      hold: 'Hold',
      isFake: 'IsFake',
      routeLimit: 'RouteLimit',
      regionId: 'RegionId',
      enableBfd: 'EnableBfd',
      ipVersion: 'IpVersion',
      bfdMultiHop: 'BfdMultiHop',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      description: 'string',
      bgpPeerId: 'string',
      bgpGroupId: 'string',
      peerIpAddress: 'string',
      peerAsn: 'string',
      authKey: 'string',
      routerId: 'string',
      bgpStatus: 'string',
      status: 'string',
      keepalive: 'string',
      localAsn: 'string',
      hold: 'string',
      isFake: 'string',
      routeLimit: 'string',
      regionId: 'string',
      enableBfd: 'boolean',
      ipVersion: 'string',
      bfdMultiHop: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpPeersResponseBgpPeers extends $tea.Model {
  bgpPeer: DescribeBgpPeersResponseBgpPeersBgpPeer[];
  static names(): { [key: string]: string } {
    return {
      bgpPeer: 'BgpPeer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bgpPeer: { 'type': 'array', 'itemType': DescribeBgpPeersResponseBgpPeersBgpPeer },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpGroupsResponseBgpGroupsBgpGroup extends $tea.Model {
  name: string;
  description: string;
  bgpGroupId: string;
  peerAsn: string;
  authKey: string;
  routerId: string;
  status: string;
  keepalive: string;
  localAsn: string;
  hold: string;
  isFake: string;
  routeLimit: string;
  regionId: string;
  ipVersion: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      description: 'Description',
      bgpGroupId: 'BgpGroupId',
      peerAsn: 'PeerAsn',
      authKey: 'AuthKey',
      routerId: 'RouterId',
      status: 'Status',
      keepalive: 'Keepalive',
      localAsn: 'LocalAsn',
      hold: 'Hold',
      isFake: 'IsFake',
      routeLimit: 'RouteLimit',
      regionId: 'RegionId',
      ipVersion: 'IpVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      description: 'string',
      bgpGroupId: 'string',
      peerAsn: 'string',
      authKey: 'string',
      routerId: 'string',
      status: 'string',
      keepalive: 'string',
      localAsn: 'string',
      hold: 'string',
      isFake: 'string',
      routeLimit: 'string',
      regionId: 'string',
      ipVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBgpGroupsResponseBgpGroups extends $tea.Model {
  bgpGroup: DescribeBgpGroupsResponseBgpGroupsBgpGroup[];
  static names(): { [key: string]: string } {
    return {
      bgpGroup: 'BgpGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bgpGroup: { 'type': 'array', 'itemType': DescribeBgpGroupsResponseBgpGroupsBgpGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcAttributeResponseAssociatedCensAssociatedCen extends $tea.Model {
  cenId: string;
  cenOwnerId: number;
  cenStatus: string;
  static names(): { [key: string]: string } {
    return {
      cenId: 'CenId',
      cenOwnerId: 'CenOwnerId',
      cenStatus: 'CenStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cenId: 'string',
      cenOwnerId: 'number',
      cenStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcAttributeResponseAssociatedCens extends $tea.Model {
  associatedCen: DescribeVpcAttributeResponseAssociatedCensAssociatedCen[];
  static names(): { [key: string]: string } {
    return {
      associatedCen: 'AssociatedCen',
    };
  }

  static types(): { [key: string]: any } {
    return {
      associatedCen: { 'type': 'array', 'itemType': DescribeVpcAttributeResponseAssociatedCensAssociatedCen },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcAttributeResponseCloudResourcesCloudResourceSetType extends $tea.Model {
  resourceType: string;
  resourceCount: number;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
      resourceCount: 'ResourceCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
      resourceCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcAttributeResponseCloudResources extends $tea.Model {
  cloudResourceSetType: DescribeVpcAttributeResponseCloudResourcesCloudResourceSetType[];
  static names(): { [key: string]: string } {
    return {
      cloudResourceSetType: 'CloudResourceSetType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cloudResourceSetType: { 'type': 'array', 'itemType': DescribeVpcAttributeResponseCloudResourcesCloudResourceSetType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcAttributeResponseVSwitchIds extends $tea.Model {
  vSwitchId: string[];
  static names(): { [key: string]: string } {
    return {
      vSwitchId: 'VSwitchId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vSwitchId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcAttributeResponseUserCidrs extends $tea.Model {
  userCidr: string[];
  static names(): { [key: string]: string } {
    return {
      userCidr: 'UserCidr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userCidr: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcAttributeResponseSecondaryCidrBlocks extends $tea.Model {
  secondaryCidrBlock: string[];
  static names(): { [key: string]: string } {
    return {
      secondaryCidrBlock: 'SecondaryCidrBlock',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secondaryCidrBlock: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSnatTableEntriesResponseSnatTableEntriesSnatTableEntry extends $tea.Model {
  snatTableId: string;
  snatEntryId: string;
  sourceVSwitchId: string;
  sourceCIDR: string;
  snatIp: string;
  status: string;
  snatEntryName: string;
  static names(): { [key: string]: string } {
    return {
      snatTableId: 'SnatTableId',
      snatEntryId: 'SnatEntryId',
      sourceVSwitchId: 'SourceVSwitchId',
      sourceCIDR: 'SourceCIDR',
      snatIp: 'SnatIp',
      status: 'Status',
      snatEntryName: 'SnatEntryName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snatTableId: 'string',
      snatEntryId: 'string',
      sourceVSwitchId: 'string',
      sourceCIDR: 'string',
      snatIp: 'string',
      status: 'string',
      snatEntryName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSnatTableEntriesResponseSnatTableEntries extends $tea.Model {
  snatTableEntry: DescribeSnatTableEntriesResponseSnatTableEntriesSnatTableEntry[];
  static names(): { [key: string]: string } {
    return {
      snatTableEntry: 'SnatTableEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snatTableEntry: { 'type': 'array', 'itemType': DescribeSnatTableEntriesResponseSnatTableEntriesSnatTableEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeZonesResponseZonesZone extends $tea.Model {
  zoneId: string;
  localName: string;
  static names(): { [key: string]: string } {
    return {
      zoneId: 'ZoneId',
      localName: 'LocalName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zoneId: 'string',
      localName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeZonesResponseZones extends $tea.Model {
  zone: DescribeZonesResponseZonesZone[];
  static names(): { [key: string]: string } {
    return {
      zone: 'Zone',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zone: { 'type': 'array', 'itemType': DescribeZonesResponseZonesZone },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVSwitchesResponseVSwitchesVSwitchTagsTag extends $tea.Model {
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

export class DescribeVSwitchesResponseVSwitchesVSwitchTags extends $tea.Model {
  tag: DescribeVSwitchesResponseVSwitchesVSwitchTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeVSwitchesResponseVSwitchesVSwitchTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVSwitchesResponseVSwitchesVSwitchRouteTable extends $tea.Model {
  routeTableId: string;
  routeTableType: string;
  static names(): { [key: string]: string } {
    return {
      routeTableId: 'RouteTableId',
      routeTableType: 'RouteTableType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routeTableId: 'string',
      routeTableType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVSwitchesResponseVSwitchesVSwitch extends $tea.Model {
  vSwitchId: string;
  vpcId: string;
  status: string;
  cidrBlock: string;
  ipv6CidrBlock: string;
  zoneId: string;
  availableIpAddressCount: number;
  description: string;
  vSwitchName: string;
  creationTime: string;
  isDefault: boolean;
  resourceGroupId: string;
  networkAclId: string;
  ownerId: number;
  shareType: string;
  tags: DescribeVSwitchesResponseVSwitchesVSwitchTags;
  routeTable: DescribeVSwitchesResponseVSwitchesVSwitchRouteTable;
  static names(): { [key: string]: string } {
    return {
      vSwitchId: 'VSwitchId',
      vpcId: 'VpcId',
      status: 'Status',
      cidrBlock: 'CidrBlock',
      ipv6CidrBlock: 'Ipv6CidrBlock',
      zoneId: 'ZoneId',
      availableIpAddressCount: 'AvailableIpAddressCount',
      description: 'Description',
      vSwitchName: 'VSwitchName',
      creationTime: 'CreationTime',
      isDefault: 'IsDefault',
      resourceGroupId: 'ResourceGroupId',
      networkAclId: 'NetworkAclId',
      ownerId: 'OwnerId',
      shareType: 'ShareType',
      tags: 'Tags',
      routeTable: 'RouteTable',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vSwitchId: 'string',
      vpcId: 'string',
      status: 'string',
      cidrBlock: 'string',
      ipv6CidrBlock: 'string',
      zoneId: 'string',
      availableIpAddressCount: 'number',
      description: 'string',
      vSwitchName: 'string',
      creationTime: 'string',
      isDefault: 'boolean',
      resourceGroupId: 'string',
      networkAclId: 'string',
      ownerId: 'number',
      shareType: 'string',
      tags: DescribeVSwitchesResponseVSwitchesVSwitchTags,
      routeTable: DescribeVSwitchesResponseVSwitchesVSwitchRouteTable,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVSwitchesResponseVSwitches extends $tea.Model {
  vSwitch: DescribeVSwitchesResponseVSwitchesVSwitch[];
  static names(): { [key: string]: string } {
    return {
      vSwitch: 'VSwitch',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vSwitch: { 'type': 'array', 'itemType': DescribeVSwitchesResponseVSwitchesVSwitch },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVRoutersResponseVRoutersVRouterRouteTableIds extends $tea.Model {
  routeTableId: string[];
  static names(): { [key: string]: string } {
    return {
      routeTableId: 'RouteTableId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routeTableId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVRoutersResponseVRoutersVRouter extends $tea.Model {
  regionId: string;
  vpcId: string;
  VRouterName: string;
  description: string;
  VRouterId: string;
  creationTime: string;
  routeTableIds: DescribeVRoutersResponseVRoutersVRouterRouteTableIds;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      vpcId: 'VpcId',
      VRouterName: 'VRouterName',
      description: 'Description',
      VRouterId: 'VRouterId',
      creationTime: 'CreationTime',
      routeTableIds: 'RouteTableIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      vpcId: 'string',
      VRouterName: 'string',
      description: 'string',
      VRouterId: 'string',
      creationTime: 'string',
      routeTableIds: DescribeVRoutersResponseVRoutersVRouterRouteTableIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVRoutersResponseVRouters extends $tea.Model {
  VRouter: DescribeVRoutersResponseVRoutersVRouter[];
  static names(): { [key: string]: string } {
    return {
      VRouter: 'VRouter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      VRouter: { 'type': 'array', 'itemType': DescribeVRoutersResponseVRoutersVRouter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsResponseVpcsVpcTagsTag extends $tea.Model {
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

export class DescribeVpcsResponseVpcsVpcTags extends $tea.Model {
  tag: DescribeVpcsResponseVpcsVpcTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeVpcsResponseVpcsVpcTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsResponseVpcsVpcVSwitchIds extends $tea.Model {
  vSwitchId: string[];
  static names(): { [key: string]: string } {
    return {
      vSwitchId: 'VSwitchId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vSwitchId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsResponseVpcsVpcUserCidrs extends $tea.Model {
  userCidr: string[];
  static names(): { [key: string]: string } {
    return {
      userCidr: 'UserCidr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userCidr: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsResponseVpcsVpcNatGatewayIds extends $tea.Model {
  natGatewayIds: string[];
  static names(): { [key: string]: string } {
    return {
      natGatewayIds: 'NatGatewayIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      natGatewayIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsResponseVpcsVpcRouterTableIds extends $tea.Model {
  routerTableIds: string[];
  static names(): { [key: string]: string } {
    return {
      routerTableIds: 'RouterTableIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routerTableIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsResponseVpcsVpcSecondaryCidrBlocks extends $tea.Model {
  secondaryCidrBlock: string[];
  static names(): { [key: string]: string } {
    return {
      secondaryCidrBlock: 'SecondaryCidrBlock',
    };
  }

  static types(): { [key: string]: any } {
    return {
      secondaryCidrBlock: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsResponseVpcsVpc extends $tea.Model {
  vpcId: string;
  regionId: string;
  status: string;
  vpcName: string;
  creationTime: string;
  cidrBlock: string;
  ipv6CidrBlock: string;
  VRouterId: string;
  description: string;
  isDefault: boolean;
  networkAclNum: string;
  resourceGroupId: string;
  cenStatus: string;
  ownerId: number;
  supportAdvancedFeature: boolean;
  advancedResource: boolean;
  dhcpOptionsSetId: string;
  dhcpOptionsSetStatus: string;
  tags: DescribeVpcsResponseVpcsVpcTags;
  vSwitchIds: DescribeVpcsResponseVpcsVpcVSwitchIds;
  userCidrs: DescribeVpcsResponseVpcsVpcUserCidrs;
  natGatewayIds: DescribeVpcsResponseVpcsVpcNatGatewayIds;
  routerTableIds: DescribeVpcsResponseVpcsVpcRouterTableIds;
  secondaryCidrBlocks: DescribeVpcsResponseVpcsVpcSecondaryCidrBlocks;
  static names(): { [key: string]: string } {
    return {
      vpcId: 'VpcId',
      regionId: 'RegionId',
      status: 'Status',
      vpcName: 'VpcName',
      creationTime: 'CreationTime',
      cidrBlock: 'CidrBlock',
      ipv6CidrBlock: 'Ipv6CidrBlock',
      VRouterId: 'VRouterId',
      description: 'Description',
      isDefault: 'IsDefault',
      networkAclNum: 'NetworkAclNum',
      resourceGroupId: 'ResourceGroupId',
      cenStatus: 'CenStatus',
      ownerId: 'OwnerId',
      supportAdvancedFeature: 'SupportAdvancedFeature',
      advancedResource: 'AdvancedResource',
      dhcpOptionsSetId: 'DhcpOptionsSetId',
      dhcpOptionsSetStatus: 'DhcpOptionsSetStatus',
      tags: 'Tags',
      vSwitchIds: 'VSwitchIds',
      userCidrs: 'UserCidrs',
      natGatewayIds: 'NatGatewayIds',
      routerTableIds: 'RouterTableIds',
      secondaryCidrBlocks: 'SecondaryCidrBlocks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcId: 'string',
      regionId: 'string',
      status: 'string',
      vpcName: 'string',
      creationTime: 'string',
      cidrBlock: 'string',
      ipv6CidrBlock: 'string',
      VRouterId: 'string',
      description: 'string',
      isDefault: 'boolean',
      networkAclNum: 'string',
      resourceGroupId: 'string',
      cenStatus: 'string',
      ownerId: 'number',
      supportAdvancedFeature: 'boolean',
      advancedResource: 'boolean',
      dhcpOptionsSetId: 'string',
      dhcpOptionsSetStatus: 'string',
      tags: DescribeVpcsResponseVpcsVpcTags,
      vSwitchIds: DescribeVpcsResponseVpcsVpcVSwitchIds,
      userCidrs: DescribeVpcsResponseVpcsVpcUserCidrs,
      natGatewayIds: DescribeVpcsResponseVpcsVpcNatGatewayIds,
      routerTableIds: DescribeVpcsResponseVpcsVpcRouterTableIds,
      secondaryCidrBlocks: DescribeVpcsResponseVpcsVpcSecondaryCidrBlocks,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVpcsResponseVpcs extends $tea.Model {
  vpc: DescribeVpcsResponseVpcsVpc[];
  static names(): { [key: string]: string } {
    return {
      vpc: 'Vpc',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpc: { 'type': 'array', 'itemType': DescribeVpcsResponseVpcsVpc },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersForPhysicalConnectionRequestFilter extends $tea.Model {
  key: string;
  value: string[];
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSetVirtualBorderRouterForPhysicalConnectionType extends $tea.Model {
  vbrId: string;
  vbrOwnerUid: number;
  eccId: string;
  type: string;
  creationTime: string;
  activationTime: string;
  terminationTime: string;
  recoveryTime: string;
  vlanId: number;
  status: string;
  circuitCode: string;
  localGatewayIp: string;
  peerGatewayIp: string;
  peeringSubnetMask: string;
  PConnVbrChargeType: string;
  PConnVbrExpireTime: string;
  PConnVbrBussinessStatus: string;
  bandwidth: string;
  localIpv6GatewayIp: string;
  peerIpv6GatewayIp: string;
  peeringIpv6SubnetMask: string;
  enableIpv6: boolean;
  static names(): { [key: string]: string } {
    return {
      vbrId: 'VbrId',
      vbrOwnerUid: 'VbrOwnerUid',
      eccId: 'EccId',
      type: 'Type',
      creationTime: 'CreationTime',
      activationTime: 'ActivationTime',
      terminationTime: 'TerminationTime',
      recoveryTime: 'RecoveryTime',
      vlanId: 'VlanId',
      status: 'Status',
      circuitCode: 'CircuitCode',
      localGatewayIp: 'LocalGatewayIp',
      peerGatewayIp: 'PeerGatewayIp',
      peeringSubnetMask: 'PeeringSubnetMask',
      PConnVbrChargeType: 'PConnVbrChargeType',
      PConnVbrExpireTime: 'PConnVbrExpireTime',
      PConnVbrBussinessStatus: 'PConnVbrBussinessStatus',
      bandwidth: 'Bandwidth',
      localIpv6GatewayIp: 'LocalIpv6GatewayIp',
      peerIpv6GatewayIp: 'PeerIpv6GatewayIp',
      peeringIpv6SubnetMask: 'PeeringIpv6SubnetMask',
      enableIpv6: 'EnableIpv6',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vbrId: 'string',
      vbrOwnerUid: 'number',
      eccId: 'string',
      type: 'string',
      creationTime: 'string',
      activationTime: 'string',
      terminationTime: 'string',
      recoveryTime: 'string',
      vlanId: 'number',
      status: 'string',
      circuitCode: 'string',
      localGatewayIp: 'string',
      peerGatewayIp: 'string',
      peeringSubnetMask: 'string',
      PConnVbrChargeType: 'string',
      PConnVbrExpireTime: 'string',
      PConnVbrBussinessStatus: 'string',
      bandwidth: 'string',
      localIpv6GatewayIp: 'string',
      peerIpv6GatewayIp: 'string',
      peeringIpv6SubnetMask: 'string',
      enableIpv6: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSet extends $tea.Model {
  virtualBorderRouterForPhysicalConnectionType: DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSetVirtualBorderRouterForPhysicalConnectionType[];
  static names(): { [key: string]: string } {
    return {
      virtualBorderRouterForPhysicalConnectionType: 'VirtualBorderRouterForPhysicalConnectionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      virtualBorderRouterForPhysicalConnectionType: { 'type': 'array', 'itemType': DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSetVirtualBorderRouterForPhysicalConnectionType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersRequestFilter extends $tea.Model {
  key: string;
  value: string[];
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnectionsAssociatedPhysicalConnection extends $tea.Model {
  circuitCode: string;
  vlanInterfaceId: string;
  localGatewayIp: string;
  peerGatewayIp: string;
  peeringSubnetMask: string;
  physicalConnectionId: string;
  physicalConnectionStatus: string;
  physicalConnectionBusinessStatus: string;
  physicalConnectionOwnerUid: string;
  vlanId: string;
  localIpv6GatewayIp: string;
  peerIpv6GatewayIp: string;
  peeringIpv6SubnetMask: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      circuitCode: 'CircuitCode',
      vlanInterfaceId: 'VlanInterfaceId',
      localGatewayIp: 'LocalGatewayIp',
      peerGatewayIp: 'PeerGatewayIp',
      peeringSubnetMask: 'PeeringSubnetMask',
      physicalConnectionId: 'PhysicalConnectionId',
      physicalConnectionStatus: 'PhysicalConnectionStatus',
      physicalConnectionBusinessStatus: 'PhysicalConnectionBusinessStatus',
      physicalConnectionOwnerUid: 'PhysicalConnectionOwnerUid',
      vlanId: 'VlanId',
      localIpv6GatewayIp: 'LocalIpv6GatewayIp',
      peerIpv6GatewayIp: 'PeerIpv6GatewayIp',
      peeringIpv6SubnetMask: 'PeeringIpv6SubnetMask',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      circuitCode: 'string',
      vlanInterfaceId: 'string',
      localGatewayIp: 'string',
      peerGatewayIp: 'string',
      peeringSubnetMask: 'string',
      physicalConnectionId: 'string',
      physicalConnectionStatus: 'string',
      physicalConnectionBusinessStatus: 'string',
      physicalConnectionOwnerUid: 'string',
      vlanId: 'string',
      localIpv6GatewayIp: 'string',
      peerIpv6GatewayIp: 'string',
      peeringIpv6SubnetMask: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnections extends $tea.Model {
  associatedPhysicalConnection: DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnectionsAssociatedPhysicalConnection[];
  static names(): { [key: string]: string } {
    return {
      associatedPhysicalConnection: 'AssociatedPhysicalConnection',
    };
  }

  static types(): { [key: string]: any } {
    return {
      associatedPhysicalConnection: { 'type': 'array', 'itemType': DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnectionsAssociatedPhysicalConnection },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCensAssociatedCen extends $tea.Model {
  cenId: string;
  cenOwnerId: number;
  cenStatus: string;
  static names(): { [key: string]: string } {
    return {
      cenId: 'CenId',
      cenOwnerId: 'CenOwnerId',
      cenStatus: 'CenStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cenId: 'string',
      cenOwnerId: 'number',
      cenStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCens extends $tea.Model {
  associatedCen: DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCensAssociatedCen[];
  static names(): { [key: string]: string } {
    return {
      associatedCen: 'AssociatedCen',
    };
  }

  static types(): { [key: string]: any } {
    return {
      associatedCen: { 'type': 'array', 'itemType': DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCensAssociatedCen },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterType extends $tea.Model {
  vbrId: string;
  creationTime: string;
  activationTime: string;
  terminationTime: string;
  recoveryTime: string;
  status: string;
  vlanId: number;
  circuitCode: string;
  routeTableId: string;
  vlanInterfaceId: string;
  localGatewayIp: string;
  peerGatewayIp: string;
  peeringSubnetMask: string;
  physicalConnectionId: string;
  physicalConnectionStatus: string;
  physicalConnectionBusinessStatus: string;
  physicalConnectionOwnerUid: string;
  accessPointId: string;
  name: string;
  description: string;
  PConnVbrExpireTime: string;
  eccId: string;
  type: string;
  minTxInterval: number;
  minRxInterval: number;
  detectMultiplier: number;
  localIpv6GatewayIp: string;
  peerIpv6GatewayIp: string;
  peeringIpv6SubnetMask: string;
  enableIpv6: boolean;
  associatedPhysicalConnections: DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnections;
  associatedCens: DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCens;
  static names(): { [key: string]: string } {
    return {
      vbrId: 'VbrId',
      creationTime: 'CreationTime',
      activationTime: 'ActivationTime',
      terminationTime: 'TerminationTime',
      recoveryTime: 'RecoveryTime',
      status: 'Status',
      vlanId: 'VlanId',
      circuitCode: 'CircuitCode',
      routeTableId: 'RouteTableId',
      vlanInterfaceId: 'VlanInterfaceId',
      localGatewayIp: 'LocalGatewayIp',
      peerGatewayIp: 'PeerGatewayIp',
      peeringSubnetMask: 'PeeringSubnetMask',
      physicalConnectionId: 'PhysicalConnectionId',
      physicalConnectionStatus: 'PhysicalConnectionStatus',
      physicalConnectionBusinessStatus: 'PhysicalConnectionBusinessStatus',
      physicalConnectionOwnerUid: 'PhysicalConnectionOwnerUid',
      accessPointId: 'AccessPointId',
      name: 'Name',
      description: 'Description',
      PConnVbrExpireTime: 'PConnVbrExpireTime',
      eccId: 'EccId',
      type: 'Type',
      minTxInterval: 'MinTxInterval',
      minRxInterval: 'MinRxInterval',
      detectMultiplier: 'DetectMultiplier',
      localIpv6GatewayIp: 'LocalIpv6GatewayIp',
      peerIpv6GatewayIp: 'PeerIpv6GatewayIp',
      peeringIpv6SubnetMask: 'PeeringIpv6SubnetMask',
      enableIpv6: 'EnableIpv6',
      associatedPhysicalConnections: 'AssociatedPhysicalConnections',
      associatedCens: 'AssociatedCens',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vbrId: 'string',
      creationTime: 'string',
      activationTime: 'string',
      terminationTime: 'string',
      recoveryTime: 'string',
      status: 'string',
      vlanId: 'number',
      circuitCode: 'string',
      routeTableId: 'string',
      vlanInterfaceId: 'string',
      localGatewayIp: 'string',
      peerGatewayIp: 'string',
      peeringSubnetMask: 'string',
      physicalConnectionId: 'string',
      physicalConnectionStatus: 'string',
      physicalConnectionBusinessStatus: 'string',
      physicalConnectionOwnerUid: 'string',
      accessPointId: 'string',
      name: 'string',
      description: 'string',
      PConnVbrExpireTime: 'string',
      eccId: 'string',
      type: 'string',
      minTxInterval: 'number',
      minRxInterval: 'number',
      detectMultiplier: 'number',
      localIpv6GatewayIp: 'string',
      peerIpv6GatewayIp: 'string',
      peeringIpv6SubnetMask: 'string',
      enableIpv6: 'boolean',
      associatedPhysicalConnections: DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnections,
      associatedCens: DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCens,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSet extends $tea.Model {
  virtualBorderRouterType: DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterType[];
  static names(): { [key: string]: string } {
    return {
      virtualBorderRouterType: 'VirtualBorderRouterType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      virtualBorderRouterType: { 'type': 'array', 'itemType': DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHopsNextHop extends $tea.Model {
  nextHopType: string;
  nextHopId: string;
  enabled: number;
  weight: number;
  nextHopRegionId: string;
  nextHopOppsiteType: string;
  nextHopOppsiteInstanceId: string;
  nextHopOppsiteRegionId: string;
  static names(): { [key: string]: string } {
    return {
      nextHopType: 'NextHopType',
      nextHopId: 'NextHopId',
      enabled: 'Enabled',
      weight: 'Weight',
      nextHopRegionId: 'NextHopRegionId',
      nextHopOppsiteType: 'NextHopOppsiteType',
      nextHopOppsiteInstanceId: 'NextHopOppsiteInstanceId',
      nextHopOppsiteRegionId: 'NextHopOppsiteRegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nextHopType: 'string',
      nextHopId: 'string',
      enabled: 'number',
      weight: 'number',
      nextHopRegionId: 'string',
      nextHopOppsiteType: 'string',
      nextHopOppsiteInstanceId: 'string',
      nextHopOppsiteRegionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHops extends $tea.Model {
  nextHop: DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHopsNextHop[];
  static names(): { [key: string]: string } {
    return {
      nextHop: 'NextHop',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nextHop: { 'type': 'array', 'itemType': DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHopsNextHop },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntry extends $tea.Model {
  routeTableId: string;
  destinationCidrBlock: string;
  type: string;
  status: string;
  instanceId: string;
  nextHopType: string;
  routeEntryName: string;
  description: string;
  routeEntryId: string;
  nextHopRegionId: string;
  nextHopOppsiteType: string;
  nextHopOppsiteInstanceId: string;
  nextHopOppsiteRegionId: string;
  privateIpAddress: string;
  nextHops: DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHops;
  static names(): { [key: string]: string } {
    return {
      routeTableId: 'RouteTableId',
      destinationCidrBlock: 'DestinationCidrBlock',
      type: 'Type',
      status: 'Status',
      instanceId: 'InstanceId',
      nextHopType: 'NextHopType',
      routeEntryName: 'RouteEntryName',
      description: 'Description',
      routeEntryId: 'RouteEntryId',
      nextHopRegionId: 'NextHopRegionId',
      nextHopOppsiteType: 'NextHopOppsiteType',
      nextHopOppsiteInstanceId: 'NextHopOppsiteInstanceId',
      nextHopOppsiteRegionId: 'NextHopOppsiteRegionId',
      privateIpAddress: 'PrivateIpAddress',
      nextHops: 'NextHops',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routeTableId: 'string',
      destinationCidrBlock: 'string',
      type: 'string',
      status: 'string',
      instanceId: 'string',
      nextHopType: 'string',
      routeEntryName: 'string',
      description: 'string',
      routeEntryId: 'string',
      nextHopRegionId: 'string',
      nextHopOppsiteType: 'string',
      nextHopOppsiteInstanceId: 'string',
      nextHopOppsiteRegionId: 'string',
      privateIpAddress: 'string',
      nextHops: DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHops,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrys extends $tea.Model {
  routeEntry: DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntry[];
  static names(): { [key: string]: string } {
    return {
      routeEntry: 'RouteEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routeEntry: { 'type': 'array', 'itemType': DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTablesResponseRouteTablesRouteTableVSwitchIds extends $tea.Model {
  vSwitchId: string[];
  static names(): { [key: string]: string } {
    return {
      vSwitchId: 'VSwitchId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vSwitchId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTablesResponseRouteTablesRouteTable extends $tea.Model {
  VRouterId: string;
  routeTableId: string;
  routeTableType: string;
  creationTime: string;
  resourceGroupId: string;
  status: string;
  routeEntrys: DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrys;
  vSwitchIds: DescribeRouteTablesResponseRouteTablesRouteTableVSwitchIds;
  static names(): { [key: string]: string } {
    return {
      VRouterId: 'VRouterId',
      routeTableId: 'RouteTableId',
      routeTableType: 'RouteTableType',
      creationTime: 'CreationTime',
      resourceGroupId: 'ResourceGroupId',
      status: 'Status',
      routeEntrys: 'RouteEntrys',
      vSwitchIds: 'VSwitchIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      VRouterId: 'string',
      routeTableId: 'string',
      routeTableType: 'string',
      creationTime: 'string',
      resourceGroupId: 'string',
      status: 'string',
      routeEntrys: DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrys,
      vSwitchIds: DescribeRouteTablesResponseRouteTablesRouteTableVSwitchIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouteTablesResponseRouteTables extends $tea.Model {
  routeTable: DescribeRouteTablesResponseRouteTablesRouteTable[];
  static names(): { [key: string]: string } {
    return {
      routeTable: 'RouteTable',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routeTable: { 'type': 'array', 'itemType': DescribeRouteTablesResponseRouteTablesRouteTable },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouterInterfacesRequestFilter extends $tea.Model {
  key: string;
  value: string[];
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouterInterfacesResponseRouterInterfaceSetRouterInterfaceType extends $tea.Model {
  routerInterfaceId: string;
  oppositeRegionId: string;
  role: string;
  spec: string;
  name: string;
  description: string;
  routerId: string;
  routerType: string;
  creationTime: string;
  endTime: string;
  chargeType: string;
  status: string;
  businessStatus: string;
  connectedTime: string;
  oppositeInterfaceId: string;
  oppositeInterfaceSpec: string;
  oppositeInterfaceStatus: string;
  oppositeInterfaceBusinessStatus: string;
  oppositeRouterId: string;
  oppositeRouterType: string;
  oppositeInterfaceOwnerId: string;
  accessPointId: string;
  oppositeAccessPointId: string;
  healthCheckSourceIp: string;
  healthCheckTargetIp: string;
  oppositeVpcInstanceId: string;
  bandwidth: number;
  vpcInstanceId: string;
  oppositeBandwidth: number;
  hasReservationData: string;
  reservationBandwidth: string;
  reservationInternetChargeType: string;
  reservationActiveTime: string;
  reservationOrderType: string;
  crossBorder: boolean;
  hcThreshold: number;
  hcRate: number;
  static names(): { [key: string]: string } {
    return {
      routerInterfaceId: 'RouterInterfaceId',
      oppositeRegionId: 'OppositeRegionId',
      role: 'Role',
      spec: 'Spec',
      name: 'Name',
      description: 'Description',
      routerId: 'RouterId',
      routerType: 'RouterType',
      creationTime: 'CreationTime',
      endTime: 'EndTime',
      chargeType: 'ChargeType',
      status: 'Status',
      businessStatus: 'BusinessStatus',
      connectedTime: 'ConnectedTime',
      oppositeInterfaceId: 'OppositeInterfaceId',
      oppositeInterfaceSpec: 'OppositeInterfaceSpec',
      oppositeInterfaceStatus: 'OppositeInterfaceStatus',
      oppositeInterfaceBusinessStatus: 'OppositeInterfaceBusinessStatus',
      oppositeRouterId: 'OppositeRouterId',
      oppositeRouterType: 'OppositeRouterType',
      oppositeInterfaceOwnerId: 'OppositeInterfaceOwnerId',
      accessPointId: 'AccessPointId',
      oppositeAccessPointId: 'OppositeAccessPointId',
      healthCheckSourceIp: 'HealthCheckSourceIp',
      healthCheckTargetIp: 'HealthCheckTargetIp',
      oppositeVpcInstanceId: 'OppositeVpcInstanceId',
      bandwidth: 'Bandwidth',
      vpcInstanceId: 'VpcInstanceId',
      oppositeBandwidth: 'OppositeBandwidth',
      hasReservationData: 'HasReservationData',
      reservationBandwidth: 'ReservationBandwidth',
      reservationInternetChargeType: 'ReservationInternetChargeType',
      reservationActiveTime: 'ReservationActiveTime',
      reservationOrderType: 'ReservationOrderType',
      crossBorder: 'CrossBorder',
      hcThreshold: 'HcThreshold',
      hcRate: 'HcRate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routerInterfaceId: 'string',
      oppositeRegionId: 'string',
      role: 'string',
      spec: 'string',
      name: 'string',
      description: 'string',
      routerId: 'string',
      routerType: 'string',
      creationTime: 'string',
      endTime: 'string',
      chargeType: 'string',
      status: 'string',
      businessStatus: 'string',
      connectedTime: 'string',
      oppositeInterfaceId: 'string',
      oppositeInterfaceSpec: 'string',
      oppositeInterfaceStatus: 'string',
      oppositeInterfaceBusinessStatus: 'string',
      oppositeRouterId: 'string',
      oppositeRouterType: 'string',
      oppositeInterfaceOwnerId: 'string',
      accessPointId: 'string',
      oppositeAccessPointId: 'string',
      healthCheckSourceIp: 'string',
      healthCheckTargetIp: 'string',
      oppositeVpcInstanceId: 'string',
      bandwidth: 'number',
      vpcInstanceId: 'string',
      oppositeBandwidth: 'number',
      hasReservationData: 'string',
      reservationBandwidth: 'string',
      reservationInternetChargeType: 'string',
      reservationActiveTime: 'string',
      reservationOrderType: 'string',
      crossBorder: 'boolean',
      hcThreshold: 'number',
      hcRate: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRouterInterfacesResponseRouterInterfaceSet extends $tea.Model {
  routerInterfaceType: DescribeRouterInterfacesResponseRouterInterfaceSetRouterInterfaceType[];
  static names(): { [key: string]: string } {
    return {
      routerInterfaceType: 'RouterInterfaceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      routerInterfaceType: { 'type': 'array', 'itemType': DescribeRouterInterfacesResponseRouterInterfaceSetRouterInterfaceType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegionsRegion extends $tea.Model {
  regionId: string;
  localName: string;
  regionEndpoint: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      localName: 'LocalName',
      regionEndpoint: 'RegionEndpoint',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      localName: 'string',
      regionEndpoint: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegions extends $tea.Model {
  region: DescribeRegionsResponseRegionsRegion[];
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: { 'type': 'array', 'itemType': DescribeRegionsResponseRegionsRegion },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePhysicalConnectionsRequestFilter extends $tea.Model {
  key: string;
  value: string[];
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePhysicalConnectionsResponsePhysicalConnectionSetPhysicalConnectionType extends $tea.Model {
  physicalConnectionId: string;
  accessPointId: string;
  type: string;
  status: string;
  businessStatus: string;
  creationTime: string;
  enabledTime: string;
  lineOperator: string;
  spec: string;
  peerLocation: string;
  portType: string;
  redundantPhysicalConnectionId: string;
  name: string;
  description: string;
  adLocation: string;
  portNumber: string;
  circuitCode: string;
  bandwidth: number;
  loaStatus: string;
  hasReservationData: string;
  reservationInternetChargeType: string;
  reservationActiveTime: string;
  reservationOrderType: string;
  endTime: string;
  chargeType: string;
  static names(): { [key: string]: string } {
    return {
      physicalConnectionId: 'PhysicalConnectionId',
      accessPointId: 'AccessPointId',
      type: 'Type',
      status: 'Status',
      businessStatus: 'BusinessStatus',
      creationTime: 'CreationTime',
      enabledTime: 'EnabledTime',
      lineOperator: 'LineOperator',
      spec: 'Spec',
      peerLocation: 'PeerLocation',
      portType: 'PortType',
      redundantPhysicalConnectionId: 'RedundantPhysicalConnectionId',
      name: 'Name',
      description: 'Description',
      adLocation: 'AdLocation',
      portNumber: 'PortNumber',
      circuitCode: 'CircuitCode',
      bandwidth: 'Bandwidth',
      loaStatus: 'LoaStatus',
      hasReservationData: 'HasReservationData',
      reservationInternetChargeType: 'ReservationInternetChargeType',
      reservationActiveTime: 'ReservationActiveTime',
      reservationOrderType: 'ReservationOrderType',
      endTime: 'EndTime',
      chargeType: 'ChargeType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      physicalConnectionId: 'string',
      accessPointId: 'string',
      type: 'string',
      status: 'string',
      businessStatus: 'string',
      creationTime: 'string',
      enabledTime: 'string',
      lineOperator: 'string',
      spec: 'string',
      peerLocation: 'string',
      portType: 'string',
      redundantPhysicalConnectionId: 'string',
      name: 'string',
      description: 'string',
      adLocation: 'string',
      portNumber: 'string',
      circuitCode: 'string',
      bandwidth: 'number',
      loaStatus: 'string',
      hasReservationData: 'string',
      reservationInternetChargeType: 'string',
      reservationActiveTime: 'string',
      reservationOrderType: 'string',
      endTime: 'string',
      chargeType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePhysicalConnectionsResponsePhysicalConnectionSet extends $tea.Model {
  physicalConnectionType: DescribePhysicalConnectionsResponsePhysicalConnectionSetPhysicalConnectionType[];
  static names(): { [key: string]: string } {
    return {
      physicalConnectionType: 'PhysicalConnectionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      physicalConnectionType: { 'type': 'array', 'itemType': DescribePhysicalConnectionsResponsePhysicalConnectionSetPhysicalConnectionType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNewProjectEipMonitorDataResponseEipMonitorDatasEipMonitorData extends $tea.Model {
  eipRX: number;
  eipTX: number;
  eipFlow: number;
  eipBandwidth: number;
  eipPackets: number;
  timeStamp: string;
  static names(): { [key: string]: string } {
    return {
      eipRX: 'EipRX',
      eipTX: 'EipTX',
      eipFlow: 'EipFlow',
      eipBandwidth: 'EipBandwidth',
      eipPackets: 'EipPackets',
      timeStamp: 'TimeStamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eipRX: 'number',
      eipTX: 'number',
      eipFlow: 'number',
      eipBandwidth: 'number',
      eipPackets: 'number',
      timeStamp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNewProjectEipMonitorDataResponseEipMonitorDatas extends $tea.Model {
  eipMonitorData: DescribeNewProjectEipMonitorDataResponseEipMonitorDatasEipMonitorData[];
  static names(): { [key: string]: string } {
    return {
      eipMonitorData: 'EipMonitorData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eipMonitorData: { 'type': 'array', 'itemType': DescribeNewProjectEipMonitorDataResponseEipMonitorDatasEipMonitorData },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysResponseNatGatewaysNatGatewayIpListsIpList extends $tea.Model {
  allocationId: string;
  ipAddress: string;
  usingStatus: string;
  apAccessEnabled: boolean;
  snatEntryEnabled: boolean;
  static names(): { [key: string]: string } {
    return {
      allocationId: 'AllocationId',
      ipAddress: 'IpAddress',
      usingStatus: 'UsingStatus',
      apAccessEnabled: 'ApAccessEnabled',
      snatEntryEnabled: 'SnatEntryEnabled',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allocationId: 'string',
      ipAddress: 'string',
      usingStatus: 'string',
      apAccessEnabled: 'boolean',
      snatEntryEnabled: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysResponseNatGatewaysNatGatewayIpLists extends $tea.Model {
  ipList: DescribeNatGatewaysResponseNatGatewaysNatGatewayIpListsIpList[];
  static names(): { [key: string]: string } {
    return {
      ipList: 'IpList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipList: { 'type': 'array', 'itemType': DescribeNatGatewaysResponseNatGatewaysNatGatewayIpListsIpList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysResponseNatGatewaysNatGatewayNatGatewayPrivateInfo extends $tea.Model {
  eniInstanceId: string;
  privateIpAddress: string;
  vswitchId: string;
  izNo: string;
  maxBandwidth: number;
  static names(): { [key: string]: string } {
    return {
      eniInstanceId: 'EniInstanceId',
      privateIpAddress: 'PrivateIpAddress',
      vswitchId: 'VswitchId',
      izNo: 'IzNo',
      maxBandwidth: 'MaxBandwidth',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eniInstanceId: 'string',
      privateIpAddress: 'string',
      vswitchId: 'string',
      izNo: 'string',
      maxBandwidth: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysResponseNatGatewaysNatGatewayForwardTableIds extends $tea.Model {
  forwardTableId: string[];
  static names(): { [key: string]: string } {
    return {
      forwardTableId: 'ForwardTableId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      forwardTableId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysResponseNatGatewaysNatGatewaySnatTableIds extends $tea.Model {
  snatTableId: string[];
  static names(): { [key: string]: string } {
    return {
      snatTableId: 'SnatTableId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snatTableId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysResponseNatGatewaysNatGatewayBandwidthPackageIds extends $tea.Model {
  bandwidthPackageId: string[];
  static names(): { [key: string]: string } {
    return {
      bandwidthPackageId: 'BandwidthPackageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bandwidthPackageId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysResponseNatGatewaysNatGateway extends $tea.Model {
  natGatewayId: string;
  regionId: string;
  name: string;
  description: string;
  vpcId: string;
  spec: string;
  instanceChargeType: string;
  expiredTime: string;
  autoPay: boolean;
  businessStatus: string;
  creationTime: string;
  status: string;
  natType: string;
  internetChargeType: string;
  resourceGroupId: string;
  deletionProtection: boolean;
  ecsMetricEnabled: boolean;
  ipLists: DescribeNatGatewaysResponseNatGatewaysNatGatewayIpLists;
  natGatewayPrivateInfo: DescribeNatGatewaysResponseNatGatewaysNatGatewayNatGatewayPrivateInfo;
  forwardTableIds: DescribeNatGatewaysResponseNatGatewaysNatGatewayForwardTableIds;
  snatTableIds: DescribeNatGatewaysResponseNatGatewaysNatGatewaySnatTableIds;
  bandwidthPackageIds: DescribeNatGatewaysResponseNatGatewaysNatGatewayBandwidthPackageIds;
  static names(): { [key: string]: string } {
    return {
      natGatewayId: 'NatGatewayId',
      regionId: 'RegionId',
      name: 'Name',
      description: 'Description',
      vpcId: 'VpcId',
      spec: 'Spec',
      instanceChargeType: 'InstanceChargeType',
      expiredTime: 'ExpiredTime',
      autoPay: 'AutoPay',
      businessStatus: 'BusinessStatus',
      creationTime: 'CreationTime',
      status: 'Status',
      natType: 'NatType',
      internetChargeType: 'InternetChargeType',
      resourceGroupId: 'ResourceGroupId',
      deletionProtection: 'DeletionProtection',
      ecsMetricEnabled: 'EcsMetricEnabled',
      ipLists: 'IpLists',
      natGatewayPrivateInfo: 'NatGatewayPrivateInfo',
      forwardTableIds: 'ForwardTableIds',
      snatTableIds: 'SnatTableIds',
      bandwidthPackageIds: 'BandwidthPackageIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      natGatewayId: 'string',
      regionId: 'string',
      name: 'string',
      description: 'string',
      vpcId: 'string',
      spec: 'string',
      instanceChargeType: 'string',
      expiredTime: 'string',
      autoPay: 'boolean',
      businessStatus: 'string',
      creationTime: 'string',
      status: 'string',
      natType: 'string',
      internetChargeType: 'string',
      resourceGroupId: 'string',
      deletionProtection: 'boolean',
      ecsMetricEnabled: 'boolean',
      ipLists: DescribeNatGatewaysResponseNatGatewaysNatGatewayIpLists,
      natGatewayPrivateInfo: DescribeNatGatewaysResponseNatGatewaysNatGatewayNatGatewayPrivateInfo,
      forwardTableIds: DescribeNatGatewaysResponseNatGatewaysNatGatewayForwardTableIds,
      snatTableIds: DescribeNatGatewaysResponseNatGatewaysNatGatewaySnatTableIds,
      bandwidthPackageIds: DescribeNatGatewaysResponseNatGatewaysNatGatewayBandwidthPackageIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNatGatewaysResponseNatGateways extends $tea.Model {
  natGateway: DescribeNatGatewaysResponseNatGatewaysNatGateway[];
  static names(): { [key: string]: string } {
    return {
      natGateway: 'NatGateway',
    };
  }

  static types(): { [key: string]: any } {
    return {
      natGateway: { 'type': 'array', 'itemType': DescribeNatGatewaysResponseNatGatewaysNatGateway },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHaVipsRequestFilter extends $tea.Model {
  key: string;
  value: string[];
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHaVipsResponseHaVipsHaVipAssociatedInstances extends $tea.Model {
  associatedInstance: string[];
  static names(): { [key: string]: string } {
    return {
      associatedInstance: 'associatedInstance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      associatedInstance: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHaVipsResponseHaVipsHaVipAssociatedEipAddresses extends $tea.Model {
  associatedEipAddresse: string[];
  static names(): { [key: string]: string } {
    return {
      associatedEipAddresse: 'associatedEipAddresse',
    };
  }

  static types(): { [key: string]: any } {
    return {
      associatedEipAddresse: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHaVipsResponseHaVipsHaVip extends $tea.Model {
  haVipId: string;
  regionId: string;
  vpcId: string;
  vSwitchId: string;
  ipAddress: string;
  status: string;
  masterInstanceId: string;
  description: string;
  name: string;
  chargeType: string;
  createTime: string;
  associatedInstances: DescribeHaVipsResponseHaVipsHaVipAssociatedInstances;
  associatedEipAddresses: DescribeHaVipsResponseHaVipsHaVipAssociatedEipAddresses;
  static names(): { [key: string]: string } {
    return {
      haVipId: 'HaVipId',
      regionId: 'RegionId',
      vpcId: 'VpcId',
      vSwitchId: 'VSwitchId',
      ipAddress: 'IpAddress',
      status: 'Status',
      masterInstanceId: 'MasterInstanceId',
      description: 'Description',
      name: 'Name',
      chargeType: 'ChargeType',
      createTime: 'CreateTime',
      associatedInstances: 'AssociatedInstances',
      associatedEipAddresses: 'AssociatedEipAddresses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      haVipId: 'string',
      regionId: 'string',
      vpcId: 'string',
      vSwitchId: 'string',
      ipAddress: 'string',
      status: 'string',
      masterInstanceId: 'string',
      description: 'string',
      name: 'string',
      chargeType: 'string',
      createTime: 'string',
      associatedInstances: DescribeHaVipsResponseHaVipsHaVipAssociatedInstances,
      associatedEipAddresses: DescribeHaVipsResponseHaVipsHaVipAssociatedEipAddresses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHaVipsResponseHaVips extends $tea.Model {
  haVip: DescribeHaVipsResponseHaVipsHaVip[];
  static names(): { [key: string]: string } {
    return {
      haVip: 'HaVip',
    };
  }

  static types(): { [key: string]: any } {
    return {
      haVip: { 'type': 'array', 'itemType': DescribeHaVipsResponseHaVipsHaVip },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeForwardTableEntriesResponseForwardTableEntriesForwardTableEntry extends $tea.Model {
  forwardTableId: string;
  forwardEntryId: string;
  externalIp: string;
  externalPort: string;
  ipProtocol: string;
  internalIp: string;
  internalPort: string;
  status: string;
  forwardEntryName: string;
  static names(): { [key: string]: string } {
    return {
      forwardTableId: 'ForwardTableId',
      forwardEntryId: 'ForwardEntryId',
      externalIp: 'ExternalIp',
      externalPort: 'ExternalPort',
      ipProtocol: 'IpProtocol',
      internalIp: 'InternalIp',
      internalPort: 'InternalPort',
      status: 'Status',
      forwardEntryName: 'ForwardEntryName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      forwardTableId: 'string',
      forwardEntryId: 'string',
      externalIp: 'string',
      externalPort: 'string',
      ipProtocol: 'string',
      internalIp: 'string',
      internalPort: 'string',
      status: 'string',
      forwardEntryName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeForwardTableEntriesResponseForwardTableEntries extends $tea.Model {
  forwardTableEntry: DescribeForwardTableEntriesResponseForwardTableEntriesForwardTableEntry[];
  static names(): { [key: string]: string } {
    return {
      forwardTableEntry: 'ForwardTableEntry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      forwardTableEntry: { 'type': 'array', 'itemType': DescribeForwardTableEntriesResponseForwardTableEntriesForwardTableEntry },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipMonitorDataResponseEipMonitorDatasEipMonitorData extends $tea.Model {
  eipRX: number;
  eipTX: number;
  eipFlow: number;
  eipBandwidth: number;
  eipPackets: number;
  timeStamp: string;
  static names(): { [key: string]: string } {
    return {
      eipRX: 'EipRX',
      eipTX: 'EipTX',
      eipFlow: 'EipFlow',
      eipBandwidth: 'EipBandwidth',
      eipPackets: 'EipPackets',
      timeStamp: 'TimeStamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eipRX: 'number',
      eipTX: 'number',
      eipFlow: 'number',
      eipBandwidth: 'number',
      eipPackets: 'number',
      timeStamp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipMonitorDataResponseEipMonitorDatas extends $tea.Model {
  eipMonitorData: DescribeEipMonitorDataResponseEipMonitorDatasEipMonitorData[];
  static names(): { [key: string]: string } {
    return {
      eipMonitorData: 'EipMonitorData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eipMonitorData: { 'type': 'array', 'itemType': DescribeEipMonitorDataResponseEipMonitorDatasEipMonitorData },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipAddressesRequestFilter extends $tea.Model {
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

export class DescribeEipAddressesResponseEipAddressesEipAddressOperationLocksLockReason extends $tea.Model {
  lockReason: string;
  static names(): { [key: string]: string } {
    return {
      lockReason: 'LockReason',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lockReason: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipAddressesResponseEipAddressesEipAddressOperationLocks extends $tea.Model {
  lockReason: DescribeEipAddressesResponseEipAddressesEipAddressOperationLocksLockReason[];
  static names(): { [key: string]: string } {
    return {
      lockReason: 'LockReason',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lockReason: { 'type': 'array', 'itemType': DescribeEipAddressesResponseEipAddressesEipAddressOperationLocksLockReason },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipAddressesResponseEipAddressesEipAddressAvailableRegions extends $tea.Model {
  availableRegion: string[];
  static names(): { [key: string]: string } {
    return {
      availableRegion: 'AvailableRegion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableRegion: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipAddressesResponseEipAddressesEipAddress extends $tea.Model {
  regionId: string;
  ipAddress: string;
  privateIpAddress: string;
  allocationId: string;
  status: string;
  instanceId: string;
  bandwidth: string;
  eipBandwidth: string;
  internetChargeType: string;
  allocationTime: string;
  instanceType: string;
  instanceRegionId: string;
  chargeType: string;
  expiredTime: string;
  HDMonitorStatus: string;
  name: string;
  ISP: string;
  descritpion: string;
  bandwidthPackageId: string;
  bandwidthPackageType: string;
  bandwidthPackageBandwidth: string;
  resourceGroupId: string;
  hasReservationData: string;
  reservationBandwidth: string;
  reservationInternetChargeType: string;
  reservationActiveTime: string;
  reservationOrderType: string;
  mode: string;
  deletionProtection: boolean;
  secondLimited: boolean;
  segmentInstanceId: string;
  netmode: string;
  operationLocks: DescribeEipAddressesResponseEipAddressesEipAddressOperationLocks;
  availableRegions: DescribeEipAddressesResponseEipAddressesEipAddressAvailableRegions;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      ipAddress: 'IpAddress',
      privateIpAddress: 'PrivateIpAddress',
      allocationId: 'AllocationId',
      status: 'Status',
      instanceId: 'InstanceId',
      bandwidth: 'Bandwidth',
      eipBandwidth: 'EipBandwidth',
      internetChargeType: 'InternetChargeType',
      allocationTime: 'AllocationTime',
      instanceType: 'InstanceType',
      instanceRegionId: 'InstanceRegionId',
      chargeType: 'ChargeType',
      expiredTime: 'ExpiredTime',
      HDMonitorStatus: 'HDMonitorStatus',
      name: 'Name',
      ISP: 'ISP',
      descritpion: 'Descritpion',
      bandwidthPackageId: 'BandwidthPackageId',
      bandwidthPackageType: 'BandwidthPackageType',
      bandwidthPackageBandwidth: 'BandwidthPackageBandwidth',
      resourceGroupId: 'ResourceGroupId',
      hasReservationData: 'HasReservationData',
      reservationBandwidth: 'ReservationBandwidth',
      reservationInternetChargeType: 'ReservationInternetChargeType',
      reservationActiveTime: 'ReservationActiveTime',
      reservationOrderType: 'ReservationOrderType',
      mode: 'Mode',
      deletionProtection: 'DeletionProtection',
      secondLimited: 'SecondLimited',
      segmentInstanceId: 'SegmentInstanceId',
      netmode: 'Netmode',
      operationLocks: 'OperationLocks',
      availableRegions: 'AvailableRegions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      ipAddress: 'string',
      privateIpAddress: 'string',
      allocationId: 'string',
      status: 'string',
      instanceId: 'string',
      bandwidth: 'string',
      eipBandwidth: 'string',
      internetChargeType: 'string',
      allocationTime: 'string',
      instanceType: 'string',
      instanceRegionId: 'string',
      chargeType: 'string',
      expiredTime: 'string',
      HDMonitorStatus: 'string',
      name: 'string',
      ISP: 'string',
      descritpion: 'string',
      bandwidthPackageId: 'string',
      bandwidthPackageType: 'string',
      bandwidthPackageBandwidth: 'string',
      resourceGroupId: 'string',
      hasReservationData: 'string',
      reservationBandwidth: 'string',
      reservationInternetChargeType: 'string',
      reservationActiveTime: 'string',
      reservationOrderType: 'string',
      mode: 'string',
      deletionProtection: 'boolean',
      secondLimited: 'boolean',
      segmentInstanceId: 'string',
      netmode: 'string',
      operationLocks: DescribeEipAddressesResponseEipAddressesEipAddressOperationLocks,
      availableRegions: DescribeEipAddressesResponseEipAddressesEipAddressAvailableRegions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEipAddressesResponseEipAddresses extends $tea.Model {
  eipAddress: DescribeEipAddressesResponseEipAddressesEipAddress[];
  static names(): { [key: string]: string } {
    return {
      eipAddress: 'EipAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eipAddress: { 'type': 'array', 'itemType': DescribeEipAddressesResponseEipAddressesEipAddress },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddressesPublicIpAddresse extends $tea.Model {
  allocationId: string;
  ipAddress: string;
  usingStatus: string;
  apAccessEnabled: boolean;
  static names(): { [key: string]: string } {
    return {
      allocationId: 'AllocationId',
      ipAddress: 'IpAddress',
      usingStatus: 'UsingStatus',
      apAccessEnabled: 'ApAccessEnabled',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allocationId: 'string',
      ipAddress: 'string',
      usingStatus: 'string',
      apAccessEnabled: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddresses extends $tea.Model {
  publicIpAddresse: DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddressesPublicIpAddresse[];
  static names(): { [key: string]: string } {
    return {
      publicIpAddresse: 'PublicIpAddresse',
    };
  }

  static types(): { [key: string]: any } {
    return {
      publicIpAddresse: { 'type': 'array', 'itemType': DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddressesPublicIpAddresse },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackage extends $tea.Model {
  bandwidthPackageId: string;
  regionId: string;
  name: string;
  description: string;
  zoneId: string;
  natGatewayId: string;
  bandwidth: string;
  instanceChargeType: string;
  internetChargeType: string;
  businessStatus: string;
  ipCount: string;
  creationTime: string;
  status: string;
  ISP: string;
  publicIpAddresses: DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddresses;
  static names(): { [key: string]: string } {
    return {
      bandwidthPackageId: 'BandwidthPackageId',
      regionId: 'RegionId',
      name: 'Name',
      description: 'Description',
      zoneId: 'ZoneId',
      natGatewayId: 'NatGatewayId',
      bandwidth: 'Bandwidth',
      instanceChargeType: 'InstanceChargeType',
      internetChargeType: 'InternetChargeType',
      businessStatus: 'BusinessStatus',
      ipCount: 'IpCount',
      creationTime: 'CreationTime',
      status: 'Status',
      ISP: 'ISP',
      publicIpAddresses: 'PublicIpAddresses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bandwidthPackageId: 'string',
      regionId: 'string',
      name: 'string',
      description: 'string',
      zoneId: 'string',
      natGatewayId: 'string',
      bandwidth: 'string',
      instanceChargeType: 'string',
      internetChargeType: 'string',
      businessStatus: 'string',
      ipCount: 'string',
      creationTime: 'string',
      status: 'string',
      ISP: 'string',
      publicIpAddresses: DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddresses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBandwidthPackagesResponseBandwidthPackages extends $tea.Model {
  bandwidthPackage: DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackage[];
  static names(): { [key: string]: string } {
    return {
      bandwidthPackage: 'BandwidthPackage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bandwidthPackage: { 'type': 'array', 'itemType': DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackage },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessPointsResponseAccessPointSetAccessPointType extends $tea.Model {
  accessPointId: string;
  status: string;
  type: string;
  attachedRegionNo: string;
  location: string;
  hostOperator: string;
  name: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      accessPointId: 'AccessPointId',
      status: 'Status',
      type: 'Type',
      attachedRegionNo: 'AttachedRegionNo',
      location: 'Location',
      hostOperator: 'HostOperator',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessPointId: 'string',
      status: 'string',
      type: 'string',
      attachedRegionNo: 'string',
      location: 'string',
      hostOperator: 'string',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessPointsResponseAccessPointSet extends $tea.Model {
  accessPointType: DescribeAccessPointsResponseAccessPointSetAccessPointType[];
  static names(): { [key: string]: string } {
    return {
      accessPointType: 'AccessPointType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessPointType: { 'type': 'array', 'itemType': DescribeAccessPointsResponseAccessPointSetAccessPointType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRouteEntryRequestNextHopList extends $tea.Model {
  nextHopType: string;
  nextHopId: string;
  static names(): { [key: string]: string } {
    return {
      nextHopType: 'NextHopType',
      nextHopId: 'NextHopId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nextHopType: 'string',
      nextHopId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRouteEntryRequestNextHopList extends $tea.Model {
  nextHopType: string;
  nextHopId: string;
  weight: number;
  static names(): { [key: string]: string } {
    return {
      nextHopType: 'NextHopType',
      nextHopId: 'NextHopId',
      weight: 'Weight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nextHopType: 'string',
      nextHopId: 'string',
      weight: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNatGatewayRequestBandwidthPackage extends $tea.Model {
  ipCount: number;
  bandwidth: number;
  zone: string;
  ISP: string;
  static names(): { [key: string]: string } {
    return {
      ipCount: 'IpCount',
      bandwidth: 'Bandwidth',
      zone: 'Zone',
      ISP: 'ISP',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ipCount: 'number',
      bandwidth: 'number',
      zone: 'string',
      ISP: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNatGatewayResponseForwardTableIds extends $tea.Model {
  forwardTableId: string[];
  static names(): { [key: string]: string } {
    return {
      forwardTableId: 'ForwardTableId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      forwardTableId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNatGatewayResponseSnatTableIds extends $tea.Model {
  snatTableId: string[];
  static names(): { [key: string]: string } {
    return {
      snatTableId: 'SnatTableId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snatTableId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateNatGatewayResponseBandwidthPackageIds extends $tea.Model {
  bandwidthPackageId: string[];
  static names(): { [key: string]: string } {
    return {
      bandwidthPackageId: 'BandwidthPackageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bandwidthPackageId: { 'type': 'array', 'itemType': 'string' },
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
    this._endpointMap = {
      'cn-qingdao': "vpc.aliyuncs.com",
      'cn-beijing': "vpc.aliyuncs.com",
      'cn-hangzhou': "vpc.aliyuncs.com",
      'cn-shanghai': "vpc.aliyuncs.com",
      'cn-shenzhen': "vpc.aliyuncs.com",
      'cn-hongkong': "vpc.aliyuncs.com",
      'ap-southeast-1': "vpc.aliyuncs.com",
      'us-west-1': "vpc.aliyuncs.com",
      'us-east-1': "vpc.aliyuncs.com",
      'cn-shanghai-finance-1': "vpc.aliyuncs.com",
      'cn-shenzhen-finance-1': "vpc.aliyuncs.com",
      'cn-north-2-gov-1': "vpc.aliyuncs.com",
      'ap-northeast-2-pop': "vpc.aliyuncs.com",
      'cn-beijing-finance-1': "vpc.aliyuncs.com",
      'cn-beijing-finance-pop': "vpc.aliyuncs.com",
      'cn-beijing-gov-1': "vpc.aliyuncs.com",
      'cn-beijing-nu16-b01': "vpc.aliyuncs.com",
      'cn-edge-1': "vpc-nebula.cn-qingdao-nebula.aliyuncs.com",
      'cn-fujian': "vpc.aliyuncs.com",
      'cn-haidian-cm12-c01': "vpc.aliyuncs.com",
      'cn-hangzhou-bj-b01': "vpc.aliyuncs.com",
      'cn-hangzhou-finance': "vpc.aliyuncs.com",
      'cn-hangzhou-internal-prod-1': "vpc.aliyuncs.com",
      'cn-hangzhou-internal-test-1': "vpc.aliyuncs.com",
      'cn-hangzhou-internal-test-2': "vpc.aliyuncs.com",
      'cn-hangzhou-internal-test-3': "vpc.aliyuncs.com",
      'cn-hangzhou-test-306': "vpc.aliyuncs.com",
      'cn-hongkong-finance-pop': "vpc.aliyuncs.com",
      'cn-qingdao-nebula': "vpc-nebula.cn-qingdao-nebula.aliyuncs.com",
      'cn-shanghai-et15-b01': "vpc.aliyuncs.com",
      'cn-shanghai-et2-b01': "vpc.aliyuncs.com",
      'cn-shanghai-inner': "vpc.aliyuncs.com",
      'cn-shanghai-internal-test-1': "vpc.aliyuncs.com",
      'cn-shenzhen-inner': "vpc.aliyuncs.com",
      'cn-shenzhen-st4-d01': "vpc.aliyuncs.com",
      'cn-shenzhen-su18-b01': "vpc.aliyuncs.com",
      'cn-wuhan': "vpc.aliyuncs.com",
      'cn-yushanfang': "vpc.aliyuncs.com",
      'cn-zhangbei-na61-b01': "vpc.aliyuncs.com",
      'cn-zhangjiakou-na62-a01': "vpc.cn-zhangjiakou.aliyuncs.com",
      'cn-zhengzhou-nebula-1': "vpc-nebula.cn-qingdao-nebula.aliyuncs.com",
      'eu-west-1-oxs': "vpc-nebula.cn-shenzhen-cloudstone.aliyuncs.com",
      'rus-west-1-pop': "vpc.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("vpc", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async listNatGatewayEcsMetricWithOptions(request: ListNatGatewayEcsMetricRequest, runtime: $Util.RuntimeOptions): Promise<ListNatGatewayEcsMetricResponse> {
    Util.validateModel(request);
    return $tea.cast<ListNatGatewayEcsMetricResponse>(await this.doRequest("ListNatGatewayEcsMetric", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ListNatGatewayEcsMetricResponse({}));
  }

  async listNatGatewayEcsMetric(request: ListNatGatewayEcsMetricRequest): Promise<ListNatGatewayEcsMetricResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listNatGatewayEcsMetricWithOptions(request, runtime);
  }

  async disableNatGatewayEcsMetricWithOptions(request: DisableNatGatewayEcsMetricRequest, runtime: $Util.RuntimeOptions): Promise<DisableNatGatewayEcsMetricResponse> {
    Util.validateModel(request);
    return $tea.cast<DisableNatGatewayEcsMetricResponse>(await this.doRequest("DisableNatGatewayEcsMetric", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DisableNatGatewayEcsMetricResponse({}));
  }

  async disableNatGatewayEcsMetric(request: DisableNatGatewayEcsMetricRequest): Promise<DisableNatGatewayEcsMetricResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.disableNatGatewayEcsMetricWithOptions(request, runtime);
  }

  async enableNatGatewayEcsMetricWithOptions(request: EnableNatGatewayEcsMetricRequest, runtime: $Util.RuntimeOptions): Promise<EnableNatGatewayEcsMetricResponse> {
    Util.validateModel(request);
    return $tea.cast<EnableNatGatewayEcsMetricResponse>(await this.doRequest("EnableNatGatewayEcsMetric", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new EnableNatGatewayEcsMetricResponse({}));
  }

  async enableNatGatewayEcsMetric(request: EnableNatGatewayEcsMetricRequest): Promise<EnableNatGatewayEcsMetricResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enableNatGatewayEcsMetricWithOptions(request, runtime);
  }

  async createDhcpOptionsSetWithOptions(request: CreateDhcpOptionsSetRequest, runtime: $Util.RuntimeOptions): Promise<CreateDhcpOptionsSetResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDhcpOptionsSetResponse>(await this.doRequest("CreateDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateDhcpOptionsSetResponse({}));
  }

  async createDhcpOptionsSet(request: CreateDhcpOptionsSetRequest): Promise<CreateDhcpOptionsSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDhcpOptionsSetWithOptions(request, runtime);
  }

  async replaceVpcDhcpOptionsSetWithOptions(request: ReplaceVpcDhcpOptionsSetRequest, runtime: $Util.RuntimeOptions): Promise<ReplaceVpcDhcpOptionsSetResponse> {
    Util.validateModel(request);
    return $tea.cast<ReplaceVpcDhcpOptionsSetResponse>(await this.doRequest("ReplaceVpcDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ReplaceVpcDhcpOptionsSetResponse({}));
  }

  async replaceVpcDhcpOptionsSet(request: ReplaceVpcDhcpOptionsSetRequest): Promise<ReplaceVpcDhcpOptionsSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.replaceVpcDhcpOptionsSetWithOptions(request, runtime);
  }

  async updateDhcpOptionsSetAttributeWithOptions(request: UpdateDhcpOptionsSetAttributeRequest, runtime: $Util.RuntimeOptions): Promise<UpdateDhcpOptionsSetAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateDhcpOptionsSetAttributeResponse>(await this.doRequest("UpdateDhcpOptionsSetAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UpdateDhcpOptionsSetAttributeResponse({}));
  }

  async updateDhcpOptionsSetAttribute(request: UpdateDhcpOptionsSetAttributeRequest): Promise<UpdateDhcpOptionsSetAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateDhcpOptionsSetAttributeWithOptions(request, runtime);
  }

  async getDhcpOptionsSetWithOptions(request: GetDhcpOptionsSetRequest, runtime: $Util.RuntimeOptions): Promise<GetDhcpOptionsSetResponse> {
    Util.validateModel(request);
    return $tea.cast<GetDhcpOptionsSetResponse>(await this.doRequest("GetDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new GetDhcpOptionsSetResponse({}));
  }

  async getDhcpOptionsSet(request: GetDhcpOptionsSetRequest): Promise<GetDhcpOptionsSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getDhcpOptionsSetWithOptions(request, runtime);
  }

  async listDhcpOptionsSetsWithOptions(request: ListDhcpOptionsSetsRequest, runtime: $Util.RuntimeOptions): Promise<ListDhcpOptionsSetsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListDhcpOptionsSetsResponse>(await this.doRequest("ListDhcpOptionsSets", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ListDhcpOptionsSetsResponse({}));
  }

  async listDhcpOptionsSets(request: ListDhcpOptionsSetsRequest): Promise<ListDhcpOptionsSetsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listDhcpOptionsSetsWithOptions(request, runtime);
  }

  async detachDhcpOptionsSetFromVpcWithOptions(request: DetachDhcpOptionsSetFromVpcRequest, runtime: $Util.RuntimeOptions): Promise<DetachDhcpOptionsSetFromVpcResponse> {
    Util.validateModel(request);
    return $tea.cast<DetachDhcpOptionsSetFromVpcResponse>(await this.doRequest("DetachDhcpOptionsSetFromVpc", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DetachDhcpOptionsSetFromVpcResponse({}));
  }

  async detachDhcpOptionsSetFromVpc(request: DetachDhcpOptionsSetFromVpcRequest): Promise<DetachDhcpOptionsSetFromVpcResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detachDhcpOptionsSetFromVpcWithOptions(request, runtime);
  }

  async attachDhcpOptionsSetToVpcWithOptions(request: AttachDhcpOptionsSetToVpcRequest, runtime: $Util.RuntimeOptions): Promise<AttachDhcpOptionsSetToVpcResponse> {
    Util.validateModel(request);
    return $tea.cast<AttachDhcpOptionsSetToVpcResponse>(await this.doRequest("AttachDhcpOptionsSetToVpc", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AttachDhcpOptionsSetToVpcResponse({}));
  }

  async attachDhcpOptionsSetToVpc(request: AttachDhcpOptionsSetToVpcRequest): Promise<AttachDhcpOptionsSetToVpcResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.attachDhcpOptionsSetToVpcWithOptions(request, runtime);
  }

  async deleteDhcpOptionsSetWithOptions(request: DeleteDhcpOptionsSetRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDhcpOptionsSetResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDhcpOptionsSetResponse>(await this.doRequest("DeleteDhcpOptionsSet", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteDhcpOptionsSetResponse({}));
  }

  async deleteDhcpOptionsSet(request: DeleteDhcpOptionsSetRequest): Promise<DeleteDhcpOptionsSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDhcpOptionsSetWithOptions(request, runtime);
  }

  async renewInstanceWithOptions(request: RenewInstanceRequest, runtime: $Util.RuntimeOptions): Promise<RenewInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<RenewInstanceResponse>(await this.doRequest("RenewInstance", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new RenewInstanceResponse({}));
  }

  async renewInstance(request: RenewInstanceRequest): Promise<RenewInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.renewInstanceWithOptions(request, runtime);
  }

  async describeInstanceAutoRenewAttributeWithOptions(request: DescribeInstanceAutoRenewAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeInstanceAutoRenewAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeInstanceAutoRenewAttributeResponse>(await this.doRequest("DescribeInstanceAutoRenewAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeInstanceAutoRenewAttributeResponse({}));
  }

  async describeInstanceAutoRenewAttribute(request: DescribeInstanceAutoRenewAttributeRequest): Promise<DescribeInstanceAutoRenewAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeInstanceAutoRenewAttributeWithOptions(request, runtime);
  }

  async modifyInstanceAutoRenewalAttributeWithOptions(request: ModifyInstanceAutoRenewalAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyInstanceAutoRenewalAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyInstanceAutoRenewalAttributeResponse>(await this.doRequest("ModifyInstanceAutoRenewalAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyInstanceAutoRenewalAttributeResponse({}));
  }

  async modifyInstanceAutoRenewalAttribute(request: ModifyInstanceAutoRenewalAttributeRequest): Promise<ModifyInstanceAutoRenewalAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyInstanceAutoRenewalAttributeWithOptions(request, runtime);
  }

  async releaseEipSegmentAddressWithOptions(request: ReleaseEipSegmentAddressRequest, runtime: $Util.RuntimeOptions): Promise<ReleaseEipSegmentAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<ReleaseEipSegmentAddressResponse>(await this.doRequest("ReleaseEipSegmentAddress", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ReleaseEipSegmentAddressResponse({}));
  }

  async releaseEipSegmentAddress(request: ReleaseEipSegmentAddressRequest): Promise<ReleaseEipSegmentAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.releaseEipSegmentAddressWithOptions(request, runtime);
  }

  async describeEipSegmentWithOptions(request: DescribeEipSegmentRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEipSegmentResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEipSegmentResponse>(await this.doRequest("DescribeEipSegment", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeEipSegmentResponse({}));
  }

  async describeEipSegment(request: DescribeEipSegmentRequest): Promise<DescribeEipSegmentResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeEipSegmentWithOptions(request, runtime);
  }

  async allocateEipSegmentAddressWithOptions(request: AllocateEipSegmentAddressRequest, runtime: $Util.RuntimeOptions): Promise<AllocateEipSegmentAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<AllocateEipSegmentAddressResponse>(await this.doRequest("AllocateEipSegmentAddress", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AllocateEipSegmentAddressResponse({}));
  }

  async allocateEipSegmentAddress(request: AllocateEipSegmentAddressRequest): Promise<AllocateEipSegmentAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.allocateEipSegmentAddressWithOptions(request, runtime);
  }

  async unassociateVpcCidrBlockWithOptions(request: UnassociateVpcCidrBlockRequest, runtime: $Util.RuntimeOptions): Promise<UnassociateVpcCidrBlockResponse> {
    Util.validateModel(request);
    return $tea.cast<UnassociateVpcCidrBlockResponse>(await this.doRequest("UnassociateVpcCidrBlock", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UnassociateVpcCidrBlockResponse({}));
  }

  async unassociateVpcCidrBlock(request: UnassociateVpcCidrBlockRequest): Promise<UnassociateVpcCidrBlockResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unassociateVpcCidrBlockWithOptions(request, runtime);
  }

  async associateVpcCidrBlockWithOptions(request: AssociateVpcCidrBlockRequest, runtime: $Util.RuntimeOptions): Promise<AssociateVpcCidrBlockResponse> {
    Util.validateModel(request);
    return $tea.cast<AssociateVpcCidrBlockResponse>(await this.doRequest("AssociateVpcCidrBlock", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AssociateVpcCidrBlockResponse({}));
  }

  async associateVpcCidrBlock(request: AssociateVpcCidrBlockRequest): Promise<AssociateVpcCidrBlockResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.associateVpcCidrBlockWithOptions(request, runtime);
  }

  async describeRouterInterfaceAttributeWithOptions(request: DescribeRouterInterfaceAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRouterInterfaceAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRouterInterfaceAttributeResponse>(await this.doRequest("DescribeRouterInterfaceAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeRouterInterfaceAttributeResponse({}));
  }

  async describeRouterInterfaceAttribute(request: DescribeRouterInterfaceAttributeRequest): Promise<DescribeRouterInterfaceAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRouterInterfaceAttributeWithOptions(request, runtime);
  }

  async deleteExpressCloudConnectionWithOptions(request: DeleteExpressCloudConnectionRequest, runtime: $Util.RuntimeOptions): Promise<DeleteExpressCloudConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteExpressCloudConnectionResponse>(await this.doRequest("DeleteExpressCloudConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteExpressCloudConnectionResponse({}));
  }

  async deleteExpressCloudConnection(request: DeleteExpressCloudConnectionRequest): Promise<DeleteExpressCloudConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteExpressCloudConnectionWithOptions(request, runtime);
  }

  async cancelExpressCloudConnectionWithOptions(request: CancelExpressCloudConnectionRequest, runtime: $Util.RuntimeOptions): Promise<CancelExpressCloudConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelExpressCloudConnectionResponse>(await this.doRequest("CancelExpressCloudConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CancelExpressCloudConnectionResponse({}));
  }

  async cancelExpressCloudConnection(request: CancelExpressCloudConnectionRequest): Promise<CancelExpressCloudConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelExpressCloudConnectionWithOptions(request, runtime);
  }

  async deletionProtectionWithOptions(request: DeletionProtectionRequest, runtime: $Util.RuntimeOptions): Promise<DeletionProtectionResponse> {
    Util.validateModel(request);
    return $tea.cast<DeletionProtectionResponse>(await this.doRequest("DeletionProtection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeletionProtectionResponse({}));
  }

  async deletionProtection(request: DeletionProtectionRequest): Promise<DeletionProtectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deletionProtectionWithOptions(request, runtime);
  }

  async describeEipGatewayInfoWithOptions(request: DescribeEipGatewayInfoRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEipGatewayInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEipGatewayInfoResponse>(await this.doRequest("DescribeEipGatewayInfo", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeEipGatewayInfoResponse({}));
  }

  async describeEipGatewayInfo(request: DescribeEipGatewayInfoRequest): Promise<DescribeEipGatewayInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeEipGatewayInfoWithOptions(request, runtime);
  }

  async modifyBgpPeerAttributeWithOptions(request: ModifyBgpPeerAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyBgpPeerAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyBgpPeerAttributeResponse>(await this.doRequest("ModifyBgpPeerAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyBgpPeerAttributeResponse({}));
  }

  async modifyBgpPeerAttribute(request: ModifyBgpPeerAttributeRequest): Promise<ModifyBgpPeerAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyBgpPeerAttributeWithOptions(request, runtime);
  }

  async describeVpnSslServerLogsWithOptions(request: DescribeVpnSslServerLogsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVpnSslServerLogsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVpnSslServerLogsResponse>(await this.doRequest("DescribeVpnSslServerLogs", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVpnSslServerLogsResponse({}));
  }

  async describeVpnSslServerLogs(request: DescribeVpnSslServerLogsRequest): Promise<DescribeVpnSslServerLogsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVpnSslServerLogsWithOptions(request, runtime);
  }

  async modifyExpressCloudConnectionBandwidthWithOptions(request: ModifyExpressCloudConnectionBandwidthRequest, runtime: $Util.RuntimeOptions): Promise<ModifyExpressCloudConnectionBandwidthResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyExpressCloudConnectionBandwidthResponse>(await this.doRequest("ModifyExpressCloudConnectionBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyExpressCloudConnectionBandwidthResponse({}));
  }

  async modifyExpressCloudConnectionBandwidth(request: ModifyExpressCloudConnectionBandwidthRequest): Promise<ModifyExpressCloudConnectionBandwidthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyExpressCloudConnectionBandwidthWithOptions(request, runtime);
  }

  async modifyExpressCloudConnectionAttributeWithOptions(request: ModifyExpressCloudConnectionAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyExpressCloudConnectionAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyExpressCloudConnectionAttributeResponse>(await this.doRequest("ModifyExpressCloudConnectionAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyExpressCloudConnectionAttributeResponse({}));
  }

  async modifyExpressCloudConnectionAttribute(request: ModifyExpressCloudConnectionAttributeRequest): Promise<ModifyExpressCloudConnectionAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyExpressCloudConnectionAttributeWithOptions(request, runtime);
  }

  async describeExpressCloudConnectionsWithOptions(request: DescribeExpressCloudConnectionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeExpressCloudConnectionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeExpressCloudConnectionsResponse>(await this.doRequest("DescribeExpressCloudConnections", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeExpressCloudConnectionsResponse({}));
  }

  async describeExpressCloudConnections(request: DescribeExpressCloudConnectionsRequest): Promise<DescribeExpressCloudConnectionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeExpressCloudConnectionsWithOptions(request, runtime);
  }

  async createExpressCloudConnectionWithOptions(request: CreateExpressCloudConnectionRequest, runtime: $Util.RuntimeOptions): Promise<CreateExpressCloudConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateExpressCloudConnectionResponse>(await this.doRequest("CreateExpressCloudConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateExpressCloudConnectionResponse({}));
  }

  async createExpressCloudConnection(request: CreateExpressCloudConnectionRequest): Promise<CreateExpressCloudConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createExpressCloudConnectionWithOptions(request, runtime);
  }

  async updateNetworkAclEntriesWithOptions(request: UpdateNetworkAclEntriesRequest, runtime: $Util.RuntimeOptions): Promise<UpdateNetworkAclEntriesResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateNetworkAclEntriesResponse>(await this.doRequest("UpdateNetworkAclEntries", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UpdateNetworkAclEntriesResponse({}));
  }

  async updateNetworkAclEntries(request: UpdateNetworkAclEntriesRequest): Promise<UpdateNetworkAclEntriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateNetworkAclEntriesWithOptions(request, runtime);
  }

  async unassociateNetworkAclWithOptions(request: UnassociateNetworkAclRequest, runtime: $Util.RuntimeOptions): Promise<UnassociateNetworkAclResponse> {
    Util.validateModel(request);
    return $tea.cast<UnassociateNetworkAclResponse>(await this.doRequest("UnassociateNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UnassociateNetworkAclResponse({}));
  }

  async unassociateNetworkAcl(request: UnassociateNetworkAclRequest): Promise<UnassociateNetworkAclResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unassociateNetworkAclWithOptions(request, runtime);
  }

  async modifyNetworkAclAttributesWithOptions(request: ModifyNetworkAclAttributesRequest, runtime: $Util.RuntimeOptions): Promise<ModifyNetworkAclAttributesResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyNetworkAclAttributesResponse>(await this.doRequest("ModifyNetworkAclAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyNetworkAclAttributesResponse({}));
  }

  async modifyNetworkAclAttributes(request: ModifyNetworkAclAttributesRequest): Promise<ModifyNetworkAclAttributesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyNetworkAclAttributesWithOptions(request, runtime);
  }

  async describeNetworkAclsWithOptions(request: DescribeNetworkAclsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeNetworkAclsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeNetworkAclsResponse>(await this.doRequest("DescribeNetworkAcls", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeNetworkAclsResponse({}));
  }

  async describeNetworkAcls(request: DescribeNetworkAclsRequest): Promise<DescribeNetworkAclsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeNetworkAclsWithOptions(request, runtime);
  }

  async describeNetworkAclAttributesWithOptions(request: DescribeNetworkAclAttributesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeNetworkAclAttributesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeNetworkAclAttributesResponse>(await this.doRequest("DescribeNetworkAclAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeNetworkAclAttributesResponse({}));
  }

  async describeNetworkAclAttributes(request: DescribeNetworkAclAttributesRequest): Promise<DescribeNetworkAclAttributesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeNetworkAclAttributesWithOptions(request, runtime);
  }

  async deleteNetworkAclWithOptions(request: DeleteNetworkAclRequest, runtime: $Util.RuntimeOptions): Promise<DeleteNetworkAclResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteNetworkAclResponse>(await this.doRequest("DeleteNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteNetworkAclResponse({}));
  }

  async deleteNetworkAcl(request: DeleteNetworkAclRequest): Promise<DeleteNetworkAclResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteNetworkAclWithOptions(request, runtime);
  }

  async createNetworkAclWithOptions(request: CreateNetworkAclRequest, runtime: $Util.RuntimeOptions): Promise<CreateNetworkAclResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateNetworkAclResponse>(await this.doRequest("CreateNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateNetworkAclResponse({}));
  }

  async createNetworkAcl(request: CreateNetworkAclRequest): Promise<CreateNetworkAclResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createNetworkAclWithOptions(request, runtime);
  }

  async copyNetworkAclEntriesWithOptions(request: CopyNetworkAclEntriesRequest, runtime: $Util.RuntimeOptions): Promise<CopyNetworkAclEntriesResponse> {
    Util.validateModel(request);
    return $tea.cast<CopyNetworkAclEntriesResponse>(await this.doRequest("CopyNetworkAclEntries", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CopyNetworkAclEntriesResponse({}));
  }

  async copyNetworkAclEntries(request: CopyNetworkAclEntriesRequest): Promise<CopyNetworkAclEntriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.copyNetworkAclEntriesWithOptions(request, runtime);
  }

  async associateNetworkAclWithOptions(request: AssociateNetworkAclRequest, runtime: $Util.RuntimeOptions): Promise<AssociateNetworkAclResponse> {
    Util.validateModel(request);
    return $tea.cast<AssociateNetworkAclResponse>(await this.doRequest("AssociateNetworkAcl", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AssociateNetworkAclResponse({}));
  }

  async associateNetworkAcl(request: AssociateNetworkAclRequest): Promise<AssociateNetworkAclResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.associateNetworkAclWithOptions(request, runtime);
  }

  async modifyCommonBandwidthPackageIpBandwidthWithOptions(request: ModifyCommonBandwidthPackageIpBandwidthRequest, runtime: $Util.RuntimeOptions): Promise<ModifyCommonBandwidthPackageIpBandwidthResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyCommonBandwidthPackageIpBandwidthResponse>(await this.doRequest("ModifyCommonBandwidthPackageIpBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyCommonBandwidthPackageIpBandwidthResponse({}));
  }

  async modifyCommonBandwidthPackageIpBandwidth(request: ModifyCommonBandwidthPackageIpBandwidthRequest): Promise<ModifyCommonBandwidthPackageIpBandwidthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyCommonBandwidthPackageIpBandwidthWithOptions(request, runtime);
  }

  async cancelCommonBandwidthPackageIpBandwidthWithOptions(request: CancelCommonBandwidthPackageIpBandwidthRequest, runtime: $Util.RuntimeOptions): Promise<CancelCommonBandwidthPackageIpBandwidthResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelCommonBandwidthPackageIpBandwidthResponse>(await this.doRequest("CancelCommonBandwidthPackageIpBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CancelCommonBandwidthPackageIpBandwidthResponse({}));
  }

  async cancelCommonBandwidthPackageIpBandwidth(request: CancelCommonBandwidthPackageIpBandwidthRequest): Promise<CancelCommonBandwidthPackageIpBandwidthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelCommonBandwidthPackageIpBandwidthWithOptions(request, runtime);
  }

  async createVpnPbrRouteEntryWithOptions(request: CreateVpnPbrRouteEntryRequest, runtime: $Util.RuntimeOptions): Promise<CreateVpnPbrRouteEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateVpnPbrRouteEntryResponse>(await this.doRequest("CreateVpnPbrRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateVpnPbrRouteEntryResponse({}));
  }

  async createVpnPbrRouteEntry(request: CreateVpnPbrRouteEntryRequest): Promise<CreateVpnPbrRouteEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createVpnPbrRouteEntryWithOptions(request, runtime);
  }

  async createVpnRouteEntryWithOptions(request: CreateVpnRouteEntryRequest, runtime: $Util.RuntimeOptions): Promise<CreateVpnRouteEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateVpnRouteEntryResponse>(await this.doRequest("CreateVpnRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateVpnRouteEntryResponse({}));
  }

  async createVpnRouteEntry(request: CreateVpnRouteEntryRequest): Promise<CreateVpnRouteEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createVpnRouteEntryWithOptions(request, runtime);
  }

  async deleteVpnPbrRouteEntryWithOptions(request: DeleteVpnPbrRouteEntryRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVpnPbrRouteEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVpnPbrRouteEntryResponse>(await this.doRequest("DeleteVpnPbrRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteVpnPbrRouteEntryResponse({}));
  }

  async deleteVpnPbrRouteEntry(request: DeleteVpnPbrRouteEntryRequest): Promise<DeleteVpnPbrRouteEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVpnPbrRouteEntryWithOptions(request, runtime);
  }

  async deleteVpnRouteEntryWithOptions(request: DeleteVpnRouteEntryRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVpnRouteEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVpnRouteEntryResponse>(await this.doRequest("DeleteVpnRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteVpnRouteEntryResponse({}));
  }

  async deleteVpnRouteEntry(request: DeleteVpnRouteEntryRequest): Promise<DeleteVpnRouteEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVpnRouteEntryWithOptions(request, runtime);
  }

  async describeVpnRouteEntriesWithOptions(request: DescribeVpnRouteEntriesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVpnRouteEntriesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVpnRouteEntriesResponse>(await this.doRequest("DescribeVpnRouteEntries", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVpnRouteEntriesResponse({}));
  }

  async describeVpnRouteEntries(request: DescribeVpnRouteEntriesRequest): Promise<DescribeVpnRouteEntriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVpnRouteEntriesWithOptions(request, runtime);
  }

  async describeVpnPbrRouteEntriesWithOptions(request: DescribeVpnPbrRouteEntriesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVpnPbrRouteEntriesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVpnPbrRouteEntriesResponse>(await this.doRequest("DescribeVpnPbrRouteEntries", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVpnPbrRouteEntriesResponse({}));
  }

  async describeVpnPbrRouteEntries(request: DescribeVpnPbrRouteEntriesRequest): Promise<DescribeVpnPbrRouteEntriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVpnPbrRouteEntriesWithOptions(request, runtime);
  }

  async publishVpnRouteEntryWithOptions(request: PublishVpnRouteEntryRequest, runtime: $Util.RuntimeOptions): Promise<PublishVpnRouteEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<PublishVpnRouteEntryResponse>(await this.doRequest("PublishVpnRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new PublishVpnRouteEntryResponse({}));
  }

  async publishVpnRouteEntry(request: PublishVpnRouteEntryRequest): Promise<PublishVpnRouteEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.publishVpnRouteEntryWithOptions(request, runtime);
  }

  async modifyVpnRouteEntryWeightWithOptions(request: ModifyVpnRouteEntryWeightRequest, runtime: $Util.RuntimeOptions): Promise<ModifyVpnRouteEntryWeightResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyVpnRouteEntryWeightResponse>(await this.doRequest("ModifyVpnRouteEntryWeight", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyVpnRouteEntryWeightResponse({}));
  }

  async modifyVpnRouteEntryWeight(request: ModifyVpnRouteEntryWeightRequest): Promise<ModifyVpnRouteEntryWeightResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyVpnRouteEntryWeightWithOptions(request, runtime);
  }

  async modifyVpnPbrRouteEntryWeightWithOptions(request: ModifyVpnPbrRouteEntryWeightRequest, runtime: $Util.RuntimeOptions): Promise<ModifyVpnPbrRouteEntryWeightResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyVpnPbrRouteEntryWeightResponse>(await this.doRequest("ModifyVpnPbrRouteEntryWeight", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyVpnPbrRouteEntryWeightResponse({}));
  }

  async modifyVpnPbrRouteEntryWeight(request: ModifyVpnPbrRouteEntryWeightRequest): Promise<ModifyVpnPbrRouteEntryWeightResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyVpnPbrRouteEntryWeightWithOptions(request, runtime);
  }

  /**
   * DescribePhysicalConnectionLOA Query LOA information about the physical connection.
    * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp1ca4wca27exxxxxxxx
    * &RegionId=cn-hangzhou
    * &<CommonParameters>
    * description: 
   */
  async describePhysicalConnectionLOAWithOptions(request: DescribePhysicalConnectionLOARequest, runtime: $Util.RuntimeOptions): Promise<DescribePhysicalConnectionLOAResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribePhysicalConnectionLOAResponse>(await this.doRequest("DescribePhysicalConnectionLOA", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribePhysicalConnectionLOAResponse({}));
  }

  /**
   * DescribePhysicalConnectionLOA Query LOA information about the physical connection.
    * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp1ca4wca27exxxxxxxx
    * &RegionId=cn-hangzhou
    * &<CommonParameters>
    * description: 
   */
  async describePhysicalConnectionLOA(request: DescribePhysicalConnectionLOARequest): Promise<DescribePhysicalConnectionLOAResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describePhysicalConnectionLOAWithOptions(request, runtime);
  }

  /**
   * CreatePhysicalConnectionSetupOrder Create an order for the resource fee.
    * request demo:   * http(s)://[Endpoint]/?AccessPointId=ap-cn-beijing-ft-A
    * &LineOperator=CT
    * &RegionId=cn-shanghai
    * &<CommonParameters>
    * description: 
   */
  async createPhysicalConnectionSetupOrderWithOptions(request: CreatePhysicalConnectionSetupOrderRequest, runtime: $Util.RuntimeOptions): Promise<CreatePhysicalConnectionSetupOrderResponse> {
    Util.validateModel(request);
    return $tea.cast<CreatePhysicalConnectionSetupOrderResponse>(await this.doRequest("CreatePhysicalConnectionSetupOrder", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreatePhysicalConnectionSetupOrderResponse({}));
  }

  /**
   * CreatePhysicalConnectionSetupOrder Create an order for the resource fee.
    * request demo:   * http(s)://[Endpoint]/?AccessPointId=ap-cn-beijing-ft-A
    * &LineOperator=CT
    * &RegionId=cn-shanghai
    * &<CommonParameters>
    * description: 
   */
  async createPhysicalConnectionSetupOrder(request: CreatePhysicalConnectionSetupOrderRequest): Promise<CreatePhysicalConnectionSetupOrderResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createPhysicalConnectionSetupOrderWithOptions(request, runtime);
  }

  /**
   * CreatePhysicalConnectionOccupancyOrder Create an order for the initial installation fee.
    * request demo:   * http(s)://[Endpoint]/?PhysicalConnectionId=pc-bp1hp0wr072f6ambni141
    * &RegionId=cn-hangzhou
    * &<CommonParameters>
    * description: 
   */
  async createPhysicalConnectionOccupancyOrderWithOptions(request: CreatePhysicalConnectionOccupancyOrderRequest, runtime: $Util.RuntimeOptions): Promise<CreatePhysicalConnectionOccupancyOrderResponse> {
    Util.validateModel(request);
    return $tea.cast<CreatePhysicalConnectionOccupancyOrderResponse>(await this.doRequest("CreatePhysicalConnectionOccupancyOrder", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreatePhysicalConnectionOccupancyOrderResponse({}));
  }

  /**
   * CreatePhysicalConnectionOccupancyOrder Create an order for the initial installation fee.
    * request demo:   * http(s)://[Endpoint]/?PhysicalConnectionId=pc-bp1hp0wr072f6ambni141
    * &RegionId=cn-hangzhou
    * &<CommonParameters>
    * description: 
   */
  async createPhysicalConnectionOccupancyOrder(request: CreatePhysicalConnectionOccupancyOrderRequest): Promise<CreatePhysicalConnectionOccupancyOrderResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createPhysicalConnectionOccupancyOrderWithOptions(request, runtime);
  }

  /**
   * CompletePhysicalConnectionLOA Report information about the completed installation of the leased line.
    * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp10tvlhnwkwxxxxxxxxxx
    * &LineCode=aaa111
    * &LineLabel=bbb222
    * &RegionId=cn-hangzhou
    * &<CommonParameters>
    * description: 
   */
  async completePhysicalConnectionLOAWithOptions(request: CompletePhysicalConnectionLOARequest, runtime: $Util.RuntimeOptions): Promise<CompletePhysicalConnectionLOAResponse> {
    Util.validateModel(request);
    return $tea.cast<CompletePhysicalConnectionLOAResponse>(await this.doRequest("CompletePhysicalConnectionLOA", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CompletePhysicalConnectionLOAResponse({}));
  }

  /**
   * CompletePhysicalConnectionLOA Report information about the completed installation of the leased line.
    * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp10tvlhnwkwxxxxxxxxxx
    * &LineCode=aaa111
    * &LineLabel=bbb222
    * &RegionId=cn-hangzhou
    * &<CommonParameters>
    * description: 
   */
  async completePhysicalConnectionLOA(request: CompletePhysicalConnectionLOARequest): Promise<CompletePhysicalConnectionLOAResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.completePhysicalConnectionLOAWithOptions(request, runtime);
  }

  /**
   * ApplyPhysicalConnectionLOA Apply for the LOA.
    * request demo:   * http(s)://[Endpoint]/?CompanyName=company
    * &ConstructionTime=2019-02-28T16:00:00.000Z
    * &InstanceId=pc-bp1qrb3044eqixxxxxxxx
    * &LineType=SDH
    * &PeerLocation=Hangzhou
    * &RegionId=cn-hangzhou
    * &Si=Alibaba Cloud
    * &<CommonParameters>
    * description: 
   */
  async applyPhysicalConnectionLOAWithOptions(request: ApplyPhysicalConnectionLOARequest, runtime: $Util.RuntimeOptions): Promise<ApplyPhysicalConnectionLOAResponse> {
    Util.validateModel(request);
    return $tea.cast<ApplyPhysicalConnectionLOAResponse>(await this.doRequest("ApplyPhysicalConnectionLOA", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ApplyPhysicalConnectionLOAResponse({}));
  }

  /**
   * ApplyPhysicalConnectionLOA Apply for the LOA.
    * request demo:   * http(s)://[Endpoint]/?CompanyName=company
    * &ConstructionTime=2019-02-28T16:00:00.000Z
    * &InstanceId=pc-bp1qrb3044eqixxxxxxxx
    * &LineType=SDH
    * &PeerLocation=Hangzhou
    * &RegionId=cn-hangzhou
    * &Si=Alibaba Cloud
    * &<CommonParameters>
    * description: 
   */
  async applyPhysicalConnectionLOA(request: ApplyPhysicalConnectionLOARequest): Promise<ApplyPhysicalConnectionLOAResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.applyPhysicalConnectionLOAWithOptions(request, runtime);
  }

  async convertBandwidthPackageWithOptions(request: ConvertBandwidthPackageRequest, runtime: $Util.RuntimeOptions): Promise<ConvertBandwidthPackageResponse> {
    Util.validateModel(request);
    return $tea.cast<ConvertBandwidthPackageResponse>(await this.doRequest("ConvertBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ConvertBandwidthPackageResponse({}));
  }

  async convertBandwidthPackage(request: ConvertBandwidthPackageRequest): Promise<ConvertBandwidthPackageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.convertBandwidthPackageWithOptions(request, runtime);
  }

  async modifyRouteEntryWithOptions(request: ModifyRouteEntryRequest, runtime: $Util.RuntimeOptions): Promise<ModifyRouteEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyRouteEntryResponse>(await this.doRequest("ModifyRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyRouteEntryResponse({}));
  }

  async modifyRouteEntry(request: ModifyRouteEntryRequest): Promise<ModifyRouteEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyRouteEntryWithOptions(request, runtime);
  }

  async describeRouteEntryListWithOptions(request: DescribeRouteEntryListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRouteEntryListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRouteEntryListResponse>(await this.doRequest("DescribeRouteEntryList", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeRouteEntryListResponse({}));
  }

  async describeRouteEntryList(request: DescribeRouteEntryListRequest): Promise<DescribeRouteEntryListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRouteEntryListWithOptions(request, runtime);
  }

  async createIPv6TranslatorAclListWithOptions(request: CreateIPv6TranslatorAclListRequest, runtime: $Util.RuntimeOptions): Promise<CreateIPv6TranslatorAclListResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateIPv6TranslatorAclListResponse>(await this.doRequest("CreateIPv6TranslatorAclList", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateIPv6TranslatorAclListResponse({}));
  }

  async createIPv6TranslatorAclList(request: CreateIPv6TranslatorAclListRequest): Promise<CreateIPv6TranslatorAclListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createIPv6TranslatorAclListWithOptions(request, runtime);
  }

  async deleteIPv6TranslatorAclListWithOptions(request: DeleteIPv6TranslatorAclListRequest, runtime: $Util.RuntimeOptions): Promise<DeleteIPv6TranslatorAclListResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteIPv6TranslatorAclListResponse>(await this.doRequest("DeleteIPv6TranslatorAclList", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteIPv6TranslatorAclListResponse({}));
  }

  async deleteIPv6TranslatorAclList(request: DeleteIPv6TranslatorAclListRequest): Promise<DeleteIPv6TranslatorAclListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteIPv6TranslatorAclListWithOptions(request, runtime);
  }

  async addIPv6TranslatorAclListEntryWithOptions(request: AddIPv6TranslatorAclListEntryRequest, runtime: $Util.RuntimeOptions): Promise<AddIPv6TranslatorAclListEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<AddIPv6TranslatorAclListEntryResponse>(await this.doRequest("AddIPv6TranslatorAclListEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AddIPv6TranslatorAclListEntryResponse({}));
  }

  async addIPv6TranslatorAclListEntry(request: AddIPv6TranslatorAclListEntryRequest): Promise<AddIPv6TranslatorAclListEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addIPv6TranslatorAclListEntryWithOptions(request, runtime);
  }

  async describeIPv6TranslatorAclListsWithOptions(request: DescribeIPv6TranslatorAclListsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeIPv6TranslatorAclListsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeIPv6TranslatorAclListsResponse>(await this.doRequest("DescribeIPv6TranslatorAclLists", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeIPv6TranslatorAclListsResponse({}));
  }

  async describeIPv6TranslatorAclLists(request: DescribeIPv6TranslatorAclListsRequest): Promise<DescribeIPv6TranslatorAclListsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeIPv6TranslatorAclListsWithOptions(request, runtime);
  }

  async modifyIPv6TranslatorAclAttributeWithOptions(request: ModifyIPv6TranslatorAclAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyIPv6TranslatorAclAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyIPv6TranslatorAclAttributeResponse>(await this.doRequest("ModifyIPv6TranslatorAclAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyIPv6TranslatorAclAttributeResponse({}));
  }

  async modifyIPv6TranslatorAclAttribute(request: ModifyIPv6TranslatorAclAttributeRequest): Promise<ModifyIPv6TranslatorAclAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyIPv6TranslatorAclAttributeWithOptions(request, runtime);
  }

  async removeIPv6TranslatorAclListEntryWithOptions(request: RemoveIPv6TranslatorAclListEntryRequest, runtime: $Util.RuntimeOptions): Promise<RemoveIPv6TranslatorAclListEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveIPv6TranslatorAclListEntryResponse>(await this.doRequest("RemoveIPv6TranslatorAclListEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new RemoveIPv6TranslatorAclListEntryResponse({}));
  }

  async removeIPv6TranslatorAclListEntry(request: RemoveIPv6TranslatorAclListEntryRequest): Promise<RemoveIPv6TranslatorAclListEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeIPv6TranslatorAclListEntryWithOptions(request, runtime);
  }

  async describeIPv6TranslatorAclListAttributesWithOptions(request: DescribeIPv6TranslatorAclListAttributesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeIPv6TranslatorAclListAttributesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeIPv6TranslatorAclListAttributesResponse>(await this.doRequest("DescribeIPv6TranslatorAclListAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeIPv6TranslatorAclListAttributesResponse({}));
  }

  async describeIPv6TranslatorAclListAttributes(request: DescribeIPv6TranslatorAclListAttributesRequest): Promise<DescribeIPv6TranslatorAclListAttributesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeIPv6TranslatorAclListAttributesWithOptions(request, runtime);
  }

  async modifyIPv6TranslatorAclListEntryWithOptions(request: ModifyIPv6TranslatorAclListEntryRequest, runtime: $Util.RuntimeOptions): Promise<ModifyIPv6TranslatorAclListEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyIPv6TranslatorAclListEntryResponse>(await this.doRequest("ModifyIPv6TranslatorAclListEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyIPv6TranslatorAclListEntryResponse({}));
  }

  async modifyIPv6TranslatorAclListEntry(request: ModifyIPv6TranslatorAclListEntryRequest): Promise<ModifyIPv6TranslatorAclListEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyIPv6TranslatorAclListEntryWithOptions(request, runtime);
  }

  async unTagResourcesWithOptions(request: UnTagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<UnTagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<UnTagResourcesResponse>(await this.doRequest("UnTagResources", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UnTagResourcesResponse({}));
  }

  async unTagResources(request: UnTagResourcesRequest): Promise<UnTagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unTagResourcesWithOptions(request, runtime);
  }

  async tagResourcesWithOptions(request: TagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<TagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<TagResourcesResponse>(await this.doRequest("TagResources", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new TagResourcesResponse({}));
  }

  async tagResources(request: TagResourcesRequest): Promise<TagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.tagResourcesWithOptions(request, runtime);
  }

  async listTagResourcesWithOptions(request: ListTagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<ListTagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTagResourcesResponse>(await this.doRequest("ListTagResources", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ListTagResourcesResponse({}));
  }

  async listTagResources(request: ListTagResourcesRequest): Promise<ListTagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTagResourcesWithOptions(request, runtime);
  }

  async modifyIpv6InternetBandwidthWithOptions(request: ModifyIpv6InternetBandwidthRequest, runtime: $Util.RuntimeOptions): Promise<ModifyIpv6InternetBandwidthResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyIpv6InternetBandwidthResponse>(await this.doRequest("ModifyIpv6InternetBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyIpv6InternetBandwidthResponse({}));
  }

  async modifyIpv6InternetBandwidth(request: ModifyIpv6InternetBandwidthRequest): Promise<ModifyIpv6InternetBandwidthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyIpv6InternetBandwidthWithOptions(request, runtime);
  }

  async modifyIpv6GatewaySpecWithOptions(request: ModifyIpv6GatewaySpecRequest, runtime: $Util.RuntimeOptions): Promise<ModifyIpv6GatewaySpecResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyIpv6GatewaySpecResponse>(await this.doRequest("ModifyIpv6GatewaySpec", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyIpv6GatewaySpecResponse({}));
  }

  async modifyIpv6GatewaySpec(request: ModifyIpv6GatewaySpecRequest): Promise<ModifyIpv6GatewaySpecResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyIpv6GatewaySpecWithOptions(request, runtime);
  }

  async modifyIpv6GatewayAttributeWithOptions(request: ModifyIpv6GatewayAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyIpv6GatewayAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyIpv6GatewayAttributeResponse>(await this.doRequest("ModifyIpv6GatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyIpv6GatewayAttributeResponse({}));
  }

  async modifyIpv6GatewayAttribute(request: ModifyIpv6GatewayAttributeRequest): Promise<ModifyIpv6GatewayAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyIpv6GatewayAttributeWithOptions(request, runtime);
  }

  async modifyIpv6AddressAttributeWithOptions(request: ModifyIpv6AddressAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyIpv6AddressAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyIpv6AddressAttributeResponse>(await this.doRequest("ModifyIpv6AddressAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyIpv6AddressAttributeResponse({}));
  }

  async modifyIpv6AddressAttribute(request: ModifyIpv6AddressAttributeRequest): Promise<ModifyIpv6AddressAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyIpv6AddressAttributeWithOptions(request, runtime);
  }

  async describeIpv6GatewaysWithOptions(request: DescribeIpv6GatewaysRequest, runtime: $Util.RuntimeOptions): Promise<DescribeIpv6GatewaysResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeIpv6GatewaysResponse>(await this.doRequest("DescribeIpv6Gateways", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeIpv6GatewaysResponse({}));
  }

  async describeIpv6Gateways(request: DescribeIpv6GatewaysRequest): Promise<DescribeIpv6GatewaysResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeIpv6GatewaysWithOptions(request, runtime);
  }

  async describeIpv6GatewayAttributeWithOptions(request: DescribeIpv6GatewayAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeIpv6GatewayAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeIpv6GatewayAttributeResponse>(await this.doRequest("DescribeIpv6GatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeIpv6GatewayAttributeResponse({}));
  }

  async describeIpv6GatewayAttribute(request: DescribeIpv6GatewayAttributeRequest): Promise<DescribeIpv6GatewayAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeIpv6GatewayAttributeWithOptions(request, runtime);
  }

  async describeIpv6EgressOnlyRulesWithOptions(request: DescribeIpv6EgressOnlyRulesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeIpv6EgressOnlyRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeIpv6EgressOnlyRulesResponse>(await this.doRequest("DescribeIpv6EgressOnlyRules", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeIpv6EgressOnlyRulesResponse({}));
  }

  async describeIpv6EgressOnlyRules(request: DescribeIpv6EgressOnlyRulesRequest): Promise<DescribeIpv6EgressOnlyRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeIpv6EgressOnlyRulesWithOptions(request, runtime);
  }

  async describeIpv6AddressesWithOptions(request: DescribeIpv6AddressesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeIpv6AddressesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeIpv6AddressesResponse>(await this.doRequest("DescribeIpv6Addresses", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeIpv6AddressesResponse({}));
  }

  async describeIpv6Addresses(request: DescribeIpv6AddressesRequest): Promise<DescribeIpv6AddressesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeIpv6AddressesWithOptions(request, runtime);
  }

  async deleteIpv6InternetBandwidthWithOptions(request: DeleteIpv6InternetBandwidthRequest, runtime: $Util.RuntimeOptions): Promise<DeleteIpv6InternetBandwidthResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteIpv6InternetBandwidthResponse>(await this.doRequest("DeleteIpv6InternetBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteIpv6InternetBandwidthResponse({}));
  }

  async deleteIpv6InternetBandwidth(request: DeleteIpv6InternetBandwidthRequest): Promise<DeleteIpv6InternetBandwidthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteIpv6InternetBandwidthWithOptions(request, runtime);
  }

  async deleteIpv6GatewayWithOptions(request: DeleteIpv6GatewayRequest, runtime: $Util.RuntimeOptions): Promise<DeleteIpv6GatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteIpv6GatewayResponse>(await this.doRequest("DeleteIpv6Gateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteIpv6GatewayResponse({}));
  }

  async deleteIpv6Gateway(request: DeleteIpv6GatewayRequest): Promise<DeleteIpv6GatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteIpv6GatewayWithOptions(request, runtime);
  }

  async deleteIpv6EgressOnlyRuleWithOptions(request: DeleteIpv6EgressOnlyRuleRequest, runtime: $Util.RuntimeOptions): Promise<DeleteIpv6EgressOnlyRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteIpv6EgressOnlyRuleResponse>(await this.doRequest("DeleteIpv6EgressOnlyRule", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteIpv6EgressOnlyRuleResponse({}));
  }

  async deleteIpv6EgressOnlyRule(request: DeleteIpv6EgressOnlyRuleRequest): Promise<DeleteIpv6EgressOnlyRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteIpv6EgressOnlyRuleWithOptions(request, runtime);
  }

  async createIpv6GatewayWithOptions(request: CreateIpv6GatewayRequest, runtime: $Util.RuntimeOptions): Promise<CreateIpv6GatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateIpv6GatewayResponse>(await this.doRequest("CreateIpv6Gateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateIpv6GatewayResponse({}));
  }

  async createIpv6Gateway(request: CreateIpv6GatewayRequest): Promise<CreateIpv6GatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createIpv6GatewayWithOptions(request, runtime);
  }

  async createIpv6EgressOnlyRuleWithOptions(request: CreateIpv6EgressOnlyRuleRequest, runtime: $Util.RuntimeOptions): Promise<CreateIpv6EgressOnlyRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateIpv6EgressOnlyRuleResponse>(await this.doRequest("CreateIpv6EgressOnlyRule", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateIpv6EgressOnlyRuleResponse({}));
  }

  async createIpv6EgressOnlyRule(request: CreateIpv6EgressOnlyRuleRequest): Promise<CreateIpv6EgressOnlyRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createIpv6EgressOnlyRuleWithOptions(request, runtime);
  }

  async allocateIpv6InternetBandwidthWithOptions(request: AllocateIpv6InternetBandwidthRequest, runtime: $Util.RuntimeOptions): Promise<AllocateIpv6InternetBandwidthResponse> {
    Util.validateModel(request);
    return $tea.cast<AllocateIpv6InternetBandwidthResponse>(await this.doRequest("AllocateIpv6InternetBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AllocateIpv6InternetBandwidthResponse({}));
  }

  async allocateIpv6InternetBandwidth(request: AllocateIpv6InternetBandwidthRequest): Promise<AllocateIpv6InternetBandwidthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.allocateIpv6InternetBandwidthWithOptions(request, runtime);
  }

  async deleteExpressConnectWithOptions(request: DeleteExpressConnectRequest, runtime: $Util.RuntimeOptions): Promise<DeleteExpressConnectResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteExpressConnectResponse>(await this.doRequest("DeleteExpressConnect", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteExpressConnectResponse({}));
  }

  async deleteExpressConnect(request: DeleteExpressConnectRequest): Promise<DeleteExpressConnectResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteExpressConnectWithOptions(request, runtime);
  }

  async createIPv6TranslatorWithOptions(request: CreateIPv6TranslatorRequest, runtime: $Util.RuntimeOptions): Promise<CreateIPv6TranslatorResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateIPv6TranslatorResponse>(await this.doRequest("CreateIPv6Translator", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateIPv6TranslatorResponse({}));
  }

  async createIPv6Translator(request: CreateIPv6TranslatorRequest): Promise<CreateIPv6TranslatorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createIPv6TranslatorWithOptions(request, runtime);
  }

  async describeIPv6TranslatorsWithOptions(request: DescribeIPv6TranslatorsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeIPv6TranslatorsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeIPv6TranslatorsResponse>(await this.doRequest("DescribeIPv6Translators", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeIPv6TranslatorsResponse({}));
  }

  async describeIPv6Translators(request: DescribeIPv6TranslatorsRequest): Promise<DescribeIPv6TranslatorsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeIPv6TranslatorsWithOptions(request, runtime);
  }

  async modifyIPv6TranslatorAttributeWithOptions(request: ModifyIPv6TranslatorAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyIPv6TranslatorAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyIPv6TranslatorAttributeResponse>(await this.doRequest("ModifyIPv6TranslatorAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyIPv6TranslatorAttributeResponse({}));
  }

  async modifyIPv6TranslatorAttribute(request: ModifyIPv6TranslatorAttributeRequest): Promise<ModifyIPv6TranslatorAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyIPv6TranslatorAttributeWithOptions(request, runtime);
  }

  async modifyIPv6TranslatorBandwidthWithOptions(request: ModifyIPv6TranslatorBandwidthRequest, runtime: $Util.RuntimeOptions): Promise<ModifyIPv6TranslatorBandwidthResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyIPv6TranslatorBandwidthResponse>(await this.doRequest("ModifyIPv6TranslatorBandwidth", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyIPv6TranslatorBandwidthResponse({}));
  }

  async modifyIPv6TranslatorBandwidth(request: ModifyIPv6TranslatorBandwidthRequest): Promise<ModifyIPv6TranslatorBandwidthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyIPv6TranslatorBandwidthWithOptions(request, runtime);
  }

  async createIPv6TranslatorEntryWithOptions(request: CreateIPv6TranslatorEntryRequest, runtime: $Util.RuntimeOptions): Promise<CreateIPv6TranslatorEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateIPv6TranslatorEntryResponse>(await this.doRequest("CreateIPv6TranslatorEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateIPv6TranslatorEntryResponse({}));
  }

  async createIPv6TranslatorEntry(request: CreateIPv6TranslatorEntryRequest): Promise<CreateIPv6TranslatorEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createIPv6TranslatorEntryWithOptions(request, runtime);
  }

  async deleteIPv6TranslatorEntryWithOptions(request: DeleteIPv6TranslatorEntryRequest, runtime: $Util.RuntimeOptions): Promise<DeleteIPv6TranslatorEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteIPv6TranslatorEntryResponse>(await this.doRequest("DeleteIPv6TranslatorEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteIPv6TranslatorEntryResponse({}));
  }

  async deleteIPv6TranslatorEntry(request: DeleteIPv6TranslatorEntryRequest): Promise<DeleteIPv6TranslatorEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteIPv6TranslatorEntryWithOptions(request, runtime);
  }

  async modifyIPv6TranslatorEntryWithOptions(request: ModifyIPv6TranslatorEntryRequest, runtime: $Util.RuntimeOptions): Promise<ModifyIPv6TranslatorEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyIPv6TranslatorEntryResponse>(await this.doRequest("ModifyIPv6TranslatorEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyIPv6TranslatorEntryResponse({}));
  }

  async modifyIPv6TranslatorEntry(request: ModifyIPv6TranslatorEntryRequest): Promise<ModifyIPv6TranslatorEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyIPv6TranslatorEntryWithOptions(request, runtime);
  }

  async describeIPv6TranslatorEntriesWithOptions(request: DescribeIPv6TranslatorEntriesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeIPv6TranslatorEntriesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeIPv6TranslatorEntriesResponse>(await this.doRequest("DescribeIPv6TranslatorEntries", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeIPv6TranslatorEntriesResponse({}));
  }

  async describeIPv6TranslatorEntries(request: DescribeIPv6TranslatorEntriesRequest): Promise<DescribeIPv6TranslatorEntriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeIPv6TranslatorEntriesWithOptions(request, runtime);
  }

  async deleteIPv6TranslatorWithOptions(request: DeleteIPv6TranslatorRequest, runtime: $Util.RuntimeOptions): Promise<DeleteIPv6TranslatorResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteIPv6TranslatorResponse>(await this.doRequest("DeleteIPv6Translator", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteIPv6TranslatorResponse({}));
  }

  async deleteIPv6Translator(request: DeleteIPv6TranslatorRequest): Promise<DeleteIPv6TranslatorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteIPv6TranslatorWithOptions(request, runtime);
  }

  async allocateEipAddressProWithOptions(request: AllocateEipAddressProRequest, runtime: $Util.RuntimeOptions): Promise<AllocateEipAddressProResponse> {
    Util.validateModel(request);
    return $tea.cast<AllocateEipAddressProResponse>(await this.doRequest("AllocateEipAddressPro", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AllocateEipAddressProResponse({}));
  }

  async allocateEipAddressPro(request: AllocateEipAddressProRequest): Promise<AllocateEipAddressProResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.allocateEipAddressProWithOptions(request, runtime);
  }

  async describeHighDefinitionMonitorLogAttributeWithOptions(request: DescribeHighDefinitionMonitorLogAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeHighDefinitionMonitorLogAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeHighDefinitionMonitorLogAttributeResponse>(await this.doRequest("DescribeHighDefinitionMonitorLogAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeHighDefinitionMonitorLogAttributeResponse({}));
  }

  async describeHighDefinitionMonitorLogAttribute(request: DescribeHighDefinitionMonitorLogAttributeRequest): Promise<DescribeHighDefinitionMonitorLogAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeHighDefinitionMonitorLogAttributeWithOptions(request, runtime);
  }

  async modifyFlowLogAttributeWithOptions(request: ModifyFlowLogAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyFlowLogAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyFlowLogAttributeResponse>(await this.doRequest("ModifyFlowLogAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyFlowLogAttributeResponse({}));
  }

  async modifyFlowLogAttribute(request: ModifyFlowLogAttributeRequest): Promise<ModifyFlowLogAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyFlowLogAttributeWithOptions(request, runtime);
  }

  async describeFlowLogsWithOptions(request: DescribeFlowLogsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeFlowLogsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeFlowLogsResponse>(await this.doRequest("DescribeFlowLogs", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeFlowLogsResponse({}));
  }

  async describeFlowLogs(request: DescribeFlowLogsRequest): Promise<DescribeFlowLogsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeFlowLogsWithOptions(request, runtime);
  }

  async deleteFlowLogWithOptions(request: DeleteFlowLogRequest, runtime: $Util.RuntimeOptions): Promise<DeleteFlowLogResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteFlowLogResponse>(await this.doRequest("DeleteFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteFlowLogResponse({}));
  }

  async deleteFlowLog(request: DeleteFlowLogRequest): Promise<DeleteFlowLogResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteFlowLogWithOptions(request, runtime);
  }

  async deactiveFlowLogWithOptions(request: DeactiveFlowLogRequest, runtime: $Util.RuntimeOptions): Promise<DeactiveFlowLogResponse> {
    Util.validateModel(request);
    return $tea.cast<DeactiveFlowLogResponse>(await this.doRequest("DeactiveFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeactiveFlowLogResponse({}));
  }

  async deactiveFlowLog(request: DeactiveFlowLogRequest): Promise<DeactiveFlowLogResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deactiveFlowLogWithOptions(request, runtime);
  }

  async createFlowLogWithOptions(request: CreateFlowLogRequest, runtime: $Util.RuntimeOptions): Promise<CreateFlowLogResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateFlowLogResponse>(await this.doRequest("CreateFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateFlowLogResponse({}));
  }

  async createFlowLog(request: CreateFlowLogRequest): Promise<CreateFlowLogResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createFlowLogWithOptions(request, runtime);
  }

  async activeFlowLogWithOptions(request: ActiveFlowLogRequest, runtime: $Util.RuntimeOptions): Promise<ActiveFlowLogResponse> {
    Util.validateModel(request);
    return $tea.cast<ActiveFlowLogResponse>(await this.doRequest("ActiveFlowLog", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ActiveFlowLogResponse({}));
  }

  async activeFlowLog(request: ActiveFlowLogRequest): Promise<ActiveFlowLogResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.activeFlowLogWithOptions(request, runtime);
  }

  async unassociateRouteTableWithOptions(request: UnassociateRouteTableRequest, runtime: $Util.RuntimeOptions): Promise<UnassociateRouteTableResponse> {
    Util.validateModel(request);
    return $tea.cast<UnassociateRouteTableResponse>(await this.doRequest("UnassociateRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UnassociateRouteTableResponse({}));
  }

  async unassociateRouteTable(request: UnassociateRouteTableRequest): Promise<UnassociateRouteTableResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unassociateRouteTableWithOptions(request, runtime);
  }

  async deleteRouteTableWithOptions(request: DeleteRouteTableRequest, runtime: $Util.RuntimeOptions): Promise<DeleteRouteTableResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteRouteTableResponse>(await this.doRequest("DeleteRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteRouteTableResponse({}));
  }

  async deleteRouteTable(request: DeleteRouteTableRequest): Promise<DeleteRouteTableResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteRouteTableWithOptions(request, runtime);
  }

  async createRouteTableWithOptions(request: CreateRouteTableRequest, runtime: $Util.RuntimeOptions): Promise<CreateRouteTableResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateRouteTableResponse>(await this.doRequest("CreateRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateRouteTableResponse({}));
  }

  async createRouteTable(request: CreateRouteTableRequest): Promise<CreateRouteTableResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createRouteTableWithOptions(request, runtime);
  }

  async associateRouteTableWithOptions(request: AssociateRouteTableRequest, runtime: $Util.RuntimeOptions): Promise<AssociateRouteTableResponse> {
    Util.validateModel(request);
    return $tea.cast<AssociateRouteTableResponse>(await this.doRequest("AssociateRouteTable", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AssociateRouteTableResponse({}));
  }

  async associateRouteTable(request: AssociateRouteTableRequest): Promise<AssociateRouteTableResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.associateRouteTableWithOptions(request, runtime);
  }

  async createVpnGatewayWithOptions(request: CreateVpnGatewayRequest, runtime: $Util.RuntimeOptions): Promise<CreateVpnGatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateVpnGatewayResponse>(await this.doRequest("CreateVpnGateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateVpnGatewayResponse({}));
  }

  async createVpnGateway(request: CreateVpnGatewayRequest): Promise<CreateVpnGatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createVpnGatewayWithOptions(request, runtime);
  }

  async moveResourceGroupWithOptions(request: MoveResourceGroupRequest, runtime: $Util.RuntimeOptions): Promise<MoveResourceGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<MoveResourceGroupResponse>(await this.doRequest("MoveResourceGroup", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new MoveResourceGroupResponse({}));
  }

  async moveResourceGroup(request: MoveResourceGroupRequest): Promise<MoveResourceGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.moveResourceGroupWithOptions(request, runtime);
  }

  async revokeInstanceFromCenWithOptions(request: RevokeInstanceFromCenRequest, runtime: $Util.RuntimeOptions): Promise<RevokeInstanceFromCenResponse> {
    Util.validateModel(request);
    return $tea.cast<RevokeInstanceFromCenResponse>(await this.doRequest("RevokeInstanceFromCen", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new RevokeInstanceFromCenResponse({}));
  }

  async revokeInstanceFromCen(request: RevokeInstanceFromCenRequest): Promise<RevokeInstanceFromCenResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.revokeInstanceFromCenWithOptions(request, runtime);
  }

  async grantInstanceToCenWithOptions(request: GrantInstanceToCenRequest, runtime: $Util.RuntimeOptions): Promise<GrantInstanceToCenResponse> {
    Util.validateModel(request);
    return $tea.cast<GrantInstanceToCenResponse>(await this.doRequest("GrantInstanceToCen", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new GrantInstanceToCenResponse({}));
  }

  async grantInstanceToCen(request: GrantInstanceToCenRequest): Promise<GrantInstanceToCenResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.grantInstanceToCenWithOptions(request, runtime);
  }

  async describeGrantRulesToCenWithOptions(request: DescribeGrantRulesToCenRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGrantRulesToCenResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGrantRulesToCenResponse>(await this.doRequest("DescribeGrantRulesToCen", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeGrantRulesToCenResponse({}));
  }

  async describeGrantRulesToCen(request: DescribeGrantRulesToCenRequest): Promise<DescribeGrantRulesToCenResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGrantRulesToCenWithOptions(request, runtime);
  }

  async modifySslVpnServerWithOptions(request: ModifySslVpnServerRequest, runtime: $Util.RuntimeOptions): Promise<ModifySslVpnServerResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySslVpnServerResponse>(await this.doRequest("ModifySslVpnServer", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifySslVpnServerResponse({}));
  }

  async modifySslVpnServer(request: ModifySslVpnServerRequest): Promise<ModifySslVpnServerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifySslVpnServerWithOptions(request, runtime);
  }

  async modifySslVpnClientCertWithOptions(request: ModifySslVpnClientCertRequest, runtime: $Util.RuntimeOptions): Promise<ModifySslVpnClientCertResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySslVpnClientCertResponse>(await this.doRequest("ModifySslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifySslVpnClientCertResponse({}));
  }

  async modifySslVpnClientCert(request: ModifySslVpnClientCertRequest): Promise<ModifySslVpnClientCertResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifySslVpnClientCertWithOptions(request, runtime);
  }

  async describeSslVpnServersWithOptions(request: DescribeSslVpnServersRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSslVpnServersResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSslVpnServersResponse>(await this.doRequest("DescribeSslVpnServers", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeSslVpnServersResponse({}));
  }

  async describeSslVpnServers(request: DescribeSslVpnServersRequest): Promise<DescribeSslVpnServersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSslVpnServersWithOptions(request, runtime);
  }

  async describeSslVpnClientCertsWithOptions(request: DescribeSslVpnClientCertsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSslVpnClientCertsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSslVpnClientCertsResponse>(await this.doRequest("DescribeSslVpnClientCerts", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeSslVpnClientCertsResponse({}));
  }

  async describeSslVpnClientCerts(request: DescribeSslVpnClientCertsRequest): Promise<DescribeSslVpnClientCertsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSslVpnClientCertsWithOptions(request, runtime);
  }

  async describeSslVpnClientCertWithOptions(request: DescribeSslVpnClientCertRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSslVpnClientCertResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSslVpnClientCertResponse>(await this.doRequest("DescribeSslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeSslVpnClientCertResponse({}));
  }

  async describeSslVpnClientCert(request: DescribeSslVpnClientCertRequest): Promise<DescribeSslVpnClientCertResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSslVpnClientCertWithOptions(request, runtime);
  }

  async deleteSslVpnServerWithOptions(request: DeleteSslVpnServerRequest, runtime: $Util.RuntimeOptions): Promise<DeleteSslVpnServerResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteSslVpnServerResponse>(await this.doRequest("DeleteSslVpnServer", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteSslVpnServerResponse({}));
  }

  async deleteSslVpnServer(request: DeleteSslVpnServerRequest): Promise<DeleteSslVpnServerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteSslVpnServerWithOptions(request, runtime);
  }

  async deleteSslVpnClientCertWithOptions(request: DeleteSslVpnClientCertRequest, runtime: $Util.RuntimeOptions): Promise<DeleteSslVpnClientCertResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteSslVpnClientCertResponse>(await this.doRequest("DeleteSslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteSslVpnClientCertResponse({}));
  }

  async deleteSslVpnClientCert(request: DeleteSslVpnClientCertRequest): Promise<DeleteSslVpnClientCertResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteSslVpnClientCertWithOptions(request, runtime);
  }

  async createSslVpnServerWithOptions(request: CreateSslVpnServerRequest, runtime: $Util.RuntimeOptions): Promise<CreateSslVpnServerResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateSslVpnServerResponse>(await this.doRequest("CreateSslVpnServer", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateSslVpnServerResponse({}));
  }

  async createSslVpnServer(request: CreateSslVpnServerRequest): Promise<CreateSslVpnServerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createSslVpnServerWithOptions(request, runtime);
  }

  async createSslVpnClientCertWithOptions(request: CreateSslVpnClientCertRequest, runtime: $Util.RuntimeOptions): Promise<CreateSslVpnClientCertResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateSslVpnClientCertResponse>(await this.doRequest("CreateSslVpnClientCert", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateSslVpnClientCertResponse({}));
  }

  async createSslVpnClientCert(request: CreateSslVpnClientCertRequest): Promise<CreateSslVpnClientCertResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createSslVpnClientCertWithOptions(request, runtime);
  }

  async removeGlobalAccelerationInstanceIpWithOptions(request: RemoveGlobalAccelerationInstanceIpRequest, runtime: $Util.RuntimeOptions): Promise<RemoveGlobalAccelerationInstanceIpResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveGlobalAccelerationInstanceIpResponse>(await this.doRequest("RemoveGlobalAccelerationInstanceIp", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new RemoveGlobalAccelerationInstanceIpResponse({}));
  }

  async removeGlobalAccelerationInstanceIp(request: RemoveGlobalAccelerationInstanceIpRequest): Promise<RemoveGlobalAccelerationInstanceIpResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeGlobalAccelerationInstanceIpWithOptions(request, runtime);
  }

  async addGlobalAccelerationInstanceIpWithOptions(request: AddGlobalAccelerationInstanceIpRequest, runtime: $Util.RuntimeOptions): Promise<AddGlobalAccelerationInstanceIpResponse> {
    Util.validateModel(request);
    return $tea.cast<AddGlobalAccelerationInstanceIpResponse>(await this.doRequest("AddGlobalAccelerationInstanceIp", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AddGlobalAccelerationInstanceIpResponse({}));
  }

  async addGlobalAccelerationInstanceIp(request: AddGlobalAccelerationInstanceIpRequest): Promise<AddGlobalAccelerationInstanceIpResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addGlobalAccelerationInstanceIpWithOptions(request, runtime);
  }

  async describeRouteTableListWithOptions(request: DescribeRouteTableListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRouteTableListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRouteTableListResponse>(await this.doRequest("DescribeRouteTableList", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeRouteTableListResponse({}));
  }

  async describeRouteTableList(request: DescribeRouteTableListRequest): Promise<DescribeRouteTableListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRouteTableListWithOptions(request, runtime);
  }

  async modifyRouteTableAttributesWithOptions(request: ModifyRouteTableAttributesRequest, runtime: $Util.RuntimeOptions): Promise<ModifyRouteTableAttributesResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyRouteTableAttributesResponse>(await this.doRequest("ModifyRouteTableAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyRouteTableAttributesResponse({}));
  }

  async modifyRouteTableAttributes(request: ModifyRouteTableAttributesRequest): Promise<ModifyRouteTableAttributesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyRouteTableAttributesWithOptions(request, runtime);
  }

  async describeBgpNetworksWithOptions(request: DescribeBgpNetworksRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBgpNetworksResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBgpNetworksResponse>(await this.doRequest("DescribeBgpNetworks", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeBgpNetworksResponse({}));
  }

  async describeBgpNetworks(request: DescribeBgpNetworksRequest): Promise<DescribeBgpNetworksResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBgpNetworksWithOptions(request, runtime);
  }

  async modifyCommonBandwidthPackagePayTypeWithOptions(request: ModifyCommonBandwidthPackagePayTypeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyCommonBandwidthPackagePayTypeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyCommonBandwidthPackagePayTypeResponse>(await this.doRequest("ModifyCommonBandwidthPackagePayType", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyCommonBandwidthPackagePayTypeResponse({}));
  }

  async modifyCommonBandwidthPackagePayType(request: ModifyCommonBandwidthPackagePayTypeRequest): Promise<ModifyCommonBandwidthPackagePayTypeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyCommonBandwidthPackagePayTypeWithOptions(request, runtime);
  }

  async unassociateGlobalAccelerationInstanceWithOptions(request: UnassociateGlobalAccelerationInstanceRequest, runtime: $Util.RuntimeOptions): Promise<UnassociateGlobalAccelerationInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<UnassociateGlobalAccelerationInstanceResponse>(await this.doRequest("UnassociateGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UnassociateGlobalAccelerationInstanceResponse({}));
  }

  async unassociateGlobalAccelerationInstance(request: UnassociateGlobalAccelerationInstanceRequest): Promise<UnassociateGlobalAccelerationInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unassociateGlobalAccelerationInstanceWithOptions(request, runtime);
  }

  async modifyGlobalAccelerationInstanceSpecWithOptions(request: ModifyGlobalAccelerationInstanceSpecRequest, runtime: $Util.RuntimeOptions): Promise<ModifyGlobalAccelerationInstanceSpecResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyGlobalAccelerationInstanceSpecResponse>(await this.doRequest("ModifyGlobalAccelerationInstanceSpec", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyGlobalAccelerationInstanceSpecResponse({}));
  }

  async modifyGlobalAccelerationInstanceSpec(request: ModifyGlobalAccelerationInstanceSpecRequest): Promise<ModifyGlobalAccelerationInstanceSpecResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyGlobalAccelerationInstanceSpecWithOptions(request, runtime);
  }

  async modifyGlobalAccelerationInstanceAttributesWithOptions(request: ModifyGlobalAccelerationInstanceAttributesRequest, runtime: $Util.RuntimeOptions): Promise<ModifyGlobalAccelerationInstanceAttributesResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyGlobalAccelerationInstanceAttributesResponse>(await this.doRequest("ModifyGlobalAccelerationInstanceAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyGlobalAccelerationInstanceAttributesResponse({}));
  }

  async modifyGlobalAccelerationInstanceAttributes(request: ModifyGlobalAccelerationInstanceAttributesRequest): Promise<ModifyGlobalAccelerationInstanceAttributesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyGlobalAccelerationInstanceAttributesWithOptions(request, runtime);
  }

  async describeServerRelatedGlobalAccelerationInstancesWithOptions(request: DescribeServerRelatedGlobalAccelerationInstancesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeServerRelatedGlobalAccelerationInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeServerRelatedGlobalAccelerationInstancesResponse>(await this.doRequest("DescribeServerRelatedGlobalAccelerationInstances", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeServerRelatedGlobalAccelerationInstancesResponse({}));
  }

  async describeServerRelatedGlobalAccelerationInstances(request: DescribeServerRelatedGlobalAccelerationInstancesRequest): Promise<DescribeServerRelatedGlobalAccelerationInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeServerRelatedGlobalAccelerationInstancesWithOptions(request, runtime);
  }

  async describeGlobalAccelerationInstancesWithOptions(request: DescribeGlobalAccelerationInstancesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGlobalAccelerationInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGlobalAccelerationInstancesResponse>(await this.doRequest("DescribeGlobalAccelerationInstances", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeGlobalAccelerationInstancesResponse({}));
  }

  async describeGlobalAccelerationInstances(request: DescribeGlobalAccelerationInstancesRequest): Promise<DescribeGlobalAccelerationInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGlobalAccelerationInstancesWithOptions(request, runtime);
  }

  async deleteGlobalAccelerationInstanceWithOptions(request: DeleteGlobalAccelerationInstanceRequest, runtime: $Util.RuntimeOptions): Promise<DeleteGlobalAccelerationInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteGlobalAccelerationInstanceResponse>(await this.doRequest("DeleteGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteGlobalAccelerationInstanceResponse({}));
  }

  async deleteGlobalAccelerationInstance(request: DeleteGlobalAccelerationInstanceRequest): Promise<DeleteGlobalAccelerationInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteGlobalAccelerationInstanceWithOptions(request, runtime);
  }

  async createGlobalAccelerationInstanceWithOptions(request: CreateGlobalAccelerationInstanceRequest, runtime: $Util.RuntimeOptions): Promise<CreateGlobalAccelerationInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateGlobalAccelerationInstanceResponse>(await this.doRequest("CreateGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateGlobalAccelerationInstanceResponse({}));
  }

  async createGlobalAccelerationInstance(request: CreateGlobalAccelerationInstanceRequest): Promise<CreateGlobalAccelerationInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createGlobalAccelerationInstanceWithOptions(request, runtime);
  }

  async associateGlobalAccelerationInstanceWithOptions(request: AssociateGlobalAccelerationInstanceRequest, runtime: $Util.RuntimeOptions): Promise<AssociateGlobalAccelerationInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<AssociateGlobalAccelerationInstanceResponse>(await this.doRequest("AssociateGlobalAccelerationInstance", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AssociateGlobalAccelerationInstanceResponse({}));
  }

  async associateGlobalAccelerationInstance(request: AssociateGlobalAccelerationInstanceRequest): Promise<AssociateGlobalAccelerationInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.associateGlobalAccelerationInstanceWithOptions(request, runtime);
  }

  async describeVSwitchAttributesWithOptions(request: DescribeVSwitchAttributesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVSwitchAttributesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVSwitchAttributesResponse>(await this.doRequest("DescribeVSwitchAttributes", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVSwitchAttributesResponse({}));
  }

  async describeVSwitchAttributes(request: DescribeVSwitchAttributesRequest): Promise<DescribeVSwitchAttributesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVSwitchAttributesWithOptions(request, runtime);
  }

  async removeCommonBandwidthPackageIpWithOptions(request: RemoveCommonBandwidthPackageIpRequest, runtime: $Util.RuntimeOptions): Promise<RemoveCommonBandwidthPackageIpResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveCommonBandwidthPackageIpResponse>(await this.doRequest("RemoveCommonBandwidthPackageIp", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new RemoveCommonBandwidthPackageIpResponse({}));
  }

  async removeCommonBandwidthPackageIp(request: RemoveCommonBandwidthPackageIpRequest): Promise<RemoveCommonBandwidthPackageIpResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeCommonBandwidthPackageIpWithOptions(request, runtime);
  }

  async modifyCommonBandwidthPackageSpecWithOptions(request: ModifyCommonBandwidthPackageSpecRequest, runtime: $Util.RuntimeOptions): Promise<ModifyCommonBandwidthPackageSpecResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyCommonBandwidthPackageSpecResponse>(await this.doRequest("ModifyCommonBandwidthPackageSpec", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyCommonBandwidthPackageSpecResponse({}));
  }

  async modifyCommonBandwidthPackageSpec(request: ModifyCommonBandwidthPackageSpecRequest): Promise<ModifyCommonBandwidthPackageSpecResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyCommonBandwidthPackageSpecWithOptions(request, runtime);
  }

  async modifyCommonBandwidthPackageAttributeWithOptions(request: ModifyCommonBandwidthPackageAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyCommonBandwidthPackageAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyCommonBandwidthPackageAttributeResponse>(await this.doRequest("ModifyCommonBandwidthPackageAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyCommonBandwidthPackageAttributeResponse({}));
  }

  async modifyCommonBandwidthPackageAttribute(request: ModifyCommonBandwidthPackageAttributeRequest): Promise<ModifyCommonBandwidthPackageAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyCommonBandwidthPackageAttributeWithOptions(request, runtime);
  }

  async describeCommonBandwidthPackagesWithOptions(request: DescribeCommonBandwidthPackagesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCommonBandwidthPackagesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCommonBandwidthPackagesResponse>(await this.doRequest("DescribeCommonBandwidthPackages", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeCommonBandwidthPackagesResponse({}));
  }

  async describeCommonBandwidthPackages(request: DescribeCommonBandwidthPackagesRequest): Promise<DescribeCommonBandwidthPackagesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCommonBandwidthPackagesWithOptions(request, runtime);
  }

  async deleteCommonBandwidthPackageWithOptions(request: DeleteCommonBandwidthPackageRequest, runtime: $Util.RuntimeOptions): Promise<DeleteCommonBandwidthPackageResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteCommonBandwidthPackageResponse>(await this.doRequest("DeleteCommonBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteCommonBandwidthPackageResponse({}));
  }

  async deleteCommonBandwidthPackage(request: DeleteCommonBandwidthPackageRequest): Promise<DeleteCommonBandwidthPackageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteCommonBandwidthPackageWithOptions(request, runtime);
  }

  async createCommonBandwidthPackageWithOptions(request: CreateCommonBandwidthPackageRequest, runtime: $Util.RuntimeOptions): Promise<CreateCommonBandwidthPackageResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateCommonBandwidthPackageResponse>(await this.doRequest("CreateCommonBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateCommonBandwidthPackageResponse({}));
  }

  async createCommonBandwidthPackage(request: CreateCommonBandwidthPackageRequest): Promise<CreateCommonBandwidthPackageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createCommonBandwidthPackageWithOptions(request, runtime);
  }

  async addCommonBandwidthPackageIpWithOptions(request: AddCommonBandwidthPackageIpRequest, runtime: $Util.RuntimeOptions): Promise<AddCommonBandwidthPackageIpResponse> {
    Util.validateModel(request);
    return $tea.cast<AddCommonBandwidthPackageIpResponse>(await this.doRequest("AddCommonBandwidthPackageIp", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AddCommonBandwidthPackageIpResponse({}));
  }

  async addCommonBandwidthPackageIp(request: AddCommonBandwidthPackageIpRequest): Promise<AddCommonBandwidthPackageIpResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addCommonBandwidthPackageIpWithOptions(request, runtime);
  }

  async modifyVpnGatewayAttributeWithOptions(request: ModifyVpnGatewayAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyVpnGatewayAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyVpnGatewayAttributeResponse>(await this.doRequest("ModifyVpnGatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyVpnGatewayAttributeResponse({}));
  }

  async modifyVpnGatewayAttribute(request: ModifyVpnGatewayAttributeRequest): Promise<ModifyVpnGatewayAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyVpnGatewayAttributeWithOptions(request, runtime);
  }

  async modifyVpnConnectionAttributeWithOptions(request: ModifyVpnConnectionAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyVpnConnectionAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyVpnConnectionAttributeResponse>(await this.doRequest("ModifyVpnConnectionAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyVpnConnectionAttributeResponse({}));
  }

  async modifyVpnConnectionAttribute(request: ModifyVpnConnectionAttributeRequest): Promise<ModifyVpnConnectionAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyVpnConnectionAttributeWithOptions(request, runtime);
  }

  async modifyCustomerGatewayAttributeWithOptions(request: ModifyCustomerGatewayAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyCustomerGatewayAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyCustomerGatewayAttributeResponse>(await this.doRequest("ModifyCustomerGatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyCustomerGatewayAttributeResponse({}));
  }

  async modifyCustomerGatewayAttribute(request: ModifyCustomerGatewayAttributeRequest): Promise<ModifyCustomerGatewayAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyCustomerGatewayAttributeWithOptions(request, runtime);
  }

  async downloadVpnConnectionConfigWithOptions(request: DownloadVpnConnectionConfigRequest, runtime: $Util.RuntimeOptions): Promise<DownloadVpnConnectionConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DownloadVpnConnectionConfigResponse>(await this.doRequest("DownloadVpnConnectionConfig", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DownloadVpnConnectionConfigResponse({}));
  }

  async downloadVpnConnectionConfig(request: DownloadVpnConnectionConfigRequest): Promise<DownloadVpnConnectionConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.downloadVpnConnectionConfigWithOptions(request, runtime);
  }

  async describeVpnGatewaysWithOptions(request: DescribeVpnGatewaysRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVpnGatewaysResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVpnGatewaysResponse>(await this.doRequest("DescribeVpnGateways", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVpnGatewaysResponse({}));
  }

  async describeVpnGateways(request: DescribeVpnGatewaysRequest): Promise<DescribeVpnGatewaysResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVpnGatewaysWithOptions(request, runtime);
  }

  async describeVpnGatewayWithOptions(request: DescribeVpnGatewayRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVpnGatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVpnGatewayResponse>(await this.doRequest("DescribeVpnGateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVpnGatewayResponse({}));
  }

  async describeVpnGateway(request: DescribeVpnGatewayRequest): Promise<DescribeVpnGatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVpnGatewayWithOptions(request, runtime);
  }

  async describeVpnConnectionsWithOptions(request: DescribeVpnConnectionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVpnConnectionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVpnConnectionsResponse>(await this.doRequest("DescribeVpnConnections", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVpnConnectionsResponse({}));
  }

  async describeVpnConnections(request: DescribeVpnConnectionsRequest): Promise<DescribeVpnConnectionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVpnConnectionsWithOptions(request, runtime);
  }

  async describeVpnConnectionWithOptions(request: DescribeVpnConnectionRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVpnConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVpnConnectionResponse>(await this.doRequest("DescribeVpnConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVpnConnectionResponse({}));
  }

  async describeVpnConnection(request: DescribeVpnConnectionRequest): Promise<DescribeVpnConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVpnConnectionWithOptions(request, runtime);
  }

  async describeCustomerGatewaysWithOptions(request: DescribeCustomerGatewaysRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCustomerGatewaysResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCustomerGatewaysResponse>(await this.doRequest("DescribeCustomerGateways", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeCustomerGatewaysResponse({}));
  }

  async describeCustomerGateways(request: DescribeCustomerGatewaysRequest): Promise<DescribeCustomerGatewaysResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCustomerGatewaysWithOptions(request, runtime);
  }

  async describeCustomerGatewayWithOptions(request: DescribeCustomerGatewayRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCustomerGatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCustomerGatewayResponse>(await this.doRequest("DescribeCustomerGateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeCustomerGatewayResponse({}));
  }

  async describeCustomerGateway(request: DescribeCustomerGatewayRequest): Promise<DescribeCustomerGatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCustomerGatewayWithOptions(request, runtime);
  }

  async deleteVpnGatewayWithOptions(request: DeleteVpnGatewayRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVpnGatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVpnGatewayResponse>(await this.doRequest("DeleteVpnGateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteVpnGatewayResponse({}));
  }

  async deleteVpnGateway(request: DeleteVpnGatewayRequest): Promise<DeleteVpnGatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVpnGatewayWithOptions(request, runtime);
  }

  async deleteVpnConnectionWithOptions(request: DeleteVpnConnectionRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVpnConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVpnConnectionResponse>(await this.doRequest("DeleteVpnConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteVpnConnectionResponse({}));
  }

  async deleteVpnConnection(request: DeleteVpnConnectionRequest): Promise<DeleteVpnConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVpnConnectionWithOptions(request, runtime);
  }

  async deleteCustomerGatewayWithOptions(request: DeleteCustomerGatewayRequest, runtime: $Util.RuntimeOptions): Promise<DeleteCustomerGatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteCustomerGatewayResponse>(await this.doRequest("DeleteCustomerGateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteCustomerGatewayResponse({}));
  }

  async deleteCustomerGateway(request: DeleteCustomerGatewayRequest): Promise<DeleteCustomerGatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteCustomerGatewayWithOptions(request, runtime);
  }

  async createVpnConnectionWithOptions(request: CreateVpnConnectionRequest, runtime: $Util.RuntimeOptions): Promise<CreateVpnConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateVpnConnectionResponse>(await this.doRequest("CreateVpnConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateVpnConnectionResponse({}));
  }

  async createVpnConnection(request: CreateVpnConnectionRequest): Promise<CreateVpnConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createVpnConnectionWithOptions(request, runtime);
  }

  async createCustomerGatewayWithOptions(request: CreateCustomerGatewayRequest, runtime: $Util.RuntimeOptions): Promise<CreateCustomerGatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateCustomerGatewayResponse>(await this.doRequest("CreateCustomerGateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateCustomerGatewayResponse({}));
  }

  async createCustomerGateway(request: CreateCustomerGatewayRequest): Promise<CreateCustomerGatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createCustomerGatewayWithOptions(request, runtime);
  }

  async modifyBgpGroupAttributeWithOptions(request: ModifyBgpGroupAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyBgpGroupAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyBgpGroupAttributeResponse>(await this.doRequest("ModifyBgpGroupAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyBgpGroupAttributeResponse({}));
  }

  async modifyBgpGroupAttribute(request: ModifyBgpGroupAttributeRequest): Promise<ModifyBgpGroupAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyBgpGroupAttributeWithOptions(request, runtime);
  }

  async describeBgpPeersWithOptions(request: DescribeBgpPeersRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBgpPeersResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBgpPeersResponse>(await this.doRequest("DescribeBgpPeers", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeBgpPeersResponse({}));
  }

  async describeBgpPeers(request: DescribeBgpPeersRequest): Promise<DescribeBgpPeersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBgpPeersWithOptions(request, runtime);
  }

  async describeBgpGroupsWithOptions(request: DescribeBgpGroupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBgpGroupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBgpGroupsResponse>(await this.doRequest("DescribeBgpGroups", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeBgpGroupsResponse({}));
  }

  async describeBgpGroups(request: DescribeBgpGroupsRequest): Promise<DescribeBgpGroupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBgpGroupsWithOptions(request, runtime);
  }

  async deleteBgpPeerWithOptions(request: DeleteBgpPeerRequest, runtime: $Util.RuntimeOptions): Promise<DeleteBgpPeerResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteBgpPeerResponse>(await this.doRequest("DeleteBgpPeer", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteBgpPeerResponse({}));
  }

  async deleteBgpPeer(request: DeleteBgpPeerRequest): Promise<DeleteBgpPeerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteBgpPeerWithOptions(request, runtime);
  }

  async deleteBgpNetworkWithOptions(request: DeleteBgpNetworkRequest, runtime: $Util.RuntimeOptions): Promise<DeleteBgpNetworkResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteBgpNetworkResponse>(await this.doRequest("DeleteBgpNetwork", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteBgpNetworkResponse({}));
  }

  async deleteBgpNetwork(request: DeleteBgpNetworkRequest): Promise<DeleteBgpNetworkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteBgpNetworkWithOptions(request, runtime);
  }

  async deleteBgpGroupWithOptions(request: DeleteBgpGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteBgpGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteBgpGroupResponse>(await this.doRequest("DeleteBgpGroup", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteBgpGroupResponse({}));
  }

  async deleteBgpGroup(request: DeleteBgpGroupRequest): Promise<DeleteBgpGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteBgpGroupWithOptions(request, runtime);
  }

  async createBgpPeerWithOptions(request: CreateBgpPeerRequest, runtime: $Util.RuntimeOptions): Promise<CreateBgpPeerResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateBgpPeerResponse>(await this.doRequest("CreateBgpPeer", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateBgpPeerResponse({}));
  }

  async createBgpPeer(request: CreateBgpPeerRequest): Promise<CreateBgpPeerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createBgpPeerWithOptions(request, runtime);
  }

  async createBgpGroupWithOptions(request: CreateBgpGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateBgpGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateBgpGroupResponse>(await this.doRequest("CreateBgpGroup", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateBgpGroupResponse({}));
  }

  async createBgpGroup(request: CreateBgpGroupRequest): Promise<CreateBgpGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createBgpGroupWithOptions(request, runtime);
  }

  async addBgpNetworkWithOptions(request: AddBgpNetworkRequest, runtime: $Util.RuntimeOptions): Promise<AddBgpNetworkResponse> {
    Util.validateModel(request);
    return $tea.cast<AddBgpNetworkResponse>(await this.doRequest("AddBgpNetwork", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AddBgpNetworkResponse({}));
  }

  async addBgpNetwork(request: AddBgpNetworkRequest): Promise<AddBgpNetworkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addBgpNetworkWithOptions(request, runtime);
  }

  async enableVpcClassicLinkWithOptions(request: EnableVpcClassicLinkRequest, runtime: $Util.RuntimeOptions): Promise<EnableVpcClassicLinkResponse> {
    Util.validateModel(request);
    return $tea.cast<EnableVpcClassicLinkResponse>(await this.doRequest("EnableVpcClassicLink", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new EnableVpcClassicLinkResponse({}));
  }

  async enableVpcClassicLink(request: EnableVpcClassicLinkRequest): Promise<EnableVpcClassicLinkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enableVpcClassicLinkWithOptions(request, runtime);
  }

  async disableVpcClassicLinkWithOptions(request: DisableVpcClassicLinkRequest, runtime: $Util.RuntimeOptions): Promise<DisableVpcClassicLinkResponse> {
    Util.validateModel(request);
    return $tea.cast<DisableVpcClassicLinkResponse>(await this.doRequest("DisableVpcClassicLink", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DisableVpcClassicLinkResponse({}));
  }

  async disableVpcClassicLink(request: DisableVpcClassicLinkRequest): Promise<DisableVpcClassicLinkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.disableVpcClassicLinkWithOptions(request, runtime);
  }

  async describeVpcAttributeWithOptions(request: DescribeVpcAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVpcAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVpcAttributeResponse>(await this.doRequest("DescribeVpcAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVpcAttributeResponse({}));
  }

  async describeVpcAttribute(request: DescribeVpcAttributeRequest): Promise<DescribeVpcAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVpcAttributeWithOptions(request, runtime);
  }

  async unassociatePhysicalConnectionFromVirtualBorderRouterWithOptions(request: UnassociatePhysicalConnectionFromVirtualBorderRouterRequest, runtime: $Util.RuntimeOptions): Promise<UnassociatePhysicalConnectionFromVirtualBorderRouterResponse> {
    Util.validateModel(request);
    return $tea.cast<UnassociatePhysicalConnectionFromVirtualBorderRouterResponse>(await this.doRequest("UnassociatePhysicalConnectionFromVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UnassociatePhysicalConnectionFromVirtualBorderRouterResponse({}));
  }

  async unassociatePhysicalConnectionFromVirtualBorderRouter(request: UnassociatePhysicalConnectionFromVirtualBorderRouterRequest): Promise<UnassociatePhysicalConnectionFromVirtualBorderRouterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unassociatePhysicalConnectionFromVirtualBorderRouterWithOptions(request, runtime);
  }

  async associatePhysicalConnectionToVirtualBorderRouterWithOptions(request: AssociatePhysicalConnectionToVirtualBorderRouterRequest, runtime: $Util.RuntimeOptions): Promise<AssociatePhysicalConnectionToVirtualBorderRouterResponse> {
    Util.validateModel(request);
    return $tea.cast<AssociatePhysicalConnectionToVirtualBorderRouterResponse>(await this.doRequest("AssociatePhysicalConnectionToVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AssociatePhysicalConnectionToVirtualBorderRouterResponse({}));
  }

  async associatePhysicalConnectionToVirtualBorderRouter(request: AssociatePhysicalConnectionToVirtualBorderRouterRequest): Promise<AssociatePhysicalConnectionToVirtualBorderRouterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.associatePhysicalConnectionToVirtualBorderRouterWithOptions(request, runtime);
  }

  async modifySnatEntryWithOptions(request: ModifySnatEntryRequest, runtime: $Util.RuntimeOptions): Promise<ModifySnatEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySnatEntryResponse>(await this.doRequest("ModifySnatEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifySnatEntryResponse({}));
  }

  async modifySnatEntry(request: ModifySnatEntryRequest): Promise<ModifySnatEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifySnatEntryWithOptions(request, runtime);
  }

  async modifyNatGatewaySpecWithOptions(request: ModifyNatGatewaySpecRequest, runtime: $Util.RuntimeOptions): Promise<ModifyNatGatewaySpecResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyNatGatewaySpecResponse>(await this.doRequest("ModifyNatGatewaySpec", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyNatGatewaySpecResponse({}));
  }

  async modifyNatGatewaySpec(request: ModifyNatGatewaySpecRequest): Promise<ModifyNatGatewaySpecResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyNatGatewaySpecWithOptions(request, runtime);
  }

  async modifyNatGatewayAttributeWithOptions(request: ModifyNatGatewayAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyNatGatewayAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyNatGatewayAttributeResponse>(await this.doRequest("ModifyNatGatewayAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyNatGatewayAttributeResponse({}));
  }

  async modifyNatGatewayAttribute(request: ModifyNatGatewayAttributeRequest): Promise<ModifyNatGatewayAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyNatGatewayAttributeWithOptions(request, runtime);
  }

  async modifyBandwidthPackageAttributeWithOptions(request: ModifyBandwidthPackageAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyBandwidthPackageAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyBandwidthPackageAttributeResponse>(await this.doRequest("ModifyBandwidthPackageAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyBandwidthPackageAttributeResponse({}));
  }

  async modifyBandwidthPackageAttribute(request: ModifyBandwidthPackageAttributeRequest): Promise<ModifyBandwidthPackageAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyBandwidthPackageAttributeWithOptions(request, runtime);
  }

  async describeSnatTableEntriesWithOptions(request: DescribeSnatTableEntriesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSnatTableEntriesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSnatTableEntriesResponse>(await this.doRequest("DescribeSnatTableEntries", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeSnatTableEntriesResponse({}));
  }

  async describeSnatTableEntries(request: DescribeSnatTableEntriesRequest): Promise<DescribeSnatTableEntriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSnatTableEntriesWithOptions(request, runtime);
  }

  async deleteSnatEntryWithOptions(request: DeleteSnatEntryRequest, runtime: $Util.RuntimeOptions): Promise<DeleteSnatEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteSnatEntryResponse>(await this.doRequest("DeleteSnatEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteSnatEntryResponse({}));
  }

  async deleteSnatEntry(request: DeleteSnatEntryRequest): Promise<DeleteSnatEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteSnatEntryWithOptions(request, runtime);
  }

  async createSnatEntryWithOptions(request: CreateSnatEntryRequest, runtime: $Util.RuntimeOptions): Promise<CreateSnatEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateSnatEntryResponse>(await this.doRequest("CreateSnatEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateSnatEntryResponse({}));
  }

  async createSnatEntry(request: CreateSnatEntryRequest): Promise<CreateSnatEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createSnatEntryWithOptions(request, runtime);
  }

  async createBandwidthPackageWithOptions(request: CreateBandwidthPackageRequest, runtime: $Util.RuntimeOptions): Promise<CreateBandwidthPackageResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateBandwidthPackageResponse>(await this.doRequest("CreateBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateBandwidthPackageResponse({}));
  }

  async createBandwidthPackage(request: CreateBandwidthPackageRequest): Promise<CreateBandwidthPackageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createBandwidthPackageWithOptions(request, runtime);
  }

  async unassociateHaVipWithOptions(request: UnassociateHaVipRequest, runtime: $Util.RuntimeOptions): Promise<UnassociateHaVipResponse> {
    Util.validateModel(request);
    return $tea.cast<UnassociateHaVipResponse>(await this.doRequest("UnassociateHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UnassociateHaVipResponse({}));
  }

  async unassociateHaVip(request: UnassociateHaVipRequest): Promise<UnassociateHaVipResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unassociateHaVipWithOptions(request, runtime);
  }

  async unassociateEipAddressWithOptions(request: UnassociateEipAddressRequest, runtime: $Util.RuntimeOptions): Promise<UnassociateEipAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<UnassociateEipAddressResponse>(await this.doRequest("UnassociateEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new UnassociateEipAddressResponse({}));
  }

  async unassociateEipAddress(request: UnassociateEipAddressRequest): Promise<UnassociateEipAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unassociateEipAddressWithOptions(request, runtime);
  }

  async terminateVirtualBorderRouterWithOptions(request: TerminateVirtualBorderRouterRequest, runtime: $Util.RuntimeOptions): Promise<TerminateVirtualBorderRouterResponse> {
    Util.validateModel(request);
    return $tea.cast<TerminateVirtualBorderRouterResponse>(await this.doRequest("TerminateVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new TerminateVirtualBorderRouterResponse({}));
  }

  async terminateVirtualBorderRouter(request: TerminateVirtualBorderRouterRequest): Promise<TerminateVirtualBorderRouterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.terminateVirtualBorderRouterWithOptions(request, runtime);
  }

  async terminatePhysicalConnectionWithOptions(request: TerminatePhysicalConnectionRequest, runtime: $Util.RuntimeOptions): Promise<TerminatePhysicalConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<TerminatePhysicalConnectionResponse>(await this.doRequest("TerminatePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new TerminatePhysicalConnectionResponse({}));
  }

  async terminatePhysicalConnection(request: TerminatePhysicalConnectionRequest): Promise<TerminatePhysicalConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.terminatePhysicalConnectionWithOptions(request, runtime);
  }

  async removeBandwidthPackageIpsWithOptions(request: RemoveBandwidthPackageIpsRequest, runtime: $Util.RuntimeOptions): Promise<RemoveBandwidthPackageIpsResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveBandwidthPackageIpsResponse>(await this.doRequest("RemoveBandwidthPackageIps", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new RemoveBandwidthPackageIpsResponse({}));
  }

  async removeBandwidthPackageIps(request: RemoveBandwidthPackageIpsRequest): Promise<RemoveBandwidthPackageIpsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeBandwidthPackageIpsWithOptions(request, runtime);
  }

  async releaseEipAddressWithOptions(request: ReleaseEipAddressRequest, runtime: $Util.RuntimeOptions): Promise<ReleaseEipAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<ReleaseEipAddressResponse>(await this.doRequest("ReleaseEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ReleaseEipAddressResponse({}));
  }

  async releaseEipAddress(request: ReleaseEipAddressRequest): Promise<ReleaseEipAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.releaseEipAddressWithOptions(request, runtime);
  }

  async recoverVirtualBorderRouterWithOptions(request: RecoverVirtualBorderRouterRequest, runtime: $Util.RuntimeOptions): Promise<RecoverVirtualBorderRouterResponse> {
    Util.validateModel(request);
    return $tea.cast<RecoverVirtualBorderRouterResponse>(await this.doRequest("RecoverVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new RecoverVirtualBorderRouterResponse({}));
  }

  async recoverVirtualBorderRouter(request: RecoverVirtualBorderRouterRequest): Promise<RecoverVirtualBorderRouterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.recoverVirtualBorderRouterWithOptions(request, runtime);
  }

  async modifyVSwitchAttributeWithOptions(request: ModifyVSwitchAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyVSwitchAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyVSwitchAttributeResponse>(await this.doRequest("ModifyVSwitchAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyVSwitchAttributeResponse({}));
  }

  async modifyVSwitchAttribute(request: ModifyVSwitchAttributeRequest): Promise<ModifyVSwitchAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyVSwitchAttributeWithOptions(request, runtime);
  }

  async modifyVRouterAttributeWithOptions(request: ModifyVRouterAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyVRouterAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyVRouterAttributeResponse>(await this.doRequest("ModifyVRouterAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyVRouterAttributeResponse({}));
  }

  async modifyVRouterAttribute(request: ModifyVRouterAttributeRequest): Promise<ModifyVRouterAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyVRouterAttributeWithOptions(request, runtime);
  }

  async modifyVpcAttributeWithOptions(request: ModifyVpcAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyVpcAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyVpcAttributeResponse>(await this.doRequest("ModifyVpcAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyVpcAttributeResponse({}));
  }

  async modifyVpcAttribute(request: ModifyVpcAttributeRequest): Promise<ModifyVpcAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyVpcAttributeWithOptions(request, runtime);
  }

  async modifyVirtualBorderRouterAttributeWithOptions(request: ModifyVirtualBorderRouterAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyVirtualBorderRouterAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyVirtualBorderRouterAttributeResponse>(await this.doRequest("ModifyVirtualBorderRouterAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyVirtualBorderRouterAttributeResponse({}));
  }

  async modifyVirtualBorderRouterAttribute(request: ModifyVirtualBorderRouterAttributeRequest): Promise<ModifyVirtualBorderRouterAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyVirtualBorderRouterAttributeWithOptions(request, runtime);
  }

  async modifyRouterInterfaceSpecWithOptions(request: ModifyRouterInterfaceSpecRequest, runtime: $Util.RuntimeOptions): Promise<ModifyRouterInterfaceSpecResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyRouterInterfaceSpecResponse>(await this.doRequest("ModifyRouterInterfaceSpec", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyRouterInterfaceSpecResponse({}));
  }

  async modifyRouterInterfaceSpec(request: ModifyRouterInterfaceSpecRequest): Promise<ModifyRouterInterfaceSpecResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyRouterInterfaceSpecWithOptions(request, runtime);
  }

  async modifyRouterInterfaceAttributeWithOptions(request: ModifyRouterInterfaceAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyRouterInterfaceAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyRouterInterfaceAttributeResponse>(await this.doRequest("ModifyRouterInterfaceAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyRouterInterfaceAttributeResponse({}));
  }

  async modifyRouterInterfaceAttribute(request: ModifyRouterInterfaceAttributeRequest): Promise<ModifyRouterInterfaceAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyRouterInterfaceAttributeWithOptions(request, runtime);
  }

  async modifyPhysicalConnectionAttributeWithOptions(request: ModifyPhysicalConnectionAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyPhysicalConnectionAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyPhysicalConnectionAttributeResponse>(await this.doRequest("ModifyPhysicalConnectionAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyPhysicalConnectionAttributeResponse({}));
  }

  async modifyPhysicalConnectionAttribute(request: ModifyPhysicalConnectionAttributeRequest): Promise<ModifyPhysicalConnectionAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyPhysicalConnectionAttributeWithOptions(request, runtime);
  }

  async modifyHaVipAttributeWithOptions(request: ModifyHaVipAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyHaVipAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyHaVipAttributeResponse>(await this.doRequest("ModifyHaVipAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyHaVipAttributeResponse({}));
  }

  async modifyHaVipAttribute(request: ModifyHaVipAttributeRequest): Promise<ModifyHaVipAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyHaVipAttributeWithOptions(request, runtime);
  }

  async modifyForwardEntryWithOptions(request: ModifyForwardEntryRequest, runtime: $Util.RuntimeOptions): Promise<ModifyForwardEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyForwardEntryResponse>(await this.doRequest("ModifyForwardEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyForwardEntryResponse({}));
  }

  async modifyForwardEntry(request: ModifyForwardEntryRequest): Promise<ModifyForwardEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyForwardEntryWithOptions(request, runtime);
  }

  async modifyEipAddressAttributeWithOptions(request: ModifyEipAddressAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyEipAddressAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyEipAddressAttributeResponse>(await this.doRequest("ModifyEipAddressAttribute", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyEipAddressAttributeResponse({}));
  }

  async modifyEipAddressAttribute(request: ModifyEipAddressAttributeRequest): Promise<ModifyEipAddressAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyEipAddressAttributeWithOptions(request, runtime);
  }

  async modifyBandwidthPackageSpecWithOptions(request: ModifyBandwidthPackageSpecRequest, runtime: $Util.RuntimeOptions): Promise<ModifyBandwidthPackageSpecResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyBandwidthPackageSpecResponse>(await this.doRequest("ModifyBandwidthPackageSpec", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ModifyBandwidthPackageSpecResponse({}));
  }

  async modifyBandwidthPackageSpec(request: ModifyBandwidthPackageSpecRequest): Promise<ModifyBandwidthPackageSpecResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyBandwidthPackageSpecWithOptions(request, runtime);
  }

  async enablePhysicalConnectionWithOptions(request: EnablePhysicalConnectionRequest, runtime: $Util.RuntimeOptions): Promise<EnablePhysicalConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<EnablePhysicalConnectionResponse>(await this.doRequest("EnablePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new EnablePhysicalConnectionResponse({}));
  }

  async enablePhysicalConnection(request: EnablePhysicalConnectionRequest): Promise<EnablePhysicalConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enablePhysicalConnectionWithOptions(request, runtime);
  }

  async describeZonesWithOptions(request: DescribeZonesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeZonesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeZonesResponse>(await this.doRequest("DescribeZones", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeZonesResponse({}));
  }

  async describeZones(request: DescribeZonesRequest): Promise<DescribeZonesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeZonesWithOptions(request, runtime);
  }

  async describeVSwitchesWithOptions(request: DescribeVSwitchesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVSwitchesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVSwitchesResponse>(await this.doRequest("DescribeVSwitches", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVSwitchesResponse({}));
  }

  async describeVSwitches(request: DescribeVSwitchesRequest): Promise<DescribeVSwitchesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVSwitchesWithOptions(request, runtime);
  }

  async describeVRoutersWithOptions(request: DescribeVRoutersRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVRoutersResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVRoutersResponse>(await this.doRequest("DescribeVRouters", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVRoutersResponse({}));
  }

  async describeVRouters(request: DescribeVRoutersRequest): Promise<DescribeVRoutersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVRoutersWithOptions(request, runtime);
  }

  async describeVpcsWithOptions(request: DescribeVpcsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVpcsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVpcsResponse>(await this.doRequest("DescribeVpcs", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVpcsResponse({}));
  }

  async describeVpcs(request: DescribeVpcsRequest): Promise<DescribeVpcsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVpcsWithOptions(request, runtime);
  }

  async describeVirtualBorderRoutersForPhysicalConnectionWithOptions(request: DescribeVirtualBorderRoutersForPhysicalConnectionRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVirtualBorderRoutersForPhysicalConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVirtualBorderRoutersForPhysicalConnectionResponse>(await this.doRequest("DescribeVirtualBorderRoutersForPhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVirtualBorderRoutersForPhysicalConnectionResponse({}));
  }

  async describeVirtualBorderRoutersForPhysicalConnection(request: DescribeVirtualBorderRoutersForPhysicalConnectionRequest): Promise<DescribeVirtualBorderRoutersForPhysicalConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVirtualBorderRoutersForPhysicalConnectionWithOptions(request, runtime);
  }

  async describeVirtualBorderRoutersWithOptions(request: DescribeVirtualBorderRoutersRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVirtualBorderRoutersResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVirtualBorderRoutersResponse>(await this.doRequest("DescribeVirtualBorderRouters", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeVirtualBorderRoutersResponse({}));
  }

  async describeVirtualBorderRouters(request: DescribeVirtualBorderRoutersRequest): Promise<DescribeVirtualBorderRoutersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVirtualBorderRoutersWithOptions(request, runtime);
  }

  async describeRouteTablesWithOptions(request: DescribeRouteTablesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRouteTablesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRouteTablesResponse>(await this.doRequest("DescribeRouteTables", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeRouteTablesResponse({}));
  }

  async describeRouteTables(request: DescribeRouteTablesRequest): Promise<DescribeRouteTablesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRouteTablesWithOptions(request, runtime);
  }

  async describeRouterInterfacesWithOptions(request: DescribeRouterInterfacesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRouterInterfacesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRouterInterfacesResponse>(await this.doRequest("DescribeRouterInterfaces", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeRouterInterfacesResponse({}));
  }

  async describeRouterInterfaces(request: DescribeRouterInterfacesRequest): Promise<DescribeRouterInterfacesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRouterInterfacesWithOptions(request, runtime);
  }

  async describeRegionsWithOptions(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRegionsResponse>(await this.doRequest("DescribeRegions", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeRegionsResponse({}));
  }

  async describeRegions(request: DescribeRegionsRequest): Promise<DescribeRegionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRegionsWithOptions(request, runtime);
  }

  /**
   * DescribePhysicalConnections Query physical connections in a region.
    * request demo:   * https://vpc.aliyuncs.com/?Action=DescribePhysicalConnections
    * &RegionId=cn-hangzhou
    * &<CommonParameters>
    * description: 
   */
  async describePhysicalConnectionsWithOptions(request: DescribePhysicalConnectionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribePhysicalConnectionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribePhysicalConnectionsResponse>(await this.doRequest("DescribePhysicalConnections", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribePhysicalConnectionsResponse({}));
  }

  /**
   * DescribePhysicalConnections Query physical connections in a region.
    * request demo:   * https://vpc.aliyuncs.com/?Action=DescribePhysicalConnections
    * &RegionId=cn-hangzhou
    * &<CommonParameters>
    * description: 
   */
  async describePhysicalConnections(request: DescribePhysicalConnectionsRequest): Promise<DescribePhysicalConnectionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describePhysicalConnectionsWithOptions(request, runtime);
  }

  async describeNewProjectEipMonitorDataWithOptions(request: DescribeNewProjectEipMonitorDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeNewProjectEipMonitorDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeNewProjectEipMonitorDataResponse>(await this.doRequest("DescribeNewProjectEipMonitorData", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeNewProjectEipMonitorDataResponse({}));
  }

  async describeNewProjectEipMonitorData(request: DescribeNewProjectEipMonitorDataRequest): Promise<DescribeNewProjectEipMonitorDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeNewProjectEipMonitorDataWithOptions(request, runtime);
  }

  async describeNatGatewaysWithOptions(request: DescribeNatGatewaysRequest, runtime: $Util.RuntimeOptions): Promise<DescribeNatGatewaysResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeNatGatewaysResponse>(await this.doRequest("DescribeNatGateways", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeNatGatewaysResponse({}));
  }

  async describeNatGateways(request: DescribeNatGatewaysRequest): Promise<DescribeNatGatewaysResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeNatGatewaysWithOptions(request, runtime);
  }

  async describeHaVipsWithOptions(request: DescribeHaVipsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeHaVipsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeHaVipsResponse>(await this.doRequest("DescribeHaVips", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeHaVipsResponse({}));
  }

  async describeHaVips(request: DescribeHaVipsRequest): Promise<DescribeHaVipsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeHaVipsWithOptions(request, runtime);
  }

  async describeForwardTableEntriesWithOptions(request: DescribeForwardTableEntriesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeForwardTableEntriesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeForwardTableEntriesResponse>(await this.doRequest("DescribeForwardTableEntries", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeForwardTableEntriesResponse({}));
  }

  async describeForwardTableEntries(request: DescribeForwardTableEntriesRequest): Promise<DescribeForwardTableEntriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeForwardTableEntriesWithOptions(request, runtime);
  }

  async describeEipMonitorDataWithOptions(request: DescribeEipMonitorDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEipMonitorDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEipMonitorDataResponse>(await this.doRequest("DescribeEipMonitorData", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeEipMonitorDataResponse({}));
  }

  async describeEipMonitorData(request: DescribeEipMonitorDataRequest): Promise<DescribeEipMonitorDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeEipMonitorDataWithOptions(request, runtime);
  }

  async describeEipAddressesWithOptions(request: DescribeEipAddressesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEipAddressesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEipAddressesResponse>(await this.doRequest("DescribeEipAddresses", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeEipAddressesResponse({}));
  }

  async describeEipAddresses(request: DescribeEipAddressesRequest): Promise<DescribeEipAddressesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeEipAddressesWithOptions(request, runtime);
  }

  async describeBandwidthPackagesWithOptions(request: DescribeBandwidthPackagesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBandwidthPackagesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBandwidthPackagesResponse>(await this.doRequest("DescribeBandwidthPackages", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeBandwidthPackagesResponse({}));
  }

  async describeBandwidthPackages(request: DescribeBandwidthPackagesRequest): Promise<DescribeBandwidthPackagesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBandwidthPackagesWithOptions(request, runtime);
  }

  async describeAccessPointsWithOptions(request: DescribeAccessPointsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAccessPointsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAccessPointsResponse>(await this.doRequest("DescribeAccessPoints", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DescribeAccessPointsResponse({}));
  }

  async describeAccessPoints(request: DescribeAccessPointsRequest): Promise<DescribeAccessPointsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAccessPointsWithOptions(request, runtime);
  }

  async deleteVSwitchWithOptions(request: DeleteVSwitchRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVSwitchResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVSwitchResponse>(await this.doRequest("DeleteVSwitch", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteVSwitchResponse({}));
  }

  async deleteVSwitch(request: DeleteVSwitchRequest): Promise<DeleteVSwitchResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVSwitchWithOptions(request, runtime);
  }

  async deleteVpcWithOptions(request: DeleteVpcRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVpcResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVpcResponse>(await this.doRequest("DeleteVpc", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteVpcResponse({}));
  }

  async deleteVpc(request: DeleteVpcRequest): Promise<DeleteVpcResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVpcWithOptions(request, runtime);
  }

  async deleteVirtualBorderRouterWithOptions(request: DeleteVirtualBorderRouterRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVirtualBorderRouterResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVirtualBorderRouterResponse>(await this.doRequest("DeleteVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteVirtualBorderRouterResponse({}));
  }

  async deleteVirtualBorderRouter(request: DeleteVirtualBorderRouterRequest): Promise<DeleteVirtualBorderRouterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVirtualBorderRouterWithOptions(request, runtime);
  }

  async deleteRouterInterfaceWithOptions(request: DeleteRouterInterfaceRequest, runtime: $Util.RuntimeOptions): Promise<DeleteRouterInterfaceResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteRouterInterfaceResponse>(await this.doRequest("DeleteRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteRouterInterfaceResponse({}));
  }

  async deleteRouterInterface(request: DeleteRouterInterfaceRequest): Promise<DeleteRouterInterfaceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteRouterInterfaceWithOptions(request, runtime);
  }

  async deleteRouteEntryWithOptions(request: DeleteRouteEntryRequest, runtime: $Util.RuntimeOptions): Promise<DeleteRouteEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteRouteEntryResponse>(await this.doRequest("DeleteRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteRouteEntryResponse({}));
  }

  async deleteRouteEntry(request: DeleteRouteEntryRequest): Promise<DeleteRouteEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteRouteEntryWithOptions(request, runtime);
  }

  async deletePhysicalConnectionWithOptions(request: DeletePhysicalConnectionRequest, runtime: $Util.RuntimeOptions): Promise<DeletePhysicalConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<DeletePhysicalConnectionResponse>(await this.doRequest("DeletePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeletePhysicalConnectionResponse({}));
  }

  async deletePhysicalConnection(request: DeletePhysicalConnectionRequest): Promise<DeletePhysicalConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deletePhysicalConnectionWithOptions(request, runtime);
  }

  async deleteNatGatewayWithOptions(request: DeleteNatGatewayRequest, runtime: $Util.RuntimeOptions): Promise<DeleteNatGatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteNatGatewayResponse>(await this.doRequest("DeleteNatGateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteNatGatewayResponse({}));
  }

  async deleteNatGateway(request: DeleteNatGatewayRequest): Promise<DeleteNatGatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteNatGatewayWithOptions(request, runtime);
  }

  async deleteHaVipWithOptions(request: DeleteHaVipRequest, runtime: $Util.RuntimeOptions): Promise<DeleteHaVipResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteHaVipResponse>(await this.doRequest("DeleteHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteHaVipResponse({}));
  }

  async deleteHaVip(request: DeleteHaVipRequest): Promise<DeleteHaVipResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteHaVipWithOptions(request, runtime);
  }

  async deleteForwardEntryWithOptions(request: DeleteForwardEntryRequest, runtime: $Util.RuntimeOptions): Promise<DeleteForwardEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteForwardEntryResponse>(await this.doRequest("DeleteForwardEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteForwardEntryResponse({}));
  }

  async deleteForwardEntry(request: DeleteForwardEntryRequest): Promise<DeleteForwardEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteForwardEntryWithOptions(request, runtime);
  }

  async deleteBandwidthPackageWithOptions(request: DeleteBandwidthPackageRequest, runtime: $Util.RuntimeOptions): Promise<DeleteBandwidthPackageResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteBandwidthPackageResponse>(await this.doRequest("DeleteBandwidthPackage", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeleteBandwidthPackageResponse({}));
  }

  async deleteBandwidthPackage(request: DeleteBandwidthPackageRequest): Promise<DeleteBandwidthPackageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteBandwidthPackageWithOptions(request, runtime);
  }

  async deactivateRouterInterfaceWithOptions(request: DeactivateRouterInterfaceRequest, runtime: $Util.RuntimeOptions): Promise<DeactivateRouterInterfaceResponse> {
    Util.validateModel(request);
    return $tea.cast<DeactivateRouterInterfaceResponse>(await this.doRequest("DeactivateRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new DeactivateRouterInterfaceResponse({}));
  }

  async deactivateRouterInterface(request: DeactivateRouterInterfaceRequest): Promise<DeactivateRouterInterfaceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deactivateRouterInterfaceWithOptions(request, runtime);
  }

  async createVSwitchWithOptions(request: CreateVSwitchRequest, runtime: $Util.RuntimeOptions): Promise<CreateVSwitchResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateVSwitchResponse>(await this.doRequest("CreateVSwitch", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateVSwitchResponse({}));
  }

  async createVSwitch(request: CreateVSwitchRequest): Promise<CreateVSwitchResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createVSwitchWithOptions(request, runtime);
  }

  async createVpcWithOptions(request: CreateVpcRequest, runtime: $Util.RuntimeOptions): Promise<CreateVpcResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateVpcResponse>(await this.doRequest("CreateVpc", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateVpcResponse({}));
  }

  async createVpc(request: CreateVpcRequest): Promise<CreateVpcResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createVpcWithOptions(request, runtime);
  }

  async createVirtualBorderRouterWithOptions(request: CreateVirtualBorderRouterRequest, runtime: $Util.RuntimeOptions): Promise<CreateVirtualBorderRouterResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateVirtualBorderRouterResponse>(await this.doRequest("CreateVirtualBorderRouter", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateVirtualBorderRouterResponse({}));
  }

  async createVirtualBorderRouter(request: CreateVirtualBorderRouterRequest): Promise<CreateVirtualBorderRouterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createVirtualBorderRouterWithOptions(request, runtime);
  }

  async createRouterInterfaceWithOptions(request: CreateRouterInterfaceRequest, runtime: $Util.RuntimeOptions): Promise<CreateRouterInterfaceResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateRouterInterfaceResponse>(await this.doRequest("CreateRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateRouterInterfaceResponse({}));
  }

  async createRouterInterface(request: CreateRouterInterfaceRequest): Promise<CreateRouterInterfaceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createRouterInterfaceWithOptions(request, runtime);
  }

  async createRouteEntryWithOptions(request: CreateRouteEntryRequest, runtime: $Util.RuntimeOptions): Promise<CreateRouteEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateRouteEntryResponse>(await this.doRequest("CreateRouteEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateRouteEntryResponse({}));
  }

  async createRouteEntry(request: CreateRouteEntryRequest): Promise<CreateRouteEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createRouteEntryWithOptions(request, runtime);
  }

  async createPhysicalConnectionWithOptions(request: CreatePhysicalConnectionRequest, runtime: $Util.RuntimeOptions): Promise<CreatePhysicalConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<CreatePhysicalConnectionResponse>(await this.doRequest("CreatePhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreatePhysicalConnectionResponse({}));
  }

  async createPhysicalConnection(request: CreatePhysicalConnectionRequest): Promise<CreatePhysicalConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createPhysicalConnectionWithOptions(request, runtime);
  }

  async createNatGatewayWithOptions(request: CreateNatGatewayRequest, runtime: $Util.RuntimeOptions): Promise<CreateNatGatewayResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateNatGatewayResponse>(await this.doRequest("CreateNatGateway", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateNatGatewayResponse({}));
  }

  async createNatGateway(request: CreateNatGatewayRequest): Promise<CreateNatGatewayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createNatGatewayWithOptions(request, runtime);
  }

  async createHaVipWithOptions(request: CreateHaVipRequest, runtime: $Util.RuntimeOptions): Promise<CreateHaVipResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateHaVipResponse>(await this.doRequest("CreateHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateHaVipResponse({}));
  }

  async createHaVip(request: CreateHaVipRequest): Promise<CreateHaVipResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createHaVipWithOptions(request, runtime);
  }

  async createForwardEntryWithOptions(request: CreateForwardEntryRequest, runtime: $Util.RuntimeOptions): Promise<CreateForwardEntryResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateForwardEntryResponse>(await this.doRequest("CreateForwardEntry", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CreateForwardEntryResponse({}));
  }

  async createForwardEntry(request: CreateForwardEntryRequest): Promise<CreateForwardEntryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createForwardEntryWithOptions(request, runtime);
  }

  async connectRouterInterfaceWithOptions(request: ConnectRouterInterfaceRequest, runtime: $Util.RuntimeOptions): Promise<ConnectRouterInterfaceResponse> {
    Util.validateModel(request);
    return $tea.cast<ConnectRouterInterfaceResponse>(await this.doRequest("ConnectRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ConnectRouterInterfaceResponse({}));
  }

  async connectRouterInterface(request: ConnectRouterInterfaceRequest): Promise<ConnectRouterInterfaceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.connectRouterInterfaceWithOptions(request, runtime);
  }

  async cancelPhysicalConnectionWithOptions(request: CancelPhysicalConnectionRequest, runtime: $Util.RuntimeOptions): Promise<CancelPhysicalConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelPhysicalConnectionResponse>(await this.doRequest("CancelPhysicalConnection", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new CancelPhysicalConnectionResponse({}));
  }

  async cancelPhysicalConnection(request: CancelPhysicalConnectionRequest): Promise<CancelPhysicalConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelPhysicalConnectionWithOptions(request, runtime);
  }

  async associateHaVipWithOptions(request: AssociateHaVipRequest, runtime: $Util.RuntimeOptions): Promise<AssociateHaVipResponse> {
    Util.validateModel(request);
    return $tea.cast<AssociateHaVipResponse>(await this.doRequest("AssociateHaVip", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AssociateHaVipResponse({}));
  }

  async associateHaVip(request: AssociateHaVipRequest): Promise<AssociateHaVipResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.associateHaVipWithOptions(request, runtime);
  }

  async associateEipAddressWithOptions(request: AssociateEipAddressRequest, runtime: $Util.RuntimeOptions): Promise<AssociateEipAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<AssociateEipAddressResponse>(await this.doRequest("AssociateEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AssociateEipAddressResponse({}));
  }

  async associateEipAddress(request: AssociateEipAddressRequest): Promise<AssociateEipAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.associateEipAddressWithOptions(request, runtime);
  }

  async allocateEipAddressWithOptions(request: AllocateEipAddressRequest, runtime: $Util.RuntimeOptions): Promise<AllocateEipAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<AllocateEipAddressResponse>(await this.doRequest("AllocateEipAddress", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AllocateEipAddressResponse({}));
  }

  async allocateEipAddress(request: AllocateEipAddressRequest): Promise<AllocateEipAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.allocateEipAddressWithOptions(request, runtime);
  }

  async addBandwidthPackageIpsWithOptions(request: AddBandwidthPackageIpsRequest, runtime: $Util.RuntimeOptions): Promise<AddBandwidthPackageIpsResponse> {
    Util.validateModel(request);
    return $tea.cast<AddBandwidthPackageIpsResponse>(await this.doRequest("AddBandwidthPackageIps", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new AddBandwidthPackageIpsResponse({}));
  }

  async addBandwidthPackageIps(request: AddBandwidthPackageIpsRequest): Promise<AddBandwidthPackageIpsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addBandwidthPackageIpsWithOptions(request, runtime);
  }

  async activateRouterInterfaceWithOptions(request: ActivateRouterInterfaceRequest, runtime: $Util.RuntimeOptions): Promise<ActivateRouterInterfaceResponse> {
    Util.validateModel(request);
    return $tea.cast<ActivateRouterInterfaceResponse>(await this.doRequest("ActivateRouterInterface", "HTTPS", "POST", "2016-04-28", "AK", null, $tea.toMap(request), runtime), new ActivateRouterInterfaceResponse({}));
  }

  async activateRouterInterface(request: ActivateRouterInterfaceRequest): Promise<ActivateRouterInterfaceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.activateRouterInterfaceWithOptions(request, runtime);
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
