// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeNetworkInterfaceAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NetworkInterfaceId")]
        [Validation(Required=true)]
        public string NetworkInterfaceId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("Type")]
        [Validation(Required=true)]
        public string Type { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=true)]
        public string VSwitchId { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=true)]
        public string ZoneId { get; set; }

        [NameInMap("PrivateIpAddress")]
        [Validation(Required=true)]
        public string PrivateIpAddress { get; set; }

        [NameInMap("MacAddress")]
        [Validation(Required=true)]
        public string MacAddress { get; set; }

        [NameInMap("NetworkInterfaceName")]
        [Validation(Required=true)]
        public string NetworkInterfaceName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("CreationTime")]
        [Validation(Required=true)]
        public string CreationTime { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

        [NameInMap("ServiceID")]
        [Validation(Required=true)]
        public long ServiceID { get; set; }

        [NameInMap("ServiceManaged")]
        [Validation(Required=true)]
        public bool? ServiceManaged { get; set; }

        [NameInMap("QueueNumber")]
        [Validation(Required=true)]
        public int? QueueNumber { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=true)]
        public string OwnerId { get; set; }

        [NameInMap("PrivateIpSets")]
        [Validation(Required=true)]
        public DescribeNetworkInterfaceAttributeResponsePrivateIpSets PrivateIpSets { get; set; }
        public class DescribeNetworkInterfaceAttributeResponsePrivateIpSets : TeaModel {
            [NameInMap("PrivateIpSet")]
            [Validation(Required=true)]
            public List<DescribeNetworkInterfaceAttributeResponsePrivateIpSetsPrivateIpSet> PrivateIpSet { get; set; }
            public class DescribeNetworkInterfaceAttributeResponsePrivateIpSetsPrivateIpSet : TeaModel {
                    public string PrivateIpAddress { get; set; }
                    public bool? Primary { get; set; }
                    public DescribeNetworkInterfaceAttributeResponsePrivateIpSetsPrivateIpSetAssociatedPublicIp AssociatedPublicIp { get; set; }
                    public class DescribeNetworkInterfaceAttributeResponsePrivateIpSetsPrivateIpSetAssociatedPublicIp : TeaModel {
                        [NameInMap("PublicIpAddress")]
                        [Validation(Required=true)]
                        public string PublicIpAddress { get; set; }

                        [NameInMap("AllocationId")]
                        [Validation(Required=true)]
                        public string AllocationId { get; set; }

                    }
            }
        };

        [NameInMap("Ipv6Sets")]
        [Validation(Required=true)]
        public DescribeNetworkInterfaceAttributeResponseIpv6Sets Ipv6Sets { get; set; }
        public class DescribeNetworkInterfaceAttributeResponseIpv6Sets : TeaModel {
            [NameInMap("Ipv6Set")]
            [Validation(Required=true)]
            public List<DescribeNetworkInterfaceAttributeResponseIpv6SetsIpv6Set> Ipv6Set { get; set; }
            public class DescribeNetworkInterfaceAttributeResponseIpv6SetsIpv6Set : TeaModel {
                    public string Ipv6Address { get; set; }
            }
        };

        [NameInMap("Tags")]
        [Validation(Required=true)]
        public DescribeNetworkInterfaceAttributeResponseTags Tags { get; set; }
        public class DescribeNetworkInterfaceAttributeResponseTags : TeaModel {
            [NameInMap("Tag")]
            [Validation(Required=true)]
            public List<DescribeNetworkInterfaceAttributeResponseTagsTag> Tag { get; set; }
            public class DescribeNetworkInterfaceAttributeResponseTagsTag : TeaModel {
                    public string TagKey { get; set; }
                    public string TagValue { get; set; }
            }
        };

        [NameInMap("AssociatedPublicIp")]
        [Validation(Required=true)]
        public DescribeNetworkInterfaceAttributeResponseAssociatedPublicIp AssociatedPublicIp { get; set; }
        public class DescribeNetworkInterfaceAttributeResponseAssociatedPublicIp : TeaModel {
            [NameInMap("PublicIpAddress")]
            [Validation(Required=true)]
            public string PublicIpAddress { get; set; }
            [NameInMap("AllocationId")]
            [Validation(Required=true)]
            public string AllocationId { get; set; }
        };

        [NameInMap("Attachment")]
        [Validation(Required=true)]
        public DescribeNetworkInterfaceAttributeResponseAttachment Attachment { get; set; }
        public class DescribeNetworkInterfaceAttributeResponseAttachment : TeaModel {
            [NameInMap("InstanceId")]
            [Validation(Required=true)]
            public string InstanceId { get; set; }
            [NameInMap("TrunkNetworkInterfaceId")]
            [Validation(Required=true)]
            public string TrunkNetworkInterfaceId { get; set; }
            [NameInMap("DeviceIndex")]
            [Validation(Required=true)]
            public int? DeviceIndex { get; set; }
            [NameInMap("MemberNetworkInterfaceIds")]
            [Validation(Required=true)]
            public DescribeNetworkInterfaceAttributeResponseAttachmentMemberNetworkInterfaceIds MemberNetworkInterfaceIds { get; set; }
            public class DescribeNetworkInterfaceAttributeResponseAttachmentMemberNetworkInterfaceIds : TeaModel {
                [NameInMap("MemberNetworkInterfaceId")]
                [Validation(Required=true)]
                public List<string> MemberNetworkInterfaceId { get; set; }

            }
        };

        [NameInMap("SecurityGroupIds")]
        [Validation(Required=true)]
        public DescribeNetworkInterfaceAttributeResponseSecurityGroupIds SecurityGroupIds { get; set; }
        public class DescribeNetworkInterfaceAttributeResponseSecurityGroupIds : TeaModel {
            [NameInMap("SecurityGroupId")]
            [Validation(Required=true)]
            public List<string> SecurityGroupId { get; set; }
        };

    }

}
