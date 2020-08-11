// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class UpdateNetworkAclEntriesRequest : TeaModel {
        [NameInMap("IngressAclEntries")]
        [Validation(Required=false)]
        public List<UpdateNetworkAclEntriesRequestIngressAclEntries> IngressAclEntries { get; set; }
        public class UpdateNetworkAclEntriesRequestIngressAclEntries : TeaModel {
            [NameInMap("NetworkAclEntryName")]
            [Validation(Required=true)]
            public string NetworkAclEntryName { get; set; }

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

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

        }

        [NameInMap("EgressAclEntries")]
        [Validation(Required=false)]
        public List<UpdateNetworkAclEntriesRequestEgressAclEntries> EgressAclEntries { get; set; }
        public class UpdateNetworkAclEntriesRequestEgressAclEntries : TeaModel {
            [NameInMap("NetworkAclEntryName")]
            [Validation(Required=true)]
            public string NetworkAclEntryName { get; set; }

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

        }

        [NameInMap("UpdateIngressAclEntries")]
        [Validation(Required=false)]
        public bool? UpdateIngressAclEntries { get; set; }

        [NameInMap("UpdateEgressAclEntries")]
        [Validation(Required=false)]
        public bool? UpdateEgressAclEntries { get; set; }

        [NameInMap("NetworkAclId")]
        [Validation(Required=true)]
        public string NetworkAclId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
