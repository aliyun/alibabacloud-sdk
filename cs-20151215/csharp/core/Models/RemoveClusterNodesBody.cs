// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class RemoveClusterNodesBody : TeaModel {
        [NameInMap("release_node")]
        [Validation(Required=false)]
        public bool? ReleaseNode { get; set; }

        [NameInMap("drain_node")]
        [Validation(Required=false)]
        public bool? DrainNode { get; set; }

        [NameInMap("nodes")]
        [Validation(Required=true)]
        public List<RemoveClusterNodesBodyNodes> Nodes { get; set; }
        public class RemoveClusterNodesBodyNodes : TeaModel {
            [NameInMap("node_name")]
            [Validation(Required=false)]
            public string NodeName { get; set; }

        }

    }

}
