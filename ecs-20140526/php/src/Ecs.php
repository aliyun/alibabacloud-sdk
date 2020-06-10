<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AcceptInquiredSystemEventRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AcceptInquiredSystemEventResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ActivateRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ActivateRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AddBandwidthPackageIpsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AddBandwidthPackageIpsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AddTagsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AddTagsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateEipAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateEipAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocatePublicIpAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocatePublicIpAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ApplyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ApplyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignIpv6AddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignIpv6AddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssociateEipAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssociateEipAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssociateHaVipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssociateHaVipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachClassicLinkVpcRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachClassicLinkVpcResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachKeyPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachKeyPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelCopyImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelCopyImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelPhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelPhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelSimulatedSystemEventsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelSimulatedSystemEventsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelTaskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ConnectRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ConnectRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ConvertNatPublicIpToEipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ConvertNatPublicIpToEipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopyImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopyImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDemandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDemandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDeploymentSetRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDeploymentSetResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateForwardEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateForwardEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateHaVipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateHaVipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateHpcClusterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateHpcClusterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateKeyPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateKeyPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfacePermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfacePermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateRouteEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateRouteEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateStorageSetRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateStorageSetResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVpcRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVpcResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVSwitchRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateVSwitchResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeactivateRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeactivateRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteAutoProvisioningGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteAutoProvisioningGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteBandwidthPackageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteBandwidthPackageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDemandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDemandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDeploymentSetRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDeploymentSetResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteForwardEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteForwardEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteHaVipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteHaVipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteHpcClusterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteHpcClusterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteKeyPairsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteKeyPairsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNatGatewayRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNatGatewayResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNetworkInterfacePermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNetworkInterfacePermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeletePhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeletePhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteRouteEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteRouteEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteRouterInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteRouterInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteStorageSetRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteStorageSetResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVpcRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVpcResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVSwitchRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteVSwitchResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClassicLinkInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClassicLinkInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypeFamiliesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypeFamiliesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceVncPasswdRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceVncPasswdResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceVncUrlRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceVncUrlResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLimitationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLimitationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNewProjectEipMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNewProjectEipMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourceByTagsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourceByTagsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotMonitorDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotMonitorDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsUsageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsUsageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetDetailsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetDetailsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeUserBusinessBehaviorRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeUserBusinessBehaviorResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeUserDataRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeUserDataResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachClassicLinkVpcRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachClassicLinkVpcResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachKeyPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachKeyPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipFillParamsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipFillParamsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipFillProductRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipFillProductResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipNotifyPaidRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EipNotifyPaidResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EnablePhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\EnablePhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ExportImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ExportImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ExportSnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ExportSnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\GetInstanceConsoleOutputRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\GetInstanceConsoleOutputResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\GetInstanceScreenshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\GetInstanceScreenshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportKeyPairRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportKeyPairResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportSnapshotRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportSnapshotResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\InstallCloudAssistantRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\InstallCloudAssistantResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\InvokeCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\InvokeCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\JoinResourceGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\JoinResourceGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\JoinSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\JoinSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\LeaveSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\LeaveSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoProvisioningGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoProvisioningGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyExRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyExResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyBandwidthPackageSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyBandwidthPackageSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAutoReleaseTimeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAutoReleaseTimeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostsChargeTypeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostsChargeTypeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDemandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDemandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDeploymentSetAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDeploymentSetAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskChargeTypeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskChargeTypeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyEipAddressAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyEipAddressAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyForwardEntryRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyForwardEntryResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyHaVipAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyHaVipAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyHpcClusterAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyHpcClusterAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageShareGroupPermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageShareGroupPermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageSharePermissionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageSharePermissionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAutoReleaseTimeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAutoReleaseTimeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceDeploymentRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceDeploymentResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMaintenanceAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMaintenanceAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMetadataOptionsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMetadataOptionsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceNetworkSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceNetworkSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceVncPasswdRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceVncPasswdResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceVpcAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceVpcAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyLaunchTemplateDefaultVersionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyLaunchTemplateDefaultVersionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPhysicalConnectionAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPhysicalConnectionAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrepayInstanceSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrepayInstanceSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstanceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstanceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyRouterInterfaceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyRouterInterfaceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyRouterInterfaceSpecRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyRouterInterfaceSpecResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupEgressRuleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupEgressRuleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupRuleRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySecurityGroupRuleResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySnapshotAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifySnapshotAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyStorageCapacityUnitAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyStorageCapacityUnitAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyStorageSetAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyStorageSetAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyUserBusinessBehaviorRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyUserBusinessBehaviorResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVirtualBorderRouterAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVirtualBorderRouterAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVpcAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVpcAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVRouterAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVRouterAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVSwitchAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyVSwitchAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseReservedInstancesOfferingRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseReservedInstancesOfferingResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReActivateInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReActivateInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RecoverVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RecoverVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RedeployDedicatedHostRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RedeployDedicatedHostResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RedeployInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RedeployInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReInitDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReInitDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseDedicatedHostRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseDedicatedHostResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseEipAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleaseEipAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleasePublicIpAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReleasePublicIpAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RemoveBandwidthPackageIpsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RemoveBandwidthPackageIpsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RemoveTagsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RemoveTagsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewDedicatedHostsRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewDedicatedHostsResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReportInstancesStatusRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ReportInstancesStatusResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResizeDiskRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResizeDiskResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StartInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInvocationRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInvocationResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TerminatePhysicalConnectionRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TerminatePhysicalConnectionResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TerminateVirtualBorderRouterRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\TerminateVirtualBorderRouterResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassignIpv6AddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassignIpv6AddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassignPrivateIpAddressesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassignPrivateIpAddressesResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassociateEipAddressRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassociateEipAddressResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassociateHaVipRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UnassociateHaVipResponse;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ecs\V20140526\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ecs extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-beijing'                  => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou'                 => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai'                 => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen'                 => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hongkong'                 => 'ecs-cn-hangzhou.aliyuncs.com',
            'ap-southeast-1'              => 'ecs-cn-hangzhou.aliyuncs.com',
            'us-west-1'                   => 'ecs-cn-hangzhou.aliyuncs.com',
            'us-east-1'                   => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-north-2-gov-1'            => 'ecs.aliyuncs.com',
            'ap-northeast-2-pop'          => 'ecs.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ecs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ecs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ecs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-edge-1'                   => 'ecs.cn-qingdao-nebula.aliyuncs.com',
            'cn-fujian'                   => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ecs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ecs.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai-inner'           => 'ecs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ecs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-wuhan'                    => 'ecs.aliyuncs.com',
            'cn-yushanfang'               => 'ecs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ecs.cn-zhangjiakou.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ecs.cn-qingdao-nebula.aliyuncs.com',
            'eu-west-1-oxs'               => 'ecs.cn-shenzhen-cloudstone.aliyuncs.com',
            'rus-west-1-pop'              => 'ecs.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNetworkInterfaceAttributeResponse
     */
    public function describeNetworkInterfaceAttributeWithOptions(DescribeNetworkInterfaceAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeNetworkInterfaceAttributeResponse::fromMap($this->doRequest('DescribeNetworkInterfaceAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNetworkInterfaceAttributeResponse
     */
    public function describeNetworkInterfaceAttribute(DescribeNetworkInterfaceAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInterfaceAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CopySnapshotResponse
     */
    public function copySnapshotWithOptions(CopySnapshotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CopySnapshotResponse::fromMap($this->doRequest('CopySnapshot', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CopySnapshotResponse
     */
    public function copySnapshot(CopySnapshotRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copySnapshotWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostsChargeTypeResponse
     */
    public function modifyDedicatedHostsChargeTypeWithOptions(ModifyDedicatedHostsChargeTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDedicatedHostsChargeTypeResponse::fromMap($this->doRequest('ModifyDedicatedHostsChargeType', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostsChargeTypeResponse
     */
    public function modifyDedicatedHostsChargeType(ModifyDedicatedHostsChargeTypeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostsChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceMetadataOptionsResponse
     */
    public function modifyInstanceMetadataOptionsWithOptions(ModifyInstanceMetadataOptionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceMetadataOptionsResponse::fromMap($this->doRequest('ModifyInstanceMetadataOptions', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceMetadataOptionsResponse
     */
    public function modifyInstanceMetadataOptions(ModifyInstanceMetadataOptionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMetadataOptionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImageFromFamilyResponse
     */
    public function describeImageFromFamilyWithOptions(DescribeImageFromFamilyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeImageFromFamilyResponse::fromMap($this->doRequest('DescribeImageFromFamily', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImageFromFamilyResponse
     */
    public function describeImageFromFamily(DescribeImageFromFamilyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageFromFamilyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopInstancesResponse
     */
    public function stopInstancesWithOptions(StopInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopInstancesResponse::fromMap($this->doRequest('StopInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopInstancesResponse
     */
    public function stopInstances(StopInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartInstancesResponse
     */
    public function startInstancesWithOptions(StartInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartInstancesResponse::fromMap($this->doRequest('StartInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartInstancesResponse
     */
    public function startInstances(StartInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RebootInstancesResponse
     */
    public function rebootInstancesWithOptions(RebootInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RebootInstancesResponse::fromMap($this->doRequest('RebootInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RebootInstancesResponse
     */
    public function rebootInstances(RebootInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RedeployDedicatedHostResponse
     */
    public function redeployDedicatedHostWithOptions(RedeployDedicatedHostRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RedeployDedicatedHostResponse::fromMap($this->doRequest('RedeployDedicatedHost', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RedeployDedicatedHostResponse
     */
    public function redeployDedicatedHost(RedeployDedicatedHostRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->redeployDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceMaintenanceAttributesResponse
     */
    public function modifyInstanceMaintenanceAttributesWithOptions(ModifyInstanceMaintenanceAttributesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceMaintenanceAttributesResponse::fromMap($this->doRequest('ModifyInstanceMaintenanceAttributes', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceMaintenanceAttributesResponse
     */
    public function modifyInstanceMaintenanceAttributes(ModifyInstanceMaintenanceAttributesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMaintenanceAttributesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceMaintenanceAttributesResponse
     */
    public function describeInstanceMaintenanceAttributesWithOptions(DescribeInstanceMaintenanceAttributesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceMaintenanceAttributesResponse::fromMap($this->doRequest('DescribeInstanceMaintenanceAttributes', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceMaintenanceAttributesResponse
     */
    public function describeInstanceMaintenanceAttributes(DescribeInstanceMaintenanceAttributesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMaintenanceAttributesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDemandResponse
     */
    public function modifyDemandWithOptions(ModifyDemandRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDemandResponse::fromMap($this->doRequest('ModifyDemand', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDemandResponse
     */
    public function modifyDemand(ModifyDemandRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDemandWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDemandResponse
     */
    public function deleteDemandWithOptions(DeleteDemandRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDemandResponse::fromMap($this->doRequest('DeleteDemand', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDemandResponse
     */
    public function deleteDemand(DeleteDemandRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDemandWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDemandResponse
     */
    public function createDemandWithOptions(CreateDemandRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDemandResponse::fromMap($this->doRequest('CreateDemand', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDemandResponse
     */
    public function createDemand(CreateDemandRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDemandWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PurchaseStorageCapacityUnitResponse
     */
    public function purchaseStorageCapacityUnitWithOptions(PurchaseStorageCapacityUnitRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PurchaseStorageCapacityUnitResponse::fromMap($this->doRequest('PurchaseStorageCapacityUnit', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PurchaseStorageCapacityUnitResponse
     */
    public function purchaseStorageCapacityUnit(PurchaseStorageCapacityUnitRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseStorageCapacityUnitWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyStorageCapacityUnitAttributeResponse
     */
    public function modifyStorageCapacityUnitAttributeWithOptions(ModifyStorageCapacityUnitAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyStorageCapacityUnitAttributeResponse::fromMap($this->doRequest('ModifyStorageCapacityUnitAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyStorageCapacityUnitAttributeResponse
     */
    public function modifyStorageCapacityUnitAttribute(ModifyStorageCapacityUnitAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStorageCapacityUnitAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeStorageCapacityUnitsResponse
     */
    public function describeStorageCapacityUnitsWithOptions(DescribeStorageCapacityUnitsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeStorageCapacityUnitsResponse::fromMap($this->doRequest('DescribeStorageCapacityUnits', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeStorageCapacityUnitsResponse
     */
    public function describeStorageCapacityUnits(DescribeStorageCapacityUnitsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageCapacityUnitsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RunCommandResponse
     */
    public function runCommandWithOptions(RunCommandRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RunCommandResponse::fromMap($this->doRequest('RunCommand', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RunCommandResponse
     */
    public function runCommand(RunCommandRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstancesWithOptions(DeleteInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteInstancesResponse::fromMap($this->doRequest('DeleteInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstances(DeleteInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyStorageSetAttributeResponse
     */
    public function modifyStorageSetAttributeWithOptions(ModifyStorageSetAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyStorageSetAttributeResponse::fromMap($this->doRequest('ModifyStorageSetAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyStorageSetAttributeResponse
     */
    public function modifyStorageSetAttribute(ModifyStorageSetAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStorageSetAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeStorageSetsResponse
     */
    public function describeStorageSetsWithOptions(DescribeStorageSetsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeStorageSetsResponse::fromMap($this->doRequest('DescribeStorageSets', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeStorageSetsResponse
     */
    public function describeStorageSets(DescribeStorageSetsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageSetsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeStorageSetDetailsResponse
     */
    public function describeStorageSetDetailsWithOptions(DescribeStorageSetDetailsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeStorageSetDetailsResponse::fromMap($this->doRequest('DescribeStorageSetDetails', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeStorageSetDetailsResponse
     */
    public function describeStorageSetDetails(DescribeStorageSetDetailsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageSetDetailsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStorageSetResponse
     */
    public function deleteStorageSetWithOptions(DeleteStorageSetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteStorageSetResponse::fromMap($this->doRequest('DeleteStorageSet', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStorageSetResponse
     */
    public function deleteStorageSet(DeleteStorageSetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStorageSetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateStorageSetResponse
     */
    public function createStorageSetWithOptions(CreateStorageSetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateStorageSetResponse::fromMap($this->doRequest('CreateStorageSet', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateStorageSetResponse
     */
    public function createStorageSet(CreateStorageSetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStorageSetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDiskSpecResponse
     */
    public function modifyDiskSpecWithOptions(ModifyDiskSpecRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDiskSpecResponse::fromMap($this->doRequest('ModifyDiskSpec', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDiskSpecResponse
     */
    public function modifyDiskSpec(ModifyDiskSpecRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskSpecWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAutoProvisioningGroupResponse
     */
    public function modifyAutoProvisioningGroupWithOptions(ModifyAutoProvisioningGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyAutoProvisioningGroupResponse::fromMap($this->doRequest('ModifyAutoProvisioningGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAutoProvisioningGroupResponse
     */
    public function modifyAutoProvisioningGroup(ModifyAutoProvisioningGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoProvisioningGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoProvisioningGroupsResponse
     */
    public function describeAutoProvisioningGroupsWithOptions(DescribeAutoProvisioningGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAutoProvisioningGroupsResponse::fromMap($this->doRequest('DescribeAutoProvisioningGroups', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoProvisioningGroupsResponse
     */
    public function describeAutoProvisioningGroups(DescribeAutoProvisioningGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoProvisioningGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoProvisioningGroupInstancesResponse
     */
    public function describeAutoProvisioningGroupInstancesWithOptions(DescribeAutoProvisioningGroupInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAutoProvisioningGroupInstancesResponse::fromMap($this->doRequest('DescribeAutoProvisioningGroupInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoProvisioningGroupInstancesResponse
     */
    public function describeAutoProvisioningGroupInstances(DescribeAutoProvisioningGroupInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoProvisioningGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAutoProvisioningGroupResponse
     */
    public function deleteAutoProvisioningGroupWithOptions(DeleteAutoProvisioningGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAutoProvisioningGroupResponse::fromMap($this->doRequest('DeleteAutoProvisioningGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAutoProvisioningGroupResponse
     */
    public function deleteAutoProvisioningGroup(DeleteAutoProvisioningGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoProvisioningGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAutoProvisioningGroupResponse
     */
    public function createAutoProvisioningGroupWithOptions(CreateAutoProvisioningGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAutoProvisioningGroupResponse::fromMap($this->doRequest('CreateAutoProvisioningGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAutoProvisioningGroupResponse
     */
    public function createAutoProvisioningGroup(CreateAutoProvisioningGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoProvisioningGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoProvisioningGroupHistoryResponse
     */
    public function describeAutoProvisioningGroupHistoryWithOptions(DescribeAutoProvisioningGroupHistoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAutoProvisioningGroupHistoryResponse::fromMap($this->doRequest('DescribeAutoProvisioningGroupHistory', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoProvisioningGroupHistoryResponse
     */
    public function describeAutoProvisioningGroupHistory(DescribeAutoProvisioningGroupHistoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoProvisioningGroupHistoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReportInstancesStatusResponse
     */
    public function reportInstancesStatusWithOptions(ReportInstancesStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReportInstancesStatusResponse::fromMap($this->doRequest('ReportInstancesStatus', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReportInstancesStatusResponse
     */
    public function reportInstancesStatus(ReportInstancesStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportInstancesStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyReservedInstanceAttributeResponse
     */
    public function modifyReservedInstanceAttributeWithOptions(ModifyReservedInstanceAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyReservedInstanceAttributeResponse::fromMap($this->doRequest('ModifyReservedInstanceAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyReservedInstanceAttributeResponse
     */
    public function modifyReservedInstanceAttribute(ModifyReservedInstanceAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReservedInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PurchaseReservedInstancesOfferingResponse
     */
    public function purchaseReservedInstancesOfferingWithOptions(PurchaseReservedInstancesOfferingRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PurchaseReservedInstancesOfferingResponse::fromMap($this->doRequest('PurchaseReservedInstancesOffering', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PurchaseReservedInstancesOfferingResponse
     */
    public function purchaseReservedInstancesOffering(PurchaseReservedInstancesOfferingRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseReservedInstancesOfferingWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyReservedInstancesResponse
     */
    public function modifyReservedInstancesWithOptions(ModifyReservedInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyReservedInstancesResponse::fromMap($this->doRequest('ModifyReservedInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyReservedInstancesResponse
     */
    public function modifyReservedInstances(ModifyReservedInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReservedInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReservedInstancesResponse
     */
    public function describeReservedInstancesWithOptions(DescribeReservedInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeReservedInstancesResponse::fromMap($this->doRequest('DescribeReservedInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReservedInstancesResponse
     */
    public function describeReservedInstances(DescribeReservedInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDemandsResponse
     */
    public function describeDemandsWithOptions(DescribeDemandsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDemandsResponse::fromMap($this->doRequest('DescribeDemands', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDemandsResponse
     */
    public function describeDemands(DescribeDemandsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDemandsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImportSnapshotResponse
     */
    public function importSnapshotWithOptions(ImportSnapshotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImportSnapshotResponse::fromMap($this->doRequest('ImportSnapshot', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImportSnapshotResponse
     */
    public function importSnapshot(ImportSnapshotRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importSnapshotWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ExportSnapshotResponse
     */
    public function exportSnapshotWithOptions(ExportSnapshotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ExportSnapshotResponse::fromMap($this->doRequest('ExportSnapshot', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ExportSnapshotResponse
     */
    public function exportSnapshot(ExportSnapshotRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportSnapshotWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions(UntagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourcesResponse
     */
    public function untagResources(UntagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions(TagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TagResourcesResponse
     */
    public function tagResources(TagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions(ListTagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources(ListTagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AcceptInquiredSystemEventResponse
     */
    public function acceptInquiredSystemEventWithOptions(AcceptInquiredSystemEventRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AcceptInquiredSystemEventResponse::fromMap($this->doRequest('AcceptInquiredSystemEvent', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AcceptInquiredSystemEventResponse
     */
    public function acceptInquiredSystemEvent(AcceptInquiredSystemEventRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptInquiredSystemEventWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RedeployInstanceResponse
     */
    public function redeployInstanceWithOptions(RedeployInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RedeployInstanceResponse::fromMap($this->doRequest('RedeployInstance', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RedeployInstanceResponse
     */
    public function redeployInstance(RedeployInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->redeployInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UnassignIpv6AddressesResponse
     */
    public function unassignIpv6AddressesWithOptions(UnassignIpv6AddressesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UnassignIpv6AddressesResponse::fromMap($this->doRequest('UnassignIpv6Addresses', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UnassignIpv6AddressesResponse
     */
    public function unassignIpv6Addresses(UnassignIpv6AddressesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignIpv6AddressesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AssignIpv6AddressesResponse
     */
    public function assignIpv6AddressesWithOptions(AssignIpv6AddressesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AssignIpv6AddressesResponse::fromMap($this->doRequest('AssignIpv6Addresses', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AssignIpv6AddressesResponse
     */
    public function assignIpv6Addresses(AssignIpv6AddressesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignIpv6AddressesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopologyWithOptions(DescribeInstanceTopologyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceTopologyResponse::fromMap($this->doRequest('DescribeInstanceTopology', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopology(DescribeInstanceTopologyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RenewDedicatedHostsResponse
     */
    public function renewDedicatedHostsWithOptions(RenewDedicatedHostsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RenewDedicatedHostsResponse::fromMap($this->doRequest('RenewDedicatedHosts', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RenewDedicatedHostsResponse
     */
    public function renewDedicatedHosts(RenewDedicatedHostsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseDedicatedHostResponse
     */
    public function releaseDedicatedHostWithOptions(ReleaseDedicatedHostRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReleaseDedicatedHostResponse::fromMap($this->doRequest('ReleaseDedicatedHost', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseDedicatedHostResponse
     */
    public function releaseDedicatedHost(ReleaseDedicatedHostRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceDeploymentResponse
     */
    public function modifyInstanceDeploymentWithOptions(ModifyInstanceDeploymentRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceDeploymentResponse::fromMap($this->doRequest('ModifyInstanceDeployment', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceDeploymentResponse
     */
    public function modifyInstanceDeployment(ModifyInstanceDeploymentRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceDeploymentWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAutoRenewAttributeResponse
     */
    public function modifyDedicatedHostAutoRenewAttributeWithOptions(ModifyDedicatedHostAutoRenewAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDedicatedHostAutoRenewAttributeResponse::fromMap($this->doRequest('ModifyDedicatedHostAutoRenewAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAutoRenewAttributeResponse
     */
    public function modifyDedicatedHostAutoRenewAttribute(ModifyDedicatedHostAutoRenewAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAutoReleaseTimeResponse
     */
    public function modifyDedicatedHostAutoReleaseTimeWithOptions(ModifyDedicatedHostAutoReleaseTimeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDedicatedHostAutoReleaseTimeResponse::fromMap($this->doRequest('ModifyDedicatedHostAutoReleaseTime', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAutoReleaseTimeResponse
     */
    public function modifyDedicatedHostAutoReleaseTime(ModifyDedicatedHostAutoReleaseTimeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAutoReleaseTimeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttributeWithOptions(ModifyDedicatedHostAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDedicatedHostAttributeResponse::fromMap($this->doRequest('ModifyDedicatedHostAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttribute(ModifyDedicatedHostAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHostsWithOptions(DescribeDedicatedHostsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDedicatedHostsResponse::fromMap($this->doRequest('DescribeDedicatedHosts', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHosts(DescribeDedicatedHostsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostTypesResponse
     */
    public function describeDedicatedHostTypesWithOptions(DescribeDedicatedHostTypesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDedicatedHostTypesResponse::fromMap($this->doRequest('DescribeDedicatedHostTypes', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostTypesResponse
     */
    public function describeDedicatedHostTypes(DescribeDedicatedHostTypesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostTypesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostAutoRenewResponse
     */
    public function describeDedicatedHostAutoRenewWithOptions(DescribeDedicatedHostAutoRenewRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDedicatedHostAutoRenewResponse::fromMap($this->doRequest('DescribeDedicatedHostAutoRenew', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostAutoRenewResponse
     */
    public function describeDedicatedHostAutoRenew(DescribeDedicatedHostAutoRenewRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostAutoRenewWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AllocateDedicatedHostsResponse
     */
    public function allocateDedicatedHostsWithOptions(AllocateDedicatedHostsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AllocateDedicatedHostsResponse::fromMap($this->doRequest('AllocateDedicatedHosts', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AllocateDedicatedHostsResponse
     */
    public function allocateDedicatedHosts(AllocateDedicatedHostsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateSimulatedSystemEventsResponse
     */
    public function createSimulatedSystemEventsWithOptions(CreateSimulatedSystemEventsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateSimulatedSystemEventsResponse::fromMap($this->doRequest('CreateSimulatedSystemEvents', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateSimulatedSystemEventsResponse
     */
    public function createSimulatedSystemEvents(CreateSimulatedSystemEventsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimulatedSystemEventsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelSimulatedSystemEventsResponse
     */
    public function cancelSimulatedSystemEventsWithOptions(CancelSimulatedSystemEventsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelSimulatedSystemEventsResponse::fromMap($this->doRequest('CancelSimulatedSystemEvents', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelSimulatedSystemEventsResponse
     */
    public function cancelSimulatedSystemEvents(CancelSimulatedSystemEventsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSimulatedSystemEventsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEniMonitorDataResponse
     */
    public function describeEniMonitorDataWithOptions(DescribeEniMonitorDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeEniMonitorDataResponse::fromMap($this->doRequest('DescribeEniMonitorData', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEniMonitorDataResponse
     */
    public function describeEniMonitorData(DescribeEniMonitorDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEniMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccountAttributesResponse
     */
    public function describeAccountAttributesWithOptions(DescribeAccountAttributesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAccountAttributesResponse::fromMap($this->doRequest('DescribeAccountAttributes', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccountAttributesResponse
     */
    public function describeAccountAttributes(DescribeAccountAttributesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAttributesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyLaunchTemplateDefaultVersionResponse
     */
    public function modifyLaunchTemplateDefaultVersionWithOptions(ModifyLaunchTemplateDefaultVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyLaunchTemplateDefaultVersionResponse::fromMap($this->doRequest('ModifyLaunchTemplateDefaultVersion', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyLaunchTemplateDefaultVersionResponse
     */
    public function modifyLaunchTemplateDefaultVersion(ModifyLaunchTemplateDefaultVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLaunchTemplateDefaultVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLaunchTemplatesResponse
     */
    public function describeLaunchTemplatesWithOptions(DescribeLaunchTemplatesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeLaunchTemplatesResponse::fromMap($this->doRequest('DescribeLaunchTemplates', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLaunchTemplatesResponse
     */
    public function describeLaunchTemplates(DescribeLaunchTemplatesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLaunchTemplatesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLaunchTemplateVersionsResponse
     */
    public function describeLaunchTemplateVersionsWithOptions(DescribeLaunchTemplateVersionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeLaunchTemplateVersionsResponse::fromMap($this->doRequest('DescribeLaunchTemplateVersions', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLaunchTemplateVersionsResponse
     */
    public function describeLaunchTemplateVersions(DescribeLaunchTemplateVersionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLaunchTemplateVersionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLaunchTemplateVersionResponse
     */
    public function deleteLaunchTemplateVersionWithOptions(DeleteLaunchTemplateVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteLaunchTemplateVersionResponse::fromMap($this->doRequest('DeleteLaunchTemplateVersion', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLaunchTemplateVersionResponse
     */
    public function deleteLaunchTemplateVersion(DeleteLaunchTemplateVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLaunchTemplateVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLaunchTemplateResponse
     */
    public function deleteLaunchTemplateWithOptions(DeleteLaunchTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteLaunchTemplateResponse::fromMap($this->doRequest('DeleteLaunchTemplate', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLaunchTemplateResponse
     */
    public function deleteLaunchTemplate(DeleteLaunchTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLaunchTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateLaunchTemplateVersionResponse
     */
    public function createLaunchTemplateVersionWithOptions(CreateLaunchTemplateVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateLaunchTemplateVersionResponse::fromMap($this->doRequest('CreateLaunchTemplateVersion', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateLaunchTemplateVersionResponse
     */
    public function createLaunchTemplateVersion(CreateLaunchTemplateVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLaunchTemplateVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateLaunchTemplateResponse
     */
    public function createLaunchTemplateWithOptions(CreateLaunchTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateLaunchTemplateResponse::fromMap($this->doRequest('CreateLaunchTemplate', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateLaunchTemplateResponse
     */
    public function createLaunchTemplate(CreateLaunchTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLaunchTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return InstallCloudAssistantResponse
     */
    public function installCloudAssistantWithOptions(InstallCloudAssistantRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return InstallCloudAssistantResponse::fromMap($this->doRequest('InstallCloudAssistant', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return InstallCloudAssistantResponse
     */
    public function installCloudAssistant(InstallCloudAssistantRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudAssistantWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCloudAssistantStatusResponse
     */
    public function describeCloudAssistantStatusWithOptions(DescribeCloudAssistantStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCloudAssistantStatusResponse::fromMap($this->doRequest('DescribeCloudAssistantStatus', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCloudAssistantStatusResponse
     */
    public function describeCloudAssistantStatus(DescribeCloudAssistantStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudAssistantStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UnassignPrivateIpAddressesResponse
     */
    public function unassignPrivateIpAddressesWithOptions(UnassignPrivateIpAddressesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UnassignPrivateIpAddressesResponse::fromMap($this->doRequest('UnassignPrivateIpAddresses', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UnassignPrivateIpAddressesResponse
     */
    public function unassignPrivateIpAddresses(UnassignPrivateIpAddressesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignPrivateIpAddressesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AssignPrivateIpAddressesResponse
     */
    public function assignPrivateIpAddressesWithOptions(AssignPrivateIpAddressesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AssignPrivateIpAddressesResponse::fromMap($this->doRequest('AssignPrivateIpAddresses', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AssignPrivateIpAddressesResponse
     */
    public function assignPrivateIpAddresses(AssignPrivateIpAddressesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignPrivateIpAddressesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNetworkInterfacePermissionsResponse
     */
    public function describeNetworkInterfacePermissionsWithOptions(DescribeNetworkInterfacePermissionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeNetworkInterfacePermissionsResponse::fromMap($this->doRequest('DescribeNetworkInterfacePermissions', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNetworkInterfacePermissionsResponse
     */
    public function describeNetworkInterfacePermissions(DescribeNetworkInterfacePermissionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInterfacePermissionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteNetworkInterfacePermissionResponse
     */
    public function deleteNetworkInterfacePermissionWithOptions(DeleteNetworkInterfacePermissionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteNetworkInterfacePermissionResponse::fromMap($this->doRequest('DeleteNetworkInterfacePermission', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteNetworkInterfacePermissionResponse
     */
    public function deleteNetworkInterfacePermission(DeleteNetworkInterfacePermissionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkInterfacePermissionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateNetworkInterfacePermissionResponse
     */
    public function createNetworkInterfacePermissionWithOptions(CreateNetworkInterfacePermissionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateNetworkInterfacePermissionResponse::fromMap($this->doRequest('CreateNetworkInterfacePermission', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateNetworkInterfacePermissionResponse
     */
    public function createNetworkInterfacePermission(CreateNetworkInterfacePermissionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkInterfacePermissionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetInstanceScreenshotResponse
     */
    public function getInstanceScreenshotWithOptions(GetInstanceScreenshotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceScreenshotResponse::fromMap($this->doRequest('GetInstanceScreenshot', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetInstanceScreenshotResponse
     */
    public function getInstanceScreenshot(GetInstanceScreenshotRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceScreenshotWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetInstanceConsoleOutputResponse
     */
    public function getInstanceConsoleOutputWithOptions(GetInstanceConsoleOutputRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceConsoleOutputResponse::fromMap($this->doRequest('GetInstanceConsoleOutput', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetInstanceConsoleOutputResponse
     */
    public function getInstanceConsoleOutput(GetInstanceConsoleOutputRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceConsoleOutputWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeResourcesModificationResponse
     */
    public function describeResourcesModificationWithOptions(DescribeResourcesModificationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourcesModificationResponse::fromMap($this->doRequest('DescribeResourcesModification', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeResourcesModificationResponse
     */
    public function describeResourcesModification(DescribeResourcesModificationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcesModificationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBandwidthLimitationResponse
     */
    public function describeBandwidthLimitationWithOptions(DescribeBandwidthLimitationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeBandwidthLimitationResponse::fromMap($this->doRequest('DescribeBandwidthLimitation', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBandwidthLimitationResponse
     */
    public function describeBandwidthLimitation(DescribeBandwidthLimitationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthLimitationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions(DescribeAvailableResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableResourceResponse::fromMap($this->doRequest('DescribeAvailableResource', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource(DescribeAvailableResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReActivateInstancesResponse
     */
    public function reActivateInstancesWithOptions(ReActivateInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReActivateInstancesResponse::fromMap($this->doRequest('ReActivateInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReActivateInstancesResponse
     */
    public function reActivateInstances(ReActivateInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reActivateInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstancesFullStatusResponse
     */
    public function describeInstancesFullStatusWithOptions(DescribeInstancesFullStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstancesFullStatusResponse::fromMap($this->doRequest('DescribeInstancesFullStatus', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstancesFullStatusResponse
     */
    public function describeInstancesFullStatus(DescribeInstancesFullStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesFullStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceHistoryEventsResponse
     */
    public function describeInstanceHistoryEventsWithOptions(DescribeInstanceHistoryEventsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceHistoryEventsResponse::fromMap($this->doRequest('DescribeInstanceHistoryEvents', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceHistoryEventsResponse
     */
    public function describeInstanceHistoryEvents(DescribeInstanceHistoryEventsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceHistoryEventsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDisksFullStatusResponse
     */
    public function describeDisksFullStatusWithOptions(DescribeDisksFullStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDisksFullStatusResponse::fromMap($this->doRequest('DescribeDisksFullStatus', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDisksFullStatusResponse
     */
    public function describeDisksFullStatus(DescribeDisksFullStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisksFullStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyUserBusinessBehaviorResponse
     */
    public function modifyUserBusinessBehaviorWithOptions(ModifyUserBusinessBehaviorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyUserBusinessBehaviorResponse::fromMap($this->doRequest('ModifyUserBusinessBehavior', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyUserBusinessBehaviorResponse
     */
    public function modifyUserBusinessBehavior(ModifyUserBusinessBehaviorRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserBusinessBehaviorWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUserBusinessBehaviorResponse
     */
    public function describeUserBusinessBehaviorWithOptions(DescribeUserBusinessBehaviorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeUserBusinessBehaviorResponse::fromMap($this->doRequest('DescribeUserBusinessBehavior', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUserBusinessBehaviorResponse
     */
    public function describeUserBusinessBehavior(DescribeUserBusinessBehaviorRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBusinessBehaviorWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RunInstancesResponse
     */
    public function runInstancesWithOptions(RunInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RunInstancesResponse::fromMap($this->doRequest('RunInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RunInstancesResponse
     */
    public function runInstances(RunInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ConvertNatPublicIpToEipResponse
     */
    public function convertNatPublicIpToEipWithOptions(ConvertNatPublicIpToEipRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ConvertNatPublicIpToEipResponse::fromMap($this->doRequest('ConvertNatPublicIpToEip', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ConvertNatPublicIpToEipResponse
     */
    public function convertNatPublicIpToEip(ConvertNatPublicIpToEipRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertNatPublicIpToEipWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyHpcClusterAttributeResponse
     */
    public function modifyHpcClusterAttributeWithOptions(ModifyHpcClusterAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyHpcClusterAttributeResponse::fromMap($this->doRequest('ModifyHpcClusterAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyHpcClusterAttributeResponse
     */
    public function modifyHpcClusterAttribute(ModifyHpcClusterAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHpcClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHpcClustersResponse
     */
    public function describeHpcClustersWithOptions(DescribeHpcClustersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeHpcClustersResponse::fromMap($this->doRequest('DescribeHpcClusters', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHpcClustersResponse
     */
    public function describeHpcClusters(DescribeHpcClustersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHpcClustersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteHpcClusterResponse
     */
    public function deleteHpcClusterWithOptions(DeleteHpcClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteHpcClusterResponse::fromMap($this->doRequest('DeleteHpcCluster', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteHpcClusterResponse
     */
    public function deleteHpcCluster(DeleteHpcClusterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHpcClusterWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateHpcClusterResponse
     */
    public function createHpcClusterWithOptions(CreateHpcClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateHpcClusterResponse::fromMap($this->doRequest('CreateHpcCluster', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateHpcClusterResponse
     */
    public function createHpcCluster(CreateHpcClusterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHpcClusterWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotsUsageResponse
     */
    public function describeSnapshotsUsageWithOptions(DescribeSnapshotsUsageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSnapshotsUsageResponse::fromMap($this->doRequest('DescribeSnapshotsUsage', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotsUsageResponse
     */
    public function describeSnapshotsUsage(DescribeSnapshotsUsageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsUsageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSpotPriceHistoryResponse
     */
    public function describeSpotPriceHistoryWithOptions(DescribeSpotPriceHistoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSpotPriceHistoryResponse::fromMap($this->doRequest('DescribeSpotPriceHistory', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSpotPriceHistoryResponse
     */
    public function describeSpotPriceHistory(DescribeSpotPriceHistoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpotPriceHistoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopInvocationResponse
     */
    public function stopInvocationWithOptions(StopInvocationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopInvocationResponse::fromMap($this->doRequest('StopInvocation', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopInvocationResponse
     */
    public function stopInvocation(StopInvocationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInvocationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyCommandResponse
     */
    public function modifyCommandWithOptions(ModifyCommandRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyCommandResponse::fromMap($this->doRequest('ModifyCommand', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyCommandResponse
     */
    public function modifyCommand(ModifyCommandRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCommandWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return InvokeCommandResponse
     */
    public function invokeCommandWithOptions(InvokeCommandRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return InvokeCommandResponse::fromMap($this->doRequest('InvokeCommand', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return InvokeCommandResponse
     */
    public function invokeCommand(InvokeCommandRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeCommandWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions(DescribeInvocationsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInvocationsResponse::fromMap($this->doRequest('DescribeInvocations', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocations(DescribeInvocationsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInvocationResultsResponse
     */
    public function describeInvocationResultsWithOptions(DescribeInvocationResultsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInvocationResultsResponse::fromMap($this->doRequest('DescribeInvocationResults', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInvocationResultsResponse
     */
    public function describeInvocationResults(DescribeInvocationResultsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationResultsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCommandsResponse
     */
    public function describeCommandsWithOptions(DescribeCommandsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCommandsResponse::fromMap($this->doRequest('DescribeCommands', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCommandsResponse
     */
    public function describeCommands(DescribeCommandsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommandsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteCommandResponse
     */
    public function deleteCommandWithOptions(DeleteCommandRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteCommandResponse::fromMap($this->doRequest('DeleteCommand', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteCommandResponse
     */
    public function deleteCommand(DeleteCommandRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommandWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateCommandResponse
     */
    public function createCommandWithOptions(CreateCommandRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateCommandResponse::fromMap($this->doRequest('CreateCommand', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateCommandResponse
     */
    public function createCommand(CreateCommandRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommandWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupEgressRuleResponse
     */
    public function modifySecurityGroupEgressRuleWithOptions(ModifySecurityGroupEgressRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySecurityGroupEgressRuleResponse::fromMap($this->doRequest('ModifySecurityGroupEgressRule', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupEgressRuleResponse
     */
    public function modifySecurityGroupEgressRule(ModifySecurityGroupEgressRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupEgressRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDiskChargeTypeResponse
     */
    public function modifyDiskChargeTypeWithOptions(ModifyDiskChargeTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDiskChargeTypeResponse::fromMap($this->doRequest('ModifyDiskChargeType', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDiskChargeTypeResponse
     */
    public function modifyDiskChargeType(ModifyDiskChargeTypeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyNetworkInterfaceAttributeResponse
     */
    public function modifyNetworkInterfaceAttributeWithOptions(ModifyNetworkInterfaceAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyNetworkInterfaceAttributeResponse::fromMap($this->doRequest('ModifyNetworkInterfaceAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyNetworkInterfaceAttributeResponse
     */
    public function modifyNetworkInterfaceAttribute(ModifyNetworkInterfaceAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkInterfaceAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetachNetworkInterfaceResponse
     */
    public function detachNetworkInterfaceWithOptions(DetachNetworkInterfaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetachNetworkInterfaceResponse::fromMap($this->doRequest('DetachNetworkInterface', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetachNetworkInterfaceResponse
     */
    public function detachNetworkInterface(DetachNetworkInterfaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfacesWithOptions(DescribeNetworkInterfacesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeNetworkInterfacesResponse::fromMap($this->doRequest('DescribeNetworkInterfaces', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfaces(DescribeNetworkInterfacesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteNetworkInterfaceResponse
     */
    public function deleteNetworkInterfaceWithOptions(DeleteNetworkInterfaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteNetworkInterfaceResponse::fromMap($this->doRequest('DeleteNetworkInterface', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteNetworkInterfaceResponse
     */
    public function deleteNetworkInterface(DeleteNetworkInterfaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateNetworkInterfaceResponse
     */
    public function createNetworkInterfaceWithOptions(CreateNetworkInterfaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateNetworkInterfaceResponse::fromMap($this->doRequest('CreateNetworkInterface', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateNetworkInterfaceResponse
     */
    public function createNetworkInterface(CreateNetworkInterfaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AttachNetworkInterfaceResponse
     */
    public function attachNetworkInterfaceWithOptions(AttachNetworkInterfaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AttachNetworkInterfaceResponse::fromMap($this->doRequest('AttachNetworkInterface', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AttachNetworkInterfaceResponse
     */
    public function attachNetworkInterface(AttachNetworkInterfaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRecommendInstanceTypeResponse
     */
    public function describeRecommendInstanceTypeWithOptions(DescribeRecommendInstanceTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRecommendInstanceTypeResponse::fromMap($this->doRequest('DescribeRecommendInstanceType', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRecommendInstanceTypeResponse
     */
    public function describeRecommendInstanceType(DescribeRecommendInstanceTypeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpecWithOptions(ModifyPrepayInstanceSpecRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyPrepayInstanceSpecResponse::fromMap($this->doRequest('ModifyPrepayInstanceSpec', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpec(ModifyPrepayInstanceSpecRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrepayInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeTypeWithOptions(ModifyInstanceChargeTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceChargeTypeResponse::fromMap($this->doRequest('ModifyInstanceChargeType', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeType(ModifyInstanceChargeTypeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return JoinResourceGroupResponse
     */
    public function joinResourceGroupWithOptions(JoinResourceGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return JoinResourceGroupResponse::fromMap($this->doRequest('JoinResourceGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return JoinResourceGroupResponse
     */
    public function joinResourceGroup(JoinResourceGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupPolicyResponse
     */
    public function modifySecurityGroupPolicyWithOptions(ModifySecurityGroupPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySecurityGroupPolicyResponse::fromMap($this->doRequest('ModifySecurityGroupPolicy', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupPolicyResponse
     */
    public function modifySecurityGroupPolicy(ModifySecurityGroupPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecurityGroupReferencesResponse
     */
    public function describeSecurityGroupReferencesWithOptions(DescribeSecurityGroupReferencesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecurityGroupReferencesResponse::fromMap($this->doRequest('DescribeSecurityGroupReferences', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecurityGroupReferencesResponse
     */
    public function describeSecurityGroupReferences(DescribeSecurityGroupReferencesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupReferencesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetachClassicLinkVpcResponse
     */
    public function detachClassicLinkVpcWithOptions(DetachClassicLinkVpcRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetachClassicLinkVpcResponse::fromMap($this->doRequest('DetachClassicLinkVpc', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetachClassicLinkVpcResponse
     */
    public function detachClassicLinkVpc(DetachClassicLinkVpcRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachClassicLinkVpcWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClassicLinkInstancesResponse
     */
    public function describeClassicLinkInstancesWithOptions(DescribeClassicLinkInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeClassicLinkInstancesResponse::fromMap($this->doRequest('DescribeClassicLinkInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClassicLinkInstancesResponse
     */
    public function describeClassicLinkInstances(DescribeClassicLinkInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClassicLinkInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AttachClassicLinkVpcResponse
     */
    public function attachClassicLinkVpcWithOptions(AttachClassicLinkVpcRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AttachClassicLinkVpcResponse::fromMap($this->doRequest('AttachClassicLinkVpc', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AttachClassicLinkVpcResponse
     */
    public function attachClassicLinkVpc(AttachClassicLinkVpcRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachClassicLinkVpcWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetachInstanceRamRoleResponse
     */
    public function detachInstanceRamRoleWithOptions(DetachInstanceRamRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetachInstanceRamRoleResponse::fromMap($this->doRequest('DetachInstanceRamRole', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetachInstanceRamRoleResponse
     */
    public function detachInstanceRamRole(DetachInstanceRamRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachInstanceRamRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceRamRoleResponse
     */
    public function describeInstanceRamRoleWithOptions(DescribeInstanceRamRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceRamRoleResponse::fromMap($this->doRequest('DescribeInstanceRamRole', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceRamRoleResponse
     */
    public function describeInstanceRamRole(DescribeInstanceRamRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRamRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AttachInstanceRamRoleResponse
     */
    public function attachInstanceRamRoleWithOptions(AttachInstanceRamRoleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AttachInstanceRamRoleResponse::fromMap($this->doRequest('AttachInstanceRamRole', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AttachInstanceRamRoleResponse
     */
    public function attachInstanceRamRole(AttachInstanceRamRoleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachInstanceRamRoleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotPackageResponse
     */
    public function describeSnapshotPackageWithOptions(DescribeSnapshotPackageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSnapshotPackageResponse::fromMap($this->doRequest('DescribeSnapshotPackage', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotPackageResponse
     */
    public function describeSnapshotPackage(DescribeSnapshotPackageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotPackageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupRuleResponse
     */
    public function modifySecurityGroupRuleWithOptions(ModifySecurityGroupRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySecurityGroupRuleResponse::fromMap($this->doRequest('ModifySecurityGroupRule', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupRuleResponse
     */
    public function modifySecurityGroupRule(ModifySecurityGroupRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotMonitorDataResponse
     */
    public function describeSnapshotMonitorDataWithOptions(DescribeSnapshotMonitorDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSnapshotMonitorDataResponse::fromMap($this->doRequest('DescribeSnapshotMonitorData', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotMonitorDataResponse
     */
    public function describeSnapshotMonitorData(DescribeSnapshotMonitorDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPriceWithOptions(DescribeRenewalPriceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRenewalPriceResponse::fromMap($this->doRequest('DescribeRenewalPrice', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPrice(DescribeRenewalPriceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenewalPriceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions(DescribePriceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePriceResponse::fromMap($this->doRequest('DescribePrice', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePriceResponse
     */
    public function describePrice(DescribePriceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDeploymentSetAttributeResponse
     */
    public function modifyDeploymentSetAttributeWithOptions(ModifyDeploymentSetAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDeploymentSetAttributeResponse::fromMap($this->doRequest('ModifyDeploymentSetAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDeploymentSetAttributeResponse
     */
    public function modifyDeploymentSetAttribute(ModifyDeploymentSetAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeploymentSetAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDeploymentSetsResponse
     */
    public function describeDeploymentSetsWithOptions(DescribeDeploymentSetsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDeploymentSetsResponse::fromMap($this->doRequest('DescribeDeploymentSets', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDeploymentSetsResponse
     */
    public function describeDeploymentSets(DescribeDeploymentSetsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeploymentSetsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDeploymentSetResponse
     */
    public function deleteDeploymentSetWithOptions(DeleteDeploymentSetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeploymentSetResponse::fromMap($this->doRequest('DeleteDeploymentSet', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDeploymentSetResponse
     */
    public function deleteDeploymentSet(DeleteDeploymentSetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeploymentSetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDeploymentSetResponse
     */
    public function createDeploymentSetWithOptions(CreateDeploymentSetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDeploymentSetResponse::fromMap($this->doRequest('CreateDeploymentSet', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDeploymentSetResponse
     */
    public function createDeploymentSet(CreateDeploymentSetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeploymentSetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPairWithOptions(ImportKeyPairRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImportKeyPairResponse::fromMap($this->doRequest('ImportKeyPair', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPair(ImportKeyPairRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyPairWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetachKeyPairResponse
     */
    public function detachKeyPairWithOptions(DetachKeyPairRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetachKeyPairResponse::fromMap($this->doRequest('DetachKeyPair', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetachKeyPairResponse
     */
    public function detachKeyPair(DetachKeyPairRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachKeyPairWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairsWithOptions(DescribeKeyPairsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeKeyPairsResponse::fromMap($this->doRequest('DescribeKeyPairs', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairs(DescribeKeyPairsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions(DeleteKeyPairsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteKeyPairsResponse::fromMap($this->doRequest('DeleteKeyPairs', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairs(DeleteKeyPairsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPairWithOptions(CreateKeyPairRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateKeyPairResponse::fromMap($this->doRequest('CreateKeyPair', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPair(CreateKeyPairRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyPairWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AttachKeyPairResponse
     */
    public function attachKeyPairWithOptions(AttachKeyPairRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AttachKeyPairResponse::fromMap($this->doRequest('AttachKeyPair', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AttachKeyPairResponse
     */
    public function attachKeyPair(AttachKeyPairRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachKeyPairWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceAutoRenewAttributeResponse
     */
    public function modifyInstanceAutoRenewAttributeWithOptions(ModifyInstanceAutoRenewAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceAutoRenewAttributeResponse::fromMap($this->doRequest('ModifyInstanceAutoRenewAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceAutoRenewAttributeResponse
     */
    public function modifyInstanceAutoRenewAttribute(ModifyInstanceAutoRenewAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttributeWithOptions(DescribeInstanceAutoRenewAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceAutoRenewAttributeResponse::fromMap($this->doRequest('DescribeInstanceAutoRenewAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttribute(DescribeInstanceAutoRenewAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotLinksResponse
     */
    public function describeSnapshotLinksWithOptions(DescribeSnapshotLinksRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSnapshotLinksResponse::fromMap($this->doRequest('DescribeSnapshotLinks', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotLinksResponse
     */
    public function describeSnapshotLinks(DescribeSnapshotLinksRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotLinksWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceAutoReleaseTimeResponse
     */
    public function modifyInstanceAutoReleaseTimeWithOptions(ModifyInstanceAutoReleaseTimeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceAutoReleaseTimeResponse::fromMap($this->doRequest('ModifyInstanceAutoReleaseTime', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceAutoReleaseTimeResponse
     */
    public function modifyInstanceAutoReleaseTime(ModifyInstanceAutoReleaseTimeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoReleaseTimeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNewProjectEipMonitorDataResponse
     */
    public function describeNewProjectEipMonitorDataWithOptions(DescribeNewProjectEipMonitorDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeNewProjectEipMonitorDataResponse::fromMap($this->doRequest('DescribeNewProjectEipMonitorData', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNewProjectEipMonitorDataResponse
     */
    public function describeNewProjectEipMonitorData(DescribeNewProjectEipMonitorDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNewProjectEipMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUserDataResponse
     */
    public function describeUserDataWithOptions(DescribeUserDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeUserDataResponse::fromMap($this->doRequest('DescribeUserData', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUserDataResponse
     */
    public function describeUserData(DescribeUserDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveBandwidthPackageIpsResponse
     */
    public function removeBandwidthPackageIpsWithOptions(RemoveBandwidthPackageIpsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveBandwidthPackageIpsResponse::fromMap($this->doRequest('RemoveBandwidthPackageIps', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveBandwidthPackageIpsResponse
     */
    public function removeBandwidthPackageIps(RemoveBandwidthPackageIpsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBandwidthPackageIpsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyForwardEntryResponse
     */
    public function modifyForwardEntryWithOptions(ModifyForwardEntryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyForwardEntryResponse::fromMap($this->doRequest('ModifyForwardEntry', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyForwardEntryResponse
     */
    public function modifyForwardEntry(ModifyForwardEntryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyForwardEntryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyBandwidthPackageSpecResponse
     */
    public function modifyBandwidthPackageSpecWithOptions(ModifyBandwidthPackageSpecRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyBandwidthPackageSpecResponse::fromMap($this->doRequest('ModifyBandwidthPackageSpec', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyBandwidthPackageSpecResponse
     */
    public function modifyBandwidthPackageSpec(ModifyBandwidthPackageSpecRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBandwidthPackageSpecWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNatGatewaysResponse
     */
    public function describeNatGatewaysWithOptions(DescribeNatGatewaysRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeNatGatewaysResponse::fromMap($this->doRequest('DescribeNatGateways', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNatGatewaysResponse
     */
    public function describeNatGateways(DescribeNatGatewaysRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatGatewaysWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeForwardTableEntriesResponse
     */
    public function describeForwardTableEntriesWithOptions(DescribeForwardTableEntriesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeForwardTableEntriesResponse::fromMap($this->doRequest('DescribeForwardTableEntries', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeForwardTableEntriesResponse
     */
    public function describeForwardTableEntries(DescribeForwardTableEntriesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeForwardTableEntriesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBandwidthPackagesResponse
     */
    public function describeBandwidthPackagesWithOptions(DescribeBandwidthPackagesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeBandwidthPackagesResponse::fromMap($this->doRequest('DescribeBandwidthPackages', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBandwidthPackagesResponse
     */
    public function describeBandwidthPackages(DescribeBandwidthPackagesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteNatGatewayResponse
     */
    public function deleteNatGatewayWithOptions(DeleteNatGatewayRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteNatGatewayResponse::fromMap($this->doRequest('DeleteNatGateway', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteNatGatewayResponse
     */
    public function deleteNatGateway(DeleteNatGatewayRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatGatewayWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteForwardEntryResponse
     */
    public function deleteForwardEntryWithOptions(DeleteForwardEntryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteForwardEntryResponse::fromMap($this->doRequest('DeleteForwardEntry', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteForwardEntryResponse
     */
    public function deleteForwardEntry(DeleteForwardEntryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteForwardEntryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackageWithOptions(DeleteBandwidthPackageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteBandwidthPackageResponse::fromMap($this->doRequest('DeleteBandwidthPackage', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackage(DeleteBandwidthPackageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateNatGatewayResponse
     */
    public function createNatGatewayWithOptions(CreateNatGatewayRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateNatGatewayResponse::fromMap($this->doRequest('CreateNatGateway', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateNatGatewayResponse
     */
    public function createNatGateway(CreateNatGatewayRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNatGatewayWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateForwardEntryResponse
     */
    public function createForwardEntryWithOptions(CreateForwardEntryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateForwardEntryResponse::fromMap($this->doRequest('CreateForwardEntry', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateForwardEntryResponse
     */
    public function createForwardEntry(CreateForwardEntryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createForwardEntryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddBandwidthPackageIpsResponse
     */
    public function addBandwidthPackageIpsWithOptions(AddBandwidthPackageIpsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddBandwidthPackageIpsResponse::fromMap($this->doRequest('AddBandwidthPackageIps', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddBandwidthPackageIpsResponse
     */
    public function addBandwidthPackageIps(AddBandwidthPackageIpsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBandwidthPackageIpsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EipFillProductResponse
     */
    public function eipFillProductWithOptions(EipFillProductRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EipFillProductResponse::fromMap($this->doRequest('EipFillProduct', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EipFillProductResponse
     */
    public function eipFillProduct(EipFillProductRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eipFillProductWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EipNotifyPaidResponse
     */
    public function eipNotifyPaidWithOptions(EipNotifyPaidRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EipNotifyPaidResponse::fromMap($this->doRequest('EipNotifyPaid', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EipNotifyPaidResponse
     */
    public function eipNotifyPaid(EipNotifyPaidRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eipNotifyPaidWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EipFillParamsResponse
     */
    public function eipFillParamsWithOptions(EipFillParamsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EipFillParamsResponse::fromMap($this->doRequest('EipFillParams', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EipFillParamsResponse
     */
    public function eipFillParams(EipFillParamsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eipFillParamsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAutoSnapshotPolicyExResponse
     */
    public function modifyAutoSnapshotPolicyExWithOptions(ModifyAutoSnapshotPolicyExRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyAutoSnapshotPolicyExResponse::fromMap($this->doRequest('ModifyAutoSnapshotPolicyEx', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAutoSnapshotPolicyExResponse
     */
    public function modifyAutoSnapshotPolicyEx(ModifyAutoSnapshotPolicyExRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyExWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoSnapshotPolicyExResponse
     */
    public function describeAutoSnapshotPolicyExWithOptions(DescribeAutoSnapshotPolicyExRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAutoSnapshotPolicyExResponse::fromMap($this->doRequest('DescribeAutoSnapshotPolicyEx', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoSnapshotPolicyExResponse
     */
    public function describeAutoSnapshotPolicyEx(DescribeAutoSnapshotPolicyExRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotPolicyExWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicyWithOptions(DeleteAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAutoSnapshotPolicyResponse::fromMap($this->doRequest('DeleteAutoSnapshotPolicy', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicy(DeleteAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicyWithOptions(CreateAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAutoSnapshotPolicyResponse::fromMap($this->doRequest('CreateAutoSnapshotPolicy', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicy(CreateAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicyWithOptions(CancelAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelAutoSnapshotPolicyResponse::fromMap($this->doRequest('CancelAutoSnapshotPolicy', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicy(CancelAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicyWithOptions(ApplyAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ApplyAutoSnapshotPolicyResponse::fromMap($this->doRequest('ApplyAutoSnapshotPolicy', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicy(ApplyAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImageSupportInstanceTypesResponse
     */
    public function describeImageSupportInstanceTypesWithOptions(DescribeImageSupportInstanceTypesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeImageSupportInstanceTypesResponse::fromMap($this->doRequest('DescribeImageSupportInstanceTypes', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImageSupportInstanceTypesResponse
     */
    public function describeImageSupportInstanceTypes(DescribeImageSupportInstanceTypesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageSupportInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TerminateVirtualBorderRouterResponse
     */
    public function terminateVirtualBorderRouterWithOptions(TerminateVirtualBorderRouterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TerminateVirtualBorderRouterResponse::fromMap($this->doRequest('TerminateVirtualBorderRouter', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TerminateVirtualBorderRouterResponse
     */
    public function terminateVirtualBorderRouter(TerminateVirtualBorderRouterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TerminatePhysicalConnectionResponse
     */
    public function terminatePhysicalConnectionWithOptions(TerminatePhysicalConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TerminatePhysicalConnectionResponse::fromMap($this->doRequest('TerminatePhysicalConnection', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TerminatePhysicalConnectionResponse
     */
    public function terminatePhysicalConnection(TerminatePhysicalConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminatePhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecoverVirtualBorderRouterResponse
     */
    public function recoverVirtualBorderRouterWithOptions(RecoverVirtualBorderRouterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RecoverVirtualBorderRouterResponse::fromMap($this->doRequest('RecoverVirtualBorderRouter', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RecoverVirtualBorderRouterResponse
     */
    public function recoverVirtualBorderRouter(RecoverVirtualBorderRouterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyVirtualBorderRouterAttributeResponse
     */
    public function modifyVirtualBorderRouterAttributeWithOptions(ModifyVirtualBorderRouterAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyVirtualBorderRouterAttributeResponse::fromMap($this->doRequest('ModifyVirtualBorderRouterAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyVirtualBorderRouterAttributeResponse
     */
    public function modifyVirtualBorderRouterAttribute(ModifyVirtualBorderRouterAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVirtualBorderRouterAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyPhysicalConnectionAttributeResponse
     */
    public function modifyPhysicalConnectionAttributeWithOptions(ModifyPhysicalConnectionAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyPhysicalConnectionAttributeResponse::fromMap($this->doRequest('ModifyPhysicalConnectionAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyPhysicalConnectionAttributeResponse
     */
    public function modifyPhysicalConnectionAttribute(ModifyPhysicalConnectionAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPhysicalConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnablePhysicalConnectionResponse
     */
    public function enablePhysicalConnectionWithOptions(EnablePhysicalConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EnablePhysicalConnectionResponse::fromMap($this->doRequest('EnablePhysicalConnection', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EnablePhysicalConnectionResponse
     */
    public function enablePhysicalConnection(EnablePhysicalConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enablePhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVirtualBorderRoutersForPhysicalConnectionResponse
     */
    public function describeVirtualBorderRoutersForPhysicalConnectionWithOptions(DescribeVirtualBorderRoutersForPhysicalConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVirtualBorderRoutersForPhysicalConnectionResponse::fromMap($this->doRequest('DescribeVirtualBorderRoutersForPhysicalConnection', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVirtualBorderRoutersForPhysicalConnectionResponse
     */
    public function describeVirtualBorderRoutersForPhysicalConnection(DescribeVirtualBorderRoutersForPhysicalConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualBorderRoutersForPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVirtualBorderRoutersResponse
     */
    public function describeVirtualBorderRoutersWithOptions(DescribeVirtualBorderRoutersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVirtualBorderRoutersResponse::fromMap($this->doRequest('DescribeVirtualBorderRouters', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVirtualBorderRoutersResponse
     */
    public function describeVirtualBorderRouters(DescribeVirtualBorderRoutersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualBorderRoutersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePhysicalConnectionsResponse
     */
    public function describePhysicalConnectionsWithOptions(DescribePhysicalConnectionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePhysicalConnectionsResponse::fromMap($this->doRequest('DescribePhysicalConnections', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePhysicalConnectionsResponse
     */
    public function describePhysicalConnections(DescribePhysicalConnectionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhysicalConnectionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccessPointsResponse
     */
    public function describeAccessPointsWithOptions(DescribeAccessPointsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAccessPointsResponse::fromMap($this->doRequest('DescribeAccessPoints', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccessPointsResponse
     */
    public function describeAccessPoints(DescribeAccessPointsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessPointsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVirtualBorderRouterResponse
     */
    public function deleteVirtualBorderRouterWithOptions(DeleteVirtualBorderRouterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteVirtualBorderRouterResponse::fromMap($this->doRequest('DeleteVirtualBorderRouter', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVirtualBorderRouterResponse
     */
    public function deleteVirtualBorderRouter(DeleteVirtualBorderRouterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeletePhysicalConnectionResponse
     */
    public function deletePhysicalConnectionWithOptions(DeletePhysicalConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeletePhysicalConnectionResponse::fromMap($this->doRequest('DeletePhysicalConnection', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeletePhysicalConnectionResponse
     */
    public function deletePhysicalConnection(DeletePhysicalConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateVirtualBorderRouterResponse
     */
    public function createVirtualBorderRouterWithOptions(CreateVirtualBorderRouterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateVirtualBorderRouterResponse::fromMap($this->doRequest('CreateVirtualBorderRouter', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateVirtualBorderRouterResponse
     */
    public function createVirtualBorderRouter(CreateVirtualBorderRouterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreatePhysicalConnectionResponse
     */
    public function createPhysicalConnectionWithOptions(CreatePhysicalConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreatePhysicalConnectionResponse::fromMap($this->doRequest('CreatePhysicalConnection', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreatePhysicalConnectionResponse
     */
    public function createPhysicalConnection(CreatePhysicalConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelPhysicalConnectionResponse
     */
    public function cancelPhysicalConnectionWithOptions(CancelPhysicalConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelPhysicalConnectionResponse::fromMap($this->doRequest('CancelPhysicalConnection', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelPhysicalConnectionResponse
     */
    public function cancelPhysicalConnection(CancelPhysicalConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPhysicalConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImportImageResponse
     */
    public function importImageWithOptions(ImportImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImportImageResponse::fromMap($this->doRequest('ImportImage', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImportImageResponse
     */
    public function importImage(ImportImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importImageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ExportImageResponse
     */
    public function exportImageWithOptions(ExportImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ExportImageResponse::fromMap($this->doRequest('ExportImage', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ExportImageResponse
     */
    public function exportImage(ExportImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportImageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions(DescribeTasksRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTasksResponse::fromMap($this->doRequest('DescribeTasks', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTasksResponse
     */
    public function describeTasks(DescribeTasksRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTaskAttributeResponse
     */
    public function describeTaskAttributeWithOptions(DescribeTaskAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTaskAttributeResponse::fromMap($this->doRequest('DescribeTaskAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTaskAttributeResponse
     */
    public function describeTaskAttribute(DescribeTaskAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions(CancelTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelTaskResponse::fromMap($this->doRequest('CancelTask', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelTaskResponse
     */
    public function cancelTask(CancelTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceTypeFamiliesResponse
     */
    public function describeInstanceTypeFamiliesWithOptions(DescribeInstanceTypeFamiliesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceTypeFamiliesResponse::fromMap($this->doRequest('DescribeInstanceTypeFamilies', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceTypeFamiliesResponse
     */
    public function describeInstanceTypeFamilies(DescribeInstanceTypeFamiliesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypeFamiliesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyRouterInterfaceSpecResponse
     */
    public function modifyRouterInterfaceSpecWithOptions(ModifyRouterInterfaceSpecRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyRouterInterfaceSpecResponse::fromMap($this->doRequest('ModifyRouterInterfaceSpec', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyRouterInterfaceSpecResponse
     */
    public function modifyRouterInterfaceSpec(ModifyRouterInterfaceSpecRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouterInterfaceSpecWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyRouterInterfaceAttributeResponse
     */
    public function modifyRouterInterfaceAttributeWithOptions(ModifyRouterInterfaceAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyRouterInterfaceAttributeResponse::fromMap($this->doRequest('ModifyRouterInterfaceAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyRouterInterfaceAttributeResponse
     */
    public function modifyRouterInterfaceAttribute(ModifyRouterInterfaceAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRouterInterfaceAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRouterInterfacesResponse
     */
    public function describeRouterInterfacesWithOptions(DescribeRouterInterfacesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRouterInterfacesResponse::fromMap($this->doRequest('DescribeRouterInterfaces', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRouterInterfacesResponse
     */
    public function describeRouterInterfaces(DescribeRouterInterfacesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouterInterfacesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRouterInterfaceResponse
     */
    public function deleteRouterInterfaceWithOptions(DeleteRouterInterfaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteRouterInterfaceResponse::fromMap($this->doRequest('DeleteRouterInterface', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRouterInterfaceResponse
     */
    public function deleteRouterInterface(DeleteRouterInterfaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeactivateRouterInterfaceResponse
     */
    public function deactivateRouterInterfaceWithOptions(DeactivateRouterInterfaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeactivateRouterInterfaceResponse::fromMap($this->doRequest('DeactivateRouterInterface', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeactivateRouterInterfaceResponse
     */
    public function deactivateRouterInterface(DeactivateRouterInterfaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateRouterInterfaceResponse
     */
    public function createRouterInterfaceWithOptions(CreateRouterInterfaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateRouterInterfaceResponse::fromMap($this->doRequest('CreateRouterInterface', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateRouterInterfaceResponse
     */
    public function createRouterInterface(CreateRouterInterfaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ConnectRouterInterfaceResponse
     */
    public function connectRouterInterfaceWithOptions(ConnectRouterInterfaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ConnectRouterInterfaceResponse::fromMap($this->doRequest('ConnectRouterInterface', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ConnectRouterInterfaceResponse
     */
    public function connectRouterInterface(ConnectRouterInterfaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->connectRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ActivateRouterInterfaceResponse
     */
    public function activateRouterInterfaceWithOptions(ActivateRouterInterfaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ActivateRouterInterfaceResponse::fromMap($this->doRequest('ActivateRouterInterface', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ActivateRouterInterfaceResponse
     */
    public function activateRouterInterface(ActivateRouterInterfaceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateRouterInterfaceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UnassociateHaVipResponse
     */
    public function unassociateHaVipWithOptions(UnassociateHaVipRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UnassociateHaVipResponse::fromMap($this->doRequest('UnassociateHaVip', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UnassociateHaVipResponse
     */
    public function unassociateHaVip(UnassociateHaVipRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateHaVipWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyHaVipAttributeResponse
     */
    public function modifyHaVipAttributeWithOptions(ModifyHaVipAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyHaVipAttributeResponse::fromMap($this->doRequest('ModifyHaVipAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyHaVipAttributeResponse
     */
    public function modifyHaVipAttribute(ModifyHaVipAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHaVipAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHaVipsResponse
     */
    public function describeHaVipsWithOptions(DescribeHaVipsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeHaVipsResponse::fromMap($this->doRequest('DescribeHaVips', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHaVipsResponse
     */
    public function describeHaVips(DescribeHaVipsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHaVipsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteHaVipResponse
     */
    public function deleteHaVipWithOptions(DeleteHaVipRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteHaVipResponse::fromMap($this->doRequest('DeleteHaVip', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteHaVipResponse
     */
    public function deleteHaVip(DeleteHaVipRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHaVipWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateHaVipResponse
     */
    public function createHaVipWithOptions(CreateHaVipRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateHaVipResponse::fromMap($this->doRequest('CreateHaVip', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateHaVipResponse
     */
    public function createHaVip(CreateHaVipRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHaVipWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AssociateHaVipResponse
     */
    public function associateHaVipWithOptions(AssociateHaVipRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AssociateHaVipResponse::fromMap($this->doRequest('AssociateHaVip', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AssociateHaVipResponse
     */
    public function associateHaVip(AssociateHaVipRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateHaVipWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions(RenewInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RenewInstanceResponse::fromMap($this->doRequest('RenewInstance', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance(RenewInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveTagsResponse
     */
    public function removeTagsWithOptions(RemoveTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveTagsResponse::fromMap($this->doRequest('RemoveTags', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveTagsResponse
     */
    public function removeTags(RemoveTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions(DescribeTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTagsResponse::fromMap($this->doRequest('DescribeTags', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTagsResponse
     */
    public function describeTags(DescribeTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeResourceByTagsResponse
     */
    public function describeResourceByTagsWithOptions(DescribeResourceByTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourceByTagsResponse::fromMap($this->doRequest('DescribeResourceByTags', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeResourceByTagsResponse
     */
    public function describeResourceByTags(DescribeResourceByTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceByTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddTagsResponse
     */
    public function addTagsWithOptions(AddTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddTagsResponse::fromMap($this->doRequest('AddTags', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddTagsResponse
     */
    public function addTags(AddTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddressWithOptions(UnassociateEipAddressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UnassociateEipAddressResponse::fromMap($this->doRequest('UnassociateEipAddress', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddress(UnassociateEipAddressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions(StopInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopInstanceResponse::fromMap($this->doRequest('StopInstance', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopInstanceResponse
     */
    public function stopInstance(StopInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions(StartInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartInstanceResponse::fromMap($this->doRequest('StartInstance', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartInstanceResponse
     */
    public function startInstance(StartInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgressWithOptions(RevokeSecurityGroupEgressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RevokeSecurityGroupEgressResponse::fromMap($this->doRequest('RevokeSecurityGroupEgress', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgress(RevokeSecurityGroupEgressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroupWithOptions(RevokeSecurityGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RevokeSecurityGroupResponse::fromMap($this->doRequest('RevokeSecurityGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroup(RevokeSecurityGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ResizeDiskResponse
     */
    public function resizeDiskWithOptions(ResizeDiskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResizeDiskResponse::fromMap($this->doRequest('ResizeDisk', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ResizeDiskResponse
     */
    public function resizeDisk(ResizeDiskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeDiskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ResetDiskResponse
     */
    public function resetDiskWithOptions(ResetDiskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResetDiskResponse::fromMap($this->doRequest('ResetDisk', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ResetDiskResponse
     */
    public function resetDisk(ResetDiskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDiskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReplaceSystemDiskResponse
     */
    public function replaceSystemDiskWithOptions(ReplaceSystemDiskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReplaceSystemDiskResponse::fromMap($this->doRequest('ReplaceSystemDisk', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReplaceSystemDiskResponse
     */
    public function replaceSystemDisk(ReplaceSystemDiskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceSystemDiskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReleasePublicIpAddressResponse
     */
    public function releasePublicIpAddressWithOptions(ReleasePublicIpAddressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReleasePublicIpAddressResponse::fromMap($this->doRequest('ReleasePublicIpAddress', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReleasePublicIpAddressResponse
     */
    public function releasePublicIpAddress(ReleasePublicIpAddressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePublicIpAddressWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddressWithOptions(ReleaseEipAddressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReleaseEipAddressResponse::fromMap($this->doRequest('ReleaseEipAddress', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddress(ReleaseEipAddressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseEipAddressWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReInitDiskResponse
     */
    public function reInitDiskWithOptions(ReInitDiskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReInitDiskResponse::fromMap($this->doRequest('ReInitDisk', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReInitDiskResponse
     */
    public function reInitDisk(ReInitDiskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reInitDiskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstanceWithOptions(RebootInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RebootInstanceResponse::fromMap($this->doRequest('RebootInstance', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstance(RebootInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttributeWithOptions(ModifyVSwitchAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyVSwitchAttributeResponse::fromMap($this->doRequest('ModifyVSwitchAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttribute(ModifyVSwitchAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVSwitchAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyVRouterAttributeResponse
     */
    public function modifyVRouterAttributeWithOptions(ModifyVRouterAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyVRouterAttributeResponse::fromMap($this->doRequest('ModifyVRouterAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyVRouterAttributeResponse
     */
    public function modifyVRouterAttribute(ModifyVRouterAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVRouterAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyVpcAttributeResponse
     */
    public function modifyVpcAttributeWithOptions(ModifyVpcAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyVpcAttributeResponse::fromMap($this->doRequest('ModifyVpcAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyVpcAttributeResponse
     */
    public function modifyVpcAttribute(ModifyVpcAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySnapshotAttributeResponse
     */
    public function modifySnapshotAttributeWithOptions(ModifySnapshotAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySnapshotAttributeResponse::fromMap($this->doRequest('ModifySnapshotAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySnapshotAttributeResponse
     */
    public function modifySnapshotAttribute(ModifySnapshotAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySnapshotAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupAttributeResponse
     */
    public function modifySecurityGroupAttributeWithOptions(ModifySecurityGroupAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySecurityGroupAttributeResponse::fromMap($this->doRequest('ModifySecurityGroupAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupAttributeResponse
     */
    public function modifySecurityGroupAttribute(ModifySecurityGroupAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceVpcAttributeResponse
     */
    public function modifyInstanceVpcAttributeWithOptions(ModifyInstanceVpcAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceVpcAttributeResponse::fromMap($this->doRequest('ModifyInstanceVpcAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceVpcAttributeResponse
     */
    public function modifyInstanceVpcAttribute(ModifyInstanceVpcAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVpcAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceVncPasswdResponse
     */
    public function modifyInstanceVncPasswdWithOptions(ModifyInstanceVncPasswdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceVncPasswdResponse::fromMap($this->doRequest('ModifyInstanceVncPasswd', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceVncPasswdResponse
     */
    public function modifyInstanceVncPasswd(ModifyInstanceVncPasswdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVncPasswdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions(ModifyInstanceSpecRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceSpecResponse::fromMap($this->doRequest('ModifyInstanceSpec', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpec(ModifyInstanceSpecRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceNetworkSpecResponse
     */
    public function modifyInstanceNetworkSpecWithOptions(ModifyInstanceNetworkSpecRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceNetworkSpecResponse::fromMap($this->doRequest('ModifyInstanceNetworkSpec', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceNetworkSpecResponse
     */
    public function modifyInstanceNetworkSpec(ModifyInstanceNetworkSpecRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNetworkSpecWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions(ModifyInstanceAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceAttributeResponse::fromMap($this->doRequest('ModifyInstanceAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute(ModifyInstanceAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermissionWithOptions(ModifyImageSharePermissionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyImageSharePermissionResponse::fromMap($this->doRequest('ModifyImageSharePermission', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermission(ModifyImageSharePermissionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyImageShareGroupPermissionResponse
     */
    public function modifyImageShareGroupPermissionWithOptions(ModifyImageShareGroupPermissionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyImageShareGroupPermissionResponse::fromMap($this->doRequest('ModifyImageShareGroupPermission', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyImageShareGroupPermissionResponse
     */
    public function modifyImageShareGroupPermission(ModifyImageShareGroupPermissionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageShareGroupPermissionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttributeWithOptions(ModifyImageAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyImageAttributeResponse::fromMap($this->doRequest('ModifyImageAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttribute(ModifyImageAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyEipAddressAttributeResponse
     */
    public function modifyEipAddressAttributeWithOptions(ModifyEipAddressAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyEipAddressAttributeResponse::fromMap($this->doRequest('ModifyEipAddressAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyEipAddressAttributeResponse
     */
    public function modifyEipAddressAttribute(ModifyEipAddressAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEipAddressAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDiskAttributeResponse
     */
    public function modifyDiskAttributeWithOptions(ModifyDiskAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDiskAttributeResponse::fromMap($this->doRequest('ModifyDiskAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDiskAttributeResponse
     */
    public function modifyDiskAttribute(ModifyDiskAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicyWithOptions(ModifyAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyAutoSnapshotPolicyResponse::fromMap($this->doRequest('ModifyAutoSnapshotPolicy', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicy(ModifyAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroupWithOptions(LeaveSecurityGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return LeaveSecurityGroupResponse::fromMap($this->doRequest('LeaveSecurityGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroup(LeaveSecurityGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return JoinSecurityGroupResponse
     */
    public function joinSecurityGroupWithOptions(JoinSecurityGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return JoinSecurityGroupResponse::fromMap($this->doRequest('JoinSecurityGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return JoinSecurityGroupResponse
     */
    public function joinSecurityGroup(JoinSecurityGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetachDiskResponse
     */
    public function detachDiskWithOptions(DetachDiskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetachDiskResponse::fromMap($this->doRequest('DetachDisk', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetachDiskResponse
     */
    public function detachDisk(DetachDiskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDiskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions(DescribeZonesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeZonesResponse::fromMap($this->doRequest('DescribeZones', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeZonesResponse
     */
    public function describeZones(DescribeZonesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions(DescribeVSwitchesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVSwitchesResponse::fromMap($this->doRequest('DescribeVSwitches', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches(DescribeVSwitchesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVRoutersResponse
     */
    public function describeVRoutersWithOptions(DescribeVRoutersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVRoutersResponse::fromMap($this->doRequest('DescribeVRouters', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVRoutersResponse
     */
    public function describeVRouters(DescribeVRoutersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVRoutersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcsWithOptions(DescribeVpcsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpcsResponse::fromMap($this->doRequest('DescribeVpcs', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcs(DescribeVpcsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions(DescribeSnapshotsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSnapshotsResponse::fromMap($this->doRequest('DescribeSnapshots', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshots(DescribeSnapshotsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroupsWithOptions(DescribeSecurityGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecurityGroupsResponse::fromMap($this->doRequest('DescribeSecurityGroups', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroups(DescribeSecurityGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttributeWithOptions(DescribeSecurityGroupAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecurityGroupAttributeResponse::fromMap($this->doRequest('DescribeSecurityGroupAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttribute(DescribeSecurityGroupAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRouteTablesResponse
     */
    public function describeRouteTablesWithOptions(DescribeRouteTablesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRouteTablesResponse::fromMap($this->doRequest('DescribeRouteTables', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRouteTablesResponse
     */
    public function describeRouteTables(DescribeRouteTablesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteTablesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions(DescribeRegionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLimitationResponse
     */
    public function describeLimitationWithOptions(DescribeLimitationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeLimitationResponse::fromMap($this->doRequest('DescribeLimitation', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLimitationResponse
     */
    public function describeLimitation(DescribeLimitationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLimitationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrlWithOptions(DescribeInstanceVncUrlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceVncUrlResponse::fromMap($this->doRequest('DescribeInstanceVncUrl', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrl(DescribeInstanceVncUrlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceVncUrlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceVncPasswdResponse
     */
    public function describeInstanceVncPasswdWithOptions(DescribeInstanceVncPasswdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceVncPasswdResponse::fromMap($this->doRequest('DescribeInstanceVncPasswd', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceVncPasswdResponse
     */
    public function describeInstanceVncPasswd(DescribeInstanceVncPasswdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceVncPasswdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypesWithOptions(DescribeInstanceTypesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceTypesResponse::fromMap($this->doRequest('DescribeInstanceTypes', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes(DescribeInstanceTypesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceStatusResponse
     */
    public function describeInstanceStatusWithOptions(DescribeInstanceStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceStatusResponse::fromMap($this->doRequest('DescribeInstanceStatus', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceStatusResponse
     */
    public function describeInstanceStatus(DescribeInstanceStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions(DescribeInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstancesResponse::fromMap($this->doRequest('DescribeInstances', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances(DescribeInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorDataWithOptions(DescribeInstanceMonitorDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceMonitorDataResponse::fromMap($this->doRequest('DescribeInstanceMonitorData', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorData(DescribeInstanceMonitorDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions(DescribeInstanceAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceAttributeResponse::fromMap($this->doRequest('DescribeInstanceAttribute', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute(DescribeInstanceAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermissionWithOptions(DescribeImageSharePermissionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeImageSharePermissionResponse::fromMap($this->doRequest('DescribeImageSharePermission', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermission(DescribeImageSharePermissionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImagesResponse
     */
    public function describeImagesWithOptions(DescribeImagesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeImagesResponse::fromMap($this->doRequest('DescribeImages', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImagesResponse
     */
    public function describeImages(DescribeImagesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEipMonitorDataResponse
     */
    public function describeEipMonitorDataWithOptions(DescribeEipMonitorDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeEipMonitorDataResponse::fromMap($this->doRequest('DescribeEipMonitorData', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEipMonitorDataResponse
     */
    public function describeEipMonitorData(DescribeEipMonitorDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEipAddressesResponse
     */
    public function describeEipAddressesWithOptions(DescribeEipAddressesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeEipAddressesResponse::fromMap($this->doRequest('DescribeEipAddresses', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEipAddressesResponse
     */
    public function describeEipAddresses(DescribeEipAddressesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipAddressesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDisksResponse
     */
    public function describeDisksWithOptions(DescribeDisksRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDisksResponse::fromMap($this->doRequest('DescribeDisks', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDisksResponse
     */
    public function describeDisks(DescribeDisksRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisksWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDiskMonitorDataResponse
     */
    public function describeDiskMonitorDataWithOptions(DescribeDiskMonitorDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDiskMonitorDataResponse::fromMap($this->doRequest('DescribeDiskMonitorData', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDiskMonitorDataResponse
     */
    public function describeDiskMonitorData(DescribeDiskMonitorDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClustersResponse
     */
    public function describeClustersWithOptions(DescribeClustersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeClustersResponse::fromMap($this->doRequest('DescribeClusters', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters(DescribeClustersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitchWithOptions(DeleteVSwitchRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteVSwitchResponse::fromMap($this->doRequest('DeleteVSwitch', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitch(DeleteVSwitchRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVSwitchWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVpcResponse
     */
    public function deleteVpcWithOptions(DeleteVpcRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteVpcResponse::fromMap($this->doRequest('DeleteVpc', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVpcResponse
     */
    public function deleteVpc(DeleteVpcRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions(DeleteSnapshotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteSnapshotResponse::fromMap($this->doRequest('DeleteSnapshot', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot(DeleteSnapshotRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroupWithOptions(DeleteSecurityGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteSecurityGroupResponse::fromMap($this->doRequest('DeleteSecurityGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroup(DeleteSecurityGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRouteEntryResponse
     */
    public function deleteRouteEntryWithOptions(DeleteRouteEntryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteRouteEntryResponse::fromMap($this->doRequest('DeleteRouteEntry', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRouteEntryResponse
     */
    public function deleteRouteEntry(DeleteRouteEntryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions(DeleteInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteInstanceResponse::fromMap($this->doRequest('DeleteInstance', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance(DeleteInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions(DeleteImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteImageResponse::fromMap($this->doRequest('DeleteImage', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteImageResponse
     */
    public function deleteImage(DeleteImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDiskResponse
     */
    public function deleteDiskWithOptions(DeleteDiskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDiskResponse::fromMap($this->doRequest('DeleteDisk', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDiskResponse
     */
    public function deleteDisk(DeleteDiskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitchWithOptions(CreateVSwitchRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateVSwitchResponse::fromMap($this->doRequest('CreateVSwitch', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitch(CreateVSwitchRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVSwitchWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateVpcResponse
     */
    public function createVpcWithOptions(CreateVpcRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateVpcResponse::fromMap($this->doRequest('CreateVpc', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateVpcResponse
     */
    public function createVpc(CreateVpcRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions(CreateSnapshotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateSnapshotResponse::fromMap($this->doRequest('CreateSnapshot', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot(CreateSnapshotRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateSecurityGroupResponse
     */
    public function createSecurityGroupWithOptions(CreateSecurityGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateSecurityGroupResponse::fromMap($this->doRequest('CreateSecurityGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateSecurityGroupResponse
     */
    public function createSecurityGroup(CreateSecurityGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateRouteEntryResponse
     */
    public function createRouteEntryWithOptions(CreateRouteEntryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateRouteEntryResponse::fromMap($this->doRequest('CreateRouteEntry', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateRouteEntryResponse
     */
    public function createRouteEntry(CreateRouteEntryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions(CreateInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateInstanceResponse::fromMap($this->doRequest('CreateInstance', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateInstanceResponse
     */
    public function createInstance(CreateInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateImageResponse
     */
    public function createImageWithOptions(CreateImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateImageResponse::fromMap($this->doRequest('CreateImage', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateImageResponse
     */
    public function createImage(CreateImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDiskResponse
     */
    public function createDiskWithOptions(CreateDiskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDiskResponse::fromMap($this->doRequest('CreateDisk', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDiskResponse
     */
    public function createDisk(CreateDiskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CopyImageResponse
     */
    public function copyImageWithOptions(CopyImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CopyImageResponse::fromMap($this->doRequest('CopyImage', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CopyImageResponse
     */
    public function copyImage(CopyImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyImageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelCopyImageResponse
     */
    public function cancelCopyImageWithOptions(CancelCopyImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelCopyImageResponse::fromMap($this->doRequest('CancelCopyImage', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelCopyImageResponse
     */
    public function cancelCopyImage(CancelCopyImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCopyImageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgressWithOptions(AuthorizeSecurityGroupEgressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AuthorizeSecurityGroupEgressResponse::fromMap($this->doRequest('AuthorizeSecurityGroupEgress', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgress(AuthorizeSecurityGroupEgressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroupWithOptions(AuthorizeSecurityGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AuthorizeSecurityGroupResponse::fromMap($this->doRequest('AuthorizeSecurityGroup', 'HTTPS', 'POST', '2014-05-26', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroup(AuthorizeSecurityGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AttachDiskResponse
     */
    public function attachDiskWithOptions(AttachDiskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AttachDiskResponse::fromMap($this->doRequest('AttachDisk', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AttachDiskResponse
     */
    public function attachDisk(AttachDiskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDiskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddressWithOptions(AssociateEipAddressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AssociateEipAddressResponse::fromMap($this->doRequest('AssociateEipAddress', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddress(AssociateEipAddressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AllocatePublicIpAddressResponse
     */
    public function allocatePublicIpAddressWithOptions(AllocatePublicIpAddressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AllocatePublicIpAddressResponse::fromMap($this->doRequest('AllocatePublicIpAddress', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AllocatePublicIpAddressResponse
     */
    public function allocatePublicIpAddress(AllocatePublicIpAddressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocatePublicIpAddressWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddressWithOptions(AllocateEipAddressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AllocateEipAddressResponse::fromMap($this->doRequest('AllocateEipAddress', 'HTTPS', 'POST', '2014-05-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddress(AllocateEipAddressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateEipAddressWithOptions($request, $runtime);
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
