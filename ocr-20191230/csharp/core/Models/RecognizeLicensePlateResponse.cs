// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeLicensePlateResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeLicensePlateResponseData Data { get; set; }
        public class RecognizeLicensePlateResponseData : TeaModel {
            [NameInMap("Plates")]
            [Validation(Required=true)]
            public List<RecognizeLicensePlateResponseDataPlates> Plates { get; set; }
            public class RecognizeLicensePlateResponseDataPlates : TeaModel {
                    public float Confidence { get; set; }
                    public string PlateNumber { get; set; }
                    public string PlateType { get; set; }
                    public float PlateTypeConfidence { get; set; }
                    public RecognizeLicensePlateResponseDataPlatesRoi Roi { get; set; }
                    public class RecognizeLicensePlateResponseDataPlatesRoi : TeaModel {
                        [NameInMap("H")]
                        [Validation(Required=true)]
                        public int? H { get; set; }

                        [NameInMap("W")]
                        [Validation(Required=true)]
                        public int? W { get; set; }

                        [NameInMap("X")]
                        [Validation(Required=true)]
                        public int? X { get; set; }

                        [NameInMap("Y")]
                        [Validation(Required=true)]
                        public int? Y { get; set; }

                    }
            }
        };

    }

}
