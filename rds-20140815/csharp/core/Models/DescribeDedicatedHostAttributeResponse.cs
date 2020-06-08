// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDedicatedHostAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DedicatedHostGroupId")]
        [Validation(Required=true)]
        public string DedicatedHostGroupId { get; set; }

        [NameInMap("DedicatedHostId")]
        [Validation(Required=true)]
        public string DedicatedHostId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=true)]
        public string ZoneId { get; set; }

        [NameInMap("VPCId")]
        [Validation(Required=true)]
        public string VPCId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=true)]
        public string VSwitchId { get; set; }

        [NameInMap("IPAddress")]
        [Validation(Required=true)]
        public string IPAddress { get; set; }

        [NameInMap("HostName")]
        [Validation(Required=true)]
        public string HostName { get; set; }

        [NameInMap("HostStatus")]
        [Validation(Required=true)]
        public string HostStatus { get; set; }

        [NameInMap("HostClass")]
        [Validation(Required=true)]
        public string HostClass { get; set; }

        [NameInMap("HostCPU")]
        [Validation(Required=true)]
        public int? HostCPU { get; set; }

        [NameInMap("HostMem")]
        [Validation(Required=true)]
        public int? HostMem { get; set; }

        [NameInMap("HostStorage")]
        [Validation(Required=true)]
        public int? HostStorage { get; set; }

        [NameInMap("CPUAllocationRatio")]
        [Validation(Required=true)]
        public string CPUAllocationRatio { get; set; }

        [NameInMap("MemAllocationRatio")]
        [Validation(Required=true)]
        public string MemAllocationRatio { get; set; }

        [NameInMap("DiskAllocationRatio")]
        [Validation(Required=true)]
        public string DiskAllocationRatio { get; set; }

        [NameInMap("InstanceNumber")]
        [Validation(Required=true)]
        public int? InstanceNumber { get; set; }

        [NameInMap("InstanceNumberMaster")]
        [Validation(Required=true)]
        public int? InstanceNumberMaster { get; set; }

        [NameInMap("InstanceNumberSlave")]
        [Validation(Required=true)]
        public int? InstanceNumberSlave { get; set; }

        [NameInMap("InstanceNumberROMaster")]
        [Validation(Required=true)]
        public int? InstanceNumberROMaster { get; set; }

        [NameInMap("InstanceNumberROSlave")]
        [Validation(Required=true)]
        public int? InstanceNumberROSlave { get; set; }

        [NameInMap("CreatedTime")]
        [Validation(Required=true)]
        public string CreatedTime { get; set; }

        [NameInMap("ExpiredTime")]
        [Validation(Required=true)]
        public string ExpiredTime { get; set; }

        [NameInMap("AutoRenew")]
        [Validation(Required=true)]
        public string AutoRenew { get; set; }

        [NameInMap("AllocationStatus")]
        [Validation(Required=true)]
        public string AllocationStatus { get; set; }

        [NameInMap("CpuUsed")]
        [Validation(Required=true)]
        public string CpuUsed { get; set; }

        [NameInMap("MemoryUsed")]
        [Validation(Required=true)]
        public string MemoryUsed { get; set; }

        [NameInMap("StorageUsed")]
        [Validation(Required=true)]
        public string StorageUsed { get; set; }

        [NameInMap("HostType")]
        [Validation(Required=true)]
        public string HostType { get; set; }

        [NameInMap("AccountName")]
        [Validation(Required=true)]
        public string AccountName { get; set; }

        [NameInMap("OpenPermission")]
        [Validation(Required=true)]
        public string OpenPermission { get; set; }

        [NameInMap("ImageCategory")]
        [Validation(Required=true)]
        public string ImageCategory { get; set; }

    }

}
