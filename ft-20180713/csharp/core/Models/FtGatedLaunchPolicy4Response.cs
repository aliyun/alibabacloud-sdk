// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ft20180713.Models
{
    public class FtGatedLaunchPolicy4Response : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("IsGatedLaunch")]
        [Validation(Required=true)]
        public string IsGatedLaunch { get; set; }

    }

}
