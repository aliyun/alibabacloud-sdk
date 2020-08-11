// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateNetworkAclResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NetworkAclId")]
        [Validation(Required=true)]
        public string NetworkAclId { get; set; }

        [NameInMap("NetworkAclAttribute")]
        [Validation(Required=true)]
        public CreateNetworkAclResponseNetworkAclAttribute NetworkAclAttribute { get; set; }
        public class CreateNetworkAclResponseNetworkAclAttribute : TeaModel {
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
            [NameInMap("IngressAclEntries")]
            [Validation(Required=true)]
            public CreateNetworkAclResponseNetworkAclAttributeIngressAclEntries IngressAclEntries { get; set; }
            public class CreateNetworkAclResponseNetworkAclAttributeIngressAclEntries : TeaModel {
                [NameInMap("IngressAclEntry")]
                [Validation(Required=true)]
                public List<CreateNetworkAclResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry> IngressAclEntry { get; set; }
                public class CreateNetworkAclResponseNetworkAclAttributeIngressAclEntriesIngressAclEntry : TeaModel {
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
            public CreateNetworkAclResponseNetworkAclAttributeEgressAclEntries EgressAclEntries { get; set; }
            public class CreateNetworkAclResponseNetworkAclAttributeEgressAclEntries : TeaModel {
                [NameInMap("EgressAclEntry")]
                [Validation(Required=true)]
                public List<CreateNetworkAclResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry> EgressAclEntry { get; set; }
                public class CreateNetworkAclResponseNetworkAclAttributeEgressAclEntriesEgressAclEntry : TeaModel {
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
            public CreateNetworkAclResponseNetworkAclAttributeResources Resources { get; set; }
            public class CreateNetworkAclResponseNetworkAclAttributeResources : TeaModel {
                [NameInMap("Resource")]
                [Validation(Required=true)]
                public List<CreateNetworkAclResponseNetworkAclAttributeResourcesResource> Resource { get; set; }
                public class CreateNetworkAclResponseNetworkAclAttributeResourcesResource : TeaModel {
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
