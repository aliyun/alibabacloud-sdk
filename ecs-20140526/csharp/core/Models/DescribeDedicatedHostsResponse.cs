// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDedicatedHostsResponse : TeaModel {
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

        [NameInMap("DedicatedHosts")]
        [Validation(Required=true)]
        public DescribeDedicatedHostsResponseDedicatedHosts DedicatedHosts { get; set; }
        public class DescribeDedicatedHostsResponseDedicatedHosts : TeaModel {
            [NameInMap("DedicatedHost")]
            [Validation(Required=true)]
            public List<DescribeDedicatedHostsResponseDedicatedHostsDedicatedHost> DedicatedHost { get; set; }
            public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHost : TeaModel {
                    public string DedicatedHostId { get; set; }
                    public string AutoPlacement { get; set; }
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
                    public string DedicatedHostName { get; set; }
                    public string MachineId { get; set; }
                    public string Description { get; set; }
                    public string DedicatedHostType { get; set; }
                    public int? Sockets { get; set; }
                    public int? Cores { get; set; }
                    public int? PhysicalGpus { get; set; }
                    public string GPUSpec { get; set; }
                    public string ActionOnMaintenance { get; set; }
                    public string Status { get; set; }
                    public string CreationTime { get; set; }
                    public string ChargeType { get; set; }
                    public string SaleCycle { get; set; }
                    public string ExpiredTime { get; set; }
                    public string AutoReleaseTime { get; set; }
                    public string ResourceGroupId { get; set; }
                    public DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostInstances Instances { get; set; }
                    public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostInstances : TeaModel {
                        [NameInMap("Instance")]
                        [Validation(Required=true)]
                        public List<DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostInstancesInstance> Instance { get; set; }
                        public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostInstancesInstance : TeaModel {
                            [NameInMap("InstanceId")]
                            [Validation(Required=true)]
                            public string InstanceId { get; set; }

                            [NameInMap("InstanceType")]
                            [Validation(Required=true)]
                            public string InstanceType { get; set; }

                        }

                    }
                    public DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostOperationLocks OperationLocks { get; set; }
                    public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostOperationLocks : TeaModel {
                        [NameInMap("OperationLock")]
                        [Validation(Required=true)]
                        public List<DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostOperationLocksOperationLock> OperationLock { get; set; }
                        public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostOperationLocksOperationLock : TeaModel {
                            [NameInMap("LockReason")]
                            [Validation(Required=true)]
                            public string LockReason { get; set; }

                        }

                    }
                    public DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostTags Tags { get; set; }
                    public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostTagsTag> Tag { get; set; }
                        public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
                    public DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostCapacity Capacity { get; set; }
                    public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostCapacity : TeaModel {
                        [NameInMap("TotalVcpus")]
                        [Validation(Required=true)]
                        public int? TotalVcpus { get; set; }

                        [NameInMap("AvailableVcpus")]
                        [Validation(Required=true)]
                        public int? AvailableVcpus { get; set; }

                        [NameInMap("TotalVgpus")]
                        [Validation(Required=true)]
                        public int? TotalVgpus { get; set; }

                        [NameInMap("AvailableVgpus")]
                        [Validation(Required=true)]
                        public int? AvailableVgpus { get; set; }

                        [NameInMap("TotalMemory")]
                        [Validation(Required=true)]
                        public float? TotalMemory { get; set; }

                        [NameInMap("AvailableMemory")]
                        [Validation(Required=true)]
                        public float? AvailableMemory { get; set; }

                        [NameInMap("TotalLocalStorage")]
                        [Validation(Required=true)]
                        public int? TotalLocalStorage { get; set; }

                        [NameInMap("AvailableLocalStorage")]
                        [Validation(Required=true)]
                        public int? AvailableLocalStorage { get; set; }

                        [NameInMap("LocalStorageCategory")]
                        [Validation(Required=true)]
                        public string LocalStorageCategory { get; set; }

                    }
                    public DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostNetworkAttributes NetworkAttributes { get; set; }
                    public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostNetworkAttributes : TeaModel {
                        [NameInMap("SlbUdpTimeout")]
                        [Validation(Required=true)]
                        public int? SlbUdpTimeout { get; set; }

                        [NameInMap("UdpTimeout")]
                        [Validation(Required=true)]
                        public int? UdpTimeout { get; set; }

                    }
                    public DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostSupportedInstanceTypeFamilies SupportedInstanceTypeFamilies { get; set; }
                    public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostSupportedInstanceTypeFamilies : TeaModel {
                        [NameInMap("SupportedInstanceTypeFamily")]
                        [Validation(Required=true)]
                        public List<string> SupportedInstanceTypeFamily { get; set; }

                    }
                    public DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostSupportedCustomInstanceTypeFamilies SupportedCustomInstanceTypeFamilies { get; set; }
                    public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostSupportedCustomInstanceTypeFamilies : TeaModel {
                        [NameInMap("SupportedCustomInstanceTypeFamily")]
                        [Validation(Required=true)]
                        public List<string> SupportedCustomInstanceTypeFamily { get; set; }

                    }
                    public DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostSupportedInstanceTypesList SupportedInstanceTypesList { get; set; }
                    public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHostSupportedInstanceTypesList : TeaModel {
                        [NameInMap("SupportedInstanceTypesList")]
                        [Validation(Required=true)]
                        public List<string> SupportedInstanceTypesList { get; set; }

                    }
            }
        };

    }

}
