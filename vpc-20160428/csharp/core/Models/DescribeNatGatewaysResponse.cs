// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeNatGatewaysResponse : TeaModel {
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

        [NameInMap("NatGateways")]
        [Validation(Required=true)]
        public DescribeNatGatewaysResponseNatGateways NatGateways { get; set; }
        public class DescribeNatGatewaysResponseNatGateways : TeaModel {
            [NameInMap("NatGateway")]
            [Validation(Required=true)]
            public List<DescribeNatGatewaysResponseNatGatewaysNatGateway> NatGateway { get; set; }
            public class DescribeNatGatewaysResponseNatGatewaysNatGateway : TeaModel {
                    public string NatGatewayId { get; set; }
                    public string RegionId { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string VpcId { get; set; }
                    public string Spec { get; set; }
                    public string InstanceChargeType { get; set; }
                    public string ExpiredTime { get; set; }
                    public bool? AutoPay { get; set; }
                    public string BusinessStatus { get; set; }
                    public string CreationTime { get; set; }
                    public string Status { get; set; }
                    public string NatType { get; set; }
                    public string InternetChargeType { get; set; }
                    public string ResourceGroupId { get; set; }
                    public bool? DeletionProtection { get; set; }
                    public bool? EcsMetricEnabled { get; set; }
                    public DescribeNatGatewaysResponseNatGatewaysNatGatewayIpLists IpLists { get; set; }
                    public class DescribeNatGatewaysResponseNatGatewaysNatGatewayIpLists : TeaModel {
                        [NameInMap("IpList")]
                        [Validation(Required=true)]
                        public List<DescribeNatGatewaysResponseNatGatewaysNatGatewayIpListsIpList> IpList { get; set; }
                        public class DescribeNatGatewaysResponseNatGatewaysNatGatewayIpListsIpList : TeaModel {
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

                            [NameInMap("SnatEntryEnabled")]
                            [Validation(Required=true)]
                            public bool? SnatEntryEnabled { get; set; }

                        }

                    }
                    public DescribeNatGatewaysResponseNatGatewaysNatGatewayNatGatewayPrivateInfo NatGatewayPrivateInfo { get; set; }
                    public class DescribeNatGatewaysResponseNatGatewaysNatGatewayNatGatewayPrivateInfo : TeaModel {
                        [NameInMap("EniInstanceId")]
                        [Validation(Required=true)]
                        public string EniInstanceId { get; set; }

                        [NameInMap("PrivateIpAddress")]
                        [Validation(Required=true)]
                        public string PrivateIpAddress { get; set; }

                        [NameInMap("VswitchId")]
                        [Validation(Required=true)]
                        public string VswitchId { get; set; }

                        [NameInMap("IzNo")]
                        [Validation(Required=true)]
                        public string IzNo { get; set; }

                        [NameInMap("MaxBandwidth")]
                        [Validation(Required=true)]
                        public int? MaxBandwidth { get; set; }

                    }
                    public DescribeNatGatewaysResponseNatGatewaysNatGatewayForwardTableIds ForwardTableIds { get; set; }
                    public class DescribeNatGatewaysResponseNatGatewaysNatGatewayForwardTableIds : TeaModel {
                        [NameInMap("ForwardTableId")]
                        [Validation(Required=true)]
                        public List<string> ForwardTableId { get; set; }

                    }
                    public DescribeNatGatewaysResponseNatGatewaysNatGatewaySnatTableIds SnatTableIds { get; set; }
                    public class DescribeNatGatewaysResponseNatGatewaysNatGatewaySnatTableIds : TeaModel {
                        [NameInMap("SnatTableId")]
                        [Validation(Required=true)]
                        public List<string> SnatTableId { get; set; }

                    }
                    public DescribeNatGatewaysResponseNatGatewaysNatGatewayBandwidthPackageIds BandwidthPackageIds { get; set; }
                    public class DescribeNatGatewaysResponseNatGatewaysNatGatewayBandwidthPackageIds : TeaModel {
                        [NameInMap("BandwidthPackageId")]
                        [Validation(Required=true)]
                        public List<string> BandwidthPackageId { get; set; }

                    }
            }
        };

    }

}
