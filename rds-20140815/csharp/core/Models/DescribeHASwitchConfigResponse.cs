// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeHASwitchConfigResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("HAConfig")]
        [Validation(Required=true)]
        public string HAConfig { get; set; }

        [NameInMap("ManualHATime")]
        [Validation(Required=true)]
        public string ManualHATime { get; set; }

    }

}
