// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class CreateResellerUserQuotaRequest : TeaModel {
        [NameInMap("Amount")]
        [Validation(Required=true)]
        public string Amount { get; set; }

        [NameInMap("Currency")]
        [Validation(Required=true)]
        public string Currency { get; set; }

        [NameInMap("OutBizId")]
        [Validation(Required=false)]
        public string OutBizId { get; set; }

    }

}
