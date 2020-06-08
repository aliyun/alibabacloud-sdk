// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class ModifyDedicatedHostGroupAttributeRequest : TeaModel {
        [NameInMap("AccessKeyId")]
        [Validation(Required=false)]
        public string AccessKeyId { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=false)]
        public long OwnerId { get; set; }

        [NameInMap("ResourceOwnerAccount")]
        [Validation(Required=false)]
        public string ResourceOwnerAccount { get; set; }

        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=false)]
        public string RegionId { get; set; }

        [NameInMap("DedicatedHostGroupId")]
        [Validation(Required=true)]
        public string DedicatedHostGroupId { get; set; }

        [NameInMap("DedicatedHostGroupDesc")]
        [Validation(Required=false)]
        public string DedicatedHostGroupDesc { get; set; }

        [NameInMap("CpuAllocationRatio")]
        [Validation(Required=false)]
        public int? CpuAllocationRatio { get; set; }

        [NameInMap("MemAllocationRatio")]
        [Validation(Required=false)]
        public int? MemAllocationRatio { get; set; }

        [NameInMap("DiskAllocationRatio")]
        [Validation(Required=false)]
        public int? DiskAllocationRatio { get; set; }

        [NameInMap("AllocationPolicy")]
        [Validation(Required=false)]
        public string AllocationPolicy { get; set; }

        [NameInMap("HostReplacePolicy")]
        [Validation(Required=false)]
        public string HostReplacePolicy { get; set; }

    }

}
