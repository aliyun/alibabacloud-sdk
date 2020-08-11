// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVpcsResponse : TeaModel {
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

        [NameInMap("Vpcs")]
        [Validation(Required=true)]
        public DescribeVpcsResponseVpcs Vpcs { get; set; }
        public class DescribeVpcsResponseVpcs : TeaModel {
            [NameInMap("Vpc")]
            [Validation(Required=true)]
            public List<DescribeVpcsResponseVpcsVpc> Vpc { get; set; }
            public class DescribeVpcsResponseVpcsVpc : TeaModel {
                    public string VpcId { get; set; }
                    public string RegionId { get; set; }
                    public string Status { get; set; }
                    public string VpcName { get; set; }
                    public string CreationTime { get; set; }
                    public string CidrBlock { get; set; }
                    public string Ipv6CidrBlock { get; set; }
                    public string VRouterId { get; set; }
                    public string Description { get; set; }
                    public bool? IsDefault { get; set; }
                    public string NetworkAclNum { get; set; }
                    public string ResourceGroupId { get; set; }
                    public string CenStatus { get; set; }
                    public long OwnerId { get; set; }
                    public bool? SupportAdvancedFeature { get; set; }
                    public bool? AdvancedResource { get; set; }
                    public string DhcpOptionsSetId { get; set; }
                    public string DhcpOptionsSetStatus { get; set; }
                    public DescribeVpcsResponseVpcsVpcTags Tags { get; set; }
                    public class DescribeVpcsResponseVpcsVpcTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeVpcsResponseVpcsVpcTagsTag> Tag { get; set; }
                        public class DescribeVpcsResponseVpcsVpcTagsTag : TeaModel {
                            [NameInMap("Key")]
                            [Validation(Required=true)]
                            public string Key { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
                    public DescribeVpcsResponseVpcsVpcVSwitchIds VSwitchIds { get; set; }
                    public class DescribeVpcsResponseVpcsVpcVSwitchIds : TeaModel {
                        [NameInMap("VSwitchId")]
                        [Validation(Required=true)]
                        public List<string> VSwitchId { get; set; }

                    }
                    public DescribeVpcsResponseVpcsVpcUserCidrs UserCidrs { get; set; }
                    public class DescribeVpcsResponseVpcsVpcUserCidrs : TeaModel {
                        [NameInMap("UserCidr")]
                        [Validation(Required=true)]
                        public List<string> UserCidr { get; set; }

                    }
                    public DescribeVpcsResponseVpcsVpcNatGatewayIds NatGatewayIds { get; set; }
                    public class DescribeVpcsResponseVpcsVpcNatGatewayIds : TeaModel {
                        [NameInMap("NatGatewayIds")]
                        [Validation(Required=true)]
                        public List<string> NatGatewayIds { get; set; }

                    }
                    public DescribeVpcsResponseVpcsVpcRouterTableIds RouterTableIds { get; set; }
                    public class DescribeVpcsResponseVpcsVpcRouterTableIds : TeaModel {
                        [NameInMap("RouterTableIds")]
                        [Validation(Required=true)]
                        public List<string> RouterTableIds { get; set; }

                    }
                    public DescribeVpcsResponseVpcsVpcSecondaryCidrBlocks SecondaryCidrBlocks { get; set; }
                    public class DescribeVpcsResponseVpcsVpcSecondaryCidrBlocks : TeaModel {
                        [NameInMap("SecondaryCidrBlock")]
                        [Validation(Required=true)]
                        public List<string> SecondaryCidrBlock { get; set; }

                    }
            }
        };

    }

}
