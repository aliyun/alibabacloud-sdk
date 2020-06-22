// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryBillRequest : TeaModel {
        [NameInMap("BillingCycle")]
        [Validation(Required=true)]
        public string BillingCycle { get; set; }

        [NameInMap("Type")]
        [Validation(Required=false)]
        public string Type { get; set; }

        [NameInMap("ProductCode")]
        [Validation(Required=false)]
        public string ProductCode { get; set; }

        [NameInMap("ProductType")]
        [Validation(Required=false)]
        public string ProductType { get; set; }

        [NameInMap("SubscriptionType")]
        [Validation(Required=false)]
        public string SubscriptionType { get; set; }

        [NameInMap("IsHideZeroCharge")]
        [Validation(Required=false)]
        public bool? IsHideZeroCharge { get; set; }

        [NameInMap("IsDisplayLocalCurrency")]
        [Validation(Required=false)]
        public bool? IsDisplayLocalCurrency { get; set; }

        [NameInMap("PageNum")]
        [Validation(Required=false)]
        public int? PageNum { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
