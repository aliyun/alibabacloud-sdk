// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeDriverLicenseResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeDriverLicenseResponseData Data { get; set; }
        public class RecognizeDriverLicenseResponseData : TeaModel {
            [NameInMap("FaceResult")]
            [Validation(Required=true)]
            public RecognizeDriverLicenseResponseDataFaceResult FaceResult { get; set; }
            public class RecognizeDriverLicenseResponseDataFaceResult : TeaModel {
                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("LicenseNumber")]
                [Validation(Required=true)]
                public string LicenseNumber { get; set; }

                [NameInMap("VehicleType")]
                [Validation(Required=true)]
                public string VehicleType { get; set; }

                [NameInMap("StartDate")]
                [Validation(Required=true)]
                public string StartDate { get; set; }

                [NameInMap("EndDate")]
                [Validation(Required=true)]
                public string EndDate { get; set; }

                [NameInMap("IssueDate")]
                [Validation(Required=true)]
                public string IssueDate { get; set; }

                [NameInMap("Address")]
                [Validation(Required=true)]
                public string Address { get; set; }

                [NameInMap("Gender")]
                [Validation(Required=true)]
                public string Gender { get; set; }

            }
            [NameInMap("BackResult")]
            [Validation(Required=true)]
            public RecognizeDriverLicenseResponseDataBackResult BackResult { get; set; }
            public class RecognizeDriverLicenseResponseDataBackResult : TeaModel {
                [NameInMap("ArchiveNumber")]
                [Validation(Required=true)]
                public string ArchiveNumber { get; set; }

            }
        };

    }

}
