// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class GetCustomerAccountInfoResponse : TeaModel {
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
        public GetCustomerAccountInfoResponseData Data { get; set; }
        public class GetCustomerAccountInfoResponseData : TeaModel {
            [NameInMap("LoginEmail")]
            [Validation(Required=true)]
            public string LoginEmail { get; set; }
            [NameInMap("AccountType")]
            [Validation(Required=true)]
            public string AccountType { get; set; }
            [NameInMap("Mpk")]
            [Validation(Required=true)]
            public long Mpk { get; set; }
            [NameInMap("HostingStatus")]
            [Validation(Required=true)]
            public string HostingStatus { get; set; }
            [NameInMap("CreditLimitStatus")]
            [Validation(Required=true)]
            public string CreditLimitStatus { get; set; }
            [NameInMap("IsCertified")]
            [Validation(Required=true)]
            public bool? IsCertified { get; set; }
        };

    }

}
