// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.OCR.Models
{
    public class RecognizeDrivingLicenseResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeDrivingLicenseResponseData Data { get; set; }
        public class RecognizeDrivingLicenseResponseData : TeaModel {
            [NameInMap("FaceResult")]
            [Validation(Required=true)]
            public RecognizeDrivingLicenseResponseDataFaceResult FaceResult { get; set; }
            public class RecognizeDrivingLicenseResponseDataFaceResult : TeaModel {
                [NameInMap("PlateNumber")]
                [Validation(Required=true)]
                public string PlateNumber { get; set; }

                [NameInMap("VehicleType")]
                [Validation(Required=true)]
                public string VehicleType { get; set; }

                [NameInMap("Owner")]
                [Validation(Required=true)]
                public string Owner { get; set; }

                [NameInMap("UseCharacter")]
                [Validation(Required=true)]
                public string UseCharacter { get; set; }

                [NameInMap("Address")]
                [Validation(Required=true)]
                public string Address { get; set; }

                [NameInMap("Model")]
                [Validation(Required=true)]
                public string Model { get; set; }

                [NameInMap("Vin")]
                [Validation(Required=true)]
                public string Vin { get; set; }

                [NameInMap("EngineNumber")]
                [Validation(Required=true)]
                public string EngineNumber { get; set; }

                [NameInMap("RegisterDate")]
                [Validation(Required=true)]
                public string RegisterDate { get; set; }

                [NameInMap("IssueDate")]
                [Validation(Required=true)]
                public string IssueDate { get; set; }

            }
            [NameInMap("BackResult")]
            [Validation(Required=true)]
            public RecognizeDrivingLicenseResponseDataBackResult BackResult { get; set; }
            public class RecognizeDrivingLicenseResponseDataBackResult : TeaModel {
                [NameInMap("ApprovedPassengerCapacity")]
                [Validation(Required=true)]
                public string ApprovedPassengerCapacity { get; set; }

                [NameInMap("ApprovedLoad")]
                [Validation(Required=true)]
                public string ApprovedLoad { get; set; }

                [NameInMap("FileNumber")]
                [Validation(Required=true)]
                public string FileNumber { get; set; }

                [NameInMap("GrossMass")]
                [Validation(Required=true)]
                public string GrossMass { get; set; }

                [NameInMap("EnergyType")]
                [Validation(Required=true)]
                public string EnergyType { get; set; }

                [NameInMap("InspectionRecord")]
                [Validation(Required=true)]
                public string InspectionRecord { get; set; }

                [NameInMap("OverallDimension")]
                [Validation(Required=true)]
                public string OverallDimension { get; set; }

                [NameInMap("TractionMass")]
                [Validation(Required=true)]
                public string TractionMass { get; set; }

                [NameInMap("UnladenMass")]
                [Validation(Required=true)]
                public string UnladenMass { get; set; }

                [NameInMap("PlateNumber")]
                [Validation(Required=true)]
                public string PlateNumber { get; set; }

            }
        };

    }

}
