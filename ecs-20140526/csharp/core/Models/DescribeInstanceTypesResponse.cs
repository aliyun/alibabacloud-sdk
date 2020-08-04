// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceTypesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("InstanceTypes")]
        [Validation(Required=true)]
        public DescribeInstanceTypesResponseInstanceTypes InstanceTypes { get; set; }
        public class DescribeInstanceTypesResponseInstanceTypes : TeaModel {
            [NameInMap("InstanceType")]
            [Validation(Required=true)]
            public List<DescribeInstanceTypesResponseInstanceTypesInstanceType> InstanceType { get; set; }
            public class DescribeInstanceTypesResponseInstanceTypesInstanceType : TeaModel {
                    public string InstanceTypeId { get; set; }
                    public int? CpuCoreCount { get; set; }
                    public float? MemorySize { get; set; }
                    public string InstanceTypeFamily { get; set; }
                    public long LocalStorageCapacity { get; set; }
                    public int? LocalStorageAmount { get; set; }
                    public string LocalStorageCategory { get; set; }
                    public int? GPUAmount { get; set; }
                    public string GPUSpec { get; set; }
                    public int? InitialCredit { get; set; }
                    public int? BaselineCredit { get; set; }
                    public int? EniQuantity { get; set; }
                    public int? EniPrivateIpAddressQuantity { get; set; }
                    public int? EniIpv6AddressQuantity { get; set; }
                    public int? InstanceBandwidthRx { get; set; }
                    public int? InstanceBandwidthTx { get; set; }
                    public long InstancePpsRx { get; set; }
                    public long InstancePpsTx { get; set; }
                    public string InstanceFamilyLevel { get; set; }
                    public int? TotalEniQueueQuantity { get; set; }
                    public bool? EniTrunkSupported { get; set; }
                    public int? EniTotalQuantity { get; set; }
            }
        };

    }

}
