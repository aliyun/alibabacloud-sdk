// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class ApplyInvoiceRequest : TeaModel {
        [NameInMap("InvoiceAmount")]
        [Validation(Required=true)]
        public long InvoiceAmount { get; set; }

        [NameInMap("CustomerId")]
        [Validation(Required=true)]
        public long CustomerId { get; set; }

        [NameInMap("AddressId")]
        [Validation(Required=true)]
        public long AddressId { get; set; }

        [NameInMap("InvoicingType")]
        [Validation(Required=false)]
        public int? InvoicingType { get; set; }

        [NameInMap("ProcessWay")]
        [Validation(Required=false)]
        public int? ProcessWay { get; set; }

        [NameInMap("ApplyUserNick")]
        [Validation(Required=true)]
        public string ApplyUserNick { get; set; }

        [NameInMap("SelectedIds")]
        [Validation(Required=true)]
        public List<long> SelectedIds { get; set; }

        [NameInMap("InvoiceByAmount")]
        [Validation(Required=false)]
        public bool? InvoiceByAmount { get; set; }

    }

}
