// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeCommonBandwidthPackagesResponse : TeaModel {
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

        [NameInMap("CommonBandwidthPackages")]
        [Validation(Required=true)]
        public DescribeCommonBandwidthPackagesResponseCommonBandwidthPackages CommonBandwidthPackages { get; set; }
        public class DescribeCommonBandwidthPackagesResponseCommonBandwidthPackages : TeaModel {
            [NameInMap("CommonBandwidthPackage")]
            [Validation(Required=true)]
            public List<DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackage> CommonBandwidthPackage { get; set; }
            public class DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackage : TeaModel {
                    public string BandwidthPackageId { get; set; }
                    public string RegionId { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string Bandwidth { get; set; }
                    public string InstanceChargeType { get; set; }
                    public string InternetChargeType { get; set; }
                    public string BusinessStatus { get; set; }
                    public string CreationTime { get; set; }
                    public string ExpiredTime { get; set; }
                    public string Status { get; set; }
                    public int? Ratio { get; set; }
                    public string ResourceGroupId { get; set; }
                    public string HasReservationData { get; set; }
                    public string ReservationBandwidth { get; set; }
                    public string ReservationInternetChargeType { get; set; }
                    public string ReservationActiveTime { get; set; }
                    public string ReservationOrderType { get; set; }
                    public string ISP { get; set; }
                    public bool? DeletionProtection { get; set; }
                    public DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddresses PublicIpAddresses { get; set; }
                    public class DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddresses : TeaModel {
                        [NameInMap("PublicIpAddresse")]
                        [Validation(Required=true)]
                        public List<DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddressesPublicIpAddresse> PublicIpAddresse { get; set; }
                        public class DescribeCommonBandwidthPackagesResponseCommonBandwidthPackagesCommonBandwidthPackagePublicIpAddressesPublicIpAddresse : TeaModel {
                            [NameInMap("AllocationId")]
                            [Validation(Required=true)]
                            public string AllocationId { get; set; }

                            [NameInMap("IpAddress")]
                            [Validation(Required=true)]
                            public string IpAddress { get; set; }

                        }

                    }
            }
        };

    }

}
