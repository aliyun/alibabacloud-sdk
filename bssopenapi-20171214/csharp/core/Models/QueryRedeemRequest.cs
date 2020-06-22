// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryRedeemRequest : TeaModel {
        [NameInMap("ExpiryTimeStart")]
        [Validation(Required=false)]
        public string ExpiryTimeStart { get; set; }

        [NameInMap("ExpiryTimeEnd")]
        [Validation(Required=false)]
        public string ExpiryTimeEnd { get; set; }

        [NameInMap("EffectiveOrNot")]
        [Validation(Required=false)]
        public bool? EffectiveOrNot { get; set; }

        [NameInMap("PageNum")]
        [Validation(Required=false)]
        public int? PageNum { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
