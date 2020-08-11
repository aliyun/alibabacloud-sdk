// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeNetworkAclAttributesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NetworkAclAttribute")]
        [Validation(Required=true)]
        public DescribeNetworkAclAttributesResponseNetworkAclAttribute NetworkAclAttribute { get; set; }
        public class DescribeNetworkAclAttributesResponseNetworkAclAttribute : TeaModel {
            [NameInMap("NetworkAclId")]
            [Validation(Required=true)]
            public string NetworkAclId { get; set; }
            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }
            [NameInMap("NetworkAclName")]
            [Validation(Required=true)]
            public string NetworkAclName { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("VpcId")]
            [Validation(Required=true)]
            public string VpcId { get; set; }
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("OwnerId")]
            [Validation(Required=true)]
            public long OwnerId { get; set; }
            [NameInMap("IngressAclEntries")]
            [Validation(Required=true)]
            public DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntries IngressAclEntries { get; set; }
            public class DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntries : TeaModel {
                [NameInMap("IngressAclEntry")]
                [Validation(Required=true)]
                public List<DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry> IngressAclEntry { get; set; }
                public class DescribeNetworkAclAttributesResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry : TeaModel {
                    [NameInMap("NetworkAclEntryId")]
                    [Validation(Required=true)]
                    public string NetworkAclEntryId { get; set; }

                    [NameInMap("Policy")]
                    [Validation(Required=true)]
                    public string Policy { get; set; }

                    [NameInMap("Protocol")]
                    [Validation(Required=true)]
                    public string Protocol { get; set; }

                    [NameInMap("SourceCidrIp")]
                    [Validation(Required=true)]
                    public string SourceCidrIp { get; set; }

                    [NameInMap("Port")]
                    [Validation(Required=true)]
                    public string Port { get; set; }

                    [NameInMap("EntryType")]
                    [Validation(Required=true)]
                    public string EntryType { get; set; }

                    [NameInMap("NetworkAclEntryName")]
                    [Validation(Required=true)]
                    public string NetworkAclEntryName { get; set; }

                    [NameInMap("Description")]
                    [Validation(Required=true)]
                    public string Description { get; set; }

                }

            }
            [NameInMap("EgressAclEntries")]
            [Validation(Required=true)]
            public DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntries EgressAclEntries { get; set; }
            public class DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntries : TeaModel {
                [NameInMap("EgressAclEntry")]
                [Validation(Required=true)]
                public List<DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry> EgressAclEntry { get; set; }
                public class DescribeNetworkAclAttributesResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry : TeaModel {
                    [NameInMap("NetworkAclEntryId")]
                    [Validation(Required=true)]
                    public string NetworkAclEntryId { get; set; }

                    [NameInMap("Policy")]
                    [Validation(Required=true)]
                    public string Policy { get; set; }

                    [NameInMap("Protocol")]
                    [Validation(Required=true)]
                    public string Protocol { get; set; }

                    [NameInMap("DestinationCidrIp")]
                    [Validation(Required=true)]
                    public string DestinationCidrIp { get; set; }

                    [NameInMap("Port")]
                    [Validation(Required=true)]
                    public string Port { get; set; }

                    [NameInMap("EntryType")]
                    [Validation(Required=true)]
                    public string EntryType { get; set; }

                    [NameInMap("Description")]
                    [Validation(Required=true)]
                    public string Description { get; set; }

                    [NameInMap("NetworkAclEntryName")]
                    [Validation(Required=true)]
                    public string NetworkAclEntryName { get; set; }

                }

            }
            [NameInMap("Resources")]
            [Validation(Required=true)]
            public DescribeNetworkAclAttributesResponseNetworkAclAttributeResources Resources { get; set; }
            public class DescribeNetworkAclAttributesResponseNetworkAclAttributeResources : TeaModel {
                [NameInMap("Resource")]
                [Validation(Required=true)]
                public List<DescribeNetworkAclAttributesResponseNetworkAclAttributeResourcesResource> Resource { get; set; }
                public class DescribeNetworkAclAttributesResponseNetworkAclAttributeResourcesResource : TeaModel {
                    [NameInMap("ResourceId")]
                    [Validation(Required=true)]
                    public string ResourceId { get; set; }

                    [NameInMap("ResourceType")]
                    [Validation(Required=true)]
                    public string ResourceType { get; set; }

                    [NameInMap("Status")]
                    [Validation(Required=true)]
                    public string Status { get; set; }

                }

            }
        };

    }

}
