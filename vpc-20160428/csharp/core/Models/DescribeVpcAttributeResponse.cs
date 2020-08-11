// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVpcAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("VpcName")]
        [Validation(Required=true)]
        public string VpcName { get; set; }

        [NameInMap("CreationTime")]
        [Validation(Required=true)]
        public string CreationTime { get; set; }

        [NameInMap("CidrBlock")]
        [Validation(Required=true)]
        public string CidrBlock { get; set; }

        [NameInMap("Ipv6CidrBlock")]
        [Validation(Required=true)]
        public string Ipv6CidrBlock { get; set; }

        [NameInMap("VRouterId")]
        [Validation(Required=true)]
        public string VRouterId { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("IsDefault")]
        [Validation(Required=true)]
        public bool? IsDefault { get; set; }

        [NameInMap("ClassicLinkEnabled")]
        [Validation(Required=true)]
        public bool? ClassicLinkEnabled { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

        [NameInMap("NetworkAclNum")]
        [Validation(Required=true)]
        public string NetworkAclNum { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=true)]
        public long OwnerId { get; set; }

        [NameInMap("DhcpOptionsSetId")]
        [Validation(Required=true)]
        public string DhcpOptionsSetId { get; set; }

        [NameInMap("DhcpOptionsSetStatus")]
        [Validation(Required=true)]
        public string DhcpOptionsSetStatus { get; set; }

        [NameInMap("AssociatedCens")]
        [Validation(Required=true)]
        public DescribeVpcAttributeResponseAssociatedCens AssociatedCens { get; set; }
        public class DescribeVpcAttributeResponseAssociatedCens : TeaModel {
            [NameInMap("AssociatedCen")]
            [Validation(Required=true)]
            public List<DescribeVpcAttributeResponseAssociatedCensAssociatedCen> AssociatedCen { get; set; }
            public class DescribeVpcAttributeResponseAssociatedCensAssociatedCen : TeaModel {
                    public string CenId { get; set; }
                    public long CenOwnerId { get; set; }
                    public string CenStatus { get; set; }
            }
        };

        [NameInMap("CloudResources")]
        [Validation(Required=true)]
        public DescribeVpcAttributeResponseCloudResources CloudResources { get; set; }
        public class DescribeVpcAttributeResponseCloudResources : TeaModel {
            [NameInMap("CloudResourceSetType")]
            [Validation(Required=true)]
            public List<DescribeVpcAttributeResponseCloudResourcesCloudResourceSetType> CloudResourceSetType { get; set; }
            public class DescribeVpcAttributeResponseCloudResourcesCloudResourceSetType : TeaModel {
                    public string ResourceType { get; set; }
                    public int? ResourceCount { get; set; }
            }
        };

        [NameInMap("VSwitchIds")]
        [Validation(Required=true)]
        public DescribeVpcAttributeResponseVSwitchIds VSwitchIds { get; set; }
        public class DescribeVpcAttributeResponseVSwitchIds : TeaModel {
            [NameInMap("VSwitchId")]
            [Validation(Required=true)]
            public List<string> VSwitchId { get; set; }
        };

        [NameInMap("UserCidrs")]
        [Validation(Required=true)]
        public DescribeVpcAttributeResponseUserCidrs UserCidrs { get; set; }
        public class DescribeVpcAttributeResponseUserCidrs : TeaModel {
            [NameInMap("UserCidr")]
            [Validation(Required=true)]
            public List<string> UserCidr { get; set; }
        };

        [NameInMap("SecondaryCidrBlocks")]
        [Validation(Required=true)]
        public DescribeVpcAttributeResponseSecondaryCidrBlocks SecondaryCidrBlocks { get; set; }
        public class DescribeVpcAttributeResponseSecondaryCidrBlocks : TeaModel {
            [NameInMap("SecondaryCidrBlock")]
            [Validation(Required=true)]
            public List<string> SecondaryCidrBlock { get; set; }
        };

    }

}
