// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeLimitationResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Limitation")]
        [Validation(Required=true)]
        public string Limitation { get; set; }

        [NameInMap("Value")]
        [Validation(Required=true)]
        public string Value { get; set; }

    }

}
