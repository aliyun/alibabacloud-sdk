<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ActivateRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ActivateRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ActiveFlowLogRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ActiveFlowLogResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddBandwidthPackageIpsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddBandwidthPackageIpsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddBgpNetworkRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddBgpNetworkResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddCommonBandwidthPackageIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddCommonBandwidthPackageIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddGlobalAccelerationInstanceIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddGlobalAccelerationInstanceIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddIPv6TranslatorAclListEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AddIPv6TranslatorAclListEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipAddressProRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipAddressProResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipSegmentAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateEipSegmentAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateIpv6InternetBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AllocateIpv6InternetBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ApplyPhysicalConnectionLOARequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ApplyPhysicalConnectionLOAResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateEipAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateEipAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateGlobalAccelerationInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateGlobalAccelerationInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateHaVipRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateHaVipResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateNetworkAclRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateNetworkAclResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociatePhysicalConnectionToVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociatePhysicalConnectionToVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateRouteTableRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateRouteTableResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateVpcCidrBlockRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AssociateVpcCidrBlockResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AttachDhcpOptionsSetToVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\AttachDhcpOptionsSetToVpcResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelCommonBandwidthPackageIpBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelCommonBandwidthPackageIpBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelExpressCloudConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelExpressCloudConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CancelPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CompletePhysicalConnectionLOARequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CompletePhysicalConnectionLOAResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConnectRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConnectRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConvertBandwidthPackageRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ConvertBandwidthPackageResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CopyNetworkAclEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CopyNetworkAclEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBandwidthPackageRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBandwidthPackageResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBgpGroupRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBgpGroupResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBgpPeerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateBgpPeerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateCommonBandwidthPackageRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateCommonBandwidthPackageResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateCustomerGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateCustomerGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateDhcpOptionsSetRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateDhcpOptionsSetResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateExpressCloudConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateExpressCloudConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateFlowLogRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateFlowLogResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateForwardEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateForwardEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateGlobalAccelerationInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateGlobalAccelerationInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHaVipRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHaVipResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv6EgressOnlyRuleRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv6EgressOnlyRuleResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv6GatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIpv6GatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorAclListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorAclListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateIPv6TranslatorResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionOccupancyOrderRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionOccupancyOrderResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionSetupOrderRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionSetupOrderResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteTableRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteTableResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSnatEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSnatEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSslVpnClientCertRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSslVpnClientCertResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSslVpnServerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateSslVpnServerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpcResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnPbrRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnPbrRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVSwitchRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVSwitchResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeactivateRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeactivateRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeactiveFlowLogRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeactiveFlowLogResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBandwidthPackageRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBandwidthPackageResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpGroupRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpGroupResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpNetworkRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpNetworkResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpPeerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteBgpPeerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteCommonBandwidthPackageRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteCommonBandwidthPackageResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteCustomerGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteCustomerGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteDhcpOptionsSetRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteDhcpOptionsSetResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteExpressCloudConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteExpressCloudConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteExpressConnectRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteExpressConnectResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteFlowLogRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteFlowLogResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteForwardEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteForwardEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteGlobalAccelerationInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteGlobalAccelerationInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteHaVipRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteHaVipResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6EgressOnlyRuleRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6EgressOnlyRuleResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6GatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6GatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6InternetBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIpv6InternetBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorAclListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorAclListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteIPv6TranslatorResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNatGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNatGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNetworkAclRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteNetworkAclResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletePhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletePhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouterInterfaceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouterInterfaceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteTableRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteTableResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSnatEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSnatEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSslVpnClientCertRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSslVpnClientCertResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSslVpnServerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteSslVpnServerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpcResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnPbrRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnPbrRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVpnRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVSwitchRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteVSwitchResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletionProtectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeletionProtectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBandwidthPackagesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBandwidthPackagesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpPeersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpPeersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipMonitorDataRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipMonitorDataResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeForwardTableEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeForwardTableEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHighDefinitionMonitorLogAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHighDefinitionMonitorLogAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNewProjectEipMonitorDataRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNewProjectEipMonitorDataResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOARequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfaceAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfaceAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnServersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnServersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnSslServerLogsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnSslServerLogsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVRoutersRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVRoutersResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DetachDhcpOptionsSetFromVpcRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DetachDhcpOptionsSetFromVpcResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DisableNatGatewayEcsMetricRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DisableNatGatewayEcsMetricResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DisableVpcClassicLinkRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DisableVpcClassicLinkResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableNatGatewayEcsMetricRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableNatGatewayEcsMetricResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnablePhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnablePhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableVpcClassicLinkRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\EnableVpcClassicLinkResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GrantInstanceToCenRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GrantInstanceToCenResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatGatewayEcsMetricRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatGatewayEcsMetricResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBandwidthPackageAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBandwidthPackageAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBandwidthPackageSpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBandwidthPackageSpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBgpGroupAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBgpGroupAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBgpPeerAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyBgpPeerAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageIpBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageIpBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackagePayTypeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackagePayTypeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageSpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCommonBandwidthPackageSpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCustomerGatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyCustomerGatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyEipAddressAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyEipAddressAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressCloudConnectionAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressCloudConnectionAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressCloudConnectionBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressCloudConnectionBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyFlowLogAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyFlowLogAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyForwardEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyForwardEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyGlobalAccelerationInstanceAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyGlobalAccelerationInstanceAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyGlobalAccelerationInstanceSpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyGlobalAccelerationInstanceSpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyHaVipAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyHaVipAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6AddressAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6AddressAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6GatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6GatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6GatewaySpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6GatewaySpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6InternetBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIpv6InternetBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAclAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAclAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAclListEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAclListEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorBandwidthRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorBandwidthResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyIPv6TranslatorEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewaySpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewaySpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNetworkAclAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNetworkAclAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyPhysicalConnectionAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyPhysicalConnectionAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouterInterfaceAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouterInterfaceAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouterInterfaceSpecRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouterInterfaceSpecResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouteTableAttributesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyRouteTableAttributesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySnatEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySnatEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySslVpnClientCertRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySslVpnClientCertResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySslVpnServerRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifySslVpnServerResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVirtualBorderRouterAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVirtualBorderRouterAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnGatewayAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnGatewayAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnPbrRouteEntryWeightRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnPbrRouteEntryWeightResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnRouteEntryWeightRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnRouteEntryWeightResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVRouterAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVRouterAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVSwitchAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVSwitchAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\PublishVpnRouteEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\PublishVpnRouteEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RecoverVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RecoverVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReleaseEipAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReleaseEipAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReleaseEipSegmentAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReleaseEipSegmentAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveBandwidthPackageIpsRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveBandwidthPackageIpsResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveCommonBandwidthPackageIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveCommonBandwidthPackageIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveGlobalAccelerationInstanceIpRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveGlobalAccelerationInstanceIpResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveIPv6TranslatorAclListEntryRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RemoveIPv6TranslatorAclListEntryResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReplaceVpcDhcpOptionsSetRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ReplaceVpcDhcpOptionsSetResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RevokeInstanceFromCenRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\RevokeInstanceFromCenResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TerminatePhysicalConnectionRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TerminatePhysicalConnectionResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TerminateVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\TerminateVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateEipAddressRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateEipAddressResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateGlobalAccelerationInstanceRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateGlobalAccelerationInstanceResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateHaVipRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateHaVipResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateNetworkAclRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateNetworkAclResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociatePhysicalConnectionFromVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociatePhysicalConnectionFromVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateRouteTableRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateRouteTableResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateVpcCidrBlockRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateVpcCidrBlockResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateDhcpOptionsSetAttributeRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateDhcpOptionsSetAttributeResponse;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Vpc extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'vpc.aliyuncs.com',
            'cn-beijing'                  => 'vpc.aliyuncs.com',
            'cn-hangzhou'                 => 'vpc.aliyuncs.com',
            'cn-shanghai'                 => 'vpc.aliyuncs.com',
            'cn-shenzhen'                 => 'vpc.aliyuncs.com',
            'cn-hongkong'                 => 'vpc.aliyuncs.com',
            'ap-southeast-1'              => 'vpc.aliyuncs.com',
            'us-west-1'                   => 'vpc.aliyuncs.com',
            'us-east-1'                   => 'vpc.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'vpc.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'vpc.aliyuncs.com',
            'cn-north-2-gov-1'            => 'vpc.aliyuncs.com',
            'ap-northeast-2-pop'          => 'vpc.aliyuncs.com',
            'cn-beijing-finance-1'        => 'vpc.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'vpc.aliyuncs.com',
            'cn-beijing-gov-1'            => 'vpc.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'vpc.aliyuncs.com',
            'cn-edge-1'                   => 'vpc-nebula.cn-qingdao-nebula.aliyuncs.com',
            'cn-fujian'                   => 'vpc.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'vpc.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'vpc.aliyuncs.com',
            'cn-hangzhou-finance'         => 'vpc.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'vpc.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'vpc.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'vpc.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'vpc.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'vpc.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'vpc.aliyuncs.com',
            'cn-qingdao-nebula'           => 'vpc-nebula.cn-qingdao-nebula.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'vpc.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'vpc.aliyuncs.com',
            'cn-shanghai-inner'           => 'vpc.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'vpc.aliyuncs.com',
            'cn-shenzhen-inner'           => 'vpc.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'vpc.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'vpc.aliyuncs.com',
            'cn-wuhan'                    => 'vpc.aliyuncs.com',
            'cn-yushanfang'               => 'vpc.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'vpc.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'vpc.cn-zhangjiakou.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'vpc-nebula.cn-qingdao-nebula.aliyuncs.com',
            'eu-west-1-oxs'               => 'vpc-nebula.cn-shenzhen-cloudstone.aliyuncs.com',
            'rus-west-1-pop'              => 'vpc.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vpc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ListNatGatewayEcsMetricRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListNatGatewayEcsMetricResponse
     */
    public function listNatGatewayEcsMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListNatGatewayEcsMetricResponse::fromMap($this->doRequest('ListNatGatewayEcsMetric', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListNatGatewayEcsMetricRequest $request
     *
     * @return ListNatGatewayEcsMetricResponse
     */
    public function listNatGatewayEcsMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNatGatewayEcsMetricWithOptions($request, $runtime);
    }

    /**
     * @param DisableNatGatewayEcsMetricRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DisableNatGatewayEcsMetricResponse
     */
    public function disableNatGatewayEcsMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableNatGatewayEcsMetricResponse::fromMap($this->doRequest('DisableNatGatewayEcsMetric', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DisableNatGatewayEcsMetricRequest $request
     *
     * @return DisableNatGatewayEcsMetricResponse
     */
    public function disableNatGatewayEcsMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableNatGatewayEcsMetricWithOptions($request, $runtime);
    }

    /**
     * @param EnableNatGatewayEcsMetricRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableNatGatewayEcsMetricResponse
     */
    public function enableNatGatewayEcsMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableNatGatewayEcsMetricResponse::fromMap($this->doRequest('EnableNatGatewayEcsMetric', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param EnableNatGatewayEcsMetricRequest $request
     *
     * @return EnableNatGatewayEcsMetricResponse
     */
    public function enableNatGatewayEcsMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableNatGatewayEcsMetricWithOptions($request, $runtime);
    }

    /**
     * @param CreateDhcpOptionsSetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDhcpOptionsSetResponse
     */
    public function createDhcpOptionsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDhcpOptionsSetResponse::fromMap($this->doRequest('CreateDhcpOptionsSet', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateDhcpOptionsSetRequest $request
     *
     * @return CreateDhcpOptionsSetResponse
     */
    public function createDhcpOptionsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDhcpOptionsSetWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceVpcDhcpOptionsSetRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReplaceVpcDhcpOptionsSetResponse
     */
    public function replaceVpcDhcpOptionsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReplaceVpcDhcpOptionsSetResponse::fromMap($this->doRequest('ReplaceVpcDhcpOptionsSet', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ReplaceVpcDhcpOptionsSetRequest $request
     *
     * @return ReplaceVpcDhcpOptionsSetResponse
     */
    public function replaceVpcDhcpOptionsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceVpcDhcpOptionsSetWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDhcpOptionsSetAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateDhcpOptionsSetAttributeResponse
     */
    public function updateDhcpOptionsSetAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDhcpOptionsSetAttributeResponse::fromMap($this->doRequest('UpdateDhcpOptionsSetAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateDhcpOptionsSetAttributeRequest $request
     *
     * @return UpdateDhcpOptionsSetAttributeResponse
     */
    public function updateDhcpOptionsSetAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDhcpOptionsSetAttributeWithOptions($request, $runtime);
    }

    /**
     * @param GetDhcpOptionsSetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDhcpOptionsSetResponse
     */
    public function getDhcpOptionsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDhcpOptionsSetResponse::fromMap($this->doRequest('GetDhcpOptionsSet', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetDhcpOptionsSetRequest $request
     *
     * @return GetDhcpOptionsSetResponse
     */
    public function getDhcpOptionsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDhcpOptionsSetWithOptions($request, $runtime);
    }

    /**
     * @param ListDhcpOptionsSetsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDhcpOptionsSetsResponse
     */
    public function listDhcpOptionsSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDhcpOptionsSetsResponse::fromMap($this->doRequest('ListDhcpOptionsSets', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListDhcpOptionsSetsRequest $request
     *
     * @return ListDhcpOptionsSetsResponse
     */
    public function listDhcpOptionsSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDhcpOptionsSetsWithOptions($request, $runtime);
    }

    /**
     * @param DetachDhcpOptionsSetFromVpcRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetachDhcpOptionsSetFromVpcResponse
     */
    public function detachDhcpOptionsSetFromVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DetachDhcpOptionsSetFromVpcResponse::fromMap($this->doRequest('DetachDhcpOptionsSetFromVpc', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetachDhcpOptionsSetFromVpcRequest $request
     *
     * @return DetachDhcpOptionsSetFromVpcResponse
     */
    public function detachDhcpOptionsSetFromVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDhcpOptionsSetFromVpcWithOptions($request, $runtime);
    }

    /**
     * @param AttachDhcpOptionsSetToVpcRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AttachDhcpOptionsSetToVpcResponse
     */
    public function attachDhcpOptionsSetToVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AttachDhcpOptionsSetToVpcResponse::fromMap($this->doRequest('AttachDhcpOptionsSetToVpc', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AttachDhcpOptionsSetToVpcRequest $request
     *
     * @return AttachDhcpOptionsSetToVpcResponse
     */
    public function attachDhcpOptionsSetToVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDhcpOptionsSetToVpcWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDhcpOptionsSetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDhcpOptionsSetResponse
     */
    public function deleteDhcpOptionsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDhcpOptionsSetResponse::fromMap($this->doRequest('DeleteDhcpOptionsSet', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteDhcpOptionsSetRequest $request
     *
     * @return DeleteDhcpOptionsSetResponse
     */
    public function deleteDhcpOptionsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDhcpOptionsSetWithOptions($request, $runtime);
    }

    /**
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RenewInstanceResponse::fromMap($this->doRequest('RenewInstance', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAutoRenewAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceAutoRenewAttributeResponse::fromMap($this->doRequest('DescribeInstanceAutoRenewAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeInstanceAutoRenewAttributeRequest $request
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAutoRenewalAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceAutoRenewalAttributeResponse::fromMap($this->doRequest('ModifyInstanceAutoRenewalAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyInstanceAutoRenewalAttributeRequest $request
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseEipSegmentAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseEipSegmentAddressResponse
     */
    public function releaseEipSegmentAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleaseEipSegmentAddressResponse::fromMap($this->doRequest('ReleaseEipSegmentAddress', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ReleaseEipSegmentAddressRequest $request
     *
     * @return ReleaseEipSegmentAddressResponse
     */
    public function releaseEipSegmentAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseEipSegmentAddressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEipSegmentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEipSegmentResponse
     */
    public function describeEipSegmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEipSegmentResponse::fromMap($this->doRequest('DescribeEipSegment', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeEipSegmentRequest $request
     *
     * @return DescribeEipSegmentResponse
     */
    public function describeEipSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipSegmentWithOptions($request, $runtime);
    }

    /**
     * @param AllocateEipSegmentAddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AllocateEipSegmentAddressResponse
     */
    public function allocateEipSegmentAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AllocateEipSegmentAddressResponse::fromMap($this->doRequest('AllocateEipSegmentAddress', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AllocateEipSegmentAddressRequest $request
     *
     * @return AllocateEipSegmentAddressResponse
     */
    public function allocateEipSegmentAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateEipSegmentAddressWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateVpcCidrBlockRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UnassociateVpcCidrBlockResponse
     */
    public function unassociateVpcCidrBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnassociateVpcCidrBlockResponse::fromMap($this->doRequest('UnassociateVpcCidrBlock', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UnassociateVpcCidrBlockRequest $request
     *
     * @return UnassociateVpcCidrBlockResponse
     */
    public function unassociateVpcCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateVpcCidrBlockWithOptions($request, $runtime);
    }

    /**
     * @param AssociateVpcCidrBlockRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AssociateVpcCidrBlockResponse
     */
    public function associateVpcCidrBlockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AssociateVpcCidrBlockResponse::fromMap($this->doRequest('AssociateVpcCidrBlock', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssociateVpcCidrBlockRequest $request
     *
     * @return AssociateVpcCidrBlockResponse
     */
    public function associateVpcCidrBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateVpcCidrBlockWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouterInterfaceAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeRouterInterfaceAttributeResponse
     */
    public function describeRouterInterfaceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRouterInterfaceAttributeResponse::fromMap($this->doRequest('DescribeRouterInterfaceAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeRouterInterfaceAttributeRequest $request
     *
     * @return DescribeRouterInterfaceAttributeResponse
     */
    public function describeRouterInterfaceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouterInterfaceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteExpressCloudConnectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteExpressCloudConnectionResponse
     */
    public function deleteExpressCloudConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteExpressCloudConnectionResponse::fromMap($this->doRequest('DeleteExpressCloudConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteExpressCloudConnectionRequest $request
     *
     * @return DeleteExpressCloudConnectionResponse
     */
    public function deleteExpressCloudConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressCloudConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CancelExpressCloudConnectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelExpressCloudConnectionResponse
     */
    public function cancelExpressCloudConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelExpressCloudConnectionResponse::fromMap($this->doRequest('CancelExpressCloudConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CancelExpressCloudConnectionRequest $request
     *
     * @return CancelExpressCloudConnectionResponse
     */
    public function cancelExpressCloudConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelExpressCloudConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeletionProtectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeletionProtectionResponse
     */
    public function deletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletionProtectionResponse::fromMap($this->doRequest('DeletionProtection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeletionProtectionRequest $request
     *
     * @return DeletionProtectionResponse
     */
    public function deletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEipGatewayInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEipGatewayInfoResponse
     */
    public function describeEipGatewayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEipGatewayInfoResponse::fromMap($this->doRequest('DescribeEipGatewayInfo', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeEipGatewayInfoRequest $request
     *
     * @return DescribeEipGatewayInfoResponse
     */
    public function describeEipGatewayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipGatewayInfoWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBgpPeerAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyBgpPeerAttributeResponse
     */
    public function modifyBgpPeerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyBgpPeerAttributeResponse::fromMap($this->doRequest('ModifyBgpPeerAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyBgpPeerAttributeRequest $request
     *
     * @return ModifyBgpPeerAttributeResponse
     */
    public function modifyBgpPeerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBgpPeerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnSslServerLogsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVpnSslServerLogsResponse
     */
    public function describeVpnSslServerLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpnSslServerLogsResponse::fromMap($this->doRequest('DescribeVpnSslServerLogs', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVpnSslServerLogsRequest $request
     *
     * @return DescribeVpnSslServerLogsResponse
     */
    public function describeVpnSslServerLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnSslServerLogsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyExpressCloudConnectionBandwidthRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyExpressCloudConnectionBandwidthResponse
     */
    public function modifyExpressCloudConnectionBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyExpressCloudConnectionBandwidthResponse::fromMap($this->doRequest('ModifyExpressCloudConnectionBandwidth', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyExpressCloudConnectionBandwidthRequest $request
     *
     * @return ModifyExpressCloudConnectionBandwidthResponse
     */
    public function modifyExpressCloudConnectionBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressCloudConnectionBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyExpressCloudConnectionAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyExpressCloudConnectionAttributeResponse
     */
    public function modifyExpressCloudConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyExpressCloudConnectionAttributeResponse::fromMap($this->doRequest('ModifyExpressCloudConnectionAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyExpressCloudConnectionAttributeRequest $request
     *
     * @return ModifyExpressCloudConnectionAttributeResponse
     */
    public function modifyExpressCloudConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExpressCloudConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExpressCloudConnectionsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeExpressCloudConnectionsResponse
     */
    public function describeExpressCloudConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeExpressCloudConnectionsResponse::fromMap($this->doRequest('DescribeExpressCloudConnections', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeExpressCloudConnectionsRequest $request
     *
     * @return DescribeExpressCloudConnectionsResponse
     */
    public function describeExpressCloudConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressCloudConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param CreateExpressCloudConnectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateExpressCloudConnectionResponse
     */
    public function createExpressCloudConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateExpressCloudConnectionResponse::fromMap($this->doRequest('CreateExpressCloudConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateExpressCloudConnectionRequest $request
     *
     * @return CreateExpressCloudConnectionResponse
     */
    public function createExpressCloudConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExpressCloudConnectionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNetworkAclEntriesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateNetworkAclEntriesResponse
     */
    public function updateNetworkAclEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateNetworkAclEntriesResponse::fromMap($this->doRequest('UpdateNetworkAclEntries', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateNetworkAclEntriesRequest $request
     *
     * @return UpdateNetworkAclEntriesResponse
     */
    public function updateNetworkAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkAclEntriesWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateNetworkAclRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateNetworkAclResponse
     */
    public function unassociateNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnassociateNetworkAclResponse::fromMap($this->doRequest('UnassociateNetworkAcl', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UnassociateNetworkAclRequest $request
     *
     * @return UnassociateNetworkAclResponse
     */
    public function unassociateNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateNetworkAclWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNetworkAclAttributesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyNetworkAclAttributesResponse
     */
    public function modifyNetworkAclAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyNetworkAclAttributesResponse::fromMap($this->doRequest('ModifyNetworkAclAttributes', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyNetworkAclAttributesRequest $request
     *
     * @return ModifyNetworkAclAttributesResponse
     */
    public function modifyNetworkAclAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkAclAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkAclsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNetworkAclsResponse
     */
    public function describeNetworkAclsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeNetworkAclsResponse::fromMap($this->doRequest('DescribeNetworkAcls', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeNetworkAclsRequest $request
     *
     * @return DescribeNetworkAclsResponse
     */
    public function describeNetworkAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkAclsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkAclAttributesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeNetworkAclAttributesResponse
     */
    public function describeNetworkAclAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeNetworkAclAttributesResponse::fromMap($this->doRequest('DescribeNetworkAclAttributes', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeNetworkAclAttributesRequest $request
     *
     * @return DescribeNetworkAclAttributesResponse
     */
    public function describeNetworkAclAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkAclAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNetworkAclRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteNetworkAclResponse
     */
    public function deleteNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteNetworkAclResponse::fromMap($this->doRequest('DeleteNetworkAcl', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteNetworkAclRequest $request
     *
     * @return DeleteNetworkAclResponse
     */
    public function deleteNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkAclWithOptions($request, $runtime);
    }

    /**
     * @param CreateNetworkAclRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateNetworkAclResponse
     */
    public function createNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateNetworkAclResponse::fromMap($this->doRequest('CreateNetworkAcl', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateNetworkAclRequest $request
     *
     * @return CreateNetworkAclResponse
     */
    public function createNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkAclWithOptions($request, $runtime);
    }

    /**
     * @param CopyNetworkAclEntriesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CopyNetworkAclEntriesResponse
     */
    public function copyNetworkAclEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CopyNetworkAclEntriesResponse::fromMap($this->doRequest('CopyNetworkAclEntries', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CopyNetworkAclEntriesRequest $request
     *
     * @return CopyNetworkAclEntriesResponse
     */
    public function copyNetworkAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyNetworkAclEntriesWithOptions($request, $runtime);
    }

    /**
     * @param AssociateNetworkAclRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AssociateNetworkAclResponse
     */
    public function associateNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AssociateNetworkAclResponse::fromMap($this->doRequest('AssociateNetworkAcl', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssociateNetworkAclRequest $request
     *
     * @return AssociateNetworkAclResponse
     */
    public function associateNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateNetworkAclWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCommonBandwidthPackageIpBandwidthRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ModifyCommonBandwidthPackageIpBandwidthResponse
     */
    public function modifyCommonBandwidthPackageIpBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCommonBandwidthPackageIpBandwidthResponse::fromMap($this->doRequest('ModifyCommonBandwidthPackageIpBandwidth', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyCommonBandwidthPackageIpBandwidthRequest $request
     *
     * @return ModifyCommonBandwidthPackageIpBandwidthResponse
     */
    public function modifyCommonBandwidthPackageIpBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommonBandwidthPackageIpBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param CancelCommonBandwidthPackageIpBandwidthRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return CancelCommonBandwidthPackageIpBandwidthResponse
     */
    public function cancelCommonBandwidthPackageIpBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelCommonBandwidthPackageIpBandwidthResponse::fromMap($this->doRequest('CancelCommonBandwidthPackageIpBandwidth', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CancelCommonBandwidthPackageIpBandwidthRequest $request
     *
     * @return CancelCommonBandwidthPackageIpBandwidthResponse
     */
    public function cancelCommonBandwidthPackageIpBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCommonBandwidthPackageIpBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpnPbrRouteEntryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVpnPbrRouteEntryResponse
     */
    public function createVpnPbrRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVpnPbrRouteEntryResponse::fromMap($this->doRequest('CreateVpnPbrRouteEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateVpnPbrRouteEntryRequest $request
     *
     * @return CreateVpnPbrRouteEntryResponse
     */
    public function createVpnPbrRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpnPbrRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpnRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVpnRouteEntryResponse
     */
    public function createVpnRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVpnRouteEntryResponse::fromMap($this->doRequest('CreateVpnRouteEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateVpnRouteEntryRequest $request
     *
     * @return CreateVpnRouteEntryResponse
     */
    public function createVpnRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpnRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpnPbrRouteEntryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVpnPbrRouteEntryResponse
     */
    public function deleteVpnPbrRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVpnPbrRouteEntryResponse::fromMap($this->doRequest('DeleteVpnPbrRouteEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteVpnPbrRouteEntryRequest $request
     *
     * @return DeleteVpnPbrRouteEntryResponse
     */
    public function deleteVpnPbrRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpnPbrRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpnRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVpnRouteEntryResponse
     */
    public function deleteVpnRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVpnRouteEntryResponse::fromMap($this->doRequest('DeleteVpnRouteEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteVpnRouteEntryRequest $request
     *
     * @return DeleteVpnRouteEntryResponse
     */
    public function deleteVpnRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpnRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnRouteEntriesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVpnRouteEntriesResponse
     */
    public function describeVpnRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpnRouteEntriesResponse::fromMap($this->doRequest('DescribeVpnRouteEntries', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVpnRouteEntriesRequest $request
     *
     * @return DescribeVpnRouteEntriesResponse
     */
    public function describeVpnRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnPbrRouteEntriesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVpnPbrRouteEntriesResponse
     */
    public function describeVpnPbrRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpnPbrRouteEntriesResponse::fromMap($this->doRequest('DescribeVpnPbrRouteEntries', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVpnPbrRouteEntriesRequest $request
     *
     * @return DescribeVpnPbrRouteEntriesResponse
     */
    public function describeVpnPbrRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnPbrRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param PublishVpnRouteEntryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PublishVpnRouteEntryResponse
     */
    public function publishVpnRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PublishVpnRouteEntryResponse::fromMap($this->doRequest('PublishVpnRouteEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param PublishVpnRouteEntryRequest $request
     *
     * @return PublishVpnRouteEntryResponse
     */
    public function publishVpnRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishVpnRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpnRouteEntryWeightRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyVpnRouteEntryWeightResponse
     */
    public function modifyVpnRouteEntryWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyVpnRouteEntryWeightResponse::fromMap($this->doRequest('ModifyVpnRouteEntryWeight', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyVpnRouteEntryWeightRequest $request
     *
     * @return ModifyVpnRouteEntryWeightResponse
     */
    public function modifyVpnRouteEntryWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpnRouteEntryWeightWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpnPbrRouteEntryWeightRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyVpnPbrRouteEntryWeightResponse
     */
    public function modifyVpnPbrRouteEntryWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyVpnPbrRouteEntryWeightResponse::fromMap($this->doRequest('ModifyVpnPbrRouteEntryWeight', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyVpnPbrRouteEntryWeightRequest $request
     *
     * @return ModifyVpnPbrRouteEntryWeightResponse
     */
    public function modifyVpnPbrRouteEntryWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpnPbrRouteEntryWeightWithOptions($request, $runtime);
    }

    /**
     * DescribePhysicalConnectionLOA Query LOA information about the physical connection.
     *   * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp1ca4wca27exxxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param DescribePhysicalConnectionLOARequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePhysicalConnectionLOAResponse
     */
    public function describePhysicalConnectionLOAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePhysicalConnectionLOAResponse::fromMap($this->doRequest('DescribePhysicalConnectionLOA', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * DescribePhysicalConnectionLOA Query LOA information about the physical connection.
     *   * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp1ca4wca27exxxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param DescribePhysicalConnectionLOARequest $request
     *
     * @return DescribePhysicalConnectionLOAResponse
     */
    public function describePhysicalConnectionLOA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhysicalConnectionLOAWithOptions($request, $runtime);
    }

    /**
     * CreatePhysicalConnectionSetupOrder Create an order for the resource fee.
     *   * request demo:   * http(s)://[Endpoint]/?AccessPointId=ap-cn-beijing-ft-A
     *   * &LineOperator=CT
     *   * &RegionId=cn-shanghai
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param CreatePhysicalConnectionSetupOrderRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreatePhysicalConnectionSetupOrderResponse
     */
    public function createPhysicalConnectionSetupOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePhysicalConnectionSetupOrderResponse::fromMap($this->doRequest('CreatePhysicalConnectionSetupOrder', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * CreatePhysicalConnectionSetupOrder Create an order for the resource fee.
     *   * request demo:   * http(s)://[Endpoint]/?AccessPointId=ap-cn-beijing-ft-A
     *   * &LineOperator=CT
     *   * &RegionId=cn-shanghai
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param CreatePhysicalConnectionSetupOrderRequest $request
     *
     * @return CreatePhysicalConnectionSetupOrderResponse
     */
    public function createPhysicalConnectionSetupOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhysicalConnectionSetupOrderWithOptions($request, $runtime);
    }

    /**
     * CreatePhysicalConnectionOccupancyOrder Create an order for the initial installation fee.
     *   * request demo:   * http(s)://[Endpoint]/?PhysicalConnectionId=pc-bp1hp0wr072f6ambni141
     *   * &RegionId=cn-hangzhou
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param CreatePhysicalConnectionOccupancyOrderRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return CreatePhysicalConnectionOccupancyOrderResponse
     */
    public function createPhysicalConnectionOccupancyOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePhysicalConnectionOccupancyOrderResponse::fromMap($this->doRequest('CreatePhysicalConnectionOccupancyOrder', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * CreatePhysicalConnectionOccupancyOrder Create an order for the initial installation fee.
     *   * request demo:   * http(s)://[Endpoint]/?PhysicalConnectionId=pc-bp1hp0wr072f6ambni141
     *   * &RegionId=cn-hangzhou
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param CreatePhysicalConnectionOccupancyOrderRequest $request
     *
     * @return CreatePhysicalConnectionOccupancyOrderResponse
     */
    public function createPhysicalConnectionOccupancyOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhysicalConnectionOccupancyOrderWithOptions($request, $runtime);
    }

    /**
     * CompletePhysicalConnectionLOA Report information about the completed installation of the leased line.
     *   * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp10tvlhnwkwxxxxxxxxxx
     *   * &LineCode=aaa111
     *   * &LineLabel=bbb222
     *   * &RegionId=cn-hangzhou
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param CompletePhysicalConnectionLOARequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CompletePhysicalConnectionLOAResponse
     */
    public function completePhysicalConnectionLOAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CompletePhysicalConnectionLOAResponse::fromMap($this->doRequest('CompletePhysicalConnectionLOA', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * CompletePhysicalConnectionLOA Report information about the completed installation of the leased line.
     *   * request demo:   * http(s)://[Endpoint]/?InstanceId=pc-bp10tvlhnwkwxxxxxxxxxx
     *   * &LineCode=aaa111
     *   * &LineLabel=bbb222
     *   * &RegionId=cn-hangzhou
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param CompletePhysicalConnectionLOARequest $request
     *
     * @return CompletePhysicalConnectionLOAResponse
     */
    public function completePhysicalConnectionLOA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completePhysicalConnectionLOAWithOptions($request, $runtime);
    }

    /**
     * ApplyPhysicalConnectionLOA Apply for the LOA.
     *   * request demo:   * http(s)://[Endpoint]/?CompanyName=company
     *   * &ConstructionTime=2019-02-28T16:00:00.000Z
     *   * &InstanceId=pc-bp1qrb3044eqixxxxxxxx
     *   * &LineType=SDH
     *   * &PeerLocation=Hangzhou
     *   * &RegionId=cn-hangzhou
     *   * &Si=Alibaba Cloud
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param ApplyPhysicalConnectionLOARequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ApplyPhysicalConnectionLOAResponse
     */
    public function applyPhysicalConnectionLOAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ApplyPhysicalConnectionLOAResponse::fromMap($this->doRequest('ApplyPhysicalConnectionLOA', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * ApplyPhysicalConnectionLOA Apply for the LOA.
     *   * request demo:   * http(s)://[Endpoint]/?CompanyName=company
     *   * &ConstructionTime=2019-02-28T16:00:00.000Z
     *   * &InstanceId=pc-bp1qrb3044eqixxxxxxxx
     *   * &LineType=SDH
     *   * &PeerLocation=Hangzhou
     *   * &RegionId=cn-hangzhou
     *   * &Si=Alibaba Cloud
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param ApplyPhysicalConnectionLOARequest $request
     *
     * @return ApplyPhysicalConnectionLOAResponse
     */
    public function applyPhysicalConnectionLOA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyPhysicalConnectionLOAWithOptions($request, $runtime);
    }

    /**
     * @param ConvertBandwidthPackageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConvertBandwidthPackageResponse
     */
    public function convertBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConvertBandwidthPackageResponse::fromMap($this->doRequest('ConvertBandwidthPackage', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ConvertBandwidthPackageRequest $request
     *
     * @return ConvertBandwidthPackageResponse
     */
    public function convertBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRouteEntryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyRouteEntryResponse
     */
    public function modifyRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyRouteEntryResponse::fromMap($this->doRequest('ModifyRouteEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyRouteEntryRequest $request
     *
     * @return ModifyRouteEntryResponse
     */
    public function modifyRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouteEntryListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRouteEntryListResponse
     */
    public function describeRouteEntryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRouteEntryListResponse::fromMap($this->doRequest('DescribeRouteEntryList', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeRouteEntryListRequest $request
     *
     * @return DescribeRouteEntryListResponse
     */
    public function describeRouteEntryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteEntryListWithOptions($request, $runtime);
    }

    /**
     * @param CreateIPv6TranslatorAclListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateIPv6TranslatorAclListResponse
     */
    public function createIPv6TranslatorAclListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateIPv6TranslatorAclListResponse::fromMap($this->doRequest('CreateIPv6TranslatorAclList', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateIPv6TranslatorAclListRequest $request
     *
     * @return CreateIPv6TranslatorAclListResponse
     */
    public function createIPv6TranslatorAclList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIPv6TranslatorAclListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIPv6TranslatorAclListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteIPv6TranslatorAclListResponse
     */
    public function deleteIPv6TranslatorAclListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteIPv6TranslatorAclListResponse::fromMap($this->doRequest('DeleteIPv6TranslatorAclList', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteIPv6TranslatorAclListRequest $request
     *
     * @return DeleteIPv6TranslatorAclListResponse
     */
    public function deleteIPv6TranslatorAclList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIPv6TranslatorAclListWithOptions($request, $runtime);
    }

    /**
     * @param AddIPv6TranslatorAclListEntryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddIPv6TranslatorAclListEntryResponse
     */
    public function addIPv6TranslatorAclListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddIPv6TranslatorAclListEntryResponse::fromMap($this->doRequest('AddIPv6TranslatorAclListEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddIPv6TranslatorAclListEntryRequest $request
     *
     * @return AddIPv6TranslatorAclListEntryResponse
     */
    public function addIPv6TranslatorAclListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIPv6TranslatorAclListEntryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIPv6TranslatorAclListsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeIPv6TranslatorAclListsResponse
     */
    public function describeIPv6TranslatorAclListsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIPv6TranslatorAclListsResponse::fromMap($this->doRequest('DescribeIPv6TranslatorAclLists', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeIPv6TranslatorAclListsRequest $request
     *
     * @return DescribeIPv6TranslatorAclListsResponse
     */
    public function describeIPv6TranslatorAclLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIPv6TranslatorAclListsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIPv6TranslatorAclAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyIPv6TranslatorAclAttributeResponse
     */
    public function modifyIPv6TranslatorAclAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyIPv6TranslatorAclAttributeResponse::fromMap($this->doRequest('ModifyIPv6TranslatorAclAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorAclAttributeRequest $request
     *
     * @return ModifyIPv6TranslatorAclAttributeResponse
     */
    public function modifyIPv6TranslatorAclAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorAclAttributeWithOptions($request, $runtime);
    }

    /**
     * @param RemoveIPv6TranslatorAclListEntryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveIPv6TranslatorAclListEntryResponse
     */
    public function removeIPv6TranslatorAclListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveIPv6TranslatorAclListEntryResponse::fromMap($this->doRequest('RemoveIPv6TranslatorAclListEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveIPv6TranslatorAclListEntryRequest $request
     *
     * @return RemoveIPv6TranslatorAclListEntryResponse
     */
    public function removeIPv6TranslatorAclListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIPv6TranslatorAclListEntryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIPv6TranslatorAclListAttributesRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeIPv6TranslatorAclListAttributesResponse
     */
    public function describeIPv6TranslatorAclListAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIPv6TranslatorAclListAttributesResponse::fromMap($this->doRequest('DescribeIPv6TranslatorAclListAttributes', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeIPv6TranslatorAclListAttributesRequest $request
     *
     * @return DescribeIPv6TranslatorAclListAttributesResponse
     */
    public function describeIPv6TranslatorAclListAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIPv6TranslatorAclListAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIPv6TranslatorAclListEntryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyIPv6TranslatorAclListEntryResponse
     */
    public function modifyIPv6TranslatorAclListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyIPv6TranslatorAclListEntryResponse::fromMap($this->doRequest('ModifyIPv6TranslatorAclListEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorAclListEntryRequest $request
     *
     * @return ModifyIPv6TranslatorAclListEntryResponse
     */
    public function modifyIPv6TranslatorAclListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorAclListEntryWithOptions($request, $runtime);
    }

    /**
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnTagResourcesResponse::fromMap($this->doRequest('UnTagResources', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpv6InternetBandwidthRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyIpv6InternetBandwidthResponse
     */
    public function modifyIpv6InternetBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyIpv6InternetBandwidthResponse::fromMap($this->doRequest('ModifyIpv6InternetBandwidth', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyIpv6InternetBandwidthRequest $request
     *
     * @return ModifyIpv6InternetBandwidthResponse
     */
    public function modifyIpv6InternetBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpv6InternetBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpv6GatewaySpecRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyIpv6GatewaySpecResponse
     */
    public function modifyIpv6GatewaySpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyIpv6GatewaySpecResponse::fromMap($this->doRequest('ModifyIpv6GatewaySpec', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyIpv6GatewaySpecRequest $request
     *
     * @return ModifyIpv6GatewaySpecResponse
     */
    public function modifyIpv6GatewaySpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpv6GatewaySpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpv6GatewayAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyIpv6GatewayAttributeResponse
     */
    public function modifyIpv6GatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyIpv6GatewayAttributeResponse::fromMap($this->doRequest('ModifyIpv6GatewayAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyIpv6GatewayAttributeRequest $request
     *
     * @return ModifyIpv6GatewayAttributeResponse
     */
    public function modifyIpv6GatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpv6GatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpv6AddressAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyIpv6AddressAttributeResponse
     */
    public function modifyIpv6AddressAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyIpv6AddressAttributeResponse::fromMap($this->doRequest('ModifyIpv6AddressAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyIpv6AddressAttributeRequest $request
     *
     * @return ModifyIpv6AddressAttributeResponse
     */
    public function modifyIpv6AddressAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpv6AddressAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv6GatewaysRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeIpv6GatewaysResponse
     */
    public function describeIpv6GatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIpv6GatewaysResponse::fromMap($this->doRequest('DescribeIpv6Gateways', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeIpv6GatewaysRequest $request
     *
     * @return DescribeIpv6GatewaysResponse
     */
    public function describeIpv6Gateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv6GatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv6GatewayAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeIpv6GatewayAttributeResponse
     */
    public function describeIpv6GatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIpv6GatewayAttributeResponse::fromMap($this->doRequest('DescribeIpv6GatewayAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeIpv6GatewayAttributeRequest $request
     *
     * @return DescribeIpv6GatewayAttributeResponse
     */
    public function describeIpv6GatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv6GatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv6EgressOnlyRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeIpv6EgressOnlyRulesResponse
     */
    public function describeIpv6EgressOnlyRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIpv6EgressOnlyRulesResponse::fromMap($this->doRequest('DescribeIpv6EgressOnlyRules', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeIpv6EgressOnlyRulesRequest $request
     *
     * @return DescribeIpv6EgressOnlyRulesResponse
     */
    public function describeIpv6EgressOnlyRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv6EgressOnlyRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv6AddressesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeIpv6AddressesResponse
     */
    public function describeIpv6AddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIpv6AddressesResponse::fromMap($this->doRequest('DescribeIpv6Addresses', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeIpv6AddressesRequest $request
     *
     * @return DescribeIpv6AddressesResponse
     */
    public function describeIpv6Addresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv6AddressesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpv6InternetBandwidthRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteIpv6InternetBandwidthResponse
     */
    public function deleteIpv6InternetBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteIpv6InternetBandwidthResponse::fromMap($this->doRequest('DeleteIpv6InternetBandwidth', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteIpv6InternetBandwidthRequest $request
     *
     * @return DeleteIpv6InternetBandwidthResponse
     */
    public function deleteIpv6InternetBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpv6InternetBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpv6GatewayRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteIpv6GatewayResponse
     */
    public function deleteIpv6GatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteIpv6GatewayResponse::fromMap($this->doRequest('DeleteIpv6Gateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteIpv6GatewayRequest $request
     *
     * @return DeleteIpv6GatewayResponse
     */
    public function deleteIpv6Gateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpv6GatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpv6EgressOnlyRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteIpv6EgressOnlyRuleResponse
     */
    public function deleteIpv6EgressOnlyRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteIpv6EgressOnlyRuleResponse::fromMap($this->doRequest('DeleteIpv6EgressOnlyRule', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteIpv6EgressOnlyRuleRequest $request
     *
     * @return DeleteIpv6EgressOnlyRuleResponse
     */
    public function deleteIpv6EgressOnlyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpv6EgressOnlyRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpv6GatewayRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateIpv6GatewayResponse
     */
    public function createIpv6GatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateIpv6GatewayResponse::fromMap($this->doRequest('CreateIpv6Gateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateIpv6GatewayRequest $request
     *
     * @return CreateIpv6GatewayResponse
     */
    public function createIpv6Gateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpv6GatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpv6EgressOnlyRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateIpv6EgressOnlyRuleResponse
     */
    public function createIpv6EgressOnlyRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateIpv6EgressOnlyRuleResponse::fromMap($this->doRequest('CreateIpv6EgressOnlyRule', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateIpv6EgressOnlyRuleRequest $request
     *
     * @return CreateIpv6EgressOnlyRuleResponse
     */
    public function createIpv6EgressOnlyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpv6EgressOnlyRuleWithOptions($request, $runtime);
    }

    /**
     * @param AllocateIpv6InternetBandwidthRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AllocateIpv6InternetBandwidthResponse
     */
    public function allocateIpv6InternetBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AllocateIpv6InternetBandwidthResponse::fromMap($this->doRequest('AllocateIpv6InternetBandwidth', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AllocateIpv6InternetBandwidthRequest $request
     *
     * @return AllocateIpv6InternetBandwidthResponse
     */
    public function allocateIpv6InternetBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateIpv6InternetBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param DeleteExpressConnectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteExpressConnectResponse
     */
    public function deleteExpressConnectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteExpressConnectResponse::fromMap($this->doRequest('DeleteExpressConnect', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteExpressConnectRequest $request
     *
     * @return DeleteExpressConnectResponse
     */
    public function deleteExpressConnect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressConnectWithOptions($request, $runtime);
    }

    /**
     * @param CreateIPv6TranslatorRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateIPv6TranslatorResponse
     */
    public function createIPv6TranslatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateIPv6TranslatorResponse::fromMap($this->doRequest('CreateIPv6Translator', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateIPv6TranslatorRequest $request
     *
     * @return CreateIPv6TranslatorResponse
     */
    public function createIPv6Translator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIPv6TranslatorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIPv6TranslatorsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeIPv6TranslatorsResponse
     */
    public function describeIPv6TranslatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIPv6TranslatorsResponse::fromMap($this->doRequest('DescribeIPv6Translators', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeIPv6TranslatorsRequest $request
     *
     * @return DescribeIPv6TranslatorsResponse
     */
    public function describeIPv6Translators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIPv6TranslatorsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIPv6TranslatorAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyIPv6TranslatorAttributeResponse
     */
    public function modifyIPv6TranslatorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyIPv6TranslatorAttributeResponse::fromMap($this->doRequest('ModifyIPv6TranslatorAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorAttributeRequest $request
     *
     * @return ModifyIPv6TranslatorAttributeResponse
     */
    public function modifyIPv6TranslatorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIPv6TranslatorBandwidthRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyIPv6TranslatorBandwidthResponse
     */
    public function modifyIPv6TranslatorBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyIPv6TranslatorBandwidthResponse::fromMap($this->doRequest('ModifyIPv6TranslatorBandwidth', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorBandwidthRequest $request
     *
     * @return ModifyIPv6TranslatorBandwidthResponse
     */
    public function modifyIPv6TranslatorBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param CreateIPv6TranslatorEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateIPv6TranslatorEntryResponse
     */
    public function createIPv6TranslatorEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateIPv6TranslatorEntryResponse::fromMap($this->doRequest('CreateIPv6TranslatorEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateIPv6TranslatorEntryRequest $request
     *
     * @return CreateIPv6TranslatorEntryResponse
     */
    public function createIPv6TranslatorEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIPv6TranslatorEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIPv6TranslatorEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteIPv6TranslatorEntryResponse
     */
    public function deleteIPv6TranslatorEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteIPv6TranslatorEntryResponse::fromMap($this->doRequest('DeleteIPv6TranslatorEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteIPv6TranslatorEntryRequest $request
     *
     * @return DeleteIPv6TranslatorEntryResponse
     */
    public function deleteIPv6TranslatorEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIPv6TranslatorEntryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIPv6TranslatorEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyIPv6TranslatorEntryResponse
     */
    public function modifyIPv6TranslatorEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyIPv6TranslatorEntryResponse::fromMap($this->doRequest('ModifyIPv6TranslatorEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyIPv6TranslatorEntryRequest $request
     *
     * @return ModifyIPv6TranslatorEntryResponse
     */
    public function modifyIPv6TranslatorEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIPv6TranslatorEntryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIPv6TranslatorEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeIPv6TranslatorEntriesResponse
     */
    public function describeIPv6TranslatorEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIPv6TranslatorEntriesResponse::fromMap($this->doRequest('DescribeIPv6TranslatorEntries', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeIPv6TranslatorEntriesRequest $request
     *
     * @return DescribeIPv6TranslatorEntriesResponse
     */
    public function describeIPv6TranslatorEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIPv6TranslatorEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIPv6TranslatorRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteIPv6TranslatorResponse
     */
    public function deleteIPv6TranslatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteIPv6TranslatorResponse::fromMap($this->doRequest('DeleteIPv6Translator', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteIPv6TranslatorRequest $request
     *
     * @return DeleteIPv6TranslatorResponse
     */
    public function deleteIPv6Translator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIPv6TranslatorWithOptions($request, $runtime);
    }

    /**
     * @param AllocateEipAddressProRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AllocateEipAddressProResponse
     */
    public function allocateEipAddressProWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AllocateEipAddressProResponse::fromMap($this->doRequest('AllocateEipAddressPro', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AllocateEipAddressProRequest $request
     *
     * @return AllocateEipAddressProResponse
     */
    public function allocateEipAddressPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateEipAddressProWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHighDefinitionMonitorLogAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeHighDefinitionMonitorLogAttributeResponse
     */
    public function describeHighDefinitionMonitorLogAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeHighDefinitionMonitorLogAttributeResponse::fromMap($this->doRequest('DescribeHighDefinitionMonitorLogAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeHighDefinitionMonitorLogAttributeRequest $request
     *
     * @return DescribeHighDefinitionMonitorLogAttributeResponse
     */
    public function describeHighDefinitionMonitorLogAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHighDefinitionMonitorLogAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowLogAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyFlowLogAttributeResponse::fromMap($this->doRequest('ModifyFlowLogAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyFlowLogAttributeRequest $request
     *
     * @return ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowLogAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFlowLogsResponse
     */
    public function describeFlowLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeFlowLogsResponse::fromMap($this->doRequest('DescribeFlowLogs', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeFlowLogsRequest $request
     *
     * @return DescribeFlowLogsResponse
     */
    public function describeFlowLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowLogsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteFlowLogResponse
     */
    public function deleteFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFlowLogResponse::fromMap($this->doRequest('DeleteFlowLog', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteFlowLogRequest $request
     *
     * @return DeleteFlowLogResponse
     */
    public function deleteFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowLogWithOptions($request, $runtime);
    }

    /**
     * @param DeactiveFlowLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeactiveFlowLogResponse
     */
    public function deactiveFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeactiveFlowLogResponse::fromMap($this->doRequest('DeactiveFlowLog', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeactiveFlowLogRequest $request
     *
     * @return DeactiveFlowLogResponse
     */
    public function deactiveFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveFlowLogWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowLogResponse
     */
    public function createFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFlowLogResponse::fromMap($this->doRequest('CreateFlowLog', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateFlowLogRequest $request
     *
     * @return CreateFlowLogResponse
     */
    public function createFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowLogWithOptions($request, $runtime);
    }

    /**
     * @param ActiveFlowLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ActiveFlowLogResponse
     */
    public function activeFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ActiveFlowLogResponse::fromMap($this->doRequest('ActiveFlowLog', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ActiveFlowLogRequest $request
     *
     * @return ActiveFlowLogResponse
     */
    public function activeFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeFlowLogWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateRouteTableRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateRouteTableResponse
     */
    public function unassociateRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnassociateRouteTableResponse::fromMap($this->doRequest('UnassociateRouteTable', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UnassociateRouteTableRequest $request
     *
     * @return UnassociateRouteTableResponse
     */
    public function unassociateRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRouteTableRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRouteTableResponse
     */
    public function deleteRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRouteTableResponse::fromMap($this->doRequest('DeleteRouteTable', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteRouteTableRequest $request
     *
     * @return DeleteRouteTableResponse
     */
    public function deleteRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param CreateRouteTableRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRouteTableResponse
     */
    public function createRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRouteTableResponse::fromMap($this->doRequest('CreateRouteTable', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateRouteTableRequest $request
     *
     * @return CreateRouteTableResponse
     */
    public function createRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param AssociateRouteTableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AssociateRouteTableResponse
     */
    public function associateRouteTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AssociateRouteTableResponse::fromMap($this->doRequest('AssociateRouteTable', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssociateRouteTableRequest $request
     *
     * @return AssociateRouteTableResponse
     */
    public function associateRouteTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateRouteTableWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpnGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateVpnGatewayResponse
     */
    public function createVpnGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVpnGatewayResponse::fromMap($this->doRequest('CreateVpnGateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateVpnGatewayRequest $request
     *
     * @return CreateVpnGatewayResponse
     */
    public function createVpnGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpnGatewayWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return MoveResourceGroupResponse::fromMap($this->doRequest('MoveResourceGroup', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param RevokeInstanceFromCenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeInstanceFromCenResponse
     */
    public function revokeInstanceFromCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RevokeInstanceFromCenResponse::fromMap($this->doRequest('RevokeInstanceFromCen', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param RevokeInstanceFromCenRequest $request
     *
     * @return RevokeInstanceFromCenResponse
     */
    public function revokeInstanceFromCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeInstanceFromCenWithOptions($request, $runtime);
    }

    /**
     * @param GrantInstanceToCenRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GrantInstanceToCenResponse
     */
    public function grantInstanceToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GrantInstanceToCenResponse::fromMap($this->doRequest('GrantInstanceToCen', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param GrantInstanceToCenRequest $request
     *
     * @return GrantInstanceToCenResponse
     */
    public function grantInstanceToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantInstanceToCenWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGrantRulesToCenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGrantRulesToCenResponse
     */
    public function describeGrantRulesToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGrantRulesToCenResponse::fromMap($this->doRequest('DescribeGrantRulesToCen', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeGrantRulesToCenRequest $request
     *
     * @return DescribeGrantRulesToCenResponse
     */
    public function describeGrantRulesToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGrantRulesToCenWithOptions($request, $runtime);
    }

    /**
     * @param ModifySslVpnServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifySslVpnServerResponse
     */
    public function modifySslVpnServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifySslVpnServerResponse::fromMap($this->doRequest('ModifySslVpnServer', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifySslVpnServerRequest $request
     *
     * @return ModifySslVpnServerResponse
     */
    public function modifySslVpnServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySslVpnServerWithOptions($request, $runtime);
    }

    /**
     * @param ModifySslVpnClientCertRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifySslVpnClientCertResponse
     */
    public function modifySslVpnClientCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifySslVpnClientCertResponse::fromMap($this->doRequest('ModifySslVpnClientCert', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifySslVpnClientCertRequest $request
     *
     * @return ModifySslVpnClientCertResponse
     */
    public function modifySslVpnClientCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySslVpnClientCertWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSslVpnServersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSslVpnServersResponse
     */
    public function describeSslVpnServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSslVpnServersResponse::fromMap($this->doRequest('DescribeSslVpnServers', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeSslVpnServersRequest $request
     *
     * @return DescribeSslVpnServersResponse
     */
    public function describeSslVpnServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSslVpnServersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSslVpnClientCertsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSslVpnClientCertsResponse
     */
    public function describeSslVpnClientCertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSslVpnClientCertsResponse::fromMap($this->doRequest('DescribeSslVpnClientCerts', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeSslVpnClientCertsRequest $request
     *
     * @return DescribeSslVpnClientCertsResponse
     */
    public function describeSslVpnClientCerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSslVpnClientCertsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSslVpnClientCertRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSslVpnClientCertResponse
     */
    public function describeSslVpnClientCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSslVpnClientCertResponse::fromMap($this->doRequest('DescribeSslVpnClientCert', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeSslVpnClientCertRequest $request
     *
     * @return DescribeSslVpnClientCertResponse
     */
    public function describeSslVpnClientCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSslVpnClientCertWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSslVpnServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSslVpnServerResponse
     */
    public function deleteSslVpnServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSslVpnServerResponse::fromMap($this->doRequest('DeleteSslVpnServer', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteSslVpnServerRequest $request
     *
     * @return DeleteSslVpnServerResponse
     */
    public function deleteSslVpnServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSslVpnServerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSslVpnClientCertRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSslVpnClientCertResponse
     */
    public function deleteSslVpnClientCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSslVpnClientCertResponse::fromMap($this->doRequest('DeleteSslVpnClientCert', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteSslVpnClientCertRequest $request
     *
     * @return DeleteSslVpnClientCertResponse
     */
    public function deleteSslVpnClientCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSslVpnClientCertWithOptions($request, $runtime);
    }

    /**
     * @param CreateSslVpnServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSslVpnServerResponse
     */
    public function createSslVpnServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSslVpnServerResponse::fromMap($this->doRequest('CreateSslVpnServer', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateSslVpnServerRequest $request
     *
     * @return CreateSslVpnServerResponse
     */
    public function createSslVpnServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSslVpnServerWithOptions($request, $runtime);
    }

    /**
     * @param CreateSslVpnClientCertRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSslVpnClientCertResponse
     */
    public function createSslVpnClientCertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSslVpnClientCertResponse::fromMap($this->doRequest('CreateSslVpnClientCert', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateSslVpnClientCertRequest $request
     *
     * @return CreateSslVpnClientCertResponse
     */
    public function createSslVpnClientCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSslVpnClientCertWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGlobalAccelerationInstanceIpRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return RemoveGlobalAccelerationInstanceIpResponse
     */
    public function removeGlobalAccelerationInstanceIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveGlobalAccelerationInstanceIpResponse::fromMap($this->doRequest('RemoveGlobalAccelerationInstanceIp', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveGlobalAccelerationInstanceIpRequest $request
     *
     * @return RemoveGlobalAccelerationInstanceIpResponse
     */
    public function removeGlobalAccelerationInstanceIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGlobalAccelerationInstanceIpWithOptions($request, $runtime);
    }

    /**
     * @param AddGlobalAccelerationInstanceIpRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddGlobalAccelerationInstanceIpResponse
     */
    public function addGlobalAccelerationInstanceIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddGlobalAccelerationInstanceIpResponse::fromMap($this->doRequest('AddGlobalAccelerationInstanceIp', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddGlobalAccelerationInstanceIpRequest $request
     *
     * @return AddGlobalAccelerationInstanceIpResponse
     */
    public function addGlobalAccelerationInstanceIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGlobalAccelerationInstanceIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouteTableListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRouteTableListResponse
     */
    public function describeRouteTableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRouteTableListResponse::fromMap($this->doRequest('DescribeRouteTableList', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeRouteTableListRequest $request
     *
     * @return DescribeRouteTableListResponse
     */
    public function describeRouteTableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteTableListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRouteTableAttributesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyRouteTableAttributesResponse
     */
    public function modifyRouteTableAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyRouteTableAttributesResponse::fromMap($this->doRequest('ModifyRouteTableAttributes', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyRouteTableAttributesRequest $request
     *
     * @return ModifyRouteTableAttributesResponse
     */
    public function modifyRouteTableAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouteTableAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBgpNetworksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBgpNetworksResponse
     */
    public function describeBgpNetworksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBgpNetworksResponse::fromMap($this->doRequest('DescribeBgpNetworks', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeBgpNetworksRequest $request
     *
     * @return DescribeBgpNetworksResponse
     */
    public function describeBgpNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpNetworksWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCommonBandwidthPackagePayTypeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyCommonBandwidthPackagePayTypeResponse
     */
    public function modifyCommonBandwidthPackagePayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCommonBandwidthPackagePayTypeResponse::fromMap($this->doRequest('ModifyCommonBandwidthPackagePayType', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyCommonBandwidthPackagePayTypeRequest $request
     *
     * @return ModifyCommonBandwidthPackagePayTypeResponse
     */
    public function modifyCommonBandwidthPackagePayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommonBandwidthPackagePayTypeWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateGlobalAccelerationInstanceRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UnassociateGlobalAccelerationInstanceResponse
     */
    public function unassociateGlobalAccelerationInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnassociateGlobalAccelerationInstanceResponse::fromMap($this->doRequest('UnassociateGlobalAccelerationInstance', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UnassociateGlobalAccelerationInstanceRequest $request
     *
     * @return UnassociateGlobalAccelerationInstanceResponse
     */
    public function unassociateGlobalAccelerationInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateGlobalAccelerationInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGlobalAccelerationInstanceSpecRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ModifyGlobalAccelerationInstanceSpecResponse
     */
    public function modifyGlobalAccelerationInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyGlobalAccelerationInstanceSpecResponse::fromMap($this->doRequest('ModifyGlobalAccelerationInstanceSpec', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyGlobalAccelerationInstanceSpecRequest $request
     *
     * @return ModifyGlobalAccelerationInstanceSpecResponse
     */
    public function modifyGlobalAccelerationInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalAccelerationInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGlobalAccelerationInstanceAttributesRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return ModifyGlobalAccelerationInstanceAttributesResponse
     */
    public function modifyGlobalAccelerationInstanceAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyGlobalAccelerationInstanceAttributesResponse::fromMap($this->doRequest('ModifyGlobalAccelerationInstanceAttributes', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyGlobalAccelerationInstanceAttributesRequest $request
     *
     * @return ModifyGlobalAccelerationInstanceAttributesResponse
     */
    public function modifyGlobalAccelerationInstanceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalAccelerationInstanceAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServerRelatedGlobalAccelerationInstancesRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return DescribeServerRelatedGlobalAccelerationInstancesResponse
     */
    public function describeServerRelatedGlobalAccelerationInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeServerRelatedGlobalAccelerationInstancesResponse::fromMap($this->doRequest('DescribeServerRelatedGlobalAccelerationInstances', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeServerRelatedGlobalAccelerationInstancesRequest $request
     *
     * @return DescribeServerRelatedGlobalAccelerationInstancesResponse
     */
    public function describeServerRelatedGlobalAccelerationInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerRelatedGlobalAccelerationInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGlobalAccelerationInstancesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeGlobalAccelerationInstancesResponse
     */
    public function describeGlobalAccelerationInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGlobalAccelerationInstancesResponse::fromMap($this->doRequest('DescribeGlobalAccelerationInstances', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeGlobalAccelerationInstancesRequest $request
     *
     * @return DescribeGlobalAccelerationInstancesResponse
     */
    public function describeGlobalAccelerationInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalAccelerationInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGlobalAccelerationInstanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteGlobalAccelerationInstanceResponse
     */
    public function deleteGlobalAccelerationInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteGlobalAccelerationInstanceResponse::fromMap($this->doRequest('DeleteGlobalAccelerationInstance', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteGlobalAccelerationInstanceRequest $request
     *
     * @return DeleteGlobalAccelerationInstanceResponse
     */
    public function deleteGlobalAccelerationInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalAccelerationInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateGlobalAccelerationInstanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateGlobalAccelerationInstanceResponse
     */
    public function createGlobalAccelerationInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateGlobalAccelerationInstanceResponse::fromMap($this->doRequest('CreateGlobalAccelerationInstance', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateGlobalAccelerationInstanceRequest $request
     *
     * @return CreateGlobalAccelerationInstanceResponse
     */
    public function createGlobalAccelerationInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalAccelerationInstanceWithOptions($request, $runtime);
    }

    /**
     * @param AssociateGlobalAccelerationInstanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return AssociateGlobalAccelerationInstanceResponse
     */
    public function associateGlobalAccelerationInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AssociateGlobalAccelerationInstanceResponse::fromMap($this->doRequest('AssociateGlobalAccelerationInstance', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssociateGlobalAccelerationInstanceRequest $request
     *
     * @return AssociateGlobalAccelerationInstanceResponse
     */
    public function associateGlobalAccelerationInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateGlobalAccelerationInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVSwitchAttributesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVSwitchAttributesResponse
     */
    public function describeVSwitchAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVSwitchAttributesResponse::fromMap($this->doRequest('DescribeVSwitchAttributes', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVSwitchAttributesRequest $request
     *
     * @return DescribeVSwitchAttributesResponse
     */
    public function describeVSwitchAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchAttributesWithOptions($request, $runtime);
    }

    /**
     * @param RemoveCommonBandwidthPackageIpRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemoveCommonBandwidthPackageIpResponse
     */
    public function removeCommonBandwidthPackageIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveCommonBandwidthPackageIpResponse::fromMap($this->doRequest('RemoveCommonBandwidthPackageIp', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveCommonBandwidthPackageIpRequest $request
     *
     * @return RemoveCommonBandwidthPackageIpResponse
     */
    public function removeCommonBandwidthPackageIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeCommonBandwidthPackageIpWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCommonBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyCommonBandwidthPackageSpecResponse
     */
    public function modifyCommonBandwidthPackageSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCommonBandwidthPackageSpecResponse::fromMap($this->doRequest('ModifyCommonBandwidthPackageSpec', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyCommonBandwidthPackageSpecRequest $request
     *
     * @return ModifyCommonBandwidthPackageSpecResponse
     */
    public function modifyCommonBandwidthPackageSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommonBandwidthPackageSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCommonBandwidthPackageAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyCommonBandwidthPackageAttributeResponse
     */
    public function modifyCommonBandwidthPackageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCommonBandwidthPackageAttributeResponse::fromMap($this->doRequest('ModifyCommonBandwidthPackageAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyCommonBandwidthPackageAttributeRequest $request
     *
     * @return ModifyCommonBandwidthPackageAttributeResponse
     */
    public function modifyCommonBandwidthPackageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommonBandwidthPackageAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCommonBandwidthPackagesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeCommonBandwidthPackagesResponse
     */
    public function describeCommonBandwidthPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCommonBandwidthPackagesResponse::fromMap($this->doRequest('DescribeCommonBandwidthPackages', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeCommonBandwidthPackagesRequest $request
     *
     * @return DescribeCommonBandwidthPackagesResponse
     */
    public function describeCommonBandwidthPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommonBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCommonBandwidthPackageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteCommonBandwidthPackageResponse
     */
    public function deleteCommonBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCommonBandwidthPackageResponse::fromMap($this->doRequest('DeleteCommonBandwidthPackage', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteCommonBandwidthPackageRequest $request
     *
     * @return DeleteCommonBandwidthPackageResponse
     */
    public function deleteCommonBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommonBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommonBandwidthPackageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateCommonBandwidthPackageResponse
     */
    public function createCommonBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateCommonBandwidthPackageResponse::fromMap($this->doRequest('CreateCommonBandwidthPackage', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateCommonBandwidthPackageRequest $request
     *
     * @return CreateCommonBandwidthPackageResponse
     */
    public function createCommonBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommonBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param AddCommonBandwidthPackageIpRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddCommonBandwidthPackageIpResponse
     */
    public function addCommonBandwidthPackageIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCommonBandwidthPackageIpResponse::fromMap($this->doRequest('AddCommonBandwidthPackageIp', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddCommonBandwidthPackageIpRequest $request
     *
     * @return AddCommonBandwidthPackageIpResponse
     */
    public function addCommonBandwidthPackageIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCommonBandwidthPackageIpWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpnGatewayAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyVpnGatewayAttributeResponse
     */
    public function modifyVpnGatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyVpnGatewayAttributeResponse::fromMap($this->doRequest('ModifyVpnGatewayAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyVpnGatewayAttributeRequest $request
     *
     * @return ModifyVpnGatewayAttributeResponse
     */
    public function modifyVpnGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpnGatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpnConnectionAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyVpnConnectionAttributeResponse
     */
    public function modifyVpnConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyVpnConnectionAttributeResponse::fromMap($this->doRequest('ModifyVpnConnectionAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyVpnConnectionAttributeRequest $request
     *
     * @return ModifyVpnConnectionAttributeResponse
     */
    public function modifyVpnConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpnConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCustomerGatewayAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyCustomerGatewayAttributeResponse
     */
    public function modifyCustomerGatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCustomerGatewayAttributeResponse::fromMap($this->doRequest('ModifyCustomerGatewayAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyCustomerGatewayAttributeRequest $request
     *
     * @return ModifyCustomerGatewayAttributeResponse
     */
    public function modifyCustomerGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomerGatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DownloadVpnConnectionConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DownloadVpnConnectionConfigResponse
     */
    public function downloadVpnConnectionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DownloadVpnConnectionConfigResponse::fromMap($this->doRequest('DownloadVpnConnectionConfig', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DownloadVpnConnectionConfigRequest $request
     *
     * @return DownloadVpnConnectionConfigResponse
     */
    public function downloadVpnConnectionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadVpnConnectionConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnGatewaysRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVpnGatewaysResponse
     */
    public function describeVpnGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpnGatewaysResponse::fromMap($this->doRequest('DescribeVpnGateways', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVpnGatewaysRequest $request
     *
     * @return DescribeVpnGatewaysResponse
     */
    public function describeVpnGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnGatewayRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeVpnGatewayResponse
     */
    public function describeVpnGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpnGatewayResponse::fromMap($this->doRequest('DescribeVpnGateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVpnGatewayRequest $request
     *
     * @return DescribeVpnGatewayResponse
     */
    public function describeVpnGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnConnectionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVpnConnectionsResponse
     */
    public function describeVpnConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpnConnectionsResponse::fromMap($this->doRequest('DescribeVpnConnections', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVpnConnectionsRequest $request
     *
     * @return DescribeVpnConnectionsResponse
     */
    public function describeVpnConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpnConnectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVpnConnectionResponse
     */
    public function describeVpnConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpnConnectionResponse::fromMap($this->doRequest('DescribeVpnConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVpnConnectionRequest $request
     *
     * @return DescribeVpnConnectionResponse
     */
    public function describeVpnConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpnConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomerGatewaysRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCustomerGatewaysResponse
     */
    public function describeCustomerGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCustomerGatewaysResponse::fromMap($this->doRequest('DescribeCustomerGateways', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeCustomerGatewaysRequest $request
     *
     * @return DescribeCustomerGatewaysResponse
     */
    public function describeCustomerGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomerGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomerGatewayRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCustomerGatewayResponse
     */
    public function describeCustomerGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCustomerGatewayResponse::fromMap($this->doRequest('DescribeCustomerGateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeCustomerGatewayRequest $request
     *
     * @return DescribeCustomerGatewayResponse
     */
    public function describeCustomerGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomerGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpnGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteVpnGatewayResponse
     */
    public function deleteVpnGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVpnGatewayResponse::fromMap($this->doRequest('DeleteVpnGateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteVpnGatewayRequest $request
     *
     * @return DeleteVpnGatewayResponse
     */
    public function deleteVpnGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpnGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpnConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVpnConnectionResponse
     */
    public function deleteVpnConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVpnConnectionResponse::fromMap($this->doRequest('DeleteVpnConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteVpnConnectionRequest $request
     *
     * @return DeleteVpnConnectionResponse
     */
    public function deleteVpnConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpnConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomerGatewayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCustomerGatewayResponse
     */
    public function deleteCustomerGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCustomerGatewayResponse::fromMap($this->doRequest('DeleteCustomerGateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteCustomerGatewayRequest $request
     *
     * @return DeleteCustomerGatewayResponse
     */
    public function deleteCustomerGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomerGatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpnConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVpnConnectionResponse
     */
    public function createVpnConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVpnConnectionResponse::fromMap($this->doRequest('CreateVpnConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateVpnConnectionRequest $request
     *
     * @return CreateVpnConnectionResponse
     */
    public function createVpnConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpnConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomerGatewayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCustomerGatewayResponse
     */
    public function createCustomerGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateCustomerGatewayResponse::fromMap($this->doRequest('CreateCustomerGateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateCustomerGatewayRequest $request
     *
     * @return CreateCustomerGatewayResponse
     */
    public function createCustomerGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomerGatewayWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBgpGroupAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyBgpGroupAttributeResponse
     */
    public function modifyBgpGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyBgpGroupAttributeResponse::fromMap($this->doRequest('ModifyBgpGroupAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyBgpGroupAttributeRequest $request
     *
     * @return ModifyBgpGroupAttributeResponse
     */
    public function modifyBgpGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBgpGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBgpPeersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeBgpPeersResponse
     */
    public function describeBgpPeersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBgpPeersResponse::fromMap($this->doRequest('DescribeBgpPeers', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeBgpPeersRequest $request
     *
     * @return DescribeBgpPeersResponse
     */
    public function describeBgpPeers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpPeersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBgpGroupsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeBgpGroupsResponse
     */
    public function describeBgpGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBgpGroupsResponse::fromMap($this->doRequest('DescribeBgpGroups', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeBgpGroupsRequest $request
     *
     * @return DescribeBgpGroupsResponse
     */
    public function describeBgpGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBgpPeerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBgpPeerResponse
     */
    public function deleteBgpPeerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBgpPeerResponse::fromMap($this->doRequest('DeleteBgpPeer', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteBgpPeerRequest $request
     *
     * @return DeleteBgpPeerResponse
     */
    public function deleteBgpPeer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBgpPeerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBgpNetworkRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteBgpNetworkResponse
     */
    public function deleteBgpNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBgpNetworkResponse::fromMap($this->doRequest('DeleteBgpNetwork', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteBgpNetworkRequest $request
     *
     * @return DeleteBgpNetworkResponse
     */
    public function deleteBgpNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBgpNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBgpGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteBgpGroupResponse
     */
    public function deleteBgpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBgpGroupResponse::fromMap($this->doRequest('DeleteBgpGroup', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteBgpGroupRequest $request
     *
     * @return DeleteBgpGroupResponse
     */
    public function deleteBgpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBgpGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateBgpPeerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBgpPeerResponse
     */
    public function createBgpPeerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBgpPeerResponse::fromMap($this->doRequest('CreateBgpPeer', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateBgpPeerRequest $request
     *
     * @return CreateBgpPeerResponse
     */
    public function createBgpPeer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBgpPeerWithOptions($request, $runtime);
    }

    /**
     * @param CreateBgpGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateBgpGroupResponse
     */
    public function createBgpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBgpGroupResponse::fromMap($this->doRequest('CreateBgpGroup', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateBgpGroupRequest $request
     *
     * @return CreateBgpGroupResponse
     */
    public function createBgpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBgpGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddBgpNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddBgpNetworkResponse
     */
    public function addBgpNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddBgpNetworkResponse::fromMap($this->doRequest('AddBgpNetwork', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddBgpNetworkRequest $request
     *
     * @return AddBgpNetworkResponse
     */
    public function addBgpNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBgpNetworkWithOptions($request, $runtime);
    }

    /**
     * @param EnableVpcClassicLinkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableVpcClassicLinkResponse
     */
    public function enableVpcClassicLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableVpcClassicLinkResponse::fromMap($this->doRequest('EnableVpcClassicLink', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param EnableVpcClassicLinkRequest $request
     *
     * @return EnableVpcClassicLinkResponse
     */
    public function enableVpcClassicLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableVpcClassicLinkWithOptions($request, $runtime);
    }

    /**
     * @param DisableVpcClassicLinkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableVpcClassicLinkResponse
     */
    public function disableVpcClassicLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableVpcClassicLinkResponse::fromMap($this->doRequest('DisableVpcClassicLink', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DisableVpcClassicLinkRequest $request
     *
     * @return DisableVpcClassicLinkResponse
     */
    public function disableVpcClassicLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVpcClassicLinkWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVpcAttributeResponse
     */
    public function describeVpcAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpcAttributeResponse::fromMap($this->doRequest('DescribeVpcAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVpcAttributeRequest $request
     *
     * @return DescribeVpcAttributeResponse
     */
    public function describeVpcAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UnassociatePhysicalConnectionFromVirtualBorderRouterRequest $request
     * @param RuntimeOptions                                              $runtime
     *
     * @return UnassociatePhysicalConnectionFromVirtualBorderRouterResponse
     */
    public function unassociatePhysicalConnectionFromVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnassociatePhysicalConnectionFromVirtualBorderRouterResponse::fromMap($this->doRequest('UnassociatePhysicalConnectionFromVirtualBorderRouter', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UnassociatePhysicalConnectionFromVirtualBorderRouterRequest $request
     *
     * @return UnassociatePhysicalConnectionFromVirtualBorderRouterResponse
     */
    public function unassociatePhysicalConnectionFromVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociatePhysicalConnectionFromVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param AssociatePhysicalConnectionToVirtualBorderRouterRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return AssociatePhysicalConnectionToVirtualBorderRouterResponse
     */
    public function associatePhysicalConnectionToVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AssociatePhysicalConnectionToVirtualBorderRouterResponse::fromMap($this->doRequest('AssociatePhysicalConnectionToVirtualBorderRouter', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssociatePhysicalConnectionToVirtualBorderRouterRequest $request
     *
     * @return AssociatePhysicalConnectionToVirtualBorderRouterResponse
     */
    public function associatePhysicalConnectionToVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associatePhysicalConnectionToVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param ModifySnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifySnatEntryResponse
     */
    public function modifySnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifySnatEntryResponse::fromMap($this->doRequest('ModifySnatEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifySnatEntryRequest $request
     *
     * @return ModifySnatEntryResponse
     */
    public function modifySnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySnatEntryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNatGatewaySpecRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyNatGatewaySpecResponse
     */
    public function modifyNatGatewaySpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyNatGatewaySpecResponse::fromMap($this->doRequest('ModifyNatGatewaySpec', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyNatGatewaySpecRequest $request
     *
     * @return ModifyNatGatewaySpecResponse
     */
    public function modifyNatGatewaySpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatGatewaySpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNatGatewayAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyNatGatewayAttributeResponse
     */
    public function modifyNatGatewayAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyNatGatewayAttributeResponse::fromMap($this->doRequest('ModifyNatGatewayAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyNatGatewayAttributeRequest $request
     *
     * @return ModifyNatGatewayAttributeResponse
     */
    public function modifyNatGatewayAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatGatewayAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBandwidthPackageAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyBandwidthPackageAttributeResponse
     */
    public function modifyBandwidthPackageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyBandwidthPackageAttributeResponse::fromMap($this->doRequest('ModifyBandwidthPackageAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyBandwidthPackageAttributeRequest $request
     *
     * @return ModifyBandwidthPackageAttributeResponse
     */
    public function modifyBandwidthPackageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBandwidthPackageAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSnatTableEntriesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSnatTableEntriesResponse
     */
    public function describeSnatTableEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSnatTableEntriesResponse::fromMap($this->doRequest('DescribeSnatTableEntries', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeSnatTableEntriesRequest $request
     *
     * @return DescribeSnatTableEntriesResponse
     */
    public function describeSnatTableEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnatTableEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSnatEntryResponse
     */
    public function deleteSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSnatEntryResponse::fromMap($this->doRequest('DeleteSnatEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteSnatEntryRequest $request
     *
     * @return DeleteSnatEntryResponse
     */
    public function deleteSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnatEntryWithOptions($request, $runtime);
    }

    /**
     * @param CreateSnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSnatEntryResponse
     */
    public function createSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSnatEntryResponse::fromMap($this->doRequest('CreateSnatEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateSnatEntryRequest $request
     *
     * @return CreateSnatEntryResponse
     */
    public function createSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnatEntryWithOptions($request, $runtime);
    }

    /**
     * @param CreateBandwidthPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateBandwidthPackageResponse
     */
    public function createBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBandwidthPackageResponse::fromMap($this->doRequest('CreateBandwidthPackage', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateBandwidthPackageRequest $request
     *
     * @return CreateBandwidthPackageResponse
     */
    public function createBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateHaVipRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnassociateHaVipResponse
     */
    public function unassociateHaVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnassociateHaVipResponse::fromMap($this->doRequest('UnassociateHaVip', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UnassociateHaVipRequest $request
     *
     * @return UnassociateHaVipResponse
     */
    public function unassociateHaVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateHaVipWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateEipAddressRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnassociateEipAddressResponse::fromMap($this->doRequest('UnassociateEipAddress', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param UnassociateEipAddressRequest $request
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param TerminateVirtualBorderRouterRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return TerminateVirtualBorderRouterResponse
     */
    public function terminateVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TerminateVirtualBorderRouterResponse::fromMap($this->doRequest('TerminateVirtualBorderRouter', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param TerminateVirtualBorderRouterRequest $request
     *
     * @return TerminateVirtualBorderRouterResponse
     */
    public function terminateVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param TerminatePhysicalConnectionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return TerminatePhysicalConnectionResponse
     */
    public function terminatePhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TerminatePhysicalConnectionResponse::fromMap($this->doRequest('TerminatePhysicalConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param TerminatePhysicalConnectionRequest $request
     *
     * @return TerminatePhysicalConnectionResponse
     */
    public function terminatePhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminatePhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param RemoveBandwidthPackageIpsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveBandwidthPackageIpsResponse
     */
    public function removeBandwidthPackageIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveBandwidthPackageIpsResponse::fromMap($this->doRequest('RemoveBandwidthPackageIps', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveBandwidthPackageIpsRequest $request
     *
     * @return RemoveBandwidthPackageIpsResponse
     */
    public function removeBandwidthPackageIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBandwidthPackageIpsWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseEipAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleaseEipAddressResponse::fromMap($this->doRequest('ReleaseEipAddress', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ReleaseEipAddressRequest $request
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param RecoverVirtualBorderRouterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecoverVirtualBorderRouterResponse
     */
    public function recoverVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RecoverVirtualBorderRouterResponse::fromMap($this->doRequest('RecoverVirtualBorderRouter', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param RecoverVirtualBorderRouterRequest $request
     *
     * @return RecoverVirtualBorderRouterResponse
     */
    public function recoverVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVSwitchAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyVSwitchAttributeResponse::fromMap($this->doRequest('ModifyVSwitchAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyVSwitchAttributeRequest $request
     *
     * @return ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVSwitchAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVRouterAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyVRouterAttributeResponse
     */
    public function modifyVRouterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyVRouterAttributeResponse::fromMap($this->doRequest('ModifyVRouterAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyVRouterAttributeRequest $request
     *
     * @return ModifyVRouterAttributeResponse
     */
    public function modifyVRouterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVRouterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpcAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyVpcAttributeResponse
     */
    public function modifyVpcAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyVpcAttributeResponse::fromMap($this->doRequest('ModifyVpcAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyVpcAttributeRequest $request
     *
     * @return ModifyVpcAttributeResponse
     */
    public function modifyVpcAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVirtualBorderRouterAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyVirtualBorderRouterAttributeResponse
     */
    public function modifyVirtualBorderRouterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyVirtualBorderRouterAttributeResponse::fromMap($this->doRequest('ModifyVirtualBorderRouterAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyVirtualBorderRouterAttributeRequest $request
     *
     * @return ModifyVirtualBorderRouterAttributeResponse
     */
    public function modifyVirtualBorderRouterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVirtualBorderRouterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRouterInterfaceSpecRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyRouterInterfaceSpecResponse
     */
    public function modifyRouterInterfaceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyRouterInterfaceSpecResponse::fromMap($this->doRequest('ModifyRouterInterfaceSpec', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyRouterInterfaceSpecRequest $request
     *
     * @return ModifyRouterInterfaceSpecResponse
     */
    public function modifyRouterInterfaceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouterInterfaceSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRouterInterfaceAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyRouterInterfaceAttributeResponse
     */
    public function modifyRouterInterfaceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyRouterInterfaceAttributeResponse::fromMap($this->doRequest('ModifyRouterInterfaceAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyRouterInterfaceAttributeRequest $request
     *
     * @return ModifyRouterInterfaceAttributeResponse
     */
    public function modifyRouterInterfaceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouterInterfaceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPhysicalConnectionAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyPhysicalConnectionAttributeResponse
     */
    public function modifyPhysicalConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyPhysicalConnectionAttributeResponse::fromMap($this->doRequest('ModifyPhysicalConnectionAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyPhysicalConnectionAttributeRequest $request
     *
     * @return ModifyPhysicalConnectionAttributeResponse
     */
    public function modifyPhysicalConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPhysicalConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHaVipAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyHaVipAttributeResponse
     */
    public function modifyHaVipAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyHaVipAttributeResponse::fromMap($this->doRequest('ModifyHaVipAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyHaVipAttributeRequest $request
     *
     * @return ModifyHaVipAttributeResponse
     */
    public function modifyHaVipAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHaVipAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyForwardEntryResponse
     */
    public function modifyForwardEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyForwardEntryResponse::fromMap($this->doRequest('ModifyForwardEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyForwardEntryRequest $request
     *
     * @return ModifyForwardEntryResponse
     */
    public function modifyForwardEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyForwardEntryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEipAddressAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyEipAddressAttributeResponse
     */
    public function modifyEipAddressAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyEipAddressAttributeResponse::fromMap($this->doRequest('ModifyEipAddressAttribute', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyEipAddressAttributeRequest $request
     *
     * @return ModifyEipAddressAttributeResponse
     */
    public function modifyEipAddressAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEipAddressAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyBandwidthPackageSpecResponse
     */
    public function modifyBandwidthPackageSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyBandwidthPackageSpecResponse::fromMap($this->doRequest('ModifyBandwidthPackageSpec', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ModifyBandwidthPackageSpecRequest $request
     *
     * @return ModifyBandwidthPackageSpecResponse
     */
    public function modifyBandwidthPackageSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBandwidthPackageSpecWithOptions($request, $runtime);
    }

    /**
     * @param EnablePhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnablePhysicalConnectionResponse
     */
    public function enablePhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnablePhysicalConnectionResponse::fromMap($this->doRequest('EnablePhysicalConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param EnablePhysicalConnectionRequest $request
     *
     * @return EnablePhysicalConnectionResponse
     */
    public function enablePhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enablePhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeZonesResponse::fromMap($this->doRequest('DescribeZones', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVSwitchesResponse::fromMap($this->doRequest('DescribeVSwitches', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVRoutersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeVRoutersResponse
     */
    public function describeVRoutersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVRoutersResponse::fromMap($this->doRequest('DescribeVRouters', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVRoutersRequest $request
     *
     * @return DescribeVRoutersResponse
     */
    public function describeVRouters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVRoutersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpcsResponse::fromMap($this->doRequest('DescribeVpcs', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVpcsRequest $request
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVirtualBorderRoutersForPhysicalConnectionRequest $request
     * @param RuntimeOptions                                           $runtime
     *
     * @return DescribeVirtualBorderRoutersForPhysicalConnectionResponse
     */
    public function describeVirtualBorderRoutersForPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVirtualBorderRoutersForPhysicalConnectionResponse::fromMap($this->doRequest('DescribeVirtualBorderRoutersForPhysicalConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVirtualBorderRoutersForPhysicalConnectionRequest $request
     *
     * @return DescribeVirtualBorderRoutersForPhysicalConnectionResponse
     */
    public function describeVirtualBorderRoutersForPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualBorderRoutersForPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVirtualBorderRoutersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVirtualBorderRoutersResponse
     */
    public function describeVirtualBorderRoutersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVirtualBorderRoutersResponse::fromMap($this->doRequest('DescribeVirtualBorderRouters', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeVirtualBorderRoutersRequest $request
     *
     * @return DescribeVirtualBorderRoutersResponse
     */
    public function describeVirtualBorderRouters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualBorderRoutersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouteTablesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRouteTablesResponse
     */
    public function describeRouteTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRouteTablesResponse::fromMap($this->doRequest('DescribeRouteTables', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeRouteTablesRequest $request
     *
     * @return DescribeRouteTablesResponse
     */
    public function describeRouteTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteTablesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouterInterfacesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRouterInterfacesResponse
     */
    public function describeRouterInterfacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRouterInterfacesResponse::fromMap($this->doRequest('DescribeRouterInterfaces', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeRouterInterfacesRequest $request
     *
     * @return DescribeRouterInterfacesResponse
     */
    public function describeRouterInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouterInterfacesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * DescribePhysicalConnections Query physical connections in a region.
     *   * request demo:   * https://vpc.aliyuncs.com/?Action=DescribePhysicalConnections
     *   * &RegionId=cn-hangzhou
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param DescribePhysicalConnectionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePhysicalConnectionsResponse
     */
    public function describePhysicalConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePhysicalConnectionsResponse::fromMap($this->doRequest('DescribePhysicalConnections', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * DescribePhysicalConnections Query physical connections in a region.
     *   * request demo:   * https://vpc.aliyuncs.com/?Action=DescribePhysicalConnections
     *   * &RegionId=cn-hangzhou
     *   * &<CommonParameters>
     *   * description:.
     *
     * @param DescribePhysicalConnectionsRequest $request
     *
     * @return DescribePhysicalConnectionsResponse
     */
    public function describePhysicalConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhysicalConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNewProjectEipMonitorDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeNewProjectEipMonitorDataResponse
     */
    public function describeNewProjectEipMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeNewProjectEipMonitorDataResponse::fromMap($this->doRequest('DescribeNewProjectEipMonitorData', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeNewProjectEipMonitorDataRequest $request
     *
     * @return DescribeNewProjectEipMonitorDataResponse
     */
    public function describeNewProjectEipMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNewProjectEipMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNatGatewaysRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNatGatewaysResponse
     */
    public function describeNatGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeNatGatewaysResponse::fromMap($this->doRequest('DescribeNatGateways', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeNatGatewaysRequest $request
     *
     * @return DescribeNatGatewaysResponse
     */
    public function describeNatGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHaVipsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeHaVipsResponse
     */
    public function describeHaVipsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeHaVipsResponse::fromMap($this->doRequest('DescribeHaVips', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeHaVipsRequest $request
     *
     * @return DescribeHaVipsResponse
     */
    public function describeHaVips($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHaVipsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeForwardTableEntriesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeForwardTableEntriesResponse
     */
    public function describeForwardTableEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeForwardTableEntriesResponse::fromMap($this->doRequest('DescribeForwardTableEntries', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeForwardTableEntriesRequest $request
     *
     * @return DescribeForwardTableEntriesResponse
     */
    public function describeForwardTableEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeForwardTableEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEipMonitorDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEipMonitorDataResponse
     */
    public function describeEipMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEipMonitorDataResponse::fromMap($this->doRequest('DescribeEipMonitorData', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeEipMonitorDataRequest $request
     *
     * @return DescribeEipMonitorDataResponse
     */
    public function describeEipMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEipAddressesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEipAddressesResponse
     */
    public function describeEipAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEipAddressesResponse::fromMap($this->doRequest('DescribeEipAddresses', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeEipAddressesRequest $request
     *
     * @return DescribeEipAddressesResponse
     */
    public function describeEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipAddressesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandwidthPackagesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBandwidthPackagesResponse
     */
    public function describeBandwidthPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBandwidthPackagesResponse::fromMap($this->doRequest('DescribeBandwidthPackages', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeBandwidthPackagesRequest $request
     *
     * @return DescribeBandwidthPackagesResponse
     */
    public function describeBandwidthPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccessPointsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAccessPointsResponse
     */
    public function describeAccessPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAccessPointsResponse::fromMap($this->doRequest('DescribeAccessPoints', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeAccessPointsRequest $request
     *
     * @return DescribeAccessPointsResponse
     */
    public function describeAccessPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessPointsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVSwitchResponse::fromMap($this->doRequest('DeleteVSwitch', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteVSwitchRequest $request
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVSwitchWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpcRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteVpcResponse
     */
    public function deleteVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVpcResponse::fromMap($this->doRequest('DeleteVpc', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteVpcRequest $request
     *
     * @return DeleteVpcResponse
     */
    public function deleteVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVirtualBorderRouterRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteVirtualBorderRouterResponse
     */
    public function deleteVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVirtualBorderRouterResponse::fromMap($this->doRequest('DeleteVirtualBorderRouter', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteVirtualBorderRouterRequest $request
     *
     * @return DeleteVirtualBorderRouterResponse
     */
    public function deleteVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRouterInterfaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteRouterInterfaceResponse
     */
    public function deleteRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRouterInterfaceResponse::fromMap($this->doRequest('DeleteRouterInterface', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteRouterInterfaceRequest $request
     *
     * @return DeleteRouterInterfaceResponse
     */
    public function deleteRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRouteEntryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRouteEntryResponse
     */
    public function deleteRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRouteEntryResponse::fromMap($this->doRequest('DeleteRouteEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteRouteEntryRequest $request
     *
     * @return DeleteRouteEntryResponse
     */
    public function deleteRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeletePhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeletePhysicalConnectionResponse
     */
    public function deletePhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePhysicalConnectionResponse::fromMap($this->doRequest('DeletePhysicalConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeletePhysicalConnectionRequest $request
     *
     * @return DeletePhysicalConnectionResponse
     */
    public function deletePhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNatGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteNatGatewayResponse
     */
    public function deleteNatGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteNatGatewayResponse::fromMap($this->doRequest('DeleteNatGateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteNatGatewayRequest $request
     *
     * @return DeleteNatGatewayResponse
     */
    public function deleteNatGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHaVipRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteHaVipResponse
     */
    public function deleteHaVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteHaVipResponse::fromMap($this->doRequest('DeleteHaVip', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteHaVipRequest $request
     *
     * @return DeleteHaVipResponse
     */
    public function deleteHaVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHaVipWithOptions($request, $runtime);
    }

    /**
     * @param DeleteForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteForwardEntryResponse
     */
    public function deleteForwardEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteForwardEntryResponse::fromMap($this->doRequest('DeleteForwardEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteForwardEntryRequest $request
     *
     * @return DeleteForwardEntryResponse
     */
    public function deleteForwardEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteForwardEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBandwidthPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBandwidthPackageResponse::fromMap($this->doRequest('DeleteBandwidthPackage', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteBandwidthPackageRequest $request
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param DeactivateRouterInterfaceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeactivateRouterInterfaceResponse
     */
    public function deactivateRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeactivateRouterInterfaceResponse::fromMap($this->doRequest('DeactivateRouterInterface', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeactivateRouterInterfaceRequest $request
     *
     * @return DeactivateRouterInterfaceResponse
     */
    public function deactivateRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVSwitchResponse::fromMap($this->doRequest('CreateVSwitch', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateVSwitchRequest $request
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVSwitchWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpcRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateVpcResponse
     */
    public function createVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVpcResponse::fromMap($this->doRequest('CreateVpc', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateVpcRequest $request
     *
     * @return CreateVpcResponse
     */
    public function createVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcWithOptions($request, $runtime);
    }

    /**
     * @param CreateVirtualBorderRouterRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateVirtualBorderRouterResponse
     */
    public function createVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVirtualBorderRouterResponse::fromMap($this->doRequest('CreateVirtualBorderRouter', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateVirtualBorderRouterRequest $request
     *
     * @return CreateVirtualBorderRouterResponse
     */
    public function createVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param CreateRouterInterfaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateRouterInterfaceResponse
     */
    public function createRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRouterInterfaceResponse::fromMap($this->doRequest('CreateRouterInterface', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateRouterInterfaceRequest $request
     *
     * @return CreateRouterInterfaceResponse
     */
    public function createRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateRouteEntryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRouteEntryResponse
     */
    public function createRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRouteEntryResponse::fromMap($this->doRequest('CreateRouteEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateRouteEntryRequest $request
     *
     * @return CreateRouteEntryResponse
     */
    public function createRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @param CreatePhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePhysicalConnectionResponse
     */
    public function createPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePhysicalConnectionResponse::fromMap($this->doRequest('CreatePhysicalConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreatePhysicalConnectionRequest $request
     *
     * @return CreatePhysicalConnectionResponse
     */
    public function createPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateNatGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateNatGatewayResponse
     */
    public function createNatGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateNatGatewayResponse::fromMap($this->doRequest('CreateNatGateway', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateNatGatewayRequest $request
     *
     * @return CreateNatGatewayResponse
     */
    public function createNatGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNatGatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateHaVipRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateHaVipResponse
     */
    public function createHaVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateHaVipResponse::fromMap($this->doRequest('CreateHaVip', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateHaVipRequest $request
     *
     * @return CreateHaVipResponse
     */
    public function createHaVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHaVipWithOptions($request, $runtime);
    }

    /**
     * @param CreateForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateForwardEntryResponse
     */
    public function createForwardEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateForwardEntryResponse::fromMap($this->doRequest('CreateForwardEntry', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateForwardEntryRequest $request
     *
     * @return CreateForwardEntryResponse
     */
    public function createForwardEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createForwardEntryWithOptions($request, $runtime);
    }

    /**
     * @param ConnectRouterInterfaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConnectRouterInterfaceResponse
     */
    public function connectRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConnectRouterInterfaceResponse::fromMap($this->doRequest('ConnectRouterInterface', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ConnectRouterInterfaceRequest $request
     *
     * @return ConnectRouterInterfaceResponse
     */
    public function connectRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->connectRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param CancelPhysicalConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelPhysicalConnectionResponse
     */
    public function cancelPhysicalConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelPhysicalConnectionResponse::fromMap($this->doRequest('CancelPhysicalConnection', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param CancelPhysicalConnectionRequest $request
     *
     * @return CancelPhysicalConnectionResponse
     */
    public function cancelPhysicalConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @param AssociateHaVipRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AssociateHaVipResponse
     */
    public function associateHaVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AssociateHaVipResponse::fromMap($this->doRequest('AssociateHaVip', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssociateHaVipRequest $request
     *
     * @return AssociateHaVipResponse
     */
    public function associateHaVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateHaVipWithOptions($request, $runtime);
    }

    /**
     * @param AssociateEipAddressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AssociateEipAddressResponse::fromMap($this->doRequest('AssociateEipAddress', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssociateEipAddressRequest $request
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param AllocateEipAddressRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AllocateEipAddressResponse::fromMap($this->doRequest('AllocateEipAddress', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AllocateEipAddressRequest $request
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param AddBandwidthPackageIpsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddBandwidthPackageIpsResponse
     */
    public function addBandwidthPackageIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddBandwidthPackageIpsResponse::fromMap($this->doRequest('AddBandwidthPackageIps', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddBandwidthPackageIpsRequest $request
     *
     * @return AddBandwidthPackageIpsResponse
     */
    public function addBandwidthPackageIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBandwidthPackageIpsWithOptions($request, $runtime);
    }

    /**
     * @param ActivateRouterInterfaceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ActivateRouterInterfaceResponse
     */
    public function activateRouterInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ActivateRouterInterfaceResponse::fromMap($this->doRequest('ActivateRouterInterface', 'HTTPS', 'POST', '2016-04-28', 'AK', null, $request, $runtime));
    }

    /**
     * @param ActivateRouterInterfaceRequest $request
     *
     * @return ActivateRouterInterfaceResponse
     */
    public function activateRouterInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateRouterInterfaceWithOptions($request, $runtime);
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
