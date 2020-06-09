// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class CreateDBNodesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("OrderId")]
        [Validation(Required=true)]
        public string OrderId { get; set; }

        [NameInMap("DBNodeIds")]
        [Validation(Required=true)]
        public CreateDBNodesResponseDBNodeIds DBNodeIds { get; set; }
        public class CreateDBNodesResponseDBNodeIds : TeaModel {
            [NameInMap("DBNodeId")]
            [Validation(Required=true)]
            public List<string> DBNodeId { get; set; }
        };

    }

}
