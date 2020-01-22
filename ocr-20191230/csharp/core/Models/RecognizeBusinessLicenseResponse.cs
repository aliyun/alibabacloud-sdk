// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.OCR.Models
{
    public class RecognizeBusinessLicenseResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeBusinessLicenseResponseData Data { get; set; }
        public class RecognizeBusinessLicenseResponseData : TeaModel {
            [NameInMap("Angle")]
            [Validation(Required=true)]
            public string Angle { get; set; }
            [NameInMap("RegisterNumber")]
            [Validation(Required=true)]
            public string RegisterNumber { get; set; }
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }
            [NameInMap("LegalPerson")]
            [Validation(Required=true)]
            public string LegalPerson { get; set; }
            [NameInMap("EstablishDate")]
            [Validation(Required=true)]
            public string EstablishDate { get; set; }
            [NameInMap("ValidPeriod")]
            [Validation(Required=true)]
            public string ValidPeriod { get; set; }
            [NameInMap("Address")]
            [Validation(Required=true)]
            public string Address { get; set; }
            [NameInMap("Capital")]
            [Validation(Required=true)]
            public string Capital { get; set; }
            [NameInMap("Business")]
            [Validation(Required=true)]
            public string Business { get; set; }
            [NameInMap("Emblem")]
            [Validation(Required=true)]
            public RecognizeBusinessLicenseResponseDataEmblem Emblem { get; set; }
            public class RecognizeBusinessLicenseResponseDataEmblem : TeaModel {
                [NameInMap("Top")]
                [Validation(Required=true)]
                public int? Top { get; set; }

                [NameInMap("Left")]
                [Validation(Required=true)]
                public int? Left { get; set; }

                [NameInMap("Height")]
                [Validation(Required=true)]
                public int? Height { get; set; }

                [NameInMap("Width")]
                [Validation(Required=true)]
                public int? Width { get; set; }

            }
            [NameInMap("Title")]
            [Validation(Required=true)]
            public RecognizeBusinessLicenseResponseDataTitle Title { get; set; }
            public class RecognizeBusinessLicenseResponseDataTitle : TeaModel {
                [NameInMap("Top")]
                [Validation(Required=true)]
                public int? Top { get; set; }

                [NameInMap("Left")]
                [Validation(Required=true)]
                public int? Left { get; set; }

                [NameInMap("Height")]
                [Validation(Required=true)]
                public int? Height { get; set; }

                [NameInMap("Width")]
                [Validation(Required=true)]
                public int? Width { get; set; }

            }
            [NameInMap("Stamp")]
            [Validation(Required=true)]
            public RecognizeBusinessLicenseResponseDataStamp Stamp { get; set; }
            public class RecognizeBusinessLicenseResponseDataStamp : TeaModel {
                [NameInMap("Top")]
                [Validation(Required=true)]
                public int? Top { get; set; }

                [NameInMap("Left")]
                [Validation(Required=true)]
                public int? Left { get; set; }

                [NameInMap("Height")]
                [Validation(Required=true)]
                public int? Height { get; set; }

                [NameInMap("Width")]
                [Validation(Required=true)]
                public int? Width { get; set; }

            }
            [NameInMap("QRCode")]
            [Validation(Required=true)]
            public RecognizeBusinessLicenseResponseDataQRCode QRCode { get; set; }
            public class RecognizeBusinessLicenseResponseDataQRCode : TeaModel {
                [NameInMap("Top")]
                [Validation(Required=true)]
                public int? Top { get; set; }

                [NameInMap("Left")]
                [Validation(Required=true)]
                public int? Left { get; set; }

                [NameInMap("Height")]
                [Validation(Required=true)]
                public int? Height { get; set; }

                [NameInMap("Width")]
                [Validation(Required=true)]
                public int? Width { get; set; }

            }
        };

    }

}
