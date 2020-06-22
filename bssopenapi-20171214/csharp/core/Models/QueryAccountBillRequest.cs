// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryAccountBillRequest : TeaModel {
        [NameInMap("BillingCycle")]
        [Validation(Required=true)]
        public string BillingCycle { get; set; }

        [NameInMap("PageNum")]
        [Validation(Required=false)]
        public int? PageNum { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("OwnerID")]
        [Validation(Required=false)]
        public long OwnerID { get; set; }

        [NameInMap("IsGroupByProduct")]
        [Validation(Required=false)]
        public bool? IsGroupByProduct { get; set; }

        [NameInMap("ProductCode")]
        [Validation(Required=false)]
        public string ProductCode { get; set; }

    }

}
