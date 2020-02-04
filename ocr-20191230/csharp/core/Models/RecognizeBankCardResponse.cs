// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeBankCardResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeBankCardResponseData Data { get; set; }
        public class RecognizeBankCardResponseData : TeaModel {
            [NameInMap("BankName")]
            [Validation(Required=true)]
            public string BankName { get; set; }
            [NameInMap("CardNumber")]
            [Validation(Required=true)]
            public string CardNumber { get; set; }
            [NameInMap("ValidDate")]
            [Validation(Required=true)]
            public string ValidDate { get; set; }
        };

    }

}
