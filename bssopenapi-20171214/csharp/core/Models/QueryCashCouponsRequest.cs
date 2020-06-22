// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryCashCouponsRequest : TeaModel {
        [NameInMap("ExpiryTimeEnd")]
        [Validation(Required=false)]
        public string ExpiryTimeEnd { get; set; }

        [NameInMap("ExpiryTimeStart")]
        [Validation(Required=false)]
        public string ExpiryTimeStart { get; set; }

        [NameInMap("EffectiveOrNot")]
        [Validation(Required=false)]
        public bool? EffectiveOrNot { get; set; }

    }

}
