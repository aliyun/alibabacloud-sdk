// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryAccountBalanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public QueryAccountBalanceResponseData Data { get; set; }
        public class QueryAccountBalanceResponseData : TeaModel {
            [NameInMap("AvailableAmount")]
            [Validation(Required=true)]
            public string AvailableAmount { get; set; }
            [NameInMap("AvailableCashAmount")]
            [Validation(Required=true)]
            public string AvailableCashAmount { get; set; }
            [NameInMap("CreditAmount")]
            [Validation(Required=true)]
            public string CreditAmount { get; set; }
            [NameInMap("MybankCreditAmount")]
            [Validation(Required=true)]
            public string MybankCreditAmount { get; set; }
            [NameInMap("Currency")]
            [Validation(Required=true)]
            public string Currency { get; set; }
        };

    }

}
