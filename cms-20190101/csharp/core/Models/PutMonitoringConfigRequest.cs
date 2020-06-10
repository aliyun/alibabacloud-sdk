// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutMonitoringConfigRequest : TeaModel {
        [NameInMap("AutoInstall")]
        [Validation(Required=false)]
        public bool? AutoInstall { get; set; }

        [NameInMap("EnableInstallAgentNewECS")]
        [Validation(Required=false)]
        public bool? EnableInstallAgentNewECS { get; set; }

    }

}
