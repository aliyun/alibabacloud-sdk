// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class CreateDBNodesRequest : TeaModel {
        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("DBNode")]
        [Validation(Required=true)]
        public List<CreateDBNodesRequestDBNode> DBNode { get; set; }
        public class CreateDBNodesRequestDBNode : TeaModel {
            [NameInMap("TargetClass")]
            [Validation(Required=true)]
            public string TargetClass { get; set; }

            [NameInMap("ZoneId")]
            [Validation(Required=true)]
            public string ZoneId { get; set; }

        }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
