// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class ModifyDBClusterSSLRequest : TeaModel {
        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("SSLEnabled")]
        [Validation(Required=true)]
        public string SSLEnabled { get; set; }

        [NameInMap("DBEndpointId")]
        [Validation(Required=false)]
        public string DBEndpointId { get; set; }

        [NameInMap("NetType")]
        [Validation(Required=false)]
        public string NetType { get; set; }

    }

}
