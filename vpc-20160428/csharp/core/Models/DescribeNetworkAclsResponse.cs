// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeNetworkAclsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public string TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public string PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public string PageSize { get; set; }

        [NameInMap("NetworkAcls")]
        [Validation(Required=true)]
        public DescribeNetworkAclsResponseNetworkAcls NetworkAcls { get; set; }
        public class DescribeNetworkAclsResponseNetworkAcls : TeaModel {
            [NameInMap("NetworkAcl")]
            [Validation(Required=true)]
            public List<DescribeNetworkAclsResponseNetworkAclsNetworkAcl> NetworkAcl { get; set; }
            public class DescribeNetworkAclsResponseNetworkAclsNetworkAcl : TeaModel {
                    public string NetworkAclId { get; set; }
                    public string RegionId { get; set; }
                    public string NetworkAclName { get; set; }
                    public string Description { get; set; }
                    public string VpcId { get; set; }
                    public string CreationTime { get; set; }
                    public string Status { get; set; }
                    public long OwnerId { get; set; }
                    public DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntries IngressAclEntries { get; set; }
                    public class DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntries : TeaModel {
                        [NameInMap("IngressAclEntry")]
                        [Validation(Required=true)]
                        public List<DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntriesIngressAclEntry> IngressAclEntry { get; set; }
                        public class DescribeNetworkAclsResponseNetworkAclsNetworkAclIngressAclEntriesIngressAclEntry : TeaModel {
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
                    public DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntries EgressAclEntries { get; set; }
                    public class DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntries : TeaModel {
                        [NameInMap("EgressAclEntry")]
                        [Validation(Required=true)]
                        public List<DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntriesEgressAclEntry> EgressAclEntry { get; set; }
                        public class DescribeNetworkAclsResponseNetworkAclsNetworkAclEgressAclEntriesEgressAclEntry : TeaModel {
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
                    public DescribeNetworkAclsResponseNetworkAclsNetworkAclResources Resources { get; set; }
                    public class DescribeNetworkAclsResponseNetworkAclsNetworkAclResources : TeaModel {
                        [NameInMap("Resource")]
                        [Validation(Required=true)]
                        public List<DescribeNetworkAclsResponseNetworkAclsNetworkAclResourcesResource> Resource { get; set; }
                        public class DescribeNetworkAclsResponseNetworkAclsNetworkAclResourcesResource : TeaModel {
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
            }
        };

    }

}
