// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryAccountTransactionsRequest : TeaModel {
        [NameInMap("TransactionNumber")]
        [Validation(Required=false)]
        public string TransactionNumber { get; set; }

        [NameInMap("RecordID")]
        [Validation(Required=false)]
        public string RecordID { get; set; }

        [NameInMap("TransactionChannelSN")]
        [Validation(Required=false)]
        public string TransactionChannelSN { get; set; }

        [NameInMap("CreateTimeStart")]
        [Validation(Required=false)]
        public string CreateTimeStart { get; set; }

        [NameInMap("CreateTimeEnd")]
        [Validation(Required=false)]
        public string CreateTimeEnd { get; set; }

        [NameInMap("PageNum")]
        [Validation(Required=false)]
        public int? PageNum { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
