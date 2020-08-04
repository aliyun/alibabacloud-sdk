// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeEipAddressesResponse : TeaModel {
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

        [NameInMap("EipAddresses")]
        [Validation(Required=true)]
        public DescribeEipAddressesResponseEipAddresses EipAddresses { get; set; }
        public class DescribeEipAddressesResponseEipAddresses : TeaModel {
            [NameInMap("EipAddress")]
            [Validation(Required=true)]
            public List<DescribeEipAddressesResponseEipAddressesEipAddress> EipAddress { get; set; }
            public class DescribeEipAddressesResponseEipAddressesEipAddress : TeaModel {
                    public string RegionId { get; set; }
                    public string IpAddress { get; set; }
                    public string AllocationId { get; set; }
                    public string Status { get; set; }
                    public string InstanceId { get; set; }
                    public string Bandwidth { get; set; }
                    public string EipBandwidth { get; set; }
                    public string InternetChargeType { get; set; }
                    public string AllocationTime { get; set; }
                    public string InstanceType { get; set; }
                    public string ChargeType { get; set; }
                    public string ExpiredTime { get; set; }
                    public DescribeEipAddressesResponseEipAddressesEipAddressOperationLocks OperationLocks { get; set; }
                    public class DescribeEipAddressesResponseEipAddressesEipAddressOperationLocks : TeaModel {
                        [NameInMap("LockReason")]
                        [Validation(Required=true)]
                        public List<DescribeEipAddressesResponseEipAddressesEipAddressOperationLocksLockReason> LockReason { get; set; }
                        public class DescribeEipAddressesResponseEipAddressesEipAddressOperationLocksLockReason : TeaModel {
                            [NameInMap("LockReason")]
                            [Validation(Required=true)]
                            public string LockReason { get; set; }

                        }

                    }
            }
        };

    }

}
