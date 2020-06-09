// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class BindInstanceDomainsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SuccessCount")]
        [Validation(Required=true)]
        public int? SuccessCount { get; set; }

        [NameInMap("FailedCount")]
        [Validation(Required=true)]
        public int? FailedCount { get; set; }

    }

}
