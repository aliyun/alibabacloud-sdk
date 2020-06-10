// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class InstallMonitoringAgentRequest : TeaModel {
        [NameInMap("Force")]
        [Validation(Required=false)]
        public bool? Force { get; set; }

        [NameInMap("InstanceIds")]
        [Validation(Required=true)]
        public List<string> InstanceIds { get; set; }

    }

}
