// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeBandwidthPackagesResponse : TeaModel {
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

        [NameInMap("BandwidthPackages")]
        [Validation(Required=true)]
        public DescribeBandwidthPackagesResponseBandwidthPackages BandwidthPackages { get; set; }
        public class DescribeBandwidthPackagesResponseBandwidthPackages : TeaModel {
            [NameInMap("BandwidthPackage")]
            [Validation(Required=true)]
            public List<DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackage> BandwidthPackage { get; set; }
            public class DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackage : TeaModel {
                    public string BandwidthPackageId { get; set; }
                    public string RegionId { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string ZoneId { get; set; }
                    public string NatGatewayId { get; set; }
                    public string Bandwidth { get; set; }
                    public string InstanceChargeType { get; set; }
                    public string InternetChargeType { get; set; }
                    public string BusinessStatus { get; set; }
                    public string IpCount { get; set; }
                    public string CreationTime { get; set; }
                    public string Status { get; set; }
                    public string ISP { get; set; }
                    public DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddresses PublicIpAddresses { get; set; }
                    public class DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddresses : TeaModel {
                        [NameInMap("PublicIpAddresse")]
                        [Validation(Required=true)]
                        public List<DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddressesPublicIpAddresse> PublicIpAddresse { get; set; }
                        public class DescribeBandwidthPackagesResponseBandwidthPackagesBandwidthPackagePublicIpAddressesPublicIpAddresse : TeaModel {
                            [NameInMap("AllocationId")]
                            [Validation(Required=true)]
                            public string AllocationId { get; set; }

                            [NameInMap("IpAddress")]
                            [Validation(Required=true)]
                            public string IpAddress { get; set; }

                            [NameInMap("UsingStatus")]
                            [Validation(Required=true)]
                            public string UsingStatus { get; set; }

                            [NameInMap("ApAccessEnabled")]
                            [Validation(Required=true)]
                            public bool? ApAccessEnabled { get; set; }

                        }

                    }
            }
        };

    }

}
