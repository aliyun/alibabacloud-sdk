// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class ChangeResellerConsumeAmountRequest : TeaModel {
        [NameInMap("AdjustType")]
        [Validation(Required=true)]
        public string AdjustType { get; set; }

        [NameInMap("Amount")]
        [Validation(Required=true)]
        public string Amount { get; set; }

        [NameInMap("Currency")]
        [Validation(Required=true)]
        public string Currency { get; set; }

        [NameInMap("BusinessType")]
        [Validation(Required=true)]
        public string BusinessType { get; set; }

        [NameInMap("Source")]
        [Validation(Required=true)]
        public string Source { get; set; }

        [NameInMap("OutBizId")]
        [Validation(Required=true)]
        public string OutBizId { get; set; }

        [NameInMap("ExtendMap")]
        [Validation(Required=false)]
        public string ExtendMap { get; set; }

    }

}
