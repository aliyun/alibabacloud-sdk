// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
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
                    public string PrivateIpAddress { get; set; }
                    public string AllocationId { get; set; }
                    public string Status { get; set; }
                    public string InstanceId { get; set; }
                    public string Bandwidth { get; set; }
                    public string EipBandwidth { get; set; }
                    public string InternetChargeType { get; set; }
                    public string AllocationTime { get; set; }
                    public string InstanceType { get; set; }
                    public string InstanceRegionId { get; set; }
                    public string ChargeType { get; set; }
                    public string ExpiredTime { get; set; }
                    public string HDMonitorStatus { get; set; }
                    public string Name { get; set; }
                    public string ISP { get; set; }
                    public string Descritpion { get; set; }
                    public string BandwidthPackageId { get; set; }
                    public string BandwidthPackageType { get; set; }
                    public string BandwidthPackageBandwidth { get; set; }
                    public string ResourceGroupId { get; set; }
                    public string HasReservationData { get; set; }
                    public string ReservationBandwidth { get; set; }
                    public string ReservationInternetChargeType { get; set; }
                    public string ReservationActiveTime { get; set; }
                    public string ReservationOrderType { get; set; }
                    public string Mode { get; set; }
                    public bool? DeletionProtection { get; set; }
                    public bool? SecondLimited { get; set; }
                    public string SegmentInstanceId { get; set; }
                    public string Netmode { get; set; }
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
                    public DescribeEipAddressesResponseEipAddressesEipAddressAvailableRegions AvailableRegions { get; set; }
                    public class DescribeEipAddressesResponseEipAddressesEipAddressAvailableRegions : TeaModel {
                        [NameInMap("AvailableRegion")]
                        [Validation(Required=true)]
                        public List<string> AvailableRegion { get; set; }

                    }
            }
        };

    }

}
