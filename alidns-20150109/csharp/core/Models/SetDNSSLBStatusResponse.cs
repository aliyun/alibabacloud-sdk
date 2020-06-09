// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class SetDNSSLBStatusResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RecordCount")]
        [Validation(Required=true)]
        public long RecordCount { get; set; }

        [NameInMap("Open")]
        [Validation(Required=true)]
        public bool? Open { get; set; }

    }

}
