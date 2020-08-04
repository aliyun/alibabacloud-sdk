// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDedicatedHostTypesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DedicatedHostTypes")]
        [Validation(Required=true)]
        public DescribeDedicatedHostTypesResponseDedicatedHostTypes DedicatedHostTypes { get; set; }
        public class DescribeDedicatedHostTypesResponseDedicatedHostTypes : TeaModel {
            [NameInMap("DedicatedHostType")]
            [Validation(Required=true)]
            public List<DescribeDedicatedHostTypesResponseDedicatedHostTypesDedicatedHostType> DedicatedHostType { get; set; }
            public class DescribeDedicatedHostTypesResponseDedicatedHostTypesDedicatedHostType : TeaModel {
                    public string DedicatedHostType { get; set; }
                    public int? Sockets { get; set; }
                    public int? TotalVcpus { get; set; }
                    public int? TotalVgpus { get; set; }
                    public int? Cores { get; set; }
                    public int? PhysicalGpus { get; set; }
                    public float? MemorySize { get; set; }
                    public long LocalStorageCapacity { get; set; }
                    public int? LocalStorageAmount { get; set; }
                    public string LocalStorageCategory { get; set; }
                    public string GPUSpec { get; set; }
                    public DescribeDedicatedHostTypesResponseDedicatedHostTypesDedicatedHostTypeSupportedInstanceTypeFamilies SupportedInstanceTypeFamilies { get; set; }
                    public class DescribeDedicatedHostTypesResponseDedicatedHostTypesDedicatedHostTypeSupportedInstanceTypeFamilies : TeaModel {
                        [NameInMap("SupportedInstanceTypeFamily")]
                        [Validation(Required=true)]
                        public List<string> SupportedInstanceTypeFamily { get; set; }

                    }
                    public DescribeDedicatedHostTypesResponseDedicatedHostTypesDedicatedHostTypeSupportedInstanceTypesList SupportedInstanceTypesList { get; set; }
                    public class DescribeDedicatedHostTypesResponseDedicatedHostTypesDedicatedHostTypeSupportedInstanceTypesList : TeaModel {
                        [NameInMap("SupportedInstanceTypesList")]
                        [Validation(Required=true)]
                        public List<string> SupportedInstanceTypesList { get; set; }

                    }
            }
        };

    }

}
