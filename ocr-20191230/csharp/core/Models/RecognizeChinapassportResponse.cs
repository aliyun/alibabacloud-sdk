// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ocr20191230.Models
{
    public class RecognizeChinapassportResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeChinapassportResponseData Data { get; set; }
        public class RecognizeChinapassportResponseData : TeaModel {
            [NameInMap("Authority")]
            [Validation(Required=true)]
            public string Authority { get; set; }
            [NameInMap("BirthDate")]
            [Validation(Required=true)]
            public string BirthDate { get; set; }
            [NameInMap("BirthDay")]
            [Validation(Required=true)]
            public string BirthDay { get; set; }
            [NameInMap("BirthPlace")]
            [Validation(Required=true)]
            public string BirthPlace { get; set; }
            [NameInMap("BirthPlaceRaw")]
            [Validation(Required=true)]
            public string BirthPlaceRaw { get; set; }
            [NameInMap("Country")]
            [Validation(Required=true)]
            public string Country { get; set; }
            [NameInMap("ExpiryDate")]
            [Validation(Required=true)]
            public string ExpiryDate { get; set; }
            [NameInMap("ExpiryDay")]
            [Validation(Required=true)]
            public string ExpiryDay { get; set; }
            [NameInMap("IssueDate")]
            [Validation(Required=true)]
            public string IssueDate { get; set; }
            [NameInMap("IssuePlace")]
            [Validation(Required=true)]
            public string IssuePlace { get; set; }
            [NameInMap("IssuePlaceRaw")]
            [Validation(Required=true)]
            public string IssuePlaceRaw { get; set; }
            [NameInMap("LineZero")]
            [Validation(Required=true)]
            public string LineZero { get; set; }
            [NameInMap("LineOne")]
            [Validation(Required=true)]
            public string LineOne { get; set; }
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("NameChinese")]
            [Validation(Required=true)]
            public string NameChinese { get; set; }
            [NameInMap("NameChineseRaw")]
            [Validation(Required=true)]
            public string NameChineseRaw { get; set; }
            [NameInMap("PassportNo")]
            [Validation(Required=true)]
            public string PassportNo { get; set; }
            [NameInMap("PersonId")]
            [Validation(Required=true)]
            public string PersonId { get; set; }
            [NameInMap("Sex")]
            [Validation(Required=true)]
            public string Sex { get; set; }
            [NameInMap("SourceCountry")]
            [Validation(Required=true)]
            public string SourceCountry { get; set; }
            [NameInMap("Success")]
            [Validation(Required=true)]
            public bool? Success { get; set; }
            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }
        };

    }

}
