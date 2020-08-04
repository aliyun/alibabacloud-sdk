// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class RunCommandResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("CommandId")]
        [Validation(Required=true)]
        public string CommandId { get; set; }

        [NameInMap("InvokeId")]
        [Validation(Required=true)]
        public string InvokeId { get; set; }

    }

}
