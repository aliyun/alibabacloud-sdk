// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class CheckDataConsistencyRequest : TeaModel {
        [NameInMap("CurrentTimestamp")]
        [Validation(Required=false)]
        public long CurrentTimestamp { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ProxyUserId")]
        [Validation(Required=false)]
        public string ProxyUserId { get; set; }

        [NameInMap("Pid")]
        [Validation(Required=true)]
        public string Pid { get; set; }

        [NameInMap("AppType")]
        [Validation(Required=true)]
        public string AppType { get; set; }

    }

}
