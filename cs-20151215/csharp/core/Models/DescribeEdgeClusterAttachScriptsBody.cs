// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeEdgeClusterAttachScriptsBody : TeaModel {
        [NameInMap("options")]
        [Validation(Required=true)]
        public DescribeEdgeClusterAttachScriptsBodyOptions Options { get; set; }
        public class DescribeEdgeClusterAttachScriptsBodyOptions : TeaModel {
            [NameInMap("enableIptables")]
            [Validation(Required=false)]
            public bool? EnableIptables { get; set; }
            [NameInMap("flannelIface")]
            [Validation(Required=false)]
            public string FlannelIface { get; set; }
            [NameInMap("gpuVersion")]
            [Validation(Required=false)]
            public string GpuVersion { get; set; }
            [NameInMap("manageRuntime")]
            [Validation(Required=false)]
            public bool? ManageRuntime { get; set; }
            [NameInMap("nodeName")]
            [Validation(Required=false)]
            public string NodeName { get; set; }
            [NameInMap("nodeNamePrefix")]
            [Validation(Required=false)]
            public string NodeNamePrefix { get; set; }
            [NameInMap("nodeNameStrategy")]
            [Validation(Required=false)]
            public bool? NodeNameStrategy { get; set; }
        };

    }

}
