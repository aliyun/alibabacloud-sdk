// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitoringAgentConfigResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AutoInstall")]
        [Validation(Required=true)]
        public bool? AutoInstall { get; set; }

        [NameInMap("EnableInstallAgentNewECS")]
        [Validation(Required=true)]
        public bool? EnableInstallAgentNewECS { get; set; }

        [NameInMap("EnableActiveAlert")]
        [Validation(Required=true)]
        public string EnableActiveAlert { get; set; }

    }

}
