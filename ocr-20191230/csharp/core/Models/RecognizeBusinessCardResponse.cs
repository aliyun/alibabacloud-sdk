// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeBusinessCardResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeBusinessCardResponseData Data { get; set; }
        public class RecognizeBusinessCardResponseData : TeaModel {
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("Companies")]
            [Validation(Required=true)]
            public List<string> Companies { get; set; }
            [NameInMap("Departments")]
            [Validation(Required=true)]
            public List<string> Departments { get; set; }
            [NameInMap("Titles")]
            [Validation(Required=true)]
            public List<string> Titles { get; set; }
            [NameInMap("CellPhoneNumbers")]
            [Validation(Required=true)]
            public List<string> CellPhoneNumbers { get; set; }
            [NameInMap("OfficePhoneNumbers")]
            [Validation(Required=true)]
            public List<string> OfficePhoneNumbers { get; set; }
            [NameInMap("Addresses")]
            [Validation(Required=true)]
            public List<string> Addresses { get; set; }
            [NameInMap("Emails")]
            [Validation(Required=true)]
            public List<string> Emails { get; set; }
        };

    }

}
