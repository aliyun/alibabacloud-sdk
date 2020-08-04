// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Instances")]
        [Validation(Required=true)]
        public DescribeInstancesResponseInstances Instances { get; set; }
        public class DescribeInstancesResponseInstances : TeaModel {
            [NameInMap("Instance")]
            [Validation(Required=true)]
            public List<DescribeInstancesResponseInstancesInstance> Instance { get; set; }
            public class DescribeInstancesResponseInstancesInstance : TeaModel {
                    public string InstanceId { get; set; }
                    public string InstanceName { get; set; }
                    public string Description { get; set; }
                    public string ImageId { get; set; }
                    public string OSName { get; set; }
                    public string OSNameEn { get; set; }
                    public string OSType { get; set; }
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
                    public string ClusterId { get; set; }
                    public string InstanceType { get; set; }
                    public int? Cpu { get; set; }
                    public int? Memory { get; set; }
                    public string HostName { get; set; }
                    public string DeploymentSetId { get; set; }
                    public int? DeploymentSetGroupNo { get; set; }
                    public string Status { get; set; }
                    public string SerialNumber { get; set; }
                    public string InternetChargeType { get; set; }
                    public int? InternetMaxBandwidthIn { get; set; }
                    public int? InternetMaxBandwidthOut { get; set; }
                    public string VlanId { get; set; }
                    public string CreationTime { get; set; }
                    public string StartTime { get; set; }
                    public string InstanceNetworkType { get; set; }
                    public string InstanceChargeType { get; set; }
                    public string SaleCycle { get; set; }
                    public string ExpiredTime { get; set; }
                    public string AutoReleaseTime { get; set; }
                    public bool? IoOptimized { get; set; }
                    public bool? DeviceAvailable { get; set; }
                    public string InstanceTypeFamily { get; set; }
                    public long LocalStorageCapacity { get; set; }
                    public int? LocalStorageAmount { get; set; }
                    public int? GPUAmount { get; set; }
                    public string GPUSpec { get; set; }
                    public string SpotStrategy { get; set; }
                    public float? SpotPriceLimit { get; set; }
                    public string ResourceGroupId { get; set; }
                    public string KeyPairName { get; set; }
                    public bool? Recyclable { get; set; }
                    public string HpcClusterId { get; set; }
                    public string StoppedMode { get; set; }
                    public string CreditSpecification { get; set; }
                    public bool? DeletionProtection { get; set; }
                    public DescribeInstancesResponseInstancesInstanceNetworkInterfaces NetworkInterfaces { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceNetworkInterfaces : TeaModel {
                        [NameInMap("NetworkInterface")]
                        [Validation(Required=true)]
                        public List<DescribeInstancesResponseInstancesInstanceNetworkInterfacesNetworkInterface> NetworkInterface { get; set; }
                        public class DescribeInstancesResponseInstancesInstanceNetworkInterfacesNetworkInterface : TeaModel {
                            [NameInMap("NetworkInterfaceId")]
                            [Validation(Required=true)]
                            public string NetworkInterfaceId { get; set; }

                            [NameInMap("MacAddress")]
                            [Validation(Required=true)]
                            public string MacAddress { get; set; }

                            [NameInMap("PrimaryIpAddress")]
                            [Validation(Required=true)]
                            public string PrimaryIpAddress { get; set; }

                        }

                    }
                    public DescribeInstancesResponseInstancesInstanceOperationLocks OperationLocks { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceOperationLocks : TeaModel {
                        [NameInMap("LockReason")]
                        [Validation(Required=true)]
                        public List<DescribeInstancesResponseInstancesInstanceOperationLocksLockReason> LockReason { get; set; }
                        public class DescribeInstancesResponseInstancesInstanceOperationLocksLockReason : TeaModel {
                            [NameInMap("LockReason")]
                            [Validation(Required=true)]
                            public string LockReason { get; set; }

                            [NameInMap("LockMsg")]
                            [Validation(Required=true)]
                            public string LockMsg { get; set; }

                        }

                    }
                    public DescribeInstancesResponseInstancesInstanceTags Tags { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeInstancesResponseInstancesInstanceTagsTag> Tag { get; set; }
                        public class DescribeInstancesResponseInstancesInstanceTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
                    public DescribeInstancesResponseInstancesInstanceVpcAttributes VpcAttributes { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceVpcAttributes : TeaModel {
                        [NameInMap("VpcId")]
                        [Validation(Required=true)]
                        public string VpcId { get; set; }

                        [NameInMap("VSwitchId")]
                        [Validation(Required=true)]
                        public string VSwitchId { get; set; }

                        [NameInMap("NatIpAddress")]
                        [Validation(Required=true)]
                        public string NatIpAddress { get; set; }

                        [NameInMap("PrivateIpAddress")]
                        [Validation(Required=true)]
                        public DescribeInstancesResponseInstancesInstanceVpcAttributesPrivateIpAddress PrivateIpAddress { get; set; }
                        public class DescribeInstancesResponseInstancesInstanceVpcAttributesPrivateIpAddress : TeaModel {
                            [NameInMap("IpAddress")]
                            [Validation(Required=true)]
                            public List<string> IpAddress { get; set; }
                        };

                    }
                    public DescribeInstancesResponseInstancesInstanceEipAddress EipAddress { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceEipAddress : TeaModel {
                        [NameInMap("AllocationId")]
                        [Validation(Required=true)]
                        public string AllocationId { get; set; }

                        [NameInMap("IpAddress")]
                        [Validation(Required=true)]
                        public string IpAddress { get; set; }

                        [NameInMap("Bandwidth")]
                        [Validation(Required=true)]
                        public int? Bandwidth { get; set; }

                        [NameInMap("InternetChargeType")]
                        [Validation(Required=true)]
                        public string InternetChargeType { get; set; }

                        [NameInMap("IsSupportUnassociate")]
                        [Validation(Required=true)]
                        public bool? IsSupportUnassociate { get; set; }

                    }
                    public DescribeInstancesResponseInstancesInstanceDedicatedHostAttribute DedicatedHostAttribute { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceDedicatedHostAttribute : TeaModel {
                        [NameInMap("DedicatedHostId")]
                        [Validation(Required=true)]
                        public string DedicatedHostId { get; set; }

                        [NameInMap("DedicatedHostName")]
                        [Validation(Required=true)]
                        public string DedicatedHostName { get; set; }

                    }
                    public DescribeInstancesResponseInstancesInstanceEcsCapacityReservationAttr EcsCapacityReservationAttr { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceEcsCapacityReservationAttr : TeaModel {
                        [NameInMap("CapacityReservationId")]
                        [Validation(Required=true)]
                        public string CapacityReservationId { get; set; }

                        [NameInMap("CapacityReservationPreference")]
                        [Validation(Required=true)]
                        public string CapacityReservationPreference { get; set; }

                    }
                    public DescribeInstancesResponseInstancesInstanceDedicatedInstanceAttribute DedicatedInstanceAttribute { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceDedicatedInstanceAttribute : TeaModel {
                        [NameInMap("Tenancy")]
                        [Validation(Required=true)]
                        public string Tenancy { get; set; }

                        [NameInMap("Affinity")]
                        [Validation(Required=true)]
                        public string Affinity { get; set; }

                    }
                    public DescribeInstancesResponseInstancesInstanceCpuOptions CpuOptions { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceCpuOptions : TeaModel {
                        [NameInMap("CoreCount")]
                        [Validation(Required=true)]
                        public int? CoreCount { get; set; }

                        [NameInMap("ThreadsPerCore")]
                        [Validation(Required=true)]
                        public int? ThreadsPerCore { get; set; }

                        [NameInMap("Numa")]
                        [Validation(Required=true)]
                        public string Numa { get; set; }

                    }
                    public DescribeInstancesResponseInstancesInstanceMetadataOptions MetadataOptions { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceMetadataOptions : TeaModel {
                        [NameInMap("HttpEndpoint")]
                        [Validation(Required=true)]
                        public string HttpEndpoint { get; set; }

                        [NameInMap("HttpTokens")]
                        [Validation(Required=true)]
                        public string HttpTokens { get; set; }

                        [NameInMap("HttpPutResponseHopLimit")]
                        [Validation(Required=true)]
                        public int? HttpPutResponseHopLimit { get; set; }

                    }
                    public DescribeInstancesResponseInstancesInstanceSecurityGroupIds SecurityGroupIds { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceSecurityGroupIds : TeaModel {
                        [NameInMap("SecurityGroupId")]
                        [Validation(Required=true)]
                        public List<string> SecurityGroupId { get; set; }

                    }
                    public DescribeInstancesResponseInstancesInstancePublicIpAddress PublicIpAddress { get; set; }
                    public class DescribeInstancesResponseInstancesInstancePublicIpAddress : TeaModel {
                        [NameInMap("IpAddress")]
                        [Validation(Required=true)]
                        public List<string> IpAddress { get; set; }

                    }
                    public DescribeInstancesResponseInstancesInstanceInnerIpAddress InnerIpAddress { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceInnerIpAddress : TeaModel {
                        [NameInMap("IpAddress")]
                        [Validation(Required=true)]
                        public List<string> IpAddress { get; set; }

                    }
                    public DescribeInstancesResponseInstancesInstanceRdmaIpAddress RdmaIpAddress { get; set; }
                    public class DescribeInstancesResponseInstancesInstanceRdmaIpAddress : TeaModel {
                        [NameInMap("IpAddress")]
                        [Validation(Required=true)]
                        public List<string> IpAddress { get; set; }

                    }
            }
        };

    }

}
