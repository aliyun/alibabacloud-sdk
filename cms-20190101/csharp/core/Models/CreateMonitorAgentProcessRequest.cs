// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class CreateMonitorAgentProcessRequest : TeaModel {
        [NameInMap("ProcessName")]
        [Validation(Required=true)]
        public string ProcessName { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("ProcessUser")]
        [Validation(Required=false)]
        public string ProcessUser { get; set; }

    }

}
