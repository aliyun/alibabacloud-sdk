// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeNetworkInterfacesResponse : TeaModel {
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

        [NameInMap("NextToken")]
        [Validation(Required=true)]
        public string NextToken { get; set; }

        [NameInMap("NetworkInterfaceSets")]
        [Validation(Required=true)]
        public DescribeNetworkInterfacesResponseNetworkInterfaceSets NetworkInterfaceSets { get; set; }
        public class DescribeNetworkInterfacesResponseNetworkInterfaceSets : TeaModel {
            [NameInMap("NetworkInterfaceSet")]
            [Validation(Required=true)]
            public List<DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSet> NetworkInterfaceSet { get; set; }
            public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSet : TeaModel {
                    public string NetworkInterfaceId { get; set; }
                    public string Status { get; set; }
                    public string Type { get; set; }
                    public string VpcId { get; set; }
                    public string VSwitchId { get; set; }
                    public string ZoneId { get; set; }
                    public string PrivateIpAddress { get; set; }
                    public string MacAddress { get; set; }
                    public string NetworkInterfaceName { get; set; }
                    public string Description { get; set; }
                    public string InstanceId { get; set; }
                    public string CreationTime { get; set; }
                    public string ResourceGroupId { get; set; }
                    public long ServiceID { get; set; }
                    public bool? ServiceManaged { get; set; }
                    public int? QueueNumber { get; set; }
                    public string OwnerId { get; set; }
                    public DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetPrivateIpSets PrivateIpSets { get; set; }
                    public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetPrivateIpSets : TeaModel {
                        [NameInMap("PrivateIpSet")]
                        [Validation(Required=true)]
                        public List<DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetPrivateIpSetsPrivateIpSet> PrivateIpSet { get; set; }
                        public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetPrivateIpSetsPrivateIpSet : TeaModel {
                            [NameInMap("PrivateIpAddress")]
                            [Validation(Required=true)]
                            public string PrivateIpAddress { get; set; }

                            [NameInMap("Primary")]
                            [Validation(Required=true)]
                            public bool? Primary { get; set; }

                            [NameInMap("AssociatedPublicIp")]
                            [Validation(Required=true)]
                            public DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetPrivateIpSetsPrivateIpSetAssociatedPublicIp AssociatedPublicIp { get; set; }
                            public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetPrivateIpSetsPrivateIpSetAssociatedPublicIp : TeaModel {
                                [NameInMap("PublicIpAddress")]
                                [Validation(Required=true)]
                                public string PublicIpAddress { get; set; }
                                [NameInMap("AllocationId")]
                                [Validation(Required=true)]
                                public string AllocationId { get; set; }
                            };

                        }

                    }
                    public DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetIpv6Sets Ipv6Sets { get; set; }
                    public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetIpv6Sets : TeaModel {
                        [NameInMap("Ipv6Set")]
                        [Validation(Required=true)]
                        public List<DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetIpv6SetsIpv6Set> Ipv6Set { get; set; }
                        public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetIpv6SetsIpv6Set : TeaModel {
                            [NameInMap("Ipv6Address")]
                            [Validation(Required=true)]
                            public string Ipv6Address { get; set; }

                        }

                    }
                    public DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetTags Tags { get; set; }
                    public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetTagsTag> Tag { get; set; }
                        public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
                    public DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetAssociatedPublicIp AssociatedPublicIp { get; set; }
                    public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetAssociatedPublicIp : TeaModel {
                        [NameInMap("PublicIpAddress")]
                        [Validation(Required=true)]
                        public string PublicIpAddress { get; set; }

                        [NameInMap("AllocationId")]
                        [Validation(Required=true)]
                        public string AllocationId { get; set; }

                    }
                    public DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetAttachment Attachment { get; set; }
                    public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetAttachment : TeaModel {
                        [NameInMap("InstanceId")]
                        [Validation(Required=true)]
                        public string InstanceId { get; set; }

                        [NameInMap("TrunkNetworkInterfaceId")]
                        [Validation(Required=true)]
                        public string TrunkNetworkInterfaceId { get; set; }

                        [NameInMap("DeviceIndex")]
                        [Validation(Required=true)]
                        public int? DeviceIndex { get; set; }

                    }
                    public DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetSecurityGroupIds SecurityGroupIds { get; set; }
                    public class DescribeNetworkInterfacesResponseNetworkInterfaceSetsNetworkInterfaceSetSecurityGroupIds : TeaModel {
                        [NameInMap("SecurityGroupId")]
                        [Validation(Required=true)]
                        public List<string> SecurityGroupId { get; set; }

                    }
            }
        };

    }

}
