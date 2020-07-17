// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class ModifyDBClusterAccessWhitelistRequest : TeaModel {
        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("SecurityIps")]
        [Validation(Required=false)]
        public string SecurityIps { get; set; }

        [NameInMap("DBClusterIPArrayName")]
        [Validation(Required=false)]
        public string DBClusterIPArrayName { get; set; }

        [NameInMap("DBClusterIPArrayAttribute")]
        [Validation(Required=false)]
        public string DBClusterIPArrayAttribute { get; set; }

        [NameInMap("WhiteListType")]
        [Validation(Required=false)]
        public string WhiteListType { get; set; }

        [NameInMap("SecurityGroupIds")]
        [Validation(Required=false)]
        public string SecurityGroupIds { get; set; }

        [NameInMap("ModifyMode")]
        [Validation(Required=false)]
        public string ModifyMode { get; set; }

    }

}
