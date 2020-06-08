// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDedicatedHostsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DedicatedHostGroupId")]
        [Validation(Required=true)]
        public string DedicatedHostGroupId { get; set; }

        [NameInMap("DedicatedHosts")]
        [Validation(Required=true)]
        public DescribeDedicatedHostsResponseDedicatedHosts DedicatedHosts { get; set; }
        public class DescribeDedicatedHostsResponseDedicatedHosts : TeaModel {
            [NameInMap("DedicatedHosts")]
            [Validation(Required=true)]
            public List<DescribeDedicatedHostsResponseDedicatedHostsDedicatedHosts> DedicatedHosts { get; set; }
            public class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHosts : TeaModel {
                    public string HostName { get; set; }
                    public string HostStatus { get; set; }
                    public string InstanceNumber { get; set; }
                    public string CPUAllocationRatio { get; set; }
                    public string MemAllocationRatio { get; set; }
                    public string DiskAllocationRatio { get; set; }
                    public string VPCId { get; set; }
                    public string VSwitchId { get; set; }
                    public string ZoneId { get; set; }
                    public string IPAddress { get; set; }
                    public string HostClass { get; set; }
                    public string CreatedTime { get; set; }
                    public string DedicatedHostId { get; set; }
                    public string AllocationStatus { get; set; }
                    public string EndTime { get; set; }
                    public string HostType { get; set; }
                    public string BastionInstanceId { get; set; }
                    public string OpenPermission { get; set; }
                    public string AccountName { get; set; }
                    public string HostCPU { get; set; }
                    public string HostMem { get; set; }
                    public string HostStorage { get; set; }
                    public string CpuUsed { get; set; }
                    public string MemoryUsed { get; set; }
                    public string StorageUsed { get; set; }
                    public string ImageCategory { get; set; }
            }
        };

    }

}
